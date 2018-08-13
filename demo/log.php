<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('airline') or die(mysql_error());
 if(isset($_POST['username'])){
	 $uname=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="select *from admin where user='".$uname."'and pass='".$password."' limit 1";
	 $result=mysql_query($sql);
	 if(mysql_num_rows($result)==1)
	 {
		  echo '<a href="index4.html"> </a>';
    
		 exit();
	 }
	 else
	 {
		 echo "you have invalid login";
		 exit();
	 }
 }
 ?>




<html>
<head>
<title>form in design</title>
<link rel="stylesheet" a href="css3\style.css"/>
<link rel="stylesheet" a href="css3.\font-awesome.min.css"/>
</head>
<body>
<div class="container">
<img src="image\login.png"/>
<form method="POST" action="#">
<div class="form_input">
<input type="text" name="username" placeholder="enter your admin name"/>
</div>
<div class="form_input">
<input type="password" name="password" placeholder="enter your password"/>
</div>
<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
</form>
</div>
</body>
</html>