<?php

class ContactsController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array());
	    $this->beforeFilter('admin', array('except' => array('store')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		if (is_null($search)) {
			$data = Contact::orderBy('created_at', 'desc')->paginate(4);
		} else {
			$data = Contact::where('from', 'LIKE', "%$search%")->orWhere('subject', 'LIKE', "%$search%")->orWhere('message', 'LIKE', "%$search%")->orderBy('created_at', 'desc')->paginate(4);
		}
		return View::make('contacts.contacts_index')->with('contacts', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$contact = new Contact();

	    // create the validator
	    $validator = Validator::make(Input::all(), Contact::$rules);
	    Log::info(Input::all());

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Your message was not sent');
	        // validation failed, redirect to the contact create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the contact
	        Session::flash('successMessage', 'Your message was sent');
			$contact->subject = Input::get('subject');
			$contact->message = Input::get('message');
			$contact->from = Input::get('from');
			$contact->save();
			return Redirect::to('/');
	    }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Contact::find($id);
		return View::make('contacts.contacts_show')->with('contact', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Contact::find($id);
		$user->delete();
		Session::flash('successMessage', 'Message was deleted');
		return Redirect::action('ContactsController@index');
	}

}