<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/inquiry', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/enquiry', [EnquiryController::class, 'create'])->name('enquiry.create');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

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




Route::get('/study_in_newzealand', function () {
    return view('finovo.studyabroad.study_newzeland');
});

Route::get('/study_in_singapore', function () {
    return view('finovo.studyabroad.study_singapore');
});

Route::get('/study_in_ukarine', function () {
    return view('finovo.studyabroad.study_ukarine');
});

Route::get('/accodomation', function () {
    return view('finovo.services.accodomation');
});

Route::get('/counselling', function () {
    return view('finovo.services.counselling');
});

Route::get('/flight_bookings', function () {
    return view('finovo.services.flight_booking');
});

Route::get('/forex_cards', function () {
    return view('finovo.services.forex_cards');
});

Route::get('/international_simcard', function () {
    return view('finovo.services.international_simcard');
});

Route::get('/visa_filing', function () {
    return view('finovo.services.visa_filing');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

