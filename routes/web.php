<?php

use App\Http\Controllers\Backend\BackendController;
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
    return view('welcome');
})->name('homepage');

Route::get('gallery', function(){
    return view('frontend.gallery');
})->name('gallery');

Route::get('contact', function(){
    return view('frontend.contact');
})->name('contact');

Route::get('notice', function(){
    return view('frontend.notice');
})->name('notice');

Auth::routes([
    'register' => false, // Register Routes...
    'reset'    => false, // Reset Password Routes...
    'verify'   => false, // Email Verification Routes...
]);

Route::group(['prefix' => 'myaccount', 'as' => 'student.'], function(){
    Route::get('dashboard', function(){
        return 'Student Dashboard';
    })->name('dashboard');
    Route::middleware('auth')->group(function(){
       
    });
});

Route::group(['prefix' => 'systemcontrol', 'as' => 'admin.'], function(){
    Route::get('form-component', function(){
        return view('backend.form-component');
    })->name('form-component');
    Route::middleware('auth', 'isAdmin')->group(function(){
        //BASIC FORMS & TABLES
        Route::get('form', function(){
            return view('backend.form');
        })->name('form');
       

        Route::get('dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
