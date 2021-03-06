<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	Route::resource('mentor', 'MentorController');

	Route::get('/', function () {
	    return view('index');
	});

	Route::get('login', function () {
	    return view('login');
	});

	Route::get('join/signup', function () {
	    return view('join/signup');
	});

	Route::get('user/show', function () {
	    return view('user/show');
	});

	Route::get('user/mypage', function () {
	    return view('user/mypage');
	});

	Route::get('user/edit', function () {
	    return view('user/edit');
	});

	Route::get('user/message', function () {
	    return view('user/message');
	});