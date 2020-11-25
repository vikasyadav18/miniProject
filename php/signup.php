
<?php   
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "prateekpro";   
    $con = mysqli_connect($host, $user, $password, $db_name);  
     
    $username = $_POST['name'];  
    $password = $_POST['password'];  
    $email = $_POST['email'];

    $check=0;  

    $sqll="SELECT email FROM account where email='$email'";
    $resultl= mysqli_query($con,$sqll);


    if(mysqli_num_rows($resultl)){
        while($row=mysqli_fetch_assoc($resultl)){
         $check=1;
         header("Location: ../files/signup.html");
        
    }
}
   
if($check==0){
         $sql = "INSERT INTO account(USERNAME,PASSWORD,EMAIL) VALUES ('$username','$password','$email')"; 
         if($con->query($sql) === TRUE){
     
           
             header("Location: ../index.html");


}
else
{
echo " sorry". "<br>". $sql ."<br>" 
. $con->error;
} 
}
$con->close();        
?> 