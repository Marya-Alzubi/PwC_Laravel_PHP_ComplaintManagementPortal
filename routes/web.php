<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//User Authentication
Auth::routes();

Route::get('/', "Auth\RegisterController@index" )->middleware('guest');
Route::view('/home', 'client.home')->name('home')->middleware('auth');
Route::view('/admin', 'admin.dashboard')->name('admin')->middleware('auth:admin');

// Complaint CRUD
Route::resource('/complaints', "ComplaintController"); // user & admin

// Admin CRUD
Route::resource('/admins', "AdminController")->middleware('auth:admin');

// User CRUD
Route::resource('/users', "UserController")->middleware('auth:admin');

//Admin Authentication
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login')->middleware('guest:admin');
    Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.login.submit')->middleware('guest:admin');
    Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register')->middleware('auth:admin');
    Route::post('/register', 'Auth\RegisterController@createAdmin')->name('admin.register.submit')->middleware('auth:admin');
    Route::get('/logout', 'Auth\LoginController@adminLogout')->name('admin.logout');
    Route::get('/read/all/complaints', 'ComplaintController@readAllComplaints')->name('admin.all.complaints')->middleware('auth:admin');
});
















