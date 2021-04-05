<?php
session_start();

require 'db.php';
$output = '';
$uid = $_SESSION["uid"];
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT orderid, name, tanggal, mobile, kelas, schedule, total_amt , status FROM checkout
  WHERE user_id = '$uid'
 ";
}
else
{
 $query = "
  SELECT orderid, name, tanggal, mobile, kelas, schedule, total_amt , status FROM checkout WHERE user_id = '$uid'
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
     <th>Nama Pembeli</th>
     <th>Tanggal</th>
     <th>Mobile</th>
     <th>Kelas</th>
     <th>Jadwal Ambil</th>
     <th>Total Harga</th>
     <th>Status</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["orderid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["tanggal"].'</td>
    <td>'.$row["mobile"].'</td>
    <td>'.$row["kelas"].'</td>
    <td>'.$row["schedule"].'</td>
    <td>'.$row["total_amt"].'</td>
    <td>'.$row["status"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data tidak ditemukan!...';
}


?>
