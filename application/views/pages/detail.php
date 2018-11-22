  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Facilities
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Detail Facilities</li>
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
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-edit"></i>Detail Facilities</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addMasterFacilities'); ?>" method="post">
                	<input type="hidden" name="id_fasilitas" value="<?php echo $idFasilitas; ?>">

                  <div class="box-body">
                  	<input type="hidden" name="id_detail" id="idDetail">
                    <div class="form-group col-xs-4">
                        <label for="TypeRoom">Facilities</label>
                        <input type="text" name="dsc_fasilitas" class="form-control" value="<?php echo htmlspecialchars($dscFasilitas); ?>" readonly>
                      </div>

                    <div class="form-group col-xs-4">
                      <label for="officeInput">Detail Facilities</label>
                      <input type="text" name="dsc_detail" class="form-control" id="dscDetailInput" placeholder="Enter Sub Facilities">
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="officeInput">Qty</label>
                      <input type="text" name="qty" class="form-control" id="qtyDetailInput" placeholder="QTY">
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="officeInput">Brand</label>
                      <input type="text" name="brand" class="form-control" id="brandDetailInput" placeholder="Brand">
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="officeInput">Description</label>
                      <input type="text" name="note" class="form-control" id="noteInput" placeholder="Description" >
                    </div>

                  </div>


                  <!-- /.box-body -->

                  <div class="box-footer">
                    <a href="<?php echo base_url('home/RoomManagement') ?>" class="btn btn-warning btn-sm" title="Back to Room Management" ><span class="fa fa-arrow-left"> Back</a></span>
                    <button type="submit" class="btn btn-primary btn-sm" title="Add Detail Facilities"><span class="fa fa-plus"></span> Add</button>
                  </div>
                </form>
              </div>
        </div>

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data Detail Facilities</h3>
            </div>

            <div class="box-body">
              <table id="tableDetailFasilitas" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Facilities</th>
                    <th>Detail Facilities</th>
                    <th>Quantity</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Action</th>
                    <!-- <th colspan="3" style="text-align: center;">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php 
                                    if(! empty($msubfasilitas)){
                                      $no = 1;
                                        foreach ($msubfasilitas as $key) {
                                          $id_detail = $key['id_detail'];	
                                          // $id_fasilitas = $key['id_fasilitas'];
                                          $dsc_detail = $key['dsc_detail'];
                                          $qty = $key['qty'];
                                          $note = $key['note'];
                                         
                                          ?>
                                          <tr>
                                            <td> <?php echo $no++;?></td>
                                            <td> <?php echo $key['dsc_fasilitas'];?> </td>
                                            <!-- <td> <?php echo $key['id_fasilitas'];?> </td> -->
                                            <td> <?php echo $key['dsc_detail'];?> </td>
                                            <td> <?php echo $key['qty'];?> </td>
                                            <td> <?php echo $key['brand'];?> </td>
                                            <td> <?php echo $key['note'];?> </td>
                                            <td> 

                                              <button type="button" title="Edit Detail Facilities" class="btn btn-primary btn-sm fa fa-edit" onclick="ubahSubFasilitas(<?php echo $id_detail ?>)"></button>
                                              <button type="button" title="Delete Detail Facilities" class="btn btn-danger fa fa-trash" 
                                              onclick="removeSubFasilitas('<?php echo $id_detail ?>','<?php echo $key['dsc_fasilitas'] ?>', '<?php echo $key['id_fasilitas'] ?>')"></button></td>
                                          </tr>
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
      

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Modal -->
  <div class="col-sm-12" width="60px">
                      <br/>
                      <div id="editModalSubFasilitas" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateSubFasilitas'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Detail Facilities</h4>
                            </div>
                            <!-- hidden id hotel -->
                            <input type="hidden" name="id_detail" id="IdDetail">
                            <div class="modal-body">
                                <div class="container-fluid">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-md-6 cold-xs-6">
                                      <div class="form-group">
                                        <label>Facilities</label>
                                        <input type="hidden" name="id_fasilitas" value="<?php echo $idFasilitas; ?>">
                                        <input type="hidden" class="form-control"  name="id_fasilitas_detail" id="dsc_sub_fasilitas">
                                        <input type="text" class="form-control" name="id_fasilitas_detail" id="dsc_sub_fasilitas1" disabled>
                                      </div>
                                    </div>

                                    <div class="col-md-6 cold-xs-6">
                                      <div class="form-group">
                                        <label>Detail Fasilitas</label>
                                        <input type="text" class="form-control" name="detail_sub_fasilitas" id="detail_sub_fasilitas">
                                      </div>
                                    </div>

                                    <div class="col-md-6 cold-xs-6">
                                      <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" name="detail_sub_qty" id="detail_sub_qty">
                                      </div>
                                    </div>

                                    <div class="col-md-6 cold-xs-6">
                                      <div class="form-group">
                                        <label>Brand</label>
                                        <input type="text" class="form-control" name="detail_sub_brand" id="detail_sub_brand">
                                      </div>
                                    </div>

                                    <div class="col-md-6 cold-xs-6">
                                      <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="note_modal" id="note_modal">
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                    <button type="submit" class="btn btn-primary" name="submitCompany"><i class="fa fa-refresh"></i> Refresh</button>
                                  </div> 
                                </form>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
    <!-- End Modal -->