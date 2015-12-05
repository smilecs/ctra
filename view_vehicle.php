<?php
require_once 'class/paginator.php';
$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$cat = $_GET['cat'];
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
$query = "SELECT * FROM cars LEFT JOin owner ON cars.ownercode=owner.id WHERE category= '$cat'";
$res = getData($limit, $page, $query);
$QUE = query("SELECT * FROM category WHERE id='$cat'");
$rw = mysql_fetch_array($QUE);
$cat_name = $rw['category'];
?>

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
    <tr>
      <th>
        <?php echo $cat_name . "  " . "Vehicle Table"; ?>

      </th>
    </tr>
    <tr>
      <th>
    Model - Make
      </th>
      <th>Owner Name</th>
      <th>Phone</th>
    </tr>

  </thead>
  <tbody>
  <?php
  $rsult = query($res);

  while($result = mysql_fetch_array($rsult)){
    ?>
  <tr>
    <td><a href="index.php?pag=vehicle&vehicle=<?php echo $result['id'];?> "><?php echo $result['car_model'] . " " . $result['car_make'];?></a></td>
    <td><?php echo $result['first_name'] . " " . $result['surname'];?></td>
    <td><?php echo $result['fone'];?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
</div>
<?php echo createLinks($links, 'pagination pagination-sm', $query, $limit, $page);?>
