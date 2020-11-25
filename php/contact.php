 <?php   
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "prateekpro";   
    $con = mysqli_connect($host, $user, $password, $db_name);  
     
    $firstname = $_POST['firstname'];  
    $lastname = $_POST['lastname'];  
    $state = $_POST['state'];
    $country = $_POST['country'];  
    $message = $_POST['message'];

    

         $sql = "INSERT INTO contact(FIRSTNAME,LASTNAME,COUNTRY,STATE,MESSAGE) VALUES ('$firstname','$lastname','$country','$state','$message')"; 
         if($con->query($sql) === TRUE){
             header("Location: ../index.html");
}
else
{
echo " sorry". "<br>". $sql ."<br>" 
. $con->error;
} 

$con->close();        
?> 