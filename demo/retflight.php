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
$flight_id=$_POST['flight_id'];
$sql="select  * from flight_schedule  where flight_id='$flight_id'";
mysql_select_db('airline');
$result=mysql_query($sql,$conn);

if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>flight id</th><th>flight_name</th><th>flight_date</th><th>departure</th><th>arrival</th><th>ac_id</th></tr>";



	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo "<tr>
	          <td>{$row['flight_id']}</td>
			  <td>{$row['flight_name']}</td>
			  <td>{$row['flight_date']}</td>
			  <td>{$row['departure']}</td>
			  <td>{$row['arrival']}</td>
			  <td>{$row['ac_id']}</td>
	</tr>\n";

	}
	echo "</table>";
	 echo "<br>";
   echo '<a href="flightdis.php">back </a>';
	mysql_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">flight_id</td>
   <td><input name="flight_id" type="text" id="flight_id"></td>
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