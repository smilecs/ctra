<?php
session_start();
$nam = $_SESSION['name'];

include('conf/db_connect.php');
connect();
$new = " ";
$date = date('Y-m-d');
$car = $_POST['car'];
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
$image_tempname = $_FILES['pic']['name'];
$image_tempname2 = $_FILES['thumb']['name'];
$ImageDir ="dist/driver/";
$ImageDir2 ="dist/thumb/";
$ImageName = $ImageDir . $image_tempname;
$ImageName2 = $ImageDir2 . $image_tempname2;
$driver = " ";
$time = time();
 $driver = $surname . strtotime($time);
 function acct($prefix){
   for($i=0; $i<7; $i++){
     $prefix .= rand(0, 9);
   }
   $result = query("SELECT * FROM driver WHERE id='$prefix'");
   if(mysql_num_rows($result) > 0){
     acct($prefix);
   }else{
     return $prefix;
   }
 }
  $driver = acct("dr");
  //$owner = $owner1 . ".jpg";


if(move_uploaded_file($_FILES['pic']['tmp_name'],
        $ImageName)){
          query("INSERT INTO driver(created_by, id, idd, date, vehicle, religion, first_name, surname, middle_name, dob, address, sex, marital, office, fone, email, state, village, lga, nation, nok, relay, contact) VALUES('$nam', '$driver', '$driver', '$date', '$car', '$religion', '$first_name', '$surname', '$middle_name', '$dob', '$address', '$sex', '$marital', '$office', '$phone', '$email', '$state', '$village', '$lga', '$nationality', '$nok', '$relationship', '$contact')");
          $id = mysql_insert_id();
          //$driver = $id;
          $new = $id .".jpg";
          query("UPDATE driver SET img='$new' WHERE idd='$driver'");
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
if(move_uploaded_file($_FILES['thumb']['tmp_name'],
        $ImageName2)){
          $newfilename = $ImageDir2 . $new;
          $animage = imagecreatefromjpeg ($ImageName2);
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

$first_name = $_POST['gfname'];
$surname = $_POST['gsname'];
$middle_name = $_POST['gmname'];
$dob = $_POST['gdob'];
$address = $_POST['gaddress'];
$sex =$_POST['gsex'];
$marital = $_POST['gmarital'];
$office = $_POST['goffice'];
$phone = $_POST['gfone'];
$email = $_POST['gemail'];
$state = $_POST['gstate'];
$village = $_POST['gvillage'];
$lga = $_POST['glga'];
$relationship = $_POST['grelay'];
$religion = $_POST['greligion'];
$image_tempname = $_FILES['gpic']['name'];
$ImageDir ="dist/guard/";
$ImageName = $ImageDir . $image_tempname;

if(move_uploaded_file($_FILES['gpic']['tmp_name'],
        $ImageName)){
query("INSERT INTO guard(created_by, driver, religion, first_name, surname, middle_name, dob, address, sex, marital, office, fone, email, state, village, lga) VALUES('$nam', '$driver', '$religion', '$first_name', '$surname', '$middle_name', '$dob', '$address', '$sex', '$marital', '$office', '$phone', '$email', '$state', '$village', '$lga')");
$id = mysql_insert_id();
$new = $id .".jpg";
query("UPDATE guard SET  image='$new' WHERE id='$id'");

$newfilename = $ImageDir . $new;
//echo $newfilename;
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

redirect("index.php");
 ?>
