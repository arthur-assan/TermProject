<?php
	include ('connect.php');

	$query = "SELECT * FROM messages order by Msg_Time  desc";
	//echo $query;
	$result = mysqli_query($dbc,$query);

include 'ad-nav.php';
?>
<div class="container">

   <div class="text-center" style="margin-top: 20px;">
     <a href="admin_main.php"><i class="fa fa-chevron-circle-left fa-2x"></i> &nbsp; Go to Main Page</a>
  </div>

	  <div class="card wow fadeInRightgrey lighten-3">
          <div class="card-blockS" style="margin-top: 70px;">
                                <!--Header-->
   		 <div class="text-center  amber accent-2 form-header">
         <h3><i class="fa fa-envelope"></i> View Messages</h3>
         </div>
</div>
</div>

  <table class="table table-hover">
  
  <thead class="thead-default">
    <tr>
      <th>Date/Time</th>
      <th>Email </th>
      <th>Subject</th>
      <th>Content</th>
      <th>Sender</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td><?php echo $row_pro['Msg_Time'];?></td>
        <td><?php echo $row_pro['msg_sender_email'];?></td>
        <td><?php echo $row_pro['msg_subject'];?></td>
        <td><?php echo $row_pro['Msg_Body'];?></td>
        <td><?php echo $row_pro['msg_sender']; ?></td>
     </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<?php
include "ad-script.php";
?>
