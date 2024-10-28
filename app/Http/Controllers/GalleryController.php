<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\GalleryStoreRequest;
use App\Http\Requests\GalleryUpdateRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $gallerys = Gallery::latest()->paginate(5);

        return view('admin.gallerys.index', compact('gallerys'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $gallerys = Gallery::latest()->paginate(5);

        return view('finovo.gallery', compact('gallerys'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $gallerys = Gallery::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.gallery', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
        
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);

        // Create a new About instance
        $gallery = new Gallery();


        // Handle Image One
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery_images', 'public');
            $gallery->image = $path;
        }
       // Save the About instance to the database
        $gallery->save();

        // Redirect to a specific route or return success message
        return redirect()->route('gallerys.index')->with('success', 'Gallery information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(Gallery $gallery): View
    {
    
        return view('admin.gallerys.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery): View
    {
        return view('admin.gallerys.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryUpdateRequest $request, Gallery $gallery): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image')) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $data['image'] = $request->file('image')->store('images/gallerys', 'public');
        }

       

        
        $Gallery->update($data);

        return redirect()->route('gallerys.index')
                         ->with('success', 'Gallery updated successfully.');
    }


    public function destroy(Gallery $gallery): RedirectResponse
    {
        // Delete associated images
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }
        $Gallery->delete();
        return redirect()->route('gallerys.index')
                         ->with('success', 'Gallerys deleted successfully.');
    }
}
