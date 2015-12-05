<?php
//$id =$_SESSION['id'];
$result = " ";
$cr = " ";
$driver = " ";
if(isset($_GET['driver'])){
$id = $_GET['driver'];
$result = query("SELECT * FROM driver LEFT JOIN cars ON driver.vehicle = cars.id WHERE driver.id='$id'  ");

}else{
  $id = $_GET['vehicle'];
  $result = query("SELECT * FROM cars LEFT JOIN driver ON cars.id = driver.vehicle WHERE cars.ownercode='$id'");
  $reslt = query("SELECT * FROM cars WHERE id='$id' ");
  $cr = 1;
  $row = mysql_fetch_array($reslt);
  $idd = $row['id'];

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
                  <!--<li><a href="#loan" data-toggle="tab">Edit</a></li>-->
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
                                         </div>

                  </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="loan">
                      <?php// include('../loan_report.php'); ?>
                    </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
