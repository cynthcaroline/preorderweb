<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/user_login.png">
	<title>Login Pelapak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
	font-family: Arial;
	font-size: 17px;
	padding: 8px;
}
</style>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="adminlogin.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nama Lengkap</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Masuk</button>
		</div>
		<p>
			Belum mendapatkan akun Pelapak? <a href="adminregister.php">Daftar Sekarang!</a>
		</p>
	</form>
</body>
</html>
