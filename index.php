<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Zach Chaco">
  <link href="css/prototype.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <title> Educase | Welcome! </title>
</head>

<body>
  <!--Navbar-->
<header>
  <script src="jss/load.js"> </script>
  <div class='container'>
    <div id="logo_container">
      <a href="index.php">
        <img src="assets/logo.png" alt="Educase" class="logo">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="story.php">About Us</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>

<section id="showcase">
  <div class="container">
    <div>
      <h1> Change your Case. Change the World. </h1>
      <p>
        Introducing the world's first
        <b>modular</b>
        phone case. </br>
        Everytime you purchase a new mod, we donate to child college fund
      </p>
      <button id="temp_button">Open Newsletter Sub</button>
  </div>
</section>
<!-------------------------------->
<section id="boxes">
  <div class="container">
    <div class="box">
      <a href="https://placeholder.com"><img src="http://via.placeholder.com/200x100"></a>
      <h3> Style </h3>
      <p> Look at our Sexy Phone Case</p>
    </div>
    <div class="box">
      <a href="https://placeholder.com"><img src="http://via.placeholder.com/200x100"></a>
      <h3> Support Education </h3>
      <p> You buy a phone case, we give a portion of the proceeds to funding higher education</p>
    </div>
    <div class="box">
      <a href="https://placeholder.com"><img src="http://via.placeholder.com/200x100"></a>
      <h3> Make Change </h3>
      <p> Be a part of the ripple effect. You are going to need a phone case anyways, why not support a great cause too</p>
    </div>
  </div>
</section>

<footer>
  <p>Educase, copyright &copy; 2018</p>
  <ul<a href="#">
    <img src="assets/twitter_icon.png" alt="Twitter" class="social-media-icon">
  </a>
  <a href="#">
    <img src="assets/instagram_icon.png" alt="Instagram" class="social-media-icon">
  </a>
  <a href="#">
    <img src="assets/facebook_icon.png" alt="Facebook" class="social-media-icon">
  </a>
</footer>

<!--Newsletter Popup Container-->
<div id="newsletter_modal" class="modal" >
  <div class="modal_content">
    <div class="modal_header">
      <span class="close">&times;</span>
      <h1>Join Our Newsletter!</h1>
    </div>
    <div class="modal_body">
      <form>
        <input type="email" name="newsletter_subscribe" value="Your Email"></input>
        <button>Subcribe</button>
      </form>
      <p> One email per month. We promise not to spam</p>
    </div>
  </div>
</div>

</body>
<script src="jss/post_load.js"></script>

</html>
