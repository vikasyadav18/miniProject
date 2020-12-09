<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "prateekpro";  
  
$con = mysqli_connect($host, $user, $password, $db_name); 
 
$file = $_POST['searchcontent'];  
$sql="SELECT file_name,flocation FROM search where file_name='$file'";
$result= mysqli_query($con,$sql);

if(mysqli_num_rows($result)){

    while($row=mysqli_fetch_assoc($result)){
       
      
        $filename=$row['flocation'];
   
        header("Location: ../files/$filename");
 
    }
}
else{
    header("Location: ../index.html");  
}

?>

</body>
</html>