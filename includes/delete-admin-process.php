<?php
session_start();
if(isset($_POST["delete"]))
{
  $id = $_POST["id"];
  include "../database/dbconfig.php";

    $sql = "DELETE FROM `admin` WHERE `id` = '$id'";
    mysqli_query($con,$sql);
    header('Location:../index.php');

}

?>

?>
