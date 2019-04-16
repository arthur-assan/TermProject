<?php
	include ('connect.php');

	$query = "SELECT * FROM products order by Prod_ID desc";
	//echo $query;
	$result = mysqli_query($dbc,$query);

include 'ad-nav.php';
?>
<div class="container">

   <div class="text-center" style="margin-top: 20px;">
     <a href="admin_main.php"><i class="fa fa-chevron-circle-left fa-2x"></i> &nbsp; Go to Main Page</a>
  </div>

	  <div class="card wow fadeInRight  grey lighten-3">
          <div class="card-blockS" style="margin-top: 70px;">
                                <!--Header-->
   		 <div class="text-center  red lighten-1 form-header">
         <h3><i class="fa fa-eye"></i> View Products</h3>
         </div>
</div>
</div>

  <table class="table">
  
  <thead class="thead-default">
    <tr>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Product Quantity</th>
      <th>Product Price</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><img src="<?php echo $row_pro['Prod_image'];?>" width="120" ></td>
        <td><?php echo $row_pro['Prod_Name'];?></td>
        <td><?php echo $row_pro['Prod_quantity'];?></td>
        <td>GH&#8373; <?php echo $row_pro['Prod_Price'];?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<?php
include "ad-script.php";
?>
