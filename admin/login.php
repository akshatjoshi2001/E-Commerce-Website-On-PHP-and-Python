<?php
$username = $_POST["username"];
$password = $_POST["password"];
if($username == "admin" && $password == "akshat123")
{
	setcookie("localhost","ADMIN",time()+3600);
	Header('Location: dashboard.php');
}
else
{
}
?>