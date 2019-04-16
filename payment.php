<?php
	include ('navbar.php');

	$cond = $_SESSION['FirstName'];
	$query = "select * from users where FirstName = '$cond'";
	//echo $query;
	$result = mysqli_query($dbc,$query);

	$row = mysqli_fetch_assoc($result);

	$status = isset($_GET['status'])? $_GET['status'] : 3;
if($status ==1){
$msg = "<div class='alert alert-success text-center' >
			<strong '>Thank You for the purchase <br> An SMS confirmation has been sent to your Phone.</strong>
        	</div>
		";
}
else if ($status == 2) {

    $msg = "<div class='alert alert-danger alert-dismissable' >
        	<strong>sorry purchase incomplete/unsuccessful </strong>
        	<a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a></div>
        	";
}
else{
	$msg = "";
}
	
?>
<div class="container">

<?php echo $msg; ?>

<div class="row">
<div class="col-md-6">
<h4 class="text-center">Pay by Bank Deposit/Transfer</h4>

<ul class="list-group">
	<li class="list-group-item">COMPLETE YOUR ORDER FIRST AND THEN MAKE A BANK DEPOSIT/TRANSFER TO:</li>

	<li class="list-group-item">Account Name: <strong>Artechinc Ghana</strong></li>
	

	<li class="list-group-item">Account Number:<strong>02600322581142310</strong></li>
	

	<li class="list-group-item">Bank: <strong>FEDELITY</strong></li>
	

	<li class="list-group-item">COPY YOUR ORDER NUMBER</li>
	<li class="list-group-item red-text">Order will be cancelled if the amount is not recieved in the artechinc account within two business days.</li>
</ul>

</div>

<div class="col-md-6 pull-right">


 <form action="order_action.php" method="POST">
  <input type="hidden" name="totalprice" value="<?php echo $_POST['totalprice']; ?>">
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center">
                                    <h3><i class="fa fa-list-ol"></i> &nbsp;Order Form</h3>
                                    <hr>
                                </div>

                                <!--Body-->
                                
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['FirstName']." ". $row['LastName'];?>" required>
                                    <label for="name">Name</label>
                                    
                                </div>

                                <div class="md-form">
                                    <input type="text" id="email"  name="email" class="form-control" value="<?php echo $row['Email']; ?>" required>
                                    <label for="email">Email</label>
                                     
                                </div>
                                
                                
								
                                <div class="md-form">
                                    <input type="text" id="city" name="city" class="form-control datepicker" required>
                                    <label for="city">city</label>
                                </div>

                                
                                <div class="md-form">
                                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row['Phone']; ?>" required>
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <fieldset class="form-group">
                                        <input type="checkbox" id="agree" name="agree" required>
                                        <label for="agree"><a href="Privacy.html">I agree to terms and conditons</a></label>
                                         
                                    </fieldset>
                                    <button>Submit Order</button>
                                </div>
                            </div>
                        </div>
                        </form>



</div>
<!-- the column  -->

</div>
<!-- the row -->
</div>
<!-- the container -->

<?php 
	include ('footer.php');
 ?>