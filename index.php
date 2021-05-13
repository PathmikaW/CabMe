<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <title>Cab Me</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>
    .slideshow-container{

    }

  </style>
</head>
<body>
  <?php
  session_start();

  if(isset($_SESSION["type"])){
    if ($_SESSION["type"] == "admin") {
      if (isset($_SESSION["loggedInAdminID"])) {
        include "./includes/admin-header-loggedIn.php";
      }else {
        include "./includes/admin-header-loggedOut.php";
      }
    }
    else if ($_SESSION["type"] == "user") {
      if (isset($_SESSION["loggedInUserID"])) {
        include "./includes/user-header-loggedIn.php";
      }else {
        include "./includes/user-header-loggedOut.php";
      }
    }
    else if ($_SESSION["type"] == "driver") {
      if (isset($_SESSION["loggedInDriverID"])) {
        include "./includes/driver-header-loggedIn.php";
      }else {
        include "./includes/driver-header-loggedOut.php";
      }
    }

  }
  else {
    include "./includes/header-loggedOut.php";
  }

  ?>
  <!-- Slider starts here-->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="./images/img3.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="./images/img2.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="./images/img4.jpg" style="width:100%">
    </div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
  var slideIndex = 0;
  showSlides();
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000);
  }
  </script>
  <!-- Slider ends here-->
<?php
  require "includes/footer.php";
?>
</body>
</html>
