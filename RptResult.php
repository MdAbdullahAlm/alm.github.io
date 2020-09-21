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
		
		<h4 Style=" font-weight: bold; margin-bottom: 0px;"> Student Results</h4>
	</div>
</div>



<table style="padding: 15px; margin-bottom: 50px;">
<tr>
<th Style="width:20px"> Bangla 1st</th>
<th Style='width:170px'> Bangla 2nd</th>
<th Style='width:150px'> English 1st</th>
<th Style='width:150px'> English 2nd</th>
<th Style='width:120px'> Math </th>
<th Style='width:120px'> Relagion</th>
<th Style='width:40px'> S.S </th>
<th Style='width:70px'> Science </th>
<th Style='width:150px'> ICT</th>
<th Style='width:120px'> Biology </th>
<th Style='width:120px'> Physics </th>
<th Style='width:40px'> chemistry </th>
<th Style='width:70px'> Higer Math </th>
<th Style='width:70px'> Art </th>
<th Style='width:120px'> Sub.Name </th>
<th Style='width:40px'> Result </th>
<th Style='width:40px'> Sub.Name </th>
<th Style='width:40px'> Result </th>
<th Style='width:70px'> Sub.Name </th>
<th Style='width:40px'> Result </th>
<th Style='width:70px'> Sub.Name </th>
<th Style='width:40px'> Result </th>


<?php
include("Connection.php");

$link= mysqli_connect("localhost", "root", "");

mysqli_select_db($link,"alm");




$result="SELECT DISTINCT `Student_Name`,  `Class`, `Roll` FROM `result` order by Class ";

$display=mysqli_query($link,$result);

 

	
	

while($row=mysqli_fetch_array($display))
{

	echo"<tr>";
	  echo"<td colspan='3' Style='font-weight: bold;'>   Class: ".$row['Class']. "</td><td colspan='3' Style='font-weight: bold;'> Roll: ".$row['Roll']."  </td><td colspan='16' Style='font-weight: bold;'>  Name: ".$row['Student_Name']." </td> ";
	echo"</tr>";
	
	$re="SELECT * FROM `result` Where Student_Name like '".$row['Student_Name']."' and Class like '".$row['Class']."' and Roll like '".$row['Roll']."' order by Class ";
	
		$dl=mysqli_query($link,$re);
			
			while($row1=mysqli_fetch_array($dl))
			{
			
				echo"<tr>";
				echo"<td>".$row1['B1rst']."</td>";
				echo"<td>".$row1['B2rst']."</td>";
				echo"<td>".$row1['E1rst']."</td>";
				echo"<td>".$row1['E2rst']."</td>";
				echo"<td>".$row1['Mrst']."</td>";
				echo"<td>".$row1['Rrst']."</td>";
				echo"<td>".$row1['ssrst']."</td>";
				echo"<td>".$row1['srst']."</td>";
				echo"<td>".$row1['Irst']."</td>";
				echo"<td>".$row1['Biology']."</td>";
				echo"<td>".$row1['Physics']."</td>";
				echo"<td>".$row1['chemistry']."</td>";
				echo"<td>".$row1['HigerMath']."</td>";
				echo"<td>".$row1['Art']."</td>";
				
				echo"<td>".$row1['exs1']."</td>";
				echo"<td>".$row1['exs1rst']."</td>";
				echo"<td>".$row1['exs2']."</td>";
				echo"<td>".$row1['exs2rst']."</td>";
				
				echo"<td>".$row1['exs3']."</td>";
				echo"<td>".$row1['exs3rst']."</td>";
				echo"<td>".$row1['exs4']."</td>";
				echo"<td>".$row1['exs4rst']."</td>";
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