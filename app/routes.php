<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/', 'HomeController@Home');

Route::resource('users', 'UsersController');

Route::resource('contact-us', 'ContactsController');

Route::get('/login', 'UsersController@showLogin');

Route::post('/login', 'UsersController@doLogin');

Route::get('/logout', 'UsersController@logout');

Route::resource('items', 'ItemsController');

Route::get('/ajax/get', function()
	{
		Log::info("Received get.");
		Log::info(Input::all());

		$reply = array('error' => false, 'message' => 'This is your data from server');
		return Response::json($reply);
	});

Route::post('/ajax/post', function() 
	{
		Log::info("Received post.");
		Log::info(Input::all());

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        $reply = array('isAuthorized' => false, 'error' => true);
	    }

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    $reply = array('isAuthorized' => true, 'error' => false);
		}
		else
		{
			$reply = array('isAuthorized' => false, 'error' => false);
		}

		$reply = array('error' => false, 'message' => 'Processed post');
		return Response::json($reply);
	});