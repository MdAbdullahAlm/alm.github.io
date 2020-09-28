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
	
	<style>
		td:hover {
    -moz-transform: translate(-2px, -2px);
    -ms-transform: translate(-2px, -2px);
    -o-transform: translate(-2px, -2px);
    -webkit-transform: translate(-2px, -2px);
    transform: translate(-2px, -2px);
	padding:2px;
}
	
	
	</style>
	
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
        <div class="dashboard-wrapper" >
            <div class="dashboard-ecommerce" style="padding:0px;">
                <div class="container-fluid dashboard-content " style="padding:0px;">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
							<div class="main">

								<section class="signup">
									<!-- <img src="images/signup-bg.jpg" alt=""> -->
									<div class="container" style="padding:0px;">
										<div class="signup-content" style="padding:10px;">
											<form method="POST" id="signup-form" class="signup-form">
												<h2 class="form-title"> Cash Payment Voucher</h2></br>
												<table>
													<tr>
														<td>
															<p Style="font-weight: bold; width:100px;"> Paid To: </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
															</div>
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold;"> Date: </p>
														</td>
														<td Style="width:150px;">
															<div class="form-group">
																<input type="date" class="form-input" name="date" id="date" placeholder="Date"/>
															</div>
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold;"> Voucher No: </p>
														</td>
														<td Style="width:100px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="name" id="name" placeholder="12" disabled />
															</div>
														</td>
													</tr>
													</table>
													<table>
													<tr>
														<td>
															<p Style="font-weight: bold; width:100px;"> Cash A/C: </p>
														</td>
														<td>
															<div class="form-group" >
													
																  <div class="row">
																	<div class="col-sm-3">
																	  <select class="form-control" name="CGroup" Style="width:350px;">
																		<option> </option>
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
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold;"> Attach Bill: </p>
														</td>
														<td>
															<div class="form-group">
															
																	<div class="file-upload-wrapper">
																	  <input type="file" id="input-file-max-fs" name="fileToUpload" class="file-upload" data-max-file-size="2M" />
																	</div>
															</div> 
														</td>
													</tr>

												</table>
												<table>
													<tr>
														<td>
															<p Style="font-weight: bold; width:100px;"> Budget : </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="name" id="name" placeholder="23" disabled />
															</div>
														</td>
														<td Style="padding-left: 20px;">
															<p Style="font-weight: bold; "> Balance : </p>
														</td>
														<td Style="width:350px;">
															<div class="form-group" >
																<input type="text" class="form-input" name="name" id="name" placeholder="5" disabled />
															</div>
														</td>
													</tr>
												</table>
												
												
												
											
												<form method="post" id="insert_form">
													<div class="table-repsonsive">
													 <span id="error"></span>
													 <table class="table table-bordered" id="item_table" Style="background-color: #00FFFF;">
													  <tr>
													   <th>Ledger Name</th>
													   <th>Balance</th>
													   <th>Debit Amount</th>
													  </tr>
													  
													  <?php

															$link= mysqli_connect("localhost", "root", "");

															mysqli_select_db($link,"alm");
														$re="SELECT ledgerId,((SELECT SUM(drAmount)- SUM(crAmount) FROM voucher1 WHERE `ledgerId` = ledgerId)
														+(SELECT SUM(drAmount)- SUM(crAmount) FROM tbledgeropeningbalance WHERE `ledgerId` = ledgerId))Balance 
														FROM `tbledgeropeningbalance` ";
	
															$dl=mysqli_query($link,$re);
															
															while($row1=mysqli_fetch_array($dl))
															{
															
																echo"<tr>";
																
																$re2="SELECT * FROM `tbledgeropeningbalance` ";
																$dl3=mysqli_query($link,$re2);
																echo "<td><select class='form-control' name='CLedger' Style='width:350px;'>";
																
																while($row2=mysqli_fetch_array($dl3))
																{
																	echo "<option > </option>";
																	echo "<option value=". $row2['CLedger'].">". $row2['CLedger']."</option>";
																}
																echo "<select></td>";
																
																echo"<td>".$row1['Balance']."</td>";
																echo"<td><input type='text' class='form-input' name='DrAmount' id='DrAmount' placeholder='Dr Amount'/></td>";
																
																echo"</tr>";
																
															}
															?>
													 </table>
													 <div align="center">
													  <input type="submit" name="submit" class="btn btn-info" value="Insert" />
													 </div>
													</div>
												</form>
																											 
												
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
													<table>
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="New" id="New" class="form-submit" value="New" Style="color: black;"/>
														</td>
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Save" id="Save" class="form-submit" value="Save" Style="color: black;"/>
														</td>	
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Edit" id="Edit" class="form-submit" value="Edit" Style="color: black;"/>
														</td>
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Delete" id="Delete" class="form-submit" value="Delete" Style="color: black;"/>
														</td>
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Refresh" id="Refresh" class="form-submit" value="Refresh" Style="color: black;"/>
														</td>
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Find" id="Find" class="form-submit" value="Find" Style="color: black;"/>
														</td>	
														<td Style="width:120px; color: blue;">
													       <input type="submit" name="Preview" id="Preview" class="form-submit" value="Preview" Style="color: black;"/>
														</td>
														
													</table>
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