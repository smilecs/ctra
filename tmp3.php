<?php
include('conf/db_connect.php');
$query = $_POST['query'];
redirect("index.php?pag=search3&query=$query");
 ?>
