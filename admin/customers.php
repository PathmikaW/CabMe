<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["loggedInAdminID"]))
{
  header('Location:../login.php');
}
?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Customers</title>
  <link rel="stylesheet" href="../css/styles.css">
  <style>
  body {
    background-image: url(../images/page.jpg);
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
  table {
    width: 100%;
    text-align: center;
    font-family: sans-serif;
    border-collapse: collapse;
    color: white;
  }
  .th{
    background-color: #e04444;
    color: white;
  }
  </style>
</head>
<body>
  <?php
  if(!isset($_SESSION["loggedInAdminID"]))
  {
    include "../includes/admin-header-loggedOut.php";
  }else {
    include "../includes/admin-header-loggedIn.php";
  }
  ?>
  <table>

    <tr class="th">
      <td>ID</td>
      <td>Customer</td>
      <td>Contact</td>
    </tr>
    <?php
    include "../database/dbconfig.php";
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>

        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['contact_no']; ?></td>

      </tr>
      <?php
    }
    ?>

  </table>

</body>
<footer>
  <div class="position">
	<?php
	  include "../includes/footer.php";
	?>
	</div>
</footer>
</html>
