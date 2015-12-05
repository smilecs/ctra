

<div style="margin-center:100px;margin-top:70px;">
<div align="center"><font size="6">VEHICLE AND OWNER REGISTRATION <br> VEHICLE PARTICULARS </font></div>
<form class="form-horizontal" action="vehicle_submission.php" method="post" role="form" enctype="multipart/form-data">
<div class="form-group">
    <div class="col-xs-8">
    <label for="inputregno" class="col-sm-2 control-label">Registration No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputregno" name="registration_no" placeholder="Registration Number">
    </div>
    </div>
    </div>

    <div class="form-group">
       <div class="col-xs-8">
      <label for="inputTov" class="col-sm-2 control-label">Owner ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputTov3" name="ownercode" placeholder="Owner ID">
      </div>
    </div>
      </div>

  <div class="form-group">
     <div class="col-xs-8">
    <label for="inputTov" class="col-sm-2 control-label">Type of Vehicle</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTov3" name="model" placeholder="Vehicle Type">
    </div>
  </div>
    </div>
    <div class="form-group">
     <div class="col-xs-8">
    <label for="inputmvm" class="col-sm-2 control-label">Vehicle Make</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputmvm" name="make" placeholder="Motor Vehicle Make">
    </div>
  </div>
    </div>
    <div class="form-group">
     <div class="col-xs-8">
    <label for="inputcap" class="col-sm-2 control-label">Capacity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputcap" name="capacity" placeholder="Capacity">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="inputln" class="col-sm-2 control-label">Licence No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputln" name="license" placeholder="Vehicle Licence Number">
    </div>
  </div>
    </div>
    <div class="col-xs-8">
    <div class="form-group">
     <label for="inputmy" class="col-sm-2 control-label">Manuf. Year</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputmy" name="manufactured" placeholder="Year of Manufacture">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="email" class="col-sm-2 control-label">Colour</label>
    <div class="col-sm-10">
      <input type="color" class="form-control" id="email" name="color" placeholder="Colour">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="chasis" class="col-sm-2 control-label">Chasis Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Chasis" name="chasis_no" placeholder="Chasis Number">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="engnum" class="col-sm-2 control-label">Engine Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="engnum" name="engine_no" placeholder="Engine Number">
    </div>
  </div>
    </div>
<div class="form-group">
     <div class="col-xs-8">
    <label for="insnum" class="col-sm-2 control-label">Insurance No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="insnum" name="insurance" placeholder="Insurance Number">
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
<label for="up" class="col-sm-2 control-label">Category</label>
<div class="col-sm-10">
    <select name="category" class="form-control">
    <?php
    $result = query("SELECT * FROM category");
    while($row = mysql_fetch_array($result)){
      $id = $row['id'];
      $name = $row['category'];
      ?>
      <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
        <?php
      }
     ?>
     </select>
</div>
</div>
</div>



  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <input type="submit" class="btn btn-default" value="submit" />
    </div>
  </div>
</form>
 </div>
