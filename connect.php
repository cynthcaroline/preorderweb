<?php
  $connect = mysqli_connect("localhost", "root", "", "jualan");
  $sql = "INSERT INTO contact(name, email, subject, message) VALUES('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";
  if(mysqli_query($connect, $sql)){
    echo 'Pesan telah dikirim';
  }
?>

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
			</ul>
		</div>
	</div>
  <br>
  <br>
  <br>
  <div class="alert alert-success">
    <strong>Selesai!</strong> Pesan Anda sedang diproses....
    <p> Customer Service akan membalas pesan Anda langsung ke Email Anda</p>
    <address>
        <strong>Email</strong><br>
        <a href="mailto:#">cs@kantinbangau.com</a>
    </address>
    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  </div>
</body>
</html>
