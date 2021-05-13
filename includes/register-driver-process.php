<?php
session_start();
if(isset($_POST["register"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["password2"];
  $contact = $_POST["contact"];
  $cartype = $_POST["cartype"];
  $carnumber = $_POST["carnumber"];
  $maxpassengers = $_POST["maxpassengers"];

  include "../database/dbconfig.php";

  if ($password === $confirmPassword) {
    $sql = "INSERT INTO `driver` (`id`, `username`, `password`, `contact_no`, `car_type`, `car_number`, `max_passenger`) VALUES (NULL,'".$username."','".$password."','".$contact."','".$cartype."','".$carnumber."','".$maxpassengers."');";
    mysqli_query($con,$sql);
    header('Location:../login.php');
  }else {
    header('Location:../error.php');
  }

}

?>
