<?php

namespace App\Http\Controllers;

use App\Models\CarouselSlide;

class CarouselController extends Controller
{
    public function index()
    {
        $slides = CarouselSlide::orderBy('position')->get();
        return view('front.intro', compact('slides'));
    }
}