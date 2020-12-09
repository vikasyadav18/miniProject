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
    <title>C</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/c.css">
<style>
.Ccontent ul li
{
    color: black;
             }
.container
{
  height: 900px;

}
.footer{
    display:none;
}
.Ccontent{
    border:2px solid black;
    height:640px;
    width:70%;
    overflow:auto;
    padding:10px;
    display:block;
}
.show-btn,.hide-btn
{
   z-index:5;
}
.mybut button{
    display:inline-block;
    width:100px;
    height:30px;
    border-radius:20px;
    color:white;
    background-color:orange;
    border:none;
}
.mybut a{
    text-decoration:none;
    color:white;
}
.mybut .next{
float:right;
} 
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
    ';

echo'

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
            <li><a href="C.php"><i class="fa fa-tasks"><span> C programming</span></i></a></li>
            <li><a href="Cintro.html"><i class="fa fa-tasks"><span> History of C</span></i></a></li>
            <li><a href="C3.html"><i class="fa fa-tasks"><span> How to install C</span></i></a></li>
            <li><a href="../index.html"><i class="fa fa-rss"><span> More</span></i></a></li>
            <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
        </ul>
      
    </div>
    <br>
    ';
    echo '

<div class="Ccontent">
<div style="text-align:justify">
    <p>
    <h1 style="color: rgb(135, 128, 228);"> What is C language</h1><br><br>
    
   <b>C language </b>Tutorial with programming approach for beginners and professionals, helps you to understand the C language tutorial easily. Our C tutorial explains each topic with programs.<br>

The C Language is developed by Dennis Ritchie for creating system applications that directly interact with the hard.
<br><br>

<h2>It can be defined by the following ways:</h2>

    <ul>
        <li>Mother language</li>
        <li>System programming language</li>
        <li>Procedure-oriented programming language</li>
        <li>Structured programming language</li>
        <li>Mid-level programming language</li>
    </ul>    <br><br>
    <h2> 1) C as a mother language:</h2><br><br>

C language is considered as the mother language of all the modern programming languages because most of the compilers, JVMs, Kernels, etc. are written in C language, and most of the programming languages follow C syntax, for example, C++, Java, C#, etc.<br>

It provides the core concepts like the array, strings, functions, file handling, etc. that are being used in many languages like C++, Java, C#, etc.

<br><br><h2>2) C as a system programming language:</h2><br><br>
A system programming language is used to create system software. C language is a system programming language because it can be used to do low-level programming (for example driver and kernel). It is generally used to create hardware devices, OS, drivers, kernels, etc. For example, Linux kernel is written in C.<br>
';
echo '

It cannot be used for internet programming like Java, .Net, PHP, etc.<br><br>

<h2>3) C as a procedural language:</h2><br><br>
A procedure is known as a function, method, routine, subroutine, etc. A procedural language specifies a series of steps for the program to solve the problem.<br>

A procedural language breaks the program into functions, data structures, etc.<br>

C is a procedural language. In C, variables and function prototypes must be declared before being used.<br><br>

<h2>4) C as a structured programming language:</h2><br><br>

A structured programming language is a subset of the procedural language. Structure means to break a program into parts or blocks so that it may be easy to understand.<br>

In the C language, we break the program into parts using functions. It makes the program easier to understand and modify.<br><br>

<h2>5) C as a mid-level programming language:</h2><br><br>
C is considered as a middle-level language because it supports the feature of both low-level and high-level languages. C language program is converted into assembly code, it supports pointer arithmetic (low-level), but it is machine independent (a feature of high-level).<br>

A Low-level language is specific to one machine, i.e., machine dependent. It is machine dependent, fast to run. But it is not easy to understand.<br>

A High-Level language is not specific to one machine, i.e., machine independent. It is easy to understand.<br><br>

    </p>
    </div>

    <div class="mybut">
        <button> previous </button>
        <button class="next"><a href="Cintro.html"> Next </a> </button>
        </div>
</div>



</div>
';
echo '


<div class="footer">
   
    <footer>
        <section class="sec-1">

            <section class="about">
                <h3>About</h3>
                <p style="overflow:hidden;">The physical classroom learning nowadays is no longer 
                    applicable for the current younger generations (Gen Y). In an 
                    era known as the society of technology and knowledge, where 
                    lifelong learning is a way of life, we are developing a website 
                    named as “study point” for goal of finding effective ways of 
                    providing new learning material. The project is a Java based 
                    project developed with the help of Java, HTML and CSS .This 
                    E-learning website includes computer based learning. This E-
                    learning website provide knowledge to the students about 
                    various topics and in an effort to make learning more 
                    efficient, equitable and innovative. It provides efficiency and 
                    effectiveness in providing education to the students .This 
                    website has no registered user, any guest user can take 
                    advantage of it.</p>
            </section>
            <section class="categories">
                <h3>Categories</h3>
                <ul>
                    <li> <a href="#">C</a> </li>
                    <li> <a href="#">UI Design</a> </li>
                    <li> <a href="#">PHP</a> </li>
                    <li> <a href="#">Java</a> </li>
                    <li> <a href="#">Android</a> </li>
                    <li> <a href="#">Templates</a> </li>
                    
                </ul>
            </section>
            <section class="quick-links">
                <h3>Quick-links</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                   
                </ul>
            </section>
            <section class="contact">
                <h3>Contact</h3>
                <ul>
                    <li> <a href="#"> <i class="fa fa-home"></i> <span>GLA University mathura UP,India</span> </a></li>
                    <li> <a href="#"> <i class="fa fa-envelope-o"></i> <span>studyPoint@gmail.com</span></a></li>
                    <li> <a href="#"> <i class="fa fa-mobile"></i> <span>90******35</span></a></li>
                    <li> <a href="#"> <i class="fa fa-facebook"></i><span>StudyPoint</span> </a></li>
                </ul>
            </section>

        </section>
       
        <section class="sec-2">
            <h3>Register for Free</h3>
            <a href="#">Signup!</a>

        </section>

        

        <section class="sec-3">
           <a href="#" class="facebook" ><i class="fa fa-facebook" ></i></a> 
           <a href="#" class="twitter"><i class="fa fa-twitter" ></i></a> 
           <a href="#" class="google" ><i class="fa fa-google" ></i></a> 
           <a href="#" class="linkedin" ><i class="fa fa-linkedin" ></i></a> 
           <a href="#" class="dribbble" ><i class="fa fa-dribbble" ></i></a> 
        </section>
        
        <section class="sec-4">
            <p>Copyright @ 2020 All Rights Reserved by <span> <a href="#">Study Point</a></span> </p>
        </section>
    </footer>
</div> 
      
</body>
</html>';
        }
        else{
            header("Location: ../files/signin.html");
        }
        ?>