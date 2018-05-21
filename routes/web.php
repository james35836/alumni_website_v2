<?php

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

Route::get('/home', 				'FrontController@home');
Route::get('/login',				'FrontController@login');
Route::get('/about', 				'FrontController@about');
Route::get('/alumni_story',			'FrontController@alumni_story');
Route::get('/program', 				'FrontController@program');
Route::get('/alumni_story/details',	'FrontController@alumni_story_details');


Route::get('/dashboard',	        'AlumniController@dashboard');
Route::get('/profile',	        'AlumniController@profile');
