<?php
session_start();
$_SESSION["loggedInUserID"] = "";
$_SESSION["loggedInAdminID"] = "";
$_SESSION["loggedInDriverID"] = "";
session_destroy();
header('Location:index.php');
?>
