<?php

function packagetotal($packageid)
{
	include 'db.php';
	$total = 0;
	$res = mysqli_query($con,"select * from delivery where package='$packageid'");
	while($row2 = mysqli_fetch_array($res))
	{
		$total += $row2["totalamount"];	
	}
	return $total;
}
function getstatus($packageid)
{
	include 'db.php';
		$res = mysqli_query($con,"select * from delivery where package='$packageid'");
	$status = "";
	while($row2 = mysqli_fetch_array($res))
	{
		$status = $row2["deliverystatus"];
	}	
	return $status;

}
?>