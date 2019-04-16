<?php session_start();
$fname = isset($_SESSION['FirstName'])? $_SESSION['FirstName']: 'login'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>artech computers | signup</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

        .error {color: #FF0000;}
        
        footer.page-footer {
            background-color: #3b3b3f;
            margin-top: 2rem;
         
        }



/*styling for signup page*/
html,
body,
header,
.view {
    height: 105%;
}
/* Navigation*/

.navbar {
    background-color: transparent;
}

.top-nav-collapse {
    background-color: #3F729B;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #3F729B;
    }
}
/*Intro*/

.view {
    background: url("img/Phones.png")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

@media (max-width: 768px) {
    .full-bg-img,
    .view {
        height: auto;
        position: relative;
    }
}

.description {
    padding-top: 25%;
    padding-bottom: 3rem;
    color: #fff
}

@media (max-width: 992px) {
    .description {
        padding-top: 7rem;
        text-align: center;
    }
}

    </style>

</head>

<body >

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
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="adminlogin.php" target="_blank"><i class="fa fa-dashboard" style="color: #404040" ></i> &nbsp;Dashboard</a>

                          <li><a  href="cart.php"><div style="padding: 10px 15px; color:#FFF;"><i class=" fa fa-shopping-cart" style="color:#404040;"></i> &nbsp;Cart</div></a></li>

                    </div>
                </li>
             </ul>
        </div>
    </div>
</nav>
<!--/.Navbar-->

   
        <!--/.Main layout-->

    </main>
    
        
        
<!--Navigation & Intro-->
<header>

   
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <div class="container">
                <div class="row" id="home">

                    <!--First column-->
                    <div class="col-lg-6">
                        <div class="description">
                            <h2 class="h2-responsive wow fadeInLeft">Sign up right now! </h2>
                            <hr class="hr-dark wow fadeInLeft">
                            <p class="wow fadeInLeft" data-wow-delay="0.4s">Sign up to be able to purchase your preferred devices at affordable prices with no hustling</p>
                            <br>
                            <p  class="wow fadeInLeft" data-wow-delay="0.4s" >Already a member? </p>
                            <a href="login.php" class="btn btn-outline-white btn-md wow fadeInLeft" data-wow-delay="0.7s">Login</a>
                        </div>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-lg-6">
                    
                        <!--Form-->
                        <form action="signup_action.php" method="POST">
                        <div class="card wow fadeInRight">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center">
                                    <h3><i class="fa fa-user"></i> Create New Customer Account</h3>
                                    <hr>
                                </div>

                                <!--Body-->
                                
                                <div class="md-form">
                                    <input type="text" id="fname" name="fname" class="form-control" required>
                                    <label for="fname">First name</label>
                                    
                                </div>

                                <div class="md-form">
                                    <input type="text" id="lname"  name="lname" class="form-control" required>
                                    <label for="lname">Last name</label>
                                     
                                </div>
                                

                                <label>Gender</label>
                                <div class="row" style="padding:10px;">
                                 <fieldset class="form-group col-md-6">
                                    <input name="gender" type="radio" id="male" value="male" required>
                                    <label for="male">Male</label>
                                     
                                </fieldset>

                                <fieldset class="form-group col-md-6">
                                    <input name="gender" type="radio"  id="female" value="female" required>
                                    <label for="female">Female</label>
                                </fieldset>
                                </div>
                                

                                <div class="md-form">
                                    <input type="text" id="dob" name="dob" class="form-control datepicker" required>
                                    <label for="dob">Date of Birth</label>
                                </div>


                                <div class="md-form">
                                    <input type="email" id="email"  name="email" class="form-control" required>
                                    <label for="email">E-mail</label>
                                     
                                </div>

                                <div class="md-form">
                                    <input type="password" id="pword" name="pword" class="form-control">
                                    <label for="pword">Password</label>
                                     
                                </div>

                                <div class="md-form">
                                    <input type="text" id="phone" name="phone" class="form-control" required maxlength="13" value="+233">
                                    <label for="phone">Phone</label>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <fieldset class="form-group">
                                        <input type="checkbox" id="agree" name="agree" required>
                                        <label for="agree"><a href="Privacy.html">I agree to terms and conditons</a></label>
                                         
                                    </fieldset>
                                    <button>Sign up</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!--/.Form-->
                    </div>
                    <!--/Second column-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->

</header>
<!--/Navigation & Intro-->
<<?php 
    include('footer.php');
 ?>