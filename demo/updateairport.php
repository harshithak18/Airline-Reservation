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
$airport_code=$_POST['airport_code'];
$flight_id=$_POST['flight_id'];
$sql="update airport set flight_id='$flight_id' where airport_code='$airport_code'";
mysql_select_db('airline');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='viewair.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">airport_code</td>
 <td><input name="airport_code" type="text" id="airport_code"></td>
 </tr>
 <tr>
 <td width="100">flight_id</td>
 <td><input name="flight_id" type="text" id="flight_id"></td>
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