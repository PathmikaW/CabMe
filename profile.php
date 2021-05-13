<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["loggedInUserID"]))
{
  header('Location:login.php');
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="./css/styles.css">
  <style media="screen">
  .profile-contents {
    width: 100%;
    display: flex;
  }

  .profile-about {
    width: 20%;
    text-align: center;
    border: 1px solid #cccccc;
    margin: 1em;
    padding-bottom: 2em;
    padding-top: 1em;
  }

  .profile-details {
    width: 80% !important;
    text-align: center;
    margin: 1em;
  }

  .profile-about-list-items {
    font-family: sans-serif;
    color: white;
  }

  table {
    width: 100%;
    text-align: center;
    font-family: sans-serif;
    border-collapse: collapse;

  }
  .th{
    background-color: #9a0007;
    color: white;
  }

  td{
    color: white;
  }

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

  .editBtn {
    background-color: #9a0007;
    border: navajowhite;
    color: white;
    padding: 0.5em;
    margin-left: 1em;
    margin-right: 1em;
    font-size: 1.1em;
    margin-top: 1em;
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
  <div class="profile">
    <div class="profile-contents">
      <div class="profile-about">
        <div class="profile-about-list">
          <?php
          include "./database/dbconfig.php";
          $customer = $_SESSION["loggedInUserID"];
          $sql="SELECT * FROM `user` WHERE `id` = '".$customer."'";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <form class="" action="./edit-profile.php" method="post">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <div class="profile-about-list-items">
                <span class=""><?php echo $row['username']; ?></span>
              </div>
              <div class="profile-about-list-items">
                <span class=""><?php echo $row['contact_no']; ?></span>
              </div>
              <div class="profile-about-list-items">
                <input type="submit" class="editBtn" name="Edit" value="Edit">
              </div>
            </form>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="profile-details">
        <table>

          <tr class="th">
            <td>Pickup</td>
            <td>Drop</td>
            <td>Time</td>
            <td>Vehicle</td>
            <td></td>
          </tr>
          <?php
          include "./database/dbconfig.php";
          $customer = $_SESSION["loggedInUserID"];
          $sql = "SELECT * FROM `ride` `r`, `ride_details` `rd` WHERE `r`. `ride_details` = `rd`. `id` AND `user` = '".$customer."' AND `is-assigned` = '1' ";
          $result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?php echo $row['pickup']; ?></td>
              <td><?php echo $row['dropoff']; ?></td>
              <td><?php echo $row['time']; ?></td>
              <td><?php echo $row['car_type']; ?></td>
            </tr>
            <?php
          }
          ?>

        </table>
      </div>
    </div>
  </div>
  <div class="position">
    <?php
      include "includes/footer.php";
    ?>
  </div>
</body>
</html>
