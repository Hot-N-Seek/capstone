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
		  	<? $count = 0; ?>
		  	@foreach ($items as $item)
		  		<? $count++; ?>
				setmarker( <?= "{$item->latitude}, {$item->longitude}, \"{$item->name}\"" ?> );
			@endforeach
		}

		function setmarker(lat, lon, name)
		{

		var latlongMarker = new google.maps.LatLng(lat,lon);

		var marker = new google.maps.Marker
		    (
		        {
		            position: latlongMarker, 
		            map: map,
		            title: name
		        }
		    ); 

		}

		google.maps.event.addDomListener(window, 'load', initialize);
		
	</script>

@stop

@section('content')

	

	<!-- Rules for the App -->
	<section id="rules" class="color">

		<header>
			<h2 data-animation="bounceIn">Rules:</h2>
			<h3>Follow these rules to find the item location!  </h3>
		</header>

		<!-- content -->
		<article class="container text-left">

			<!-- about us paragraphs -->
			<figure class="animate_from_left image-left">
				<img alt="about us" class="img-responsive float-left" src="assets/images/preview/content/PhoneGeo.png" height="500" />
			</figure>

			<ol>
			<li>Someone hides an item, using the Get It Red phone app, anywhere they want as long as it is accessible by everyone and not in a building with mulitple floors.</li>
			<br>
			<li>You choose an item you want to find from the list on our website.</li>
			<br>
			<li>You go to the area the item is hidden and select it on the phone app to show you how far away you are.</li>
			<br>
			<li>As you get closer to the item, the screen will say WARMER and change its color to red.</li>
			<br>
			<li>As you get farther from the item, the screen will say COLDER and change its color to blue.</li>
			<br>
			<li>When you find the item press the button that says "found item."</li>
			<br>
			<li>Now that item is yours to keep or hide again.</li>
			</ol>

			<!-- number animate -->
			<div class="animate_from_bottom text-center">

				<!-- animate 1 -->
				<div class="milestone">
					<i class="fa fa-briefcase"></i> <!-- icon -->
					<span class="countTo">{{ $count }}</span> <!-- number -->
					<span class="countToDesc">Items Hidden</span> <!-- short text -->
				</div>

				<!-- animate 2 -->
				<div class="milestone">
					<i class="fa fa-users"></i> <!-- icon -->
					<span class="countTo">118</span> <!-- number -->
					<span class="countToDesc">Our Users</span> <!-- short text -->
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
			<q>It soon became obvious that we were but on the threshold of the discovery.</q>
			<cite>
				<strong>Howard Carter</strong>
			</cite>
		</div>

	</section>
	<!-- QUOTE -->


	<!-- MAP -->
	<section id="map">

		<header>
			<h2 data-animation="bounceIn">Items Hidden Around San Antonio</h2>
			<h3>Can you find them all?</h3>
			<br>
			<div id="map-canvas"></div>
		</header>

	</section>
	<!-- /MAP -->
	
	<!-- TEAM -->
	<section id="team">

		<header>
			<h2 data-animation="bounceIn">MEET OUR TEAM</h2>
		</header>


		<!-- team description -->
		<article class="container text-left">			
			<p class="dropcap">We are a group of 3 Junior Web Developers that worked on this app as our final project for Codeup. We hope you have as much fun playing with this app, as we did making it.</p>
		</article>

		<!-- CAROUSEL -->
		<article class="container text-left">
				<div class="owl-carousel column" data-navigation="false" data-singleitem="false" data-autoplay="false" data-animation="fadeIn" id='first_about'>
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
						<p>I'm a proficient LAMP stack J web developer, able to learn other platforms. Having completed a 12-week bootcamp at Codeup I can say that I am fully prepared and excited to create new things.</p>
						<p>I am focused, determined and very driven to create something that is unique and useful to others. Even if I make mistakes, I am always happy to learn from them, always pushing forward and always aspiring to learn new things in order for me to improve and excel as a professional. I believe that there’s always room for improvement and working together as a team is important.</p>
						<a target="_blank" href="https://www.facebook.com/andres.abad.520" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="https://twitter.com/iandresabad" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="https://plus.google.com/u/0/106983130589802187676/posts" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
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
						<p>I am a full stack web developer.  I completed the Codeup 12-week bootcamp for the LAMP+J stack in April 2014.  I am able to look at what is need of the program and see a clear way to write code to make those functions happen.  I focus on making sure the end product is easy to use and functions without problem.  I am detail oriented and want it all to work together well.</p>

						<p>Once I finish the Codeup Bootcamp I would like to get a job where I can use my skills while at the same time continue learning new technologies.</p>
						<a target="_blank" href="http://www.facebook.com/CameronHolland" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="https://twitter.com/xCAMER0Nx" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="https://plus.google.com/u/0/110993532765708460104/posts" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
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
						<p>I am currently studying at Codeup to become a web developer. I am excited for the road that lies ahead as I use my creativity and new found skill set to develop beautiful and dynamic sites.</p>

						<p>There are unlimited possibilities in this industry and I intend on taking advantage of every opportunity that comes my way!</p>
						<a target="_blank" href="https://www.facebook.com/nathaniel.medrano.3" class="rounded-icon social fa fa-facebook"></a><!-- facebook -->
						<a target="_blank" href="https://twitter.com/ndmedrano" class="rounded-icon social fa fa-twitter"></a><!-- twitter -->
						<a target="_blank" href="https://plus.google.com/u/0/105000377359217856442/posts" class="rounded-icon social fa fa-google-plus"></a><!-- google plus -->
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
						@if (Auth::check())
							{{ Form::hidden('from', Auth::user()->username) }}
						@endif

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
								@if (Auth::check())
									{{ Form::hidden('username', Auth::user()->id) }}
								@endif
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

					<p class="animate_fade_in">
						<i class="fa fa-map-marker rounded-icon"></i> 112 E Pecan St, San Antonio, TX 78205
					</p>
					<p class="animate_fade_in">
						<i class="fa fa-envelope rounded-icon"></i> getitred.geo@gmail.com
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
	<script type="text/javascript" src="/assets/plugins/iscroll/iscroll.js"></script>
	<script type="text/javascript" src="/assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<!-- /PLUGINS -->

	<script type="text/javascript" src="/assets/js/demo.js"></script>
	
	<script type="text/javascript" src="/assets/js/scripts.js"></script>
	<script async type="text/javascript" src="/assets/js/shop.js"></script>

@stop