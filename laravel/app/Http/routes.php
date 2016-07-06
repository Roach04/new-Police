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

Route::get('/', [
	'as' => 'home',
	'uses' => 'Auth\AuthController@getIndex'
]);


//group all guests.
Route::group(['middleware', 'guest'], function(){

	//create a users' login route.
	Route::get('create/account', [
		'as' => 'createAccount',
		'uses' => 'Auth\AuthController@createAccount'
		]);

	//activate account route.
	Route::get('account/activate/{code}', [
		'as' => 'activateAccount',
		'uses' => 'Auth\AuthController@activateAccount'
		]);

	//guest motors.
	Route::get('motors/category', [
		'as' => 'motors-cat',
		'uses' => 'ProfileController@motorsCat'
		]);

	//guest cycles.
	Route::get('bicycles/category', [
		'as' => 'bicyclesCat',
		'uses' => 'ProfileController@bicyclesCat'
		]);

	//csrf for post routes.
	Route::group(['before', 'csrf'], function() {

		//store users'.
		Route::post('account/create/store', [
			'as' => 'storeAccount',
			'uses' => 'Auth\AuthController@storeAccount'
		]);

		//sign in users'
		Route::post('account/signIn/post', [
			'as' => 'account-signIn',
			'uses' => 'Auth\AuthController@postSignIn'
			]);
	});
	

	//create a sign in route.
	Route::get('account/signIn', [
		'as' => 'signIn',
		'uses' => 'Auth\AuthController@signIn'
		]);


	//authenticated users'
	Route::group(['middleware' => 'auth'], function(){

		/*
		* Users' profile Routes.
		*/

		//user's profile ie clients.
		Route::get('profile/{id}', [
			'as' => 'profile-account',
			'uses' => 'ProfileController@getProfile'
			]);


		//log each user out of the profile.
		Route::get('logOut', [
			'as' => 'logOut',
			'uses' => 'Auth\AuthController@logOut'
			]);
		
		//loans form route for the client.
		Route::get('profile/{id}/uploads',[
			'as' => 'uploads',
			'uses' => 'ProfileController@getUploads'
			]);

		//assets route.
		Route::get('profile/{id}/assets', [
			'as' => 'assets',
			'uses' => 'ProfileController@getAssets'
			]);

		//motors profile.
		Route::get('profile/{id}/motors', [
			'as' => 'motors',
			'uses' => 'ProfileController@getMotors'
			]);

		//cycle profile.
		Route::get('profile/{id}/cycles', [
			'as' => 'cycles',
			'uses' => 'ProfileController@getCycles'
			]);

		/*
		* Administrator Routes.
		*/

		//Administrator's dashboard.
		Route::get('admin/dashboard', [

	    	'as' => 'dashboard',
	    	'uses' => 'AdminController@getDashboard'
		]);

		//create categories.
		Route::get('admin/dashboard/{id}/cat', [
			'as' => 'category',
			'uses' => 'AdminController@getCat'
			]);

		//Admin's route display each user.
		Route::get('admin/dashboard/{id}/user',[
			'as' => 'user',
			'uses' => 'AdminController@getUser'
			]);


		//CSRF.
		Route::group(['before', 'csrf'], function(){

			//loan form posting to db.
			Route::post('profile/{id}/loan/store', [
				'as' => 'storeLoan',
				'uses' => 'ProfileController@storeLoan'
				]);

			//Admin's route update and store their roles.
			Route::patch('admin/dashboard/{id}/change/store',[
				'as' => 'storeRoles',
				'uses' => 'AdminController@storeRoles'
				]);

			//store categories.
			Route::post('admin/dashboard/{id}/cats/store', [
				'as' => 'storeCats',
				'uses' => 'AdminController@storeCats'
				]);

			//dataOperator delete any client.
			Route::delete('admin/dashboard/{id}/destroy', [
				'as' => 'destroy',
				'uses' => 'AdminController@destroyUser'
				]);

			//post lost items
			Route::post('profile/{id}/uploads/store', [
				'as' => 'storeUploads',
				'uses' => 'ProfileController@storeUploads'
				]);

		});
		
	});
});