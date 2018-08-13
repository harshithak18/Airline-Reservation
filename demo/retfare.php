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
$fare_code=$_POST['fare_code'];
$sql="select  * from fare where fare_code='$fare_code'";
mysql_select_db('airline');
$result=mysql_query($sql,$conn);

if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>fare_code</th><th>amount</th><th>type</th><th>flight_id</th></tr>";



	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo "<tr>
	          <td>{$row['fare_code']}</td>
			  <td>{$row['amount']}</td>
			  <td>{$row['type']}</td>
			  <td>{$row['flight_id']}</td>
	</tr>\n";

	}
	echo "</table>";
	 echo '<br>';
		    echo '<a href="faredis.php">back </a>';
	mysql_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">fare_code</td>
   <td><input name="fare_code" type="text" id="fare_code" ></td>
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