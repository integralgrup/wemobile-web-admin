<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\Product;
use App\Models\MarketGallery;
use App\Models\MarketFaq;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use Illuminate\Support\Facades\DB; // For database operations

class MarketController extends Controller
{
    protected $languages;
    protected $products;

    public function __construct()
    {
        $this->languages = Language::all();
        $this->products = Product::where('lang', 'en')->get();
        view()->share('languages', $this->languages);
        view()->share('products', $this->products);
    }
    // Display a list of markets
    public function index()
    {
        $markets = Market::where('lang', app()->getLocale())->get();
        return view('admin.market.index', compact('markets'));
    }

    // Show form to create a new market
    public function create()
    {

        return view('admin.market.create');
    }

    // Store new market in database
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->has('market_id')) {
                $market_id = $request->market_id; // Use the provided market_id
            }else{
                $market_id = Market::max('market_id') + 1; // Increment the maximum market_id by 1
                if (!$market_id) {
                    $market_id = 1; // If no markets exist, start with 1
                }
            }
        try {
            
            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'lang_'.$language->lang_code => 'required|string|max:10',
                        'title_'.$language->lang_code => 'required|string|max:100',
                        'title_2_'.$language->lang_code => 'nullable|string|max:100',
                        'description_'.$language->lang_code => 'required|string',
                        'seo_url_'.$language->lang_code => 'required|string|max:255',
                        'image_'.$language->lang_code => 'nullable|image',
                        'icon_image_'.$language->lang_code => 'nullable|image',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'used_products_'.$language->lang_code => 'nullable|array',
                        'seo_title_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_description_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_keywords_'.$language->lang_code => 'nullable|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->market_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                if ($request->hasFile('icon_image_en') || $request->hasFile('icon_image_' . $language->lang_code)) {
                    $tmpIconImgPath = createTmpFile($request, 'icon_image_en', $this->languages[0]);
                    $iconImageName = moveFile($request,$language,'icon_image_' . $language->lang_code, 'icon_image_en', 'title_' . $language->lang_code, 'title_en', $language->market_images_folder, $tmpIconImgPath);
                    //dd($imageName);
                }else{
                    $iconImageName = $request->input('old_icon_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                $used_products = $request->input('used_products_'.$language->lang_code) ?? $request->input('used_products_en') ?? [];

                $data = [
                    'lang' => $language->lang_code,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'title_2' => $request->input('title_2_'.$language->lang_code) ?? $request->input('title_2_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'seo_url' => $request->input('seo_url_'.$language->lang_code) ?? $request->input('seo_url_en'),
                    'image' => $imageName,
                    'icon_image' => $iconImageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'used_products' => implode(',', $used_products),
                    'seo_title' => $request->input('seo_title_'.$language->lang_code) ?? $request->input('seo_title_en'),
                    'seo_description' => $request->input('seo_description_'.$language->lang_code) ?? $request->input('seo_description_en'),
                    'seo_keywords' => $request->input('seo_keywords_'.$language->lang_code) ?? $request->input('seo_keywords_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? $request->input('sort_en') ?? 0,
                ];

                Market::updateOrCreate(
                    ['market_id' => $market_id, 'lang' => $language->lang_code],
                    $data
                );

                
            }

            return redirect()->route('admin.markets.index')->with('success', 'Market başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.markets.index')->with('error', 'Market kaydedilirken bir hata oluştu!');
        }
    }

    // Show form to edit project
    public function edit($id)
    {
        $languages = Language::all();
        $markets = Market::where('market_id', $id)->get();

        return view('admin.market.edit', compact('markets', 'languages'));
    }

   

    // Delete sector
    public function destroy($market_id)
    {
        $sector = Market::where('market_id', $market_id)->get();
        // Also delete related gallery items if needed
        foreach ($sector as $item) {
            $item->gallery()->delete();
        }
        $sector->each->delete();
        return redirect()->route('admin.market.index')->with('success', 'Market başarıyla silindi!');
    }


    // Project Gallery methods will go here
    public function galleryIndex($id)
    {
        $markets = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = MarketGallery::where('market_id', $id)->where('lang', app()->getLocale())->get();
        return view('admin.market.gallery.index', compact('markets', 'gallery'));
    }

    public function galleryCreate($id)
    {
        $markets = Market::findOrFail($id);
        return view('admin.market.gallery.create', compact('markets', 'id'));
    }

    public function galleryStore(Request $request, $id)
    {
        try {

            $markets = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('market_gallery')->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific project
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this project, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->market_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'market_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                MarketGallery::updateOrCreate(
                    ['market_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.markets.gallery.index', $id)->with('success', 'Market görseli başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.market.gallery.index', $id)->with('error', 'Market görseli eklenirken bir hata oluştu.');
        }
    }

    public function galleryEdit($id, $galleryId)
    {
        $markets = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = MarketGallery::where('market_id', $id)->where('image_id', $galleryId)->get();
        return view('admin.market.gallery.edit', compact('markets', 'gallery'));
    }

    

    public function galleryDestroy($id, $galleryId)
    {
        try {
            $gallery = MarketGallery::findOrFail($galleryId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $gallery->image);
            $gallery->delete();
            return redirect()->route('admin.market.gallery.index', $id)->with('success', 'Market görseli başarıyla silindi!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.market.gallery.index', $id)->with('error', 'Market görseli silinirken bir hata oluştu.');
        }
    }

    // faq functions

    public function faqIndex($id)
    {
        $market = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        //dd($markets);
        $faqs = $market->faqs; // Using the relationship defined in the Market model
        return view('admin.market.faq.index', compact('market', 'faqs'));
    }

    public function faqCreate($id)
    {
        $market = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        return view('admin.market.faq.create', compact('market'));
    }

    public function faqStore(Request $request, $id)
    {
        try {
        
            $market = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('question_id')){
                $question_id = $request->question_id; // Use the provided question_id
            }else{
                $question_id = DB::table('market_faq')->where('market_id', $id)->max('question_id') + 1; // Increment the maximum question_id by 1 for the specific market
                if (!$question_id) {
                    $question_id = 1; // If no faqs exist for this market, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'description_'.$language->lang_code => 'required|string',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                $data = [
                    'market_id' => $id,
                    'question_id' => $question_id,
                    'lang' => $language->lang_code,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                MarketFaq::updateOrCreate(
                    ['market_id' => $id, 'question_id' => $question_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.markets.faq.index', $id)->with('success', 'SSS başarıyla kaydedildi!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.markets.faq.index', $id)->with('error', 'SSS eklenirken bir hata oluştu.');
        }
    }

    public function faqEdit($id, $faqId)
    {
        $market = Market::where('market_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $faqs = MarketFaq::where('market_id', $id)->where('question_id', $faqId)->get();
        return view('admin.market.faq.edit', compact('market', 'faqs'));
    }

    public function faqDestroy($id, $faqId)
    {
        try {
            $faq = MarketFaq::where('question_id', $faqId)->get();
            foreach ($faq as $faq) {
                $faq->delete();
            }
            return redirect()->route('admin.markets.faq.index', $id)->with('success', 'SSS başarıyla silindi!');
        } catch (\Throwable $th) {
            die($th->getMessage() );
            return redirect()->route('admin.markets.faq.index', $id)->with('error', 'SSS silinirken bir hata oluştu.');
        }
    }

}
