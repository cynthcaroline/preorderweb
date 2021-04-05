<?php
$connect = mysqli_connect("localhost", "kantinba_kantin", "gccOP8M09L", "kantinba_kantinbangau");
if(isset($_POST["orderid"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE checkout SET ".$_POST["column_name"]."='".$value."' WHERE orderid = '".$_POST["orderid"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
