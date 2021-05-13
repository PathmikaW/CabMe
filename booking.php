<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["loggedInUserID"]))
{
  echo "<script>
    alert('You have to login first');
    window.location.href='login.php';
</script>";
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Booking</title>
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
    margin-top: 6em;
    height: 27em;
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

  select.login-input {
    background-color: antiquewhite;
    color: black;
    border: none;
    padding: 1em;
    margin-bottom: 1em;
    border-radius: 3px;
    width: 22em;
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

  .time {
    width: 25em !important;
  }
  </style>
</head>
<body>
  <?php
  if(!isset($_SESSION["loggedInUserID"]))
  {
    include "./includes/user-header-loggedOut.php";
  }else {
    include "./includes/user-header-loggedIn.php";
  }
  ?>

  <!-- Login box starts here -->
  <div class="login">
    <h2 class="login-heading">Book</h2>
    <div class="login-content">
      <form class="" action="./includes/booking-process.php" method="post">
        <input type="text" class="login-input" name="pickup" value="" placeholder="Pickup Location">
        <br>
        <input type="text" class="login-input" name="dropoff" value="" placeholder="Drop Off Location">
        <br>
        <input type="time" class="login-input time" name="time" value="" placeholder="Time">
        <br>
        <select class="login-input" name="type">
          <option>  Select your vehicle type... </option>
          <?php
          include "./database/dbconfig.php";
          $sql = "SELECT `car_type` FROM `driver`;";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_assoc($result))
          {
            ?>
            <option value="<?php echo $row['car_type']; ?>"> <?php echo $row['car_type']; ?> </option>
            <?php
          }
          ?>
        </select>
        <br>

        <br>

        <input type="reset" class="login-button" value="Reset">
        <input type="submit" class="login-button" name="book" value="Book">

      </form>
    </div>
  </div>
  <!-- Login box ends here -->

</body>
</html>
