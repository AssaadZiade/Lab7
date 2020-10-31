<?php
  $connection = new mysqli("localhost", "root", "", "AjaxLab");

   if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

   $searchText = $_POST["searchText"];

       $sql = "SELECT * FROM users WHERE name LIKE '$searchText%'";

       $result = mysqli_query($connection, $sql);
       $rows = mysqli_fetch_array($result);

       for($i = 0; $i < count($rows); $i = $i+2){
           $j = $i+1;
           echo "Username: $rows[$i]\nPassword: $rows[$j]";
       }
    

?>
