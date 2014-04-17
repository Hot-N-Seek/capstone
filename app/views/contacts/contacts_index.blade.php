@extends('layouts.master')

@section('tab-title')
	<title>Messages</title>

@stop

@section('content')
	
	<div id ="MessageBg">
		<div class='container contact-container color-container'>
			<h1>All Messages</h1>
			@if (Session::has('successMessage'))
			    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
			@endif
			@foreach ($contacts as $contact)
				<h3>
		            <a href="{{{ action('ContactsController@show', $contact->id) }}}">{{{ $contact->subject }}}</a><br>
		            <small> Written by: {{{ $contact->from }}} on {{ $contact->created_at->format('l, F jS Y @ h:i A'); }}</small>
		            </h3>
				<p> {{{ Str::words($contact->message, 10) }}} </p>
			@endforeach
			{{ $contacts->links() }} <br>
		</div>
	</div>

@stop