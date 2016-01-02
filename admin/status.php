<?php
include 'fetchpackage.php';
include 'head.php';
$id = $_GET["id"];
echo '
<h1>Change Status Of Package</h1>
';
echo "current status: ". getstatus($id);
echo '
<form action="changestatus.php" method="post">
<select  name="status">
<option  value="Item is Packed">Item Packed</option>
<option  value="Item is Shipped">Item is Shipped</option>
<option value="Item is Delivered">Item is Delivered</option>

</select>
<input type="hidden" name="id" value="'.$id.'">
<button type="submit" class="btn btn-success">Change Status</button>
</form>

';
?>