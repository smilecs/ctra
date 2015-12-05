<?php
session_start();
include('conf/db_connect.php');
connect();
//$id = $_POST['id'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
query("INSERT INTO account(uname, pwd) VALUES('$uname', '$pwd')");
redirect("create_account.php");
?>
