<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$id=$_REQUEST['id'];

$query="delete from aircraft where ac_id='$id' ";
$result=mysql_query($query) or die(mysql_error());
if(mysql_query($query)==true)
{

echo "Data deleted successfully!!!";
$var=mysql_query("SELECT * FROM aircraft");
$records=mysql_query($dbh,$var);
echo "<table border size=1>";
while($row=mysql_fetch_array($records))
{
  echo "<tr><th>ac_id</th> <th>ac_number</th> <th>capacity</th> <th> mfd_by</th> <th>mfd_on</th> </tr>";
    echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   
   echo"</table>";
}
else
{
	echo mysql_error ();
}
   echo '<a href="airdis.php">back </a>';

?>
