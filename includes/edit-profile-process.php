<?php
session_start();
if(isset($_POST["edit"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["password2"];
  $contact=$_POST["contact"];
  $id = $_POST["id"];

  include "../database/dbconfig.php";

  if ($password === $confirmPassword) {
    $sql = "UPDATE `user` SET  `username` = '".$username."', `password` = '".$password."', `contact_no` = '".$contact."' WHERE `id` = '".$id."';";
    mysqli_query($con,$sql);
    header('Location:../profile.php');
  }else {
    header('Location:../error.php');
  }

}

?>

?>
