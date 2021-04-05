<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "jualan");
$columns = array('total_amt', 'status');

$query = "SELECT DISTINCT orderid, product_cafe, product_title, product_qty , product_price, tanggal FROM checkoutdetail ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE orderid LIKE "%'.$_POST["search"]["value"].'%"
 OR product_cafe LIKE "%'.$_POST["search"]["value"].'%"
  OR product_title LIKE "%'.$_POST["search"]["value"].'%"
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
 $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="product_cafe">' . $row["product_cafe"] . '</div>';
  $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="product_title">' . $row["product_title"] . '</div>';
   $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="product_price">' . $row["product_price"] . '</div>';
    $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="product_qty">' . $row["product_qty"] . '</div>';
     $sub_array[] = '<div class="text" data-orderid="'.$row["orderid"].'" data-column="tanggal">' . $row["tanggal"] . '</div>';
      //$sub_array[] = '<div contenteditable class="update" data-orderid="'.$row["orderid"].'" data-column="status">' . $row["status"] . '</div>';

 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM checkoutdetail";
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
