@extends('layouts.master')

@section('content')

	<!-- HEADER -->
	<header id="header">
		<div class="container">

			<!-- LOGO -->
			<a href="#home" class="pull-left scrollTo"><img src="assets/images/logo.png" height="60" alt="welcome" /></a>

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

	<div class='container' id='missing-div'>
    	<img src="assets/images/404page.jpg" id='missing-image'/>
	</div>
  
@stop