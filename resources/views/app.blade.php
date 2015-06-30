<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DDIPG RGPV</title>

	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/myedits.css') }}" rel="stylesheet">
	

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
	{{-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300' rel='stylesheet' type='text/css'> --}}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	
		{{-- Masthead --}}
		<div id ="masthead" class="container-fluid masthead " style="margin:0; padding:0;margin-bottom:15px; min-width:100%;">
			<div class="container">

				<div id = "masthead_row" class="row-fluid">
					
					<div class="col-md-8" >
						<div id="banner">
							<img src="/rgtu.png" style="width:10%; float:left; margin-right: 15px; margin-top:-10px;">
							<h3 style="font-weight:100;">Rajiv Gandhi Proudyogiki Vishwavidyalaya</h3>
							<h4 style="font-weight:100;">Dual Degree Integrated PG Programme</h4>
						</div>
					</div>
									</div>
			</div>
		

			
		
		<nav class="navbar navbar-default" style="background:transparent; padding-bottom:0px; border:0px;margin-bottom:0px">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapsable">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>

				<div class="navbar-collapse collapse" id="navbar-collapsable">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}" >HOME</a></li>
						<li><a href="{{ url('/about') }}">ABOUT</a></li>
						<li><a href="{{ url('/admissions') }}">ADMISSIONS</a></li>
						<li><a href="{{ url('/academics') }}">ACADEMICS</a></li>
						<li><a href="{{ url('/campus') }}">CAMPUS LIFE</a></li>
						<li><a href="{{ url('/contact') }}">CONTACT</a></li>
						<li><a href="{{ url('nstrack')}}">NOTESHEETS</a></li>
						<li><a href="{{ url('result')}}">RESULT</a></li>
						{{-- <li><a href="{{url('qnaforum')}}">DISKUS</a></li> --}}
						<li><a href="{{ url('stures')}}">RESOURCES</a></li>

						
					</ul>

					<ul class="nav navbar-nav navbar-right" id="right-nav" style="float:left">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
							<li><a href="{{ url('/auth/register') }}">Register</a></li>
						@else
							

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</div>
		
		
		<div class="container-fluid">

			@yield('content')
		</div>

		<footer class="footer">
			
				<div class="container">
	        		<div class="row">
	        			<div class="col-sm-2">
	        				<div id="footerLogo">
	        					<h4>RGPV</h4>	
	        				</div>
	        				
	        			</div>
	        			<div class="col-sm-10">
	        				<div>
	        					<ul>
		        					<li><a href="http://www.rgpv.ac.in">Home</a></li>
		        					<li><a href="#">Maps & Directions</a></li>
		        					<li><a href="#">Emergency Info</a></li>
		        					<li><a href="/contact">Contact Us</a></li>
	        					</ul>
	        				</div>	
	        			</div>	
	        		</div>
        		</div>
        	
        	
				<div id = "footerRights"class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<p>Influxys © 2015 All rights reserved.</p>
							
						</div>
						
					</div>
					
				</div>        		
        	
		</footer>

		
	
	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
