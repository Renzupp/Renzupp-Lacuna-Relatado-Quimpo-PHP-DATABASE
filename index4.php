<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style4.css">
    
    
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
    
    <section class="contact-section">
        <div class="wrappersec">
            <h1 class="contact-title">Get in Touch</h1>
            <p class="contact-description">
                We would be delighted to hear from you! Please use the form below to ask questions, offer recommendations, or simply say hi.
            </p>
            <form action="#" method="post" class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Write your message here..." rows="5" required></textarea>
                </div>
                <a href="./index3.php" class="btn">Back</a>
                <button type="submit" class="btn" onclick="showAlert()">Send Message</button>
                

            
              
            </form>
        </div>
    </section>
    
    <footer>
        <div class="wrapper">
            <p>&copy; 2024 Creative Dimensions. All rights reserved.</p>
        </div>
    </footer>
 
    <script defer src="./index1.js"></script>
</body>
</html>
