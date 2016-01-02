<?php

include 'head.php';
if($_REQUEST["catid"] == "")
{
include 'db.php';
$query = $_REQUEST["q"];
echo '<h2>Search results for "'.$query.'"</h2>';
$result = mysqli_query($con,"select * from products where name like '%$query%' or descr like'%$query%'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
$count++;
echo '

<div class="col-md-4 thumbnail">
<a href="viewproduct.php?pid='.$row["id"].'">
<img src="images/'.$row["imgurl"].'" alt="'.$row["name"].'" height="30%" width="30%"><br />
<h5>'.$row["name"].'</h5></a><br />Rs. '.$row["price"];
echo '<h5>'.$row["descr"].'</h5>';
if($row["instock"] < 1)
{
echo "   <h2 style='color:red;'>OUT OF STOCK!</h2></div>";
}
else
{
echo '
<a href="add2cart.php?id='.$row["id"].'" class="btn btn-success">Add To Cart</a>
</div>
';
}
}
if ($count == 0)
{
echo 'No results found!';
}
}
else
{
include 'db.php';
include 'catlib.php';
$catid = $_REQUEST["catid"];
echo '<h2>Category: "'.fetchnameofcategory($catid).'"</h2>';
$result = mysqli_query($con,"select * from products where catid='$catid'");
$count = 0;
while($row = mysqli_fetch_array($result))
{
$count++;
echo '

<div class="col-md-4 thumbnail">
<a href="viewproduct.php?pid='.$row["id"].'">
<img src="images/'.$row["imgurl"].'" alt="'.$row["name"].'" height="30%" width="30%"><br />
<h5>'.$row["name"].'</h5></a><br />Rs. '.$row["price"];
echo '<h5>'.$row["descr"].'</h5>';
if($row["instock"] < 1)
{
echo "   <h2 style='color:red;'>OUT OF STOCK!</h2></div>";
}
else
{
echo '
<a href="add2cart.php?id='.$row["id"].'" class="btn btn-success">Add To Cart</a>
</div>
';
}
}
if ($count == 0)
{
echo 'No results found!';
}
}
?>