<?php
  
namespace App\Http\Controllers;

use App\Models\AgentForm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AgentFormStoreRequest;
use App\Http\Requests\AgentFormUpdateRequest;

class AgentFormController extends Controller
{
    // Display the inquiry form
    public function index(): View
    {
        $agentforms = AgentForm::latest()->paginate(5);
        
        return view('admin.agentforms.index', compact('agentforms'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('agentforms.create'); // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request): RedirectResponse
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'support' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // Store the form data into the database
        AgentForm::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully.');
    }

    public function show(AgentForm $agentform): View
    {
        return view('admin.agentforms.show', compact('agentform'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AgentForm $agentform): View
    {
        return view('admin.agentforms.edit', compact('agentform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgentFormUpdateRequest $request, AgentForm $agentform): RedirectResponse
    {
        $agentform->update($request->validated());

        return redirect()->route('agentforms.index')
                        ->with('success', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AgentForm $agentform): RedirectResponse
    {
        $agentform->delete();
        
        return redirect()->route('agentforms.index')
                        ->with('success', 'Partner deleted successfully');
    }
}
