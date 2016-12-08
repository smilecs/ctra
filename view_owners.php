<?php
require_once 'class/paginator.php';
$limit = (isset($_GET['limit'])) ? $_GET['limit'] : 25;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
$links = (isset($_GET['links'])) ? $_GET['links'] : 7;
$query = "SELECT * FROM owner";
$res = getData($limit, $page, $query);

?>
<div class="row">
<div class="col-md-12">
<div class="box box-primary">
<div class="box-body">
  <form action="tmp.php" method="post">


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
        Vehicle Owners Table
      </th>
    </tr>
    <tr>
      <th>
        Full Name
      </th>
      <th>Address</th>
      <th>Phone</th>
      <th>
        Created By
      </th>
      <th>
        Date
      </th>
    </tr>

  </thead>
  <tbody>
  <?php
  $rsult = query($res);

  while($result = mysql_fetch_array($rsult)){
    ?>
  <tr>
    <td><a href="index.php?pag=profile&id=<?php echo $result['id'];?> "><?php echo $result['first_name'] . " " . $result['surname'];?></a></td>
    <td><?php echo $result['address'];?></td>
    <td><?php echo $result['fone'];?></td>
    <td><?php echo $result['created_by']; ?></td>
    <td><?php echo $result['date'];?></td>
    <td><a href="delete.php?id=<?php echo $result['id'];?> " btn="btn btn-warning">Delete</a></td>

  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
</div>
<?php echo createLinks($links, 'pagination pagination-sm', $query, $limit, $page);?>
