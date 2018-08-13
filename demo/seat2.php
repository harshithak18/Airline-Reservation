<html>
<body>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$no=$_REQUEST['no'];
$nam=$_REQUEST['nam'];
$pho=$_REQUEST['pho'];
$dat=$_REQUEST['dat'];
$id=$_REQUEST['id'];


$query="INSERT INTO seat_reservation VALUES('$no','$nam','$pho','$dat','$id')";
$result=mysql_query($query) or die(mysql_error());
echo "Data inserted successfully!!!";
$var=mysql_query("SELECT * FROM seat_reservation");

echo "<table border size=1>";
  echo "<tr><th>seat_no</th> <th>customer_name</th> <th>customer_phone</th> <th> date</th> <th>flight_id</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
   } 
   echo"</table>";
   
   echo '<br>';
   
   echo '<a href="userlogin.html">back </a>';
    
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