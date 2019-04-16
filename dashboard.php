<?php
    include 'ad-nav.php';
    include 'functions/functions.php';

    $get_cat = "select * from Categories";
    $run_cat = mysqli_query($dbc,$get_cat);

    $get_brand = "select * from brands";
    $run_brand = mysqli_query($dbc,$get_brand);


    $status = isset($_GET['status'])? $_GET['status'] : 3;
    if ($status == 1) {
        $msg = "<div class='alert alert-success alert-dismissable' >
        <strong>Update Successful</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> </div>";
    }
    else if ($status == 2) {
        $msg = "<div class='alert alert-success alert-dismissable' >
        <strong>Update Failed.</strong> <a href='#'class='close ' data-dismiss='alert' aria-label='close'>&times;</a> </div>";
    }
    else{
        $msg = "";
    }
    echo $msg;
?>

	<!--Form-->
                    
                    <div class="text-center" style="margin-top: 20px;">
                     <a href="admin_main.php"><i class="fa fa-chevron-circle-left fa-2x"></i> &nbsp; Go to Main Page</a>
                    </div>

                    <div class="container" style="margin-top:30px;" >

                        <form action="dashboard_action.php" method="POST">
                        <div class="card wow fadeInRight  grey lighten-3">
                            <div class="card-block">
                                <!--Header-->
                                <div class="text-center  light-blue darken-4 form-header">
                                    <h3><i class="fa fa-product-hunt"></i> Update Products</h3>
                                </div>

                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name">Name</label>
                                </div>
                            
                            <div class="row">
                               <div class="md-form col-md-6">
                                      Categories
                                      <select name="categories" class="form-control" id="Categories">
                                      <option value="-1">--Select a category--</option>
                                       <?php while ($row_cat = mysqli_fetch_assoc($run_cat)) :?>
                                        <option value="<?php echo $row_cat['Cat_ID'];?>"><?php echo $row_cat['Cat_Name'];?></option>
                                        <?php endwhile; ?>
                                         </select>
                                </div>

                                 <div class="md-form col-md-6">
                                      Brands
                                       <select name="brands" class="form-control" id="brands">
                                       <option value="-1">--Select a brand--</option>
                                       <?php while ($row_brand = mysqli_fetch_assoc($run_brand)) :?>
                                        <option value="<?php echo $row_brand['brand_id'];?>"><?php echo $row_brand['brand_name'];?></option>
                                        <?php endwhile; ?>
                                         </select>
                                </div>
                            </div>
                        
                        <div class="row">
                                <div class="md-form col-md-3">
                                    <input type="text" id="price"  name="price" class="form-control">
                                    <label for="price">Price</label>
                                </div>
                              

                                <div class="md-form col-md-3">
                                    <input type="text" id="quantity" name="quantity" class="form-control">
                                    <label for="quantity">Quantity</label>
                                </div>

                                <div class="md-form col-md-6">
                                    <input type="text" id="keyword" name="keyword" class="form-control">
                                    <label for="keyword">Keyword</label>
                                </div>
                        </div>

                        <div class="row">
                                <div class="md-form col-md-6">
                                    Image
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>

                                <div class="md-form col-md-6">
                                  Description:
                                  <textarea class="form-control" rows="20" cols="30" name="description"></textarea>
                                </div>
                        
                        </div>

                                                              
                                <div class="text-center">
                                   
                                    <button>Update </button>
                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                        <!--/.Form-->
<?php
	include ('ad-script.php');
?>