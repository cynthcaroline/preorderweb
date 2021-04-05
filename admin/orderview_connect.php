<?php
$connect = mysqli_connect("localhost", "kantinba_kantin", "gccOP8M09L", "kantinba_kantinbangau");
$columns = array('total_amt', 'status');

$query = "SELECT * FROM checkout ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE name LIKE "%'.$_POST["search"]["value"].'%"
 OR orderid LIKE "%'.$_POST["search"]["value"].'%"
 OR tanggal LIKE "%'.$_POST["search"]["value"].'%"
  OR mobile LIKE "%'.$_POST["search"]["value"].'%"
   OR kelas LIKE "%'.$_POST["search"]["value"].'%"
    OR schedule LIKE "%'.$_POST["search"]["value"].'%"
     OR total_amt LIKE "%'.$_POST["search"]["value"].'%"
      OR status LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].'
 ';
}
else
{
 $query .= 'ORDER BY orderid DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="orderid">' . $row["orderid"] . '</div>';
 $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="name">' . $row["name"] . '</div>';
  $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="tanggal">' . $row["tanggal"] . '</div>';
   $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="mobile">' . $row["mobile"] . '</div>';
    $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="kelas">' . $row["kelas"] . '</div>';
     $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="schedule">' . $row["schedule"] . '</div>';
      $sub_array[] = '<div contenteditable class="update" data-orderid="'.$row["orderid"].'" data-column="status">' . $row["status"] . '</div>';
      $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="total_amt">' . $row["total_amt"] . '</div>';

 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM checkout";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
