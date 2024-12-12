<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style3.css" />

    <script defer src="./index.js"></script>
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
        <br><br><br>
        <h1 class="header-title">Art Works</h1>
        <div class="portfolio-container">
          <div class="portfolioCard">
            <img
              src="Assets/Art Exhibit.png"
              alt=""
              class="modal-trigger"
              data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
            <img
              src="Assets/Monument Valley Navajo.png"
              alt=""
              class="modal-trigger"
              data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
            <img
              src="Assets/Taal Volcano.png"
              alt=""
              class="modal-trigger"
              data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
            <img
              src="Assets/West Philippine Sea.png"
              alt=""
              class="modal-trigger"
              data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
            <img
            src="Assets/Balenciaga.jpg"
            alt=""
            class="modal-trigger"
            data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
            <img
            src="Assets/HourGlass.png"
            alt=""
            class="modal-trigger"
            data-modal-src="Assets/Cover (Freelance Graphic Designer).png"
            />
          </div>
        </div>
      </div>

      <div id="imageModal" class="modal">
        <span class="modal-close">&times;</span>
        <img class="modal-content" id="modalImage" alt="Large View" />
      </div>
      <br><br>
      <footer class="footer">
        <div class="footer-content">
          <p>© 2024 Creative Dimensions. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </body>
</html>
