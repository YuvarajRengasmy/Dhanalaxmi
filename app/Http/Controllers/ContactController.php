<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactDetails(Request $request){
        dd($request->all());
    }
}
