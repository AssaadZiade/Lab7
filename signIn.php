
<?php
  $connection = new mysqli("localhost", "root", "", "AjaxLab");

   if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

   $username = $_POST["username"];
   $password = $_POST["password"];

       $sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";

       $result = mysqli_query($connection, $sql);

       if (mysqli_num_rows($result) == 0){
           echo "\nWrong Username Or Password! Please Try Again";
       } else {
           echo "\n\nLogged In";
       }
    



?>
