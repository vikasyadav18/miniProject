<?php
session_start();
?>


<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "prateekpro";  
  
$con = mysqli_connect($host, $user, $password, $db_name);

if($_SESSION[email]!=""){


echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>how to install C</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/java1.css">
    <style>
    #search input{
       position:relative;
        left:500px;
        width:200px;
        height:40px;
    }
    .fa-search{
        position:relative;
        left:510px;
        color:white;
    
    }
    </style>
</head>
<body>
    <div class="container">   
        <div class="header">
            
            <h1 >Study <sub>Point</sub></h1>
            <form action="../php/search.php" method="POST" id="search">
            <input type="search" name="searchcontent" placeholder="Search here">
             <i class="fa fa-search"></i>
            </form>
        </div>
         
        <input type="checkbox" id="chk">
        <label for="chk" class="show-btn">
            <i class="fa fa-bars"></i>
        </label>
       
        <label for="chk" class="hide-btn">
            <i class="fa fa-times"></i>
        </label>
        <div class="sidebar">
            <ul>
                <li><a href="../index.html"><i class="fa fa-home"><span>home</span></i></a></li>
                <li><a href="#"><i class="fa fa-user"><span>About</span></i></a></li>
                <li><a href="#"><i class="fa fa-tasks"><span>services</span></i></a></li>
                <li><a href="#"><i class="fa fa-rss"><span>Blog</span></i></a></li>
                <li><a href="#"><i class="fa fa-id-card"><span>Contact</span></i></a></li>
            </ul>
           <div class="social" id="social1">
               <a href="#"><i class="fa fa-facebook-square"></i></a>
               <a href="#"><i class="fa fa-youtube-square"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
           </div>
        </div>
    
        <!-- right Side -->
        <div class="rightbar">
            <ul>
                <li><a href="java1.php"><i class="fa fa-tasks"><span> java introduction</span></i></a></li>
                <li><a href="java2.html"><i class="fa fa-tasks"><span> Applicaton of java</span></i></a></li>
                <li><a href="java3.html"><i class="fa fa-tasks"><span> History of java</span></i></a></li>
                <li><a href="java4.html"><i class="fa fa-tasks"><span> Features of Java</span></i></a></li>
                <li><a href="java5.html"><i class="fa fa-tasks"><span> How to set path in java</span></i></a></li>
                <li><a href="java6.html"><i class="fa fa-tasks"><span> First java programm</span></i></a></li>
                <li><a href="java7.html"><i class="fa fa-tasks"><span> Internal Details of Hello Java Program</span></i></a></li>
                <li><a href="java8.html"><i class="fa fa-tasks"><span> JVM (Java Virtual Machine) Architecture</span></i></a></li>
                <li><a href="java9.html"><i class="fa fa-tasks"><span> Java Variables</span></i></a></li>
                <li><a href="../index.html"><i class="fa fa-rss"><span> More</span></i></a></li>
                <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
            </ul>
          
        </div>
        <br>
       
    
    <div class="Ccontent">
    <div style="text-align:justify">
    <h1> Java Introduction</h1>
    <br><br>
    <h1>What is java</h1><br><br>
    Java is a programming language and a platform.
Java is a high level, robust, object-oriented and secure programming language.<br><br>

<b>Platform:</b> Any hardware or software environment in which a program runs, is known as a platform. 
Since Java has a runtime environment (JRE) and API, it is called a platform<br><br>
<h2>Java Example</h2><br><br>
Lets have a quick look at Java programming example. <br><br>
<pre>
    class Simple<br>
    {  <br>
          public static void main(String args[])<br>
        { <br> 
    
         System.out.println("Hello Java"); <br> 
    
        }  <br>
    
    }
</pre> 
    <br>
    <h2>Output :</h2>
    <br>
    Hello Java
    <br><br>
            <br><br>
            <br><br>


       </div>
        <div class="mybut">
            <button class="pre"><a href="../index.html"> previous</button>
            <button class="next"><a href="java2.html"> Next </a> </button>
            
            </div>

 </div>
  
</body>
</html>';
}
else{
    header("Location: ../files/signin.html");
}
?>