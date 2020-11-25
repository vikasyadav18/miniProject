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
    <title>Python 1</title>
    <!-- <link rel="stylesheet" href="leftsidebar.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/python1.css">
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
         .Pcontent ul li{
            list-style: circle;
            color: black;
            margin-left: 40px;
                     }
         .Pcontent{
             border:2 px solid black;
             overflow:auto;
         }            
    
         .Pcontent
         {
             z-index: 2;
            position: absolute;
            top: 80px;
            left: 100px;
            width: 70%; 
            // border:2px solid green;
            padding-bottom:80px;
            
         }
         .container
         {
            //  border:3px solid red;
             position: relative;
        
       height:800px;
       overflow:auto;
      
         
         }
         .footer
         {
                   
         display: none;
         }
    </style>

</head>
<body>
 
 <div class="container">   
    <div class="header">
        
        <h1>Study <sub>Point</sub></h1>
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
            <li><a href="../index.html"><i class="fa fa-home"><span> home</span></i></a></li>
            <li><a href="#"><i class="fa fa-user"><span> About</span></i></a></li>
            <li><a href="#"><i class="fa fa-tasks"><span> services</span></i></a></li>
            <li><a href="#"><i class="fa fa-rss"><span> Blog</span></i></a></li>
            <li><a href="#"><i class="fa fa-id-card"><span> Contact</span></i></a></li>
        </ul>
       <div class="social" id="social1">
           <a href="#"><i class="fa fa-facebook-square"></i></a>
           <a href="#"><i class="fa fa-youtube-square"></i></a>
           <a href="#"><i class="fa fa-instagram"></i></a>
       </div>
    </div>

    
    <div class="rightbar">
        <ul>
            <li><a href="python1.php"><i class="fa fa-tasks"><span> Introduction to python</span></i></a></li>
            <li><a href="python2.html"><i class="fa fa-tasks"><span> Advantage of python programming</span></i></a></li>
            <li><a href="../index.html"><i class="fa fa-rss"><span> More</span></i></a></li>
            <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
        </ul>
      
    </div>
    <br>
    


<div class="Pcontent" style ="text-align:justify"> 

    <p>

    <h1>Introduction Of Python</h1>
    <br><br>

    Python is a widely used general-purpose, high level programming language.<br><br>

        It was created by Guido van Rossum in 1991 and further developed by the Python Software Foundation.

        <br><br>It was designed with an emphasis on code readability, and its syntax allows programmers to express their concepts in fewer lines of code.<br>

        Python is a programming language that lets you work quickly and integrate systems more efficiently.<br><br>

    

    <h2>There are two major Python versions:</h2><br><br>

    <b>1. Python 2<br> <br> 2. Python 3</b><br> <br>Both are quite different.<br><br>

         Beginning with Python programming:<br><br>

         <b> Finding an Interpreter:</b><br><br>

         Before we start Python programming, we need to have an interpreter to interpret and run our programs.<br><br>

         <b>Windows:</b> There are many interpreters available freely to run Python scripts like IDLE (Integrated Development Environment) that comes bundled with the Python software downloaded .<br><br>

         <b>Linux:</b> Python comes preinstalled with popular Linux distros such as Ubuntu and Fedora.<br><br>

         To check which version of Python you’re running, type “python” in the terminal emulator.<br><br>

 

         The interpreter should start and print the version number.<br><br>

         macOS: Generally, Python 2.7 comes bundled with macOS. You’ll have to manually install Python 3 from Python.org <br><br>

   

    <h2>Python Language advantages and applications:</h2><br><br>

        

            <ul>

                 <li>Python is a high level, interpreted and general purpose dynamic programming language that focuses on code readability.</li>

                 <br><li>It has fewer steps when compared to Java and C.It was founded in 1991 by developer Guido Van Rossum.</li>

                 <br><li> It is used in many organizations as it supports multiple programming paradigms.</li>

                 <br> <li>It also performs automatic memory management.</li>  

            </ul>          

        

    
 </div>

</div> 
      
</body>
</html>
        ';
}
else{

    header("Location: ../files/signin.html");
}
?>