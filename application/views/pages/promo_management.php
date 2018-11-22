  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        PROMO
        <small>MASTER DATA</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER DATA</li>
        <!-- <li>Database</li> -->
        <li><i class="fa fa-tags"></i> PROMO</li>
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
                  <h3 class="box-title"><i class="fa fa-tags"></i> PROMO</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addPromo'); ?>" method="post">
                  <div class="box-body">
                    <input type="hidden" name="id_promo" id="id_promo">
                    <div class="form-group col-sm-6">
                      <label for="promoInput">Promo</label>
                      <input type="text" name="name_promo" class="form-control" id="name_promo" placeholder="Enter promo" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="guestNameInput">Status Promo</label>
                        <select name="status_promo" id="status_promo" class="form-control" onchange="checkValCode()" >
                          <option value="choose"> </option>
                          <option value="ACTIVE">Active</option>
                          <option value="INACTIVE">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="startDateInput">Start Promo</label>
                      <input type="datetime-local" name="start_promo" class="form-control" id="start_promo" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="startDateInput">End Promo</label>
                      <input type="datetime-local" name="end_promo" class="form-control" id="end_promo" required>
                    </div>

                    <!-- <div class="form-group col-xs-6">
                      <label>Date</label>
                      <input type="text" class="form-control" id="datetime" readonly>
                    </div> -->

                    <div class="form-group col-xs-12">
                      <label for="startDateInput">Code Promo</label>
                      <input type="text" name="code_promo" class="form-control" id="code_promo" required>
                    </div>
                
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" style="margin-left: 15px;" class="btn btn-primary btn-sm" title="Add Hotel Information"><span class="fa fa-plus">&nbsp</span> ADD PROMO</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> DATA PROMO</h3>
            </div>

            <div class="box-body">
              <table id="tableDataPromo" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Promo</th>
                    <th>Status Promo</th>
                    <th>Start Promo</th>
                    <th>End Promo</th>
                    <th>Code Promo</th> 
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      if(! empty($promo)){
                      // $no = 1;
                        foreach ($promo as $key) {
                          $id_promo = $key['id_promo'];
                          $name_promo = $key['name_promo'];
                          $status_promo = $key['status_promo'];
                          $start_promo = $key['start_date'];
                          $end_promo = $key['end_date'];
                          $code_promo = $key['code_promo'];
                          ?>
                          <tr>
                            <td style="text-transform: uppercase;"> <?php echo $key['name_promo'];?> </td>
                            <td style="text-transform: uppercase;"> <?php echo $key['status_promo'];?> </td>
                            <td style="text-transform: uppercase;"> <?php echo date('d F Y H:i:s', strtotime($start_promo)); ?> </td>
                            <td style="text-transform: uppercase;"> <?php echo date('d F Y H:i:s', strtotime($end_promo)); ?> </td>
                            <td> <?php echo $key['code_promo'];?> </td>

                            <td> 
                              <button type="button" class="btn btn-info btn-sm" title="Update Data Segmentation" onclick="ubahPromo(<?php echo $id_promo; ?>)"><span class="fa fa-edit"></span>  </button>

                              <button type="button" class="btn btn-danger btn-sm" title="Delete Data Segmentation" onclick="removePromo(<?php echo $id_promo ?>)"><span class="fa fa-trash"></span>  </button>
                            </td>

                              <?php }
                            } else {
                              echo "<tr><td align='center' colspan='5'>Data Not Available </td></tr>";
                            }
                          ?>
                        </tr>
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
                      <div id="promoModal" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updatePromo'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Update Promo Hotel</h4>
                            </div>

                            <!-- hidden id hotel -->
                            <input type="hidden" name="id_promo_modal" id="id_promo_modal">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Promo</label>
                                        <input type="text" class="form-control" name="name_promo_modal" id="name_promo_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="guestNameInput">Status Promo</label>
                                          <select name="status_promo_modal" id="status_promo_modal" class="form-control" onchange="checkValCode()" >
                                            <option value="choose"> </option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                          </select>
                                      </div>
                                    </div>

                                    <div class="form-group col-xs-4">
                                      <label for="startDateInput">Start Promo</label>
                                      <input type="datetime-local" name="start_promo_modal" class="form-control" id="start_promo_modal" required>
                                    </div>

                                    <div class="form-group col-xs-5">
                                      <label for="startDateInput">End Promo</label>
                                      <input type="datetime-local" name="end_promo_modal" class="form-control" id="end_promo_modal" required>
                                    </div>

                                    <div class="form-group col-xs-9">
                                      <label for="startDateInput">Code Promo</label>
                                      <input type="text" name="code_promo_modal" class="form-control" id="code_promo_modal" required>
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