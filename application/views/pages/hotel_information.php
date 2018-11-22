  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        Hotel Information
        <small>MASTER DATA</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER DATA</li>
        <!-- <li>Database</li> -->
        <li><i class="fa fa-building"></i> HOTEL INFORMATION</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-building"></i> HOTEL INFORMATION</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addHotelInformation'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="companyInput">Hotel Name</label>
                      <input type="text" name="company_name" class="form-control" id="companyInput" placeholder="Enter hotel name" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="officeInput">Email</label>
                      <input type="text" name="email" class="form-control" id="officeInput" placeholder="Enter email" required>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="countryInput">Country</label>
                     <select name="Icountry" id="selectCountry" class="form-control" required>
                        <option value="country"> </option>
                      <?php foreach ($coh as $key) {
                        echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="floorInput">Website</label>
                      <input type="text" name="website" class="form-control" id="floorInput" placeholder="Enter website" required>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="provinceInput">Province</label>
                       <select name="Iprovince" id="selectProvince" class="form-control" disabled>
                        <option value="province"> </option>
                     
                      </select>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="floorInput">Phone</label>
                      <input type="text" name="phone" class="form-control" id="floorInput" placeholder="Enter phone" required>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="cityInput">City</label>
                       <select name="Icity" id="selectCity" class="form-control" disabled>
                        <option value="city"> </option>
                     
                      </select>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="floorInput">Fax</label>
                      <input type="text" name="fax" class="form-control" id="floorInput" placeholder="Enter fax" required>
                    </div>

                    <div class="form-group col-xs-6 ">
                      <label for="zipInput">Zip Code</label>
                      <input type="text" name="zip_code" class="form-control" id="zipInput" placeholder="Enter zip code" required>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="addressInput">Address</label>
                      <textarea class="form-control" name="address" rows="4" placeholder="Enter address" required style="resize: none; overflow: auto;"></textarea>
                    </div>
                
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" style="margin-left: 15px;" class="btn btn-primary btn-sm" title="Add Hotel Information"><span class="fa fa-plus">&nbsp</span> ADD</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> DATA HOTEL INFORMATION</h3>
            </div>

            <div class="box-body">
              <table id="tableDataCompany" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Hotel</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Phone</th>
                    <th>Fax</th> 
                    <th>Country</th> 
                    <th>Province</th>                  
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($hi as $key) {
                    $hi = $key['id_hotel'];
                    $hi2 = $key['name_country'];
                    $hi3 = $key['name_province'];
                    $hi4 = $key['name_city'];

                    echo "<tr>";
                    echo "<td>".$key['company_name']."</td>";
                    echo "<td>".$key['email']."</td>";
                    echo "<td>".$key['website']."</td>";
                    echo "<td>".$key['phone']."</td>";
                    echo "<td>".$key['fax']."</td>";
                    echo "<td>".$key['name_country']."</td>";
                    echo "<td>".$key['name_province']."</td>";
                    echo "<td>".$key['name_city']."</td>";
                    echo "<td>".$key['zip_code']."</td>";
                    echo "<td>".$key['address']."</td>";
                    
                    echo "<td style=\"text-align: center;\">
                    <button class=\"btn btn-info btn-sm ubahHotel\" title=\"Edit Data Hotel\" onclick=\"ubahHotel($hi);\" style=\"width:48%;\"><i class=\"fa fa-edit\"></i> </button> <button class=\"btn btn-danger btn-sm hiDelete\" title=\"Delete Data Hotel\" onclick=\"hiDelete($hi);\" style=\"width:48%;\"><i class=\"fa fa-trash\"></i> </button></td>";

                  }
                ?>
                <!-- <td>                                         
                  <div class="dropdown" style="text-align: center;">
                    <button class="btn btn-link btn-lg dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#" id="myLink" onclick="ubahHotel($hi);"><i style="color: #255981;" class="fa fa-edit"></i></a></li>
                      <li><a href="#"><i style="color: #D33724;" class="fa fa-trash"></i></a></li>
                    </ul>
                  </div>
                </td> -->
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

    <!-- Modal -->
  <div class="col-sm-12" width="60px">
                      <br/>
                      <div id="myModal" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateHotel'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Update Hotel Information</h4>
                            </div>

                            <!-- hidden id hotel -->
                            <input type="hidden" name="id_hotel" id="hiddenIdHotel">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="company_name" id="company_name">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" name="website" id="website">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" class="form-control" name="fax" id="fax">
                                      </div>
                                    </div>

                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>Address</label><br/>
                                        <textarea name="address" id="address" style="resize:none;width:850px;height:150px;"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="countryInput">Country</label>
                                          <select name="countryhi_modal" id="selectCountryHI_Modal" class="form-control" required>
                                            <option value="vcountryhi_modal"> </option>
                                          <?php foreach ($coh as $key) {
                                            echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                                          } ?>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="countryInput">Province</label>
                                          <select name="provincehi_modal" class="form-control" id="selectProvinceHI_Modal" >
                                            <option value="vprovincehi_modal"> </option>
                                            <?php foreach ($ph as $key) {
                                            echo  "<option value=".$key['id_province'].">".$key['name_province']."</option>";
                                          } ?>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="countryInput">City</label>
                                          <select name="cityhi_modal" class="form-control" id="selectCityHI_Modal" >
                                            <option value="vcityhi_modal"> </option>
                                            <?php foreach ($ch as $key) {
                                            echo  "<option value=".$key['id_city'].">".$key['name_city']."</option>";
                                          } ?>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" name="zip_code" id="zip_code">
                                      </div>
                                    </div>

                                  </div>

                                </div>
                                  <button type="submit" style="margin-left: 15px;" class="btn btn-primary btn-sm"><span class="fa fa-refresh"></span> Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
  </div>
                              

    <!-- End Modal -->