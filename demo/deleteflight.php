<html>
<body>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$id=$_REQUEST['id'];

$query="delete from flight_schedule where flight_id='$id' ";

$result=mysql_query($query) or die(mysql_error());
echo "Data deleted successfully!!!";
$var=mysql_query("SELECT * FROM flight_schedule");

echo "<table border size=1>";
  echo "<tr><th>flight_id</th> <th>flight_name</th> <th>flight_date</th> <th> departure</th> <th>arrival</th> <th>ac_id</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";
   } 
   echo"</table>";
   
   
   
   echo '<a href="flightdis.php">back </a>';
    
  $db_host="localhost";
 $db_user="root";
 $db_pass=""; 
 $db_name="airline";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline') or die(mysql_error());




 

mysql_close($con);

?>
</body>
</html>	