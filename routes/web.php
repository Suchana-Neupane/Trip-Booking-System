<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
});


/*Routes of Users*/
Route::resource('users', App\Http\Controllers\UserController::class);


//Routes of Guides
Route::resource('guides',App\Http\Controllers\GuideController::class);

//Routes of Vehicles
Route::resource('vehicles',App\Http\Controllers\VehicleController::class);

//Routes of packages
Route::resource('/packages', App\Http\Controllers\PackageController::class );

//Routes of visitors
Route::resource('/visitors',App\Http\Controllers\VisitorController::class);

//Routes of bookings
Route::resource('/bookings',App\Http\Controllers\BookingController::class);

//Routes of Authentication/loginpage
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');