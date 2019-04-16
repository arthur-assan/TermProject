<?php
	include ('connect.php');

	$brands = $_POST['brands'];
	$categories = $_POST['categories'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$image = $_POST['image'];
	$description = $_POST['description'];
	$keyword = $_POST['keyword'];

	$query = "INSERT INTO products (cat_id,brand_id,Prod_Name,Prod_Price,Prod_quantity,Prod_image,Prod_description,Prod_keyword) VALUES ('$categories','$brands','$name','$price','$quantity','img/$image','$description','$keyword')";
	// echo $query;
	$result = mysqli_query($dbc,$query);
	if ($result){
		header("location:dashboard.php?status=1");
	}
	else{
		header("location:dashboard.php?status=2");
	}

?>