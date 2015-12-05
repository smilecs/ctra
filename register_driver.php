<?php
$id = " ";
if(isset($_GET['vehicle'])){
  $id = $_GET['vehicle'];
}
 ?>
        <div style="margin-center:100px;margin-top:70px;">
<div align="center"><font size="6">VEHICLE AND OWNER REGISTRATION <br>DRIVER'S PERMIT BIODATA </font></div>
<form class="form-horizontal" method="post" action="driver_registration_submit.php" enctype="multipart/form-data" role="form">
        <div class="form-group">
          <div class="col-xs-8">
          <label for="inputSurname" class="col-sm-2 control-label">Vehicle ID</label>
          <div class="col-sm-10">
            <input type="text" name="car" class="form-control" id="inputName" value="<?php echo $id; ?>" placeholder="00009098">
          </div>
          </div>
          </div>


    <div class="form-group">
        <div class="col-xs-8">
        <label for="inputSurname" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          <input type="text" name="fname" class="form-control" id="inputName" placeholder="First Name">
        </div>
        </div>
        </div>
    <div class="form-group">
        <div class="col-xs-8">
        <label for="inputSurname" class="col-sm-2 control-label">SurName</label>
        <div class="col-sm-10">
          <input type="text" name="sname" class="form-control" id="inputName" placeholder="Surname">
        </div>
        </div>
        </div>
        <div class="form-group">
            <div class="col-xs-8">
            <label for="inputSurname" class="col-sm-2 control-label">Middle Name</label>
            <div class="col-sm-10">
              <input type="text" name="mname" class="form-control" id="inputName" placeholder="Middle Name">
            </div>
            </div>
            </div>
  <div class="form-group">
     <div class="col-xs-8">
    <label for="inputSex" class="col-sm-2 control-label">Sex</label>
    <div class="col-sm-10">
      <input type="text" name="sex" class="form-control" id="inputSex3" placeholder="Sex">
    </div>
  </div>
    </div>
    <div class="form-group">
     <div class="col-xs-8">
    <label for="inputbd" class="col-sm-2 control-label">Date of Birth</label>
    <div class="col-sm-10">
      <input type="date" name="dob" class="form-control" id="inputdob3" placeholder="Date of Birth">
    </div>
  </div>
    </div>
    <div class="form-group">
     <div class="col-xs-8">
    <label for="inputms" class="col-sm-2 control-label">Marital Status</label>
    <div class="col-sm-10">
      <input type="text"  name="marital" class="form-control" id="inputdob3" placeholder="Marital Status">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="inputof" class="col-sm-2 control-label">Office Address</label>
    <div class="col-sm-10">
      <input type="text" name="office" class="form-control" id="inputof" placeholder="Office Address">
    </div>
  </div>
    </div>
    <div class="col-xs-8">
    <div class="form-group">
     <label for="inputrs"  class="col-sm-2 control-label">Resident Address</label>
    <div class="col-sm-10">
      <input type="text" name="address" class="form-control" id="inputra" placeholder="Residential Address">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="inputpn" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" name="fone" class="form-control" id="inputpn" placeholder="Phone Number">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="email" class="col-sm-2 control-label">Email Address</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
    <div class="col-sm-10">
      <input type="text" name="occupation" class="form-control" id="Occupation" placeholder="Occupation">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="Village" class="col-sm-2 control-label">Village</label>
    <div class="col-sm-10">
      <input type="text" name="village" class="form-control" id="Village" placeholder="Village">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="lga" class="col-sm-2 control-label">LGA of Origin</label>
    <div class="col-sm-10">
      <input type="text" name="lga" class="form-control" id="lga" placeholder="LGA of Origin">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="state" class="col-sm-2 control-label">State of Origin</label>
    <div class="col-sm-10">
      <input type="text" name="state" class="form-control" id="state" placeholder="State of Origin">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="religion" class="col-sm-2 control-label">Religion</label>
    <div class="col-sm-10">
      <input type="text" name="religion" class="form-control" id="religion" placeholder="Religion">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="nationality" class="col-sm-2 control-label">Nationality</label>
    <div class="col-sm-10">
      <input type="text" name="nation" class="form-control" id="nationality" placeholder="Nationality">
    </div>
  </div>
 </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="nok" class="col-sm-2 control-label">Next of Kin</label>
    <div class="col-sm-10">
      <input type="text" name="nok" class="form-control" id="nextofkin" placeholder="Next of Kin">
    </div>
  </div>
 </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="relstatus" class="col-sm-2 control-label">Relationship</label>
    <div class="col-sm-10">
      <input type="text" name="relay" class="form-control" id="relstatus" placeholder="Relationship Status">
    </div>
  </div>
 </div>
