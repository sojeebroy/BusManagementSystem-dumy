<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;

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

Route::get('/home', function () {
    return view('Home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('admindashboard', function () {
    return view('admindashboard');
});
Route::get('adminprofile',[AdminController::class,'profile']);

Route::get('adminregistration', [AdminController::class, 'view']);
Route::post('adminregistration', [AdminController::class, 'registration']);

Route::get('driverregistration', [DriverController::class, 'view']);
Route::post('driverregistration', [DriverController::class, 'registration']);

