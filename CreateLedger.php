<?php
 session_start();

  if(!(isset($_SESSION["Login"]) && $_SESSION["Login"] == "OK")) {
    header("Location: Home.php");
   }
	else{
		include("Connection.php");
		
		if (isset($_POST['submit'])) {

$Group=$_POST['Group'];
$CGroup=$_POST['CGroup'];
$CLedger=$_POST['CLedger'];
$crAmount=$_POST['crAmount'];
$drAmount=$_POST['drAmount'];
$opYear=$_POST['opYear'];
$userIp= $_SERVER['HTTP_HOST'];

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

$CQSql=" Select opYear,CLedger  from createledger where opYear ='$opYear' and CLedger = '$CLedger'";
$re1= mysqli_query($link,$CQSql);
$count=mysqli_num_rows($re1);
if($count == 0) {
	$sql="INSERT INTO tbledgeropeningbalance( MainGroup, CGroup, ledgerId,crAmount, drAmount, opYear, userIp, entryTime)
	VALUES ('$Group','$CGroup','$CLedger','$crAmount','$drAmount','$opYear','$userIp',CURRENT_TIMESTAMP)";
$re= mysqli_query($link,$sql);

$sql1="INSERT INTO createledger( MainGroup, CGroup, CLedger,crAmount, drAmount, opYear, userIp, entryTime)
	VALUES ('$Group','$CGroup','$CLedger','$crAmount','$drAmount','$opYear','$userIp',CURRENT_TIMESTAMP)";
$re1= mysqli_query($link,$sql1);

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
												<h2 class="form-title"> Create Ledger </h2>
												
												<div class="form-group">
													  <p>Your Main Group: </p>
													  <div class="row">
														<div class="col-sm-3">
														  <select class="form-control" name="Group">
															<option value="All">All</option>
															<option value="Assets">Assets</option>
															<option value="Liabilities">Liabilities</option>
															<option value="Income">Income</option>
															<option value="Expenses">Expenses</option>
														  </select>
														</div>
													  </div>
												</div>
												<div class="form-group">
													<p>Your Group: </p>
													  <div class="row">
												    	<div class="col-sm-3">
														  <select class="form-control" name="CGroup">
															<?php
																 $link= mysqli_connect("localhost", "root", "");

																mysqli_select_db($link,"alm");


																	
																	$re="SELECT * FROM `tbledgeropeningbalance` ";
																	
																		$dl=mysqli_query($link,$re);
																			
																			while($row1=mysqli_fetch_array($dl))
																			{
														
														?>
														<option value="<?php echo $row1['CGroup']; ?>"><?php echo $row1['CGroup']; ?></option>
																	<?php   }  ?> 
																			
																				
														  </select>
														</div>
													  </div>
												</div>
												<div class="form-group">
													<input type="text" class="form-input" name="CLedger" id="CLedger" placeholder="Create New Ledger"/>
												</div>
												
												
												<table>
													<tr>
														<td>
															<p Style="font-weight: bold; "> Cr Amount: </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="crAmount" id="crAmount" placeholder="23"  />
															</div>
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold; "> Dr Amount: </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="drAmount" id="drAmount" placeholder="5"  />
															</div>
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold; "> Opening Year: </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="opYear" id="opYear" placeholder="5"  />
															</div>
														</td>
													</tr>
												</table>
												
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