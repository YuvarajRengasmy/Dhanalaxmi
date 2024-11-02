<?php

namespace App\Http\Controllers;

use App\Models\UniversityForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\UniversityFormStoreRequest;
use App\Http\Requests\UniversityFormUpdateRequest;
use Illuminate\Support\Facades\Storage;

class UniversityFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $agents = UniversityForm::latest()->paginate(5);

        return view('admin.agents.index', compact('agents'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $agents = UniversityForm::latest()->paginate(5);

        return view('finovo.agent', compact('agents'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $agents = UniversityForm::first(); // Get the first entry from the abouts table

        // Check if there is data retrieved
       

        return view('finovo.agent', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new About instance
        $agent = new UniversityForm();

        // Store each title and description
        $agent->name = $request->name;
        $agent->content = $request->content;

        // Handle Image One
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('agent_images', 'public');
            $agent->image = $path;
        }
       // Save the About instance to the database
        $agent->save();

        // Redirect to a specific route or return success message
        return redirect()->route('agents.index')->with('success', 'Agent information added successfully!');

    /**
     * Display the specified resource.
     */
    }
    public function show(UniversityForm $agent): View
    {
    
        return view('admin.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UniversityForm $agent): View
    {
        return view('admin.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(universityformUpdateRequest $request, UniversityForm $universityform): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image')) {
            if ($universityform->image) {
                Storage::disk('public')->delete($universityform->image);
            }
            $data['image'] = $request->file('image')->store('images/universityforms', 'public');
        }

        $universityform->update($data);

        return redirect()->route('universityforms.index')
                         ->with('success', 'Universityform updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UniversityForm $universityform): RedirectResponse
    {
        // Delete associated images
        if ($universityform->image) {
            Storage::disk('public')->delete($universityform->image);
        }
      
        

        $universityform->delete();

        return redirect()->route('universityforms.index')
                         ->with('success', 'Agents deleted successfully.');
    }
}
