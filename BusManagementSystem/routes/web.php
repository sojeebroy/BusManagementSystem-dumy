<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('home');
});
Route::get('user/registration', function () {
    return view('userregistration');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('admindashboard', function () {
    return view('admindashboard');
});

Route::get('adminprofile',[AdminController::class,'profile']);
Route::get('adminprofileedit/{id}',[AdminController::class,'EditProfile']);
Route::put('adminprofile/{id}'[AdminController::class.'update']);

Route::get('adminregistration', [AdminController::class, 'view']);
Route::post('adminregistration', [AdminController::class, 'registration']);

