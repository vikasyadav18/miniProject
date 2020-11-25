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
    <title>C++ 2</title>
    <!-- <link rel="stylesheet" href="leftsidebar.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/html1.css">
  


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
            <li><a href="html1.php"><i class="fa fa-tasks"><span> Basic about html</span></i></a></li>
            <li><a href="html2.html"><i class="fa fa-tasks"><span> What is html element</span></i></a></li>
           <li><a href="html3.html"><i class="fa fa-rss"><span> How to View HTML Source?</span></i></a></li>
           <li><a href="html4.html"><i class="fa fa-rss"><span> The href Attribute</span></i></a></li>
           <li><a href="html5.html"><i class="fa fa-rss"><span> The alt Attribute</span></i></a></li>
           <li><a href="html6.html"><i class="fa fa-rss"><span> More</span></i></a></li>
           <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
        </ul>
      
    </div>
    <br>
    
<!-- content of C intro programming -->


<div style="text-align:justify" class="Ccontent">
    <h1>LEARN COMPLETE HTML</h1><br>
    <h2>Basics About HTML:</h2><br>
    <p> 
    <h3>What is HTML?</h3><br><br>
    HTML stands for Hyper Text Markup Language<br><br>
    HTML is the standard markup language for creating Web pages<br><br>
    HTML describes the structure of a Web page<br><br>
    HTML consists of a series of elements<br><br>
    HTML elements tell the browser how to display the content<br><br>
    HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.<br><br>
    </p>
    <pre>
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;title&gt; Page Title &lt;/title&gt;
    &lt;head&gt;
    &lt;body&gt;
    &lt;h1&gt;My First Heading &lt;/h1 &gt;
    &lt;p&gt; My first paragraph .&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </pre>
    <br><br><h2>Example Explained</h2><br><br>
    The &lt;  <span style="color: red"> !DOCTYPE html</span>&gt; declaration defines that this document is an HTML5 document<br><br>
    The &lt;  <span style="color: red"> html </span>&gt; element is the root element of an HTML page<br><br>
    The  &lt;  <span style="color: red"> head </span>&gt; element contains meta information about the HTML page<br><br>
    The  &lt;  <span style="color: red">  title </span>&gt; element specifies a title for the HTML page (which is shown in the browser s title bar or in the page tab)<br><br>
    The  &lt;  <span style="color: red">  body </span>&gt; element defines the documents body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.<br><br>
    The  &lt;  <span style="color: red"> h1 </span>&gt; element defines a large heading<br><br>
    The  &lt;  <span style="color: red">  p </span>&gt; element defines a paragraph<br><br>
    
     
    
     
    <a href=" http://www-personal.umich.edu/~csev/books/gae/lectures/02-HTML-Print.pdf">Book link to learn HTML</a><br><br>
    <br><br>
    

     <div class="mybut">
        <button class="pre"><a href="html1.php"> previous</button>
        <button class="next"><a href="html2.html"> Next </a> </button>
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