

	
<?php

if(!isset($_COOKIE["localhost"]))
{
Header('Location: index.php');
die();
}
include 'db.php';
include 'fetchproduct.php';
include 'fetchpackage.php';
include 'head.php';
$result = mysqli_query($con,"select * from delivery where deliverystatus='Order Placed Successfully'");
if($_REQUEST["status"] == 'packed')
{

$result = mysqli_query($con,"select * from delivery where deliverystatus='Item is Packed'");
echo "For Packed Items:";
}
elseif($_REQUEST["status"] == 'shipped')
{

$result = mysqli_query($con,"select * from delivery where deliverystatus='Item is Shipped'");
echo "For Shipped Items:";
}
elseif($_REQUEST["status"] == 'delivered')
{

$result = mysqli_query($con,"select * from delivery where deliverystatus='Item is Delivered'");
echo "For Delivered Items:";
}
else
{

$result = mysqli_query($con,"select * from delivery where deliverystatus='Order Placed Successfully'");
echo "Pending Orders:";
}
$prev = 0;
$total = 0;
$exist = "f";
while($row = mysqli_fetch_array($result))
{
$exist = "t";
	if($prev == $row["package"] && $prev != 0)
	{
		
	}
	else
	{
	echo "</table><hr><h4>Placed By:".$row["byuser"]."</h4> <h4>Total: ".packagetotal($row["package"]);
echo "</h4><a class=\"btn btn-success\" href='status.php?id=".$row["package"]."'>Change Status</a>";
	echo "<a target='_blank' align=\"right\" class=\"btn btn-success\" href='invoice.php?package=".$row["package"]."'>View Invoice</a><br />";
		echo '
<table border="2">
<tr>
<th>Image</th>
<th>CustomerID</th>
<th>PackageID</th>
<th>Delivery Phone Number</th>
<th>Delivery Address</th>
<th>Product Name</th>
<th>Product Quantity</th>
<th>Total Amount [Cost of 1 X QTY]</th>
</tr>';
	}
echo "<tr><td><img src='../images/".getdata($row["productid"],"imgurl")."' height='7%' width='7%'></td><td>".$row["byuser"]."</td><td>".$row["package"]."</td><td>".$row["deliveryphone"]."</td><td>".$row["deliveryaddress"]."</td>";



				echo "<td>".getdata($row["productid"],"name")."</td><td>".$row["qty"]."<td>".$row["totalamount"]."</td></tr>";
	
	$prev = $row["package"];
	echo "";
}

if($exist == "f")
{
echo "<center>Hey! There are no Orders Here. Kindly Check In Other Sections. </center>";
}
?>