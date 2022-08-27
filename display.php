<style>

td
{
	padding:20px;
	color:#000;
}
</style>

<?php
include("connection.php");
// include("index.css");
$query="SELECT * FROM pizza";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
   ?>
   <a href="insert.php"><h2>Insert Data</h2></a>
   <table>
	    <tr style="border: 1px dotted #000000;">
		
	      <th> order_time </th>
		  <th> order_pickup </th>
		  <th> delivery_boy_pickup </th>
		  <th> customer_delivered </th>
    	</tr>
		
   <?php
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		         <td>".$result['order_time']."</td>
				 <td>".$result['order_pickup']."</td>
				 <td>".$result['delivery_boy_pickup']."</td>
				 <td>".$result['customer_delivered']."</td>
		     </tr>";
	}
}
else
{
	echo "no record found";
}
?>
   </table>
<script>
   function checkdelete()
   {
	   return confirm('Are you sure you want to delete this data???');
   }
</script>