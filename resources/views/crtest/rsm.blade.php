@extends('app')
@section('content')
<link rel="stylesheet" type="text/css" href="css/resume.css">
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
	    api_key: 783uinftd1hymi
	    onLoad: onLinkedInLoad
	    scope: r_basicprofile,r_emailaddress,r_fullprofile,r_contactinfo
	    authorize: false
	    credentials_cookie: true
		credentials_cookie_crc: true
	    lang: en_US
</script>

</head>
<body>
	<script type="IN/Login"></script>
	<script src="js/fetch.js"></script>


	<div class= "topcorner" id ="login"></div>
	
 	  <div id="edu_no_value"></div>
  	<div id="ski_no_value"></div>
  	<div id="pos_no_value"></div>
  	<div id="cert_no_value"></div>
  	<div id="pub_no_value"></div>
  	<div id="hon_no_value"></div>
  	<div id="int_no_value"></div>
  	<div id="eml_no_value"></div>
  	<div id="ph_no_value"></div>
  	<div id="loc_no_value"></div>
  	<div class="btn">
  	<input type="button" class="printbtn" value="Print Resume" onClick="printContent('print')">
  	</div>
  	<div id="print"></div>
</body>
@stop