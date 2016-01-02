<?php
if(isset($_COOKIE["eshop"]))
{
$user = $_COOKIE["eshop"];
$id = $_REQUEST["id"];
$qty = $_REQUEST["qty"];
include 'db.php';
$result = mysqli_query($con,"select * from products where id = '$id' and instock >= '$qty'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
$count++;
}
if($count == 0)
{
die('We think that there is some error.  The product is not available.');
}
else
{
	if(mysqli_query($con,"insert into cart(productid,byuser,qty) values('$id','$user','$qty')"))
		{
	Header('Location: cart.php');
	}
else
{
	echo "fail". mysqli_error($con);
}
}
}
else
{
Header('Location: login.py');
}
?>