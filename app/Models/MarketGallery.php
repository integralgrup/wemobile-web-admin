<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Market;

class MarketGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'market_gallery';

    protected $fillable = [
        'market_id',
        'image_id',
        'lang',
        'image',
        'alt',
        'sort',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    /**
     * Relationship: A gallery item belongs to a using area
     */
    public function Market()
    {
        return $this->belongsTo(Market::class, 'market_id', 'market_id');
    }
}
