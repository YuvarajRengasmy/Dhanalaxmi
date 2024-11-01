<?php

namespace App\Http\Controllers;

use App\Models\Storie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\StorieStoreRequest;
use App\Http\Requests\StorieUpdateRequest;
use Illuminate\Support\Facades\Storage;

class StorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $stories = Storie::latest()->paginate(5);

        return view('admin.stories.index', compact('stories'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $stories = Storie::latest()->paginate(5);

        return view('finovo.storie', compact('stories'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $storie = Storie::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.storie', compact('storie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.stories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'review' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
           'rating' => 'required|string|max:255',
        ]);

        // Create a new About instance
        $storie = new Storie();

        // Store each title and description
        $storie->name = $request->name;
        $storie->photo = $request->photo;
        $storie->rating = $request->rating;
        $storie->review = $request->review;
        

        // Handle photo One
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('storie_photos', 'public');
            $storie->photo = $path;
        }
       // Save the About instance to the database
        $storie->save();

        // Redirect to a specific route or return success message
        return redirect()->route('stories.index')->with('success', 'Storie information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(Storie $storie): View
    {
    
        return view('admin.stories.show', compact('storie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storie $storie): View
    {
        return view('admin.stories.edit', compact('storie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorieUpdateRequest $request, Storie $storie): RedirectResponse
    {
        $data = $request->validated();

        // Handle photo updates with deletion of old photos if present
        if ($request->hasFile('photo')) {
            if ($storie->photo) {
                Storage::disk('public')->delete($storie->photo);
            }
            $data['photo'] = $request->file('photo')->store('photos/stories', 'public');
        }

       

        
        $storie->update($data);

        return redirect()->route('stories.index')
                         ->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storie $storie): RedirectResponse
    {
        // Delete associated photos
        if ($storie->photo) {
            Storage::disk('public')->delete($storie->photo);
        }
      
        

        $storie->delete();

        return redirect()->route('stories.index')
                         ->with('success', 'Stories deleted successfully.');
    }

    
  
}
