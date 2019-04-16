   <?php
    
    $get_pro = "select * from products order by Prod_ID desc LIMIT 0,3";
    $get_pro2 = "select * from products ORDER BY RAND() LIMIT 6";
    $run_pro = mysqli_query($dbc,$get_pro);
    $run_pro2 = mysqli_query($dbc,$get_pro2);
        
   ?>

    <div class="container"> <!-- container for the entire body without the nav and the footer-->
    </header>
    <main>
    <div class="container">
    <div class="row">
  
  <div class="col-md-3">     

    <div class="card">
        <div class="card-header" role="tab" id="headingOne" style="background-color: #0099FF;">
             <h5 class="mb-0" style="color: white;">Categories</h5>
        </div>
    </div>

    <ul>
        <?php echo getCats(); ?>
    </ul>

     <div class="card">
        <div class="card-header" role="tab" id="headingOne" style="background-color: #0099FF;">
             <h5 class="mb-0" style="color: white;">Brands</h5>
        </div>
    </div>

    <ul>
        <?php echo getBrands(); ?>
    </ul>

   

  </div>

             

<!-- carousel  -->
<div class="col-md-9">
<div id="carousel-example-2" class="carousel slide carousel-fade " data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active">
            <div class="view hm-black-light">
                <img src="img/sl1.png"  class="img-fluid" alt="First slide">
            </div>
            <div class="carousel-caption">
                <h5 class="h3-responsive" </h5>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-strong">
                <img src="img/sl4.png" class="img-fluid" alt="Second slide">
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-slight">
                <img src="img/sl3.png" class="img-fluid"  alt="Third slide">
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive"></h3>
            </div>

        </div>

    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper--> 

<br><br>

<?php cart(); ?>



 <h2 style="margin:35px 0; padding: 5px; color: #FFF; font:20px trebuchet MS; text-align: right; background-color: #0099FF; ">LATEST PRODUCTS</h2>            
            

        <div class="carousel-item active">
        <?php while ($row_pro = mysqli_fetch_assoc($run_pro)) :?>

            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" src="<?php echo $row_pro['Prod_image'];?>" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $row_pro['Prod_Name'];?></h4>
                        <hr>
                         
                        <p class="card-text text-center red-text">GH&#8373;<?php echo $row_pro['Prod_Price'];?></p>
                    </div>
                </div>
            
            </div>
            <?php endwhile; ?>

    </div>
    </div>
<hr>


 

<div class="row">
<div class="container">

            <h2 style="margin:35px 0; padding: 5px; color: #FFF; font:20px trebuchet MS; text-align: right; background-color: #0099FF; ">TRENDING PRODUCTS</h2>

        <div class="card-group wow fadeInUp">
         <?php while ($row_pro2 = mysqli_fetch_assoc($run_pro2)) :?>
    <div class="col-md-4" style="margin-top: 10px;">
    <div class="card ">
    <div  class="view overlay hm-zoom hm-black-slight">
        <img class="img-fluid" src="<?php echo $row_pro2['Prod_image'];?>" alt="Card image cap">
          <div class="mask flex-center">
                 <p><h4 class="card-title black-text" style="background-color: #ff8000;padding: 5px;"><a href="product_view.php?Prod_ID=<?php echo $row_pro2['Prod_ID'];?>">View</a><br></h4></p>
        </div>
    </div>
        <div class="card-block ">
                 <h4 class="card-title text-center"><?php echo $row_pro2['Prod_Name'];?></h4>
                   <hr>
            <p class="class="card-text"><span style="color: red;">GH&#8373;<?php echo $row_pro2['Prod_Price'];?></span>  <a href="index.php?add_cart=<?php echo $row_pro2['Prod_ID'];?>"><button type="button" class=" pull-right btn btn-outline-info btn-rounded waves-effect btn-sm" ><i class="fa fa-shopping-cart"></i>&nbsp; Add to Cart</button></a></p>
        </div>
    </div>
    </div>
    <br>
    <?php endwhile; ?>

</div>
</div>
</div>
        <!--/.Main layout-->
    </main>