<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\CountryContentSection;

class CountryContentSectionController extends Controller
{
    // ✅ Available detail pages (safe list)
    private $detailPages = [
        'walnut' => 'Walnut Project',
        'dance' => 'Dance Workshop',
        'museum' => 'Museum Visit',
        'krorma' => 'Krorma Handicraft',
        'visit' => 'Village Visit',
        'cashewnut' => 'Cashewnut Project',
    ];

    // List all content sections
    public function index()
    {
        $sections = CountryContentSection::with('country')->latest()->get();
        return view('admin.country_sections.index', compact('sections'));
    }

    // Show create form
    public function create()
    {
        $countries = Country::all();
        $detailPages = $this->detailPages;
        return view('admin.country_sections.create', compact('countries', 'detailPages'));
    }

    // Store new section
    public function store(Request $request)
    {
        $data = $request->validate([
            'country_id'   => 'required|exists:countries,id',
            'title'        => 'required|string',
            'paragraph'    => 'nullable|string',
            'media_type'   => 'required|in:image,video',
            'image'        => 'nullable|image',
            'image_2'      => 'nullable|image',
            'image_3'      => 'nullable|image',
            'video_src'    => 'nullable|string',
            'status'       => 'required|in:show,hide',
            'detail_page'  => 'nullable|string|in:' . implode(',', array_keys($this->detailPages)),
        ]);

        // Handle media upload
        if ($request->media_type === 'image' && $request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
            $data['video_src'] = null;
        } elseif ($request->media_type === 'video') {
            $data['image'] = null;
        } else {
            return back()->withErrors(['media_type' => 'Please provide a valid media.']);
        }

        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('uploads', 'public');
        }

        if ($request->hasFile('image_3')) {
            $data['image_3'] = $request->file('image_3')->store('uploads', 'public');
        }

        CountryContentSection::create($data);

        return redirect()->route('admin.country-sections.index')->with('success', 'Section created successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $section = CountryContentSection::findOrFail($id);
        $countries = Country::all();
        $detailPages = $this->detailPages;
        return view('admin.country_sections.edit', compact('section', 'countries', 'detailPages'));
    }

    // Update section
    public function update(Request $request, $id)
    {
        $section = CountryContentSection::findOrFail($id);

        $data = $request->validate([
            'country_id'   => 'required|exists:countries,id',
            'title'        => 'required|string',
            'paragraph'    => 'nullable|string',
            'image'        => 'nullable|image',
            'image_2'      => 'nullable|image',
            'image_3'      => 'nullable|image',
            'video_src'    => 'nullable|string',
            'status'       => 'required|in:show,hide',
            'detail_page'  => 'nullable|string|in:' . implode(',', array_keys($this->detailPages)),
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads', 'public');
        }

        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('uploads', 'public');
        }

        if ($request->hasFile('image_3')) {
            $data['image_3'] = $request->file('image_3')->store('uploads', 'public');
        }

        $section->update($data);

        return redirect()->route('admin.country-sections.index')->with('success', 'Section updated successfully.');
    }

    // Delete section
    public function destroy($id)
    {
        $section = CountryContentSection::findOrFail($id);
        $section->delete();
        return redirect()->route('admin.country-sections.index')->with('success', 'Section deleted successfully.');
    }
}
