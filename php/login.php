<?php
session_start();
?>

<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "prateekpro";  
  
$con = mysqli_connect($host, $user, $password, $db_name); 
 
$password = $_POST['pwd'];  
$email = $_POST['email'];


$sql="SELECT email,password,username FROM account where password='$password' and email='$email'";
$result= mysqli_query($con,$sql);

if(mysqli_num_rows($result)){

    while($row=mysqli_fetch_assoc($result)){
       
        $_SESSION["username"]=$row["username"];
       
    }
   $_SESSION["email"]=$email;


  header("Location: ../index.html");

  
}
else {
    echo "<script>alert('Check your email and password!')</script>";
    header("Location: ../files/signin.html");
 
}
mysqli_close($con);
?>