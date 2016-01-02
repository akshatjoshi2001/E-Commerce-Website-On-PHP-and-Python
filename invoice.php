<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://theonlinetimes.esy.es/normalize.css">
        <link rel="stylesheet" href="http://theonlinetimes.esy.es/skeleton.css">
        <link href="style.css" rel="stylesheet">
	<title>INVOICE</title>
<script>
function printit()
{

$('#printbtn').hide();
print();
}
</script>
     </head>
<body>
<button id="printbtn" onclick="printit()" class="btn btn-success">Print</button>
<center><h1>EShop.com</h1><br />Eshop Helpline: +91 9923069360</center><br /><br />
<hr><center><h5>I N V O I C E | <?php echo $_REQUEST["package"] ?></h5><br />**********************************************************
<br />
<?php
include 'db.php';
$package = $_GET["package"];
$result = mysqli_query($con,"SELECT * FROM delivery where package='$package' limit  1");
while($row = mysqli_fetch_array($result))
{
echo $row["deliveryname"].",<br /> <b>Phone:</b>".$row["deliveryphone"]." <b>To Be Delivered @ :</b> ";
echo $row["deliveryaddress"]."<br />";
echo $row["deliveryline2"];
}
?>
<?php

include 'fetchproduct.php';
$package = $_GET["package"];
$total = 0;
echo '
<table border="2">
<tr>
<th>Product Name</th>
<th>Product Quantity</th>
<th>Total Amount [Cost of 1 X QTY]</th>
</tr>';

$result = mysqli_query($con,"SELECT * FROM delivery where package='$package'");
while($row = mysqli_fetch_array($result))
	{ 	$total += $row["totalamount"];
				echo "<tr><td>".getdata($row["productid"],"name")."</td><td>".$row["qty"]."<td>".$row["totalamount"]."</td>";
	}
echo "<br /><br /><br /><br /><h1>TOTAL:".$total."</h1>";
?>
</table>
<br />

<hr />




