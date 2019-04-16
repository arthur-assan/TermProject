       <?php 
            include ("navbar.php");

$status = isset($_GET['status'])? $_GET['status'] : 3;
if($status ==1){
$msg = "<div class='alert alert-danger alert-dismissable' >
        <strong>Please login to complete your purchase.</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> </div>";
}
else{
    $msg = "";
}

?>

        <!-- Main Container -->
        <div class="container">

            <section class="section">

            <form method="POST" action="">
               
                <!-- Shopping Cart table -->
                <div class="table-responsive">

                <div class="container " style="text-align: center;"><?php echo $msg; ?></div>
                
                   
                    <table class="table product-table">
                       
                        <!-- Table head -->
                        <thead>
                            <tr>
                                
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <!-- /.Table head -->

                        <?php

                            $total = 0;
                          
                            $ip = getIP();
                            $sel_price = "select * from cart where ip_add='$ip'";

                            $run_price = mysqli_query($dbc,$sel_price);

                            while ($p_price=mysqli_fetch_array($run_price)) {
                                $pro_id = $p_price['prod_id'];
                                $pro_price = "select * from products where Prod_ID='$pro_id'";
                                $_SESSION["qty_$pro_id"] = $p_price['qty'];
                                $run_pro_price = mysqli_query($dbc,$pro_price);

                                while ($pp_price=mysqli_fetch_array($run_pro_price)) {
                                    $prod_price = array($pp_price['Prod_Price']);
                                    $prod_name = ($pp_price['Prod_Name']);
                                    $prod_img = ($pp_price['Prod_image']);
                                    $single_price = ($pp_price['Prod_Price']);

                                    $values =array_sum($prod_price);
                                    // $total += $single_price * $_SESSION["qty_$pro_id"];

                                   
                         ?>

                        <!-- Table body -->
                        <tbody>
                        

                            <!-- First row -->
                            <tr>
                                <td><img src="<?php echo $prod_img;?>" width="35%" height="35%"><br>
                                    <?php echo $prod_name;?>
                                </td>
                                <td><?php echo "GH&#8373; &nbsp;". $single_price; ?></td>

                                <?php

                                    if (isset($_POST['update'])) {

                                        $qty = $_POST["qty_$pro_id"];
                                      
                                        $update_qty = "update cart set qty ='$qty' where prod_id = '$pro_id'";
                                        $run_qty = mysqli_query($dbc,$update_qty);
                                        $_SESSION["qty_$pro_id"]=$qty;
                                        
                                        //$total = $total* $qty;
                                    }
                                ?>

                                <td><input type="text" name="<?php echo "qty_$pro_id";?>" size="3" value="<?php echo $_SESSION["qty_$pro_id"]; ?>"/></td>

                                <td align="center"><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>" /></td>

                                <?php $total += $single_price * $_SESSION["qty_$pro_id"]; ?>

                                <?php } } ?>
                            </tr>
                            <!-- /.First row -->


                            <!-- Fourth row -->
                            <tr>
                                <td><input class=" btn-primary" type="submit" name="update" value="Update Cart"></td>
                                <td><input class=" btn-primary" type="submit" name="continue" value="Continue Shopping"></td>

                                 </form>

                        <form method="post" action="checkout.php">
                                <td><h4><strong>Total</strong></h4></td>
                                <td><h4><strong><?php echo "GH&#8373; &nbsp;". $total; ?></strong></h4></td>
                                <input type="hidden" name="totalprice" value="<?php echo $total; ?>">
                                
                            </tr>

                            <tr>
                                <td colspan="4" align="center">
                                    <button type="submit" class="btn btn-primary">Complete purchase <i class="fa fa-angle-right right"></i></button>
                                </td>
                            </tr>
                            <!-- /.Fourth row -->

                        </tbody>
                        <!-- /.Table body -->
                        
                    </table>
                    
                </div>
                <!-- /.Shopping Cart table -->
                    </form>
               

                <?php
                function updateCart(){
                    global $dbc;
                    $ip = getIP();

                    if (isset($_POST['update'])) {
                        foreach ($_POST['remove'] as $remove_id) {
                            $delete_product = "delete from cart where prod_id='$remove_id' AND ip_add='$ip' ";

                            $run_delete = mysqli_query($dbc,$delete_product);

                            if ($run_delete) {
                                unset($_SESSION["qty_$remove_id"]);
                                echo "<script>window.open('cart.php','_self')</script>";
                            }
                        }
                    }
                    if (isset($_POST['continue'])) {
                         echo "<script>window.open('index.php','_self')</script>";
                    }
                        
                    }
                   echo @$up_cart = updateCart();

                ?>
                
            </section>

        </div>
        <!-- /.Main Container -->
        
    </main>

    <?php 
            include ("footer.php");
        ?>