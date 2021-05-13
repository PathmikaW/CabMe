<?php
session_start();

if(isset($_POST["book"]))
{
  $pickup = $_POST["pickup"];
  $dropoff = $_POST["dropoff"];
  $time = $_POST["time"];
  $type=$_POST["type"];
  $_SESSION["rideDetailsId"] =  rand();
  $rideDetailsId = $_SESSION["rideDetailsId"];
  $userId = $_SESSION["loggedInUserID"];

  include "../database/dbconfig.php";

  $sql1 = "INSERT INTO `ride_details` (`id`, `pickup`, `dropoff`, `time`, `car_type`) VALUES ('".$rideDetailsId."','".$pickup."','".$dropoff."','".$time."','".$type."');";
  mysqli_query($con,$sql1);

  $sql2 = "INSERT INTO `ride` (`id`, `user`, `driver`, `ride_details`, `is-booked`) VALUES (NULL,'".$userId."','0','".$rideDetailsId."','0');";
  mysqli_query($con,$sql2);

  header('Location:../index.php');


}

?>
