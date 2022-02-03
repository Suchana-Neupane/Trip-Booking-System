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