<?php
//$id =$_SESSION['id'];
$result = " ";
$cr = " ";
$idd = " ";
$driver = " ";
if(isset($_GET['driver'])){
$id = $_GET['driver'];
$result = query("SELECT * FROM driver LEFT JOIN cars ON driver.vehicle = cars.idm WHERE driver.id='$id'  ");

}else{
  $id = $_GET['vehicle'];
  $result = query("SELECT * FROM cars LEFT JOIN driver ON cars.idm = driver.vehicle WHERE cars.idm='$id'");
  //$reslt = query("SELECT * FROM cars WHERE ownercode='$id' ");
  $cr = 1;
  //$row = mysql_fetch_array($reslt);
  //$idd = $row['idm'];
  $idd = $id;

}
$row = mysql_fetch_array($result);
$driver = $row['idd'];
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
$relationship = $row['relay'];
$contact = $row['contact'];
$occupation = $row['occupation'];
$religion = $row['religion'];
$image = $row['img'];
//echo $image;
?>

<div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">DRIVER</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <img class="profile-user-img img-responsive img-circle" src="dist/driver/<?php echo $image; ?>" alt="User profile picture">

                  <strong><i class="fa fa-book margin-r-5"></i>  Email</strong>
                  <p class="text-muted">
                    <?php echo $email; ?>
                  </p>
                  <strong><i class="fa fa-book margin-r-5"></i>Driver ID</strong>
                  <p class="text-muted">
                    <?php echo $driver; ?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Phone</strong>
                  <p class="text-muted"><?php echo $phone; ?></p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted"><?php echo $address; ?></p>
                  <hr>
                  <strong><i class="fa fa-pencil margin-r-5"></i> Occupation</strong>
                  <p>
                    <span class="label label-primary"><?php echo $office; ?></span>
                    <span class="label label-primary"><?php echo $occupation; ?></span>
                  </p>


                  <strong><i class="fa fa-pencil margin-r-5"></i> State & LGA of Origin</strong>
                  <p>
                    <span class="label label-primary"><?php echo $state; ?></span>
                    <span class="label label-primary"><?php echo $lga; ?></span>
                  </p>

                  <hr>
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Date of Birth</strong>
                  <p class="text-muted"><?php echo $dob; ?></p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Sex</strong>
                  <p class="text-muted"><?php echo $sex; ?></p>

                  <hr>

        <strong><i class="fa fa-pencil margin-r-5"></i> Next Of Kin Details</strong>
          <p>
            <?php echo $nok; ?></p>
          <p><?php echo $contact; ?>
          </p>
          <p><?php echo $relationship; ?>
          </p>


                </div><!-- /.box-body -->
              </div><!-- /.box -->


              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                </div><!-- /.box-header -->

              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#account" data-toggle="tab">Vehicles</a></li>
                  <li><a href="#loan" data-toggle="tab">Edit</a></li>

                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="account">
                    <?php
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

                    <div class="box">
                      <div class="box-header">
                      </div><!-- /.box-header -->
                      <div class="box-body no-padding">
                      <table class="table table-condensed">
                          <tr>
                            <th>Registration No</th>
                            <td><?php echo $reg_no;?></td>
                          </tr>
                          <tr>
                            <th>Vehicle</th>
                            <td> <?php echo $model . " " . $make; ?> </td>
                           </tr>
                          <tr>
                            <th>Capacity</th>
                            <td><?php echo $capacity; ?></td>
                          </tr>
                          <tr>
                            <td rowspan="4">
                              <img src="dist/vehicle/<?php echo $img; ?>" height="50px" width="50px"/>
                            </td>
                          </tr>
                            <tr>

                            <th>Color</th>
                            <td>
                              <input type="color" value="<?php echo $color; ?>" readonly="true" />
                            </td>
                          </tr>
                          <tr>

                            <th>Insurance</th>
                            <td>
                              <?php echo $insurance; ?>
                            </td>

                          </tr>
                          <tr>

                            <th>Chassis & Engine</th>
                            <td>
                              <?php echo $chassis . " " . $engine; ?>
                            </td>

                          </tr>
                          <tr>
                            <th>
                              License
                            </th>
                            <td>
                              <?php echo $license; ?>
                            </td>
                          </tr>
                          <?php
                          if($cr == 1){?>
                          <tr>
                            <td>
                              <a class="btn btn-primary" href="index.php?pag=register_driver&vehicle=<?php echo $idd; ?>">Add Driver</a>
                            </td>

                            <td>
                              <a class="btn btn-danger"href="index.php?pag=remove_driver&vehicle=<?php echo $idd; ?>">Remove Driver</a>
                            </td>
                          </tr>
<?php } ?>
                        </table>
                      </div><!-- /.box-body -->
                    </div>
                    <?php
                    $result = query("SELECT * FROM guard WHERE driver='$driver'");
                    while($row = mysql_fetch_array($result)){
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
                    $relationship = $row['relay'];
                    $contact = $row['contact'];
                    $occupation = $row['office'];
                    $religion = $row['religion'];
                    $image = $row['image'];
                     ?><br>

                                         <div class="box">
                                           <div class="box-header">
                                           <h4>Guarrantor</h4>
                                           </div><!-- /.box-header -->
                                           <div class="box-body no-padding">
                                           <table class="table table-condensed">
                                               <tr>
                                                 <th>Name</th>
                                                 <td><?php echo $surname ."  " . $first_name;?></td>
                                               </tr>
                                          <tr>
                                                 <th>State</th>
                                                 <td> <?php echo $state; ?> </td>
                                                </tr>
                                               <tr>
                                                 <th>LGA</th>
                                                 <td><?php echo $lga; ?></td>
                                               </tr>
                                               <tr>
                                                 <td rowspan="4">
                                                   <img src="dist/guard/<?php echo $image; ?>" height="50px" width="50px"/>
                                                 </td>
                                               </tr>
                                                 <tr>

                                                 <th>Contact</th>
                                                 <td>
                                                   <?php echo $phone;?>
                                                 </td>
                                                 <th>
                                                   Email
                                                 </th>
                                                 <td>
                                                   <?php echo $email; ?>
                                                 </td>
                                               </tr>
                                               <tr>

                                                 <th>Address</th>
                                                 <td>
                                                   <?php echo $address; ?>
                                                 </td>

                                               </tr>
                                               <tr>

                                                 <th>Office Address</th>
                                                 <td>
                                                   <?php echo $occupation; ?>
                                                 </td>

                                               </tr>

                                             </table>
                                           </div><!-- /.box-body -->
                                         </div><?php }?>

                  </div><!-- /.tab-pane -->

                    <div class="tab-pane" id="loan">
                      <?php

                      $result = query("SELECT * FROM driver WHERE idd='$driver'");
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
                      $image = $row['img'];
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
                      <?php if($image == "0")
                      {
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
                        <a href="index.php?pag=gr_edit&id=<?php echo $driver; ?>" class="btn btn-primary">Edit Guarantor</a>
                    </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="edit">
                    <?php
                //    include('gr_edit.php');
                     ?>
                   </div>



                  </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          <!-- /.row -->
