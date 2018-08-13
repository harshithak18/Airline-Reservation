<?php
$severname="localhost";
$username="root";
$password="";
$dbname="ariline_db";
$conn=new mysql($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
$id=$_REQUEST['id'];
$sql="delete from aircraft where id='id'";
if($conn->query($sql)===TRUE)
{
echo "successfully deleted";
}
else
{
echo"not deleted";
}
$var=mysql_query("select *from aircraft");




echo "<table border size=1>";
  echo "<tr><th>ac_id</th> <th>ac_number</th> <th>capacity</th> <th> mfd_by</th> <th>mfd_on</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   } 
   echo"</table>";
      
$db_host="localhost";
   $db_user="root";
  $db_pass=""; 
 $db_name="airline";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline') or die(mysql_error());


   $conn->close();
   ?>
