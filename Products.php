<?php 
include ('navbar.php');

    $get_pro = "select * from products ORDER BY RAND()";
    $run_pro = mysqli_query($dbc,$get_pro);
        
include ('prodimgs.php');
include ('footer.php');
  ?>


