<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://theonlinetimes.esy.es/normalize.css">
        <link rel="stylesheet" href="http://theonlinetimes.esy.es/skeleton.css">
        <link href="style.css" rel="stylesheet">
	<title>Administrator</title>
     </head>
<body>
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
        <li <?php if($_GET["status"] == "") { echo 'class="active"'; } ?>> <a href="dashboard.php">Pending Orders<span class="sr-only">(current)</span></a></li>
	<li <?php if($_GET["status"] == "packed") { echo 'class="active"'; } ?>> <a href="dashboard.php?status=packed">Packed Items<span class="sr-only">(current)</span></a></li>
        <li <?php if($_GET["status"] == "shipped") { echo 'class="active"'; } ?>> <a href="dashboard.php?status=shipped">Shipped Items<span class="sr-only">(current)</span></a></li>
        
	<li><a href="#">Check Jobs @ EShop.com</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More... <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="?status=delivered">Delivered Products</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="#">Products & Stock</a></li>
            <li class="divider"></li>
            <li><a href="#">Help</a></li>
            <li class="divider"></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="search.php">
        <div class="form-group">
		
          <input type="text" class="form-control" placeholder="Search" name="q">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>