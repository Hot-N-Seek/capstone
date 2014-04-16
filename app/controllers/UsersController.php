<?php

class UsersController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('doLogin', 'showLogin', 'logout', 'create', 'store', 'getActivate')));
	    $this->beforeFilter('admin', array('except' => array('doLogin', 'showLogin', 'edit', 'logout', 'create', 'store', 'update', 'show', 'getActivate')));
	    $this->beforeFilter('edit_user', array('except' => array('doLogin', 'showLogin', 'logout', 'create', 'store', 'update', 'show', 'getActivate')));
	}

	/**
	 * Shows login form page
	 */
	public function showLogin()
	{
		return View::make('users.login');
	}

	public function getActivate($code) 
	{
		$user = User::where('code', '=', $code)->where('active', '=', 0)->first();

		if($user) {
			// Update user to active state
			$user->active = 1;
			$user->code = '';
			$user->save();

			Session::flash('successMessage', 'Your account has been activated. Please login');
			return Redirect::action('UsersController@showLogin');
		}
		Session::flash('errorMessage', 'Your account has not been activated. Please try again');
		return Redirect::action('UsersController@showLogin');
	}

	/**
	 * Handles User login
	 */
	public function doLogin()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		$user = User::where('email', Input::get('email'))
					->orWhere('username', Input::get('email'))->first();

		if ($user->active == 0) 
		{
			Session::flash('errorMessage', 'Your account has not been confirmed. Check your email');
			return Redirect::back();
		}

		if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))) || Auth::attempt(array('username' => Input::get('email'), 'password' => Input::get('password'))))
		{
		    return Redirect::intended('/users/' . Auth::user()->id);
		}
		else
		{
			Session::flash('errorMessage', 'Your email or password was not correct');
		    return Redirect::back()->withInput();
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('users.user_edit')->with('edit', false);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$user = new User();
		$rules = User::$createRules;
		$rules['password'] = 'required|' . $rules['password'];
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } 
		
		if (Input::get('password') === Input::get('password2')) {
			$user->password = Input::get('password');
		} else {
			Session::flash('errorMessage', 'Your passwords did not match');
			return Redirect::back()->withInput();
		}
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->code = str_random(60);
		$user->active = 0;
		$user->role = 'User';
		$user->save();

		Mail::send('emails.auth.activate', array('link' => URL::to('users/activate', $user->code)), function($message) use ($user) {
			$message->to($user->email)->subject('Activate your account');
		});

		return Redirect::to('/');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$user = User::find($id);
		return View::make('users.user_edit')->with(array('user' => $user, 'edit' => true));
	}

		/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$tempRules = User::$createRules;
		$tempRules['email'] = $tempRules['email'] . ", $id";
		$tempRules['username'] = $tempRules['username'] . ", $id";
		$validator = Validator::make(Input::all(), $tempRules);

		if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }

		$user = User::find($id);
		if (Input::get('password') != '') {
			if ((Input::get('password') === Input::get('password2')) && Hash::check(Input::get('old_password'), Auth::user()->password)) {
				$user->password = Input::get('password');
			} else {
				Session::flash('errorMessage', 'Your passwords did not match');
				return Redirect::back()->withInput();
			}
		}
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->save();
		return Redirect::action('UsersController@index');
	}

	/**
	 * Logs out the user
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('user_search');
		if (is_null($search)) {
			$data = User::where('role', '<>', 'Admin')->orderBy('first_name', 'desc')->paginate(15);
		} else {
			$data = User::where('role', '<>', 'Admin')
						->where(function($query) use ($search)
				            {
				                $query->where('first_name', 'LIKE', "%$search%")
				                	->orWhere('last_name', 'LIKE', "%$search%")
									->orWhere('username', 'LIKE', "%$search%")
									->orWhere('email', 'LIKE', "%$search%");
				            })
						->orderBy('created_at', 'desc')->paginate(15);				
		}

		foreach ($data as $user) {
			if ($user->role == 'Admin') {
				unset($data[$user->id]);			
			}
		}
		return View::make('users.index_user')->with('users', $data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		$found_items = Item::where('found_id', '=', $id)->get();
		$found_count = count($found_items);
		$hidden_items = Item::where('create_id', '=', $id)->get();
		$hidden_count = count($hidden_items);
		return View::make('users.profile')->with(array('user' => $user, 'found_count' => $found_count, 'hidden_count' => $hidden_count));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Auth::user()->id == $id) {
			Session::flash('errorMessage', "You can't do that");
			return Redirect::action('UsersController@index');
		}
		$user = User::find($id);
		$user->delete();
		Session::flash('successMessage', 'User was deleted');
		return Redirect::action('UsersController@index');
	}

}