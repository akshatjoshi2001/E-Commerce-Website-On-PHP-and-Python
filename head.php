<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="http://localhost/jquery.js"></script>    
        <script src="http://localhost/yt/yt/js/bootstrap.min.js"></script>
        <link href="http://localhost/yt/yt/css/bootstrap.min.css" rel="stylesheet">

        <link href="http://localhost/scripts/jqueryui/jquery-ui.css" rel="stylesheet">
<script src="http://localhost/scripts/jqueryui/external/jquery/jquery.js"></script>
<script src="http://localhost/scripts/jqueryui/jquery-ui.js"></script>
<style>
.meter
{
background:url('meter.png');
background-repeat:no-repeat;
background-size:cover;
}
.navigation {
    list-style: none;
 
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
}
.site-wrap {
    min-width: 100%;
    min-height: 100%;
    background-color: #fff;
    position: relative;
    top: 0;
    bottom: 100%;
    left: 0;
    z-index: 1;
}
.site-wrap {
    /* ...previous styles here... */
    padding: 4em;
    
}
.nav-trigger {
    position: absolute;
    clip: rect(0, 0, 0, 0);
}
label[for="nav-trigger"] {
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 2;
}
label[for="nav-trigger"] {
    /* ... previous styles here... */
    width: 30px;
    height: 30px;
    cursor: pointer;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='30px' height='30px' viewBox='0 0 30 30' enable-background='new 0 0 30 30' xml:space='preserve'><rect width='30' height='6'/><rect y='24' width='30' height='6'/><rect y='12' width='30' height='6'/></svg>");
    background-size: contain;
}
.nav-trigger:checked + label {
    left: 215px;
}
 
.nav-trigger:checked ~ .site-wrap {
    left: 200px;
    
}
.nav-trigger + label, .site-wrap {
    transition: left 0.2s;
}
body {
    overflow-x: hidden;
}

.nav-item a {
  /* non-critical appearance styles */
  display: block;
  padding: 1em;
  background: linear-gradient(135deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%);
  color: green;
  font-size: 1.2em;
  text-decoration: none;
  transition: color 0.2s, background 0.5s;
}

.nav-item a:hover {
  color: #fff;
  background: green;
}

</style>
     </head>
<body>
<ul class="navigation">
	
	<h3>EShop.com</h3><br />
    <li class='nav-item'><a href="index.php">Home</a></li>
    <li class='nav-item'><a href="about.php">About</a></li> 
<?php if(isset($_COOKIE["eshop"]))
	{ ?>
	 <li class='nav-item'><a href="cart.php">My Cart</a></li>
	 <li class='nav-item'><a href="track.php">Track Order</a></li> 
 	 <li class='nav-item'><a href="logout.php">Logout</a></li> 
	<?php } else { echo "<li class='nav-item'><a href=\"login.py\">Login</a></li> ";} ?>
	<br /><br />



</ul>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
<div class="site-wrap">
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EShop.com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Browse products<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Jobs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More... <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cart.php">Cart</a></li>
            <li><a href="track.php">Orders</a></li>
            <li><a href="track.php">Track</a></li>
            <li class="divider"></li>
            <li><a href="#">Help</a></li>
            <li class="divider"></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="search.php">
        <div class="form-group">
		
          <input type="text" autocomplete="off" id="autocomplete" class="form-control" placeholder="Search" name="q">
<script>





$("#autocomplete").autocomplete({
source: "searchjson.php",
minLength: 2//search after two characters

});
</script>
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Start Here &rarr;</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
	include 'db.php';
	$result2 = mysqli_query($con,"select * from cats");
	while($row = mysqli_fetch_array($result2))
	{
echo '
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$row["catname"].' <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="search.php?catid='.$row["catdid"].'">See Products In This Category</a></li>
            <li><a href="cats.php?catid='.$row["catdid"].'">About This Category</a></li>
            
          </ul>
        </li>';
}
?>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="search.php">
        <div class="form-group">
		
     You'll &hearts; our services &middot; &nbsp; </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	