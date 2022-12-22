<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect(\route('login'));
});

//Authentication
Auth::routes(['register' => false, 'reset' => false, 'verify' => false,]);

//Panel
Route::group(['prefix' => 'admin', ['middleware' => ['auth', 'admin']]], function () {
    //Dashboard
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    //Universities
    Route::resource('university', \App\Http\Controllers\UniversityController::class);
    //Collegians
    Route::resource('collegian', \App\Http\Controllers\CollegianController::class);
    //Sections
    Route::resource('section', \App\Http\Controllers\SectionController::class);
    //Majors
    Route::resource('major', \App\Http\Controllers\MajorController::class);
    //Terms
    Route::resource('term', \App\Http\Controllers\TermController::class);
    //Marketing
    Route::resource('marketer', \App\Http\Controllers\MarketerController::class);
    //Marketer Subclass
    Route::resource('subclass', \App\Http\Controllers\MarketerSubclassController::class);
    //Quiz
    Route::resource('quiz', \App\Http\Controllers\QuizController::class);
    //Contact
    Route::resource('contact', \App\Http\Controllers\ContactController::class);
    //ContactPlatform
    Route::resource('contact-platform', \App\Http\Controllers\ContactPlatformController::class);
    //ContactReason
    Route::resource('contact-reason', \App\Http\Controllers\ContactReasonController::class);
});


