<?php session_start();

    include ('connect.php');
     

    $email = $_POST['email'];
    $pword = $_POST['pword'];
        
    $query = "SELECT * FROM users  WHERE Email = '$email' && Password = '$pword' ";
    
    //echo $query;
    $result = mysqli_query($dbc,$query);

    if ($result) {
       
          $row = mysqli_fetch_assoc($result);
          if ($row['FirstName'] == "") {
                  header("location:login.php?status=2");
          }else{
            $_SESSION['FirstName'] = $row['FirstName']; 
            $txt = $_SESSION['FirstName'] ;
             header("location:login.php?status=1");
                 }
            }

    else{
        header("location:login.php?status=2");
   }

?>