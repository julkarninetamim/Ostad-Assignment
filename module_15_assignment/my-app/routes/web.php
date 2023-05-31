<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Question on 01
Route::get('/register', [RegistrationController::class,"showForm"]);
Route::post('/register', [RegistrationController::class,"register"]);

//Question on 02

Route::get('/home',[HomeController::class,"index"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Question on 03
//after accessing any route you will get the ans in laravel.log file

//Question on 04
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

//Question on 05
Route::resource('products', ProductController::class);

//Question on 06
Route::post('/contact', ContactController::class)->name('contact.submit');

//Question on 07
Route::resource('posts', PostController::class);

//Question on 08
Route::get('/', function () {
    return view('welcome');
});