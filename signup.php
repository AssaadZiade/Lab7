<?php
   $connection = new mysqli("localhost", "root", "", "AjaxLab");

   if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

mysqli_query($connection, "DELETE FROM users");

   $username = $_POST["username"];
   $password = $_POST["password"];
   $ccpassword = $_POST["ccpassword"];
   $birthday = $_POST["birthday"];

   if ($password != $ccpassword){
       echo "\nAttention! Passwords don't match! ";
   } else {

       $sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";

       $result = mysqli_query($connection, $sql);

       if (mysqli_num_rows($result) != 0){
           echo "\nAttention!Can't Sign In Because User Already Exists";
       } else {
           mysqli_query($connection, "INSERT INTO users VALUES ('$username', '$password')");
           echo "\n\nSUCCESS";
       }
    }


?>
