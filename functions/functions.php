<?php

include 'connect.php';

//geting the categories

function getCats(){
	global $dbc;

	$get_cats = "select * from categories";
	$run_cats = mysqli_query($dbc,$get_cats);
	while ($row_cats=mysqli_fetch_array($run_cats)) {
		$cat_id = $row_cats['Cat_ID'];
		$cat_name = $row_cats['Cat_Name'];

		echo "<li><a href ='products.php'>$cat_name</a></li>";
	}

	
}

function getBrands(){
	global $dbc;
	
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($dbc,$get_brands);
	while ($row_brands=mysqli_fetch_array($run_brands)) {
		$brand_id = $row_brands['brand_id'];
		$brand_name = $row_brands['brand_name'];

		echo "<li><a href ='products.php'>$brand_name</a></li>";
	}

}

function getPro(){
	global $dbc;

	$get_pro = "select * from products order by RAND() LIMIT 0,6";
	$run_pro = mysqli_query($dbc,$get_pro);
	while ($row_pro = mysqli_fetch_array($run_pro)) {
		$pro_id = $row_pro['Prod_ID'];
		$pro_name = $row_pro['Prod_Name'];
		$pro_price = $row_pro['Prod_Price'];
		$pro_image = $row_pro['Prod_image'];

		
		 
	}
}
// Getting the user IP Address
function getIP(){
	$ip = $_SERVER['REMOTE_ADDR'];
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARD_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARD_FOR'];
	}
	return $ip;
}

// creating the shopping cart.
function cart (){
	global $dbc;
	$ip = getIP();

	if (isset($_GET['add_cart'])) {
		$pro_id = $_GET ['add_cart'];
		$check_pro = "select * from cart where ip_add = '$ip' AND prod_id = '$pro_id'";

		$run_check = mysqli_query($dbc,$check_pro);

		if (mysqli_num_rows($run_check)>0) {
			echo "";
		}
		else {
			$insert_pro = "insert into cart (prod_id,ip_add,qty) values ('$pro_id','$ip',1)";
			$run_pro = mysqli_query($dbc,$insert_pro);
			// echo $run_pro;
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
}
	

// getting the total added items
function total_items (){
	if (isset($_GET['add_cart'])) {
		global $dbc;

		$ip = getIP();

		$get_items = "select * from cart where ip_add='$ip'";

		$run_items = mysqli_query($dbc,$get_items);

		$count_items = mysqli_num_rows($run_items);
	}
	else{
		global $dbc;

		$ip = getIP();

		$get_items = "select * from cart where ip_add='$ip'";

		$run_items = mysqli_query($dbc,$get_items);

		$count_items = mysqli_num_rows($run_items);
	}
	echo $count_items;
}


?>