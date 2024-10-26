<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student', compact('students'));

       
    }

    public function create()
    {
        return view('student.create');  // This points to the view we'll create later
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            
        ]);

        // Store the form data into the database
        Student::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your student has been submitted successfully.');
    }

}
