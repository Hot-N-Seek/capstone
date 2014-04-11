@extends('layouts.master')

@section('tab-title')

@stop

@section('top-script')
	<script>
	    var map;
		var geocoder;

	    function initialize() {
		  	var opts = {
		  		mapTypeId: google.maps.MapTypeId.ROADMAP,
		    	center: new google.maps.LatLng(29.4167, -98.5000),
		    	zoom: 9
		  	};
		  	map = new google.maps.Map(document.getElementById('map-canvas'), opts);
		  	geocoder = new google.maps.Geocoder();
		  	<? foreach ($items as $item) { ?>
				setmarker( <?= "{$item->latitude}, {$item->longitude}" ?> );
			<? } ?>
		}

		function setmarker(lat,lon)
		{

		var latlongMarker = new google.maps.LatLng(lat,lon);

		var marker = new google.maps.Marker
		    (
		        {
		            position: latlongMarker, 
		            map: map,
		            title:"Hello World!"
		        }
		    ); 

		}

		google.maps.event.addDomListener(window, 'load', initialize);
		
	</script>

@stop

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
					<li class="active"><a href="#home">HOME</a></li>
					<li><a href="#rules">RULES</a></li>
					<li><a href="#portfolio">MAP</a></li>
					<li><a href="#team">ABOUT US</a></li>
					<li><a href="#contact">CONTACT</a></li>
					@if (Auth::check() && Auth::user()->role == 'Admin')
						<li><a href="{{{ action('UsersController@index') }}}" class='external'>USERS</a></li>
						<li><a href="{{{ action('ContactsController@index') }}}" class='external'>MESSAGES</a></li>
					@endif
					@if (Auth::check())
						<li><a href="{{{ action('UsersController@logout') }}}" class="external">LOGOUT</a></li>
						<li><a href="{{{ action('UsersController@edit', Auth::user()->id) }}}" class='external'>{{{ Auth::user()->username }}}</a></li>
					@else
						<li><a href="{{{ action('UsersController@create') }}}" class='external'>SIGN UP</a></li>
						<li class="dropdown">
							<a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">LOGIN<b class="caret"></b></a>
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
												{{ Form::submit('Sign in', array('class' => 'btn btn-success btn-block')); }}
												</div>
												{{ Form::close() }}
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

	<!-- Rules for the App -->
	<section id="rules" class="color">

		<header>
			<h2 data-animation="bounceIn">Rules:</h2>
			<h3>Follow this rules to find the item location!  </h3>
		</header>

		<!-- content -->
		<article class="container text-left">

			<!-- about us paragraphs -->
			<figure class="animate_from_left image-left">
				<img alt="about us" class="img-responsive float-left" src="assets/images/preview/content/PhoneGeo.png" height="500" />
			</figure>

			<ol>
			<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</li>
			<br>
			<li>Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</li>
			</ol>

			<!-- number animate -->
			<div class="animate_from_bottom text-center">

				<!-- animate 1 -->
				<div class="milestone">
					<i class="fa fa-briefcase"></i> <!-- icon -->
					<span class="countTo">121</span> <!-- number -->
					<span class="countToDesc">Our Projects</span> <!-- short text -->
				</div>

				<!-- animate 2 -->
				<div class="milestone">
					<i class="fa fa-users"></i> <!-- icon -->
					<span class="countTo">118</span> <!-- number -->
					<span class="countToDesc">Our Customers</span> <!-- short text -->
				</div>

				<!-- animate 3 -->
				<div class="milestone">
					<i class="fa fa-twitter"></i> <!-- icon -->
					<span class="countTo">8865</span> <!-- number -->
					<span class="countToDesc">Twitter Followers</span> <!-- short text -->
				</div>

			</div>
			<!-- /number animate -->

		</article>

	</section>
	<!-- /Rules for our App -->

	<!-- QUOTE -->
	<section class="quote color parallax" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/preview/slider/parallax_bg.jpg)">

		<div class="container">
			<q>We can't solve problems by using the same kind of thinking we used when we created them.</q>
			<cite>
				<strong>Albert Einstein</strong>
			</cite>
		</div>

	</section>
	<!-- QUOTE -->


	<!-- PORTFOLIO -->
	<section id="portfolio">

		<header>
			<h2 data-animation="bounceIn">Items Hidden Around San Antonio</h2>
			<h3>Can you find them all?</h3>
		</header>

		<div id="map-canvas"></div>

	</section>
	<!-- /PORTFOLIO -->
	
	<!-- TEAM -->
	<section id="team">

		<header>
			<h2 data-animation="bounceIn">MEET OUR TEAM</h2>
		</header>


		<!-- team description -->
		<article class="container text-left">			
			<p class="dropcap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
		</article>

		<!-- CAROUSEL -->
		<article class="container text-left">
				<div class="owl-carousel column" data-navigation="false" data-singleitem="false" data-autoplay="false" data-animation="fadeIn">
					<!-- carousel item -->
					<div class="item dragCursor" data-animation="fadeInUp">
						<!-- top image -->
						<span class="top-image"><img src="assets/images/preview/content/team/me.jpg" alt="..." height="200"></span>
						<!-- member name / occupation -->
						<h4>
							<strong>Ivan Andres Abad</strong> 
							/ Web Developer
						</h4>
						<!-- short description -->
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
						<a target="_blank" href="#" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-pinterest"></a><!-- pinterest -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-skype"></a><!-- skype -->
					</div>

					<!-- carousel item -->
					<div class="item dragCursor" data-animation="fadeInUp">
						<!-- top image -->
						<span class="top-image"><img src="assets/images/preview/content/team/Cameron.jpg" alt="..." height="200"></span>
						<!-- member name / occupation -->
						<h4>
							<strong>Cameron Holland</strong> 
							/ Web Developer
						</h4>
						<!-- short description -->
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
						<a target="_blank" href="#" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-pinterest"></a><!-- pinterest -->
					</div>

					<!-- carousel item -->
					<div class="item dragCursor" data-animation="fadeInUp">
						<!-- top image -->
						<span class="top-image"><img src="assets/images/preview/content/team/Nathaniel.jpg" alt="..." height="200"></span>
						<!-- member name / occupation -->
						<h4>
							<strong>Nathaniel Medrano</strong> 
							/ Web Developer
						</h4>
						<!-- short description -->
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
						<a target="_blank" href="#" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
						<a target="_blank" href="#" class="rounded-icon social fa fa-pinterest"></a><!-- pinterest -->
					</div>
				</div>
			</article>
			<!-- /CAROUSEL -->

	</section>
	<!-- /TEAM -->


	<!-- TESTIMONIALS -->
	<section id="testimonials" class="color parallax" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/preview/slider/parallax_bg.jpg)">

		<div class="container">

			<!-- TESTIMONIALS -->
			<div class="owl-carousel" data-navigation="false" data-singleitem="true" data-autoplay="true" data-animation="bounceIn">
				<!-- testimonial 1 -->
				<div class="item dragCursor">
					<q>
						The term "testimonial" most commonly applies to the sales-pitches attributed to ordinary citizens, whereas the word "endorsement" usually applies to pitches by celebrities.
					</q>
					<!-- testimonial author -->
					<cite>
						<strong>Colombo Doe</strong> / Customer
					</cite>
				</div>

				<!-- testimonial 2 -->
				<div class="item dragCursor">
					<q>
						In promotion and of advertising, a testimonial or show consists of a person's written or spoken statement extolling the virtue of a product.
					</q>
					<!-- testimonial author -->
					<cite>
						<strong>Hercule Doe</strong> / Customer
					</cite>
				</div>

				<!-- testimonial 3 -->
				<div class="item dragCursor">
					<q>
						Testimonials can be part of communal marketing.
					</q>
					<!-- testimonial author -->
					<cite>
						<strong>Albert Doe</strong> / Customer
					</cite>
				</div>

				<!-- testimonial 4 -->
				<div class="item dragCursor">
					<q>
						Celebrity endorsements have proven very successful in China, where increasing consumerism makes it be considered a status symbol to purchase an endorsed product.
					</q>
					<!-- testimonial author -->
					<cite>
						<strong>John Doe</strong> / Customer
					</cite>
				</div>

				<!-- testimonial 5 -->
				<div class="item dragCursor">
					<q>
						Testimonials from customers who are not famous have been effectively used in marketing for as long as marketing has existed.
					</q>
					<!-- testimonial author -->
					<cite>
						<strong>Sam Doe</strong> / Customer
					</cite>
				</div>
			</div>
			<!-- /TESTIMONIALS -->

		</div>

	</section>
	<!-- /TESTIMONIALS -->

	<!-- CONTACT FORM -->
	<section id="contact">

		<header>
			<h2 data-animation="bounceIn">CONTACT US</h2>
			<h3>WE ARE GLAD TO HEAR FROM YOU</h3>
		</header>

		<article class="container">

			<div class="row text-left">
				<div class="col-md-6">

					<!-- EMAIL FORM -->
					{{ Form::open(array('action' => 'ContactsController@store', 'class' => 'form-horizontal', 'id' => 'emailForm')) }}
						<!-- from -->
						<div class="form-group">
							{{ $errors->has('from') ? $errors->first('from', '<p><span class="help-block">:message</span></p>') : '' }}
							{{ Form::label('from', 'From', array('class' => 'col-sm-2 control-label')) }}
							<div class="col-sm-10">
								{{ Form::text('from', null, array('class' => 'form-control', 'placeholder' => 'From')) }}
							</div>
						</div>

						<!-- subject -->
						<div class="form-group">
							{{ $errors->has('subject') ? $errors->first('subject', '<p><span class="help-block">:message</span></p>') : '' }}
							{{ Form::label('subject', 'Subject', array('class' => 'col-sm-2 control-label')) }}
							<div class="col-sm-10">
								{{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' => 'Subject')) }}
							</div>
						</div>

						<!-- message -->
						<div class="form-group">
							{{ $errors->has('message') ? $errors->first('message', '<p><span class="help-block">:message</span></p>') : '' }}
							{{ Form::label('message', 'Message', array('class' => 'col-sm-2 control-label')) }}
							<div class="col-sm-10">
								{{ Form::textarea('message', null, array('class' => 'form-control', 'placeholder' => 'Message')) }}
							</div>
						</div>

						<!-- send button -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								{{ Form::submit('Save Post', array('class' => 'btn btn-custom')); }}
							</div>
						</div>
					{{ Form::close() }}
					<!-- EMAIL FORM -->

				</div>

				<div class="col-md-6">

					<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatema accusantium. <a href="#footer" class="gmapShow scrollTo">Find us on GoogleMap</a>.</h4>
					<p class="animate_fade_in">
						<i class="fa fa-map-marker rounded-icon"></i> PO Box 16122 Collins Street West Victoria 8007 Australia
					</p>
					<p class="animate_fade_in">
						<i class="fa fa-envelope rounded-icon"></i> support@website.com
					</p>
					<p class="animate_fade_in">
						<i class="fa fa-phone rounded-icon"></i> +61 3 8376 6284
					</p>
				</div>
			</div>


		</article>
	</section>
	<!-- /CONTACT FORM -->



	<!-- CORE JS FRAMEWORK--> 
	<script type="text/javascript" src="/assets/plugins/pace/pace.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-easing/jquery.easing.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/isotope/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/masonry.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/smoothscroll.js"></script>
	<script async type="text/javascript" src="/assets/plugins/modernizr.min.js"></script>
	<!-- /CORE JS FRAMEWORK--> 

	<!-- PLUGINS -->
	<script type="text/javascript" src="/assets/plugins/jquery-fitvids/jquery.fitvids.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-appear/jquery.appear.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-countTo/jquery.countTo.js"></script>
	<script type="text/javascript" src="/assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-scrollto/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-onepage-nav/jquery.nav.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/prettyPhoto/js/jquery.prettyPhoto.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-stellar/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-bxslider/jquery.bxslider.pack.js"></script>
	<script type="text/javascript" src="assets/plugins/iscroll/iscroll.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<!-- /PLUGINS -->

	<script type="text/javascript" src="/assets/js/demo.js"></script>
	
	<script type="text/javascript" src="/assets/js/scripts.js"></script>
	<script async type="text/javascript" src="/assets/js/shop.js"></script>
	<script async type="text/javascript" src="/assets/js/contact.js"></script>

@stop