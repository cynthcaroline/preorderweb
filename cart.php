<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="gambar/cart.png">
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
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="w3-container w3-lobster">
				<a href="#" class="navbar-brand">Kantin Bangau</a>
			</div>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="faq.php"><span class="glyphicon glyphicon-modal-window"></span> FAQ</a></li>
				<li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="alert alert-info">
	<strong>Tips!</strong> Cara menambah kuantitas : ubah angka 1 pcs di kolom kuantitas dengan jumlah makanan yang ingin ditambah
	<p> Lalu, gunakan simbol centang untuk memverifikasi pertambahan kuantitas serta total harga belanja
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Summary</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Hapus/Tambah</b></div>
							<div class="col-md-2 col-xs-2"><b>Produk</b></div>
							<div class="col-md-2 col-xs-2"><b>Nama Produk</b></div>
							<div class="col-md-2 col-xs-2"><b>Kuantitas</b></div>
							<div class="col-md-2 col-xs-2"><b>Harga Produk</b></div>
							<div class="col-md-2 col-xs-2"><b>Harga Rp.</b></div>
						</div>
						<div id="cart_checkout"></div>
						<div align="right">
							<a href="checkout.php" class="btn btn-primary" id="cart_checkout">
								<span class="glyphicon glyphicon-shopping-cart"></span> Next to Check Out
							</a>
						</div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
</body>
</html>
