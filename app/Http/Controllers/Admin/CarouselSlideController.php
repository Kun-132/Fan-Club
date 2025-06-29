<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarouselSlide;
use Illuminate\Support\Facades\Storage;

class CarouselSlideController extends Controller
{
    public function index()
    {
        $slides = CarouselSlide::orderBy('position')->get();
        return view('admin.carousel.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.carousel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'paragraph' => 'required|string',
            'button_text' => 'nullable|string',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' => 'nullable|integer'
        ]);

        // Handle file upload
        $imagePath = $request->file('background_image')->store('carousel', 'public');

        CarouselSlide::create([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'button_text' => $request->button_text,
            'background_image' => $imagePath,
            'position' => $request->position ?? CarouselSlide::max('position') + 1,
        ]);

        return redirect()->route('admin.carousel-slides.index')->with('success', 'Slide created.');
    }

    public function edit(CarouselSlide $carouselSlide)
    {
        return view('admin.carousel.edit', compact('carouselSlide'));
    }

    public function update(Request $request, CarouselSlide $carouselSlide)
    {
        $request->validate([
            'title' => 'required|string',
            'paragraph' => 'required|string',
            'button_text' => 'nullable|string',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'button_text' => $request->button_text,
        ];

        if ($request->hasFile('background_image')) {
            // Delete old image if exists
            if ($carouselSlide->background_image) {
                Storage::disk('public')->delete($carouselSlide->background_image);
            }
            
            // Store new image
            $data['background_image'] = $request->file('background_image')->store('carousel', 'public');
        }

        $carouselSlide->update($data);

        return redirect()->route('admin.carousel-slides.index')->with('success', 'Slide updated.');
    }
     public function destroy(CarouselSlide $carouselSlide)
    {
        // Delete the image from storage if it exists
        if ($carouselSlide->background_image) {
            Storage::disk('public')->delete($carouselSlide->background_image);
        }

        // Delete the database record
        $carouselSlide->delete();

        return redirect()->route('admin.carousel-slides.index')->with('success', 'Slide deleted.');
    }

}
