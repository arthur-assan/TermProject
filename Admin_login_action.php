<?php

    include ('connect.php');
     

    $email = $_POST['email'];
    $pword = $_POST['pword'];
        
    $query = "SELECT * FROM users  WHERE Email = '$email' && Password = '$pword' ";
    
    //echo $query;
    $result = mysqli_query($dbc,$query);

    if ($result) {
       
          $row = mysqli_fetch_assoc($result);
          if ($row['level'] == "1") {
                  header("location:Admin_login.php?status=1");
          }

    else{
        header("location:Admin_login.php?status=2");
}
}
?>