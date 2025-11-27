<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Language;
use App\Models\Blog;
use App\Models\BlogSlider;
use App\Models\About;
use App\Models\Menu;
use App\Models\Office;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Club;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductImage;
use App\Models\ProductFaq;
use App\Models\ProductType;
use App\Models\ProductFeature;
use App\Models\CatalogGroup;
use App\Models\Catalog;
use App\Models\CatalogFile;
use App\Models\Country;
use App\Models\Continent;
use App\Models\Project;
use App\Models\ProjectGallery;
use App\Models\Market;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        //dd($_SERVER['DOCUMENT_ROOT']);
        $slides = Slider::where('lang', app()->getLocale())->get();
        $languages = Language::all();
        $about = DB::table('about_home')->where('lang', app()->getLocale())->first();
        $about_sliders = DB::table('about_slider')->where('lang', app()->getLocale())->get();
        $about_certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get();
        $products = // Get products with related category
            Product::where('lang', app()->getLocale())
            ->with(['category' => function ($q) {
                $q->where('lang', app()->getLocale());
            }])
            ->get();
        $clubs = Club::where('lang', app()->getLocale())->get();
        $markets = Market::where('lang', app()->getLocale())->get();
        //dd($products);
        $countries = Country::where('lang', app()->getLocale())// with continent data
            ->with('continent')
            ->get()
            ->map(function ($country) {
                return [
                    'title' => $country->title,
                    'code' => $country->code,
                    'left' => $country->left,
                    'top' => $country->top,
                    'continent_title' => $country->continent ? $country->continent->title : null,
                    'continent_class' => $country->continent ? $country->continent->class : null,
                ];
            })
            ->toArray();
        $blog = Blog::where('lang', app()->getLocale())->limit(5)->get()->toArray();
        //dd($blog);
        $continents = Continent::where('lang', app()->getLocale())->with('countries')->get()->toArray();

        return view('home', compact('slides', 'languages', 'about', 'about_sliders', 'about_certificates', 'products', 'clubs', 'countries', 'continents', 'blog', 'markets'));
    }

    public function route($slug, $slug2 = null)
    {
        $menu = Menu::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->firstOrFail();
        //dd($menu);
        // If the menu item has a page_type of 'about', fetch the about data
        if($menu->page_type == 'about') {
            $about = About::where('lang', app()->getLocale())->first();
            $about_slider = DB::table('about_slider')->where('lang', app()->getLocale())->get()->toArray();
            $services = DB::table('about_how_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $what_we_do =  DB::table('about_what_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get()->toArray();
            $brands = Brand::where('lang', app()->getLocale())->get();
            $markets = Market::where('lang', app()->getLocale())->get();
            //debug($what_we_do);
            
            //dd($politics);
            return view('about', compact('about', 'services', 'what_we_do', 'certificates', 'about_slider', 'brands', 'markets'));
        }

        if($menu->page_type == 'product') {
            if($slug2 == null) {
                $products = Product::where(['lang' => app()->getLocale()])->with(['images', 'category'])->get();
                $categories = ProductCategory::where(['lang' => app()->getLocale(), 'parent_category_id' => 0 ])->with('children', 'products')->get();
                //dd($categories);
                //dd($products);
                return view('products', compact('products', 'categories', 'menu'));

            } else {
                $product = Product::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->with(['category', 'gallery', 'faqs', 'types', 'images', 'features'])->firstOrFail();
                
                return view('product', compact('product'));
            }
        }

        if($menu->page_type == 'market') {
            
                $market = Market::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->with(['gallery', 'faqs'])->firstOrFail();
                $markets = Market::where('lang', app()->getLocale())->get();
                $used_product_ids = array_map('trim', explode(',', $market->used_products));
                //dd($used_product_ids);
                $marketProducts = Product::where(['lang' => app()->getLocale()])
                    ->whereIn('product_id', $used_product_ids)
                    ->with(['gallery','images', 'category' => function ($q) {
                        $q->where('lang', app()->getLocale());
                    }])
                    ->orderBy('product_id', 'desc')
                    ->limit(5)->get();
                //dd($marketProducts);
                $products = Product::where(['lang' => app()->getLocale()])->with(['images', 'category'])->get();
                $faq = [];
                //dd($products);
                return view('market', compact('market','markets', 'marketProducts', 'products', 'faq'));
            
        }

        

        if($menu->page_type == 'project') {

            if($slug2 == null) {
                
                //$projects = Project::where(['lang' => app()->getLocale()])->with(['gallery'])->get();
                $projects = Project::where(['lang' => app()->getLocale()])->with(['gallery', 'country', 'country.continent'])->get();
                $continents = Continent::where('lang', app()->getLocale())->with('countries')->get();
                //dd($projects);
                return view('projects', compact('projects'));

            }else{
                $slug = $slug2;
                // Get project with related gallery images, and find project country and continent from countries table
                
                $project = Project::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->with(['gallery', 'country', 'country.continent'])->firstOrFail();
                //dd($project);

                $used_product_ids = $project->used_products;
                // Convert product ids, it is stored like this "[''1, 2, 3'']"
                $used_product_ids = str_replace(['[', ']', "'", '"'], '', $used_product_ids);
                // Convert product ids to array it is like "1,3"
                $used_product_ids = explode(',', $used_product_ids);
                //dd($used_product_ids);
                $products = Product::where(['lang' => app()->getLocale()])
                    ->whereIn('product_id', $used_product_ids)
                    ->with(['gallery','images'])
                    ->with(['category' => function ($q) {
                        $q->where('lang', app()->getLocale());
                    }])
                    ->limit(5)->get();
                //dd($products);
                return view('project', compact('project', 'products'));
            }

        }

        if($menu->page_type == 'blog') {
            if($slug2!= null) {
                // Get blog posts limit 5 as array
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(5)->get();
                //dd($blogs);
                $blog = Blog::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                //dd($blog);
                $blogSlider = BlogSlider::where(['lang' => app()->getLocale(), 'blog_id' => $blog->blog_id])->get();
                //dd($blogSlider);
                return view('blog-detail', compact('blog', 'blogs', 'blogSlider'));
            }else{
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(5)->get();
                //dd($blogs);
                return view('blog', compact('blogs'));
            }
        }

        if($menu->page_type == 'contact') {
            $offices = Office::where(['lang' => app()->getLocale()])->get();
            //dd($offices);
            return view('contact', compact('offices'));
        }

        if($menu->page_type == 'page') {
            $page = Page::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->first();
            //dd($page);
            return view('page', compact('page'));
        }

        //return view('page', compact('page'));
    }
}