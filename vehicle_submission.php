<?php
session_start();
$nam = $_SESSION['name'];
include_once('conf/db_connect.php');
connect();
$date = date('Y-m-d');
$reg_no = $_POST['registration_no'];
$model = $_POST['model'];
$make = $_POST['make'];
$ownercode = $_POST['ownercode'];
$capacity = $_POST['capacity'];
$license = $_POST['license'];
$manufactured = $_POST['manufactured'];
$color = $_POST['color'];
$cat = $_POST['category'];
$chassis = $_POST['chasis_no'];
$engine = $_POST['engine_no'];
$tmm = $reg_no . $engine;
$insurance = $_POST['insurance'];
$image_tempname = $_FILES['pic']['name'];
$ImageDir ="dist/vehicle/";
$ImageName = $ImageDir . $image_tempname;
$num = "1";
if(move_uploaded_file($_FILES['pic']['tmp_name'],
        $ImageName)){
query("INSERT INTO cars(created_by, idm, category, us, date, ownercode, manufactured, license_no, capacity, registration_no, engine_no, chassis_no, car_model, car_make, color, insurance) VALUES('$nam', '$tmm', '$cat', '$num', '$date', '$ownercode', '$manufactured', '$license', '$capacity', '$reg_no', '$engine', '$chassis', '$model', '$make', '$color', '$insurance')");
$new = $ownercode . ".jpg";
query("UPDATE cars SET image='$new' WHERE ownercode='$ownercode'");
$newfilename = $ImageDir . $new;
$animage = imagecreatefromjpeg ($ImageName);
$ox = imagesx($animage);
$oy = imagesy($animage);
$nx = 100;
$ny = floor($oy * (100 / $ox) );
$nm = imagecreatetruecolor( $nx, $ny);
imagecopyresized($nm, $animage, 0, 0, 0, 0, $nx, $ny, $ox, $oy );
imagejpeg($nm, $newfilename);
imagedestroy($animage);
imagedestroy($nm);
}
//redirect("index.php?pag=vehicle&vehicle=$tmm");
redirect("index.php?pag=profile&id=$ownercode");

 ?>
