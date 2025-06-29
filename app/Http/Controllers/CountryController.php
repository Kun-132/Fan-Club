<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    // Intro page
    public function intro()
    {
        $countries = Country::all();
        return view('front.intro', compact('countries'));
    }

    // Country page by slug
    public function show($slug)
    {
        $country = Country::where('slug', $slug)->firstOrFail();

        // Load only visible sections (status = show)
        $sections = $country->contentSections()
            ->where('status', 'show')
            ->orderBy('id', 'asc')
            ->get();

        return view('front.countries.page', compact('country', 'sections'));
    }
}
