<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/', function () {
    return view('welcome');
});




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
  
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('dashboard', [AuthController::class, 'dashboard']); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
    
    Route::get('home', [AuthController::class, 'home'])->name('home');
    Route::get('about', [AuthController::class, 'about'])->name('about');
    Route::get('contact', [AuthController::class, 'contact'])->name('contact');
    Route::get('price', [AuthController::class, 'price'])->name('price');
    Route::get('services', [AuthController::class, 'services'])->name('services');
    Route::get('testimonial', [AuthController::class, 'testimonial'])->name('testimonial');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

