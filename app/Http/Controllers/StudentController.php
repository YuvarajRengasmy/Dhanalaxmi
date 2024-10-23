<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewForm(){
       return view('student');
    }

    public function registerStudent(Request $request){
        dd($request->all());
    }
}
