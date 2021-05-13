<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["loggedInDriverID"]))
{
  header('Location:../login.php');
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Accept Booking</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
  body {
    background-image: url(../images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
  table {
    width: 100%;
    text-align: center;
    font-family: sans-serif;
    border-collapse: collapse;
    color: white;
  }
  .th{
    background-color: #e04444;
    color: white;
  }
  .position{
    position: fixed;
    background-color: black;
   color: white;
   bottom: 0;

   left: 0;
   width: 100%;
  }
  </style>
</head>
<body>
  <?php
  if(!isset($_SESSION["loggedInDriverID"]))
  {
    include "../includes/driver-header-loggedOut.php";
  }else {
    include "../includes/driver-header-loggedIn.php";
  }
  ?>
  <table>

    <tr class="th">
      <td>Customer</td>
      <td>Pickup</td>
      <td>Drop</td>
      <td>Time</td>

      <td>Accept</td>
    </tr>
    <?php
    include "../database/dbconfig.php";
    $driverId = $_SESSION["loggedInDriverID"];
    $sql = "SELECT * FROM `ride` `r`, `ride_details` `rd` WHERE `r`. `ride_details` = `rd`. `id` AND `is-booked` = '0' AND `driver` =  '".$driverId."'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <form action="../includes/accept-booking-process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['ride_details'] ?>">
          <td><?php echo $row['user']; ?></td>
          <td><?php echo $row['pickup']; ?></td>
          <td><?php echo $row['dropoff']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td>
            <input type="submit" name="assign" value="Accept">
          </td>
        </form>
      </tr>
      <?php
    }
    ?>

  </table>
  <div class="position">
  <?php
    include "../includes/footer.php";
  ?>
</div>
</body>
</html>
