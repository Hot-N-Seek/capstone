<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function Home()
	{
		// $data = Item::whereNull('found_id');
		$data = Item::all();
		foreach ($data as $key => $item) {
			if (is_numeric($item->found_id)) {
				unset($data[$key]);
			}
		}
		return View::make('home')->with('items', $data);
	}
}