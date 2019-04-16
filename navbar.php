<?php session_start();
$fname = isset($_SESSION['FirstName'])? $_SESSION['FirstName']: 'login'; 
include 'functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

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
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
        
        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }
         .navbar {
            background-color: #3b3b3f;
        }
        
        footer.page-footer {
            background-color: #3b3b3f;
            margin-top: 2rem;
        }

    </style>

</head>

<body>


 <header>

<!--Navbar-->

<nav class="navbar navbar-toggleable-md navbar navbar-dark   yellow darken-4">
    
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapseEx12" aria-controls="collapseEx2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" style="padding: 4px 60px 4px 0px;"><div id="logo"><span style="color: #101010;"><img src="img/logo.png">artechcomputers</span><span style="color: #0099FF;">.com</span></div></a>
        <div class="collapse navbar-collapse" id="collapseEx12">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active" >
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link " href="Products.php">Products</a>    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact_us">Contact Us</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="#about_us">About Us</a>
                </li>
            </ul>

         
            <ul class="nav navbar-nav navbar-right">
                 <li><a  href="message.php"><div style="padding: 10px 15px; color:#FFF;"><i class=" fa fa-envelope" style="color:#404040;"></i> &nbsp;Contact</div></a></li>

               <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" style="color: #404040" ></i>&nbsp;Account</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="login.php"><div id="login"><i class="fa fa-sign-in" style="color: #404040" ></i> &nbsp;<?php echo $fname; ?></div></a>
                        <div class="dropdown-item">
                              <?php if (isset($_SESSION['FirstName'])) {
                                 ?>
                               <a  href="logout.php"> <div id="login"><i class="fa fa-sign-out" style="color: #404040" ></i> &nbsp;Sign out</div></a>
                                <?php }?>
                         </div>
                        

                          <li><a  href="cart.php"><div style="padding: 10px 15px; color:#FFF;"><i class=" fa fa-shopping-cart" style="color:#404040;"></i> &nbsp;Cart <?php total_items(); ?></div></a></li>

                    </div>
                </li>
             </ul>
        </div>
    </div>
</nav>
<div class="container">
    <form action="search.php" method="get">
          <div class="container md-form" >
          <i class="fa fa-search prefix"></i>
          <input class="form-control" type="search" placeholder="search Products" name="search">
          </div>
        </div>
    </form>


<!--/.Navbar-->