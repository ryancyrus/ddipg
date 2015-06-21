@extends('app')
@section('content')
	<div class="container">
		<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-intervel="3000">
			{{-- Define Indicators --}}
			<ol class="carousel-indicators">
				<li data-target="#homeCarousel" data-slide-to= "0" class="active"></li>
				<li data-target="#homeCarousel" data-slide-to= "1"></li>
				<li data-target="#homeCarousel" data-slide-to= "2"></li>
			</ol>
			{{-- Insert items in carousel --}}
			<div class="carousel-inner">
				<div class="item active">
					<img src="/img1.jpeg" alt="First Image" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>Aerial View of New York City</p>
							
						</div>
						
					</div>
				</div>
				<div class="item">
					<img src="/img2.jpeg" alt="Second Image" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>Aerial View of New York City</p>
							
						</div>
						
					</div>
				</div>
				<div class="item">
					<img src="/img3.jpeg" alt="Third Image" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>Aerial View of New York City</p>
							
						</div>
						
					</div>
				</div>				
				
			</div>
			{{-- Add Navigation Buttons To Carousel --}}
			<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>

				<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
		</div>

		<div class="container-fluid">
			<h4>Top Stories</h4>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<div class="news-img">
					<a href="#"></a>
					</div>
					<div class="news-text">
						<h3>
							Results Declared
						</h3>
						<p>
							V, VI, VII, VIII Semester results declared
						</p>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="news-img">
					<a href="#"></a>
					</div>
					<div class="news-text">
						<h3>
							Exam Forms Available
						</h3>
						<p>
							BE students have been availed exam forms.
						</p>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="news-img">
					<a href="#"></a>
					</div>
					<div class="news-text">
						<h3>
							Hi-Speed Wifi
						</h3>
						<p>
							Our partner Cisco has upgraded network infrastructure for high speed internet
						</p>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="news-list">
						<h3>
							More News
						</h3>
						<ul>
							<li><a href="#">Tenders</a></li>
							<li><a href="#">Festivals</a></li>
							<li><a href="#">Conferences</a></li>
						</ul>
						
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6" >
					<h4>At RGPV</h4>
					<hr>
					<div style="background-color:#f5f5f5">
					<img src="atrgpv.jpg" class="img-responsive">
					
						<h3>RGPV center for professional development</h3>
					</div>

					
				</div>
				<div class="col-md-6">
					<h4>Events</h4>
					<hr>
					<div class="event postcard-left">
<div class="event-date">
<span class="event-month">APR</span> <span class="event-day">29</span>
</div>
<div class="event-text">
<h4><a href="#" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Annual TechFest</a></h4>
<p class="timestamp">10:30 a.m.</p>
</div>
</div>
<div class="event postcard-left">
<div class="event-date">
<span class="event-month">MAY</span> <span class="event-day">7</span>
</div>
<div class="event-text">
<h4><a href="#" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Green Army Battle</a></h4>
<p class="timestamp">11:30 p.m.</p>
</div>
</div>
<div class="event postcard-left">
<div class="event-date">
<span class="event-month">MAY</span> <span class="event-day">9</span>
</div>
<div class="event-text">
<h4><a href="#" class="su-link" data-ua-action="hp-event" data-ua-label="id ">Artificial Intelligence Conference</a></h4>
<p class="timestamp">2:30 p.m.</p>
</div>
</div>
					
				</div>
				
			</div>

			
		</div>
	</div>
@stop