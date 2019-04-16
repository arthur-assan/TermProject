 <?php
    include ("s-navbar.php");

    $status = isset($_GET['status'])? $_GET['status'] : 3;
    if ($status == 1) {
        $msg = "<div class='alert alert-success alert-dismissable' >
        <strong>Your message was sent</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> </div>";
    }
    else if ($status == 2) {
        $msg = "<div class='alert alert-success alert-dismissable' >
        <strong>your message was not sent</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> </div>";
    }
    else{
        $msg = "";
    }
    echo $msg;
?>

 <main id="mainContainer">
       
        <!-- Main Container -->
        <div class="container">

            <!-- Contact Form -->
            <section class="section">
               
                <div class="container">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="section-heading text-center">Contact Us</h1>
                            <div class="section-description">
                                Please contact us incase you need anything.
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                       
                        <!-- First column -->
                        <div class="col-md-8 mb-r">
                           
                            <form action="msg_action.php" method="POST" >
                            <input type="hidden" name="totalprice" value="<?php echo $_POST['totalprice']; ?>">
                               
                                <!-- First row -->
                                <div class="row">
                                   
                                    <!-- First column -->
                                    <div class="col-md-6">
                                       
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form41" class="form-control" required name="name">
                                                <label for="form41" class="">Your name</label>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <!-- Second column -->
                                    <div class="col-md-6">
                                       
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form52" class="form-control" required name="email">
                                                <label for="form52" class="">Your email</label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <!-- /.First row -->

                                <!-- Second row -->
                                <div class="row">
                                   
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <input type="text" id="form51" class="form-control" name="subject">
                                            <label for="form51" class="">Subject</label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- /.Second row -->

                                <!-- Third row -->
                                <div class="row">
                                   
                                    <!-- First column -->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="form76" class="md-textarea" name="body" required></textarea>
                                            <label for="form76">Your message</label>
                                        </div>

                                    </div>
                                    
                                </div>
                                <!-- /.Third row -->
                                <div class="text-center">
                                 <button type="submit" class=" btn btn-success">send</button> 
                                 </div>
                            </form>

                           
                            
                        </div>
                        <!-- /.First column -->

                        <!-- Second column -->
                        <div class="col-md-4">
                           
                            <ul class="contact-icons">
                                <li><i class="fa fa-map-marker fa-2x"></i>
                                    <p>Accra,Ug Legon, Ghana</p>
                                </li>

                                <li><i class="fa fa-phone fa-2x"></i>
                                    <p>+ 233 503 564 637</p>
                                </li>

                                <li><i class="fa fa-envelope fa-2x"></i>
                                    <p>arthur.assan@gmail.com</p>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- /.Second column -->
                        
                    </div>
                    
                </div>
                
            </section>
            <!-- /.Contact Form -->

        </div>
        <!-- /.Main Container -->
        
    </main>
    <?php
    include ("footer.php");
?>