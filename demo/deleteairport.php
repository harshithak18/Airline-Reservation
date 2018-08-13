<html>
<body>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$code=$_REQUEST['code'];

$query="delete from airport where airport_code='$code'";
$result=mysql_query($query) or die(mysql_error());
echo "Data deleted successfully!!!";
$var=mysql_query("SELECT * FROM airport");

echo "<table border size=1>";
  echo "<tr><th>airport_code</th> <th>name</th> <th>city</th> <th> state</th> <th>flight_id</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   } 
   echo"</table>";
    echo '<a href="airportdis.php">back </a>';
    
 $db_host="localhost";
 $db_name="airline";
 $db_user="root";
 $db_pass="";
 

$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline') or die(mysql_error());



 

mysql_close($con);

?>
</body>
</html>