<?php
$status = isset($_GET['status'])? $_GET['status']:2 ;
if($status ==1){
header("location:admin_main.php");
}
elseif($status ==2){
       $msg = "<div class='alert alert-danger alert-dismissable' >
        <strong>Authorized Persons Only</strong>  <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a></div>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Login</title>

     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>artech computers</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

</head>

<body>



<div class="row">
<div class="container">
            <div class="col-md-8 mx-auto">    
            <div class="card " style="margin-top: 50px;">
<form role="form" method="POST" action="Admin_login_action.php">
                          
<!--Form with header-->
    <div class="card-block">

        <!--Header-->
        <div class="form-header  blue darken-6">
            <h3><i class="fa fa-lock"></i> Login:</h3>
        </div>
        <?php echo $msg ?>
        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" name="email" placeholder="Email" class="form-control">
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" name="pword" placeholder="Password" class="form-control">
        </div>

        <div class="text-center">
             <input type="submit" class="btn btn-info " value="Sign In">
        </div>

    </div>
<!--/Form with header-->
                </form>
            </div>
        </div>
               
     </div>
</div> 
<!-- container -->

</body>
 


    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <script>
    new WOW().init();
// Custom scrollbar init
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);
    </script>

</html>
