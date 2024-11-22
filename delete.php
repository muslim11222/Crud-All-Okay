<?php 

$conn = mysqli_connect('localhost', 'root', '', 'data');
     
     if(!$conn) {
          die('not connected'.mysqli_error());

     }



     if (isset($_GET['id'])) {
          $recive = $_GET['id'];
     
  


          $query = "DELETE FROM info WHERE id = $recive";

          $run = mysqli_query($conn, $query);


          if($run) {
               header('location:read.php?deleted');
          } else {
               echo 'not deleted successfully';
          }

     }
?>