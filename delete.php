<?php
include('conf/db_connect.php');
$id = $_GET['id'];
query("DELETE * FROM owner WHERE id='$id'");
query("DELETE * FROM cars WHERE ownercode='$id'");
redirect("index.php?pag=view_owners");
 ?>
