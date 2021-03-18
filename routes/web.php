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
    return view('user.home');
});

//Admin Login Backend Route
Route::get('/admin', 'AdminController@Index')->name('adminbackend');

//Admin Login Route
Route::post('/admin-login', 'AdminController@Adminlogin')->name('adminlogin');
Route::get('/admin-dashboard', 'AdminController@Admindashboard')->name('admindashboard');

//Admin Logout
Route::get('/logout', 'AdminController@logout')->name('logout');

//Quiz curd
Route::get('/all-quiz', 'QuizController@index')->name('allquiz');

Route::get('/add-new', 'QuizController@create')->name('addnew');

Route::post('/save-quiz', 'QuizController@store')->name('savequiz');

Route::get('/edit-quiz/{id}', 'QuizController@edit')->name('editquiz');

Route::post('/update-quiz/{id}', 'QuizController@update')->name('updatequiz');

Route::post('/destroy-quiz', 'QuizController@destroy')->name('destroyquiz');



//Quiz==========================================================================
Route::get('/quiz', 'QuizController@quiz')->name('quiz');
