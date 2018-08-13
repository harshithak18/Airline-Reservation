<html>
<body bgcolo="pink">
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
echo "AIRCRAFT DETAILS";
$var=mysql_query("SELECT *FROM aircraft");
echo "<table border size=1>";
echo "<tr><th>ac_id</th><th>ac_num</th><th>capacity</th>mfd_by</th><th>mfd_on</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> </tr>";
}
echo "</table>";

echo "FLIGHT DETAILS";
$var=mysql_query("SELECT *FROM flight_schedule");
echo "<table border size=1>";
echo "<tr><th>flight_id</th><th>flight_name</th><th>flight_date</th>departure</th><th>arrival</th><th>ac_id</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
}
echo "</table>";

echo "FARE DETAILS";
$var=mysql_query("SELECT *FROM fare");
echo "<table border size=1>";
echo "<tr><th>fare_code</th><th>amount</th><th>type</th>flight_id</th></tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td> </tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="airline";
$db_user="root";
$con=mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('airline')or die(mysql_error());
mysql_close($con);
?>
<a href="seat reservation.html">return</a>
</body>
</html>