<?php 


$conn = mysqli_connect('localhost', 'root', '', 'data');
     
     if(!$conn) {
          die('not connected'.mysqli_error());

     }



     if(isset($_GET['edit_id'])) {
          $recive = $_GET['edit_id'];


          $get_info = "SELECT * FROM info WHERE id = $recive";

          $selet_info = mysqli_query($conn, $get_info);


          while($row = mysqli_fetch_assoc($selet_info)) {
              



               ?>

                    <form action="update.php" method="POST">

                         <input type="text" name="username" value="<?php  echo $row['username']; ?>" placeholder="Enter Your Username">
                         <input type="text" name="email" value="<?php  echo $row['email']; ?>" placeholder="Enter Your email">
                         <input type="text" name="password" value="<?php  echo $row['password']; ?>" placeholder="Enter Your password">

                         <input type="submit" name="submit" value="Update Data">
                         <input type="hidden" name="updating_id" value="<?php echo $recive; ?>">

                    </form>
               <?php
          }


     }

?>



