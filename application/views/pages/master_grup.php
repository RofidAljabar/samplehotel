  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GROUP
        <small>MASTER</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-cog"></i> SETTING</li>
        <li>Master Group</li>
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
                  <h3 class="box-title"><i class="fa fa-group"></i> Input Group</h3>
                </div>
                  <form role="form" action="<?php echo base_url('home/addNewGroup'); ?>" method="post">
                    <input type="hidden" name="id_group" id="id_group">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="agent_name">Group Name</label>
                      <input type="text" class="form-control" id="name_group" name="name_group" placeholder="Group name" required>
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
              <h3 class="box-title"><i class="fa fa-database"></i> Data Group</h3>
            </div>

            <div class="box-body">
              <table id="tableUserHotel" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <!-- <th>No.</th> -->
                    <th>Group </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      if(! empty($mgrup)){
                      // $no = 1;
                        foreach ($mgrup as $key) {
                          $id_group = $key['id_group'];
                          $name_group = $key['name_group'];
                                         
                          ?>
                          <tr>
                            <!-- <td> <?php echo $no++;?></td> -->
                            <td> <?php echo $key['name_group'];?> </td>
                            <td> 
                              <button type="button" class="btn btn-primary" onclick="ubahMasterGroup(<?php echo $id_group ?>)"><span class="fa fa-edit"></span>  </button>

                              <button type="button" class="btn btn-danger" onclick="removeMasterGroup(<?php echo $id_group ?>)"><span class="fa fa-trash"></span>  </button>
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
                      <div id="editModalMasterGroup" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateMasterAgent'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Group</h4>
                            </div>
                            <!-- hidden id user -->
                            <input type="hidden" name="id_group_modal" id="id_group_modal">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">

                                      <div class="form-group col-xs-9">
                                        <label for="agent_name">Group Name</label>
                                        <input type="text" class="form-control" id="name_group_modal" name="name_group_modal" placeholder="Group name" required>
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