<?php
  $connection = new mysqli("localhost", "root", "", "AjaxLab");

   if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
   $username = $_POST["username"];
   $oldPassword = $_POST["oldPassword"];
   $newPassword = $_POST["newPassword"];

       $sql = "SELECT password FROM users WHERE name = '$username'";
     
       $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result);

       if($row[0] != $oldPassword) {
           echo "This is not your old password! Please try again";
       } else{ 
           $newsql = "UPDATE users SET password = '$newPassword' WHERE name = '$username'";

           $updated = mysqli_query($connection, $newsql);
           echo "Done! Your new password is $newPassword";
       };
       
    




?>
