<?php
require_once 'class/paginator.php';
$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$cat = $_GET['cat'];
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
$query = "SELECT * FROM cars";
$res = getData($limit, $page, $query);

?>

<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-body">
  <form action="tmp3.php" method="post">


<div class="form-group col-xs-8">

  <input type="text" class="form-control" name="query" id="start_date" placeholder="Search and press enter">
</div>
 </form>
 </div></div></div></div>


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
<?php echo createLinks($links, 'pagination pagination-sm', $query, $limit, $page, $cat);?>
