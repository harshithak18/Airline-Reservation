<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 4px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
	    color: white;
}
    



</style>
</head>
<body>


<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());

$var=mysql_query("SELECT * FROM airport");

echo "<table border size=1>";
  echo "<tr><th>airport_code</th> <th>name</th> <th>city</th> <th> state</th> <th>flight_id</th> </tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
   } 
   echo"</table>";
  
   echo '<br>';
   echo '<a href="userlogin.html">return</a>';
   
    mysql_close($dbh);
   ?>
   

</body>
</html>
