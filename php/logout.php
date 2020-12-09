<?php
session_start();
?>


<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "prateekpro";  
  
$con = mysqli_connect($host, $user, $password, $db_name);

$_SESSION["email"]="";
header("Location: ../index.html");
?>