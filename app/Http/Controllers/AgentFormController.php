<?php
  
namespace App\Http\Controllers;
  
namespace App\Http\Controllers;

use App\Models\AgentForm;
use Illuminate\Http\Request;
  
class AgentFormController extends Controller
{
    // Display the inquiry form
    public function create()
    {
        return view('agentforms.create');  // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request)
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
        Agentform::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully.');
    }
}
