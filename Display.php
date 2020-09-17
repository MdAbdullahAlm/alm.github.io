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
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<table>
<tr>
<th> Auto_Id</th>
<th> studentName</th>
<th> Mobile Number</th>
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
	  echo"<td colspan='3'> Class: ".$row['class']."</td>";
	echo"</tr>";
	
	$re="SELECT * FROM `studentinfo` Where class like '".$row['class']. "' ";
	
		$dl=mysqli_query($link,$re);
			
			while($row1=mysqli_fetch_array($dl))
			{
				
				
				echo"<tr>";
				echo"<td>".$row1['autoId']."</td>";
				echo"<td>".$row1['studentName']."</td>";
				echo"<td>".$row1['MobileNumber']."</td>";

				echo"</tr>";
			}
}
?>
</table>
</body>
</html>