<?php
session_start();
if(isset($_POST["register"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["password2"];
  include "../database/dbconfig.php";

  if ($password === $confirmPassword) {
    $sql = "INSERT INTO `admin` (`id`, `username`, `password`) VALUES (NULL,'".$username."','".$password."');";
    mysqli_query($con,$sql);
    header('Location:../index.php');
  }else {
    header('Location:../error.php');
  }

}

?>

?>
