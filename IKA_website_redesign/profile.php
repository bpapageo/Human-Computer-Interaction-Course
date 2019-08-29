<!DOCTYPE HTML>
<html>
<head>
	<title>Προφίλ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
@font-face {
	font-family: 'Arimo-Bold';
	src: url('Arimo-Bold.eot');
	src: url('Arimo-Bold.woff') format('woff'), url('Arimo-Bold.ttf') format('truetype'), url('Arimo-Bold.svg') format('svg');
}
@font-face {
	font-family: 'ChangaOne';
	src: url('ChangaOne.eot');
	src: url('ChangaOne.woff') format('woff'), url('ChangaOne.ttf') format('truetype'), url('ChangaOne.svg') format('svg');
}
@font-face {
	font-family: 'Comfortaa-Regular';
	src: url('Comfortaa-Regular.eot');
	src: url('Comfortaa.woff') format('woff'), url('Comfortaa.ttf') format('truetype'), url('Comfortaa-Regular.svg') format('svg');
}
body {
	background: #ededed  url("bg-header.gif") repeat-x top center;
	line-height: 1;
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
}
#header {
	margin: 0 auto;
	padding: 0;
	width: 960px;
}
#header .section {
	margin: 0;
	padding: 0;
	overflow: hidden;
}
#header .section .logo {
	float: left;
	margin: 0;
	padding: 60px 0 0 10px;
	width: 324px;
}
.border{ border width: 25px; border-color: black; border-style: solid;}
#header .section ul {
	display:inline-block;
	float: right;
	overflow: hidden;
	margin:-50px 0px 0px 40px;
	padding: 5px -10px 2px;
}
#header .section ul li {
	background: url("bg-nav-right.gif") no-repeat top right;
	display: inline-block;
	float: left;
	list-style: none;
	margin: 0 10px;
	padding: 0;
}
#header .section ul li a {
	background: url("bg-nav-left.gif") no-repeat top left;
	color: #fff;
	display: inline-block;
	
	font-size: 11px;
	letter-spacing: 0.05em;
	line-height: 15px;
	
	margin: 0;
	padding: 8px 5px 8px ;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}




#header .section ul li button {
	background: url("bg-nav-left.gif") no-repeat top left;
	color: #fff;
	display: inline-block;
	font-size: 11px;
	height: 30px;
	letter-spacing: 0.05em;
	line-height: 30px;
	margin: 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}
#header .section ul li a:hover {
	color: yellow;
}
#header .section ul li.selected {
	background: url("bg-nav-right-selected.gif") no-repeat top right;
}
#header .section ul li.selected a {
	background: url("bg-nav-left-selected.gif") no-repeat top left;
}

