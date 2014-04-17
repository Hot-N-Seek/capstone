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
		    $reply = array('isAuthorized' => true, 'error' => false, 'username' => $username, 'id' => $id, 'found_count' => $found_count, 'hidden_count' => $hidden_count, 'item' => $items);
		}
		else
		{
			$reply = array('isAuthorized' => false, 'error' => false);
	    }

		return Response::json($reply);
	});

Route::post('/ajax/item', function()
	{
		Log::info("Received post.");
		Log::info(Input::all());

		$item = new Item();

		$item->longitude = Input::get('longitude'); // replace with var from ajax post from phone
		$item->latitude = Input::get('latitude'); // replace with var from ajax post from phone
		$item->create_id = Input::get('id'); // replace with var from ajax post from phone
		$item->name = Input::get('name'); // replace with var from ajax post from phone
		$item->save();

		$reply = array('posted' => true, 'error' => false);

		return Response::json($reply);
	});

Route::controller('password', 'RemindersController');

Route::get('/users/activate/{code}', 'UsersController@getActivate');





