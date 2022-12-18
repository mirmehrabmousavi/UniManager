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
Auth::routes();

//Panel
Route::group(['prefix' => 'admin', 'as' => 'admin.', ['middleware' => ['auth', 'admin']]], function () {
    //Dashboard
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    //Universities
    Route::resource('university', \App\Http\Controllers\UniversityController::class);
    //Collegian
    Route::resource('collegian', \App\Http\Controllers\CollegianController::class);
});


