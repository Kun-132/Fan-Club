<?php

// app/Models/FlowerStory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FlowerStory extends Model
{
    protected $fillable = [
        'title_en',
        'title_ja',
        'title_mm',
        'title_kh',
        'slug',
        'image1',
        'image2',
        'image3',
        'image4',
        'paragraph_en',
        'paragraph_ja',
        'paragraph_mm',
        'paragraph_kh'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($story) {
            $story->slug = Str::slug($story->title_en);
        });

        static::updating(function ($story) {
            $story->slug = Str::slug($story->title_en);
        });
    }
}