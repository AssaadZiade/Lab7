<?php
include("database.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $username = $_POST["usernamePHP"];
    $password = $_POST["passwordPHP" ];
    $ccpassword = $_POST["ccpasswordPHP"];
    $birthday=  $_POST["birthdayPHP"];

    connectDb($servername,$username,$password,$dbname);
    

}

?>
