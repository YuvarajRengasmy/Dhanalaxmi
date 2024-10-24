<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ContactController;

Route::get('/inquiry', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

Route::get('/contact', [ContactController::class, 'viewContactForm']);

Route::post('/contact', [ContactController::class, 'registerContactForm']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('test');
});
Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/', function () {
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


Route::get('/study_in_uk', function () {
    return view('finovo.studyabroad.study_uk');
});



Route::get('/study_in_australia', function () {
    return view('finovo.studyabroad.study_australia');
});

Route::get('/study_in_canada', function () {
    return view('finovo.studyabroad.study_canada');
});

Route::get('/study_in_dubai', function () {
    return view('finovo.studyabroad.study_dubai');
});

Route::get('/study_in_france', function () {
    return view('finovo.studyabroad.study_france');
});

Route::get('/study_in_germany', function () {
    return view('finovo.studyabroad.study_germany');
});

Route::get('/study_in_malaysia', function () {
    return view('finovo.studyabroad.study_malaysia');
});

Route::get('/study_in_malta', function () {
    return view('finovo.studyabroad.study_malta');
});

Route::get('/study_in_mauritius', function () {
    return view('finovo.studyabroad.study_mauritius');
});