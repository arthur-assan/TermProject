<?php
  include ('connect.php');

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $pword = $_POST['pword'];
  $phone = $_POST['phone'];
  $agree = $_POST['agree'];

  $query = "INSERT INTO users (FirstName,LastName,Gender,DoB,Email,Password,Phone) VALUES ('$fname','$lname','$gender','$dob','$email','$pword','$phone') ";
  // echo $query;
  $result = mysqli_query($dbc,$query);
  if ($result) {
    echo "<script>
      alert('signup Successful');
      window.location='login.php';
    </script>";
  }
  else{
   echo "<script>
      alert('signup unsuccessful');
      window.location='signup.php';
    </script>";
  }

?>