<?php
  include 'categories.php';
  cart(); 
?>
<div class="container">
<h2 style="margin:35px 0; padding: 5px; color: #FFF; font:20px trebuchet MS; text-align: right; background-color: #0099FF; ">FEATURED PRODUCTS</h2>  
<div class="card-group wow fadeInUp">
    <div class="row">
    <div class="container">
    <div class="card-group wow fadeInUp">
         <?php while ($row_pro = mysqli_fetch_assoc($run_pro)) :?>

    <div class="col-md-4" style="margin-top: 10px;">
    <div class="card ">
    <div  class="view overlay hm-zoom hm-black-slight">
        <img class="img-fluid" src="<?php echo $row_pro['Prod_image'];?>" alt="Card image cap">
          <div class="mask flex-center">
                 <p><h4 class="card-title black-text" style="background-color: #ff8000;padding: 5px;"><a href="product_view.php?Prod_ID=<?php echo $row_pro['Prod_ID'];?>">View</a><br></h4></p>
        </div> 
    </div>
        <div class="card-block ">
                 <h4 class="card-title text-center"><?php echo $row_pro['Prod_Name'];?></h4>
                   <hr>
            <p class="class="card-text"><span style="color: red;">GH&#8373;<?php echo $row_pro['Prod_Price'];?></span> 
            <a href="products.php?add_cart=<?php echo $row_pro['Prod_ID'];?>"><button type="button" class=" pull-right btn btn-outline-info btn-rounded waves-effect btn-sm" ><i class="fa fa-shopping-cart"></i>&nbsp; Add to Cart</button></a></p>
        </div>
    </div>
    </div>
    <br>
    <?php endwhile; ?>

</div>
</div>
</div>
</div>

<br><br>


<nav >
  <ul class="pagination justify-content-center pagination-lg" >
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="">2</a></li>
     <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
        <!--/.Main layout-->

    </main>
    </div>