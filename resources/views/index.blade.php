<!DOCTYPE html>
<html>
<head>
	<title>Barber Shop Bootstrap Template Grafreez</title>
</head>
<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css"/>
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<body>

<!-- Page loading animation -->
<div class="loader loader-bg">
	<div class="loader-inner ball-pulse">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>

<!-- Top navigation -->
<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container-fluid">
		  <a class="navbar-brand" href="/"><strong>Grafreez</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><img src="img/icons/menu.png"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav m-auto text-sm-center text-md-center">
		      <li class="nav-item">
		        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="services">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="price">Prices</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="testimonial">Testimonials</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact">Contact</a>
		      </li>
			  @guest
			  <li class="nav-item">
				  <a class="nav-link" href="{{ route('auth.login') }}">Login</a>
			  </li>
			  <li class="nav-item">
				  <a class="nav-link" href="{{ route('auth.register') }}">Register</a>
			  </li>
		  @else
			  <li class="nav-item">
				  <a class="nav-link" href="{{ route('logout') }}">Logout</a>
			  </li>
		  @endguest
		    </ul>
		</div>
		  {{-- <ul class="navbar-nav ml-auto search-box">
		    <li class="nav-item">
		      <a class="nav-link" href="#"><i class="fa fa-search text-white"></i></a>
		    </li>
		  </ul> --}}
	</div>
</nav>

<main>
	@yield('content')
</main>



<!-- footer Block -->
<div class="copy-footer bg-primary py-2">
	<div class="container text-center text-light">
		&copy; <a href="http://grafreez.com" target="_blank">Grafreez.com</a> <span id="year"></span>. All rights reserved. Created with <i class="fa fa-heart"></i>
	</div>
</div>



<!-- Javascript Files  -->
<script  src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
<script src="js/gmap-custom.js" ></script>
<script src="js/core.js"></script>
</body>
</html>
