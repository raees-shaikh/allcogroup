<?php

use Illuminate\Support\Facades\Route;

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



// Route::get('/under-cons', function () {
//     return view('frontend.under-cons');
// });

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about-us', function () {
    return view('frontend.about-us');
});
Route::get('/our-projects', function () {
    return view('frontend.our-projects');
});
Route::get('/careers', function () {
    return view('frontend.careers');
});
Route::post("/careers/submit", 'App\Http\Controllers\frontend\CareersController@submit')->name('careers.submit');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});
Route::post("/contact/submit", 'App\Http\Controllers\frontend\ContactUsControler@submit')->name('contact.submit');
Route::get('/welcome', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';
