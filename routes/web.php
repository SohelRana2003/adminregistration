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

//Admin Login Backend Route
Route::get('/admin', 'AdminController@Index')->name('adminbackend');

//Admin Login Route
Route::post('/admin-login', 'AdminController@Adminlogin')->name('adminlogin');
Route::get('/admin-dashboard', 'AdminController@Admindashboard')->name('admindashboard');