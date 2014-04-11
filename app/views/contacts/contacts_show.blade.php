@extends('layouts.master')

@section('tab-title')
	<title>Messages</title>

@stop

@section('content')
	<!-- HEADER -->
	<header id="header">
		<div class="container">

			<!-- LOGO -->
			<a href="#home" class="pull-left scrollTo"><img src="/assets/images/logo.png" height="60" alt="welcome" /></a>

			<!-- MOBILE MENU -->
			<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"></button>

			<!-- NAV MENU -->
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul id="onepageNav" class="nav navbar-nav navbar-right"><!-- id="onepageNav" for homepage only -->
					<li><a href="/" class='external'>HOME</a></li>
				</ul>
			</nav>
			<!-- /NAV MENU -->

		</div>
	</header>
	<!-- /HEADER -->
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