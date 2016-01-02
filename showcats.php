<?php
	include 'db.php';
	while($row = mysqli_fetch_array(mysqli_query($con,"select * from cats")))
	{
		echo "<li class='nav-item'><a href='search.php?catid=".$row["catid"]."'>".$row["name"]."</a></li>";
	}
	?>