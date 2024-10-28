<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $abouts = About::latest()->paginate(5);

        return view('admin.abouts.index', compact('abouts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $aboutData = About::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.about', compact('aboutData'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title_one' => 'required|string|max:255',
            'description_one' => 'required|string',
            'image_one' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_two' => 'required|string|max:255',
            'description_two' => 'required|string',
            'image_two' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_three' => 'required|string|max:255',
            'description_three' => 'required|string',
            'image_three' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new About instance
        $about = new About();

        // Store each title and description
        $about->title_one = $request->title_one;
        $about->description_one = $request->description_one;

        // Handle Image One
        if ($request->hasFile('image_one')) {
            $path_one = $request->file('image_one')->store('about_images', 'public');
            $about->image_one = $path_one;
        }

        // Store Title Two and Description Two
        $about->title_two = $request->title_two;
        $about->description_two = $request->description_two;

        // Handle Image Two
        if ($request->hasFile('image_two')) {
            $path_two = $request->file('image_two')->store('about_images', 'public');
            $about->image_two = $path_two;
        }

        // Store Title Three and Description Three
        $about->title_three = $request->title_three;
        $about->description_three = $request->description_three;

        // Handle Image Three
        if ($request->hasFile('image_three')) {
            $path_three = $request->file('image_three')->store('about_images', 'public');
            $about->image_three = $path_three;
        }

        // Save the About instance to the database
        $about->save();

        // Redirect to a specific route or return success message
        return redirect()->route('abouts.index')->with('success', 'About information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(About $about): View
    {
        return view('finovo.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about): View
    {
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, About $about): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image_one')) {
            if ($about->image_one) {
                Storage::disk('public')->delete($about->image_one);
            }
            $data['image_one'] = $request->file('image_one')->store('images/abouts', 'public');
        }

        if ($request->hasFile('image_two')) {
            if ($about->image_two) {
                Storage::disk('public')->delete($about->image_two);
            }
            $data['image_two'] = $request->file('image_two')->store('images/abouts', 'public');
        }

        if ($request->hasFile('image_three')) {
            if ($about->image_three) {
                Storage::disk('public')->delete($about->image_three);
            }
            $data['image_three'] = $request->file('image_three')->store('images/abouts', 'public');
        }

        if ($request->hasFile('image_four')) {
            if ($about->image_four) {
                Storage::disk('public')->delete($about->image_four);
            }
            $data['image_four'] = $request->file('image_four')->store('images/abouts', 'public');
        }

        $about->update($data);

        return redirect()->route('abouts.index')
                         ->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about): RedirectResponse
    {
        // Delete associated images
        if ($about->image_one) {
            Storage::disk('public')->delete($about->image_one);
        }
        if ($about->image_two) {
            Storage::disk('public')->delete($about->image_two);
        }
        if ($about->image_three) {
            Storage::disk('public')->delete($about->image_three);
        }
        if ($about->image_four) {
            Storage::disk('public')->delete($about->image_four);
        }

        $about->delete();

        return redirect()->route('abouts.index')
                         ->with('success', 'About deleted successfully.');
    }
}
