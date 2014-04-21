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


// route for home page
Route::get('/', 'HomeController@Home');

// routes for user methods
Route::resource('users', 'UsersController');

// routes for contact methods
Route::resource('contact-us', 'ContactsController');

// route for login page
Route::get('/login', 'UsersController@showLogin');

// route to handle login info
Route::post('/login', 'UsersController@doLogin');

// route to logout users
Route::get('/logout', 'UsersController@logout');

// routes for item methods
Route::resource('items', 'ItemsController');

// route for ajax login request
Route::post('/ajax/post', function() 
	{
		Log::info("Received post.");
		Log::info(Input::all());

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password'))))
		{
			$id = Auth::user()->id;
			$username = Auth::user()->username;
			$found_items = Item::where('found_id', '=', $id)->get();
			$found_count = count($found_items);
			$hidden_items = Item::where('create_id', '=', $id)->get();
			$hidden_count = count($hidden_items);
			$items = Item::all();
			foreach ($items as $key => $item) {
				if (is_numeric($item->found_id)) {
					unset($items[$key]);
				}
			}
			$items = $items->toJson();
			$items = json_decode($items);
		    $reply = array('isAuthorized' => true, 'error' => false, 'username' => $username, 'user_id' => $id, 'found_count' => $found_count, 'hidden_count' => $hidden_count, 'item' => $items);
		}
		else
		{
			$reply = array('isAuthorized' => false, 'error' => false);
	    }

		return Response::json($reply);
	});

// route for new item ajax reqeust
Route::post('/ajax/post/item', function()
	{
		Log::info("Received post.");
		Log::info(Input::all());

		$item = new Item();

		$item->longitude = (double) Input::get('longitude'); // replace with var from ajax post from phone
		$item->latitude = (double) Input::get('latitude'); // replace with var from ajax post from phone
		$item->create_id = (int) Input::get('user_id'); // replace with var from ajax post from phone
		$item->name = Input::get('name'); // replace with var from ajax post from phone
		$item->save();

		$reply = array('posted' => true, 'error' => false);

		return Response::json($reply);
	});

// route for ajax request to find items
Route::post('/ajax/post/finditem', function() 
	{
		Log::info("Received post.");
		Log::info(Input::all());

		$item = Item::find(Input::get('item_id'));
		$item->found_id = Input::get('user_id');
		$item->save();

		$reply = array('found' => true, 'error' => false);

		return Response::json($reply);
	});

// route for password reset
Route::controller('password', 'RemindersController');

// route for activating users
Route::get('/users/activate/{code}', 'UsersController@getActivate');





