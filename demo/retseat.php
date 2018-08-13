<html>
<body>
<?php
if(isset($_POST['retrieve']))
{

$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die('could not connect:');
}
$seat_no=$_POST['seat_no'];
$sql="select  * from seat_reservation where seat_no='$seat_no'";
mysql_select_db('airline');
$result=mysql_query($sql,$conn);

if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>seat_no</th><th>customer_name</th><th>customer_phone</th><th>flight_date</th><th>flight_id</th></tr>";



	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo "<tr>
	          <td>{$row['seat_no']}</td>
			  <td>{$row['customer_name']}</td>
			  <td>{$row['customer_phone']}</td>
			  <td>{$row['flight_date']}</td>
			  <td>{$row['flight_id']}</td>
	</tr>\n";

	}
	echo "</table>";
	 echo '<br>';
		    echo '<a href="seatdis.php">back </a>';
	mysql_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">seat_no</td>
   <td><input name="seat_no" type="text" id="seat_no"></td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
 <?php 
}
   
?>  
</body>
</html>