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
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}


</style>
</head>
<body>

<ul>
  <li><a class="active" href="fare.html">Add New Details</a></li>
  <li><a href="deletefare.html">Delete Any Record</a></li>
  <li><a href="updatefare.php">Update</a></li>
  <li><a href="retfare.php">Retreive</a></li>
</ul>
<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
$var=mysql_query("SELECT * FROM fare");

echo "<table border size=1>";
  echo "<tr><th>fare_code</th> <th>amount</th> <th>type</th> <th> flight_id</th><th>discount</th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td></tr>";
   } 
   echo"</table>";
   echo "<br>";
   echo '<a href="index4.html">return</a>';
   
mysql_close($dbh);
   ?>
   

</body>
</html>
