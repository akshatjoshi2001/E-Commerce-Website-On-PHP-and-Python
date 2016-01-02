<?php
include 'head.php';
include 'db.php';
$pid = $_REQUEST["id"];

$result = mysqli_query($con,"select * from products where id = '$pid' and instock > 0");
$count = 0;
while($row = mysqli_fetch_array($result))
{
$count++;
echo '
Kindly enter the quantity of the product you want from the option box.
<hr />
<form action="add2cartpr.php" method="post">
<input type="hidden" name="id" value="'.$row["id"].'">
<img src="images/'.$row["imgurl"].'" alt="'.$row["name"].'" height="10%" width="10%">
 <select name="qty">
';
for($i=1;$i<=$row["instock"];$i++)
{
echo ' 
<option value="'.$i.'">'.$i.'</option>
';
}

echo '
</select>
<h4>'.$row["name"].'</h4><br /><h5>Rs. '.$row["price"].'</h5><br />
<hr>
<button type="submit" class="btn btn-success" style="padding:10px;font-size:20px;">Add To Cart</a>
</form><br /><br />
</div>

';
}
if ($count == 0)
{
echo "No such product";
}
?>