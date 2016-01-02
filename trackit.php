<?php
include 'db.php';
include 'fetchproduct.php';
include 'head.php';
$package = $_REQUEST["package"];
if(isset($_COOKIE["eshop"]))
{
	$user = $_COOKIE["eshop"];
 	$result = mysqli_query($con,"select * from delivery where byuser='$user' and package='$package' order by id desc");
	while($row = mysqli_fetch_array($result))

	{
		echo "
	<script>
	$(document).ready(function()
	{
	$('.meter').hide().fadeIn(1000);
	});
	</script>

";
		echo "<img height=\"10%\" width=\"10%\" src='images/".getdata($row["productid"],"imgurl").'\'> - <h3>'.getdata($row["productid"],"name");
		echo "<br /></h3>Order Placed&nbsp;&nbsp;&nbsp;Item Packed&nbsp;&nbsp;&nbsp;Item Shipped&nbsp;&nbsp;&nbsp;Delivered Item&nbsp;&nbsp;&nbsp;Order Completed&nbsp;&nbsp;&nbsp;<br />";
		if($row["deliverystatus"] == "Order Placed Successfully")
		{
			echo "<div class='meter'><img src='blinkon.png' height='2%' width='2%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>";
		}
		
		if($row["deliverystatus"] == "Item is Packed")
		{
			echo "<div class='meter'><img src='blinkon.png'  height='2%' width='2%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkon.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='blinkoff.png'>";
		}
		
		if($row["deliverystatus"] == "Item is Shipped")
		{
			echo "<div class='meter'><img src='blinkon.png'  height='2%' width='2%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='blinkon.png' height='2%' width='2%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  height='2%' width='2%' src='blinkon.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkoff.png'>";
		}
		
		if($row["deliverystatus"] == "Item is Delivered")
		{
			echo "<div class='meter'><img src='blinkon.png'  height='2%' width='2%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%'src='blinkon.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkon.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkon.png'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img height='2%' width='2%' src='blinkon.png'>";
		}
		echo "</div><hr />";
	}
}
else
{
}
?>