#header .article {
	background: #fff;
	border: 2px solid #5fb3bd;
	border-radius: 4px;
	margin: 50px auto 28px;
	overflow: hidden;
	padding: 0;
	width: 936px;
}
#header .article img {
	display: block;
	float: left;
	margin: 0 50px 0 0;
	padding: 0;
}
#header .article h1 {
	color: #1b2130;
	font-family: 'ChangaOne';
	font-size: 20px;
	font-weight: normal;
	margin: 0;
	line-height: 50px;
	padding: 110px 30px 30px;
}
.topnav {
  overflow: hidden;
  background-color: grey;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav input[type=text]{
	position:absolute;
	left:52%;
	top:12%;
	width:17%;

  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.topnav .search-container {
  float: right;
}

.topnav .search-container button {
		position:absolute;
	left:68%;
	top:12%;
	width:3%;
	height:6%;
  float: right;
  padding: 6px 10px;
  margin-top: 7px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}
.languages{
	position:absolute;
	left:75%;
	top:12%;
	width:20%;

  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}


header.section a:link {
	
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
header.section:visited {
    color: solid red;
    background-color: transparent;
    text-decoration: none;
}
header.section:hover {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

#body {
	margin: 0 auto;
	min-height: 812px;
	padding: 20px 0 50px;
	width:960px;
}
#body > ul {
	margin: 0;
	overflow: hidden;
	padding: 0;
}
#body > ul li {
	float: left;
	list-style: none;
	margin: 0 70px;
	padding: 15px;
	width: 100px;
}
#body > ul li > a {
	
	display: block;
	margin: 0;
	padding: 5px 5px 29px;

}
#body > ul li > a:hover {
	opacity: 0.9;
}
#body > ul li > a img {
	border: 0;
	display: block;
	margin: 0;
	padding: 0;
	width:200%;
}
#body > ul li b {
	color: #000;
	display: block;
	font-size: 18px;
	font-weight: normal;
	margin: 0;
	padding: 10px 0 5px;
	text-transform: capitalize;
}
#body > ul li p {
	color: #464646;
	font-size: 12px;
	line-height: 24px;
	margin: 0;
	padding: 0;
	
}
#body > ul li p a {
	color: #464646;
	text-decoration: underline;
}
#body > ul li p a:hover {
	color: #252525;
}
#body > div {
	margin: 0;
	overflow: hidden;
	padding: 50px 0 0;
}
#body > .more {
	color: #464646;
	display: block;
	font-size: 13px;
	margin: 0 auto;
	padding: 0;
	text-align: center;
	text-decoration: underline;
	text-transform: capitalize;
	width: 80px;
}
#body > .more:hover {
	color: #4a8b92;
}
#body h2 {
	background: url(bg-featured.png) repeat-x;
	color: #fff;
	font-family: 'Comfortaa-Regular';
	font-size: 20px;
	font-weight: normal;
	height: 47px;
	letter-spacing: 0.1em;
	left: 15px;
	line-height: 47px;
	margin: 0;
	padding: 0 25px;
	position: absolute;
	text-transform: capitalize;
	top: -14px;
}
#body h3 {
	color: #2f394e;
	margin: 0;
	padding: 0;
	font-size: 20px;
	font-weight: normal;
	margin: 0;
	padding: 25px 10px 40px;
	text-transform: capitalize;
}
#body > b {
	color: #2f394e;
	display: inline-block;
	font-size: 18px;
	font-weight: normal;
	margin: 0;
	padding: 0 10px;
	text-transform: capitalize;
}
#body > p {
	color: #464646;
	font-size: 13px;
	line-height: 24px;
	margin: 0;
	padding: 30px 10px;
}
#body > p a {
	color: #464646;
	text-decoration: underline;
}
#body > p a:hover {
	color: #252525;
}
#body div div {
	float: left;
	margin: 0 10px;
	padding: 0;
}
#body div .featured {
	background: #fff;
	border: 5px solid #5fb3bd;
	border-radius: 4px;
	min-height: 450px;
	padding: 45px 15px 15px;
	position: relative;
	width: 420px;
}
#body div .featured h2 {
	text-align: center;
}
#body div .featured h3 {
	color: #354057;
	font-size: 20px;
	font-weight: normal;
	margin: 0;
	padding: 10px 0 0;
	text-transform: none;
}
#body div .featured img {
	display: block;
	float: left;
	margin: 15px 30px 25px 0;
	padding: 0;
}


