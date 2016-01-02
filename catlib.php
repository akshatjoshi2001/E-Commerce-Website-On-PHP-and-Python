<?php
function fetchnameofcategory($catid)
{
include 'db.php';
$result3 = mysqli_query($con,"select * from cats where catdid='$catid'");
while($row = mysqli_fetch_array($result3))
{
return $row["catname"];
}
}
?>