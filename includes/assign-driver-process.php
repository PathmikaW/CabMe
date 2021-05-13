<?php
session_start();
if(isset($_POST["assign"]))
{
  include "../database/dbconfig.php";
  $id = $_POST["id"];
  $driver = $_POST["driver"];

  $sql = "UPDATE `ride` SET `driver` = '".$driver."', `is-assigned` = '1' WHERE `ride_details` = '".$id."';";
  mysqli_query($con, $sql);
  header('Location:../admin/assign-driver.php');

}
?>
