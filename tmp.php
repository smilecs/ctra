<?php
include('conf/db_connect.php');
$query = $_POST['query'];
redirect("index.php?pag=search2&query=$query");
 ?>
