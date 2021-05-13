<!DOCTYPE html>
<?php
session_start();
 ?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style>

  body {
    background-image: url(./images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
  .login {
    width: 30em;
    background-color: #9a240047;
    align-content: center !important;
    text-align: center;
    border: 1px solid #9a0007;
    margin-left: auto;
    margin-right: auto;
    margin-top: 8em;
    margin-bottom: 8em;
    height: 25em;
  }

  h2.login-heading {
    font-family: sans-serif;
    color: white;
  }

  .login-content {
    padding: 1em;
  }

  input.login-input {
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

  .white {
    color: white;
    font-family: sans-serif;
  }

  input.login-button {
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
          <li class="menu-item"><a class="menu-item-link" href="booking.php">BOOK</a></li>
          <li class="menu-item"><a class="menu-item-link" href="about.php">ABOUT</a></li>
          <li class="menu-item"><a class="menu-item-link" href="contact.php">CONTACT</a></li>
          <li class="menu-item"><a class="menu-item-link" href="login.php">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Header ends here -->

  <!-- Login box starts here -->
  <div class="login">
    <h2 class="login-heading">Login</h2>
    <div class="login-content">
      <form class="" action="./includes/login-process.php" method="post">
        <input type="text" class="login-input" name="username" value="" placeholder="Username" required>
        <br>
        <input type="password" class="login-input" name="password" value="" placeholder="Password" required>
        <br>
        <input type="radio" id="admin" name="type" value="1" required>
        <label for="admin" class="white">Admin</label>
        <input type="radio" id="user" name="type" value="2" required>
        <label for="user"  class="white">User</label>
        <input type="radio" id="driver" name="type" value="3" required>
        <label for="driver"  class="white">Driver</label>
        <br>
        <br>
        <?php
        if (isset($_SESSION["valid"])) {
          if ($_SESSION["valid"]==0) {
            echo "<script>alert('ERROR')</script>";

          }
        }

         ?>
        <input type="reset" class="login-button" value="Reset">
        <input type="submit" class="login-button" name="login" value="Login">
        <p style= "color:Yellow;font-size:19px; margin-top:0.5em;">Don't have an account?  &nbsp<a  href="sign-up.php">Sign up</a> </p>
        <p style= "color:Yellow;font-size:19px; margin-top:0em;">Want to be a driver?  &nbsp<a  href="register-driver.php">Driver Sign up</a> </p>
      </form>
    </div>
  </div>
  <!-- Login box ends here -->
  <?php
    require_once "includes/footer.php";
  ?>
</body>
</html>
