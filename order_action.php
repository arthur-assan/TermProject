<?php
	include ('connect.php');
	include('messageAPI/message.php');
	date_default_timezone_set('Africa/Accra');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$time = date("Y-m-d H:i:s");
	$t_price = $_POST['totalprice'];

	

	$query = "INSERT INTO orders (ord_name,ord_email,ord_add,ord_contact,ord_date) VALUES ('$name','$email','$city','$phone','$time')";
	// echo $query;

	$msg = "Hello, $name from $city \n Thank you for shopping with us. \n Visit your emial $email for your delivery informations. \n $time";
	$result = mysqli_query($dbc,$query);
	if ($result){
		Message::send_message($phone,$msg);
		header("location:payment.php?status=1");
	}
	else{
		header("location:payment.php?status=2");
	}

 ?>




