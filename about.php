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
    <p style="color:#ce4808;font-family:cursive;">CabMe Cab Service is a unique transporting experience provided to you in Sri Lanka.
       We have extended our service island wide with over 300 vehicles at your request.
       We specialize in providing transport service to our all our valued customers at an affordable price.
       CabMe offers you a well maintained fleet of budget cars, luxury cars, (etc.)
        with the reassurance of giving you a safe ride. We guarantee you to provide eligible drivers to confirm your safety.
         We maintain our responsibility in ensuring that you receive a comfortable,
      safe and customer-friendly ride towards the destination you wish to arrive.
       We ensure that we provide a good service to our customers and we highly appreciate the feedback from our customers</p>
    <div class="mySlides fade">
      <img src="./images/img4.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="./images/img2.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="./images/img3.jpg" style="width:100%">
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
  include "includes/footer.php";
?>
</body>
</html>
