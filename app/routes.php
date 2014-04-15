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

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password'))))
		{
			$id = Auth::user()->id;
			$found_items = Item::where('found_id', '=', $id)->get();
			$found_count = count($found_items);
			$hidden_items = Item::where('create_id', '=', $id)->get();
			$hidden_count = count($hidden_items);
		    $reply = array('isAuthorized' => true, 'error' => false, 'username' => Auth::user()->username, 'id' => $id, 'found_count' => $found_count, 'hidden_count' => $hidden_count);
		}
		else
		{
			$reply = array('isAuthorized' => false, 'error' => false);
	    }

		return Response::json($reply);
	});

Route::controller('password', 'RemindersController');





