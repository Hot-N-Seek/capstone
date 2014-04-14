@extends('layouts.master')

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

<!-- Main Body -->
	<div class="wrapper">
		<div class="section-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- Remove the .animated class if you don't want things to move -->
						<h1 class="animated slideInLeft"><span>Profile</span></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- Profile Menu -->
				<div class="col-sm-4 col-md-3">
					<div class="user-menu bottom-15">
						<ul>
							<li>
								<a href="{{ action('UsersController@show', $user->id) }}" class="active">
									<i class="sign fa fa-user bg-green"></i> My Profile <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
							<li>
								<a href="{{ action('UsersController@edit', $user->id) }}">
									<i class="sign fa fa-edit bg-blue"></i> Edit Profile <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
							<li>
								<a href="/logout">
									<i class="sign fa fa-sign-out bg-amethyst"></i> Sign Out <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
						</ul>
					</div>
				</div>
				<!-- Avatar & social links -->
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumbnail">
								<div class="avatar">
									<a href="#" class="thumbnail bottom-15" data-toggle="modal" data-target="#upload-avatar">
										<img src="assets/images/profileAvatar.png" alt="Profile Picture">
									</a>
								</div>
							</div>
						</div>
						<!-- Main profile info -->
						<div class="col-sm-8">
							<h3 class="hl">{{ strtoupper($user->username) }} <small>{{ $user->role }} </small></h3>
							<hr>
						</div>
					</div>
					<!-- Amount Found -->
					<div class="row">
						<div class="col-sm-12">
							<h4 class="hl"><i class="fa fa-info-circle"></i> Number of Items Found</h4>
							<table class="table">
								<tbody>
									<tr>
										<td class="text-muted"> {{ $found_count }} </td>	
									</tr>
								</tbody>
							</table>
							<hr>
						</div>
					</div>
					<!-- Contact Information -->
					<div class="row">
						<div class="col-sm-12">
							<h4 class="hl"><i class="fa fa-map-marker"></i> Number of Hidden Items</h4>
							<table class="table">
								<tbody>
									<tr>
										<td class="text-muted">{{ $hidden_count }}</td>
									</tr>
								</tbody>
							</table>
							<hr>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

@stop



