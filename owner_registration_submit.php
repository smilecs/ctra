<?php
session_start();
$nam = $_SESSION['name'];

include('conf/db_connect.php');
connect();
//$id = $_POST['id'];
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
$occupation = $_POST['occupation'];
$religion = $_POST['religion'];
$num = "1";
$date = date("Y-m-d");
$image_tempname = $_FILES['propic']['name'];
$ImageDir ="dist/img/";
$ImageName = $ImageDir . $image_tempname;
$driver = " ";
$prefix = "B";
$time = time();
function acct($prefix){
  for($i=0; $i<7; $i++){
    $prefix .= rand(0, 9);
  }
  $result = query("SELECT * FROM owner WHERE id='$prefix'");
  if(mysql_num_rows($result) > 0){
    acct($prefix);
  }else{
    return $prefix;
  }
}
 $owner1 = acct("ow");
 $owner = $owner1 . ".jpg";

if(move_uploaded_file($_FILES['propic']['tmp_name'],
        $ImageName)){
query("INSERT INTO owner(created_by, id, image, occupation, religion, first_name, surname, middle_name, dob, address, sex, marital, office, fone, email, state, village, lga, nation, nok, relay, contact, date, us) VALUES('$nam', '$owner1', '$owner', '$occupation', '$religion', '$first_name', '$surname', '$middle_name', '$dob', '$address', '$sex', '$marital', '$office', '$phone', '$email', '$state', '$village', '$lga', '$nationality', '$nok', '$relationship', '$contact', '$date', '$num')");
//query("UPDATE owner SET  img_url='$new' WHERE id='$id'");
$newfilename = $ImageDir . $owner;
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
 ?>

 <html>
   <head>

     <style>
       html,
       body {
         margin: 0;
         padding: 0;
         height: 100%;
         //font-family:"Nimbus Mono";
         font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
       }

       *,
       *:before,
       *:after {
         box-sizing: inherit;
       }

       h1 {
       	font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
       	font-size: 44px;
       	font-style: normal;
       	font-variant: normal;
       	font-weight: 500;
       	line-height: 26.4px;
       }
       h2 {
       	font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
       	font-size: 24px;
       	font-style: normal;
       	font-variant: normal;
       	font-weight: 500;
       	line-height: 26.4px;
       }
       h3 {
       	font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
       	font-size: 14px;
       	font-style: normal;
       	font-variant: normal;
       	font-weight: 500;
       	line-height: 15.4px;
       }
       p {
       	font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
       	font-size: 14px;
       	font-style: normal;
       	font-variant: normal;
       	font-weight: 400;
       	line-height: 20px;
       }

 </style>

   </head>
   <body>

     <h1 style="text-align:center">Bayelsa State Government</h1><br/>
 	<h1 style="text-align:center">Identity Card Data Slip</h1><br/>
     <!--<div style="width:200px; display:inline-block; float:left;" >
       <img src="<?php echo $newfilename; ?>" style="width:100%; height:auto"/>
     </div>-->
     <div style="display:inline-block; padding-left:20px">
       <small>Enrollment ID: <?php echo $prefix;?></small>
       <h1><label>NAME:</label><?php echo $first_name . "  " . $surname; ?></h1>
       <h2><label>DATE OF BIRTH & SEX:</label><?php echo $dob . "      " . $sex; ?></h2>
       <h2><label>ADDRESS:</label><?php echo $address; ?></h2>
       <h2><label>OCCUPATION:</label><?php echo $occupation; ?> </h2>
       <h3><label>CONTACT:</label><?php echo $contact; ?></h3>
     </div>
     <a href="index.php?pag=profile&id=<?php echo $owner1; ?>">Finish</a>
   </body>
 </html>
