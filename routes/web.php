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

//to show issue form page
Route::view('issues','issues.index');

// for showing data from issue table
Route::post('issues/store','IssuesController@store');

// for Searching and showing data from issue table
//Route::post('/searchissue','IssuesController@search');

// for showing test view in case of not login to page
Route::get('test','IssuesController@test');

// for showing list of data of issue table
Route::get('issues/list','IssuesController@list');

// this two are written by code for login and register
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//to show services page
Route::view('services','services');

// to show first user in database
Route::get('/custom/login', 'CustomAuthController@login');

// to show any user by id in database
Route::get('/custom/login/{id}', 'CustomAuthController@Customlogin');

//to show view of export excel
Route::get('users', 'UsersController@export');

// for import data of issue to xlsx
Route::post('/issues/import','IssuesController@importfromxlsx');
Route::view('issues-form','excel-import');
//