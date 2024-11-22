<?php

if (isset($_POST['submit'])) {

     $username = $_POST['username'];
     $email    = $_POST['email'];
     $password = $_POST['password'];

     // database connection
     $conn = mysqli_connect('localhost', 'root', '', 'data');
     
     if(!$conn) {
          die('not connected'.mysqli_error());
 
    }

    $query = "INSERT INTO info (username, email, password) VALUES ('$username', '$email', '$password')";

    $result = mysqli_query($conn, $query);

    if(!$result) {
     die('Not inserted' .mysqli_error());
    } 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Crud apps </title>

     <!-- getbootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     
</head>
<body>
     <form action="login.php" method="POST">

          <input type="text" name="username" placeholder="Enter Your Username">
          <input type="text" name="email" placeholder="Enter Your email">
          <input type="text" name="password" placeholder="Enter Your password">

          <input type="submit" name="submit">
     </form>
</body>
</html>