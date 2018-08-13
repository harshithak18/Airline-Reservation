<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from seat_reservation";
mysql_select_db('airline');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>seat_no</th><th>customer_name</th><th>customer_phone</th><th>flight_date</th><th>flight_id</th> </tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
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
		 echo "fetched data succeessfully!!!!\n";
		   echo '<a href="seatdis.php">back </a>';
		 mysql_close($conn);
 ?>
 </body>
</html>