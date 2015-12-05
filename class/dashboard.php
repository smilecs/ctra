<?php
//include('conf/db_connect.php');
//connect();
function date_splitter(){
  $date = date('Y-m-d');
  $tmp_date = split("-", $date);
  $tmp_date = $tmp_date[0] . "-" . $tmp_date[1];
  return $tmp_date;
}
function total_drivers(){
  $result = query("SELECT * FROM driver");

return mysql_num_rows($result);
}
function total_vehicles(){
  $result = query("SELECT * FROM cars");
  return mysql_num_rows($result);
}

function vehicles(){
$tmp_date = date_splitter();
$result = query("SELECT * FROM cars WHERE date LIKE '$tmp_date-%'");
return mysql_num_rows($result);
}

function drivers(){
$tmp_date = date_splitter();
$result = query("SELECT * FROM driver WHERE date LIKE '$tmp_date-%'");
return mysql_num_rows($result);
}

 ?>
