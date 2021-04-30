<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Listing\GuestListingController;
use App\Http\Controllers\Listing\AuthListingController;
use App\Http\Controllers\Inquiry\InquiryController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Wishlist\WishlistController;
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
//Render view files
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');

//login
Route::get('/login',[LoginController::class,'index'])->name('login');

//Register user
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'registerUser']);
//Listing
Route::get('/feature-listing',[GuestListingController::class,'index'])->name('listings');
