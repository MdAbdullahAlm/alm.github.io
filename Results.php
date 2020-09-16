<?php
 session_start();

  if(!(isset($_SESSION["Login"]) && $_SESSION["Login"] == "OK")) {
    header("Location: Home.php");
   }
	else{
		include("Connection.php");
		
		if (isset($_POST['submit'])) {

$userName=$_POST['name'];
$class=$_POST['class'];
$Roll=$_POST['roll'];
$B1rst=$_POST['B1rst'];
$B2rst=$_POST['B2rst'];
$E1rst=$_POST['E1rst'];
$E2rst=$_POST['E2rst'];
$Mrst=$_POST['Mrst'];
$Rrst=$_POST['Rrst'];
$ssrst=$_POST['ssrst'];
$srst=$_POST['srst'];
$Irst=$_POST['Irst'];

$Biorst=$_POST['Biorst'];
$Phyrst=$_POST['Pyrst'];
$Chrst=$_POST['Chrst'];
$Hmrst=$_POST['Hmrst'];
$Arst=$_POST['Arst'];
$exs1=$_POST['exs1'];
$exs1rst=$_POST['exs1rst'];
$exs2=$_POST['exs2'];
$exs2rst=$_POST['exs2rst'];
$exs3=$_POST['exs3'];
$exs3rst=$_POST['exs3rst'];
$exs4=$_POST['exs4'];
$exs4rst=$_POST['exs4rst'];

$fileToUpload=$_POST['fileToUpload'];
$userIp= "";

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

$CQSql=" Select Student_Name,Roll from result 
where Student_Name= '$userName' and Roll ='$Roll'";

$re1= mysqli_query($link,$CQSql);
$count=mysqli_num_rows($re1);
if($count > 0) {
	echo "alert $Roll already exists";
}
else{
   $sql="INSERT INTO `result`( `Student_Name`, `Class`, `Roll`, `B1rst`, `B2rst`, `E1rst`, `E2rst`, `Mrst`,
   `Rrst`, `ssrst`, `srst`, `Irst`, `Biology`, `Physics`, `chemistry`, `HigerMath`, `Art`,
   `exs1`, `exs1rst`, `exs2`, `exs2rst`, `exs3`, `exs3rst`, `exs4`, `exs4rst`, `userIp`, `entryTime`) 
   VALUES ('$userName','$class','$Roll','$B1rst','$B2rst','$E1rst','$E1rst','$Mrst','$Rrst','$ssrst','$srst','$Irst','$Biorst',
   '$Phyrst','$Chrst','$Hmrst','$Arst','$exs1','$exs1rst','$exs2','$exs2rst','$exs3','$exs3rst','$exs4','$exs4rst','',CURRENT_TIMESTAMP)";
$re= mysqli_query($link,$sql);

echo '<script>alert("Sucssesfully Done")</script>'; 
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
												<h2 class="form-title"> Entry Student Result</h2>
												
												<div class="form-group">
													  <div class="row">
													  <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
														<p> Which class?</p>
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
														<input type="text" class="form-input" name="roll" id="roll" placeholder="Roll"/>
													  </div>
													 	
												</div>
												<div class="form-group">
												   
													  <h4 class="form-title"><pre> Entry Subject Name          Entry Roll Name</pre></h4>
													
												</div>
												<div class="form-group">
												   <div class="row">
													<div class="col-sm-3">
														<select class="form-control" name="sub1"> <option value="Bangla 1st">Bangla 1st</option> </select>
														
													</div>
													<input type="text" class="form-input" name="B1rst" id="B1rst" placeholder="Result"/>
												   </div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
														<select class="form-control" name="sub2"> <option value="Bangla 2nd">Bangla 2nd</option> </select>
														</div>
														<input type="text" class="form-input" name="B2rst" id="B2rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													  <select class="form-control" name="sub3"> <option value="English 1st">English 1st</option></select>
													  </div>
													  <input type="text" class="form-input" name="E1rst" id="E1rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													  <select class="form-control" name="sub4"> <option value="English 2nd">English 2nd</option></select>
													  </div>
													  <input type="text" class="form-input" name="E2rst" id="E2rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub5"> <option value="Math">Math</option> </select>
													</div>
													<input type="text" class="form-input" name="Mrst" id="Mrst" placeholder="Result"/>
												</div>   
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub6"> <option value="Relagion">Relagion</option> </select>
													</div>
													<input type="text" class="form-input" name="Rrst" id="Rrst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub7"> <option value="S.S">S.S</option> </select>
													</div>
													<input type="text" class="form-input" name="ssrst" id="ssrst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub8"><option value="Science">Science</option> </select>
													</div>
													<input type="text" class="form-input" name="srst" id="srst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub9"> <option value="ICT">ICT</option> </select>
													</div>
													<input type="text" class="form-input" name="Irst" id="Irst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub10"> <option value="Biology">Biology</option> </select>
													</div>
													<input type="text" class="form-input" name="Biorst" id="Biorst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub11"> <option value="Physics">Physics</option> </select>
													</div>
													<input type="text" class="form-input" name="Pyrst" id="Pyrst" placeholder="Result"/>
												</div>   
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub12"> <option value="chemistry">chemistry</option> </select>
													</div>
													<input type="text" class="form-input" name="Chrst" id="Chrst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub13"> <option value="HigerMath">Higer Math</option> </select>
													</div>
													<input type="text" class="form-input" name="Hmrst" id="Hmrst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<div class="col-sm-3">
													<select class="form-control" name="sub14"> <option value="Art">Art</option> </select>
													</div>
													<input type="text" class="form-input" name="Arst" id="Arst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													
													<input type="text" class="form-input" name="exs1" id="exs1" placeholder="Another Subject"/>
													<input type="text" class="form-input" name="exs1rst" id="exs1rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<input type="text" class="form-input" name="exs2" id="exs2" placeholder="Another Subject"/>
													<input type="text" class="form-input" name="exs2rst" id="exs2rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<input type="text" class="form-input" name="exs3" id="exs3" placeholder="Another Subject"/>
													<input type="text" class="form-input" name="exs3rst" id="exs3rst" placeholder="Result"/>
												</div>
												</div>
												<div class="form-group">
												 <div class="row">
													<input type="text" class="form-input" name="exs4" id="exs4" placeholder="Another Subject"/>
													<input type="text" class="form-input" name="exs4rst" id="exs4rst" placeholder="Result"/>
												</div> 
												</div>												
												
					
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