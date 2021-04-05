<?php
session_start();

if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
 <head>
	 <link rel="icon" type="image/png" href="gambar/cart.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Orders </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <script src="js/jquery2.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
  .w3-lobster {
  	font-family: "Lobster", serif;
  }
  </style>

 </head>
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
   <h5 align="center">
   <button class="btn-info"> <b>Tips!</b> Beritahu Ibu/Pak Pemilik Vendor Kantin
   <p> untuk melakukan pembayaran atau mengambil pesanan </p>
   <p> jika Anda belum mendapatkan Pesanan Anda </p>
	 <p> Berikut ini daftar ID nya :</p>
   <p><b>ID Kantin : 1 adalah 99 </p>
   <p> ID Kantin : 2 adalah Mie Ayam 888 </p>
   <p> ID Kantin : 3 adalah Bakso </p>
   <p> ID Kantin : 4 adalah Es Minuman</p>
   <p> ID Kantin : 5 adalah Wall's</p></b>
 </button>
 </h5>
   <!---this is customer detail hehe --->
   <div class="container">
    <br />
    <h2 align="center">Detail Pembeli</h2><br />
    <div class="form-group">
    </div>
    <br />
    <div id="result1"></div>
   </div>
   <!---this is details of orders hehe --->
  <div class="container">
   <br />
   <h2 align="center">Orders</h2><br />
   <div class="form-group">
   </div>
   <br />
   <div id="result"></div>
   <br />
  </div>

 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"orderlist_connect.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
});

//ini adalah detail konsumen

$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"ordercustomer_connect.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result1').html(data);
   }
  });
}
 });

</script>
