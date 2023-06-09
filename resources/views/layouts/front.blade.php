<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>
		<meta name="description" content="Testo - Pizza and Fast Food Landing Page Template"/>
		<meta name="keywords" content="Jthemes, Food, Fast Food, Restaurant, Pizzeria, Restaurant Menu, Pizza, Burger, Sushi, Steak, Grill, Snack">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  		<!-- SITE TITLE -->
		<title>Testo - Pizza and Fast Food Landing Page Template</title>

		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/frontend/images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="/frontend/images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/frontend/images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/frontend/images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="/frontend/images/apple-touch-icon.png">
		<link rel="icon" href="/frontend/images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="/frontend/css/bootstrap.min.css" rel="stylesheet">

		<!-- FONT ICONS -->
		<link href="../../../../../use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="/frontend/css/menu.css" rel="stylesheet">
		<link href="/frontend/css/magnific-popup.css" rel="stylesheet">
		<link href="/frontend/css/flexslider.css" rel="stylesheet">
		<link href="/frontend/css/owl.carousel.min.css" rel="stylesheet">
		<link href="/frontend/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="/frontend/css/jquery.datetimepicker.min.css" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="/frontend/css/style.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="/frontend/css/responsive.css" rel="stylesheet">

	</head>

	<body>

		<div id="loader-wrapper">
			<div id="loader">
				<div class="cssload-spinner">
					<div class="cssload-ball cssload-ball-1"></div>
					<div class="cssload-ball cssload-ball-2"></div>
					<div class="cssload-ball cssload-ball-3"></div>
					<div class="cssload-ball cssload-ball-4"></div>
				</div>
			</div>
		</div>

		<!-- HEADER-1
		============================================= -->
		<header id="header-1" class="header navik-header header-shadow center-menu-1 header-transparent">
			<div class="container">


				<!-- NAVIGATION MENU -->
				<div class="navik-header-container">


					<!-- CALL BUTTON -->
				    <div class="callusbtn"><a href="tel:123456789"><i class="fas fa-phone"></i></a></div>


					<!-- LOGO IMAGE -->
	                <div class="logo" data-mobile-logo="/frontend/images/logo-01.png" data-sticky-logo="/frontend/images/logo-01.png">
	                	<a href="{{ route('welcome.index') }}"><img src="/frontend/images/logo-01.png" alt="header-logo"/></a>
					</div>


					<!-- BURGER MENU -->
					<div class="burger-menu">
						<div class="line-menu line-half first-line"></div>
						<div class="line-menu"></div>
						<div class="line-menu line-half last-line"></div>
					</div>


					<!-- MAIN MENU -->
	                <nav class="navik-menu menu-caret navik-yellow">
	                	<ul class="top-list">

	                		<!-- DROPDOWN MENU -->
                            <li><a href="{{ route('welcome.index') }}">Home</a>
	                		</li>

	                		<li><a href="{{ route('category.index') }}">Category</a>
	                		</li>

	                		<!-- DROPDOWN MENU -->
	                    	<li><a href="{{ route('menu.index') }}">Menu</a>
	                        </li>

	                        <!-- MEGA MENU -->
	                        <li class="mega-menu"><a href="{{ route('reservation.stepOne') }}">Reservation</a>
							</li>	<!-- END MEGA MENU -->

						</ul>

                        <ul>

                            @guest
                            <div class="d-flex justify-content-end pt-3">
                                <li class="">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>

                                <!-- DROPDOWN MENU -->
                                <li>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>

                            </div>
                            @endguest

							@auth
	                		<li class="d-flex justify-content-end">
                                <a href="{{ route('logout') }}">Logout</a>
	                		</li>
                            @endauth
	                    </ul>
	                </nav>	<!-- END MAIN MENU -->


				</div>	<!-- END NAVIGATION MENU -->


			</div>     <!-- End container -->
		</header>	<!-- END HEADER-1 -->


		<!-- PAGE CONTENT
		============================================= -->
		<div id="page" class="page">

            @yield('content')

            <footer id="footer-4" class="footer division">
				<div class="container grey-color">

					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col-md-5 col-lg-6">
								<div class="footer-copyright">
									<p>&copy; 2020 Testo. All Rights Reserved</p>
								</div>
							</div>


							<!-- BOTTOM FOOTER LINKS -->
							<div class="col-md-7 col-lg-6">
								<ul class="bottom-footer-list text-right clearfix">
									<li><p class="first-list-link"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></p></li>
									<li><p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p></li>
									<li><p><a href="#"><i class="fab fa-youtube"></i> YouTube</a></p></li>
									<li><p class="last-li"><a href="#"><i class="fab fa-yelp"></i> Yelp</a></p></li>
								</ul>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- END BOTTOM FOOTER -->

                    {{-- <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-">
							<div class="footer-info mb-40 text-center">

								<!-- Footer Logo -->
								<div class="footer-logo"><img src="/frontend/images/logo-01.png" alt="footer-logo"/></div>

								<!-- Footer Copyright -->
								<p>&copy; 2020 Testo. All Rights Reserved</p>

							</div>
						</div>


					</div> --}}


				</div>	   <!-- End container -->
			</footer>

		</div>	<!-- END PAGE CONTENT -->


		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="/frontend/js/jquery-3.5.1.min.js"></script>
		<script src="/frontend/js/bootstrap.min.js"></script>
		<script src="/frontend/js/modernizr.custom.js"></script>
		<script src="/frontend/js/jquery.easing.js"></script>
		<script src="/frontend/js/jquery.appear.js"></script>
		<script src="/frontend/js/jquery.scrollto.js"></script>
		<script src="/frontend/js/menu.js"></script>
		<script src="/frontend/js/materialize.js"></script>
		<script src="/frontend/js/jquery.flexslider.js"></script>
		<script src="/frontend/js/owl.carousel.min.js"></script>
		<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
		<script src="/frontend/js/contact-form.js"></script>
		<script src="/frontend/js/comment-form.js"></script>
		<script src="/frontend/js/booking-form.js"></script>
		<script src="/frontend/js/jquery.datetimepicker.full.js"></script>
		<script src="/frontend/js/jquery.validate.min.js"></script>
		<script src="/frontend/js/jquery.ajaxchimp.min.js"></script>

		<!-- Custom Script -->
		<script src="/frontend/js/custom.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->


		{{-- <script defer src="/frontend/js/changer.js"></script>   --}}



	</body>
</html>
