<?php
$status = isset($_GET['status'])? $_GET['status'] : 3;
if($status ==1){
$msg = "<div class='alert alert-success alert-dismissable' >
        <strong>Successfully logged in.</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> 
            <script>  window.location='index.php'; </script>
        </div>";
}
elseif($status ==3){
       $msg =  "";
}
elseif($status ==2){
       $msg =  "<div class='alert alert-danger alert-dismissable' >
        <strong>Email or Password not correct!.</strong>  <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a></div>";
}

?>

        <div class="container " style="text-align: center;"><?php echo $msg ?></div>
<!--Naked Form-->
    <div class="row">
    <div class="container" >
    <div class="col-md-8 mx-auto">
<div class="card-block ">

    <!--Header-->
    <div class="text-center">
        <h3><i class="fa fa-lock"></i> Login:</h3>
        <hr class="mt-2 mb-2">
    </div>

    <!--Body-->
    <form action="login_action.php" method="POST">
    <div class="md-form">
        <i class="fa fa-envelope prefix"></i>
        <input type="text" id="form2" class="form-control" name="email" required>
        <label for="form2">Your email</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix"></i>
        <input type="password" id="form4" class="form-control" name="pword" required>
        <label for="form4">Your password</label>
    </div>

    <div class="text-center">
        <button class="btn btn-deep-purple" name="login">Login</button>
    </div>

</div>
</form>


<!--Footer-->
<div class="modal-footer">
    <div class="options">
        <p>Not a member? <a href="signup.php">Sign Up</a></p>
    </div>
</div>

</div>
</div>
</div>
<!--Naked Form-->
