<?php
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

function total_vehicle($var){
  $result = query("SELECT * FROM cars WHERE category='$var'");
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
<div class="box">
<div class="box-body no-padding">
<table class="table">
  <tr>
    <th>
      Report Summary
    </th>
  </tr>
  <tr>
    <th>
      Total Drivers Registered
    </th>
    <td>
      <?php echo total_drivers(); ?>
    </td>
  </tr>
  <tr>
    <th>
      Total Vehicles
    </th>
    <td>
      <?php echo total_vehicles() ?>
    </td>
  </tr>
  <?php
  $result = query("SELECT * FROM category");
  while($row = mysql_fetch_array($result)){

  ?>  <tr>
    <th>
      Total <?php echo $row['category']; ?>
    </th>
    <td>
      <?php echo total_vehicle($row['id']) ?>
    </td>
  </tr>
<?php }
?>

</table>
</div>
</div>
