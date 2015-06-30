@extends('app')
@section('content')
	<div class="container">
		<h1>Student Resources</h1>
		<div class="row">
			<div class="col-md-4" style="margin:20px;">
				<div class="row" style="background-color:#f5f5f5; padding:20px;">
					<h3>Scheme and Syllabus</h3>
						<p class="lead">
							RGPV's academic departments are listed both alphabetically and by school. In addition, a number of interdisciplinary programs cross boundaries between disciplines.
						</p>
						<ul>

							<li><a href="#">Civil Engineering</a></li>
							<li><a href="#">Computer Science and Engineering</a></li>
							<li><a href="#">Electrical Engineering</a></li>
							<li><a href="#">Electronincs & Communications</a></li>
							<li><a href="#">Information Technology</a></li>
							<li><a href="#">Mechanical Engineering</a></li>
						</ul>
				</div>
			</div>
		

				<div class="col-md-4" style="margin:20px">
					<div class="row" style="background-color:#f5f5f5; padding:20px;">
						<h3>Calender</h3>
							<ul>
								<li><a href="#">Academic Calender</a></li>
								<li><a href="#">Exam Datesheets</a></li>
								<li><a href="#">Annual Sports Meet</a></li>
								<li><a href="#">Vacations</a></li>
							</ul>
						
					</div>
					
				</div>

				<div class="col-md-4" style="margin:20px">
					<div class="row" style="background-color:#f5f5f5; padding:20px;	">
						<h3>Services</h3>
						<ul>
							<li ><a href="/result">View Result</a></li>
							<li><a href="/qnaforum">Diskus</a></li>
							<li><a href="http://resume.linkedinlabs.com">Create Resume</a></li>
						</ul>
						
					</div>
					
				</div>
				
		</div>
		
	
	</div>
@stop