<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$sql="select * from aircraft";
mysql_select_db('airline');
$res=mysql_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>ac id</th><th>ac number</th><th>capacity</th><th>mfd by</th><th>mfd on</th></tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
   echo "<tr>
         <td>{$row['ac_id']}</td>
		 <td>{$row['ac_num']}</td>
		 <td>{$row['capacity']}</td>
		 <td>{$row['mfd_by']}</td>
		 <td>{$row['mfd_on']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "fetched data succeessfully!!!!\n";
		 echo '<br>';
		    echo '<a href="airdis.php">back </a>';
		 mysql_close($conn);
 ?>
 </body>
</html>