<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from flight_schedule";
mysql_select_db('airline');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>flight_id</th><th>flight_name</th><th>flight_date</th><th>departure</th><th>arrival</th> <th>ac_id</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
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
		 echo "fetched data succeessfully!!!!\n";
		 echo '<br>';
		    echo '<a href="flightdis.php">back </a>';
		 mysql_close($conn);
 ?>
 </body>
</html>