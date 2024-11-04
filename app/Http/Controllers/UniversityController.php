<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\UniversityStoreRequest;
use App\Http\Requests\UniversityUpdateRequest;
use Illuminate\Support\Facades\Storage;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $universities = University::latest()->paginate(5);

        return view('admin.universities.index', compact('universities'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $universities = University::latest()->paginate(5);

        return view('finovo.university', compact('universities'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function view()
{
    // Fetch universities grouped by country
    $universitiesByCountry = \App\Models\University::all()->groupBy('location');
    
    // Pass the grouped data to the view
    return view('finovo.university', compact('universitiesByCountry'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // limit to 2MB
            'location' => 'required|string|max:255',
        ]);
    
        // Initialize data to save
        $data = [
            'name' => $request->input('name'),
            'location' => $request->input('location'),
        ];
    
        // Handle the file upload if an image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images/universities', 'public'); // saves in storage/app/public/images/universities
            $data['image'] = $path; // store the path to save in the database
        }
    
        // Create the new university record
        University::create($data);
    
        // Redirect to universities index with a success message
        return redirect()->route('universities.index')->with('success', 'University added successfully.');
    }
    public function show(University $university): View
    {
    
        return view('admin.universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university): View
    {
        return view('admin.universities.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the university record
        $university = University::findOrFail($id);
    
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // optional, up to 2MB
            'location' => 'required|string|max:255',
        ]);
    
        // Update name and location
        $university->name = $request->input('name');
        $university->location = $request->input('location');
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($university->image && Storage::disk('public')->exists($university->image)) {
                Storage::disk('public')->delete($university->image);
            }
    
            // Store the new image and save its path
            $path = $request->file('image')->store('images/universities', 'public');
            $university->image = $path;
        }
    
        // Save the updated record
        $university->save();
    
        // Redirect to the index with a success message
        return redirect()->route('universities.index')->with('success', 'University updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university): RedirectResponse
    {
        // Delete associated images
        if ($university->image) {
            Storage::disk('public')->delete($university->image);
        }
        $university->delete();
        return redirect()->route('universities.index')
                         ->with('success', 'Universities deleted successfully.');
    }
}
