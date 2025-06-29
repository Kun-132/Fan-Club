<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    Country::create([
        'country_name' => 'Myanmar',
        'slug' => 'myanmar',
    ]);

    Country::create([
        'country_name' => 'Japan',
        'slug' => 'japan',
    ]);

    Country::create([
        'country_name' => 'Foyer',
        'slug' => 'foyer',
    ]);
}

}
