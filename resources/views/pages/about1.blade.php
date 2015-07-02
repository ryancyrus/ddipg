@extends ('app')
@section('content')

	<div class="row">
		<div class="col s12 m12 l7">
			{{-- Tabs --}}
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s4"><a href="#history">History</a></li>
					<li class="tab col s4"><a href="#vision">Vision</a></li>					
					<li class="tab col s4"><a href="#administration">Administration</a></li>
					
				</ul>
			</div>
			{{-- History --}}
			<div id="history"class=" col s12">
				<div class="row section card z-depth-0">
					<div class="col s12 card-image">
						<img src="/history.jpg" class="responsive-img" style="display:block">
						<span class="card-title">History</span>
					</div>
					<div class="col s12">
				
						<p class="text-content">
							Rajiv Gandhi Proudyogiki Vishwavidyalaya, located in the heart of
							Madhya Pradesh, is one of the state's leading teaching and research universities. Since its opening in 1998, RGPV has been dedicated to finding solutions to big challanges and to prepare students for leadership in a complex world.

							Rajiv Gandhi Proudyogiki Vishwavidyalaya was established in the year 1998, by Madhya Pradesh Vidhan Sabha Act 13, 1998. Over a sprawling Campus of about 247 acres, the Rajiv Gandhi Proudyogiki Vishwavidyalaya is marching towards development into a center of excellence in the arena of Technical Education, Research and Innovations. Under its umbrella there are 05 UTD's , 219 affiliated Engineering Colleges, 87 Pharmacy Colleges, 80 MCA Colleges and 05 Architecture Colleges imparting Graduate level instructions running around 21 under graduate level courses, 85 Polytechnic institutions offering diploma courses in emerging and conventional disciplines. Situated amidst an aesthetic and hilly surrounding, the University is now offering Ph.Ds and 69 post graduate degrees.

							Rajiv Gandhi Proudyogiki Vishwavidyalaya is truly a picture of modernization. With an extensive presence on the internet, Rajiv Gandhi Technical University has courses which can suit anyone. Courses offered Rajiv Gandhi Technical University offers undergraduate and postgraduate full time and online courses.They specialize in fields like Management, Forensic Science, Fashion, Engineering, Space Sciences, Social Work, Nanotechnology, Communication and Pharmacy. Facilities The University has provided air-conditioned amphitheatre style classrooms. The Library of Rajiv Gandhi Technical University is equipped with books, periodicals, national and international journals, CD-ROMS, covering all aspects of academic studies and research material.
						</p>
					</div>
				</div>		
			</div>
			{{-- Vision --}}
			<div id="vision" class="col s12">
				<div class="row section card z-depth-0">
					<div class="col s12 card-image">
						<img src="/vision.jpg" class="responsive-img" style="display:block">
						<span class="card-title">Vision</span>
					</div>

					<div class="col s12">
						<p class="text-content">
							The main thrust of RGPV for next five year is on strategic interventions in four main areas i.e.
						</p>
						<ul class="text-content">
								<li >Enhance opportunities for postgraduate education and research in areas of high relevance to nations science and technology capabilities.</li><br>
								<li>Promote use of IT in technical education through promotion of e-Learning and web enabled teaching processes.</li><br>
								<li>Transforming the university into a knowledge enterprise through its focus on research and development, industrial consultancy and by establishing efficient and effective mechanisms for managing innovations, technology incubation, technology transfer and knowledge management.</li><br>
								<li>Providing effective mechanisms and support facilities for developing faculty and learning resources for its affiliated institutions. The tenth plan document thus include establishment of UTDs, COEs including a centre of Innovation and Technology Management, a Staff College for Human Resources Development in technical education besides strengthening the RGTU System.</li>
						</ul>
					</div>
				</div>		
			</div>
			
			{{-- Administration --}}
			<div id="administration" class="col s12">
				<div class="row section card z-depth-0">
					<div class="col s12 card-image">
						<img src="/offices.jpg" class="responsive-img" style="display:block">
						<span class="card-title">Administration</span>
					</div>
					<div class="col s12">
						<div>
							<h3 class="header">Laws</h3>
							<p class="text-content">
								This course is governed by university ordinances which set a strict bar for quality of education.
								
								This course fall under the ordinance 31 which has be designed to enhance students' academic skills as well as leadership skills.
								<h6 class="teal-text">Download Ordinance 31</h6>						
							</p>
						</div>
						<h3 class="header">Administration</h3>
						<table class="responsive-table">
							<caption style="text-align:center">
								<h4>University Administration</h4>
							</caption>
							<thead>
								<tr>
									<th>Name</th>
									<th>Designtation</th>
									<th>Contact</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Prof. Piyush Trivedi</td>
									<td>Vice Chancellor</td>
									<td>2507801</td>
								</tr>
								<tr>
									<td>Dr. Rakesh Singhai</td>
									<td>Registrar</td>
									<td>2734913</td>
								</tr>
								<tr>
									<td>Dr. A.K. Singh</td>
									<td>Controller(Exams)</td>
									<td>2678855</td>
								</tr>
								<tr>
									<td>Yogendra Saxena</td>
									<td>Controller (Finance)</td>
									<td>2678888</td>

								</tr>
								<tr>
									<td>Dr. Sanjeev Sharma</td>
									<td>Dy. Registrar (Academics)</td>
									<td>2678866, 2670125</td>

								</tr>
								<tr>

									<td>Dr. Rakesh Singhai</td>
									<td>Dy. Registrar (Admn.)</td>
									<td>2678826</td>
								</tr>
							</tbody>
						</table>


						<table class="responsive-table">
							<caption style="text-align:center">
								<h4>Deans</h4>
							</caption>
							<thead >
								<tr>
									<th>Name</th>
									<th>Department</th>
									<th>Contact</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Dr. R.K. Shrivastave</td>
									<td>Civil Engineering</td>
									<td>2678876</td>
								</tr>
								<tr>
									<td>Prof. Sanjay Silakari</td>
									<td>Computer Science & Engneering</td>
									<td>2734976</td>
								</tr>
								<tr>
									<td>Prof. S.C. Choubey</td>
									<td>Electrical & Electronics Engineering</td>
									<td>2678820</td>
								</tr>
								<tr>
									<td>Mukesh Pandey</td>
									<td>Industrial & Technology</td>
									<td>2678874</td>

								</tr>
								<tr>
									<td>Prof.Anil Goyal</td>
									<td>Applied Mathematics</td>
									<td>2678870</td>

								</tr>
								<tr>

									<td>Dr. Rakesh Singhai</td>
									<td>Dy. Registrar (Admn.)</td>
									<td>2678826</td>
								</tr>



							</tbody>
						</table>
					</div>
				</div>		
			</div>		

		</div>
		<div class="col l5 hide-on-med-and-down">
			<div class="card">
				<div class="card-image">
					<img src="/acside.jpg" class="responsive-img">
					<span class="card-title">University at a glance</span>
					
				</div>
				<div class="card-content" id="about-card">
					{{-- <span class="caption">Opened 1990</span> --}}
					<h4>Student Enrollment</h4>
						<ul>
							<li>Undergraduates 20,000</li>
							<li>Graduates 5,000</li>
							
						</ul>
						<h4>Campus</h4>
						<ul>
							<li>250 acres</li>
							<li>24 major buildings</li>
							<li>90% of postgraduates live on campus</li>
							
						</ul>
						<h4>Research</h4>
						<ul>
								<li>Multiple externally sponsored projects</li>
								<li>Rs 200 Crore total budget</li>
								
						</ul>
						<h4>Faculty</h4>
						<ul>
							<li>160 Faculty members</li>
							<li>20 Docotorals</li>
							<li>2:1 student to faculty ratio</li>
						</ul>
					
				</div>
				
			</div>
			
		</div>

	</div>
	
@stop