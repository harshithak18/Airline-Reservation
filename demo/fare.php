<html>
<body>
<head>
<style>

	table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}

</style>
</head>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$code=$_REQUEST['code'];
$num=$_REQUEST['num'];
$ty=$_REQUEST['ty'];
$id=$_REQUEST['id'];
$discount=null;

$query="INSERT INTO fare VALUES('$code','$num','$ty','$id','$discount')";
$result=mysql_query($query) or die(mysql_error());
echo "Data inserted successfully!!!";
$var=mysql_query("SELECT * FROM fare");

echo "<table border size=1>";
  echo "<tr><th>fare_code</th> <th>amount</th> <th>type</th> <th> flight_id</th><th>discount</th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td></tr>";
   } 
   echo"</table>";
   
   echo '<br>';
   echo '<a href="faredis.php">back </a>';
  
   ?>
   
    
 <?php
 $db_host="localhost";
 $db_name="airline";
 $db_user="root";
 $db_pass="";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline') or die(mysql_error());
$p0=mysql_query("call Total(@out);");
$rs=mysql_query('SELECT @out');
while ($arr=mysql_fetch_row($rs))
{
	 echo '<br>';
	echo 'Total amount=Rs.  '.$arr[0];
}
mysql_close($con); 



 



?>
</body>
</html>