  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USER MANAGEMENT
        <small>MASTER DATA</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-database"></i> MASTER DATA</li>
        <li><i class="fa fa-user"></i> USER MANAGEMENT</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-4">
          <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-user"></i> Input User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <!-- <form role="form" action="<?php //echo base_url('home/addUser'); ?>" method="post"> -->
                  <?php echo form_open_multipart('http://192.168.2.179:8080/samplehotel/home/addUser');?>

                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="full_name">Full Name</label>
                      <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full name" required>
                    </div>
                    
<!--                     <div class="form-group col-xs-12">
                      <label for="user_photo">User Photo</label>
                      <input type="file" name="user_photo" value="user_photo" id="user_photo" size="20" /><p>
                       --><!-- <a href="" id="upload_link">Choose your photo</a> -->
                    <!-- </div> -->

                    <div class="form-group col-xs-12">
                      <label for="user_photo">User Photo</label>
                      <input type="file" id="input-file-now" class="dropify" name="user_photo" accept="image/*"  />
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="phone">Mobile Phone</label>
                      <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" placeholder="Mobile Phone" required>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="UserInput">Role</label>
                       <select name="role" class="form-control" required>
                        <option value="role"> </option>
                      <?php foreach ($role as $key) {
                        echo  "<option value=".$key['name_role'].">".$key['name_role']."</option>";
                      } ?>
                      </select>
                      <!-- <button type="submit" class="btn btn-link btn-xs" ><span class="fa fa-plus">&nbsp</span>ADD ROLE</button> -->
                    </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-sm" title="Add User"><span class="fa fa-plus">&nbsp</span> ADD</button>
                  </div>
                </form>
          </div>
        </div>
      </div>


      <!-- For New Role -->
      <div class="col-md-8">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data Role</h3>
            </div>

            <div class="box-body">
              <table id="tableUserHotel" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <!-- <th>No.</th> -->
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                      if(! empty($newrole)){
                      // $no = 1;
                        foreach ($newrole as $key) {
                          $id_role = $key['id_role'];
                          $name_role = $key['name_role'];
                                         
                          ?>
                          <tr>
                            <!-- <td> <?php echo $no++;?></td> -->
                            <td> <?php echo $key['name_role'];?> </td>
                            <td> 
                              <button type="button" class="btn btn-info btn-sm" title="Edit Data Role" onclick="ubahNewRole(<?php echo $id_role ?>)"><span class="fa fa-edit"></span>  </button>

                              <button type="button" class="btn btn-danger btn-sm" title="Delete Data Role" onclick="removeNewRole(<?php echo $id_role ?>)"><span class="fa fa-trash"></span>  </button>
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


        <!-- Contact Person -->
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data User</h3>
            </div>

            <div class="box-body">
              <!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
              <table id="tableDataUser" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Role</th>
                    <th>User Photo</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile Phone</th>
                    <th>Password</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($user as $key) {
                    $user = $key['id_user'];
                    
                    echo "<tr>";
                    echo "<td>".$key['role']."</td>";
                    echo "<td style=\"text-align: center;\"><a href='".base_url()."assets/foto/".$key['user_photo']."'><img src='".base_url()."assets/foto/".$key['user_photo']."' width='100' height='100'></a></td>";
                    // echo "<td><img src='".base_url()."assets/foto/".$key['user_photo']."' width='100' height='100'></td>";

                    // echo "<td><img src='<?php echo base_url().'./assets/foto/'.$key->user_photo;
                    // <img src="'.base_url().'assets/foto'.$user_photo.'"
                    echo "<td>".$key['full_name']."</td>";
                    echo "<td>".$key['email']."</td>";
                    echo "<td>".$key['mobile_phone']."</td>";
                    if ($key['password'] == '1b5ecfa895cde93abc0a9bf6fa71d18c') {
                      echo "<td class=\"text-danger\">Default Password</td>";
                    }
                    else
                    {
                      echo "<td class=\"text-success\">Password Changed</td>";
                    }
                    // echo "<td>".$key['password']."</td>";
                    
                    echo "<td style=\"text-align: center;\">
                    <button class=\"btn btn-info btn-sm ubahUserHotel\" title=\"Edit Data user\" onclick=\"ubahUserHotel($user);\" style=\"width:30%;\"><i class=\"fa fa-edit\"></i> </button> <button class=\"btn btn-danger btn-sm hiDelete\" title=\"Delete Data user\" onclick=\"userDelete($user);\" style=\"width:30%;\"><i class=\"fa fa-trash\"></i> </button></td>";

                    // echo "<td style=\"text-align: center;\">
                    // <button class=\"btn btn-danger btn-sm hiDelete\" onclick=\"userDelete($user);\" style=\"width:100%;\"><i class=\"fa fa-trash\"></i> Delete</button></td>";
                  }
                ?>
              </tbody>
              </table>
            </div>
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
                      <div id="editModalUserHotel" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateUserHotel'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><i class="fa fa-edit"></i> Update User</h4>
                            </div>
                            <!-- hidden id user -->
                            <input type="hidden" name="id_user" id="idUserHotel">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label for="RoleInput">Role</label>
                                          <select name="role" class="form-control" id="idRole" required>
                                            <option value="role"> </option>
                                              <?php foreach ($role as $key) {
                                                echo  "<option value=".$key['name_role'].">".$key['name_role']."</option>";
                                              } ?>
                                          </select>
                                      </div>
                                      </div>

                                    <!-- <form role="form" action="<?php echo base_url('home/uploadFoto'); ?>" method="post"> -->
                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>User Photo</label>
                                        <input type="file" class="dropify" style="text-align: center;"  size="" name="user_photo" id="IdUserPhoto">
                                      </div>
                                    </div>
                                    <!-- </form> -->

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="full_name" id="idFullName">
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="idEmail">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Mobile Phone</label>
                                        <input type="text" class="form-control" name="mobile_phone" id="id_mobile_phone">
                                      </div>
                                    </div>

                                      <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" id="idPassword" readonly>
                                      </div>
                                      </div>
                                  </div>

                                  </div>
                                  <button type="submit" style="margin-left: 12px;" class="btn btn-primary btn-sm"><span class="fa fa-refresh"></span> Update</button> 
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              

    <!-- End Modal -->


    <!-- Second Modal -->

      <div id="AddRole" class="modal fade" role="dialog">
        <form role="form" action="<?php echo base_url('home/addNewRole'); ?>" method="post">
        <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Role</h4>
            </div>
             <!-- body modal -->
             <!-- <input type="hidden" name="id_role" id="idIDNewRole"> -->
            <div class="modal-body">
              <div class="form-group">
                <label>New Role</label>
                <input type="text" class="form-control" name="newrole" id="idNewRole">
              </div>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-check"></span> Confirm</button>
              <button type="reset" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Reset</button>
            </div>

          </div>
        </div>
      </form>
      </div>

    <!-- End Second Modal -->


    <!-- Start Third Modal -->
    <div class="col-sm-12" width="60px">
      <div id="editRole2" class="modal fade " role="dialog">
        <form role="form" action="<?php echo base_url('home/updateNewRole'); ?>" method="post">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Update Role</h4>
              </div>
                            <!-- hidden id user -->
              <input type="hidden" name="id_role" id="idIDNewRole2">
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="form-group">
                          <label>Role</label>
                          <input type="text" class="form-control" name="name_role" id="idNewRole2">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-refresh"></span> Update</button>
                  </div> 
        </form>
      </div>
    </div>
                          </div>
                        </div>
                      </div>
                              

    <!-- End Third Modal -->