#body div .featured p {
	clear: both;
	color: #464646;
	font-size: 12px;
	line-height: 24px;
	margin: 0 0 24px;
	padding: 0;
}
#body div .featured p a {
	color:blue;
}
#body div .featured p a:hover {
	color: red;
}
#body div .section {
	width: 460px;
}
#body div .section div {
	background: #519194;
	border: 5px solid #5fb3bd;
	border-radius: 4px;
	float: none;
	margin: 0;
	padding: 0 15px;
	position: relative;
}
#body div .section .article {
	height: 183px;
	margin-bottom: 25px;
	font-size:18px;
	padding: 55px 15px 20px;
	text-align: left;
}
#body div .section .article h2 {
	text-align: left;
}
#body div .section .article h2 a {
	background: url(../images/icons.png) no-repeat 0 10px;
	display: inline-block;
	height: 40px;
	margin: 0;
	padding: 0;
	text-indent: -99999px;
	width: 31px;
}
#body div .section .article p {
	color: #f5f5f5;
	font-size: 12px;
	line-height: 24px;
	margin: 0;
	padding: 20px 0px;
	text-align: left;
}
#body div .section .article p a {
	color: #f5f5f5;
	text-decoration: underline;
}
#body div .section .article p a:hover {
	color: #97d0d3;
}
#body div .section .article > a {
	color: #f5f5f5;
	font-size: 18px;
	text-decoration: none;
}
#body div .section .article > a:hover {
	color: #97d0d3;
}
#body div .section .newsletter {
	height: 168px;
	padding: 30px 15px 19px 214px;
	position: relative;
}
#body div .section .newsletter img {
	display: block;
	left: 0;
	margin: 0;
	padding: 0;
	position: absolute;
	top: -13px;
	z-index: 5;
}
#body div .section .newsletter p {
	color: #f5f5f5;
	font-size: 16px;
	font-weight: bold;
	letter-spacing: 0.03em;
	line-height: 30px;
	margin: 0;
	padding: 0;
}
#body div .section .newsletter p span {
	display: block;
}
#body div .section .newsletter form {
	margin: 0;
	overflow: hidden;
	padding: 0;
}
#body div .section .newsletter form span {
	color: #f5f5f5;
	clear: both;
	display: block;
	font-size: 14px;
	letter-spacing: 0.01em;
	line-height: 30px;
	margin: 0;
	padding: 0 0 4px;
	text-transform: capitalize;
	text-shadow: 0 -1px 0 #285f62;
}
#body div .section .newsletter form input {
	background: url(../images/interface.png) no-repeat;
	border: 0;
	display: block;
	float: left;
	height: 30px;
	margin: 0;
	padding: 0;
}
#body div .section .newsletter form #email {
	background-position: -399px -72px;
	color: #68a7aa;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: italic;
	line-height: 30px;
	padding: 0 5px;
	text-align: center;
	width: 130px;
}
#body div .section .newsletter form #send {
	background-position: -399px -110px;
	text-indent: -99999px;
	width: 80px;
}
#body > .article {
	margin: 0;
	padding: 0;
}
#body > .article b {
	color: #2f394e;
	display: inline-block;
	font-weight: normal;
	margin: 0;
	padding: 0 10px 15px;
	text-transform: capitalize;
}
#body > .article p {
	color: #464646;
	font-size: 13px;
	line-height: 24px;
	margin: 0;
	padding: 0 10px;
}
#body > .article p a {
	color: #464646;
	text-decoration: underline;
}
#body > .article p a:hover {
	color: #252525;
}
#body > .article ul {
	margin: 0;
	padding: 30px 0 30px 10px;
}
#body > .article ul li {
	color: #464646;
	line-height: 24px;
	list-style: none;
	margin: 0;
	padding: 0;
}
#body > .article ul li a {
	color: #464646;
	text-decoration: none;
}
#body > .article ul li a:hover {
	color: #252525;
}
#body > .article h3 {
	padding-bottom: 20px;
}
#body .blog {
	padding: 0;
}
#body .content {
	float: left;
	margin: 0 35px 0 10px;
	padding: 0;
	width: 585px;
}
#body .content h3 {
	padding-bottom: 25px;
	padding-left: 0;
}
#body .content p {
	color: #464646;
	font-size: 13px;
	line-height: 24px;
	margin: 0;
	padding: 0 0 24px;
}
#body .content p a {
	color: #464646;
	text-decoration: underline;
}
#body .content p a:hover {
	color: #252525;
}
#body .sidebar {
	background: url(../images/bg-sidebar.jpg) repeat-y top left;
	float: right;
	margin: 0 10px 82px 0;
	padding: 0;
	width: 320px;
}
#body .sidebar h3 {
	background: url(../images/bg-sidebar-heading.jpg) no-repeat 0 0;
	color: #2f394e;
	font-family: 'Comfortaa-Regular';
	font-size: 20px;
	font-weight: normal;
	letter-spacing: 0.1em;
	margin: 0;
	padding: 25px 10px;
	text-align: center;
	text-transform: capitalize;
}
#body .sidebar ul {
	background: url(../images/bg-sidebar-footer.jpg) no-repeat bottom left;
	margin: 0;
	padding: 0 20px 50px;
}
#body .sidebar ul li {
	list-style: none;
	margin: 0;
	padding: 0 0 24px;
}
#body .sidebar ul li span {
	color: #2f394e;
	display: block;
	font-size: 16px;
	font-weight: bold;
	letter-spacing: 0.01em;
	line-height: 24px;
	margin: 0;
	padding: 0;
}
#body .sidebar ul li span a {
	color: #2f394e;
	text-decoration: none;
}
#body .sidebar ul li span a:hover {
	color: #4c8f97;
}
#body .sidebar ul li p {
	color: #000;
	font-size: 13px;
	line-height: 24px;
	margin: 0;
	padding: 0;
}
#body .sidebar ul li p a {
	color: #000;
	text-decoration: underline;
}
#body .sidebar ul li p a:hover {
	color: #4c8f97;
}
#footer {
	background: #4c8f96;
	border-top: 1px solid #9bd9e0;
	margin: 0;
	padding: 0;
}
#footer > div {
	margin: 0 auto;
	padding: 30px 0 28px;
	overflow: hidden;
	text-align: center;
	width: 960px;
}
#footer div p {
	color: #ededed;
	display: inline-block;
	float: right;
	font-size: 12px;
	letter-spacing: 0.05em;
	margin: 0;
	padding: 27px 0 0;
	text-align: center;
}
#footer div .connect {
	background: #387a82;
	float: right;
	height: 18px;
	margin: 0 20px 0 150px;
	padding: 22px 20px;
	overflow: hidden;
	width: 144px;
}
#footer div .connect span {
	color: #ededed;
	display: inline-block;
	float: left;
	font-size: 12px;
	height: 19px;
	line-height: 21px;
	margin: 0;
	padding: 0 0 0 39px;
}
#footer div .connect a {
	background: url(../images/icons.png) no-repeat;
	display: block;
	float: left;
	height: 20px;
	margin: 0 8px;
	padding: 0;
	text-indent: -99999px;
	width: 20px;
}
#footer div .connect #twitter {
	background-position: 0 -32px;
}
#footer div .connect #twitter:hover {
	background-position: -25px -32px;
}
#footer div .connect #facebook {
	background-position: 0 -57px;
}
#footer div .connect #facebook:hover {
	background-position: -25px -57px;
}
#footer div .connect #googleplus {
	background-position: 0 -82px;
}
#footer div .connect #googleplus:hover {
	background-position: -25px -82px;
}
#footer div .connect #pinterest {
	background-position: 0 -107px;
}
#footer div .connect #pinterest:hover {
	background-position: -25px -107px;
	

}
.dropbtn {
	background: url("bg-nav-right.gif" ) no-repeat top right;

    color: white;
    border: none;
    cursor: pointer;


}



