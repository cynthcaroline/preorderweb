<?php include('function.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/user_login.png">
	<title>Registrasi Pelapak</title>
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
	<h2>Register</h2>
</div>
<form method="post" action="adminregister.php">
	<?php echo display_error(); ?>
  <button class="btn primary">Akun Pelapak yang telah dibuat, dapat digunakan setelah dilakukan proses verifikasi. Dimohon menunggu hasil verifikasi. Terima Kasih...</button>
	<div class="input-group">
		<label>Nama Lengkap</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Kantin</label>
		<input type="cafeteria" name="cafeteria" value="<?php echo $cafeteria; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Konfirmasi Password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Daftar Sekarang!</button>
	</div>
	<p>
		Telah bergabung menjadi penjual di Kantin Bangau? Klik  <a href="adminlogin.php">Login</a>
	</p>
</form>
</body>
</html>
