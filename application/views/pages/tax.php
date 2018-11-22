  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-transform: uppercase;">
        TAX
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER TAX</li>
        <!-- <li>Database</li> -->
        <li><i class="fa fa-percent"></i> TAX</li>
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
                  <h3 class="box-title"><i class="fa fa-percent"></i> TAX</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addTax'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-6">
                      <label for="companyInput">Name Tax</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Name Tax" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="officeInput">Nominal</label>
                      <input type="text" name="nominal" class="form-control" id="nominal" placeholder="Enter Nominal" required>
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
              <h3 class="box-title"><i class="fa fa-database"></i> DATA TAX</h3>
            </div>

            <div class="box-body">
              <table id="tableDataTax" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Name Tax</th>
                    <th>Nominal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($mtax as $key) {
                    $hi = $key['id'];
                    $hi2 = $key['nama'];
                    $hi3 = $key['nominal'];

                    echo "<tr>";
                    echo "<td style=\"text-transform: uppercase\">".$key['nama']."</td>";
                    echo "<td>".$key['nominal']."</td>";
                    
                    echo "<td style=\"width:10%\">
                    <button class=\"btn btn-info btn-sm ubahHotel\" title=\"Edit Data Hotel\" onclick=\"ubahTax($hi);\"><i class=\"fa fa-edit\"></i> </button> <button class=\"btn btn-danger btn-sm hiDelete\" title=\"Delete Data Hotel\" onclick=\"deleteTax($hi);\"><i class=\"fa fa-trash\"></i> </button></td>";

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
                        <form role="form" action="<?php echo base_url('home/updateTax'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">

                            <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Update Tax</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Name Tax</label>
                                        <input type="hidden" name="id_tax" id="id_tax">
                                        <input type="text" class="form-control" name="nama_modal" id="nama_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Nominal</label>
                                        <input type="text" class="form-control" name="nominal_modal" id="nominal_modal">
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