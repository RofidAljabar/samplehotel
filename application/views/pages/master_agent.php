  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        AGENT
        <small>MASTER</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-cog"></i> SETTING</li>
        <li>Master Agent</li>
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
                  <h3 class="box-title"><i class="fa fa-user-o"></i> Input Agent</h3>
                </div>
                  <form role="form" action="<?php echo base_url('home/addNewAgent'); ?>" method="post">
                    <input type="hidden" name="id_agent" id="id_agent">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="agent_name">Agent Name</label>
                      <input type="text" class="form-control" id="name_agent" name="name_agent" placeholder="Agent name" required>
                    </div>

                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="<?php echo base_url('home/registrationGuest'); ?>" class="btn btn-primary" style="height: 90%;"><span class="fa fa-caret-left">&nbsp</span>Back</a>
                    <button type="submit" class="btn btn-info"><span class="fa fa-plus">&nbsp</span>ADD</button>
                  </div>
                </form>
          </div>
        </div>
      </div>


      <!-- For New Agent -->
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data Agent</h3>
            </div>

            <div class="box-body">
              <table id="tableUserHotel" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <!-- <th>No.</th> -->
                    <th>Agent </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      if(! empty($mg)){
                      // $no = 1;
                        foreach ($mg as $key) {
                          $id_agent = $key['id_agent'];
                          $name_agent = $key['name_agent'];
                                         
                          ?>
                          <tr>
                            <!-- <td> <?php echo $no++;?></td> -->
                            <td> <?php echo $key['name_agent'];?> </td>
                            <td> 
                              <button type="button" class="btn btn-link" onclick="ubahMasterAgent(<?php echo $id_agent ?>)"><span class="fa fa-edit"></span>  </button>

                              <button type="button" class="btn btn-link" onclick="removeMasterAgent(<?php echo $id_agent ?>)"><span class="fa fa-trash"></span>  </button>
                            </td>

                              <?php }
                            } else {
                              echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
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
                      <div id="editModalMasterAgent" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateMasterAgent'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Agent</h4>
                            </div>
                            <!-- hidden id user -->
                            <input type="hidden" name="id_agent_modal" id="id_agent_modal">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">

                                      <div class="form-group col-xs-9">
                                        <label for="agent_name">Agent Name</label>
                                        <input type="text" class="form-control" id="name_agent_modal" name="name_agent_modal" placeholder="Agent name" required>
                                      </div>

                                  </div>
                                  <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-refresh"></span>Update</button> 
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              

    <!-- End Modal -->