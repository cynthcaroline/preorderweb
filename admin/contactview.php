<?php

$connect = new PDO("mysql:host=localhost;dbname=kantinba_kantinbangau", "kantinba_kantin", "gccOP8M09L");

$query = "SELECT DISTINCT subject FROM contact ORDER BY subject ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();


?>
<html>
 <head>
	 <link rel="icon" type="image/png" href="images/user_login.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keluhan Pelanggan</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-select.min.css" rel="stylesheet" />
  <script src="js/bootstrap-select.min.js"></script>
  <style>

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
  <div class="container">
   <br />
   <h2 align="center">Keluhan dan Saran Pelanggan</h2><br />

   <select name="multi_search_filter" id="multi_search_filter" multiple class="form-control selectpicker">
   <?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["subject"].'">'.$row["subject"].'</option>';
   }
   ?>
   </select>
   <input type="hidden" name="hidden_subject" id="hidden_subject" />
   <div style="clear:both"></div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Nama Pelanggan</th>
       <th>Email</th>
       <th>Judul</th>
       <th>Pesan Pelanggan</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
   <br />
   <br />
   <br />
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query='')
 {
  $.ajax({
   url:"cview.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }

 $('#multi_search_filter').change(function(){
  $('#hidden_subject').val($('#multi_search_filter').val());
  var query = $('#hidden_subject').val();
  load_data(query);
 });

});
</script>
