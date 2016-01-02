<?php
	$user = $_REQUEST["user"];
	$pass = $_REQUEST["pass"];	
	$name = $_REQUEST["name"];
	include 'db.php';
	$result = mysqli_query($con,"SELECT * FROM users where user='$user'");
	$exist = 'f';
	while($row = mysqli_fetch_array($result))
	{
		$exist = 't';
	}
	if($exist == 'f')
	{
		mysqli_query($con,"insert into users(user,pass,name) VALUES('$user','$pass','$name')");
		Header('Location: login.py?err=sucregd');
	}
	else
	{
		Header('Location: register.py?err=userexist');
	}

?>