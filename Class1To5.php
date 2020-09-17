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
$Father=$_POST['Fathername'];
$Mother=$_POST['Mothername'];
$PermanentAddress=$_POST['PermanentAddress'];
$MobileNumber=$_POST['MobileNumber'];
$PresentAddress=$_POST['PresentAddress'];
$email=$_POST['email'];
$class=$_POST['class'];
$PreviousSchool=$_POST['PreviousSchool'];
$fileToUpload=$_POST['fileToUpload'];
$Agterm=$_POST['Agterm'];
$userIp= "";

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

   $sql="INSERT INTO class1to5 (`studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `previousSchool`, `email`, `file`, `teamService`, `userId`, `entryTime`)
   VALUES ('$userName','$Father','$Mother','$PresentAddress','$PermanentAddress','$MobileNumber','$class','$PreviousSchool','$email','$fileToUpload','$Agterm','$userIp',CURRENT_TIMESTAMP)";


$re= mysqli_query($link,$sql);
$count=mysqli_num_rows($re);


session_start();
$_SESSION['username'] = $u_name;
header("location:confirmationMsg.php");

}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALM School</title>

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
                        <h2 class="form-title">Admission Form Class 1 To 5</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Fathername" id="Fathername" placeholder="Father Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Mothername" id="Mothername" placeholder="Mother Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="PresentAddress" id="PresentAddress" placeholder="Present Address"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="PermanentAddress" id="PermanentAddress" placeholder="Permanent Address"/>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="MobileNumber" id="MobileNumber" placeholder="Mobile Number"/>
                        </div>   
                        <div class="form-group">
                              <p> Which class you are want to admission?</p>
                              <div class="row">
							    <div class="col-sm-3">
							      <select class="form-control" name="class">
							        <option value="Class 1">Class 1</option>
							        <option value="Class 2">Class 2</option>
							        <option value="Class 3">Class 3</option>
							        <option value="Class 2">Class 4</option>
							        <option value="Class 3">Class 5</option>
							      </select>
							    </div>
							  </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="PreviousSchool" id="PreviousSchool" placeholder="Previous School Name"/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Not need for Class 1 </label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        
                        <div class="form-group">
                        <p> Upload Students Picture</p>
		                        <div class="file-upload-wrapper">
								  <input type="file" id="input-file-max-fs" name="fileToUpload" class="file-upload" data-max-file-size="2M" />
								</div>
                          </div> 
                        
                        <div class="form-group">
                            <input type="checkbox" name="Agterm" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>