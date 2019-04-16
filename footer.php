    <footer class="page-footer center-on-small-only   yellow darken-4">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title" id="about_us" style="text-decoration: underline;color: #404040" >ABOUT ARTECH COMPUTERS</h5>
                    <p>We provide the you with the best computers. From laptops to smartphones and their accessories.We provide all sorts of devices for every packets.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-3 col-md-6 offset-lg-1">
                    <h5 class="title" id="Contact_us"  style="text-decoration: underline;color: #404040">Contact Us</h5>
                        <div ><a href="http://arthur.assan@gmail.com"><i i class="fa fa-envelope" style="color: #404040;padding: 5px;"></i> E-mail</a></div>
                        <div><a href="#!"><i class="fa fa-phone" style="color: #404040;padding: 5px;"></i>+233 50 356 4637</a></div>
                        <div  style="float: left; padding: 7px; ><a href="#!"><img src="img/facebook.png"></a></div>
                        <div  style="float: left; padding: 7px; ><a href="#!"><img src="img/linkedin.png"></a></div>
                        <div  style="float: left; padding: 7px;><a href="#!"><img src="img/twitter.png"></a></div>

                    
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title"  style="text-decoration: underline;color: #404040">Privacy</h5>
                    <ul>
                        <li><a href="Privacy.php">Terms & Condition</a></li>
                        <li><a href="#!">FAQ</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

            <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="http://www.artechinc.com"> <span style="color: #101010">artechinc.com</span> </a>

            </div>
        </div>
  
    <!-- SCRIPTS -->

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

    function log(){
var username=(document.getElementById("username").value);
var password=(document.getElementById("password").value);
        var noa=1;
    if(username=="assan" && password=="assan."){
        alert("Login Successful");
        window.location="dashboard.php";
        
    }
        else{
            noa--;
            alert("Incorrect Details");
            alert("Refresh Page");
        }
    if(noa==0){
        
        document.getElementById("password").disabled=true;
        document.getElementById("username").disabled=true;
        
    }
 
    }
    
    </script>

</body>

</html>