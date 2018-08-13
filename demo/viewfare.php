<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from fare";
mysql_select_db('airline');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>fare_code</th><th>amount</th><th>type</th><th>flight_id</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['fare_code']}</td>
		 <td>{$row['amount']}</td>
		 <td>{$row['type']}</td>
		 <td>{$row['flight_id']}</td>
	
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "fetched data succeessfully!!!!\n";
		 echo '<br>';
		    echo '<a href="faredis.php">back </a>';
		 mysql_close($conn);
 ?>
 </body>
</html>