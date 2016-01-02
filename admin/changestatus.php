<?php
include 'db.php';
$id = $_REQUEST["id"];
$newstatus = $_REQUEST["status"];
if(mysqli_query($con,"update delivery  set deliverystatus='$newstatus' where package='$id'"))
{
Header('Location: status.php?id='.$id.'&msg=change%20successfull');
}
else
{
die(mysqli_error($con));
}
?>