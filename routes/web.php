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

/*SAMPLE*/
Route::post('/submit',		'AlumniController@submit');


/*END SAMPLE*/
Route::get('/', 				    'FrontController@home');
Route::get('/home', 				'FrontController@home');

Route::get('/login',				'FrontController@login');
Route::post('/login/submit',			'FrontController@login_submit');
Route::get('/logout',				'FrontController@logout');

Route::get('/register',				'FrontController@register');
Route::post('/register/submit',		'FrontController@register_submit');
Route::get('/redirect/{ref}',			'FrontController@redirect');




Route::get('/about', 				'FrontController@about');
Route::get('/alumni_story',			'FrontController@alumni_story');
Route::get('/alumni_directory',	    'FrontController@alumni_directory');
Route::get('/carrer', 				'FrontController@carrer');
Route::get('/carrer/details', 				'FrontController@carrer_details');
Route::get('/program', 				'FrontController@program');
Route::get('/alumni_story/details',	'FrontController@alumni_story_details');

Route::get('/user/login',	        'LoginController@user_login');




Route::get('/alumni/dashboard',	        'AlumniController@dashboard');
Route::get('/alumni/announcement',	        'AlumniController@announcement');
Route::get('/alumni/manage-user',	        'AlumniController@manage_user');
Route::get('/alumni/alumni-directory',	   'AlumniController@alumni_directory');
Route::get('/alumni/timeline',	             'AlumniController@timeline');
Route::get('/alumni/profile',	             'AlumniController@profile');
Route::get('/alumni/general-chat',	        'AlumniController@general_chat');
Route::get('/alumni/group-chat',	        'AlumniController@group_chat');
Route::get('/alumni/gallery',	             'AlumniController@gallery');
Route::get('/alumni/event-calendar',	   'AlumniController@event_calendar');
Route::get('/alumni/nearby',	             'AlumniController@nearby');
Route::get('/alumni/faqs',	             'AlumniController@faqs');

Route::get('/alumni/post-announcement',	   'AlumniController@post_announcement');
Route::post('/alumni/post-announcement/submit',	   'AlumniController@post_announcement_submit');

Route::get('/alumni/post-event',	   'AlumniController@post_event');
Route::post('/alumni/post-event/submit',	   'AlumniController@post_event_submit');


