<?php
require_once 'class/paginator.php';
$sub = $_GET['query'];
//$tmp = split(" ", $sub);
$query = " ";

$query = "SELECT * FROM car WHERE license_no ='$sub'";

$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
//$query = "SELECT * FROM owner WHERE surname LIKE '%$tmp[0]' OR first_name LIKE '%$tmp[1]'";
$res = getData($limit, $page, $query);
?>

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>

    <tr>
      <th>
    Model - Make
      </th>
      <th>License No</th>
      <th>Engine No</th>
    </tr>

  </thead>
  <tbody>
  <?php
  $rsult = query($res);

  while($result = mysql_fetch_array($rsult)){
    ?>
    <tr>
      <td><a href="index.php?pag=vehicle&vehicle=<?php echo $result['idm'];?> "><?php echo $result['car_model'] . " " . $result['car_make'];?></a></td>
      <td><?php echo $result['license_no'];?></td>
      <td><?php echo $result['engine_no'];?></td>
    </tr>
  <?php
}
?>
</tbody>
</table>
</div>
</div>
<?php echo createLinks($links, 'pagination pagination-sm', $query, $limit, $page);?>
