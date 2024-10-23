<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewForm(){
       return view('student');
    }

    public function registerStudent(Request $request){
        // dd($request->all());
        Student::create($request->all());
        return redirect()->route('reg')->with('message', 'Student Register Successfully!');
    }
}
