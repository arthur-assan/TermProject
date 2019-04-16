<?php
include 's-navbar.php';
?>
<div class="container">
  <table class="table table-hover">
  <thead class="thead-default">
    <tr>
      <th>Product Image</th>
      <th>Product Name</th>
      <th>Product Price</th>
    </tr>
  </thead>
  <tbody>
   <?php while ($row_pro = mysqli_fetch_assoc($result)):?>
     <tr>
        <td> <a href="product_view.php?Prod_ID=<?php echo $row_pro['Prod_ID'];?>"><img src="<?php echo $row_pro['Prod_image'];?>" width="200" ></a></td>
        <td><?php echo $row_pro['Prod_Name'];?></td>
        <td>GH&#8373; <?php echo $row_pro['Prod_Price'];?></td>
     </tr>
     
    <?php endwhile; ?>
  </tbody>

</table>
</div>
<?php
include "footer.php";
?>