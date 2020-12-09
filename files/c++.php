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
    <title>C++ 1</title>
    <!-- <link rel="stylesheet" href="leftsidebar.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/c++.css">

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
.Ccontent ul li{
list-style: circle;
color: black;
margin-left: 40px;
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
            <li><a href="c++.php"><i class="fa fa-tasks"><span> Learn C++</span></i></a></li>
            <li><a href="c++2.html"><i class="fa fa-tasks"><span> Application and classes of C++</span></i></a></li>
           <li><a href="../index.html"><i class="fa fa-rss"><span> More</span></i></a></li>
           <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
        </ul>
      
    </div>
    <br>
    
<!-- content of C intro programming -->



<div style="text-align:justify" class="Ccontent">
    <!-- /*1 page*/ -->
    <h1>WHAT IS C++</h1><br><br>
    C++ is one of the world most popular programming languages.<br><br>
        C++ can be found in today operating systems, Graphical User Interfaces, and embedded systems.<br><br>
        C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.<br>
        <br>C++ is portable and can be used to develop applications that can be adapted to multiple platforms.<br>
        <br> C++ is fun and easy to learn!<br>
        <br> As C++ is close to C# and Java, it makes it easy for programmers to switch to C++ or vice versa<br>
    
        <br> <h1>C++ DATATYPES </h1><br><br>
    
        <ul  class="Clist">
            <li>int myNum = 5;               // Integer (whole number) </li>
            <li>float myFloatNum = 5.99;     // Floating point number</li>
            <li>double myDoubleNum = 9.98;   // Floating point number</li>
            <li>double myDoubleNum = 9.98;   // Floating point number</li>
            <li>bool myBoolean = true;       // Boolean</li>
            <li>string myText = "Hello";     // String</li>
        </ul>
        
        <br><br> <h1>BASIC DATATYPES AND DESCRIPTION</h1><br><br>
    <table>  
            <tr><th>Data Type</th><th>Size</th><th>Description</th></tr> 
            <tr><th>int</th><th>4 bytes</th><th>Stores whole numbers, without decimals</th></tr> 
            <tr><th>float</th><th>4 bytes</th><th>Stores fractional numbers, containing one or more decimals. Sufficient for storing 7 decimal digits</th></tr> 
            <tr><th>double</th><th>4 bytes</th><th>Stores fractional numbers, containing one or more decimals. Sufficient for storing 15 decimal digits</th></tr> 
            <tr><th>boolean</th><th>4 bytes</th><th>Stores true or false values</th></tr> 
            <tr><th>char</th><th>4 bytes</th><th>Stores a single character/letter/number, or ASCII values</th></tr> 
    </table>
    <!-- /*2 page*/ -->
    <br><br><h1>FOLLOWING OPERATORS USED IN C++</h1><br><br>
    
        C++ divides the operators into the following groups:
        <ol  class="Clist">
            <li>Arithmetic operators</li>
            <li>Assignment operators</li>
            <li>Comparison operators</li>
            <li>Logical operators</li>
            <li>Bitwise operators</li>
        </ol>
    
        <br><br> <h1>ARITHMETIC OPERATORS</h1><br><br>
    <table>  
            <tr><th>Operator</th><th>Name</th><th>Description</th><th>Example</th></tr> 
            <tr><th>+</th><th>Addition</th><th>Adds together two values</th><th>x+y</th></tr> 
            <tr><th>-</th><th>Subtraction</th><th>Subtract one value from another</th><th>x-y</th></tr> 
            <tr><th>*</th><th>Multiplication</th><th>Multiplication two values</th><th>x*y</th></tr> 
            <tr><th>/</th><th>Division</th><th>Divide one value by another</th><th>x/y</th></tr> 
            <tr><th>%</th><th>Modulus</th><th>Returns the division remainder</th><th>x%y</th></tr> 
            <tr><th>++</th><th>Increment</th><th>Increases the value of a variable by 1</th><th>++x</th></tr>
            <tr><th>--</th><th>Decrement</th><th>|Decreases the value of a variable by 1</th><th>--x</th></tr>
    </table>
    <br><br>    <h1>Assignment operators</h1><br><br>
    <table>
            <tr><th>Operator</th><th>Example</th><th>Same As</th></tr>
            <tr><th>=</th><th>x = 5</th><th>x = 5</th></tr>
            <tr><th>+=</th><th>x += 3</th><th>x = x + 3</th></tr>
            <tr><th>-=</th><th>x -= 3</th><th>x = x - 3</th></tr>
            <tr><th>*=</th><th>x *= 3</th><th>x = x 8 3</th></tr>
            <tr><th>/=</th><th>x /= 3</th><th>x = x / 3</th></tr>
            <tr><th>%=</th><th>x %= 3</th><th>x = x % 3</th></tr>
            <tr><th>&=</th><th>x &= 3</th><th>x = x & 3</th></tr>
            <tr><th>|=</th><th>x |= 3</th><th>x = x | 3</th></tr>
            <tr><th>^=</th><th>x ^= 3</th><th>x = x ^ 3</th></tr>
            <tr><th>>>=</th><th>x >>= 3</th><th>x = x >> 3</th></tr>
            <tr><th><<=</th><th>x <<= 3</th><th>x = x << 3</th></tr>
    </table>    
    <!-- /*3 page*/     -->
    <br><br>  <h1>Comparison operators</h1><br><br>
    <table>
            <tr><th>Operator</th><th>Name</th><th>example</th></tr>
            <tr><th>==</th><th>Equal to</th><th>x == y</th></tr>
            <tr><th>!=</th><th>Not Equal to</th><th>x ! y   </th></tr>
            <tr><th>></th><th>Greater than</th><th>x > y</th></tr>
            <tr><th><</th><th>Less than</th><th>x < y</th></tr>
            <tr><th>>=</th><th>Greater than or equal to</th><th>x >= y</th></tr>
            <tr><th><=</th><th>Less than or equal to</th><th>x <= y</th></tr>
    </table>
    <br><br> <h1>Logical operators</h1><br><br>
    <table>
            <tr><th>Operator</th><th>Example</th><th>Description</th></tr><br>
            <tr><th>&&</th><th>x < 5 &&  x < 10</th><th>Logical and Returns true if both statements are true</th></tr>
            <tr><th>||</th><th>x < 5 || x < 4</th><th>Logical or    Returns true if one of the statements is true</th></tr>
             <tr><th>!</th><th>! (x < 5 && x < 10)</th><th>Logical not   Reverse the result, returns false if the result is true </th></tr>
    </table>  <br><br>
    <br><br>
    <div class="mybut">
        <button class="pre"><a href="c++.php"> previous</button>
        <button class="next"><a href="c++2.html"> Next </a> </button>
        </div>

</div>  

<!-- content of C intro programming -->


<!-- footer -->

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
            <a href="../signup.html">Signup!</a>

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
</html>
';
        }
        else{
            header("Location: ../files/signin.html");
        }
        ?>