<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
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
				<li><a href="contactus.php"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
      </ul>
    </div>
  </div>
  <p><br/></p>
  <p><br/></p>
  <p><br/></p>
  <div class="col-md-8 col-md-offset-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-2"></div>
    </div>
  <div class="container-fluid">
    <div class="col-md-2"></div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-success">
      <div class="panel-heading">Login</div>
      <form method="post">
					<div class="panel-body">
            <div class="row">
              <div class="col-md-12">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" required/>
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <label for="email">Password</label>
        <input type="password" class="form-control" id="password" required/>
      </div>
    </div>
        <p><br/></p>
        <div class="row">
          <div class="col-md-12">
        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
      </div>
      </div>
      </div>
    </form>
  </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</body>
<html>
