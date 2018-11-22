  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SEGMENTATION
        <small>MASTER DATA</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER DATA</li>
        <li><i class="fa fa-users"></i> SEGMENTATION</li>
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
                  <h3 class="box-title"><i class="fa fa-group"></i> INPUT SEGMENTATION</h3>
                </div>
                  <form role="form" action="<?php echo base_url('home/addNewSegmentation'); ?>" method="post">
                    <input type="hidden" name="id_segment" id="id_segment">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="agent_name">Segmentation</label>
                      <input type="text" class="form-control" id="segmentation" name="segment" placeholder="Segmentation" required>
                    </div>

                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button style="margin-left: 5px;" type="submit" class="btn btn-primary btn-sm" title="Add Segmentation"><span class="fa fa-plus">&nbsp</span> ADD</button>
                  </div>
                </form>
          </div>
        </div>
      </div>


      <!-- For New Agent -->
      <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> DATA SEGMENTATION</h3>
            </div>

            <div class="box-body">
              <table id="tableUserHotel" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <!-- <th>No.</th> -->
                    <th>Segmentation </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      if(! empty($segment)){
                      // $no = 1;
                        foreach ($segment as $key) {
                          $id_segment = $key['id_segment'];
                          // $name_segment = $key['name_segment'];
                          $name_segment = $key['segment'];
                          ?>
                          <tr style="text-transform: uppercase;">
                            <td> <?php echo $key['segment'];?> </td>
                            <td> 
                              <button type="button" class="btn btn-info btn-sm" title="Update Data Segmentation" onclick="ubahMasterSegment(<?php echo $id_segment; ?>)"><span class="fa fa-edit"></span>  </button>

                              <button type="button" class="btn btn-danger btn-sm" title="Delete Data Segmentation" onclick="removeMasterSegment(<?php echo $id_segment ?>)"><span class="fa fa-trash"></span>  </button>
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
      <!-- For New Role -->

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
                      <div id="editModalSegment" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateSegmentation'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-edit"> Update Segmentation</i></h4>
                            </div>
                            <!-- hidden id user -->
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">

                                      <div class="form-group col-xs-9">
                                        <label for="segmentation">Segmentation</label>
                                        <input type="hidden" name="id_segment" id="id_segment_modal">
                                        <input type="text" class="form-control" id="segment_modal" name="segment" placeholder="Segmentation name" required>
                                      </div>

                                  </div>
                                  <button type="submit" class="btn btn-primary btn-sm" title="Update Segmentation"><span class="fa fa-refresh"></span> Update</button> 
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              

    <!-- End Modal -->