<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('finovo.index');
});


Route::get('/about', function () {
    return view('finovo.about');
});

Route::get('/services', function () {
    return view('finovo.services');
});

Route::get('/studyabroad', function () {
    return view('finovo.studyabroad');
});

Route::get('/coaching', function () {
    return view('finovo.coaching');
});

Route::get('/contact', function () {
    return view('finovo.contact');
});

Route::get('/certification', function () {
    return view('finovo.certification');
});

Route::get('/study_in_us', function () {
    return view('finovo.studyabroad.study_us');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
