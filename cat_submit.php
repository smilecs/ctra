<?php
include_once('conf/db_connect.php');
connect();
$cat = $_POST['cat'];
query("INSERT INTO category(category) VALUES($cat)");
redirect("index.php?pag=view_vehicle");
 ?>
