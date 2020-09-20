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
		
		<h4 Style=" font-weight: bold; margin-bottom: 0px;"> Staff Information</h4>
	</div>
</div>



<table style="padding: 15px; margin-bottom: 50px; table-layout: fixed; width: 100%;">
<tr>
<th Style='width:70px'> Staff Name</th>
<th Style='width:70px'> Father Name</th>
<th Style='width:70px'> Mother Name</th>
<th Style='width:70px'> Present Address </th>
<th Style='width:70px'> Permanent Address</th>
<th Style='width:40px'> Mobile Number </th>
<th Style='width:70px'> Email </th>
<th Style='width:40px'>> Category </th>

</tr>
<?php
include("Connection.php");

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");


	
	$re="SELECT * FROM `staffinfo` ";
	
		$dl=mysqli_query($link,$re);
			
			while($row1=mysqli_fetch_array($dl))
			{
				
				
				echo"<tr>";
				echo"<td>".$row1['studentName']."</td>";
				echo"<td>".$row1['fatherName']."</td>";
				echo"<td>".$row1['motherName']."</td>";
				echo"<td>".$row1['presentAddress']."</td>";
				echo"<td>".$row1['permanentAddress']."</td>";
				echo"<td>".$row1['MobileNumber']."</td>";
				echo"<td>".$row1['email']."</td>"; 
				echo"<td>".$row1['Category']."</td>";
				echo"</tr>";
			}

?>
</table>

<div class="footer"  Style="height:10px;">
                   <h6 Style=" float: left; width: 350px;">Print Time: 2020-08-20 17:53:39.   User Id: 0120100101012</h6>
				<h6 Style=" float: left; width: 450px;">Solution by: ALM School. Phone:01625896324. Email: alm108187@gmail.com</h6> 
				<h6 Style=" float: right; width: 70px;">Page: </h6>
				
				
				   
                        
						
						
              
                    
                
</div>
</div>

</body>
</html>