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
Route::get('/', 				    'FrontController@home');
Route::get('/home', 				'FrontController@home');
Route::get('/login',				'FrontController@login');
Route::post('/login/submit',			'FrontController@login_submit');
Route::get('/register',				'FrontController@register');
Route::post('/register/submit',		'FrontController@register_submit');
Route::get('/redirect/{ref}',		'FrontController@redirect');




Route::get('/about', 				'FrontController@about');
Route::get('/alumni_story',			'FrontController@alumni_story');
Route::get('/alumni_directory',	    'FrontController@alumni_directory');
Route::get('/carrer', 				'FrontController@carrer');
Route::get('/carrer/details', 				'FrontController@carrer_details');
Route::get('/program', 				'FrontController@program');
Route::get('/alumni_story/details',	'FrontController@alumni_story_details');

Route::get('/user/login',	        'LoginController@user_login');

Route::get('/dashboard',	             'AlumniController@dashboard');
Route::get('/announcement',	        'AlumniController@announcement');
Route::get('/manage-user',	        'AlumniController@manage_user');
Route::get('/alumni-directory',	   'AlumniController@alumni_directory');
Route::get('/timeline',	             'AlumniController@timeline');
Route::get('/profile',	             'AlumniController@profile');
Route::get('/general-chat',	        'AlumniController@general_chat');
Route::get('/group-chat',	        'AlumniController@group_chat');
Route::get('/gallery',	             'AlumniController@gallery');
Route::get('/event-calendar',	        'AlumniController@event_calendar');
Route::get('/nearby',	             'AlumniController@nearby');
Route::get('/faqs',	                  'AlumniController@faqs');