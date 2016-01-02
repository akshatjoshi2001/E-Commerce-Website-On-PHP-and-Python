<?php
include 'fetchproduct.php';

if(isset($_COOKIE["eshop"]))
{	
	include 'db.php';
	$user = $_COOKIE["eshop"];
	$result  = mysqli_query($con,"SELECT * FROM cart where byuser='$user'");
	$packageid = rand(100000000,999999999999);
	while($row = mysqli_fetch_array($result))
	{
		$user = $_COOKIE["eshop"];
		$delname = $_REQUEST["delname"];
		$delline2 = $_REQUEST["delline2"];
		$delphone = $_REQUEST["delphone"];
		$total = getdata($row["productid"],"price") * $row["qty"];
		$pid = $row["productid"];
		$cartid = $row["id"];
		$qty = $row["qty"];
		$changestock = getdata($row["productid"],"instock") - $row["qty"];
		$deliveryaddress = $_REQUEST["deliveryaddress"];
		mysqli_query($con,"insert into delivery(deliveryaddress,productid,byuser,deliverystatus,totalamount,qty,package,deliveryname,deliveryline2,deliveryphone) values('$deliveryaddress','$pid','$user','Order Placed Successfully','$total','$qty','$packageid','$delname','$delline2','$delphone')");
		mysqli_query($con,"delete from cart where id='$cartid'");
		settype($changestock, "int");
		if(mysqli_query($con,"update products set instock='$changestock' where id='$pid'"))
		{
			ECHO '';

		}
			else
		{
			die(mysqli_error($con));
		}	
	}
	Header('Location: track.php');

}
else
{
	Header('Location: login.py');
}
?>