<!DOCTYPE html>
<html>

	

<!-- bootstrap Style CSS File -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="icon" href="{{asset('img/icons/logo.png')}}">
<!-- Custom Style CSS File -->
<link rel="stylesheet" type="text/css" href="css/custom-style.css">
<link rel="stylesheet" type="text/css" href="css/loaders.css"/>
<!-- Font-Awesome Style CSS File -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

<head>
    <title>Conny Barber Shop - @yield('title')</title>
</head>

<body>

<!-- Page loading animation -->
<div class="loader loader-bg">
	<div class="loader-inner ball-pulse">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>




<main>
	@yield('content')
</main>







<!-- Javascript Files  -->
<script  src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script async deffer type="text/javascript" src="https://maps.google.com/maps/api/js?key= AIzaSyB52BfJHBtqiqYBn_D4ZUqujiWxAOiRyTc&callback=initMap"></script>
<script src="js/gmap-custom.js" ></script>
<script src="js/core.js"></script>
</body>
</html>
