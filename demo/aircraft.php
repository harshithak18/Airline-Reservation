<html>
<body>


<head>
<style>

	table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 70%;
}

th {
    height: 50px;
}

</style>
</head>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$id=$_REQUEST['id'];
$num=$_REQUEST['num'];
$cpc=$_REQUEST['cpc'];
$by=$_REQUEST['by'];
$on=$_REQUEST['on'];
$query="INSERT INTO aircraft VALUES('$id','$num','$cpc','$by','$on')";
$result=mysql_query($query) or die(mysql_error());
echo "Data inserted successfully!!!";
$var=mysql_query("SELECT * FROM aircraft");

echo "<table border size=1>";
  echo "<tr><th>ac_id</th> <th>ac_number</th> <th>capacity</th> <th> mfd_by</th> <th>mfd_on</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   } 
   echo"</table>";
   
   
   echo '<br>';
   echo '<a href="airdis.php">back </a>';
    
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