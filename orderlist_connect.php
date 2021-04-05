<?php
session_start();

require 'db.php';
$output = '';
$uid = $_SESSION["uid"];
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT DISTINCT orderid, product_cafe, product_title, product_qty , product_price, tanggal FROM checkoutdetail
  WHERE user_id = '$uid'
 ";
}
else
{
 $query = "
  SELECT DISTINCT orderid, product_cafe, product_title, product_qty ,  product_price,  tanggal FROM checkoutdetail WHERE user_id = '$uid'
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID Order</th>
     <th>ID Kantin</th>
     <th>Makanan</th>
     <th>Kuantitas</th>
     <th>Harga Satuan</th>
     <th>Tanggal</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["orderid"].'</td>
    <td>'.$row["product_cafe"].'</td>
    <td>'.$row["product_title"].'</td>
    <td>'.$row["product_qty"].'</td>
    <td>'.$row["product_price"].'</td>
    <td>'.$row["tanggal"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data tidak ditemukan!';
}


?>
