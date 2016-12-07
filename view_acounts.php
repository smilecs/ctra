<?php
include_once('conf/db_connect.php');
connect();
$query = "SELECT * FROM account";
//$res = getData($limit, $page, $query);

?>
<div class="box">
<div class="box-body no-padding">
<table class="table">
  <thead>
    <tr>
      <th>
Account Table
      </th>
    </tr>
    <tr>
      <th>
       Name
      </th>
      <th>Password</th>
    </tr>

  </thead>
  <tbody>
  <?php
  $rsult = query($query);

  while($result = mysql_fetch_array($rsult)){
    ?>
  <tr>
    <td><?php echo $result['uname'];?></td>
    <td><?php echo $result['pwd'];?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
</div>
