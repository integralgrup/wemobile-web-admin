<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MarketGallery;
use App\Models\MarketFaq;

class Market extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'market';

    protected $fillable = [
        'lang',
        'market_id',
        'title',
        'title_2',
        'description',
        'seo_url',
        'image',
        'icon_image',
        'alt',
        'used_products',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A project has many gallery items
     */
    public function gallery()
    {
        return $this->hasMany(MarketGallery::class, 'market_id', 'market_id')->where('lang', app()->getLocale())->orderBy('sort');
    }

    public function faqs()
    {
        return $this->hasMany(MarketFaq::class, 'market_id', 'market_id')->where('lang', app()->getLocale())->orderBy('sort');
    }


}