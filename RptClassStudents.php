<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
	
	word-wrap: break-word;         /* All browsers since IE 5.5+ */
    overflow-wrap: break-word;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
}



</style>



</head>
<body>
<div style="height: 70px;">
<?php
include("RptHeaderAll.php");
?>
</div>

<div style="padding: 10px;">

<div style=" height:110px;   text-align: center; ">
	<div style=" width:70px;  float: left;   z-index: 1; position: absolute; " >
	<img src="img/almlogo.png" class="w3-image w3-greyscale-min" style="width:50px; height:55px;" >
	</div>
	<div style=" width:100%; ">
		<h3 Style=" font-weight: bold; margin-bottom: 0px;">ALM School</h3>
		<h5 Style=" margin-bottom: 0px;">Middel Kodurkhil, Boalkhali.</h5>
		<h5 Style=" margin-bottom: 0px;">Phone: 01625896324. Email: alm108187@gmail.com</h5>
		
		<h4 Style=" font-weight: bold; margin-bottom: 0px;"> Student Information</h4>
	</div>
</div>



<table style="padding: 15px; margin-bottom: 50px;">
<tr>
<th Style="width:20px"> Roll</th>
<th Style='width:170px'> Name</th>
<th Style='width:150px'> Father Name</th>
<th Style='width:150px'> Mother Name</th>
<th Style='width:120px'> Present Address </th>
<th Style='width:120px'> Permanent Address</th>
<th Style='width:40px'> Mobile Number </th>
<th Style='width:70px'> Email </th>


</tr>
<?php
include("Connection.php");

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");

$result="SELECT DISTINCT `class` FROM `studentinfo`  ";

$display=mysqli_query($link,$result);

 
	
	

while($row=mysqli_fetch_array($display))
{
	echo"<tr>";
	  echo"<td colspan='8' Style='font-weight: bold;'> Class: ".$row['class']."</td>";
	echo"</tr>";
	
	$re="SELECT * FROM `studentinfo` Where class like '".$row['class']. "' ";
	
		$dl=mysqli_query($link,$re);
			
			while($row1=mysqli_fetch_array($dl))
			{
				
				
				echo"<tr>";
				echo"<td>".$row1['Cl_Roll']."</td>";
				echo"<td>".$row1['studentName']."</td>";
				echo"<td>".$row1['fatherName']."</td>";
				echo"<td>".$row1['motherName']."</td>";
				echo"<td>".$row1['presentAddress']."</td>";
				echo"<td>".$row1['permanentAddress']."</td>";
				echo"<td>".$row1['MobileNumber']."</td>";
				echo"<td>".$row1['email']."</td>";

				echo"</tr>";
			}
}
?>
</table>

<div class="footer"  Style="height:10px;">
                   <h6 Style=" float: left; width: 350px;"> <?php
											echo "Print Time: " . date("Y/m/d");
											   echo " User Ip: ".$_SERVER['HTTP_HOST'];
											  ?></h6>
				<h6 Style=" float: left; width: 450px;">Solution by: ALM School. Phone:01625896324. Email: alm108187@gmail.com</h6> 
				
                 
                
</div>
</div>

</body>
</html>