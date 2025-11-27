<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Market;

class MarketFaq extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'market_faq';

    protected $fillable = [
        'market_id',
        'question_id',
        'lang',
        'title',
        'description',
        'sort'
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at',
        'deleted_at',
    ];

    // Define relationship with the Market model
    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id', 'market_id');
    }

}
