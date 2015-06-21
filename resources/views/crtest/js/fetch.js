
		function onLinkedInLoad() 
		{
     		IN.Event.on(IN, "auth", function() {onLinkedInLogin();});
			IN.Event.on(IN, "logout", function() {onLinkedInLogout();});

		}

		function onLinkedInLogout() {
			displayProfiles(false);
		}

		function onLinkedInLogin()
		{
     		IN.API.Profile("me").fields("firstName", "lastName","associations", "headline", "picture-url", "summary", "specialties",
			"positions", "email-address", "languages", "skills", "educations","interests","certifications",
			"location:(name,country)", "recommendations-received", "phone-numbers", "volunteer",
			"publications", "honors-awards","date-of-birth").result(displayProfiles);
		}

		function displayProfiles(profiles)
		{
			if (!profiles) {
				document.getElementById("login").innerHTML = "<p>You are not logged in.</p>";
				document.getElementById("print").innerHTML = "";
				document.getElementById("edu_no_value").innerHTML = "";
				document.getElementById("ski_no_value").innerHTML = "";
				document.getElementById("pos_no_value").innerHTML = "";
				document.getElementById("cert_no_value").innerHTML = "";
				document.getElementById("pub_no_value").innerHTML = "";
				document.getElementById("hon_no_value").innerHTML = "";
				document.getElementById("int_no_value").innerHTML = "";
				document.getElementById("eml_no_value").innerHTML = "";
				document.getElementById("ph_no_value").innerHTML = "";
				document.getElementById("loc_no_value").innerHTML = "";
				
			}
			else {

	     		member = profiles.values[0];

				     		
							
							

	     		if(member.emailAddress == null){
							
	     					
						document.getElementById("eml_no_value").innerHTML ="<p>Email is empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
					}
					else{
							var NewElem = document.createElement('div');
							NewElem.className= "cnt";
							NewElem.id = "eml";
							NewElem.media = "print";
							NewElem.innerHTML = member.emailAddress;
							document.getElementById("print").appendChild(NewElem);

					
					}




					if(member.phoneNumbers._total == 0){
							document.getElementById("ph_no_value").innerHTML ="<p>Contact Number is empty and will not be part of your resume.Please update your linkedIn Profile.</p>";

					}
					else{
							var numval = member.phoneNumbers._total;
							var num = member.phoneNumbers.values;
							if(numval>=1){
						
							for (var i = 0; i < numval; i++) {
									var NewElem = document.createElement('div');
									NewElem.className= "cnt";
									NewElem.id = "ph";
									NewElem.innerHTML = num[i].phoneNumber;
									document.getElementById("print").appendChild(NewElem);
								};
							}
						
					}




					if(member.location == null){
							document.getElementById("loc_no_value").innerHTML ="<p>Location is empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
					}
					else{
						    var NewElem = document.createElement('div');
							NewElem.className= "cnt";
							NewElem.id = "lct";
							NewElem.innerHTML = member.location.name;
							document.getElementById("print").appendChild(NewElem);

						
					}


	     					var NewElem = document.createElement('div');
							NewElem.className= "name";
							NewElem.id = "nm";
							
						
							NewElem.innerHTML = member.firstName+"&nbsp"+member.lastName;
							document.getElementById("print").appendChild(NewElem);

					var brk = document.createElement("br");
					document.getElementById("print").appendChild(brk);

	     		if(member.skills == null){
	     					document.getElementById("ski_no_value").innerHTML = "<p>Skills are empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
		     	}
		     	else
		     	{
	     		
		     		var skiVal = member.skills.values.length;
		     		
		     		var ski = member.skills.values;
					var skilabel = document.createElement('label');
					skilabel.className= "lbl";
					skilabel.id="skilabel";
					skilabel.innerHTML="Skills";
					document.getElementById("print").appendChild(skilabel);

					if(skiVal>=1){
						
						for (var i = 0; i < skiVal; i++) {
							
							var NewElem = document.createElement('li');
							NewElem.className= "skills";
							NewElem.id = "ski"+i;
							NewElem.innerHTML = ski[i].skill.name;
							document.getElementById("print").appendChild(NewElem);

							
						};

					}
					var brk = document.createElement("br");
					document.getElementById("print").appendChild(brk);
					var hr = document.createElement("hr");
					document.getElementById("print").appendChild(hr);
				}


				if(member.educations == null){
							document.getElementById("edu_no_value").innerHTML ="<p>Education is empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
					}
					else{
							var eduVal = member.educations._total;
							var edu = member.educations.values;
							var edulabel = document.createElement('label');
							edulabel.className= "lbl";
							edulabel.id="edulabel";
							edulabel.innerHTML="Educations";
							document.getElementById("print").appendChild(edulabel);
							if(eduVal>=1){
								for (var i = 0; i < eduVal; i++){
									
									var NewElem = document.createElement('div');
									NewElem.className= "education_school_name";
									NewElem.id = "schoolname"+i;
									NewElem.innerHTML = edu[i].schoolName;
									document.getElementById("print").appendChild(NewElem);


									var edudegree = document.createElement('div');
									edudegree.className = "education";
									edudegree.id = "degree"+i;
									edudegree.innerHTML = edu[i].degree;
									document.getElementById("print").appendChild(edudegree);

									var edufos = document.createElement('div');
									edufos.className = "education";
									edufos.id = "fos"+i;
									edufos.innerHTML = edu[i].fieldOfStudy;
									document.getElementById("print").appendChild(edufos);

									var edudate = document.createElement('div');
									edudate.className = "date";
									edudate.id = "edudate"+i;
									edudate.innerHTML = edu[i].startDate.year+"-"+edu[i].endDate.year;
									document.getElementById("print").appendChild(edudate);


									var brk = document.createElement("br");
									document.getElementById("print").appendChild(brk);
																		
									
								};
							}
							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);
						}




				if(member.positions == null){
							document.getElementById("pos_no_value").innerHTML ="<p>Experiences are empty and will not be part of your resume.Please update your linkedIn Profile.</p>";

					}
					else{
							var posVal = member.positions._total;
							var pos = member.positions.values;
							
							var poslabel = document.createElement('label');
							poslabel.className= "lbl";
							poslabel.id="poslabel";
							poslabel.innerHTML="Experiences";
							document.getElementById("print").appendChild(poslabel);
							if(posVal>=1){
								for (var i = 0; i < posVal; i++){

									var NewElem = document.createElement('div');
									NewElem.className= "experienceB";
									NewElem.id = "companyname"+i;
									NewElem.innerHTML = pos[i].company.name;
									document.getElementById("print").appendChild(NewElem);

									var postitle = document.createElement('div');
									postitle.className= "experienceB";
									postitle.id = "title"+i;
									postitle.innerHTML = pos[i].title;
									document.getElementById("print").appendChild(postitle);

									var pos_sum = document.createElement('div');
									pos_sum.className= "experience";
									pos_sum.id = "sum"+i;
									pos_sum.innerHTML = pos[i].summary;
									document.getElementById("print").appendChild(pos_sum);

									var posdate = document.createElement('div');
									posdate.className= "date";
									posdate.id = "posdate"+i;
									posdate.innerHTML = pos[i].startDate.month+"/"+pos[i].startDate.year+" "+"-"+" "+pos[i].endDate.month+"/"+pos[i].endDate.year;
									document.getElementById("print").appendChild(posdate);

									var brk = document.createElement("br");
									document.getElementById("print").appendChild(brk);
	
									

									
								};
							}
							
							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);
						}


					if(member.certifications == null){
							document.getElementById("cert_no_value").innerHTML ="<p>Certifications are empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
						
					}
					else{
							var certVal = member.certifications._total;
							var cert = member.certifications.values;

							var crtlabel = document.createElement('label');
							crtlabel.className= "lbl";
							crtlabel.id="crtlabel";
							crtlabel.innerHTML="Certifications";
							document.getElementById("print").appendChild(crtlabel);
							
							if(certVal>=1){
								for (var i = 0; i < certVal; i++){
								
							var NewElem = document.createElement('li');
							NewElem.className= "certifications";
							NewElem.id = "crt"+i;
							NewElem.innerHTML = cert[i].name;
							document.getElementById("print").appendChild(NewElem);		
											
								
								};
							}
							var brk = document.createElement("br");
							document.getElementById("print").appendChild(brk);
							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);
						}



					if(member.publications == null){
							document.getElementById("pub_no_value").innerHTML ="<p>Publications are empty and will not be part of your resume.Please update your linkedIn Profile.</p>";
					}
					else{
							var pubVal = member.publications._total;
							var pub = member.publications.values;
							
							var publabel = document.createElement('label');
							publabel.className= "lbl";
							publabel.id="publabel";
							publabel.innerHTML="Publications";
							document.getElementById("print").appendChild(publabel);
							if(pubVal>=1){
								for (var i = 0; i < pubVal; i++){
									var pubtitle = document.createElement('div');
									pubtitle.className= "publicationsB";
									pubtitle.id = "title"+i;
									pubtitle.innerHTML = pub[i].title;
									document.getElementById("print").appendChild(pubtitle);

									var pubdate = document.createElement('div');
									pubdate.className= "date";
									pubdate.id = "pubdate"+i;
									pubdate.innerHTML = pub[i].date.day+"-"+pub[i].date.month+"-"+pub[i].date.year;
									document.getElementById("print").appendChild(pubdate);
									
									var brk = document.createElement("br");
									document.getElementById("print").appendChild(brk);
								};
							}
							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);
						}

					if(member.honorsAwards == null){
							document.getElementById("hon_no_value").innerHTML ="<p>Honors Awards are empty and will not be part of your resume.Please update your linkedIn Profile.</p>";

					}
					else{
							var honVal = member.honorsAwards._total;
							var hon = member.honorsAwards.values;
							
							var honlabel = document.createElement('label');
							honlabel.className= "lbl";
							honlabel.id="honlabel";
							honlabel.innerHTML="Honors-Awards";
							document.getElementById("print").appendChild(honlabel);
							if(honVal>=1){
								for (var i = 0; i < honVal; i++){
									var hon_name = document.createElement('div');
									hon_name.className= "honors_awardsB";
									hon_name.id = "name"+i;
									hon_name.innerHTML = hon[i].name;
									document.getElementById("print").appendChild(hon_name);

									var hon_iss = document.createElement('div');
									hon_iss.className= "honors_awards";
									hon_iss.id = "issuer"+i;
									hon_iss.innerHTML = "Issuer:"+hon[i].issuer;
									document.getElementById("print").appendChild(hon_iss);
									
									var brk = document.createElement("br");
									document.getElementById("print").appendChild(brk);


								};
							}

							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);								
						}

					if(member.interests == null){
							document.getElementById("int_no_value").innerHTML ="<p>Interests are empty and will not be part of your resume.Please update your linkedIn Profile.</p>"; 
						
					}
					else{
							var intr = document.createElement('label');
							intr.className= "lbl";
							intr.id="intr";
							intr.innerHTML="Interests";
							document.getElementById("print").appendChild(intr);

							var NewElem = document.createElement('div');
							NewElem.className= "interests";
							NewElem.id = "intr";
							NewElem.innerHTML = member.interests;
							document.getElementById("print").appendChild(NewElem);	

							var brk = document.createElement("br");
							document.getElementById("print").appendChild(brk);
							var hr = document.createElement("hr");
							document.getElementById("print").appendChild(hr);
					}

				document.getElementById("login").innerHTML = "<p><input type=\"button\" value=\"logout\" onclick=\"IN.User.logout(); return false;  \"></p>";
				
 
			}
			
		}

		 	function printContent(el){
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
			}