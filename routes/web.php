<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\StorieController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentFormController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('students', StudentController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('abouts', AboutController::class);
Route::resource('blogs', BlogController::class);
Route::resource('events', EventController::class);
Route::resource('albums', AlbumController::class);
Route::resource('stories', StorieController::class);
Route::resource('universities', UniversityController::class);
Route::resource('agents', AgentController::class);
Route::resource('agentforms', AgentFormController::class);


Route::get('/about', [AboutController::class, 'view'])->name('abouts.view');
Route::get('/blog', [BlogController::class, 'list'])->name('blogs.list');
Route::get('/blog/{id}', [BlogController::class, 'view'])->name('blogs.view');
Route::get('/event', [EventController::class, 'list'])->name('events.list');
Route::get('/album', [AlbumController::class, 'list'])->name('albums.list');
Route::get('/storie', [StorieController::class, 'list'])->name('stories.list');
Route::get('/university', [UniversityController::class, 'view'])->name('universities.list');
Route::get('/agent', [AgentController::class, 'view'])->name('agents.list');
Route::get('/agentform', [AgentFormController::class, 'create'])->name('agentform.create');
Route::post('/agent', [AgentFormController::class, 'store'])->name('agentform.store');




Route::get('/admin/enquiry', [ContactsController::class, 'index'])->name('admin.enquiry');
Route::get('/admin/enquiry/edit/{id}/{type}', [ContactsController::class, 'edit'])->name('admin.enquiry.edit');
Route::post('/admin/enquiry/update/{id}/{type}', [ContactsController::class, 'update'])->name('admin.enquiry.update');
Route::delete('/admin/enquiry/delete/{id}/{type}', [ContactsController::class, 'destroy'])->name('admin.enquiry.destroy');

Route::resource('enquiries', EnquiryController::class);


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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');




Route:: resource ('/contact', ContactController::class);

Route::get('/test', function () {
    return view('test');
});

// admin routes

Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});



// Route::get('/admin_enquiry', function () {
//     return view('admin.enquiry');
// });

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



Route::get('/admin_success_stories', function () {
    return view('admin.success-stories');
});

Route::get('/admin_universities_partners', function () {
    return view('admin.universities-partners');
});


//staff routes


Route::get('/staff_dashboard', function () {
    return view('staff.dashboard');
});


// website routes

// Route::get('/', function () {
//     return view('finovo.index');
// });




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



Route::get('/contact', function () {
    return view('finovo.contact');
});

Route::get('/partneruniversity', function () {
    return view('finovo.university');
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

