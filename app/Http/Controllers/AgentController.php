<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AgentStoreRequest;
use App\Http\Requests\AgentUpdateRequest;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $agents = Agent::latest()->paginate(5);

        return view('admin.agents.index', compact('agents'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list(): View
    {
        $agents = Agent::latest()->paginate(5);

        return view('finovo.agent', compact('agents'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view()
    {
        // Fetch data from the About model
        $agents = Agent::first(); // Get the first entry from the abouts table

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
        $agent = new Agent();

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
    public function show(Agent $agent): View
    {
    
        return view('admin.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent): View
    {
        return view('admin.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgentUpdateRequest $request, Agent $agent): RedirectResponse
    {
        $data = $request->validated();

        // Handle image updates with deletion of old images if present
        if ($request->hasFile('image')) {
            if ($agent->image) {
                Storage::disk('public')->delete($agent->image);
            }
            $data['image'] = $request->file('image')->store('images/agnents', 'public');
        }

        $agent->update($data);

        return redirect()->route('agents.index')
                         ->with('success', 'Agent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent): RedirectResponse
    {
        // Delete associated images
        if ($agent->image) {
            Storage::disk('public')->delete($agent->image);
        }
      
        

        $agent->delete();

        return redirect()->route('agents.index')
                         ->with('success', 'Agents deleted successfully.');
    }
}
