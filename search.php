<?php
require_once 'class/paginator.php';
$sub = $_GET['query'];
$tmp = split(" ", $sub);
$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
$query = "SELECT * FROM driver WHERE surname LIKE '%" . $tmp[0] . "%' OR first_name LIKE '%" . $tmp[1] . "%'";
$res = getData($limit, $page, $query);
?>

<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
    <tr>
      <th>
        Vehicle Owners Table
      </th>
    </tr>
    <tr>
      <th>
        Full Name
      </th>
      <th>Address</th>
      <th>Phone</th>
    </tr>

  </thead>
  <tbody>
  <?php
  $rsult = query($res);

  while($result = mysql_fetch_array($rsult)){
    ?>
  <tr>
    <td><a href="index.php?pag=vehicle&driver=<?php echo $result['id'];?> "><?php echo $result['first_name'] . " " . $result['surname'];?></a></td>
    <td><?php echo $result['address'];?></td>
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
