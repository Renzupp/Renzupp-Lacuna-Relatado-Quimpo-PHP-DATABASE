<?php
session_start();
include("connect.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design (Creative Dimensions)</title>
    <link rel="stylesheet" href="style1.css">

   
</head>
<body>
 
    <div class="hero-header">
        <div class="wrapper">
                <header>
                    <div class="logo">
                        <div class="logo-text">Creative Dimensions</div>   
                    </div>
                    <nav>
                        <div class="togglebtn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <ul class="navlinks">
                            <li><a href="./index1.php">Homepage</a></li>
                            <li><a href="./index2.php">About Us</a></li>
                            <li><a href="./index3.php">Art works</a></li>
                            <li><a href="./index4.php">Contact Us</a></li>
                            <li><a href="./index.php">Sign Out</a></li>
                        </ul>
                    </nav>
                </header>
                
                <div class="container">
                    <div class="hero-pic">
                        <img src="Assets/Logo 2.png" alt="profile pic">
                    </div>
                </div>

                <br><br><br><br><br>
                <div class="hero-text">
                    <h5>Hi fellow<span class=""><br>Multimedia art</span></h5>
                    <h1>Student</h1>

                    <br>

                    <p>This platform serves as your entry point for unlocking creativity, promoting teamwork, 
                     and displaying your artistic skills. At Creative Dimensions, our vision is to foster a 
                     future where each student can enhance their artistic expression. Become a part of our mission to transform 
                     the notion of creativity at Lyceum University-Philippines (Manila).
                    </p>   

                <div class="btn-group">
                    <a href="./index4.php" class="btn">Contact</a>
                </div>

               
        </div>
    </div> 

                <div class="Title">
                   <h2> Sample works </h2>
                </div>

                <div class="portfolio">
                    <img src="Assets/Art Exhibit.png" alt="">
                    <img src="Assets/Monument Valley Navajo.png" alt="">
                    <img src="Assets/Taal Volcano.png" alt="">
                    <img src="Assets/West Philippine Sea.png" alt="">
                    <img src="Assets/HourGlass.png" alt="">
                </div>
                
                <footer class="footer">
                    <div class="footer-content">
                        <p>© 2024 Creative Dimensions. All rights reserved.</p>
                    </div>
                </footer>
                
</body>      
</html>