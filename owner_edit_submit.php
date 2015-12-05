<?php
session_start();
include('conf/db_connect.php');
connect();
$id = $_POST['id'];
$first_name = $_POST['fname'];
$surname = $_POST['sname'];
$middle_name = $_POST['mname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$sex =$_POST['sex'];
$marital = $_POST['marital'];
$office = $_POST['office'];
$phone = $_POST['fone'];
$email = $_POST['email'];
$state = $_POST['state'];
$village = $_POST['village'];
$lga = $_POST['lga'];
$nationality = $_POST['nation'];
$nok = $_POST['nok'];
$relationship = $_POST['relay'];
$contact = $_POST['contact'];
$religion = $_POST['religion'];
$image_tempname = $_FILES['propic']['name'];
$ImageDir ="dist/img/";
$ImageName = $ImageDir . $image_tempname;
echo $ImageName;
if(move_uploaded_file($_FILES['propic']['tmp_name'],
        $ImageName)){

query("INSERT INTO owner(religion, first_name, surname, middle_name, dob, address, sex, marital, office, fone, email, state, village, lga, nation, nok, relay, contact) VALUES('$religion', '$first_name', '$surname', '$middle_name', '$dob', '$address', '$sex', '$marital', '$office', '$phone', '$email', '$state', '$village', '$lga', '$nationality', '$nok', '$relationship', '$contact')");

$new = $id .".jpg";
query("UPDATE owner SET  img_url='$new' WHERE id='$id'");
$newfilename = $ImageDir . $new;
echo $newfilename;
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
 ?>
