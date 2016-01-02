<?php

function getdata($id,$datatype)
{
	include 'db.php';
		$result = mysqli_query($con,"SELECT * FROM products where id='$id'");
		while($row  =  mysqli_fetch_array($result))
			{
				if($datatype == "name")
				{
					return $row["name"];
				}
				if($datatype == "price")
				{
					return $row["price"];
				}
				if($datatype == "descr")
				{
					return $row["descr"];
				}
				if($datatype == "imgurl")
				{
					return $row["imgurl"];
				}
				if($datatype == "instock")
				{
					return $row["instock"];
				}


			}
}
?>