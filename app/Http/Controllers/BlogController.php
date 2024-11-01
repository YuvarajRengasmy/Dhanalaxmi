<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::latest()->paginate(5);

        return view('admin.blogs.index', compact('blogs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $blogs = Blog::latest()->paginate(5);

        return view('finovo.blogs', compact('blogs'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $blogs = Blog::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.viewblog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_one' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_two' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_three' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'array',
            'category' => 'array',
        ]);

        // Create a new About instance
        $blog = new Blog();

        // Store each title and description
        $blog->title = $request->title;
        $blog->content = $request->content;

        // Handle Image One
        if ($request->hasFile('image_one')) {
            $path_one = $request->file('image_one')->store('blog_images', 'public');
            $blog->image_one = $path_one;
        }

        // Handle Image Two
        if ($request->hasFile('image_two')) {
            $path_two = $request->file('image_two')->store('blog_images', 'public');
            $blog->image_two = $path_two;
        }
        // Handle Image Three
        if ($request->hasFile('image_three')) {
            $path_three = $request->file('image_three')->store('blog_images', 'public');
            $blog->image_three = $path_three;
        }

        // Save the About instance to the database
        $blog->save();

        // Redirect to a specific route or return success message
        return redirect()->route('blogs.index')->with('success', 'Blog information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(Blog $blog): View
    {
    
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog): View
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, Blog $blog): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image_one')) {
            if ($blog->image_one) {
                Storage::disk('public')->delete($blog->image_one);
            }
            $data['image_one'] = $request->file('image_one')->store('images/blogs', 'public');
        }

        if ($request->hasFile('image_two')) {
            if ($blog->image_two) {
                Storage::disk('public')->delete($blog->image_two);
            }
            $data['image_two'] = $request->file('image_two')->store('images/blogs', 'public');
        }

        if ($request->hasFile('image_three')) {
            if ($blog->image_three) {
                Storage::disk('public')->delete($blog->image_three);
            }
            $data['image_three'] = $request->file('image_three')->store('images/blogs', 'public');
        }

        
        $blog->update($data);

        return redirect()->route('blogs.index')
                         ->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): RedirectResponse
    {
        // Delete associated images
        if ($blog->image_one) {
            Storage::disk('public')->delete($blog->image_one);
        }
        if ($blog->image_two) {
            Storage::disk('public')->delete($blog->image_two);
        }
        if ($blog->image_three) {
            Storage::disk('public')->delete($blog->image_three);
        }
        

        $blog->delete();

        return redirect()->route('blogs.index')
                         ->with('success', 'Blogs deleted successfully.');
    }
}
