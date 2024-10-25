<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// admin routes

Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin_enquiry', function () {
    return view('admin.enquiry');
});

Route::get('/admin_about', function () {
    return view('admin.aboutus');
});

Route::get('/admin_agency_partners', function () {
    return view('admin.agency-partners');
});

Route::get('/admin_application', function () {
    return view('admin.applications');
});

Route::get('/admin_blogs', function () {
    return view('admin.blogs');
});

Route::get('/admin_gallery', function () {
    return view('admin.gallery');
});
Route::get('/admin_certifications', function () {
    return view('admin.certifications');
});

Route::get('/admin_coaching', function () {
    return view('admin.coaching');
});

Route::get('/admin_contact', function () {
    return view('admin.contact');
});

Route::get('/admin_events', function () {
    return view('admin.events');
});

Route::get('/admin_student', function () {
    return view('admin.student');
});

Route::get('/admin_success_stories', function () {
    return view('admin.success-stories');
});

Route::get('/admin_universities_partners', function () {
    return view('admin.universities-partners');
});

// website routes

// Route::get('/', function () {
//     return view('finovo.index');
// });


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
Route::get('/gallery', function () {
    return view('finovo.gallery');
});

Route::get('/blogs', function () {
    return view('finovo.blogs');
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

