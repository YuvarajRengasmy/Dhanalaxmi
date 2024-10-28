<?php
  
namespace App\Http\Controllers;
  
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
  
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::latest()->paginate(5);
        
        return view('admin.students.index', compact('students'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.students.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request): RedirectResponse
    {   
        Student::create($request->validated());
         
        return redirect()->route('students.index')
                         ->with('success', 'Students created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
    {
        return view('admin.students.show',compact('student'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student): View
    {
        return view('admin.students.edit',compact('student'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());
        
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
         
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}