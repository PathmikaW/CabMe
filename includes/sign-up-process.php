<?php
session_start();
if(isset($_POST["register"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["password2"];
  $contact=$_POST["contact"];
  include "../database/dbconfig.php";

  if ($password === $confirmPassword) {
    $sql = "INSERT INTO `user` (`id`, `username`, `password`, `contact_no`) VALUES (NULL,'".$username."','".$password."','".$contact."');";
    mysqli_query($con,$sql);
    header('Location:../login.php');
  }else {
    header('Location:../error.php');
  }

}

?>

?>
