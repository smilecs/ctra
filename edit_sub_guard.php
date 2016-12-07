<?php
session_start();
include('conf/db_connect.php');
connect();
$id = $_GET['id'];
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
$image_tempname = $_FILES['propic']['name'];
$ImageDir ="dist/guard/";
$ImageName = $ImageDir . $image_tempname;
echo $ImageName;
$driver = " ";
$time = time();
 $owner = $surname . strtotime($time) . ".jpg";

if(move_uploaded_file($_FILES['propic']['tmp_name'],
        $ImageName)){
query("UPDATE guard SET  image='$owner' WHERE id='$id'");
$newfilename = $ImageDir . $owner;

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
query("UPDATE guard SET first_name='$first_name', surname='$surname', middle_name='$middle_name', dob='$dob', address='$address', sex='$sex', marital='$marital', office='$office', fone='$phone', email='$email', state='$state', village='$village', lga='$lga', nation='$nationality' WHERE id='$id'");
redirect("index.php");
?>
