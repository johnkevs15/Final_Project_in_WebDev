<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik+Marker+Hatch&display=swap" rel="stylesheet">
	<!-- boxicons library -->
	 
	<!-- The Customer Feedback -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<!-- stylesheet -->
	<!-- <link rel="stylesheet" href="styles.css">  -->

	<!-- media-queries.css -->
	<!-- <link rel="stylesheet" href="media-queries.css"> -->

	<title>DCSM Resume Builder</title>
    <link rel="shortcut icon" href="site-images/DCSM.png">

    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@200&family=Anton&family=Lobster&family=Montserrat:wght@100&family=Pacifico&family=Poor+Story&family=Shalimar&display=swap" rel="stylesheet">	<!-- I will wrap all my content ia a page class element
	to set a maximum width of my page. -->
</head>
<style>
/* main style */
/* GENERAL RULES ---------------------------------  */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.bx{ /* box-icons general rule  */
    width:40px;
    height: 40px;
    color: #555;
}
body{
    min-height: 100vh;
    font-family: 'Poppins', sans-serif;
    color: #555;
    background-color: rgba(255, 255, 255, 0.807);
}
.page{
    max-width: 1300px; 
    margin: 0 auto; 
}

/* TOP BAR ---------------------------------------  */

.top-bar{
    padding: 25px 15px;
}
.top-bar .brandname{
    font-size: 24px;
    display: flex;
    text-transform: uppercase;
    align-items: center;
    justify-content: center;
}
.top-bar .brandname img{
    width: 80px;
}
.top-bar .brandname span{
    padding-left: 10px;
}
.top-bar .social{
    margin-top: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.top-bar .social span{
    font-size: 16px;
    display: inline-block;
    margin-right: 15px;
    font-weight: bold;
    display: none; /* The follow text will not showing up in the mobile view */
}
.top-bar .social i{
    margin: 10px;
    padding: 5px;
    background-color: #e9e9e9;
    border: 5px solid #f8f8f8;
    font-size: 30px;
    box-shadow: 0 0 2px #999;
    border-radius: 50%;
}
.top-bar .social i:hover{
    background-color: #4188d0;
    color: white;
    cursor: pointer;
    border-color: #4188d0;
}

/* HEADER ----------------------------------------  */
header{
    background: url("site-images/b-ground1.png");
    padding: 100px 15px;
    text-align:  center;
}
header h1{
    font-family: 'Noto Serif', serif;
    text-transform: uppercase;
    font-size: 50px;
    text-align: center;
}
header h1:first-child{
    color: #000;
    font-weight: 400;
}
header h1:last-child{
    color: white;
    font-weight: 700;
}
header .text{
    max-width: 1000px;
    margin: 10px auto;
    font-size: 18px;
    line-height: 28px;
    color: #043a2d;
}
header button{
    border: none;
    background-color: #ffdcae96;
    height:  50px;
    width:  250px;
    font-size: 20px;
    margin: 30px auto 0 auto;
    border-radius: 25px;
    cursor: pointer;
    color: white;
    transition: all 0.3s;
}
header button i.bx{
    transform: scale(1.8);
    display: inline-block;
    margin-left: 15px;
    color: white;
}
header button:hover{
    filter: brightness(1.5);
}
header button:active{
    box-shadow: inset 5px 5px 15px rgba(0, 0, 0, 0.5);
}
/*customer feedback*/

/* SECTION 1 -------------------------------------  */

main{
    margin-top: 70px;
}
.block{
    padding: 0 15px;
    margin-top: 120px;		
}
.section-title{
    text-align: center;
    font-size: 36px;
}
.section-description{
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
}
.content{
    /* background: #C1C1C1; */
    display: grid;
    grid-template-columns: 1fr;
    grid-row-gap: 80px;
    grid-column-gap: 50px;
    max-width: auto;
    margin: 80px auto 100px auto;
}
.content .feature{
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
    grid-column-gap: 15px;
    position:center;
}

.devs {
    display: inline-block;
    grid-column: 1;
    width: 200px;
    height: 200px;
    margin-right:-50px;
}

.feature .title{
    font-size: 18px;
    color: #333;
}
.feature .text{
    margin-top: 10px;
    font-size: 15px;
    line-height: 20px;
    margin-right:40px;
    text-align: justify;
}


/* SECTION 2 -------------------------------------  */
.block-2{
    max-width: 1300px;
    /* margin: 150px auto 100px auto; */
    background-color: #EB7C59;
    color: white;
    display: grid;
    grid-template-columns: 1fr;
}
.feature-2{
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
    grid-column-gap: 15px;
    padding: 50px 15px;
    border-bottom: thin solid #f37d60;
}
.feature-2:hover{
    background-color: #e55f3e;
    cursor: pointer;
}
.feature-2 .icon i{
    color: white;
    font-size: 90px;
}
.feature-2 .title{
    font-size: 20px;
    margin-bottom: 20px;
}
.feature-2 .text{
    line-height: 26px;
}

/* CONTACT FORM ----------------------------------  */

.contact-form{
    max-width: 1000px;
    margin: 100px auto;
    padding: 15px;
}
.contact-form .contact-btn{
    display: block;
    width: 240px;
    height: 50px;
    border-radius: 25px;
    margin: 0 auto 20px auto;
    border: none;
    background-color: #e55f3e;
    font-size: 20px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-form .contact-btn i{
    color: white;
    font-size: 26px;
    padding-left: 10px;
}

.contact-form .contact-btn:hover{
    filter: brightness(1.2);
}

.contact-form .contact-btn:active{
    box-shadow: inset 5px 5px 15px rgba(0, 0, 0, 0.5);
}

.contact-form .form-wrapper{
    display: grid;
    grid-template-columns: 1fr;
    grid-row-gap: 50px;
    max-height:  0;
    overflow: hidden; 
    transition: max-height 0.3s;

}
.contact-form .form-wrapper .hide-form-btn{
    justify-self: center;
    border: none;
    background-color: #ffbcbc;
    border-radius: 20px;
    padding: 5px 25px;
    color: #8d0d0d;
    display: flex;
    justify-content: center;
    align-items: center;
}
.contact-form .form-wrapper .hide-form-btn i{
    color: #8d0d0d;
    padding-left: 10px;
}
.contact-form .form-wrapper .hide-form-btn:hover{
    filter: brightness(1.1);
}
.contact-form .form-wrapper .hide-form-btn:active{
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
}
.form-wrapper form{
    width: 100%;
}
.form-wrapper form .form-block{
    margin-bottom: 20px;
}
.form-wrapper form label{
    display: block;
    margin-bottom: 5px;
    display: flex;
    align-items: bottom;
    padding-left: 10px;
}
.form-wrapper form label i{
    padding-right: 10px;
    color: #517bb2;
    transform: scale(1.2);
}
.form-wrapper form input{
    display: block;
    width: 100%;
    padding: 10px;
    outline: none;
    border: thin solid #d4d4d4;
}
.form-wrapper form input:focus{
    border-color: #e55f3e;
}
.form-wrapper form textarea{
    width: 100%;
    border:  thin solid #d4d4d4;
    min-height: 150px;
    outline: none;
    padding: 10px;
}
.form-wrapper form textarea:focus{
    border-color: #e55f3e;	
}
.form-wrapper form button[type=submit]{
    padding: 10px 35px;
    outline: none;
    border:  thin solid #d4d4d4;
    display: flex;
    align-items: center;
    justify-content: center;
}
.form-wrapper form button[type=submit] i{
    padding-left: 10px;
    font-size: 26px;
}
.form-wrapper .info .title{
    font-size: 24px;
    text-align: center;
}
.form-wrapper .info .map img{
    width:  100%;
}

/* pop-up send message */

/* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

/* FOOTER ----------------------------------------  */
footer{
    max-width: 1300px;
    margin: 100px auto 0 auto;
    text-align: center;
    background: #42405A;
    padding: 50px 15px;
    color: #999;
}
footer .links{
    margin-bottom: 20px;
}

footer a{
    text-decoration: none;
    color: white;
    padding: 0 5px;
}

footer a:hover{
    color: #00ba9b;
    text-decoration: underline;
    transition: color 0.3s;
}

footer .terms a, 
footer .terms span{
    padding: 0 5px;
}

/*customer image*/
.customer{
    width:150px; 
    height:150px; 
    border-radius:50%;
    margin-right: 25%;
    margin-left: 25%;
    margin-top: 10%;
}

.cstmrfdbck{
    align-items:center;
    margin-right:100%-24rem;
    margin-left:100%-24rem;
}

.card{
    margin-left: 10px;
    margin-right: 10px;

}

.env_icon{
    width:25px;
    height:25px;
    margin-left:7px;
}

/* media queries */
@media screen and (min-width: 700px){
	.top-bar{
		display: grid;
		grid-template-columns: 1fr 1fr;
		align-items: center;
		max-width: 1000px;
		margin: 0 auto ;
	}
	.top-bar .brandname{
		justify-self: start;
	}
	.top-bar .social{
		justify-self: end; 
		margin-top: 0;
	}
	.top-bar .social span{
		display: inline-block;
	}
}

@media screen and (min-width: 800px){
	.content{
		grid-template-columns: 1fr 1fr;
	}

	.block-2{
		grid-template-columns: 1fr 1fr;
	}
	.feature-2:first-child,
	.feature-2:nth-child(3){ 
		border-right: thin solid #f37d60;
	}

	.contact-form .form-wrapper{
		grid-template-columns: 1fr 1fr;
		grid-column-gap: 50px;
	}

	.contact-form .form-wrapper .hide-form-btn{
		grid-column: 1 / span 2;
	}
	.contact-form form{
		margin-top: 50px;
	}
	.contact-form .info .title{
		text-align: left;
	}


}

@media screen and (min-width: 940px){
	header{
		padding: 150px 15px;
	}
}

@media screen and (min-width: 1300px){
	.feature-2:first-child,
	.feature-2:nth-child(3){
		padding-left: 150px;
	}

	.feature-2:last-child,
	.feature-2:nth-child(2){
		padding-right: 150px;
	}
}
</style>

<body>
    <div class="page">
		
		<!-- First i will place my top bar -->
		<section class="top-bar">
			<div class="brandname">
				<img src="site-images/DCSM.png" alt="image of my logo">
				<span>DCSM Resume Builder</span>
			</div>
			<div class="social">
				<span>Follow us</span>
				<!-- Now i am going to use the boxicons library -->
				<a href="https://twitter.com/"><img class="bx" src="site-images/twitter logo.png" alt=""></a>
				<a href="https://www.instagram.com/"><img style = "width:60px;height:45px" class="bx" src="site-images/instagram.png" alt=""></a>
				<a href="https://www.facebook.com/"></a><img class="bx" src="site-images/facebook.png" alt="">
				
			</div>
		</section>

		<!-- The header Element ------------------- -->
		<header>
			<div id="home" class="first-line">
				<h1 style= "font-family: 'Poor Story', cursive; font-size:5rem; font-weight:600; color:whitesmoke;">LET'S GET THIS JOB DONE,</h1>
				<h1 style = "font-family: 'Poor Story', sans-serif; font-size:5rem; font-weight:600; color:whitesmoke;">AND LAND A JOB!</h1>
			</div>
			<div class="download-button">
				<a href="./templates/tempchoose.php"><button>Try our resume builder!</button></a>
			</div>
		</header>

		<!-- The main content --------------------- -->
		<main>
			<!-- the first section -->
			<div id="about_us" class="block">
				<div class="section-title">
					Your <strong>dream job & success</strong> is around the corner
				</div>
				<div class="section-description">
					DCSM Resume Builder is a dynamic and up-to-date resume building tool built to aid job seekers in landing a job by creating a resume quickly using the featured templates in the system.
				</div>
				<br>
				<br>

				
				<!-- customer feedback -->
				<div class = "cstmrfdbck" >
					<h3 style="text-align:center;font-family: 'Rubik Marker Hatch', cursive;font-size: 4.5rem;">WHAT OUR USERS SAY</h3>
					<div style="display:flex" >
						<div class="card" style="width: 20rem">
							<img src="site-images/morgianna.jpg" alt="" class="customer">
							<div class="card-body">
							  <h5 class="card-title">Morg Saluja</h5>
							  <h6 class="card-subtitle mb-2 text-muted">HR Intern, Steel Co.</h6>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <!-- <a href="#" class="card-link">Card link</a>
							  <a href="#" class="card-link">Another link</a> -->
							</div>
						</div>
	
						<div class="card" style="width: 20rem;">
							<img src="site-images/t.maguire.jpg" alt="" class="customer">
							<div class="card-body">
							  <h5 class="card-title">Toby Maguire</h5>
							  <h6 class="card-subtitle mb-2 text-muted">Freelance Model</h6>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <!-- <a href="#" class="card-link">Card link</a>
							  <a href="#" class="card-link">Another link</a> -->
							</div>
						</div>
						<div class="card" style="width: 20rem;">
							<img src="site-images/juviii.jpg" alt="" class="customer">
							<div class="card-body">
							  <h5 class="card-title">Juvia Lockser</h5>
							  <h6 class="card-subtitle mb-2 text-muted">Data Analyst, Norse Corp.</h6>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <!-- <a href="#" class="card-link">Card link</a>
							  <a href="#" class="card-link">Another link</a> -->
							</div>
						</div>
						<div class="card" style="width: 20rem;">
							<img src="site-images/b.cumberbatch.jpg" alt="" class="customer">
							<div class="card-body">
							  <h5 class="card-title">Ben Cumberbatch</h5>
							  <h6 class="card-subtitle mb-2 text-muted">Game Dev, Hekhok Co.</h6>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <!-- <a href="#" class="card-link">Card link</a>
							  <a href="#" class="card-link">Another link</a> -->
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
			
			<!-- The second section -->
			<div id="services" class="we_do">
				<h3 style="text-align:center;font-family: 'Rubik Marker Hatch', cursive;font-size: 5rem;">WHAT DO WE HAVE</h3>
				<div class="block-2">
					<div class="feature-2">
						<div class="icon">
							<i class="bx bxs-credit-card-alt"></i>
						</div>
						<div class="description">
							<div class="title"><b>Available resume templates</b></div>
							<div class="text">
								<i>Responsive. Flexible. Accepts user input.<br></i>
								The user could choose a template they desire from these available templates and use them.</div>
						</div>
					</div>
	
					<div class="feature-2">
						<div class="icon">
							<i class="bx bxs-widget"></i>
						</div>
						<div class="description">
							<div class="title"><b>Downloadable in a PDF form</b></div>
							<div class="text">
								<i>Free. Accessible. Available.<br></i>
								A user's resume could also be downloaded if, and only if, they are logged in to the system. The download would also be free of charge and is automatically in PDF form.
							</div>
						</div>
					</div>
	
					<div class="feature-2">
						<div class="icon">
							<i class="bx bxs-cloud-download"></i>
						</div>
						<div class="description">
							<div class="title"><b>User-friendly</b></div>
							<div class="text">
								<i>Clear. Straightforward. Logically organized structure.<br></i>
								As responsive as possible and has a consistent look that is easily understood.
							</div>
						</div>
					</div>
	
					<div class="feature-2">
						<div class="icon">
							<i class="bx bxs-devices"></i>
						</div>
						<div class="description">
							<div class="title"><b>Allows addition of candidate profile</b></div>
							<div class="text">
								<i>Contact Information. Education Background. More...<br></i> 
								A user could input their information in forms that is necessary to build a resume.
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			

				<!-- team members -->
				<div id="teams" class="teams">
					<h3 style="text-align:center;font-family: 'Rubik Marker Hatch', cursive;font-size: 5rem; margin-bottom:-70px;">OUR TEAM</h3>
					<div class="content">

						<div class="feature">
							<div class="icon">
								<img class="devs" src="site-images/kevin.png" alt="image">
								<!-- <i class="bx bxs-bar-chart-alt-2"></i> -->
							</div>
							<div class="description">
								<div class="title"><b>John Kevin Campanilla</b><br><i>Web Developer</i></div>
								<div class="text">
                  <a href="https://twitter.com/"><img class="bx" src="site-images/twitter logo.png" alt=""></a>
                  <a href="https://www.instagram.com/"><img style = "width:60px;height:45px" class="bx" src="site-images/instagram.png" alt=""></a>
                  <a href="https://www.facebook.com/"></a><img class="bx" src="site-images/facebook.png" alt="">
								</div>
							</div>
						</div>

						<div class="feature">
							<div class="icon">
								<img class="devs" src="site-images/clint.png" alt="image">
							</div>
							<div class="description">
								<div class="title"><b>Clint Anthony Savilla</b><br><i>Web Developer</i></div>
								<div class="text">
                  <a href="https://twitter.com/"><img class="bx" src="site-images/twitter logo.png" alt=""></a>
                  <a href="https://www.instagram.com/"><img style = "width:60px;height:45px" class="bx" src="site-images/instagram.png" alt=""></a>
                  <a href="https://www.facebook.com/"></a><img class="bx" src="site-images/facebook.png" alt="">
								</div>
							</div>
						</div>

						<div class="feature">
							<div class="icon">
								<img class="devs" src="site-images/junna.png" alt="image">
							</div>
							<div class="description">
								<div class="title"><b>Junnalyn Doning</b><br><i>Web Developer</i></div>
								<div class="text">
                  <a href="https://twitter.com/"><img class="bx" src="site-images/twitter logo.png" alt=""></a>
                  <a href="https://www.instagram.com/"><img style = "width:60px;height:45px" class="bx" src="site-images/instagram.png" alt=""></a>
                  <a href="https://www.facebook.com/"></a><img class="bx" src="site-images/facebook.png" alt="">
								</div>
							</div>
						</div>

						<div class="feature">
							<div class="icon"> 
								<img class="devs" src="site-images/tina.png" alt="image">
							</div>
							<div class="description">
								<div class="title"><b>Christina Mangapuro</b><br><i>Web Developer</i></div>
								<div class="text">
                  <a href="https://twitter.com/"><img class="bx" src="site-images/twitter logo.png" alt=""></a>
                  <a href="https://www.instagram.com/"><img style = "width:60px;height:45px" class="bx" src="site-images/instagram.png" alt=""></a>
                  <a href="https://www.facebook.com/"></a><img class="bx" src="site-images/facebook.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			<!-- The contact form section -->
			<div id="contact" class="contact-form">
				<button class="contact-btn" onclick="openContactForm()" style ="color:black"> Contact Us <img class="env_icon " src="site-images/envelope.png" alt="envelope"> </button>
				<div class="form-wrapper">
					<button class="hide-form-btn" onclick="hideForm()" >Hide form <img class="env_icon " src="site-images/hide_icon.png" alt="envelope"> </button>
				
					<div class="info">
						<p class="title">Send us your question</p>
						<p class="text">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, quisquam eligendi sunt molestiae dolorem facilis at, velit. Quo tempore natus, deserunt culpa quibusdam! Provident, ex!
						</p>
						<div class="map">
							<img src="site-images/map.png" alt="map location of our offices">
						</div>
					</div>


					<form autocomplete="off" name="contact-form" action="" method="post">
						<div class="form-block">
							<label>
								<img style="margin-right:15px" class="env_icon " src="site-images/user.png" alt="envelope">
								Enter your name:
							</label>
							<input type="text" name="firstname">
						</div>

						<div class="form-block">
							<label>
								<img style="margin-right:15px" class="env_icon " src="site-images/envelope.png" alt="envelope">
								Enter your email:
							</label>
							<input type="email" name="email">
						</div>

						<div class="form-block">
							<label>
								<img style="margin-right:15px" class="env_icon " src="site-images/com_icon.png" alt="envelope">Enter your message:
							</label>
							<textarea name="message"></textarea>
						</div>

						<button class="popup" onclick="myFunction()" style="background:#f7ad91; border-radius: 25px; border:#f7ad91" type="submit">Send message <img style="margin-right:15px" class="env_icon " src="site-images/send_icon.png" alt="envelope">
                <!-- <div class="popup" onclick="myFunction()">Click me! -->
                  <!-- <span class="popuptext" id="myPopup">Your question has been sent. Please wait for our reply. Thank you.</span> -->
                <!-- </div> -->
						</button>
					</form>
				</div> <!-- End of form wrapper -->
			</div>
		</main>

		<!-- The footer section -->
		<footer>
			<div class="links">
				<a href="#home">Home</a>
				<a href="#about_us">About</a>
				<a href="#services">Services</a>
				<a href="#teams">Teams</a>
				<a href="#contact">Contact</a>
			</div>

			<div class="terms">
				<span>Copyright &copy; 2022 DCSM | </span>
				<a href="">Terms & conditions</a>
				|
				<a href="">Privacy Policy</a>
				|
				<span>All rights reserved</span>
			</div>
		</footer>

	</div> <!-- End of page -->
</body>

<script>
    function openContactForm(){
      /* First i need access to the whole section */
      let form = document.querySelector(".form-wrapper");
      /* Next i need the height of the form-wrapper element */
      let height = form.scrollHeight;
      /* Next i will assign to the max-height css property
      the height of the form-wrapper element */
      form.style.maxHeight = height + "px"; /* Don't forget the "px" */
      /*  
        And last we are going to scroll up the page to place
        our contact section into view.
        But we have to set a timer first to execute the command
        after our css transition is completed. That is after 0.3s.
      */
      setTimeout(function(){
        form.scrollIntoView();
      }, 400); 
    }

    function hideForm(){
      let form = document.querySelector(".form-wrapper");
      form.style.maxHeight = "";
    } 

    // When the user clicks on <div>, open the popup
    // function myFunction() {
    //   var popup = document.getElementById("myPopup");
    //   popup.classList.toggle("show");
    // }
</script>
	
</html>