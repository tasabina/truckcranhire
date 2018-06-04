<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Homepage</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<!--<link rel="shortcut icon" href="favicon.png" type="img/x-icon">-->

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script src="contactform/contactform.js"></script>

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To TruckCraneHire</h1><br>
				<h3 style="color: white">carrier company</h3>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>We do all the heavy work for your light moving.</li>
			</ul>

			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>GIVE US A CALL</li><br>
				<li><h2 style="color: white">027 278 8811</h2></li>
			</ul>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
			    <li class="small-logo"><a href="#header"><img src="img/logo_2.png" alt=""></a></li>
				<li><a href="#header">Home</a></li>
				<li><a href="#service">Services</a></li>
				<li><a href="#quote">Get Quote</a></li>
				<li><a href="#Portfolio">Our work</a></li>
				<li><a href="#client">Clients</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>Services</h2>
			<h6>We offer exceptional service with complimentary hugs.</h6>
			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-truck"></i>
						</div>
						<div class="service-list-col2">
							<h3>Modern equipment</h3>
							<p>Truck-Crane-Hire have the latest vehicles equipped to handle any job, big or small. </p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-gear"></i>
						</div>
						<div class="service-list-col2">
							<h3>A full range of services</h3>
							<p>Our vehicles are fitted with all the right gear to make sure you're next move or job is as simple and easy as possible.
								What's more, we match the right vehicle to suit your needs and offer you a seamless and comprehensive service from start to finish. </p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-usd"></i>
						</div>
						<div class="service-list-col2">
							<h3>save money</h3>
							<p>And to keep things simple, we have kept our daily rental rates just that.
								For a competitive rate, excluding all the added extra costs our competitors love to charge,
								then you've come to the right place! </p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
							<i class="fa-clock-o"></i>
						</div>
						<div class="service-list-col2">
							<h3>24/7 Support</h3>
							<p>Our company provides services at any time, when you need it.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-sm-6  text-center wow fadeInUp delay-02s">
					<video width="auto" controls="controls" poster="img/Portfolio-pic6.jpg">
						<source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>
						<source src="video/duel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
						<source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>
						<p>Video is not supported...</p>
					</video>
				</div>

			</div>
		</div>
	</section>
	<!--main-section-end-->



	<section class="main-section alabaster" id="quote">
		<!--main-section alabaster-start-->
		<div class="container">

			<h2>GET QUOTE</h2>
			<h6>Leave you order here.</h6>

				<div class="row">
					<div class="text-center"><button class="input-btn" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Get Quote</button></div>
				</div>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="modalLabel">Get quote</h4>
						</div>
						<div class="modal-body">
							<form action="get_quote.php" method="post" id="new_quote">
								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="user-name" class="col-form-label">Your name:</label>
										<input type="text" class="form-control" name="name1" autocomplete="off" data-rule="minlen:4" data-msg="Please enter at least 4 chars" id="user-name"/>
										<div class="validation"></div>
									</div>
									<div class="form-group col-md-6">
										<label for="user-email" class="col-form-label">E-mail:</label>
										<input type="email" class="form-control" name="mail1" autocomplete="off" data-rule="email" data-msg="Please enter a valid email" id="user-email"/>
										<div class="validation"></div>
									</div>
									<div class="form-group col-md-6">
										<label for="mobile" class="col-form-label">Mobile:</label>
										<input type="tel" class="form-control" name="phone1" autocomplete="off" data-rule="phone" data-msg="Please enter a valid number" id="mobile"/>
										<div class="validation"></div>
									</div>
									<div class="form-group col-md-12">
										<label for="datepicker" class="col-form-label">Data:</label>
										<input type="datetime-local" class="form-control" name="daydata1" id ="datepicker"/>
									</div>

									<div class="form-group col-md-6">
										<label for="adress1" class="col-form-label">Pick up address:</label>
										<input type="text" list="p_cities" class="form-control" name="p_city1"/>
											<datalist id="p_cities" >
												<select >
													<option type="text" autocomplete="off" id="adress1">Choose city...</option>
												</select>
											</datalist>
									</div>
									<div class="form-group col-md-6">
										<label for="street1" class="col-form-label">Street adress:</label>
										<textarea class="form-control" name="p_street1" id="street1"></textarea>
									</div>
									<div class="form-group col-md-6">
										<label for="adress2" class="col-form-label">Delivery address:</label>
										<input type="text" list="d_cities" class="form-control" name="d_city1"/>
										<datalist id="d_cities" >
											<select >
												<option type="text" autocomplete="off" id="adress2">Choose city...</option>
											</select>
										</datalist>
									</div>
									<!--<?php include ("select_district.php");?>-->
									<div class="form-group col-md-6">
										<label for="street2" class="col-form-label">Street adress:</label>
										<textarea class="form-control" name="d_street1" id="street2"></textarea>
									</div>
									<div class="form-group col-md-6">
										<label for="dimensions" class="col-form-label">Approximate dimensions:</label>
										<input type="text" class="form-control" name="dimensions1" id ="dimensions"/>
									</div>
									<div class="form-group col-md-6">
										<label for="weight" class="col-form-label">Approximate weight:</label>
										<input type="text" class="form-control" name="weight1" id="weight"/>
									</div>
									<div class="form-group col-md-12">
										<label for="desc" class="col-form-label">Description of the job:</label>
										<textarea class="form-control" name="description1" id="desc"></textarea>
									</div>
									<div class="form-group col-md-12">
										<label for="ditails" class="col-form-label">Special details:</label>
										<textarea class="form-control" name="details1" id="ditails"></textarea>
									</div>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<input type="submit" value="Send order" class="btn btn-success"/>
							</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			</div>
	</section>
	<!--main-section alabaster-end-->



	<section class="main-section paddind" id="Portfolio">
		<!--main-section-start-->
		<div class="container">
			<h2>Our work</h2>
			<h6>We handled it. We can solve your problem too.</h6>
			<!--<div class="portfolioFilter">-->
				<!--<ul class="Portfolio-nav wow fadeIn delay-02s">-->
					<!--<li><a href="#" data-filter="*" class="current">All</a></li>-->
					<!--<li><a href="#" data-filter=".branding">Branding</a></li>-->
					<!--<li><a href="#" data-filter=".webdesign">Web design</a></li>-->
					<!--<li><a href="#" data-filter=".printdesign">Print design</a></li>-->
					<!--<li><a href="#" data-filter=".photography">Photography</a></li>-->
				<!--</ul>-->
			<!--</div>-->

		</div>
		<div class="portfolioContainer wow fadeInUp delay-04s">
			<div class=" Portfolio-box printdesign">
				<a href="#Portfolio"><img src="img/Portfolio-pic1.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
			<div class="Portfolio-box webdesign">
				<a href="#Portfolio"><img src="img/Portfolio-pic2.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
			<div class=" Portfolio-box branding">
				<a href="#Portfolio"><img src="img/Portfolio-pic3.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
			<div class=" Portfolio-box photography">
				<a href="#Portfolio"><img src="img/Portfolio-pic4.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
			<div class=" Portfolio-box branding">
				<a href="#Portfolio"><img src="img/Portfolio-pic5.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
			<div class=" Portfolio-box photography">
				<a href="#Portfolio"><img src="img/Portfolio-pic6.jpg" alt=""></a>
				<h3>Cabin relocated</h3>
				<p>Private client</p>
			</div>
		</div>
	</section>
	<!--main-section-end-->


	<section class="main-section client-part" id="client">
		<!--main-section client-part-start-->
		<div class="container">
			<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05">Good job! Thanks a lot!</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>Evgeny Ivanov</h3>
                <span>Landlord LTD</span>
            </a></li>
			</ul>
		</div>
	</section>
	<!--main-section client-part-end-->
	<div class="c-logo-part">
		<!--c-logo-part-start-->
		<div class="container">
			<!--<ul>-->
				<!--<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>-->
				<!--<li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>-->
				<!--<li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>-->
				<!--<li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>-->
				<!--<li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>-->
			<!--</ul>-->
		</div>
	</div>
	<!--c-logo-part-end-->
	<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Allow me to introduce our great team. We can handle any challenge.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic1.jpg" alt="">
						<!--<ul>-->
							<!--<li><a href="#" class="fa-twitter"></a></li>-->
							<!--<li><a href="#" class="fa-facebook"></a></li>-->
							<!--<li><a href="#" class="fa-pinterest"></a></li>-->
							<!--<li><a href="#" class="fa-google-plus"></a></li>-->
						<!--</ul>-->
					</div>
					<h3 class="wow fadeInDown delay-09s">Ivan Ivanov</h3>
					<span class="wow fadeInDown delay-09s">Executive Officer</span>
					<p class="wow fadeInDown delay-09s">He helps you with something..</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic2.jpg" alt="">
						<!--<ul>-->
							<!--<li><a href="#" class="fa-twitter"></a></li>-->
							<!--<li><a href="#" class="fa-facebook"></a></li>-->
							<!--<li><a href="#" class="fa-pinterest"></a></li>-->
							<!--<li><a href="#" class="fa-google-plus"></a></li>-->
						<!--</ul>-->
					</div>
					<h3 class="wow fadeInDown delay-06s">Oleg Rozov </h3>
					<span class="wow fadeInDown delay-06s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-06s">He helps you with something...</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic3.jpg" alt="">
						<!--<ul>-->
							<!--<li><a href="#" class="fa-twitter"></a></li>-->
							<!--<li><a href="#" class="fa-facebook"></a></li>-->
							<!--<li><a href="#" class="fa-pinterest"></a></li>-->
							<!--<li><a href="#" class="fa-google-plus"></a></li>-->
						<!--</ul>-->
					</div>
					<h3 class="wow fadeInDown delay-03s">Ulya Rozova</h3>
					<span class="wow fadeInDown delay-03s">Product manager</span>
					<p class="wow fadeInDown delay-03s">She helps you with something... </p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->



	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>To enquire or make a booking<br>
				call or email us now ! </h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>28 Bay Park Pl<br>Birkdale North Shore Auckland City</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3><i class="fa-phone"></i>Phone:</h3>
						<span>0800 438 966 (0800 GET WOOD)</span>
						<span>027 27 888 11 ask Oleg</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3><i class="fa-pencil"></i>email:</h3>
						<span>redstartimbers@gmail.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3><i class="fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Sunday:</strong> Available 24/7</span>
					</div>
					<ul class="social-link">
						<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
						<li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
						<!--<li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>-->
						<!--<li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>-->
						<!--<li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>-->
					</ul>
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">
						<form action="feedback.php" method="post" role="form">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							</div>
							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
			<span class="copyright">&copy; Truck Crane Hire. All Rights Reserved</span>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>
	<script type="text/javascript">
        $(function(){
            $.getJSON('cities.json', function(data){
                for (var i=0; i < data.cities.length;i++){
                    for(var j=0; j < data.cities[i].district.length; j++){
                        $('#p_cities').append('<option value="' + data.cities[i].district[j].dis_name + '">' + data.cities[i].name + '</option>');
                        console.log();
					}
				}
			})
        });
	</script>
	<script type="text/javascript">
        $(function(){
            $.getJSON('cities.json', function(data){
                for (var i=0; i < data.cities.length;i++){
                    for(var j=0; j < data.cities[i].district.length; j++){
                        $('#d_cities').append('<option value="' + data.cities[i].district[j].dis_name + '">' + data.cities[i].name + '</option>');
                        console.log();
					}
				}
			})
        });
	</script>
	

</body>

</html>
