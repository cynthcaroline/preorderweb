<?php
include('function.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "Anda harus Log In dahulu..";
	header('location: adminlogin.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: adminlogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/user_login.png">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	body {
	  font-family: Arial;
	  font-size: 17px;
	  padding: 8px;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Menu Admin</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<br>
						<div align="right">
						<a href="index.php?logout='1'" class="btn btn-primary">Log Out
						</a>
					</div>

					</small>
					<br><br><br>
					<button type="button" class="btn1" onclick="window.location.href='orderview.php'"> Pesanan Produk </button>
					<button type="button" class="btn1" onclick="window.location.href='contactview.php'"> Keluhan Pelanggan </button>
					<br>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
