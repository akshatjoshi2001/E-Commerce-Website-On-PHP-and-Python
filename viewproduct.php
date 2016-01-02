<?php
include 'head.php';
include 'db.php';
$pid = $_REQUEST["pid"];

$result = mysqli_query($con,"select * from products where id = '$pid'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
$count++;
echo '

<div class="col-md-6">
<img src="images/'.$row["imgurl"].'" alt="'.$row["name"].'" height="35%" width="35%"><br />
</div>
<div class="col-md-6">
<h3>'.$row["name"].'</h3><br /><h4>Rs. '.$row["price"].'</h4><br />';
if($row["instock"] < 1)
{
echo "OUT OF STOCK!";
}
else
{
echo '
<a href="add2cart.php?id='.$row["id"].'" class="btn btn-success">Add To Cart</a>
</div>
';
}
echo '
<div class="description"><hr>
<h4>Product Description:</h4><hr>
'.$row["descr"].'
</div>
</div>

';
}
if ($count == 0)
{
echo "No such product";
}
?>