.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    float: right;
    position: relative;
    display: block;
    
}

.dropdown-content {
	background: url("bg-nav-right.gif" ) top right;

    display: none;
    max-width: 130px;
	max-height: 130px;

    overflow: auto;
    right: 0;
}



.dropdown a:hover {
	background: url("bg-nav-right.gif" ) no-repeat top right;


}

.show {display:block;}

#imaginary_container{
    margin-top:-18%; /* Don't copy this */
	margin-right:30%;
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}

#imaginary_container{
     margin-top:-18%; /* Don't copy this */
	margin-right:30%;
}
.stylish-input-group .input-group-addon{
    background: white !important; 
}
.stylish-input-group .form-control{
	border-right:0; 
	box-shadow:0 0 0; 
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}




             input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}

}
</style>
<body>
<div id="header" onclick = "myFunction11();myFunction22();myFunction33();">
		<div class="section">
			<div class="logo">
				<a href="index.html">
				<img style="position:relative; bottom:60; top:5; left:-12px;" class="border" width="125px" height="125px"  src="ika.png" alt="logo ika"  >
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div id="imaginary_container"> 
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control"  placeholder="Search" >
								<span class="input-group-addon">
									<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>  
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<ul>
				<li class="selected">
					<a onmouseover = "myFunction11();myFunction22();myFunction33()" href="index.html">Αρχικη</a>
				</li>
				<li>
					<div class="Dropdown">
						<button onmouseover = "myFunction1();myFunction22();myFunction33()"   class="dropbtn">Ασφαλισμενοι</button>
						<div  id="myDropdown1" class="dropdown-content">
							
							<a href="employers.html">Ασφαλιση</a>
							
							<a href="#about">Παροχες-Προνομια</a>
							
							<a href="#contact">Ενσημα</a>
							
							<a href="#contact">Θεμελειωση Συνταξιοδοτικου Δικαιωματος</a>
							
							

						</div>
					</div>			
					</li>
				<li>
					<div class="Dropdown">
						<button onmouseover="myFunction2();myFunction11();myFunction33()"  class="dropbtn">Συνταξιουχοι</button>
						<div id="myDropdown2" class="dropdown-content">
							
							<a href="">Αιτηση Συνταξιοδοτησης</a>
							
							<a href="calculator.html">Υπολογισμος Συνταξης</a>
							
							<a href="benefits.html">Προνομια και Βοηθεια</a>
							

						</div>
					</div>				
					</li>
				<li>
					<div class="Dropdown">
						<button onmouseover = "myFunction3();myFunction22();myFunction11()" class="dropbtn">Εργοδοτες</button>
						<div id="myDropdown3" class="dropdown-content">
							
							<a href="employers.html">Ασφαλιση Εργαζομενου</a>
							
							<a href="#about">Μαζικη Ταυτοποιηση</a>
							
							<a href="affirm_employer.html">Βεβαιωση ασφαλιστικης ενημερωτητας</a>
							

						</div>
					</div>

					
					<script>
					/* When the user clicks on the button, 
					toggle between hiding and showing the dropdown content */
					function myFunction1() {
						
						document.getElementById("myDropdown1").style.display='block';
					}
					function myFunction11() {
						document.getElementById("myDropdown1").style.display='none';
					}
					
				</script>
				<script>
					/* When the user clicks on the button, 
					toggle between hiding and showing the dropdown content */
					function myFunction2() {
						
						document.getElementById("myDropdown2").style.display='block';
					}
					function myFunction22() {
						document.getElementById("myDropdown2").style.display='none';
					}
				</script>
				<script>
					/* When the user clicks on the button, 
					toggle between hiding and showing the dropdown content */
					function myFunction3() {
						
						document.getElementById("myDropdown3").style.display='block';
					}
					function myFunction33() {
						document.getElementById("myDropdown3").style.display='none';
					}
				</script>
				</li>
				<li>
					<a onmouseover = "myFunction11();myFunction22();myFunction33()" href="announcements.html">Ανακοινωσεις</a>
				<li>
					<a onmouseover = "myFunction11();myFunction22();myFunction33()" href="contact.html">Επικοινωνια</a>
				</li>
				<li>
					<a onmouseover = "myFunction11();myFunction22();myFunction33()" >Εισοδος-Εγγραφη</a>
				</li>
				<li>
					<a onmouseover = "myFunction11();myFunction22();myFunction33()" href="profile.php">Προφιλ</a>
				</li>				
			</ul>
			<div class="languages">	
			<select>
			<option value="Ελληνικά">Ελληνικά</option>
			<option value="English">English</option>
			<option value="Deutsch">Deutsch</option>
			<option value="Franscais">Franscais</option>
			</select>
			</div>
			
		</div>
	<div class="container">
	<div class="row">
	
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 ><b>Προφίλ Χρήστη</b></h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img src="malamas.jpg" class="avatar img-circle img-thumbnail" alt="avatar"> 
                
      

                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:black;">Γιώργος Παπαδημητρίου </h4></span>
                         
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Όνομα:</div><div class="col-sm-7 col-xs-6 ">Γιώργος</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Επώνυμο:</div><div class="col-sm-7">Παπαδημητρίου</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >E-mail:</div><div class="col-sm-7"> georgepap@gmail.com</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Username(παρώνυμο):</div><div class="col-sm-7">gpap</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Α.Φ.Μ:</div><div class="col-sm-7">000000001</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Α.Μ.Κ.Α:</div><div class="col-sm-7">000000000002</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Τηλέφωνο:</div><div class="col-sm-7">2102030000</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>
 <div class="col-sm-5 col-xs-6 tital " >
		<label for="type-identity">Τύπος Ταυτότητας</label>
				<div class="id-type">	
				<select>
				<option value="Αστυνομική">Αστυνομική</option>
				<option value="Διαβατήριο">Διαβατήριο</option>
				</select>
				</div>
 </div> 
<div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Αριθμός Ταυτότητας:</div><div class="col-sm-7">ΑΖ203000</div>
<div class="clearfix"></div>
<div class="bot-border"></div>
			 <div class="col-sm-5 col-xs-6 tital " >
			<a href="edit_profil.html" class="btn btn-info" role="button">Επεξεργασία</a>
			</div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
</script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>




         
		
</div>
</body>
</html>