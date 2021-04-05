<!DOCTYPE html>
<html>
 <head>
   <link rel="icon" type="image/png" href="images/user_login.png">
  <title>Pesanan Pelanggan</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  .navbar {
  margin-bottom: 50px;
  border-radius: 0;
  }

  .w3-lobster {
    font-family: "Lobster", serif;
  }
  </style>
 </head>
 <body>
   <nav class="navbar navbar-inverse">
<div class="container-fluid">
 <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <div class="w3-container w3-lobster">
   <a class="navbar-brand" href="index.php">Kantin Bangau</a>
 </div>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
   <ul class="nav navbar-nav">
     <li class="active"><a href="index.php">Home</a></li>
     <li><a href="orderview.php">Daftar Order</a></li>
     <li><a href="contactview.php">Keluhan Pelanggan</a></li>
   </ul>
 </div>
</div>
</nav>
<h5 align="center">
<button class="btn-success"> <strong>Tips!</strong>
  <p></p>
<p> Berikut ini daftar ID nya :</p>
<p><b>ID Kantin : 1 adalah 99 </p>
<p> ID Kantin : 2 adalah Mie Ayam 888 </p>
<p> ID Kantin : 3 adalah Bakso </p>
<p> ID Kantin : 4 adalah Es Minuman</p>
<p> ID Kantin : 5 adalah Wall's</p></b></button>
</h5>

<div class="container box">
   <h1 align="center">Pelanggan yang Memesan (Sesuaikan dengan ID Order)</h1>
   <br />
   <div class="table-responsive">
   <br />
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID Order</th>
       <th>Nama Pemesan</th>
       <th>Tanggal</th>
       <th>Nomor HP</th>
       <th>Kelas</th>
       <th>Waktu Ambil</th>
       <th>Status</th>
       <th>Total Belanja(Rp)</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
  <br>
  <br>
  <div class="container box">
   <h1 align="center">Makanan yang Dipesan Pelanggan (Sesuaikan dengan ID Order)</h1>
   <br />
   <div class="table-responsive">
   <br />
    <br />
    <table id="user_data1" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID Order</th>
       <th>ID Kantin</th>
       <th>Makanan</th>
       <th>Harga Satuan(Rp)</th>
       <th>Kuantitas</th>
       <th>Tanggal</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"orderview_connect.php",
     type:"POST"
    }
   });
  }

  function update_data(orderid, column_name, value)
  {
   $.ajax({
    url:"orderview_update.php",
    method:"POST",
    data:{orderid:orderid, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var orderid = $(this).data("orderid");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(orderid, column_name, value);
  });
 });



 //second box hoho

 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data1').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"foodview_connect.php",
     type:"POST"
    }
   });
  }

  });

</script>
