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
	<title>Admin</title>
	<link rel="stylesheet" href="../css/styles.css">
	<style>
	table {
		width: 100%;
		text-align: center;
		font-family: sans-serif;
		border-collapse: collapse;
		color: white;
	}
	body {
		background-image: url(../images/page.jpg);
		background-repeat: no-repeat;
		width: 100%;
		background-size: cover;
	}
	.th{
		background-color: #e04444;
		color: white;
	}

	a.add-admin {
		text-decoration: none;
		font-family: sans-serif;
		color: white;
		padding: 1em;
		background-color: #e04444;
		border: 1px solid black;
	}

	div.add-admin {
		margin-top: 2em;
		margin-bottom: 2em;
		margin-left: 2em;
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
	<div class="add-admin">
		<a class="add-admin" href="add-admin.php">Add Admin</a>
	</div>

	<table>

		<tr class="th">
			<td>ID</td>
			<td>Customer</td>
			<td>Delete</td>

		</tr>
		<?php
		include "../database/dbconfig.php";
		$adminId = $_SESSION["loggedInAdminID"];
		$sql = "SELECT * FROM `admin` WHERE `id` != '".$adminId."'";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_assoc($result)){
			?>
			<tr>
				<form class="" action="../includes/delete-admin-process.php" method="post">
					<td><?php echo $row['id']; ?></td>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<td><?php echo $row['username']; ?></td>
					<td>  <input type="submit" name="delete" value="Delete"></td>
				</form>
			</tr>
			<?php
		}
		?>

	</table>
	<div class="position">
	<?php
	  include "../includes/footer.php";
	?>
	</div>
</body>
</html>
