<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    // Display the inquiry form
    public function create()
    {
        return view('inquiry.create');  // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'visa_type' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // Store the form data into the database
        Inquiry::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully.');
    }
}
