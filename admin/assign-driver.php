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
  <title>Assign Driver</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
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
  body {
    background-image: url(../images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
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
  <table>

    <tr class="th">
      <td>Customer</td>
      <td>Pickup</td>
      <td>Drop</td>
      <td>Time</td>
      <td>Vehicle</td>
      <td>Driver</td>
      <td>Assign</td>
    </tr>
    <?php
    include "../database/dbconfig.php";
    $sql = "SELECT * FROM `ride` `r`, `ride_details` `rd` WHERE `r`. `ride_details` = `rd`. `id` AND `is-assigned` = '0' ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <form action="../includes/assign-driver-process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $row['ride_details'] ?>">
          <td><?php echo $row['user']; ?></td>
          <td><?php echo $row['pickup']; ?></td>
          <td><?php echo $row['dropoff']; ?></td>
          <td><?php echo $row['time']; ?></td>
          <td><?php echo $row['car_type']; ?></td>
          <td>
            <select name="driver">
              <option>  Select your driver </option>
              <?php
              $sql1 = "SELECT * FROM `driver`;";
              $result1 = mysqli_query($con, $sql1);
              while($row1 = mysqli_fetch_assoc($result1)){
                ?>
                <option value ="<?php echo $row1['id']; ?>"> <?php echo $row1['username']; ?> </option>
                <?php
              }
              ?>
            </select>
          </td>
          <td>
            <input type="submit" name="assign" value="Assign">
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
