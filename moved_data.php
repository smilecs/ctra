<?php
include_once('conf/db_connect.php');
connect();
$file_dir = "dist/img/";
$result = query("SELECT * FROM owners");
while($row = mysql_fetch_array($result)){
$owner_code = $row['ownercode'];
//$new = $owner_code . ".bmp";
//query("UPDATE owners SET image='$new'");
$image = $row['image'];
$file = $file_dir . $owner_code;
file_put_contents($file, $image);

}
?>
