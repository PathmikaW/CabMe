<?php
session_start();
if(isset($_POST["assign"]))
{
  include "../database/dbconfig.php";
  $id = $_POST["id"];

  $sql = "UPDATE `ride` SET `is-booked` = '1' WHERE `ride_details` = '".$id."';";
  mysqli_query($con, $sql);
  header('Location:../driver/accept-booking.php');

}
?>
