<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\admin\home\HomeController as AdminHome;

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



Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


// Admin


Route::get('/add-section1', [AdminHome::class,'edit']);
Route::post('/add-section1', [AdminHome::class,'update']);

Route::get('/add-section2', [AdminHome::class,'editAbout']);
Route::post('/add-section2', [AdminHome::class,'updateAbout']);

Route::get('/contact-list', function () {
    return view('admin.contact-list');
})->name('admin.contact-list');
Route::get('/add-user', function () {
    return view('admin.add-user');
})->name('admin.add-user');
Route::get('/list-user', function () {
    return view('admin.list-user');
})->name('admin.list-user');
Route::get('/logout', function () {
    return view('admin.logout');
})->name('logout');
