<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Register Driver</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>

  body {
    background-image: url(./images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }

  .register-driver {
    width: 30em;
    background-color: #9a240047;
    align-content: center !important;
    text-align: center;
    border: 1px solid #9a0007;
    margin-left: auto;
    margin-right: auto;
    margin-top: 8em;
    margin-bottom: 8em;
    height: 39em;
  }

  h2.register-driver-heading {
    font-family: sans-serif;
    color: white;
  }

  .register-driver-content {
    padding: 1em;
  }

  input.register-driver-input {
    background-color: antiquewhite;
    color: black;
    border: none;
    padding: 1em;
    margin-bottom: 1em;
    border-radius: 3px;
    width: 20em;
    text-align: center;
    font-size: 1em;
  }

  input.register-driver-button {
    background-color: #9a0007;
    border: navajowhite;
    color: white;
    padding: 0.5em;
    margin-left: 1em;
    margin-right: 1em;
    font-size: 1.1em;
  }
  </style>
</head>
<body>
  <!-- Header starts here -->
  <div class="header_login">
    <div class="header content">
      <div class="logo"><a class="logo-link" href="index.php"><img class="logo-image" src="./images/logo.jpg" alt=""></a></div>

      <div class="menu">
        <ul class="menu-list">
          <li class="menu-item"><a class="menu-item-link" href="index.php">HOME</a></li>
          <li class="menu-item"><a class="menu-item-link" href="products.php">BOOK</a></li>
          <li class="menu-item"><a class="menu-item-link" href="about.php">ABOUT</a></li>
          <li class="menu-item"><a class="menu-item-link" href="https://localhost/vivo/contact-us.php">CONTACT</a></li>
          <li class="menu-item"><a class="menu-item-link" href="login.php">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Header ends here -->

  <!-- register-driver box starts here -->
  <div class="register-driver">
    <h2 class="register-driver-heading">Sign Up</h2>
    <div class="register-driver-content">
      <form class="" action="./includes/register-driver-process.php" method="post">
        <input type="text" class="register-driver-input" name="username" placeholder="Username" required>
        <br>
        <input type="password" class="register-driver-input" name="password" placeholder="Password" required>
        <br>
        <input type="password" class="register-driver-input" name="password2" placeholder="Confirm Password" required>
        <br>
        <input type="text" class="register-driver-input"  name="contact" placeholder="Contact Number" required>
        <br>
        <input type="text" class="register-driver-input"  name="cartype" placeholder="Car Type" required>
        <br>
        <input type="text" class="register-driver-input"  name="carnumber" placeholder="Car Number" required>
        <br>
        <input type="text" class="register-driver-input"  name="maxpassengers" placeholder="Max Passengers" required>
        <br>
        <br>
        <input type="reset" class="register-driver-button" name="" value="Reset">
        <input type="submit" class="register-driver-button" name="register" value="Register">
      </form>
    </div>
  </div>
  <!-- register-driver box ends here -->
  <?php
    include "includes/footer.php";
  ?>
</body>
</html>
