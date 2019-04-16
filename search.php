<?php
	include ('connect.php');

	$search = $_GET['search'];
	

	$query = "SELECT * FROM products where Prod_keyword like'%$search%'";
	//echo $query;
	$result = mysqli_query($dbc,$query);

	if (isset($result)) {
		include'searchsus.php';
	}
	else{
		echo "Product not available";
	}

 ?>