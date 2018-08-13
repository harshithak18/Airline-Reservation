<html>
<body>
<?php
if(isset($_POST['retrieve']))
{

$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die('could not connect:');
}
$ac_id=$_POST['ac_id'];
$sql="select  * from aircraft where ac_id='$ac_id'";
mysql_select_db('airline');
$result=mysql_query($sql,$conn);

if(!$result)
{
	die('could not get data:');
}
	echo "Fetched data Successfully\n";
	echo "<table border size=1>";
echo "<tr><th>ac id</th><th>ac_num</th><th>capacity</th><th>mfd_by</th><th>mfd_on</th></tr>";



	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
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
	 echo '<br>';
		    echo '<a href="airdis.php">back </a>';
	mysql_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100">ac_id</td>
   <td><input name="ac_id" type="text" id="ac_id"></td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
 <?php 
}
   
?>  
</body>
</html>