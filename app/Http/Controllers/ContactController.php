<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function viewContactForm(){
        return view('finovo.contact');
     }



    public function registerContactForm(Request $request){
        // dd($request->all());
        Contact::create($request->all());
        return redirect('/contact')->with('message', 'Register Successfully!');
    }
}