<div class="form-group">
<div class="col-xs-8">
<label for="kpn" class="col-sm-2 control-label">Phone Number</label>
<div class="col-sm-10">
<input type="number" name="contact" class="form-control" id="relstatus" placeholder="Next of Kin Phone Number">
</div>
</div>
</div>
<div class="form-group">
<div class="col-xs-8">
<label for="up" class="col-sm-2 control-label">Upload Photo</label>
<div class="col-sm-10">
    <input type="file" name="pic" /><br>
</div>
</div>
</div>

<div class="form-group">
<div class="col-xs-8">
<label for="up" class="col-sm-2 control-label">thumb print</label>
<div class="col-sm-10">
    <input type="file" name="thumb" /><br>
</div>
</div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>


<div align="center"><font size="5">....................................GUARANTOR................................</font></div><br>
  <div class="form-group">
      <div class="col-xs-8">
      <label for="inputSurname" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="gfname" class="form-control" id="inputName" placeholder="First Name">
      </div>
      </div>
      </div>
      <div class="form-group">
          <div class="col-xs-8">
          <label for="inputSurname" class="col-sm-2 control-label">SurName</label>
          <div class="col-sm-10">
            <input type="text" name="gsname" class="form-control" id="inputName" placeholder="Surname">
          </div>
          </div>
          </div>
          <div class="form-group">
              <div class="col-xs-8">
              <label for="inputSurname" class="col-sm-2 control-label">Middle Name</label>
              <div class="col-sm-10">
                <input type="text" name="gmname" class="form-control" id="inputName" placeholder="Middle Name">
              </div>
              </div>
              </div>
    <div class="form-group">
       <div class="col-xs-8">
      <label for="inputSex" class="col-sm-2 control-label">Sex</label>
      <div class="col-sm-10">
        <input type="text" name="gsex" class="form-control" id="inputSex3" placeholder="Sex">
      </div>
    </div>
      </div>
      <div class="form-group">
       <div class="col-xs-8">
      <label for="inputbd" class="col-sm-2 control-label">Date of Birth</label>
      <div class="col-sm-10">
        <input type="date" name="gdob" class="form-control" id="inputdob3" placeholder="Date of Birth">
      </div>
    </div>
      </div>
      <div class="form-group">
       <div class="col-xs-8">
      <label for="inputms" class="col-sm-2 control-label">Marital Status</label>
      <div class="col-sm-10">
        <input type="text"  name="gmarital" class="form-control" id="inputdob3" placeholder="Marital Status">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="inputof" class="col-sm-2 control-label">Office Address</label>
      <div class="col-sm-10">
        <input type="text" name="goffice" class="form-control" id="inputof" placeholder="Office Address">
      </div>
    </div>
      </div>
      <div class="col-xs-8">
      <div class="form-group">
       <label for="inputrs"  class="col-sm-2 control-label">Resident Address</label>
      <div class="col-sm-10">
        <input type="text" name="gaddress" class="form-control" id="inputra" placeholder="Residential Address">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="inputpn" class="col-sm-2 control-label">Phone Number</label>
      <div class="col-sm-10">
        <input type="text" name="gfone" class="form-control" id="inputpn" placeholder="Phone Number">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="email" class="col-sm-2 control-label">Email Address</label>
      <div class="col-sm-10">
        <input type="email" name="gemail" class="form-control" id="email" placeholder="Email Address">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="Occupation" class="col-sm-2 control-label">Occupation</label>
      <div class="col-sm-10">
        <input type="text" name="goccupation" class="form-control" id="Occupation" placeholder="Occupation">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="Village" class="col-sm-2 control-label">Village</label>
      <div class="col-sm-10">
        <input type="text" name="gvillage" class="form-control" id="Village" placeholder="Village">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="lga" class="col-sm-2 control-label">LGA of Origin</label>
      <div class="col-sm-10">
        <input type="text" name="glga" class="form-control" id="lga" placeholder="LGA of Origin">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="state" class="col-sm-2 control-label">State of Origin</label>
      <div class="col-sm-10">
        <input type="text" name="gstate" class="form-control" id="state" placeholder="State of Origin">
      </div>
    </div>
      </div>
  <div class="form-group">
       <div class="col-xs-8">
      <label for="religion" class="col-sm-2 control-label">Religion</label>
      <div class="col-sm-10">
        <input type="text" name="greligion" class="form-control" id="religion" placeholder="Religion">
      </div>
    </div>
      </div>

      <div class="form-group">
           <div class="col-xs-8">
          <label for="religion" class="col-sm-2 control-label">RelationShip</label>
          <div class="col-sm-10">
            <input type="text" name="grelay" class="form-control" id="religion" placeholder="Uncle">
          </div>
        </div>
          </div>

      <div class="form-group">
      <div class="col-xs-8">
      <label for="up" class="col-sm-2 control-label">Upload Photo</label>
      <div class="col-sm-10">
          <input type="file" name="gpic" /><br>

      </div>
      </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-10">
          <input type="submit" value="submit" />
        </div>
    </form>
