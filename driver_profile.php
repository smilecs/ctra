<?php
$id = $_GET['id'];
$result = query("SELECT * FROM driver WHERE id='$id'");
$row = mysql_fetch_array($result);
$first_name = $row['fname'];
$surname = $row['sname'];
$middle_name = $row['mname'];
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
$bvn = $row['bvn'];
$nok = $row['nok'];
$relationship = $row['relay'];
$contact = $row['contact'];
$occupation = $row['occupation'];
$religion = $row['religion'];
$vehicle = $row['vehicle'];
?>
<div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Profile</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <img class="profile-user-img img-responsive img-circle" src="../dist/img/<?php echo db_pic($id); ?>" alt="User profile picture">

                  <strong><i class="fa fa-book margin-r-5"></i>  Email</strong>
                  <p class="text-muted">
                    <?php echo $email; ?>
                  </p>

                  <hr>

                  <strong><i class="fa fa-book margin-r-5"></i>BVN</strong>
                  <p class="text-muted">
                    <?php echo $bvn; ?>
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
                  <li class="active"><a href="#account" data-toggle="tab">Account</a></li>
                  <li><a href="#loan" data-toggle="tab">Loan</a></li>
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="account">
                    <?php
                    $id = $_GET['id'];
                    $result = query("SELECT * FROM car WHERE id='$vehicle'");
                    if(mysql_num_rows($result) < 1){
                    echo "<h2>Account information unavailable</h2>";
                    }
                    else{
                    $row = mysql_fetch_array($result)
                      $reg_no = $_POST['registration_no'];
                      $model = $_POST['model'];
                      $make = $_POST['make'];
                      $ownercode = $_POST['ownercode'];
                      $capacity = $_POST['capacity'];
                      $license = $_POST['license'];
                      $manufactured = $_POST['manufactured'];
                      $color = $_POST['color'];
                      $chassis = $_POST['chasis'];
                      $engine = $_POST['engine_no'];
                      $insurance = $_POST['insurance'];

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
                              <img />
                            </td>
                          </tr>
                            <tr>

                            <th>Color</th>
                            <td>
                              <?php echo $color; ?>
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

                        </table>
                      </div><!-- /.box-body -->
                    </div>
                    <?php

                    }
                     ?>


                  </div><!-- /.tab-pane -->
                    <div class="tab-pane" id="loan">
                      <?php// include('../loan_report.php'); ?>
                    </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->
