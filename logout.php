<?php
setcookie("eshop",$_COOKIE["eshop"],time()-3600);
Header('Location: index.php');
?>