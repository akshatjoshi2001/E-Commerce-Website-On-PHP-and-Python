<?php
include 'db.php';

$term = $_REQUEST["term"];
$result = mysqli_query($con,"select name from products where name like '%$term%' or descr like '%$term%'");

while($row = mysqli_fetch_array($result))
{
$record[]["value"] = $row["name"];
}

echo json_encode($record,JSON_FORCE_OBJECT);  

?>