<!doctype html>
<html class="nicescroll" lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>HOT-N-COLD - Capstone Project</title>
		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="assets/plugins/lt-ie9/html5.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/respond.min.js"></script>
			<script type="text/javascript" src="assets/plugins/lt-ie9/excanvas.compiled.js"></script>
		<![endif]--> 

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
		<link href="/assets/css/color/orange.css" rel="stylesheet" type="text/css" /><!-- demo default style -->


		<!-- colors : demo only -->
		<link href="/assets/css/color/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="/assets/css/color/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="/assets/css/color/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="/assets/css/color/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="/assets/css/color/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="/assets/css/color/gray.css" rel="alternate stylesheet" type="text/css" title="gray" />
		<link href="/assets/css/color/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="/assets/css/color/mauve.css" rel="alternate stylesheet" type="text/css" title="mauve" />

		<!-- ICONS -->
		<link rel="shortcut icon" href="/assets/images/icon.png" type="image/x-icon" />
		<link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- STYLESWITCHER -->
		<link href="/assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css"/>

	</head>
	<body>



		<!-- STYLESWITCHER -->
		<div id="switcher">
			<div class="content-switcher" >        
				<h4>STYLE OPTIONS</h4>

				<p>Color Skin:</p>
				<ul style="width:150px;">            
					<li><a href="#" onclick="setActiveStyleSheet('orange'); return false;" class="color" style="background-color:#F07057"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('blue'); return false;" class="color" style="background-color:#50657B"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('green'); return false;" class="color" style="background-color:#6aa018"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('red'); return false;" class="color" style="background-color:#e93735"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('pink'); return false;" class="color" style="background-color:#f73f69"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('mauve'); return false;" class="color" style="background-color:#c91ac9"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('yellow'); return false;" class="color" style="background-color:#f1c40f"></a></li>
					<li><a href="#" onclick="setActiveStyleSheet('gray'); return false;" class="color" style="background-color:#333333"></a></li>
				</ul>        

				<p>Home Page Template:</p>
				<div class="styled-select">
					<select onchange="window.document.location.href=this.options[this.selectedIndex].value;">  
						
						<optgroup label="Standard">
							<option value="index-1.html">01. Fullscreen Slider</option>
							<option selected="selected">02. Image Only</option>
						</optgroup>

						<optgroup label="Video Frame &amp; Parallax">
							<option value="index-3.html">03. Parallax &amp; Video - full</option>
							<option value="index-4.html">04. Parallax &amp; Video - Normal</option>
						</optgroup>

						<optgroup label="Text &amp; Parallax">
							<option value="index-5.html">05. Text with Parallax Bg</option>
							<option value="index-6.html">06. Text Only - Normal</option>
							<option value="index-7.html">07. Text Only - Full</option>
						</optgroup>

						<optgroup label="Video Background">
							<option value="index-8.html">08. Video Background - Full</option>
							<option value="index-9.html">09. Video Background - Normal</option>
						</optgroup>

					</select>
				</div>

				<div id="hideSwitcher">&times;</div>
			</div>
		</div>
		<div id="showSwitcher"><i class="fa fa-tint"></i></div>
		<!-- /STYLESWITCHER -->

		

		<!-- HOME -->
		<section id="home" class="homeTop nofull imageOnly color">
			<span class="raster"></span>

			<div class="image-caption">
				<div class="inner">
					<h1> 
						<span class="color_red">Hot</span> 

						-N- 

						<span class="color_blue">Cold</span>
					</h1>
					<h2>(Capstone)</h2>
				</div>
			</div>
			<img src="assets/images/preview/slider/MapGeoLocator.jpg" alt="" />

		</section>
		<!-- /HOME -->

		<!-- HEADER -->
		<header id="header">
			<div class="container">

				<!-- LOGO -->
				<a href="#home" class="pull-left scrollTo"><img src="assets/images/HotnColdLogo.png" height="60" alt="welcome" /></a>

				<!-- MOBILE MENU -->
				<button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"></button>

				<!-- NAV MENU -->
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul id="onepageNav" class="nav navbar-nav navbar-right"><!-- id="onepageNav" for homepage only -->
						<li class="active"><a href="#home">HOME</a></li>
						<li><a href="#services">RULES</a></li>
						<li><a href="#skills">MAP</a></li>
						<li><a href="#portfolio">DESCRIPTION</a></li>
						<li><a href="#team">ABOUT US</a></li>
						<li><a href="#contact">CONTACT</a></li>
						<li><a href="#pricing">SING UP</a></li>
						<li><a href="#login">LOGIN</a></li>
						<li><a href="#profile">PROFILE</a></li>
					</ul>
				</nav>
				<!-- /NAV MENU -->

			</div>
		</header>
		<!-- /HEADER -->

		<!-- Rules for the App -->
		<section id="about" class="color">

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




		<!-- SHOP NAME -->
		<section class="page-name parallax" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/preview/slider/parallax_bg.jpg);">
			<span class="overlay"></span>
			<span class="name">
				<b>Deus</b> Draggable Shop<b>!</b>
				<i class="fa fa-arrows-alt"></i>
			</span>
		</section>

		<!-- PRODUCT LIST -->
		<section id="shop">

			<div class="container iScroll">
				<span id="dragInfoText">
					DRAG LEFT AND RIGHT TO VIEW MORE
				</span>

				<div id="dragInfo"></div>

				<div id="iscrollWrapper">

					<div id="scroller" class="dragCursor">

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/1.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/2.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/3.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/4.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/5.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/9.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/6.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/7.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/8.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/5.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/6.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/7.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/8.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

						<!-- product item -->
						<div class="item">
							<a class="itemHref" href="shop-product-ajax.html">
								<img src="assets/images/preview/content/shop/1.jpg" alt="" height="200" /> <!-- product thumbnail image (200px height) -->
								<h3>Product Name</h3>
								<h4>
									$32.00				<!-- new price -->
									<span>$36.00</span> <!-- old price (line through) -->
								</h4><!-- /price -->
							</a>
						</div>

					</div>
				</div>

				<!-- INDICATOR - SCROLL POSITION -->
				<div id="indicator"><div id="indicator-line"></div></div>
				<!-- /INDICATOR - SCROLL POSITION -->




				<!-- PRODUCT DETAIL -->
				<section id="product_info" class="nicescroll">
					<button id="closeProduct"></button>
					<div id="productContent"><!-- ajax : shop-product-ajax.html --></div>
				</section>
				<!-- /PRODUCT DETAIL -->



			</div>
			
		</section>
		<!-- /PRODUCT LIST -->

		
		
		
		
		
		
		<!-- BRANDS -->
		<section id="brands">
			<div class="container">

				<!-- BRANDS CAROUSEL -->
				<div class="owl-carousel" data-navigation="false" data-singleitem="false" data-autoplay="true" data-animation="bounceIn">
					<div class="item dragCursor"><img src="assets/images/preview/brands/8.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/1.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/2.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/3.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/4.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/5.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/6.png" height="60" alt="..." /></div>
					<div class="item dragCursor"><img src="assets/images/preview/brands/7.png" height="60" alt="..." /></div>
				</div>

			</div>
		</section>
		<!-- BRANDS -->




		
		<!-- SHOP CART - delete this section to use cart.html - a separate page -->
		<section id="cart" class="hide">

			<div class="container">
			<header>
				<h2>SHOP CART</h2>
			</header>

				<!-- cart content -->
				<div id="cartContent">
					<!-- cart header -->
					<div class="item head">
						<span class="cart_img"></span>
						<span class="product_name">PRODUCT NAME</span>
						<span class="remove_item"></span>
						<span class="total_price">TOTAL</span>
						<span class="qty">QUANTITY</span>
						<div class="clearfix"></div>
					</div>
					<!-- /cart header -->

					<!-- cart item -->
					<div id="4GH7SS" class="item">
						<div class="cart_img"><img src="assets/images/preview/content/shop/6.jpg" alt="" width="80" /></div>
						<div class="product_name">Samsung i9105 Galaxy S II Plus, 8GB, Blue Gray</div>
						<a href="#" class="remove_item" data-itemcode="4GH7SS">X</a>
						<div class="total_price">$<span>32.00</span></div>
						<div class="qty"><input type="text" value="1" name="qty" maxlength="3" data-itemcode="4GH7SS" data-unitprice="32.00" /> x $32.00</div>
						<div class="clearfix"></div>
					</div>
					<!-- /cart item -->

					<!-- cart item -->
					<div id="4GH7SZ" class="item">
						<div class="cart_img"><img src="assets/images/preview/content/shop/4.jpg" alt="" width="80" /></div>
						<div class="product_name">Samsung i9105 Galaxy S II Plus, 8GB, Blue Gray</div>
						<a href="#" class="remove_item" data-itemcode="4GH7SZ">X</a>
						<div class="total_price">$<span>32.00</span></div>
						<div class="qty"><input type="text" value="1" name="qty" maxlength="3" data-itemcode="4GH7SZ" data-unitprice="32.00" /> x $32.00</div>
						<div class="clearfix"></div>
					</div>
					<!-- /cart item -->

					<!-- cart total -->
					<div class="total styleColor">
						<small>
							Shipping: $<span id="shipping">0</span>
						</small>

						<span class="totalToPay">
							TOTAL: $<span id="total_payment">0</span>
						</span>
					</div><div class="clearfix"></div>
					<!-- /cart total -->

				</div><div class="clearfix"></div>
				<!-- /cart content -->

				<form id="form_checkout" method="post" action="#">

					<!-- SHIPPING INFO -->
					<div id="shippingInfo">
						<h4>SHIPPING INFO</h4>

						<div class="row">
							<!-- email - warning - also used by paypal -->
							<div class="col-xs-12">
								<label class="control-label">Email</label>
								<input required type="text" class="form-control" name="email"  />
							</div>
							<!-- first name -->
							<div class="col-xs-6">
								<label class="control-label">First Name</label>
								<input required type="text" class="form-control" name="first_name" />
							</div>
							<!-- last name -->
							<div class="col-xs-6">
								<label class="control-label">Last Name</label>
								<input required type="text" class="form-control" name="last_name" />
							</div><div class="clearfix"></div>

							<!-- address #1 -->
							<div class="col-xs-12">
								<label class="control-label">Address 1</label>
								<input required type="text" class="form-control" name="address_1" />
							</div>
							<!-- address #2 -->
							<div class="col-xs-12">
								<label class="control-label">Address 2</label>
								<input type="text" class="form-control" name="address_2" />
							</div><div class="clearfix"></div>

							<!-- state -->
							<div class="col-xs-6">
								<label class="control-label">State</label>
								<input type="text" class="form-control" name="state" />
							</div>
							<!-- city -->
							<div class="col-xs-6">
								<label class="control-label">City</label>
								<input required type="text" class="form-control" name="city" />
							</div><div class="clearfix"></div>

							<!-- country -->
							<div class="col-xs-6">
								<label class="control-label">Country</label>
								<input required type="text" class="form-control" name="country" />
							</div>
							<!-- zip / postal code -->
							<div class="col-xs-6">
								<label class="control-label">Zip/Postal Code</label>
								<input required type="text" class="form-control" name="zipcode" />
							</div><div class="clearfix"></div>

							<!-- phone -->
							<div class="col-xs-6">
								<label class="control-label">Phone</label>
								<input required type="text" class="form-control" name="phone" />
							</div>
							<!-- fax -->
							<div class="col-xs-6">
								<label class="control-label">Fax</label>
								<input type="text" class="form-control" name="fax" />
							</div><div class="clearfix"></div>
						</div>

					</div>
					<!-- /SHIPPING INFO -->

					<!-- PAYMENT METHOD -->
					<div id="paymentMethod">
						<h4>PAYMENT METHOD</h4>

						<!-- selected payment method on hidden input added by javascript. Default: credit-card-->
						<input type="hidden" id="payment_method" name="payment_method" value="credit_card" />

						<!-- Payment Methos Switcher -->
						<ul>
							<li><a class="on" href="#credit_card">CREDIT CARD</a></li>
							<li><a href="#paypal">PAYPAL</a></li>
						</ul><div class="clearfix"></div>
						<!-- /Payment Methos Switcher -->

						<!-- CREDIT CARD -->
						<div class="row tab" id="credit_card">

							<!-- name -->
							<div class="col-xs-12">
								<label class="control-label">Name (as it appears on yout credit card)</label>
								<input required type="text" class="form-control" name="card_name" />
							</div><div class="clearfix"></div>

							<!-- Card Type -->
							<div class="col-xs-12">
								<label class="control-label">Card Type</label>
								<select name="card_type" class="form-control">
									<option value="visa">Visa</option>
									<option value="mastercard">Mastercard</option>
									<option value="maestro">Maestro</option>
								</select>
							</div>

							<!-- Card Number -->
							<div class="block col-xs-9"> <!-- class "block" needed on mobile version -->
								<label class="control-label">Card number (no dashes or spaces)</label>
								<input required type="text" class="form-control" name="card_number" />
							</div>
							<!-- Card CVV/CVV2 -->
							<div class="block col-xs-3"> <!-- class "block" needed on mobile version -->
								<label class="control-label">Security Code</label>
								<input required type="text" class="form-control" name="card_code" />
							</div><div class="clearfix"></div>

							<!-- Card Expiration Month -->
							<div class="block col-xs-9"> <!-- class "block" needed on mobile version -->
								<label class="control-label">Exp. Month</label>
								<select name="expiration_month" class="form-control">
									<option value="01">January</option>
									<option value="02">Febryary</option>
									<option value="03">March</option>
									<option value="04">Apryl</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">Ovember</option>
									<option value="12">December</option>
								</select>
							</div>
							<!-- Card Expiration Year -->
							<div class="block col-xs-3"> <!-- class "block" needed on mobile version -->
								<label class="control-label">Exp. Year</label>
								<select name="expiration_year" class="form-control">
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</div><div class="clearfix"></div>
						</div>
						<!-- /CREDIT CARD -->

						<!-- PAYPAL -->
						<div class="tab hide" id="paypal">
							<!-- 
								https://www.paypal.com/cgi-bin/webscr
								PAYPAL HIDDEN FIELDS 
							-->
							<input type="hidden" name="charset" value="utf-8" />
							<input type="hidden" name="cmd" value="_xclick" />  
							<input type="hidden" name="notify_url" value="http://www.yourdomain.com/php/shop/ipn.php" />			<!-- IPN - ORDER SUCCESS or FAIL -->
							<input type="hidden" name="return" value="http://www.yourdomain.com/#thankyou" />  						<!-- thank you screen -->
							<input type="hidden" name="cancel_return" value="http://www.yourdomain.com/#canceled" />  				<!-- back here -->
							<input type="hidden" name="currency_code" value="USD" />
							<input type="hidden" name="business" value="paypalEmail@yourdomain.com" />
							<input type="hidden" name="item_name" value="Shop Order" />  				<!-- product name -->
							<input type="hidden" name="landingpage" value="billing" />  				<!-- client email -->

							<input name="amount" id="amount" type="hidden" value="1" />

							<p>
								Click CHECKOUT to continue.
							</p>
						</div>
						<!-- /PAYPAL -->

						<!-- CHECKOUT BUTTON -->
						<div class="checkout">
							<button class="btn btn-custom btn-lg btn-block">CHECKOUT <i class="fa fa-chevron-right"></i></button>
						</div>

						<!-- credit cards -->
						<div class="credit_cards">
							<img src="assets/images/ico-american-express.jpg" width="41" height="25" alt="" />
							<img src="assets/images/ico-discover.jpg" width="41" height="25" alt="" />
							<img src="assets/images/ico-mastercard.jpg" width="41" height="25" alt="" />
							<img src="assets/images/ico-visa.jpg" width="41" height="25" alt="" />
							<img src="assets/images/ico-paypal.jpg" width="41" height="25" alt="" />
						</div>

					</div>
					<!-- /PAYMENT METHOD -->

					<div class="clearfix"></div>
				</form>

			</div>
		</section>
		<!-- /SHOP CART -->
				
		<!-- SKILLS -->
		<section id="skills">

			<header>
				<h2 data-animation="bounceIn">OUR SKILLS</h2>
			</header>

			<article class="container">

				<!-- SKILLS PRESENT|FUTURE COLUMNS -->
				<div class="row">
					<div class="col-md-6 text-left">
						<h3>PRESENT</h3>
						<p>A skill is the learned ability to carry out a task with pre-determined results often within a given amount of time, energy, or both[citation needed]. In other words the abilities that one possesses. Skills can often be divided into domain-general and domain-specific skills. For example, in the domain of work, some general skills would include time management, teamwork and leadership, self motivation and others, whereas domain-specific skills would be useful.</p>
					</div>
					<div class="col-md-6 text-left">
						<h3>FUTURE</h3>
						<p>A skill is the learned ability to carry out a task with pre-determined results often within a given amount of time, energy, or both[citation needed]. In other words the abilities that one possesses. Skills can often be divided into domain-general and domain-specific skills. For example, in the domain of work, some general skills would include time management, teamwork and leadership, self motivation and others, whereas domain-specific skills would be useful.</p>
					</div>
				</div>
				<!-- /SKILLS PRESENT|FUTURE COLUMNS -->
			
			</article>


			<article class="container">

				<div class="row">
					<!-- Pie Chart #1 -->
					<div class="animate_from_left easyPieChartItem" data-animation="fadeInUp">
						<div class="pieChart" data-bar-color="#F07057" data-bar-width="150" data-percent="100">100%</div>
						<h4>Web Design</h4>
					</div>
					
					<!-- Pie Chart #2 -->
					<div class="easyPieChartItem" data-animation="fadeInUp">
						<div class="pieChart" data-bar-color="#F07057" data-bar-width="150" data-percent="98">98%</div>
						<h4>Web Developing</h4>
					</div>
					
					<!-- Pie Chart #3 -->
					<div class="easyPieChartItem" data-animation="fadeInUp">
						<div class="pieChart" data-bar-color="#F07057" data-bar-width="150" data-percent="48">48%</div>
						<h4>Video Marketing</h4>
					</div>
					
					<!-- Pie Chart #4 -->
					<div  class="animate_from_right easyPieChartItem" data-animation="fadeInUp">
						<div class="pieChart" data-bar-color="#F07057" data-bar-width="150" data-percent="99">99%</div>
						<h4>Support</h4>
					</div>
				</div>

			</article>

		</section>
		<!-- /SKILLS -->

		<!-- SERVICES -->
		<section id="services">
			<header>
				<h2 data-animation="bounceIn">OUR CREATIVE SERVICES</h2>
				<h3>WE DO THE BEST</h3>
			</header>

			<article class="container">
				<p>
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.<br />
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</article>

			<article class="container">

				<!-- services boxes -->
				<div class="serviceBoxContainer">
					<!-- box -->
					<div class="serviceBox" data-animation="fadeInUp">
						<i data-animation="rotateIn" class="fa fa-leaf"></i>
						<h4>CREATIVE DESIGN</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
					</div>
					<!-- /box -->

					<!-- box -->
					<div class="serviceBox" data-animation="fadeInUp">
						<i data-animation="rotateIn" class="fa fa-briefcase"></i>
						<h4>MARKETING</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
					</div>
					<!-- /box -->

					<!-- box -->
					<div class="serviceBox" data-animation="fadeInUp">
						<i data-animation="rotateIn" class="fa fa-camera"></i>
						<h4>PHOTOGRAPHY</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
					</div>
					<!-- /box -->

					<!-- box -->
					<div class="serviceBox" data-animation="fadeInUp">
						<i data-animation="rotateIn" class="fa fa-video-camera"></i>
						<h4>VIDEO</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
					</div>
					<!-- /box -->

				</div>
				<!-- /services boxes -->

			</article>

			<article class="container">

				<!-- services columns -->
				<div class="serviceColumnContainer">
					<div class="row">
						<!-- column left -->
						<div class="col-md-6 text-left">	

							<!-- service #1 -->
							<div class="serviceColumn animate_from_left">
								<i class="ico-stack fa fa-leaf"></i>
								<h3 class="page-header">CREATIVE DESIGN</h3>
								<p>We design beautiful responsive websites and iOS apps focusing on design, content and a great user experience.</p>
							</div>

							<!-- service #2 -->
							<div class="serviceColumn animate_from_left">
								<i class="ico-stack fa fa-briefcase"></i>
								<h3 class="page-header">MARKETING</h3>
								<p>We design beautiful responsive websites and iOS apps focusing on design, content and a great user experience.</p>
							</div>

						</div>

						<!-- column right -->
						<div class="col-md-6 text-left animate_from_right">

							<!-- service #3 -->
							<div class="serviceColumn">
								<i class="ico-stack fa fa-camera"></i>
								<h3 class="page-header">PHOTOGRAPHY</h3>
								<p>We design beautiful responsive websites and iOS apps focusing on design, content and a great user experience.</p>
							</div>

							<!-- service #4 -->
							<div class="serviceColumn animate_from_right">
								<i class="ico-stack fa fa-video-camera"></i>
								<h3 class="page-header">VIDEO</h3>
								<p>We design beautiful responsive websites and iOS apps focusing on design, content and a great user experience.</p>
							</div>

						</div>
					</div>
				</div>
				<!-- /services columns -->


			</article>

		</section>
		<!-- /SERVICES -->


		
		
		

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
				<h2 data-animation="bounceIn">SHOWCASE YOUR WORKS</h2>
				<h3>WE DO THE BEST</h3>
			</header>


			<!-- portfolio menu -->
			<nav class="portfolio-filter primary">
				<ul>
					<li><a href="#" class="selected current" data-filter="*"><i class="fa fa-th-large"></i> All</a></li>
					<li><a href="#" data-filter=".popup"><i class="fa fa-th-large"></i> POPUP</a></li>
					<li><a href="#" data-filter=".img-video"><i class="fa fa-th-large"></i> Image &amp; Video</a></li>
					<li><a href="#" data-filter=".fullscreen"><i class="fa fa-th-large"></i> FULLSCREEN</a></li>
					<li><a href="#" data-filter=".external"><i class="fa fa-th-large"></i> External</a></li>
				</ul>
			</nav>
			<!-- /portfolio menu -->
 
			<!-- portfolio items -->
			<article id="portfolioContainer" class="container">

				<div class="portfolio">

					<div class="item popup">
						<a class="image" data-photo="prettyPhoto[image]" href="assets/images/preview/content/portfolio/1.jpg">
							<img alt="Image Popup" src="assets/images/preview/content/portfolio/thumb/1.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>IMAGE POPUP</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>

					<div class="item img-video">
						<a href="portfolio-image.html">
							<img alt="Image Expander" src="assets/images/preview/content/portfolio/thumb/2.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>IMAGE EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>

					<div class="item img-video">
						<a href="portfolio-video.html">
							<img alt="Video Expander" src="assets/images/preview/content/portfolio/thumb/3.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>VIDEO EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>



					<div class="item fullscreen">
						<a href="portfolio-fullscreen.html">
							<img alt="Fullscreen Expander" src="assets/images/preview/content/portfolio/thumb/4.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>FULLSCREEN EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>
					<div class="item popup">
						<a class="image" data-photo="prettyPhoto[video]" href="http://vimeo.com/7449107">
							<img alt="Video Popup" src="assets/images/preview/content/portfolio/thumb/5.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>VIDEO POPUP</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>
					<div class="item img-video">
						<a href="portfolio-image.html">
							<img alt="Image Expander" src="assets/images/preview/content/portfolio/thumb/6.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>IMAGE EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>



					<div class="item img-video">
						<a href="portfolio-video.html">
							<img alt="Video Expander" src="assets/images/preview/content/portfolio/thumb/7.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>VIDEO EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>
					<div class="item fullscreen">
						<a href="portfolio-fullscreen.html">
							<img alt="Fullscreen Expander" src="assets/images/preview/content/portfolio/thumb/8.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>FULLSCREEN EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>
					<div class="item external">
						<a class="external" href="portfolio-external.html"><!-- external class added for external links -->
							<img alt="External Expander" src="assets/images/preview/content/portfolio/thumb/9.jpg" class="img-responsive" />
							<div class="imgextras">
								<h3>EXTERNAL EXPANDER</h3>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</a>
					</div>

				</div>
			</article>
			<!-- /portfolio items -->


			<!-- portfolio page -->
			<article id="portfolioPage">
				<div id="portfolioPageContainer" class="color">
					<a href="#" class="portfolioClose"><!-- close portfolio page --></a>
					<div id="portfolioPageContent"><!-- ajax content --></div>
				</div>
			</article>
			<!-- /portfolio page -->


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
		
		
		
		
		
		
		<!-- PRICING -->
		<section id="pricing">

			<header>
				<h2 data-animation="bounceIn">OUR SERVICES PRICING</h2>
				<h3>PRICING TABLE</h3>
			</header>

			<article class="container">

				<!-- pricing item -->
				<div data-animation="bounceIn" class="pricing">
					<!-- package name / price -->
					<h3>Basic
						<span>$3</span>
					</h3>
					<div class="pricing-detail">
						<!-- button -->
						<a class="btn btn-custom" href="#"><i class="fa fa-check"></i> PURCHASE NOW</a>
						<!-- details -->
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>			
						</ul>
					</div>
				</div>
				<!-- /pricing item -->

				<!-- pricing item -->
				<div data-animation="bounceIn" class="pricing popular">
					<span class="popular-marker"></span><!-- popular marker -->
					<!-- package name / price -->
					<h3>Standard
						<span>$9</span>
					</h3>
					<div class="pricing-detail">
						<!-- button -->
						<a class="btn btn-custom" href="#"><i class="fa fa-check"></i> PURCHASE NOW</a>
						<!-- details -->
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>			
						</ul>
					</div>
				</div>
				<!-- /pricing item -->

				<!-- pricing item -->
				<div data-animation="bounceIn" class="pricing">
					<!-- package name / price -->
					<h3>Professional
						<span>$29</span>
					</h3>
					<div class="pricing-detail">
						<!-- button -->
						<a class="btn btn-custom" href="#"><i class="fa fa-check"></i> PURCHASE NOW</a>
						<!-- details -->
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>			
						</ul>
					</div>
				</div>
				<!-- /pricing item -->

				<!-- pricing item -->
				<div data-animation="bounceIn" class="pricing">
					<!-- package name / price -->
					<h3>Enterprise
						<span>$49</span>
					</h3>
					<div class="pricing-detail">
						<!-- button -->
						<a class="btn btn-custom" href="#"><i class="fa fa-check"></i> PURCHASE NOW</a>
						<!-- details -->
						<ul>
							<li><b>10GB</b> Disk Space</li>
							<li><b>100GB</b> Monthly Bandwidth</li>
							<li><b>20</b> Email Accounts</li>
							<li><b>Unlimited</b> subdomains</li>			
						</ul>
					</div>
				</div>
				<!-- /pricing item -->

			</article>

		</section>
		<!-- /PRICING -->





		<!-- CONTACT FORM -->
		<section id="contact">

			<header>
				<h2 data-animation="bounceIn">CONTACT US</h2>
				<h3>WE ARE GLAD TO HEAR FROM YOU</h3>
			</header>

			<article class="container">

				<!-- MESSAGE SENT -->
				<div id="alertOk" class="alert alert-success fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span id="alertOkResponse"><strong>Thank You!</strong> Message sent!.</span>
				</div>
				<!-- /MESSAGE SENT -->

				<!-- MESSAGE NOT SENT -->
				<div id="alertErr" class="alert alert-danger fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span id="alertErrResponse"><!-- php output --><strong>Not Sent!</strong> Please complete all fields.</span>
				</div>
				<!-- MESSAGE NOT SENT -->

				<div class="row text-left">
					<div class="col-md-6">

						<!-- EMAIL FORM -->
						<form id="emailForm" class="form-horizontal" method="post" action="php/contact.php">
							<input type="hidden" name="action" value="email_send" />

							<!-- name -->
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input required class="form-control" type="text" id="name" name="name" value="" />
								</div>
							</div>

							<!-- email -->
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input required class="form-control" type="email" id="email" name="email" value="" />
								</div>
							</div>

							<!-- message -->
							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<textarea required class="form-control" id="message" name="message" rows="5"></textarea>
								</div>
							</div>

							<!-- send button -->
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-custom">SEND MESSAGE</button>
								</div>
							</div>
						</form>
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





		<!-- FOOTER -->
		<footer id="footer">

			<!-- google map -->
			<div id="gmap"></div><a href="#" class="gmapClose"></a>

			<!-- footer buttons -->
			<div id="footerContent">
				<div class="container">

					<h2 data-animation="bounceIn">KEEP IN TOUCH</h2>
					<h3>FOLLOW US</h3>

					<!-- 
						paragraph - short description 
						OR
						<div class="spacer"></div>
					-->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="social">
						<!-- facebook -->
						<a target="_blank" href="#" class="socialbtn facebook"><i class="fa fa-facebook"></i>Facebook</a>
						<!-- twitter -->
						<a target="_blank" href="#" class="socialbtn twitter"><i class="fa fa-twitter"></i>Twitter</a>
						<!-- google plus -->
						<a target="_blank" href="#" class="socialbtn google"><i class="fa fa-google-plus"></i>Google Plus</a>
						<!-- twitter -->
						<a target="_blank" href="#" class="socialbtn twitter"><i class="fa fa-linkedin"></i>LinkedIn</a>
						<!-- skype -->
						<a target="_blank" href="skype:username?chat" class="socialbtn skype"><i class="fa fa-skype"></i>Skype</a>
						<!-- google map -->
						<a href="#" class="gmapShow socialbtn gmap"><i class="fa fa-map-marker"></i>Map</a>
					</div>

				</div>
			</div>
			<!-- /footer buttons -->

		</footer>
		<!-- /FOOTER -->


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
		<script async type="text/javascript" src="/assets/plugins/styleswitcher/styleswitcher.js"></script>
	</body>
</html>