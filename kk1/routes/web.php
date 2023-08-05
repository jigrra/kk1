<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HotelBookingRegistrationController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\contactreq;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/thank', function () {
    return view('thank');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/home1', function () {
    return view('home1');
});



Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/p3',[homecontroller::class,'checklogin'] );

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/A_contactview', function () {
    return view('A_contactview');
});

Route::get('/editcontact', function () {
    return view('editcontact');
});

Route::get('/A_room', function () {
    return view('A_room');
});


Route::get('/U_roomview', function () {
    return view('U_roomview ');
});

Route::get('left', function () {
    return view('left');
});

Route::get('bookconfirm', function () {
    return view('bookconfirm');
});



 Route::resource('contact',ContactController::class);
 Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
 Route::put('/contact/{c_id}',[Contactcontroller::class,'update'])->name('contact.update');
 Route::get('/A_contactview',[Contactcontroller::class,'show']);
 // for search in HotelBookingRegistration
 // Route::get('/A_contactview',[contactcontroller::class,'show']);
Route::post('/search',[Contactcontroller::class,'search']);
// download all date in pdf
Route::post('/downloadpdff',[contactcontroller::class,'dow_pdf']);

// ..................................

Route::resource('room',roomController::class);
 Route::post('/room',[roomController::class,'store'])->name('room.store');
  Route::put('/room/{r_id}',[roomcontroller::class,'update'])->name('room.update');
 Route::get('/U_roomview',[roomcontroller::class,'show']);


Route::resource('HotelBookingRegistration',HotelBookingRegistrationController::class);
 Route::post('/HotelBookingRegistration',[HotelBookingRegistrationController::class,'store'])->name('HotelBookingRegistration.store');
 Route::put('/HotelBookingRegistration/{h_id}',[HotelBookingRegistrationcontroller::class,'update'])->name('HotelBookingRegistration.update');
 Route::get('/A_HotelBookingRegistrationview',[HotelBookingRegistrationcontroller::class,'show']);
// for search in HotelBookingRegistration
 Route::get('/A_HotelBookingRegistrationview',[HotelBookingRegistrationcontroller::class,'show']);
Route::post('/search',[HotelBookingRegistrationcontroller::class,'search']);
// download all date in pdf
Route::post('/downloadpdf',[HotelBookingRegistrationcontroller::class,'dow_pdf']);

Route::get('/p2', function () {
    return view('p2');
});

Route::get('/HotelBookingRegistration', function () {
    return view('HotelBookingRegistration');
});


//Route::get('/categories1',[categories1controller::class,'index'])->name('categories1.index');



//  Route::get('/category/create',[categorycontroller::class,'create'])->name('category1.create');



Route::get('/dashboard', [homecontroller::class,'checkuser'])->middleware('auth')->name('dashboard');


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

require __DIR__.'/auth.php';
