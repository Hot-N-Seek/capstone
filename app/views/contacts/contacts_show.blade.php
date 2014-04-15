@extends('layouts.master')

@section('tab-title')
	<title>Messages</title>

@stop

@section('content')
	
	<div id ="UserBg">
		<div class='container contact-container inner-container'>
			<h1>One Message</h1>
			@if (Session::has('successMessage'))
			    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
			@endif
			<h3>
		        {{{ $contact->subject }}}<br>
		        <small> Written by: {{{ $contact->from }}} on {{ $contact->created_at->format('l, F jS Y @ h:i A'); }}</small>
		        </h3>
			<p> {{{ Str::words($contact->message) }}} </p>
		</div>
	</div>

@stop