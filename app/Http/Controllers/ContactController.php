<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');  // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // Store the form data into the database
        Contact::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your contact has been submitted successfully.');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.enquiry')->with('enquiry', $contacts);
    }
}
