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
			<a href="#" id='btnDeletePost' class='btn-sm btn-danger'>Delete</a><br><br>
	    	{{ Form::open(array('action' => array('ContactsController@destroy', $contact->id), 'method' => 'delete', 'id' => 'formDeletePost')) }}
	    	{{ Form::close() }}
		<a href="{{{ action('ContactsController@index') }}}" class='btn btn-default'>Back</a>
		</div>
	</div>

@stop

@section('bottom-script')
	<script>
		$('#btnDeletePost').on('click', function(e) {
			e.preventDefault();
			if (confirm('Are you sure you want to delete this post?')) {
				$('#formDeletePost').submit();
			};
		});
	</script>

@stop