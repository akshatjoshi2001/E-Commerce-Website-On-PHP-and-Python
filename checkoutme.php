<?php
include 'head.php';

?></form>
<form action="cartout.php" method="post">
<h3>Check Out All Orders: (Using Cash On Delivery)</h3>
<b>This order is for(name) : </b> <input type="text" name="delname" class="form-control"><br />
<b>Address : </b> <textarea name="deliveryaddress" class="form-control"></textarea><br />

<b>Pincode: </b> <input type="text" name="delline2" class="form-control"><br /><b>Phone: </b> <input type="text" name="delphone" class="form-control"><br /><button type="submit" class="btn btn-primary">CHECK OUT</button>

</form></div></body></html>