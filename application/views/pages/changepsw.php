<style type="text/css">
  .hidetext { -webkit-text-security: disc; /* Default */ }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CHANGE PASSWORD
        <small>DATABASE</small>
      </h1>
      <ol class="breadcrumb">
        <li>CHANGE PASSWORD</li>
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
              <h3 class="box-title"><i class="fa fa-user"></i> DATA USER</h3>
            </div>
            <form role="form" action="<?php echo base_url('home/changepswd'); ?>" method="post">

                  <!-- input for active tabs -->
                    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                        <div class="box-body">
                          <div class="form-group col-xs-12 ">
                            <label for="TypeRoom">Old Password</label>
                            <input type="password" name="old_pass" value="<?= set_value('old_pass') ?>" class="form-control" id="oldpass" placeholder="Enter Old Password">
<!--                             <strong><div class="text-danger"><?= form_error('oldpass')?></div></strong> -->
                            <!-- <small ><?= form_error('oldpass')?></small> -->
                          </div>
                          <div class="form-group col-xs-12 ">
                            <label for="TypeRoom">New Password</label>
                            <input type="password" name="new_pass" value="<?= set_value('new_pass') ?>" class="form-control" id="newpass" placeholder="Enter New Password" ><a href="#" onclick="toggle_password();" id="showhide">Show Password</a>
                          </div>
                          <div class="form-group col-xs-12 ">
                            <label for="TypeRoom">Confirm New Password</label>
                            <input type="password" name="re_new_pass" value="<?= set_value('re_new_pass') ?>" class="form-control" id="repass" placeholder="Confirm New Password"  ><a href="#" onclick="toggle_password2();" id="showhide2">Show Password</a>
                          </div>
                    
                    </div>
               
                    <!-- /.box-body -->

                    <div class="box-footer with-border">
                      <!-- Submit Type -->
                      <button type="submit" class="btn btn-primary" name="submitType">Submit</button>
                      <br /><br /><br />
                      <!-- <div class="row">
                         <div class="col-md-12"> -->
                            <!-- <div class="box box-success"> -->
                              <!-- <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa fa-database"></i> Data Type Room</h3>
                              </div> -->

                      </form>
            <!-- <div class="box-body">
              <table id="tableDetailFasilitas" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th> -->
                    <!-- <th colspan="3" style="text-align: center;">Action</th> -->
                  <!-- </tr>
                </thead>
                <tbody>
                      <?php
                          if(! empty($getchg)){
                          $no = 1;
                            foreach ($getchg as $key) {
                              $id_user = $key['id_user']; 
                              $role = $key['role'];
                              $email = $key['email'];
                              $password = $key['password'];
                             
                              ?>
                              <tr>
                                <td> <?php echo $no++;?></td>
                                <td> <?php echo $key['role'];?> </td>
                                <td> <?php echo $key['email'];?> </td>
                                <td class="hidetext"> <?php echo $key['password'];?> </td>
                                <td> 

                                  <button type="button" class="btn btn-info fa fa-edit" onclick="ubahPsw(<?php echo $id_user; ?>)">Edit</button>
                                  <button type="button" class="btn btn-danger fa fa-trash"> Remove </button></td>
                              </tr>
                            <?php }
                          } else {
                            echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                          }
                      ?>
                </tbody>
              </table>
              <div class="col-sm-12" width="60px">
                      <br/>
                      <div id="modalchg" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updatePsw'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Hotel Information</h4>
                            </div> -->
                            <!-- hidden id hotel -->
                      <!--       <input type="hidden" name="id_user" id="idUser">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row"> -->
                                    <!-- Col 1 -->
                                    <!-- <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="NoOfRooms">Role</label>
                                        <input type="text" class="form-control" id="idRoleChg" name="role_edit" readonly />
                                      </div>
                                    </div>

                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="PriceRooms">Email</label>
                                        <input type="text" class="form-control" id="idEmailChg" name="email_edit" readonly />
                                      </div>
                                    </div>
                                      <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="pwd0">Password</label>
                                        <input type="password" class="form-control" id="idPassChg" name="pass_edit" />
                                        <a href="#" onclick="toggle_password();" id="showhide">Show Password</a>
                                      </div>
                                      </div>
                                  </div>
                                  </div>
                                  <div class="modal-footer"> -->
                                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>  -->
                                  <!-- <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                                </form>
                                </div>
              </div>
                               -->
                                    <!-- Potongan Script -->
                              <!--   </tbody>
                                </table> -->
                              </div>
                            </div>
              
        <!-- Contact Person -->

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
