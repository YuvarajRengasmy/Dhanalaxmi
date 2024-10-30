<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AlbumStoreRequest;
use App\Http\Requests\AlbumUpdateRequest;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $albums = Album::latest()->paginate(5);

        return view('admin.albums.index', compact('albums'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $albums = Album::latest()->paginate(5);

        return view('finovo.album', compact('albums'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $albums = Album::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.album', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
           
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           
        ]);

        // Create a new About instance
        $album = new Album();

        // Store each title and description
        $album->title = $request->title;
      

        // Handle Image One
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('album_images', 'public');
            $album->image = $path;
        }
       // Save the About instance to the database
        $album->save();

        // Redirect to a specific route or return success message
        return redirect()->route('albums.index')->with('success', 'Album information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(Album $album): View
    {
    
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album): View
    {
        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlbumUpdateRequest $request, Album $album): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image')) {
            if ($album->image) {
                Storage::disk('public')->delete($album->image);
            }
            $data['image'] = $request->file('image')->store('images/albums', 'public');
        }

       

        
        $album->update($data);

        return redirect()->route('albums.index')
                         ->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album): RedirectResponse
    {
        // Delete associated images
        if ($album->image) {
            Storage::disk('public')->delete($album->image);
        }
        $album->delete();
        return redirect()->route('albums.index')
                         ->with('success', 'Albums deleted successfully.');
    }
}
