

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Hotel
        <small>Hotel information</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-files-o"></i> SETTING</li>
        <li>Database</li>
        <li>Input Hotel</li>
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
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-building"></i> City</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-leaf"></i> Province</a></li>
              <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-globe"></i> Country</a></li>
              <!-- <li><a href="#tab_3" data-toggle="tab"><i class="fa fa-edit"></i> View Training</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                     <form role="form" action="<?php echo base_url('home/addinputCityHotel'); ?>" method="post">
                    <div class="box-body">
                      <div class="form-group col-xs-3">
                        <label for="roomInput">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" required>
                      </div>
                  
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <button type="submit" class="btn btn-primary"><span class="fa fa-plus">&nbsp</span>ADD</button>
                      <br /><br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-success">
                              <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Master Data City</h3>
                              </div>

                              <div class="box-body">
                                <table id="tablePersonalData" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <!-- <th>No.</th> -->
                                      <th>City</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                     if(! empty($ic)){
                                      // $no = 1;
                                        foreach ($ic as $key) {
                                          $id_city = $key['id_city'];
                                          $name_city = $key['name_city'];
                                         
                                          ?>
                                          <tr>
                                            <!-- <td> <?php echo $no++;?></td> -->
                                            <td> <?php echo $key['name_city'];?> </td>
                                            <td> 
                                              <button type="button" class="btn btn-info" onclick="ubahCityHotel(<?php echo $id_city; ?>)">Edit</button> 
                                              <button type="button" class="btn btn-danger" onclick="removeCityHotel(<?php echo $id_city ?>)"> Remove </button></td>

                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                                      }
                                      ?>

                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                </form>

                <div id="editModalCityHotel" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateCityHotel'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Master City</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <label for="TypeRoom">City</label>
                                            <input type="hidden" name="id_city" id="iDCity">
                                            <input type="text" class="form-control" id="NameCity" name="name_city_edit" />
                                          </div>
                                          <!-- footer modal -->
                                          <div class="box-footer">
                                            <button type="submit" class="btn btn-primary"><span class="fa fa-plus">&nbsp</span>ADD</button>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                </div>
              </div>




              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form role="form" action="<?php echo base_url('home/addProvinceHotel'); ?>" method="post">
                        <div class="box-body">
                          <div class="form-group col-xs-3 ">
                        <label for="InputProvinceHotel">Province</label>
                        <input type="text" name="province" class="form-control" id="province" placeholder="Enter Province" required>
                      </div>
                    
                    
                    </div>
               
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <button type="submit" class="btn btn-primary"><span class="fa fa-plus">&nbsp</span>ADD</button>
                      <br /><br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-success">
                              <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Master Data Province</h3>
                              </div>

                              <div class="box-body">
                                <table id="tableDetailsTypeRoom" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <!-- <th>Number</th> -->
                                      <th>Province</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php 
                                     if(! empty($iph)){
                                      // $no = 1;
                                        foreach ($iph as $key) {
                                          $id_province = $key['id_province'];
                                          $name_province = $key['name_province'];
                                         
                                          ?>
                                          <tr>
                                            <!-- <td> <?php echo $no++;?></td> -->
                                            <td> <?php echo $key['name_province'];?> </td>
                                            <td> 
                                              <button type="button" class="btn btn-info" onclick="ubahProvinceHotel(<?php echo $id_province; ?>)">Edit</button> 
                                              <button type="button" class="btn btn-danger" onclick="removeProvinceHotel(<?php echo $id_province ?>)"> Remove </button></td>
                                          </tr>
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                                      }
                                      ?>
                                  </form>

                                  <div id="editModalProvinceHotel" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateProvinceHotel'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Master Province</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <label for="TypeRoom">Province</label>
                                            <input type="hidden" name="id_province" id="idProvinceHotel">
                                            <input type="text" id="idNameProvinceHotel" name="name_province" />
                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                    </div>
                                  </div>
                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>             
              </div>





              <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                <form role="form" action="<?php echo base_url('home/addCountryHotel'); ?>" method="post">
                        <div class="box-body">
                          <div class="form-group col-xs-3 ">
                        <label for="InputCountryHotel">Country</label>
                        <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country" required>
                      </div>
                    </div>
               
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <button type="submit" class="btn btn-primary"><span class="fa fa-plus">&nbsp</span>ADD</button>
                      <br /><br /><br />
                      <div class="row">
                         <div class="col-md-12">
                            <div class="box box-success">
                              <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Master Data Country</h3>
                              </div>

                              <div class="box-body">
                                <table id="tableCountryHotel" class="table table-bordered table-hover table-condensed">
                                  <thead>
                                    <tr>
                                      <!-- <th>Number</th> -->
                                      <th>Country</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php 
                                     if(! empty($icohh)){
                                      // $no = 1;
                                        foreach ($icohh as $key) {
                                          $id_country = $key['id_country'];
                                          $name_country = $key['name_country'];
                                         
                                          ?>
                                          <tr>
                                            <!-- <td> <?php //echo $no++;?></td> -->
                                            <td> <?php echo $key['name_country'];?> </td>
                                            <td> 
                                              <button type="button" class="btn btn-info" onclick="ubahCountryHotel(<?php echo $id_country; ?>)">Edit</button> 
                                              <button type="button" class="btn btn-danger" onclick="removeCountryHotel(<?php echo $id_country ?>)"> Remove </button></td>
                                          </tr>
                                        <?php }
                                      } else {
                                        echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                                      }
                                      ?>
                                  </form>

                                  <div id="editModalCountryHotel" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateCountryHotel'); ?>" method="post">
                                      <div class="modal-dialog">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Master Province</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">
                                            <label for="CountryHotel">Province</label>
                                            <input type="hidden" name="id_country" id="idCountryHotel">
                                            <input type="text" id="idNameCountryHotel" name="name_country" />
                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                          </div>
                                        </div>
                                      </div>
                                  </form>
                                    </div>
                                  </div>
                                </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>             
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>

        <!-- Contact Person -->
       
      

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
