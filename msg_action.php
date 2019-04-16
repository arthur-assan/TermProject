<?php
	include ('connect.php');
	
	date_default_timezone_set('Africa/Accra');
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$body = $_POST['body'];
	$time = date("Y-m-d H:i:s");
	
	

	$query = "INSERT INTO messages (Msg_Body,msg_subject,msg_sender,msg_sender_email,Msg_Time) VALUES ('$body','$subject','$name','$email','$time')";
	// echo $query;
	$result = mysqli_query($dbc,$query);
	if ($result){
		
		header("location:message.php?status=1");

	}
	else{
		header("location:message.php?status=2");
	}
 ?>