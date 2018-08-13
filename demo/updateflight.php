<html>
<head><title>update</title></head>
<body>
<?php
if(isset($_POST['update']))
{
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$flight_id=$_POST['flight_id'];
$flight_date=$_POST['flight_date'];
$sql="update flight_schedule set flight_date='$flight_date' where flight_id='$flight_id'";
mysql_select_db('airline');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='viewflight.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">flight id</td>
 <td><input name="flight_id" type="text" id="flight_id"></td>
 </tr>
 <tr>
 <td width="100">flight_date</td>
 <td><input name="flight_date" type="text" id="flight_date"></td>
</tr>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>