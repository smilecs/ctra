<?php
include('class/dashboard.php');
 ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total no Vehicles</span>
                  <span class="info-box-number"><?php echo total_vehicles(); ?></span>

                  <span class="progress-description">
                                    </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total no Drivers</span>
                  <span class="info-box-number"><?php echo total_drivers(); ?></span>
                  <span class="progress-description">

                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          <!-- /.row -->
<?php
$result = query("SELECT * FROM category");
while($row = mysql_fetch_array($result)){
  $name = $row['category'];
  $id = $row['id'];
  $rs = query("SELECT * FROM cars WHERE category='$id'");
  $num = mysql_num_rows($rs);
  ?>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Total no of <?php echo $name; ?></span>
        <span class="info-box-number"><?php echo $num; ?></span>
        <span class="progress-description">

        </span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col --><!-- /.row -->
<?php
}
 ?>
