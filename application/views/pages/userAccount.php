

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Account
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>User Account</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-user-o"></i> User Account</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addUserAccount'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="fullNameInput">Full Name</label>
                      <input type="text" name="fullName" class="form-control" id="fullNameInput" placeholder="Enter full name" required>
                    </div>

                     <div class="form-group col-xs-9">
                      <label for="usernameInput">Username</label>
                      <input type="text" name="username" class="form-control" id="usernameInput" placeholder="Enter username" required>
                    </div>

                    <div class="form-group col-xs-3">
                      <label for="initialInput">Initial</label>
                      <input type="text" name="initial" class="form-control" id="initialInput" placeholder="Enter initial" required>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="departmentInput">Department</label>
                      <input type="text" name="department" class="form-control" id="departmentInput" placeholder="Enter department" required>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="userLevelInput">User Level</label>
                      <input type="text" name="userLevel" class="form-control" id="userLevelInput" placeholder="Enter user level" required>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="statusInput">Status</label>
                      <input type="text" name="status" class="form-control" id="statusInput" placeholder="Enter status" required>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button>
                  </div>
                </form>
              </div>
        </div>

        <!-- Contact Person -->


        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user-o"></i> User Account</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Department</th>
                    <th>Level</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($userAccount as $key) {
                    echo "<tr>";
                    echo "<td>".$key['user_account_username']."</td>";
                    echo "<td>".$key['user_account_fullname']."</td>";
                    echo "<td>".$key['user_account_department']."</td>";
                    echo "<td>".$key['user_account_user_level']."</td>";
                    echo "</tr>";
                  }
                ?>
               <!--  <tr>
                  <td>Daniel</td>
                  <td>Daniel Kasenda</td>
                  <td>Advisory</td>
                  <td>Admin</td>
                </tr>
                 <tr>
                  <td>Bowo</td>
                  <td>Soebowo Musa</td>
                  <td>BOD</td>
                  <td>Manager</td>
                </tr>
                 <tr>
                  <td>Jono</td>
                  <td>Jono Effendy</td>
                  <td>BOD</td>
                  <td>Manager</td>     
                </tr> -->
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
  
