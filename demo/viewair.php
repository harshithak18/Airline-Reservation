<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from airport";
mysql_select_db('airline');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>airport code</th><th>name</th><th>city</th><th>state</th><th>flight_id</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['airport_code']}</td>
		 <td>{$row['name']}</td>
		 <td>{$row['city']}</td>
		 <td>{$row['state']}</td>
		 <td>{$row['flight_id']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "fetched data succeessfully!!!!\n";
		 echo '<br>';
		    echo '<a href="airportdis.php">back </a>';
		 mysql_close($conn);
 ?>
 </body>
</html>