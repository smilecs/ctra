<?php
include('conf/db_connect.php');
connect();
$id = $_GET['id'];
$result = query("SELECT * FROM owner WHERE id='$id'");
$row = mysql_fetch_array($result);
$first_name = $row['first_name'];
$surname = $row['surname'];
$dob = $row['dob'];
$address = $row['address'];
$phone = $row['fone'];
$image = $row['image'];
$contact = $row['contact'];
$occupation = $row['occupation'];


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
      <?php
      $id = $_GET['id'];
      $result = query("SELECT * FROM cars WHERE ownercode='$id'");
      if(mysql_num_rows($result) < 1){
      echo "<h2>Vehicle details unavailable</h2>";
      }
      else{
      while ($row = mysql_fetch_array($result)) {
        $reg_no = $row['registration_no'];
        $model = $row['car_model'];
        $make = $row['car_make'];
        $ownercode = $row['ownercode'];
        $capacity = $row['capacity'];
        $license = $row['license_no'];
        $manufactured = $row['manufactured'];
        $color = $row['color'];
        $chassis = $row['chassis_no'];
        $engine = $row['engine_no'];
        $insurance = $row['insurance'];
        $img = $row['image'];
      ?>
      <h1 style="text-align:center">Vehicle Details (<?php echo $color . " " . $make . " " . $model; ?>)</h1><br/>
      <h3><label>LICENSE:</label><?php echo $license; ?></h3>
      <h3><label>MANUFACTURED:</label><?php echo $manufactured; ?></h3>
      <h3><label>ENGINE:</label><?php echo $engine; ?></h3>
      <?php
    }
  }
      ?>
    </div>
    <a href="index.php?pag=profile&id=<?php echo $id; ?>">Finish</a>
  </body>
</html>
