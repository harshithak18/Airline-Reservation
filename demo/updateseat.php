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
$seat_no=$_POST['seat_no'];
$customer_name=$_POST['customer_name'];
$sql="update seat_reservation set customer_name='$customer_name' where seat_no='$seat_no'";
mysql_select_db('airline');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='viewseat.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">seat_no</td>
 <td><input name="seat_no" type="text" id="seat_no"></td>
 </tr>
 <tr>
 <td width="100">customer_name</td>
 <td><input name="customer_name" type="text" id="customer_name"></td>
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