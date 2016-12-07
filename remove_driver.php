<?php
include_once('conf/db_connect.php');
connect();
$id = $_GET['vehicle'];
query("DELETE FROM driver WHERE id='$id'");
redirect("index.php");
 ?>
