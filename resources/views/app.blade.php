<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DDIPG RGPV</title>

	<link href="{{ asset('/css/materialize.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	{{-- <link href="{{ asset('/css/ddipg.css') }}" rel="stylesheet"> --}}
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

</head>
<body>
	<header>
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="{{ url('/auth/logout') }}">Logout</a></li>

	</ul>
	<ul id="dropdown2" class="dropdown-content">
		<li><a href="{{ url('/auth/logout') }}">Logout</a></li>

	</ul>
	<nav>

		<div class="nav-wrapper">

			<a href="{{ url('/home') }}" class="brand-logo">UniWeb</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="{{ url('/about') }}">About</a></li>
				<li><a href="{{ url('/admissions') }}">Admissions</a></li>
				<li><a href="{{ url('/academics') }}">Academics</a></li>
				<li><a href="{{ url('/campus') }}">Campus</a></li>
				<li><a href="{{ url('/stures') }}">Resources</a></li>
				

				@if ( Auth::guest())
				<li><a href="{{ url('/auth/register') }}">Sign Up</a></li>
				<li><a href="{{ url('/auth/login') }}">Login</a></li>

				@else
				{{-- Dropdown Trigger --}}
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>

				@endif

			</ul> 
			<ul class="side-nav" id="mobile-demo">
				<li class="logo"><a href="{{ url('/home') }}" class="brand-logo">UniWeb</a></li>
				<li><a href="{{ url('/about') }}">About</a></li>
				<li><a href="{{ url('/admissions') }}">Admissions</a></li>
				<li><a href="{{ url('/academics') }}">Academics</a></li>
				<li><a href="{{ url('/campus') }}">Campus</a></li>
				<li><a href="{{ url('/stures') }}">Resources</a></li>

				

				@if ( Auth::guest())
				<li><a href="{{ url('/auth/register') }}">Sign Up</a></li>
				<li><a href="{{ url('/auth/login') }}">Login</a></li>
				@else
				{{-- Dropdown Trigger --}}
				<li><a class="dropdown-button" href="#!" data-activates="dropdown2">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>

				@endif

			 </ul> 				
		</div>

	</nav>
</header>


	<main>
		<div class="container">
			@yield('content')			
		</div>
	</main>
	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">UniWeb</h5>
					<p class="grey-text text-lighten-4">A College Web Service Portal</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="http://rgpv.ac.in">Home</a></li>
						<li><a class="grey-text text-lighten-3" href="http://rgpv.ac.in">Emergency</a></li>
						<li><a class="grey-text text-lighten-3" href="http://rgpv.ac.in">Contact</a></li>
					</ul>

				</div>

			</div>

		</div>
		<div class="footer-copyright">
			<div class="container">
				© 2015 Copyright Influxys
				<a class="grey-text text-lighten-4 right" href="http://inluxys.io">Developers</a>	
			</div>
		</div>

	</footer>


	<!-- Scripts -->
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/init.js"></script>
</body>
</html>
