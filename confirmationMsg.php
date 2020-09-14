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

session_start();
$_SESSION['username'] = $u_name;
header("location:Home.php");

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/combobox.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
    <script href="js/combobox.js"></script>
    <script href="js/fileUpload.js"></script>
    
</head>
<body>

 <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                   <!-- <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="image"></a>
                 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span>ALM</span>
                    <span>School</span>
                    <span></span>
                </button>-->  
                <img src="img/almlogo.png" class="w3-image w3-greyscale-min" style="width:60px; height:60px;">
               <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="Home.php">Home</a></li>
                
                        <li><a class="nav-link" href="Class1To5.php">Class 1 To 5</a></li>
                        <li><a class="nav-link" href="Class6To10.php">Class 6 To 10</a></li>
						<li><a class="nav-link" href="Login.php">Log In</a></li>
						<li><a class="nav-link" href="Reg.php">Register</a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
    </header>
    

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        
                    
                        <div class="form-group"></br></br>
                           <label for="agree-term" class="label-agree-term"><h2><span>Your Admission From is Submited. </span></h2></br></br>
                               <center><img src="img/ConMsg.jpg" class="w3-image w3-greyscale-min" style="width:150px; height:150px;"></center>
                                </br>
                              
                              <h3><span>Wait For Admission Confirmation Massage and We are inform as soon as by Phone Number or Email with in 5 Days.</span></h3>
                              </br>
                              <h3><span>If You want earliyer Admission or Physicaly meet, So WellCome in our school in open day.</span></h3>
                              </br>
                              <h3><span>Best Wish for you childs.</span></h3>
                              </br>
                              <h5><span> Thanks Alot for with us.</span></h5>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Go To Home Page"/>
                        </div>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>