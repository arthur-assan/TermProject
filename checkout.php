<?php session_start();
 echo $_POST['totalprice'];
	if (isset($_SESSION['FirstName'])) {
		header("Location:payment.php?status=0");
	}
	else{
		header("location:cart.php?status=1");
	}
?>

