<?php

namespace App\Http\Controllers;
use App\Models\enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function create()
    {
        return view('enquiry.create');  // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'typeofenquiry' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        // Store the form data into the database
        Enquiry::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully.');
    }

    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();
        return redirect()->route('enquiries.index')->with('success', 'Enquiry deleted successfully');
    }
}
