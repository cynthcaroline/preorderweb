<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=kantinba_kantinbangau", "kantinba_kantin", "gccOP8M09L");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM contact
 WHERE subject IN (".$search_text.")
 ORDER BY id DESC
 ";
}
else
{
 $query = "SELECT * FROM contact ORDER BY id DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["name"].'</td>
   <td>'.$row["email"].'</td>
   <td>'.$row["subject"].'</td>
   <td>'.$row["message"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="4" align="center">Tidak ada data yang ditemukan!</td>
 </tr>
 ';
}

echo $output;

?>
