<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="gambar/cart.png">
		<meta charset="UTF-8">
		<title>Kantin Bangau</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
	<style>
	.w3-lobster {
		font-family: "Lobster", serif;
	}
	</style>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="w3-container w3-lobster">
				<a href="#" class="navbar-brand">Kantin Bangau</a>
			</div>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="faq.php"><span class="glyphicon glyphicon-modal-window"></span> FAQ</a></li>
				<li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Register</div>
					<div class="panel-body">

					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="first_name">Nama Depan</label>
								<input type="text" id="first_name" name="first_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="first_name">Nama Belakang</label>
								<input type="text" id="last_name" name="last_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Masukan Password Kembali</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Nomor Telepon</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="kelas">Kelas</label>
								<input type="text" id="kelas" name="kelas"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Daftar" type="button" id="signup_button" name="signup_button"class="btn btn-primary btn-lg">
							</div>
						</div>

					</div>
					</form>
					<div class="panel-footer"><a href = "rotasiliner.php">Kantin Bangau x Rotasi Liner</a> &copy; 2018</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
