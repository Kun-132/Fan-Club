<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_name', 'slug'];

    // Relationship with CountryContentSection
    public function contentSections()
    {
        return $this->hasMany(CountryContentSection::class);
    }
}
