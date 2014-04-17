<!doctype html>
<html class="nicescroll" lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>GET-IT-RED - Capstone Project</title>

		<!-- ADDED LINKS FOR SIGNUP FORM -->
		<link rel="stylesheet" href="css/typica-login.css">
		<link rel="shortcut icon" href="/assets/images/logo.png" />
		

		<!-- GOOGLE MAPS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArre6M4S_cXAcJBVNorFvu_bqfyp9DDgI&sensor=true&libraries=geometry"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<!-- GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS FRAMEWORK -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/animate.css" rel="stylesheet" type="text/css" />

		<!-- PLUGINS -->
		<link href="/assets/plugins/jquery-owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/jquery-owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<link href="/assets/plugins/jquery-bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />


		<!-- CSS TEMPLATE -->
		<link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/shop.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/color/red.css" rel="stylesheet" type="text/css" /><!-- demo default style -->

		

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		@yield('top-script')

	</head>
	<body>

		@if (Request::is('/'))
			<!-- HOME -->
			<section id="home" class="homeTop nofull imageOnly color">
				
				<img src="/assets/images/preview/slider/MapGeoLocator2.jpg" alt="Large Logo Image" id='large-logo'/>

			</section>
			<!-- /HOME -->
		@endif

		<!-- HEADER -->
		<header id="header">
			<div class="container">

				<!-- LOGO -->
				@if (Request::is('/'))
					<a href="#home" class="pull-left scrollTo"><img src="/assets/images/logo.png" height="60" alt="welcome" /></a>
				@else
					<a href="/" class="pull-left scrollTo"><img src="/assets/images/logo.png" height="60" alt="welcome" /></a>
				@endif

				<!-- MOBILE MENU -->
				<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"></button>

				<!-- NAV MENU -->
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul id="onepageNav" class="nav navbar-nav navbar-right"><!-- id="onepageNav" for homepage only -->
						@if (Request::is('/'))
							<li class="active"><a href="#home">HOME</a></li>
							<li><a href="#rules">RULES</a></li>
							<li><a href="#map">MAP</a></li>
							<li><a href="#team">ABOUT US</a></li>
							<li><a href="#contact">CONTACT</a></li>
						@else
							<li><a href="/" class='external'>HOME</a></li>
						@endif
						<li><a href="{{{ action('ItemsController@index') }}}" class='external'>LIST</a></li>
						@if (Auth::check() && Auth::user()->role == 'Admin')
							<li><a href="{{{ action('UsersController@index') }}}" class='external'>USERS</a></li>
							<li><a href="{{{ action('ContactsController@index') }}}" class='external'>MESSAGES</a></li>
						@endif
						@if (Auth::check())
							<li><a href="{{{ action('UsersController@logout') }}}" class="external">LOGOUT</a></li>
							<li><a href="{{{ action('UsersController@show', Auth::user()->id) }}}" class='external'>{{{ Auth::user()->username }}}</a></li>
						@else
							<li><a href="{{{ action('UsersController@create') }}}" class='external'>SIGN UP</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
								<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
									<li>
										<div class="row">
											<div class="col-md-12">
												@if (Session::has('errorMessage'))
											    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
												@endif
												{{ Form::open(array('action' => 'UsersController@doLogin', 'class' => 'form', 'id' => 'login-nav', 'accept-charset' => 'UTF-8')) }}
													<div class="form-group">
													{{ $errors->has('email') ? $errors->first('email', '<p><span class="help-block">:message</span></p>') : '' }}
													{{ Form::label('email', 'Email address', array('class' => 'sr-only')) }}
													{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email or Username')) }}
													</div>
														<div class="form-group">
														{{ $errors->has('password') ? $errors->first('password', '<p><span class="help-block">:message</span></p>') : '' }}
														{{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
														{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
													</div>
														<hr>
													<div class="form-group">
													{{ Form::submit('Sign in', array('class' => 'btn btn-danger btn-block')); }}
													</div>
													{{ Form::close() }}
													<hr>
													<button id='forgot_pass' class='btn btn-block btn-primary'>Forgot Password?</button>
											</div>
										</div>
									</li>
								</ul>
							</li>
						@endif
					</ul>
				</nav>
				<!-- /NAV MENU -->

			</div>
		</header>
		<!-- /HEADER -->


		@yield('content')

		@yield('bottom-script')

		@yield('disqus')

		<script>
			$('#forgot_pass').on('click', function(e){
				e.preventDefault();
				window.location.href = "{{ action('RemindersController@getRemind') }}";
			});
		</script>

	</body>
</html>