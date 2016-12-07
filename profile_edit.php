<?php
$id =$_GET['id'];
$result = query("SELECT * FROM owner WHERE id='$id'");
$row = mysql_fetch_array($result);
$first_name = $row['first_name'];
$surname = $row['surname'];
$middle_name = $row['middle_name'];
$dob = $row['dob'];
$address = $row['address'];
$sex =$row['sex'];
$marital = $row['marital'];
$office = $row['office'];
$phone = $row['fone'];
$email = $row['email'];
$state = $row['state'];
$village = $row['village'];
$lga = $row['lga'];
$nationality = $row['nation'];
$nok = $row['nok'];
$imag = $row['image'];
$relationship = $row['relay'];
$contact = $row['contact'];
$occupation = $row['occupation'];
$religion = $row['religion'];?>
  <form class="form-horizontal" method="post" action="owner_edit_submit.php?id=<?php echo $id; ?>" enctype="multipart/form-data" role="form">
  <div class="form-group">
      <div class="col-xs-8">
      <label for="inputSurname" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="fname" class="form-control" id="inputName" value="<?php echo $first_name;?>">
      </div>
      </div>
      </div>
      <div class="form-group">
          <div class="col-xs-8">
          <label for="inputSurname" class="col-sm-2 control-label">SurName</label>
          <div class="col-sm-10">
            <input type="text" name="sname" class="form-control" id="inputName" value="<?php echo $surname ;?>">
          </div>
          </div>
          </div>
          <div class="form-group">
              <div class="col-xs-8">
              <label for="inputSurname" class="col-sm-2 control-label">Middle Name</label>
              <div class="col-sm-10">
                <input type="text" name="mname" class="form-control" id="inputName" value="<?php echo $middle_name;?>">
              </div>
              </div>
              </div>
    <div class="form-group">
       <div class="col-xs-8">
      <label for="inputSex" class="col-sm-2 control-label">Sex</label>
      <div class="col-sm-10">
        <input type="text" name="sex" class="form-control" id="inputSex3" value="<?php echo $sex;?>">
      </div>
    </div>
      </div>
      <div class="form-group">
       <div class="col-xs-8">
      <label for="inputbd" class="col-sm-2 control-label">Date of Birth</label>
      <div class="col-sm-10">
        <input type="date" name="dob" class="form-control" id="inputdob3" value="<?php echo $dob;?>">
      </div>
    </div>
      </div>
      <div class="form-group">
       <div class="col-xs-8">
      <label for="inputms" class="col-sm-2 control-label">Marital Status</label>
      <div class="col-sm-10">
        <input type="text"  name="marital" class="form-control" id="inputdob3" value="<?php echo $marital;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="inputof" class="col-sm-2 control-label">Office Address</label>
      <div class="col-sm-10">
        <input type="text" name="office" class="form-control" id="inputof" value="<?php echo $office;?>">
      </div>
    </div>
      </div>
      <div class="col-xs-8">
      <div class="form-group">
       <label for="inputrs"  class="col-sm-2 control-label">Resident Address</label>
      <div class="col-sm-10">
        <input type="text" name="address" class="form-control" id="inputra" value="<?php echo $address;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="inputpn" class="col-sm-2 control-label">Phone Number</label>
      <div class="col-sm-10">
        <input type="text" name="fone" class="form-control" id="inputpn" value="<?php echo $phone;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="email" class="col-sm-2 control-label">Email Address</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
      <div class="col-sm-10">
        <input type="text" name="occupation" class="form-control" id="Occupation" value="<?php echo $occupation;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="Village" class="col-sm-2 control-label">Village</label>
      <div class="col-sm-10">
        <input type="text" name="village" class="form-control" id="Village" value="<?php echo $village;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="lga" class="col-sm-2 control-label">LGA of Origin</label>
      <div class="col-sm-10">
        <input type="text" name="lga" class="form-control" id="lga" value="<?php echo $lga;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="state" class="col-sm-2 control-label">State of Origin</label>
      <div class="col-sm-10">
        <input type="text" name="state" class="form-control" id="state" value="<?php echo $state;?>">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="religion" class="col-sm-2 control-label">Religion</label>
      <div class="col-sm-10">
        <input type="text" name="religion" class="form-control" id="religion" value="<?php echo $religion;?>Religion">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="nationality" class="col-sm-2 control-label">Nationality</label>
      <div class="col-sm-10">
        <input type="text" name="nation" class="form-control" id="nationality" value="<?php echo $nationality;?>">
      </div>
    </div>
   </div>
<?php if($imag == "no"){

?>
   <div class="form-group">
   <div class="col-xs-8">
   <label for="up" class="col-sm-2 control-label">Upload Photo</label>
   <div class="col-sm-10">
       <input type="file" name="propic" /><br>

   </div>
   </div>
   </div>
   <?php
 }
 ?>


  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-10">
        <input type="submit" value="submit" />
      </div>
    </div>
   </div>
  </form>
