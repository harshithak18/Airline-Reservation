<html>
<body>

<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$id=$_REQUEST['id'];
$query="delete from aircraft where ac_id='$id' ";


$result=mysql_query($query) or die(mysql_error());
echo "data deleted successfully";
$var=mysql_query("SELECT * FROM aircraft");

echo "<table border size=1>";
  echo "<tr><th>ac_id</th> <th>ac_number</th> <th>capacity</th> <th> mfd_by</th> <th>mfd_on</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   } 
   echo"</table>";

$db_host="localhost";
$db_user="root";
  $db_pass=""; 
 $db_name="airline";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline') or die(mysql_error());
   echo '<a href="airdis.php">back </a>';
   
mysql_close($con);

?>
</body>
</html>	