<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> City Restaurant</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header>
  <div class="logo">
            <!-- <img src="logo.png" alt="Logo"> 
            <h2>City Restaurant</h2>
            -->
  </div>
  <nav>
    <ul>  <!-- navigation bar-->
        <li><a href="#">Home</a></li>
        <li><a href="#">Servises</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="#">Chiefs</a></li>
        <li><a href="#">BOOK US</a></li>
        <button id="book-us-btn"><a href="users_login.php">Login</a></button>
    </ul>
   
  </nav>
 
</header>
<div class="menue">
    <img src="images/Pic 1.jpg">
    <section class="content">
        <div class="text">
            <h1>Welcome to Our Restaurant</h1>
            <p>At our Restaurant, we serve with love and passion <br>for our customers to feel Amazed!</p>
            <button id="book-us-btn">Discover More</button>
        </div>
    </section>
</div>
                <!--THE MAIN CONTENT OF THE BODY -->
    <div class="all">
    <p> Delicious and Unique Dishes to Satisfy Every Palette!</p>
    <div class="in">
      <p>Amazing Cuisine at City Restaurant<br>
        <i>Welcome to City Restaurant where our Menu is filled with flavours from all over the World
          <br>Our talented Chiefs creates dishes using the<br> only freshest ingredients!
          <!--<br> with our unique flavours combination and modern cooking techniques. Our meals alaways exceeds --> 
          No matter what you are in the mood for - where you will be sure to find <br>something Delicious each time
        </i>
      </p>
        <section class="contents">
          <p>Featured Dishes</p>
              <section class="team">
                  <div class="team-member">
                    <img src="images/Pic 2.jpg" alt="Team Member 1">
                  </div>

                  <div class="team-member">
                    <img src="images/Pic 1.jpg" alt="Team Member 2">
                  </div>

                  <div class="team-member">
                    <img src="images/Pic 4.jpg" alt="Team Member 3">
                  </div>
              </section>
              <button id="book-us-btn">View More</button>
        </section>
          <p> Just Enjoy Your Food<br>
            <i>Simply Better! Every Day!</i>
          </p>

    </div>
  </div>

    <div class="inside">
        <div class="team-member">
              <img src="images/Pic 3.jpg" alt="Team Member 1">
          </div>

          <div class="footer-column">
              <h3>Operation Hours</h3>
              <p>Mon - Fri : 9am - 10pm</p>
              <p>Sat : 9am - 2pm</p>
              <p>Sun : Closed</p>
             
          </div>
    </div>
          <!-- FOOTER-->
  <footer class="footer">
    <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Chiefs</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>

    <div class="footer-column">
        <h3>Subscribe</h3>
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
    </div>

    <div class="footer-column">
        <h3>Contact Us</h3>
        <p>Plot #: 45 Cairo Road</p>
        <p>Lsk, Zambia</p>
        <p>Email: info@cityrestaurant.com</p>
        <p>Phone: +260 978 027 616</p>
    </div>

    <div class="icon">
        <p>
          <h3>Follow Us</h3> <br>
         <!-- <i class="fa fa-whatsapp"></i> -->
         <a href="www.facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a> 
         <a href="www.twitter.com"><i class="fa fa-twitter-square fa-2x"></i></a> 
         <a href="www.instagram.com"><i class="fa fa-instagram fa-2x"></i></a>
         <a href="www.linkedin.com"><i class="fa fa-linkedin-square fa-2x"></i></a> 
         </p> 
    </div>
 </footer>

</body>
<script src="js/index.js"></script>
</html>