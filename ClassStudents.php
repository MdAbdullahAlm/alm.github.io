<?php
 session_start();

  if(!(isset($_SESSION["Login"]) && $_SESSION["Login"] == "OK")) {
    header("Location: Home.php");
   }
	else{
		include("Connection.php");
		
		if (isset($_POST['submit'])) {

$userName=$_POST['name'];
$Father=$_POST['Fathername'];
$Mother=$_POST['Mothername'];
$PermanentAddress=$_POST['PermanentAddress'];
$MobileNumber=$_POST['MobileNumber'];
$PresentAddress=$_POST['PresentAddress'];
$email=$_POST['email'];
$class=$_POST['class'];
$Roll= $_POST['roll'];
$fileToUpload=$_POST['fileToUpload'];
$userIp= "";

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

$CQSql=" Select studentName,fatherName,motherName,class,MobileNumber from StudentInfo where studentName= '$userName' and fatherName ='$Father' and motherName='$Mother' and class='$class' and MobileNumber='$MobileNumber'";
$re1= mysqli_query($link,$CQSql);
$count=mysqli_num_rows($re1);
if($count == 0) {
	
   $sql="INSERT INTO StudentInfo (`studentName`, `fatherName`, `motherName`, `presentAddress`, `permanentAddress`, `MobileNumber`, `class`, `Cl_Roll`, `email`, `file`,  `userId`, `entryTime`) 
   VALUES ('$userName','$Father','$Mother','$PresentAddress','$PermanentAddress','$MobileNumber','$class','$Roll','$email','$fileToUpload','$userIp',CURRENT_TIMESTAMP)";
$re= mysqli_query($link,$sql);

echo '<script>alert("Sucssesfully Done")</script>'; 

}
else{
echo '<script>alert("$name already exists")</script>';
}
   }
	}
	 


?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>ALM School</title>
	
	
	
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
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       
	   <?php
		 include("navbar.php");
		
		?>
	   
	   
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        
		<?php
		 include("leftSidebar.php");
		
		?>
		
		
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
							<div class="main">

								<section class="signup">
									<!-- <img src="images/signup-bg.jpg" alt=""> -->
									<div class="container">
										<div class="signup-content">
											<form method="POST" id="signup-form" class="signup-form">
												<h2 class="form-title"> Entry Class Students</h2>
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
													  <p> Which class?</p>
													  <div class="row">
														<div class="col-sm-3">
														  <select class="form-control" name="class">
															<option value="Class 1">Class 1</option>
															<option value="Class 2">Class 2</option>
															<option value="Class 3">Class 3</option>
															<option value="Class 4">Class 4</option>
															<option value="Class 5">Class 5</option>
															<option value="Class 6">Class 6</option>
															<option value="Class 7">Class 7</option>
															<option value="Class 8">Class 8</option>
															<option value="Class 9">Class 9</option>
															<option value="Class 10">Class 10</option>
															<option value="SCC Exam">SCC Exam</option>
														  </select>
														</div>
													  </div>
												</div>
												<div class="form-group">
													<input type="text" class="form-input" name="roll" id="roll" placeholder="Class Roll"/>
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
												</br>
												
												<div class="form-group">
													<input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
												</div>
											</form>
											
										</div>
									</div>
								</section>

							</div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             alm108187@gmail.com
                        </div>
              
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>