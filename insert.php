<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>

<form action="" method="GET">
order_time:<input type="time" name="order_time" value=""/><br><br>
order_pickup:<input type="text" name="order_pickup" value=""/><br><br>
delivery_boy_pickup:<input type="text" name="delivery_boy_pickup" value=""/><br><br>
customer_delivered:<input type="text" name="customer_delivered" value=""/><br><br>
<input type="submit" name="submit" value="submit"/>
</form>
<a href="display.php" ><h2>Show Data</h2></a>
<?php

if($_GET['submit'])
{
	$rn=$_GET['order_time'];
	$sn=$_GET['order_pickup'];
	$cl=$_GET['delivery_boy_pickup'];
	$pb=$_GET['customer_delivered'] ;

 if($rn!="" && $sn!="" && $cl!="" && $pb!="")
 {
	$query="INSERT INTO pizza VALUES('$rn','$sn','$cl','$pb')";
	
	$data=mysqli_query($conn,$query);
	
	if($data)
	{
		 echo "Data inserted into database";
	}
 }
 else
 {
	echo "All fields are required"; 
 }
}
?>

</body> 
</html>
