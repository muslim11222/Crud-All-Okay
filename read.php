

<?php 

     $conn = mysqli_connect('localhost', 'root', '', 'data');
     
     if(!$conn) {
          die('not connected'.mysqli_error());

     }

     $query = "SELECT * FROM info";

     $adanprodan = mysqli_query($conn, $query);

     $counter = mysqli_num_rows($adanprodan);

     if($counter > 0) {



          if(isset($_GET['deleted'])) {
               echo 'Deleted successfully';
          }

?>          


     
     <div class="container">
          <table class="table">
               <thead class="thead-dark">
                    <tr>
                         <th>id</th>
                         <th>username</th>
                         <th>email</th>
                         <th>password</th>
                         <th>action</th>
                    </tr>
               </thead>
     </div>



<?php
     while( $row = mysqli_fetch_assoc($adanprodan)) {

          
          $db_id = $row['id'];
          $username = $row['username'];
          $email = $row['email'];
          $password = $row['password'];

?>               


     <tbody>
          <tr>
               <td> <?php echo $db_id; ?> </td>
               <td> <?php echo $username; ?> </td>
               <td> <?php echo $email; ?> </td>
               <td> <?php echo $password; ?> </td>
               <td><a href="delete.php?id= <?php echo $db_id ?>"> Delete </a></td>
               <td><a href="data_edit.php?edit_id= <?php echo $db_id; ?>"> Edit </a></td>
          </tr>
     </tbody>     



<?php


     }

?>
     </table>
<?php

     }  else {
          echo 'You do not have any data in your database';
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
</body>
</html>