<?php
	include ('connect.php');

	$query = "SELECT * FROM categories ";
  $query2 = "SELECT * FROM brands ";
	//echo $query;
	$result = mysqli_query($dbc,$query);
  $result2 = mysqli_query($dbc,$query2);

include 'ad-nav.php';
?>
<div class="container">

   <div class="text-center" style="margin-top: 20px;">
     <a href="admin_main.php"><i class="fa fa-chevron-circle-left fa-2x"></i> &nbsp; Go to Main Page</a>
  </div>

	  <div class="card wow fadeInRight  grey lighten-3">
          <div class="card-blockS" style="margin-top: 70px;">
                                <!--Header-->
   		 <div class="text-center   orange lighten-3 form-header">
         <h3><i class="fa fa-tags"></i> View Categories & Brands</h3>
         </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
  <table class="table">
  
  <thead class="thead-default">
    <tr>
      <th>Categories</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?php echo $row_pro['Cat_Name'];?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<!-- brands -->
<div class="col-md-6">
  <table class="table">
  
  <thead class="thead-default">
    <tr>
      <th>Brands</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro2 = mysqli_fetch_assoc($result2)):?>
     <tr>
        <td><?php echo $row_pro2['brand_name'];?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>

</div>
</div>
<?php
include "ad-script.php";
?>
