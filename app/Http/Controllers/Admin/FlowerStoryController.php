<?php

// app/Http/Controllers/Admin/FlowerStoryController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FlowerStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlowerStoryController extends Controller
{
    public function index()
    {
        $stories = FlowerStory::latest()->paginate(10);
        return view('admin.flower-stories.index', compact('stories'));
    }

    public function create()
    {
        return view('admin.flower-stories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ja' => 'nullable|string|max:255',
            'title_mm' => 'nullable|string|max:255',
            'title_kh' => 'nullable|string|max:255',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paragraph_en' => 'nullable|string',
            'paragraph_ja' => 'nullable|string',
            'paragraph_mm' => 'nullable|string',
            'paragraph_kh' => 'nullable|string',
        ]);

        $imagePaths = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("image$i")) {
                $imagePaths["image$i"] = $request->file("image$i")->store('flower-stories', 'public');
            }
        }

        $story = FlowerStory::create(array_merge($validated, $imagePaths));

        return redirect()->route('admin.flower-stories.index')->with('success', 'Story created successfully.');
    }

    public function show(FlowerStory $flowerStory)
    {
        return view('admin.flower-stories.show', compact('flowerStory'));
    }

    public function edit(FlowerStory $flowerStory)
    {
        return view('admin.flower-stories.edit', compact('flowerStory'));
    }

    public function update(Request $request, FlowerStory $flowerStory)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ja' => 'nullable|string|max:255',
            'title_mm' => 'nullable|string|max:255',
            'title_kh' => 'nullable|string|max:255',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paragraph_en' => 'nullable|string',
            'paragraph_ja' => 'nullable|string',
            'paragraph_mm' => 'nullable|string',
            'paragraph_kh' => 'nullable|string',
        ]);

        $imagePaths = [];
        for ($i = 1; $i <= 4; $i++) {
            if ($request->hasFile("image$i")) {
                // Delete old image if exists
                if ($flowerStory->{"image$i"}) {
                    Storage::disk('public')->delete($flowerStory->{"image$i"});
                }
                $imagePaths["image$i"] = $request->file("image$i")->store('flower-stories', 'public');
            }
        }

        $flowerStory->update(array_merge($validated, $imagePaths));

        return redirect()->route('admin.flower-stories.index')->with('success', 'Story updated successfully.');
    }

    public function destroy(FlowerStory $flowerStory)
    {
        // Delete all images
        for ($i = 1; $i <= 4; $i++) {
            if ($flowerStory->{"image$i"}) {
                Storage::disk('public')->delete($flowerStory->{"image$i"});
            }
        }

        $flowerStory->delete();

        return redirect()->route('admin.flower-stories.index')->with('success', 'Story deleted successfully.');
    }
}