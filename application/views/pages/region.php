

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Region
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Administrator</li>
        <li>Region</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-4">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-map-o"></i> Region - City</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addCity'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="cityInput">City</label>
                      <input type="text" name="city" class="form-control" id="cityInput" placeholder="City" required>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-4">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-map-o"></i> Region - Province</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addProvince'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="provinceInput">Province</label>
                      <input type="text" name="province" class="form-control" id="provinceInput" placeholder="Province" required>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-4">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-map-o"></i> Region - Country</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addCountry'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="countryInput">Country</label>
                      <input type="text" name="country" class="form-control" id="countryInput" placeholder="Country" required>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                  </div>
                </form>
              </div>
        </div>

        <!-- Contact Person -->
  

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-map-o"></i> City</h3>
            </div>

            <div class="box-body">
              <table id="tableCity" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>City</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($city as $key) {
                    echo "<tr>";
                    echo "<td>".$key['city_name']."</td>";
                    echo "</tr>";
                  }
                ?>
               <!--  <tr>
                  <td>Jakarta Selatan</td>
                </tr>
                 <tr>
                  <td>Jakarta Pusat</td>
                </tr>
                 <tr>
                  <td>Jakarta Utara</td>
                </tr>
                <tr>
                  <td>Jakarta Timur</td>
                </tr>
                <tr>
                  <td>Jakarta Barat</td>
                </tr> -->
              </tbody>
              </table>
            </div>
          </div>
        </div>

                <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-map-o"></i> Province</h3>
            </div>

            <div class="box-body">
              <table id="tableProvince" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Province</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($province as $key) {
                    echo "<tr>";
                    echo "<td>".$key['province_name']."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-map-o"></i> Country</h3>
            </div>

            <div class="box-body">
              <table id="tableCountry" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Country</th>
                  </tr>
                </thead>
                <tbody>
               <?php 
                  foreach ($country as $key) {
                    echo "<tr>";
                    echo "<td>".$key['country_name']."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
