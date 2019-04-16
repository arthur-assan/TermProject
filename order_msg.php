<?php
	include 'messageAPI/message.php';
	$status = Message::send_message('$phone','Your Purcahse was successful.$name from $city $email $time');
	if ($status) {
		echo "message sent";
	}else{
		echo 'message sending failed';
	}
?>
