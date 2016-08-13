 <!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Solo Maquinas | Taller de Reparación de Máquinas de Coser</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('tema/css/bootstrap.min.css') }}" rel="stylesheet">

 	
    <!-- Custom Google Web Font -->
    <link href="{{ asset('tema/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="{{ asset('tema/css/general.css') }}" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="{{ asset('tema/css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('tema/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('tema/css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('tema/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('tema/css/animate.css') }}" rel="stylesheet">
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="{{ asset('tema/css/magnific-popup.css') }}"> 
	
	<script src="{{ asset('tema/js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	@yield('content')
	
    <!-- JavaScript -->
    <script src="{{ asset('tema/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('tema/js/bootstrap.js') }}"></script>
	<script src="{{ asset('tema/js/owl.carousel.js') }}"></script>
	<script src="{{ asset('tema/js/script.js') }}"></script>
	<!-- StikyMenu -->
	<script src="{{ asset('tema/js/stickUp.min.js') }}"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('tema/js/jquery.corner.js') }}"></script> 
	<script src="{{ asset('tema/js/wow.min.js') }}"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="{{ asset('tema/js/classie.js') }}"></script>
	<script src="{{ asset('tema/js/uiMorphingButton_inflow.js') }}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{ asset('tema/js/jquery.magnific-popup.js') }}"></script>

	<script src="{{ asset('js/vue.min.js') }}"></script>
   	@yield('js')

</body>

</html>
