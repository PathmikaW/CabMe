<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["loggedInAdminID"]))
{
	header('Location:../login.php');
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Add Admin</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>

  body {
    background-image: url(../images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
  .register {
    width: 30em;
    background-color: #9a240047;
    align-content: center !important;
    text-align: center;
    border: 1px solid #9a0007;
    margin-left: auto;
    margin-right: auto;
    margin-top: 8em;
    height: 27em;
  }

  h2.register-heading {
    font-family: sans-serif;
    color: white;
  }

  .register-content {
    padding: 1em;
  }

  input.register-input {
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

  input.register-button {
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
	<?php
  if(!isset($_SESSION["loggedInAdminID"]))
  {
    include "../includes/admin-header-loggedOut.php";
  }else {
    include "../includes/admin-header-loggedIn.php";
  }
  ?>

  <!-- register box starts here -->
  <div class="register">
    <h2 class="register-heading">Add Admin</h2>
    <div class="register-content">
      <form class="" action="../includes/add-admin-process.php" method="post">
        <input type="text" class="register-input" name="username" placeholder="Username" required>
        <br>
        <input type="password" class="register-input" name="password" placeholder="Password" required>
        <br>
        <input type="password" class="register-input" name="password2" placeholder="Confirm Password" required>
        <br>
        <br>
        <input type="reset" class="register-button" name="" value="Reset">
        <input type="submit" class="register-button" name="register" value="Register">
      </form>
    </div>
  </div>
  <!-- register box ends here -->
	<?php
	  include "../includes/footer.php";
	?>
</body>
</html>
