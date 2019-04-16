<?php
    include ("navbar.php");

    $prod_id = $_GET['Prod_ID'];

    $query = "select * from products where Prod_ID='$prod_id'";
    $result = mysqli_query($dbc,$query);
    while ($row_pro = mysqli_fetch_array($result)) {
        $pro_id = $row_pro['Prod_ID'];
        $pro_name = $row_pro['Prod_Name'];
        $pro_price = $row_pro['Prod_Price'];
        $pro_image = $row_pro['Prod_image'];
        $pro_desc = $row_pro['Prod_description'];
   
}
 // echo $query;

 ?>
    <main id="mainContainer">
        <!-- Main Container -->
        <div class="container">
            <section id="productDetails">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="<?php echo $pro_image;?>" alt="">
                    </div>

                <div class="col-lg-7">
                <h2 class="h2-responsive center-on-small-only product-name"><strong><?php echo $pro_name  ;?></strong></h2>

                <h4 class="h4-responsive center-on-small-only "><span class="green-text"><strong>GH&#8373;<?php echo $pro_price; ?></strong></span></h4>
               
                <hr>

                 <?php echo $pro_desc; ?>

                 <hr>
                  <div class="row">   
                  <div class="col-md-6">
                  <a href="index.php">Go back</a> 
                  </div>

                    <!-- Add to Cart -->
                        
                            <div class="col-md-6 center-on-small-only text-md-right">
                                <button type="button" class=" pull-right btn btn-outline-info btn-rounded waves-effect btn-sm" ><i class="fa fa-cart-plus" aria-hidden="true"><a href="products.php?add_cart=<?php echo $pro_id;?>"> </i> Add to cart</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.Add to Cart -->

                </div>
            </div>
        </section>
</div>

<?php
    include ("footer.php");
?>