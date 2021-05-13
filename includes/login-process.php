<?php
session_start();
if(isset($_POST["login"]))
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  $type=$_POST["type"];

  include "../database/dbconfig.php";

  /*admin*/
  if ($type == 1) {
    $sql="SELECT * FROM `admin` WHERE `username`='".$username."' and `password`='".$password."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0)
    {
      $_SESSION["type"] = "admin";
      while($row = mysqli_fetch_assoc($result)){
        $_SESSION["loggedInAdminID"] =$row['id'];
      }
      header('Location:../admin/admin.php');
    }else {

      header('Location:../login.php');
      $_SESSION["valid"] = 0;
    }
  }
  /*user*/
  elseif ($type == 2) {
    $sql="SELECT * FROM `user` WHERE `username`='".$username."' and `password`='".$password."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0)
    {
      $_SESSION["type"] = "user";
      while($row = mysqli_fetch_assoc($result)){
        $_SESSION["loggedInUserID"] =$row['id'];
      }
      header('Location:../index.php');
    }else {
      echo "<script>alert('ERROR')</script>";
      header('Location:../login.php');
      $_SESSION["valid"] = 0;
    }
  }

  /*driver*/
  elseif ($type == 3) {
    $sql="SELECT * FROM `driver` WHERE `username`='".$username."' and `password`='".$password."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0)
    {
      $_SESSION["type"] = "driver";
      while($row = mysqli_fetch_assoc($result)){
        $_SESSION["loggedInDriverID"] =$row['id'];
      }
      header('Location:../driver/accept-booking.php');
    }else {
      echo "<script>alert('ERROR')</script>";
      header('Location:../login.php');
      $_SESSION["valid"] = 0;
    }
  }
  else {
    $_SESSION["type"] ="0";
    header('Location:index.php');
  }
}
?>
