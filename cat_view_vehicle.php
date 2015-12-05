<?php
$result = query("SELECT * FROM category");
?>
<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
    <tr>
      <th>
        VEHICLE CATEGORIES
      </th>
    </tr>
    <tr>
      <th>
        S/N
      </th>
      <th>
        CATEGORY
      </th>
</tr>
</thead>
<tbody>
  <?php
  $i = 0;
  while($row = mysql_fetch_array($result)){
  ++$i;
  $name = $row['category'];
  $id = $row['id'];
  ?>
  <tr>
    <td>
      <?php echo $i; ?>
    </td>
    <td>
      <a href="index.php?pag=view_vehicle&cat=<?php echo $id; ?>"><?php echo $name; ?></a>
    </td>
  </tr>
  <?php
}
  ?>
</tbody>
</table>
