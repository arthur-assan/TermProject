<?php
	include ('connect.php');

	$query = "SELECT * FROM users ";
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
   		 <div class="text-center   indigo lighten-2 form-header">
         <h3><i class="fa fa-users"></i> View Users</h3>
         </div>
</div>
</div>

  <table class="table">
  
  <thead class="thead-default">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>DOB</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?php echo $row_pro['FirstName'];?></td>
        <td><?php echo $row_pro['LastName'];?></td>
        <td><?php echo $row_pro['Gender'];?></td>
        <td><?php echo $row_pro['DoB'];?></td>
        <td> <?php echo $row_pro['Email'];?></td>
        <td> <?php echo $row_pro['Phone'];?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<?php
include "ad-script.php";
?>
