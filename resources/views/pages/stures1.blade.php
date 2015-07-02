@extends('app')
@section('content')
<div class="row">
	<h3 class="header">Student Resources</h3>
	<div class="col s4 m4 l4" style="display:block">
		<div class="section" style="text-align:center">

			<h5 class="header">Scheme and Syllabus</h5>
			<p class="text-content">
				RGPV's academic departments are listed both alphabetically and by school. In addition, a number of interdisciplinary programs cross boundaries between disciplines.
			</p>
			<ul class="text-content" style="text-align:center">

				<li><a href="#">Civil Engineering</a></li>
				<li><a href="#">Computer Science and Engineering</a></li>
				<li><a href="#">Electrical Engineering</a></li>
				<li><a href="#">Electronincs & Communications</a></li>
				<li><a href="#">Information Technology</a></li>
				<li><a href="#">Mechanical Engineering</a></li>
			</ul>
		</div>	
	</div>	


	<div class="col s4 m4 l4" style="display:block">
		<div class="section" style="text-align:center" >
			<h5 class="header">Calender</h5>
			<ul class="text-content" style="text-align:center">
				<li><a href="#">Academic Calender</a></li>
				<li><a href="#">Exam Datesheets</a></li>
				<li><a href="#">Annual Sports Meet</a></li>
				<li><a href="#">Vacations</a></li>
			</ul>
		</div>	
	</div>




	<div class="col s4 m4 l4" style="display:block">
		<div class="section" style="text-align:center">
			<h5 class="header">Services</h5>
			<ul class="text-content" style="text-align:center">
				<li ><a href="/result">View Result</a></li>
				<li><a href="/qnaforum">Diskus</a></li>
				<li><a href="http://resume.linkedinlabs.com">Create Resume</a></li>
			</ul>
		</div>	

	</div>
	
</div>
@stop