<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta name="robots" content="noindex">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="Anja Seric">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"> 

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('new_landing/css/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('new_landing/css/font-awesome.min.css') }}">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('new_landing/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('new_landing/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('new_landing/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('new_landing/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('new_landing/css/main-custom.css') }}">
	@section('styles')
	@show
</head>
<body class="body" data-spy="scroll" data-target=".header" data-offset="60">
	@yield('content')
	<!-- JS -->
	<script src="{{ asset('new_landing/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.marquee.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/smooth-scroll.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/parallax.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/scrolla.jquery.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('new_landing/js/main.js') }}"></script>
	@section('scripts')
	@show
</body>
</html>