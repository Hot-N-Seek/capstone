@extends('layouts.master')

@section('tab-title')
	<title>Items List</title>

@stop

@section('content')
	
	<div id ="UserBg">
		<div class='container contact-container inner-container Tcolor'>
			<h1>All Hidden Items</h1>
			@if (Session::has('successMessage'))
			    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
			@endif
			@foreach ($items as $item)
				<h3>
		            {{{ $item->name }}}<br>
		            <small> Created by: {{{ $item->hidden->username }}} on {{ $item->created_at->format('l, F jS Y @ h:i A'); }}</small>
		        </h3>
			@endforeach
			{{ $items->links() }} <br>
		</div>
	</div>

@stop