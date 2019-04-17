<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>ITech International</title>


	<link rel="stylesheet" type="text/css" href="css.css">
	
</head>
<body>


	<!-- HEADER PART OF THE PAGE -->
	<div class="header-part" align="left">
		<img src="img/logo.png" />
	</div>
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div style="margin-left: 50%;" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <a class="nav-link" href="Calendar.php">Calendar <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Applicant
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="applicant/">SSCE</a>
          <a class="dropdown-item" href="applicant/jamb/">JAMB</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="student/">Portal</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




	<br/>

	<!-- main body -->
<div class="body">

	<!-- IMAGE SLIDER -->
			<div class="slideshow-container" style="height: 100%">


				<div class="mySlides fade">
  				<img src="img/2.jpg" style="width:100%;height: 350px;"/>
				</div>

				<div class="mySlides fade">
  				<img src="img/3.jpg" style="width:100%;height:350px;" />
				</div>

				<div class="mySlides fade">
  				<img src="img/4.jpg" style="width:100%;height:350px;" />
				</div>


				<div style="text-align:center">
 				 <span class="dot"></span>
 				 <span class="dot"></span>
 				 <span class="dot"></span>
				</div>
			</div>
	<!-- END OF IMAGE SLIDER -->


	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2500); 
	}
	</script>
	

		
			



	<!-- ADMISSION INTO SCHOOL -->
		<div style="margin-top:5%;">
			<p class="sidebody-p">
				We offer the best teachers and good conducive learning enviroment... 
				Modernized equipment is used to facilitate divercity of understanding to our students 
			</p>
			
			<h4 align="center">
					ADMISSION! ADMISSION!! ADMISSION!!!
				</h4>
			<p class="sidebody-p">
				 <img src="img/sch.jpg" style="width:50%;" /><br>
				Admitance into Primary, Juniour and Senior sections is ongoing, your can contact us at 
				<strong>iTech</strong> 
				consultants and you can as well contact us through our social medias... Register your child today at 
				<strong>iTech</strong>  
				International and your child shall experience a great change in accademic performance, the knowledge of computer is used for uptimal learning.
			</p>
			
		</div>

	<!-- END OF ADMISSION INTO SCHOOL -->



</div>
<!-- END OF BODY -->


	<!-- side body -->
	<div class="side-body">

		<div>
			<img src="img/waec.jpg" width="40%" height="40%">
			<img src="img/neco.jpg" width="40%" height="40%"><br>
			<p class="sidebody-p">
				We partner with the West African Examination (WAEC), National Examination Council (NECO) to register external candidate with affodable price, registration for both internal and external candidate has been made easy. Click <a href=""> here</a> to begin your registratoin.<br>
				Register with us and you will nerver regret it. A trial will surely convine you.
			</p>
			<p class="sidebody-p">
				We are a legitimate Jiont Admission and Matriculation Board (JAMB) registration center, we register candidate and give the closest for examination if our center is occupied...<br>
				Adequate and experienced teacher is available for JAMB couching in preperation for the exam at affordable price. Click <a href=""> here</a> to procced to registratoin or navigate on the applicant link above
			</p>
		</div>

		<br/>
		
	</div>










































 
	<div class="footer-part" style="float: right;">

		<img src="img/facebook.jpg" width="5%" height="5%" /> Facebook
		<img src="img/instagram.jpg"width="5%" height="5%"/> Instagram
		<img src="img/whatsapp.jpg"width="5%" height="5%"/> whatsapp
		<img src="img/twitter.jpg"width="5%" height="5%"/> twitter
		<img src="img/mail.jpeg"width="5%" height="5%"/> mail
<!--		
		<div class="footer-link">
			<u> Follow Us </u>
			<ul style="font-size: 16px; list-style: none;">
				<a href=""><li>Facebook</li></a><br>
				<a href=""><li>Instagram</li></a><br>
				<a href=""><li>Twiter</li></a>

			</ul>
		</div>

		<div class="footer-link">
			<u> Contact Us </u>
			<ul  style="font-size: 16px; list-style: none;">
				<a href=""><li>Mail</li></a><br>
				<a href=""><li>Whatsapp</li></a><br>
				<a href=""><li>Mobile</li></a>

			</ul>

		</div>

		<div class="footer-link">
			<u> Our Address </u>
			<p>Room 7 joy villa, west-end area, malete kwara state Nigeria</p>
		</div>
-->
	</div>


<!--

		
		<div class="other-arrange" style="float: left;">
			WAEC PAGE
		
		</div>

		
		<div class="other-arrange" style="float: left;">
			WAEC PAGE
		
		</div>

				-->
</body>
</html>