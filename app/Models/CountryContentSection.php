<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryContentSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'title',
        'paragraph',
        'image',
        'image_2',     // Add this
        'image_3', 
        'video_src',
        'status',
        'detail_page',
    ];

    // Relationship with Country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
