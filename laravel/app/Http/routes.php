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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
	ensure that guest don't have login rights.
*/
	Route::group(['middleware', 'guest'], function(){

		//get for the users input form.
		Route::get('create/account', [
			'as' => 'createAccount',
			'uses' => 'Auth\AuthController@createAccount'
			]);

		//cases.
		Route::get('create/cases', [
			'as' => 'createCases',
			'uses' => 'Auth\AuthController@createCases'
			]);

		//csrf for post routes.
		Route::group(['before', 'csrf'], function() {

			//submit the form route.
			Route::post('submit/account', [
				'as' => 'submitAccount',
				'uses' => 'Auth\AuthController@submitAccount'
				]);

			//submit cases.
			Route::post('submit/cases', [
				'as' => 'submitCases',
				'uses' => 'Auth\AuthController@submitCases'
				]);
		});

		//fetch data.
		Route::get('fetch', [
			'as' => 'fetchData',
			'uses' => 'Auth\AuthController@fetchData'
			]);

		//fetch cases.
		Route::get('fetchCases', [
			'as' => 'fetchCases',
			'uses' => 'Auth\AuthController@fetchCases'
			]);
	});

/*
	authenticated routes.
*/
	Route::group(['middleware', 'auth'], function() {

	});
