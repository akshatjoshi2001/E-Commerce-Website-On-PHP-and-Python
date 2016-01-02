<?php
include 'fetchproduct.php';
include 'head.php';
if(isset($_COOKIE["eshop"]))
{	echo "<hr>";
	include 'db.php';
	$user = $_COOKIE["eshop"];
	$result  = mysqli_query($con,"SELECT * FROM cart where byuser='$user'");
	$total = 0;
	$conf = "f";
	while($row = mysqli_fetch_array($result))
	{
	$conf="t";
		echo "<h2>".getdata($row["productid"],"name")."</h2><br />";
		echo "<h5 style='color:grey'><br /> &nbsp; X ".$row["qty"]."</h5>";
		echo "<h4>Price  ".getdata($row["productid"],"price")."</h4>";
		$totpr = getdata($row["productid"],"price") * $row["qty"];
		$total = $total + $totpr;
		echo "<hr>";
	}
	if($conf=="t")
	{
	echo "<h1>Total: ".$total."</h1>";
	
	echo "<a class='btn btn-success' href='checkoutme.php'>Check Out</button>";
	}
	else
	{
	echo "Nothing In Cart. ";
	}

}
else
{
	Header('Location: login.py');
}
?>