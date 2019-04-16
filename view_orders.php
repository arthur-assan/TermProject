<?php
	include ('connect.php');

	$query = "SELECT * FROM orders order by order_id desc";
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
   		 <div class="text-center teal accent-3 form-header">
         <h3><i class="fa fa-list-ol"></i> View Orders</h3>
         </div>
</div>
</div>

  <table class="table">
  
  <thead class="thead-default">
    <tr>
      <th>Date </th>
      <th>Customer Name</th>
      <th>Email </th>
      <th>Address </th>
      <th>Contact </th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?php echo $row_pro['ord_date'];?></td>
        <td><?php echo $row_pro['ord_name'];?></td>
        <td><?php echo $row_pro['ord_email'];?></td>
        <td><?php echo $row_pro['ord_add'];?></td>
        <td><?php echo $row_pro['ord_contact'];?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<?php
include "ad-script.php";
?>
