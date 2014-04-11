@extends('layouts.master')

@section('content')
	<!-- HOME -->
	<section id="home" class="homeTop nofull imageOnly color">
		
		<img src="assets/images/preview/slider/MapGeoLocator2.jpg" alt="Large Logo Image" id='large-logo'/>

	</section>
	<!-- /HOME -->

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
    	<img src="assets/images/magicwords.gif" id='missing-image'/>
	</div>
  
@stop