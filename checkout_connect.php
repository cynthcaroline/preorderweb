<?php
session_start();
require 'db.php';
    //jangan ganggu dah bener
    if(isset($_SESSION["uid"])){
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");
    $_POST['tanggal'] = $tanggal;
		$_POST["user_id"] = $_SESSION["uid"];
    $_POST["total_amt"] = $_SESSION["total"];
    $sql1 = "INSERT INTO checkout(name, user_id, tanggal, mobile, kelas, schedule, total_amt, status)
     VALUES('".$_POST["name"]."','".$_POST["user_id"]."','".$tanggal."','".$_POST["mobile"]."','".$_POST["kelas"]."','".$_POST["schedule"]."','".$_POST["total_amt"]."','Pending')";
     if(mysqli_query($con, $sql1)){
       echo 'Pesanan Anda sedang diproses';
     }
     else {
       echo 'Gagal diproses! Gagal! Ulangi kembali masalah dikloter 1!';
     }
     //diatas sudah benar
    $orderid = mysqli_insert_id($con); //benar '".$orderid."'
    $uid = $_SESSION["uid"];
    $sql2 = "SELECT p_id, product_cafe, product_title, qty, price FROM cart WHERE user_id = '$uid'";
    $run_query = mysqli_query($con,$sql2);
    if(mysqli_query($con, $sql2)){
      var_dump(mysqli_query($con,$sql2));
      //echo 'Pesanan order diproses';
    }

    while($row=mysqli_fetch_assoc($run_query)){
     $rows[] = $row;
    }
    foreach ($rows as $data){
      $tanggal1 = date("Y-m-d H:i:s");
      $sql3 = "INSERT INTO checkoutdetail (orderid, productid, product_cafe, product_title, product_price, product_qty, tanggal, user_id)
    VALUES ('".$orderid."','".$data['p_id']."','".$data['product_cafe']."','".$data['product_title']."','".$data['price']."','".$data['qty']."','".$tanggal1."','".$uid."')";

    if(mysqli_query($con, $sql3)){
      var_dump(mysqli_query($con,$sql3));
      }
    }
  }
  $sql = "DELETE FROM cart WHERE user_id='$uid'";
  $run_query = mysqli_query($con,$sql);

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
    <strong>Selesai!</strong> Pesanan Anda sedang diproses....
    <p> Silahkan kembali ke menu awal</p>
    <p> Periksa menu Orders untuk melihat pesanan Anda </p>
    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  </div>
</body>
</html>
