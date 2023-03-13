<!DOCTYPE html>
<html>
  <head>
    <title>Thank You!</title>
  </head>
  <body>
    <?php 
     session_start();
    ?>
    <h1>Thank You!</h1>
    <p>Thank you for registering, <strong><?php echo $_SESSION['name']; ?>! </strong> </p>
    <p>Your profile picture has been saved to the server.</p>
    <p>Your Email is : <strong>"<?php echo $_SESSION['email']; ?>".</strong> </p>

    <a href="./users.php">User List</a>
  </body>
</html>
