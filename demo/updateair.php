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
$ac_id=$_POST['ac_id'];

$capacity=$_POST['capacity'];

$sql="update aircraft set capacity='$capacity' where ac_id='$ac_id'";
mysql_select_db('airline');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='view.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">aircraft id</td>
 <td><input name="ac_id" type="text" id="ac_id"></td>
 </tr>
 
<tr>
<td width="100">capacity</td>
<td><input name="capacity" type="text" id="capacity"></td>
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