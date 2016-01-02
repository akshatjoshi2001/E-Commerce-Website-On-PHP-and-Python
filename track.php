<?php
include 'db.php';
include 'fetchproduct.php';
include 'head.php';
if(isset($_COOKIE["eshop"]))
{
	$user = $_COOKIE["eshop"];
 	$result = mysqli_query($con,"select * from delivery where byuser='$user' order by id desc");
	while($row = mysqli_fetch_array($result))
	{
		echo "<hr>";
		echo "<img height=\"10%\" width=\"10%\" src='images/".getdata($row["productid"],"imgurl").'\'> - <h3>'.getdata($row["productid"],"name").'</h3><h4>X '.$row["qty"].' for Rs.'.$row["totalamount"]."-".$row["deliverystatus"]."</h4>";
		echo "<a href='invoice.php?package=".$row["package"]."' class=\"btn btn-success\">View Invoice</a>";
		echo "<a href='trackit.php?package=".$row["package"]."' class=\"btn btn-success\">Track My Package</a>";

	}
}
else
{
}
?>