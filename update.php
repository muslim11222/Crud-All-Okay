<?php 


$conn = mysqli_connect('localhost', 'root', '', 'data');
     
     if(!$conn) {
          die('not connected'.mysqli_error());

     }



     if(isset($_POST['submit'])) {
          $username  = $_POST['username'];
          $email     = $_POST['email'];
          $password  = $_POST['password'];
          $hidden    = $_POST['updating_id'];

     }

     $update = "UPDATE info SET username = '$username', email = '$email', password = '$password' WHERE id = $hidden";
     $final_query = mysqli_query($conn, $update);

     if ($final_query) {
          header("location: read.php?Updated");
     }
?>