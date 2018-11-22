

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Venue of Training
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Venue of Training</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-ticket"></i> Venue</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addVenueOfTraining'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="venueInput">Venue</label>
                      <input type="text" name="venueName" class="form-control" id="venueInput" placeholder="Enter venue name" required>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="addressInput">Address</label>
                      <textarea class="form-control" name="address" rows="4" placeholder="Enter address" required></textarea>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="cityInput">City</label>
                       <select name="city" class="form-control" required>
                        <option value=""> </option>
                      <?php foreach ($city as $key) {
                        echo  "<option value=".$key['city_name'].">".$key['city_name']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="zipInput">Zip Code</label>
                      <input type="text" name="zipCode" class="form-control" id="zipInput" placeholder="Enter zip code">
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="provinceInput">Province</label>
                      <select name="province" class="form-control" required>
                        <option value=""> </option>
                      <?php foreach ($province as $key) {
                        echo  "<option value=".$key['province_name'].">".$key['province_name']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="countryInput">Country</label>
                      <select name="country" class="form-control" required>
                        <option value=""> </option>
                      <?php foreach ($country as $key) {
                        echo  "<option value=".$key['country_name'].">".$key['country_name']."</option>";
                      } ?>
                      </select>
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
                  <h3 class="box-title"><i class="fa fa-user"></i> Contact Person</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addVenueOfTrainingCP'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="contactPersonInput">Contact Person</label>
                      <input type="text" name="contactPerson" class="form-control" id="contactPersonInput" placeholder="Enter contact person" required>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="jobTitleInput">Job title</label>
                      <input type="text" name="jobTitle" class="form-control" id="jobTitleInput" placeholder="Enter job title" required>
                    </div>

                     <div class="form-group col-xs-9">
                      <label for="phoneNumberInput">Phone Number</label>
                      <input type="text" name="phoneNumber" class="form-control" id="phoneNumberInput" placeholder="Enter phone number" required>
                    </div>

                    <div class="form-group col-xs-3">
                      <label for="extInput">Ext</label>
                      <input type="text" name="ext" class="form-control" id="extInput" placeholder="Enter ext" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="faxInput">Fax Number</label>
                      <input type="text" name="faxNumber" class="form-control" id="faxInput" placeholder="Enter fax number" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="mobileInput">Mobile Phone</label>
                      <input type="text" name="mobilePhone" class="form-control" id="mobileInput" placeholder="Enter mobile number" required>
                    </div>
                   
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitContact">Submit</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-ticket"></i> Venue of Training</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Venue</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Country</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($venue as $key) {
                    echo "<tr>";
                    echo "<td>".$key['vot_name']."</td>";
                    echo "<td>".$key['vot_address']."</td>";
                    echo "<td>".$key['vot_city']."</td>";
                    echo "<td>".$key['vot_province']."</td>";
                    echo "<td>".$key['vot_country']."</td>";
                    echo "</tr>";
                  }
                ?>
               <!--  <tr>
                  <td>Hotel Mulia</td>
                  <td>Mr. Derry</td>
                  <td>0837478326</td>
                </tr>
                 <tr>
                 
                  <td>Hotel Vermont</td>
                  <td>Mr. Derry</td>
                  <td>0833424322</td>
                  
                </tr>
                 <tr>
                  <td>Balai Kartini</td>
                  <td>Mr. Rio</td>
                  <td>0833427328</td>     
                </tr> -->
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
  
