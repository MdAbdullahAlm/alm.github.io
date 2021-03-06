<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "alm";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }


	
if (isset($_POST['submit'])) {

$userName=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

   $sql="INSERT INTO tbcontact( `User_Name`, `email`, `Comment`, `entryTime`) VALUES ('$userName','$email','$comments',CURRENT_TIMESTAMP)";


$re= mysqli_query($link,$sql);
$count=mysqli_num_rows($re);


session_start();
$_SESSION['username'] = $u_name;

header("location:#about");

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>ALM School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url("img/bgs.jpg");
    background-color: #000000;
	background-size: 100% 900px;
    color: #fff;
	height: 900px;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #000000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  </style>  
</head>


<!---demo see for alm:  https://mdbootstrap.com/docs/jquery/forms/basic/---->


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a class="navbar-brand" href="#myPage" style=" padding-top: -30px;"> 
	  <img src="img/almlogo.png" class="w3-image w3-greyscale-min" style="width:60px; height:60px;">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
		<li><a href="#pricing">Admission</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        
        <li><a href="#contact">CONTACT</a></li>
		<li><a href="Login.php">Log in</a></li>
		<li><a href="reg.php">Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">

  <h1> ALM School </h1>
</br></br></br>  
  <h3>We are a family</h3> 
  <!-- <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>  -->
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Our School</h2><br>
      <h4>Since primary and secondary schools do not share the same characteristics of the educational process, while additional differences may emerge among grammar and vocational (secondary) schools, three separate empirical studies are planned on the topic of ‘constructivist’ principal practices in the Croatian school system. In this initial study, the practices of primary school principals are covered.</h4><br>
      <p>Before the empirical study was conducted, two educational experts from the Croatian Scientific centre of excellence for school effectiveness and management have been asked to assess the principals’ practices, based on previous research and their insights. The work of two experts can be summarised by Table 1, which demonstrates the assessment of ‘traditional’ (non-constructivist), versus ‘contemporary’ (constructivist) practices. The obtained results are somewhat subjective since the very theoretical background (discussed in the previous section) emphasises the social constructivist nature of the ‘right’ practices selection. However, the expert assessment has been accepted by a wide range of stakeholders involved in the activities of the Croatian Scientific centre of excellence for school effectiveness and management.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<!-- Container (Pricing Section)  -->

<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Information & Admission</h2>
    <h4>Choose Your plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1></br>  Information </h1>
        </div>
        <div class="panel-body">
          <p><strong>School</strong> Information</p>
		  <p><strong>Admission</strong> Information</p>
          
          <p><strong>Class Room</strong> Information</p>
        </div>
        <div class="panel-footer">
          <h3>1</h3>
          <h4>Click for see details. </h4>
         <a href="information.php">  <button class="btn btn-lg"> Details</button>  </a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Primary School Admission</h1>
        </div>
        <div class="panel-body">
          <p> Admission is <strong>On</strong></p>
          <p>Class <strong>1 to 5</strong></p>
          <p><strong>English</strong> Medium</p>
        </div>
        <div class="panel-footer">
          <h3>2</h3>
          <h4>Click for Admission. </h4>
         <a href="Class1To5.php">  <button class="btn btn-lg">Admission</button> </a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>High School Admission</h1>
        </div>
        <div class="panel-body">
          <p> Admission is <strong>On</strong></p>
          <p>Class <strong>6 to 10</strong></p>
          <p><strong>English</strong> Medium</p>
        </div>
        <div class="panel-footer">
          <h3>3</h3>
          <h4>Click for Admission. </h4>
          <a href="Class6To10.php"> <button class="btn btn-lg">Admission</button> </a>
        </div>
      </div>      
    </div>    
  </div>
</div>             

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> The mission of the University at Buffalo School of Management is to discover and deepen our understanding of management concepts and applications that drive effective organizations and use them to produce principled and insightful leaders who create positive change in the world.</h4><br>
      <p><strong>VISION:</strong> A world of transformational leaders and organizations who change society for the better. </p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Apply, analyze, and evaluate Teacher skills.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>CONSULTING</h4>
      <p>Professionals who desire a Career in Consulting.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>School to Work emphasizes lifelong learning.</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>SCHOOL TRANSPORTATION</h4>
      <p>The different modes of transport are water, and land transport, which includes railways, road transport.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Allowed to teach others is an example of a certified  instructor.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>There are no secrets to success. It is the result of preparation, hard work, and learning from failure.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/create1.jpg" alt="Paris" width="400" height="300">
        <p><strong>Creativity Course</strong></p>
        <p>Creativity & Innovation for Innovators, Artists, Entrepreneurs, Writers, & Students - By a Professional Creativity Coach </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/create2.jpg" alt="New York" width="400" height="300">
        <p><strong>Creative Science</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/create3.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Computer Science</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our guardian say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This School is the best. I am so happy with the result!"<br><span>Nusrat Fariya, actor</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!! I’m thankful for the quick response. "<br><span>Md Rohim, Salesman</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Shakib Khan, Creket</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chittagong, Bangladesh</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> alm108187@gmail.com</p>
    </div>
	
	<form method="POST" id="signup-form" class="signup-form">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name="submit" id="submit">Send</button>
        </div>
      </div>
    </div>
	</form>
  </div>
</div>

<!-- Image of location/map -->


<footer class="container-fluid text-center" style="background-color: black;">
<!--<img src="img/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">-->
  
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="img/almlogo.png" class="w3-image w3-greyscale-min" style="width:60px; height:60px;">
					 </div>
					 <div class="full white_fonts">
					    <p>The mission of the University at Buffalo School of Management is to discover and deepen our 
					    understanding of management concepts and applications that drive effective organizations and use
					     them to produce principled and insightful leaders who create positive change in the world. </p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul class="list-group" > 
							  <li class="list-group-item"  style="background-color: black; border-color: Black;"><a href="Login.php"> Login</a></li>
							  <li class="list-group-item"  style="background-color: black; border-color: Black;"><a href="Reg.php"> Register</a></li>
							  <li class="list-group-item"  style="background-color: black; border-color: Black;"><a href="Class1To5.php"> Class 1 To 5</a></li>
							  <li class="list-group-item"  style="background-color: black; border-color: Black;"><a href="Class6To10.php"> Class 6 To 10</a></li>
							  <li class="list-group-item"  style="background-color: black; border-color: Black;"><a href="Home.php"> Home</a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Newsletter</h3>
							 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							 <div class="newsletter_form">
							    <form action="Home.php" method="POST" id="signup-form" class="signup-form">
								   <input type="email" placeholder="Your Email"  id="email" name="email" required />
								   <button class="btn btn-default pull-right" type="submit" name="submit" id="submit">Submit</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li class="list-group-item"  style="background-color: black; border-color: Black;"><img src="images/i5.png"><span>  Chittagong<br> Bangladesh</span></li>
							   <li class="list-group-item"  style="background-color: black; border-color: Black;"><img src="images/i6.png"><span>  alm108187@gmail.com</span></li>
							   <li class="list-group-item"  style="background-color: black; border-color: Black;"><img src="images/i7.png"><span>  01627048397</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
  
  
  
  
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>


 <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('php, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</php>
