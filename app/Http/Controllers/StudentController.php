<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::latest()->paginate(10); // Order by latest created records
        return view('admin.student', compact('students'));
    }

    // Store a new student
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
        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully.');
    }

    // Edit an existing student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }

    // Update an existing student
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:student,email,' . $id,
            'phone' => 'required|string|max:15',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('student.update')->with('success', 'Student updated successfully.');
    }

    // Delete a student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('admin.student')->with('success', 'Student deleted successfully.');
    }
}
