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




Route::get('/study_in_newzeland', function () {
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
    return view('finovo.services.forex_card');
});

Route::get('/international_simcard', function () {
    return view('finovo.services.international_simcard');
});

Route::get('/visa_filing', function () {
    return view('finovo.services.visa_filing');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

