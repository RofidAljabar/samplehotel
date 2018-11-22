  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        VIEW
        <small>PROFILE</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-cog"></i> SETTING</li>
        <!-- <li>Database</li> -->
        <li>View Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->


      <!-- For New Role -->
      <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data User</h3>
            </div>

            <div class="box-body">
              <!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
              <table id="tableDataUser" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Role</th>
                    <th>Full Name</th>
                    <th>User Photo</th>
                    <th>Email</th>
                    <th>Mobile Phone</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($vp as $key) {
                    $vp = $key['id_user'];
                    echo "<tr>";
                    echo "<td>".$key['role']."</td>";
                    echo "<td>".$key['full_name']."</td>";
                    echo "<td style=\"text-align:center;\"><img src='".base_url()."assets/foto/".$key['user_photo']."' width='100' height='100'></td>";
                    echo "<td>".$key['email']."</td>";
                    echo "<td>".$key['mobile_phone']."</td>";
                    
                    echo "<td style=\"text-align: center;\">
                    <button class=\"btn btn-primary btn-sm ubahViewProfile\" onclick=\"ubahViewProfile($vp);\" style=\"width:30%;\"><i class=\"fa fa-edit\"></i> </button></td>";
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
  
                              

    <!-- End Modal -->


    <!-- Second Modal -->

     
    <!-- End Second Modal -->


    <!-- Start Third Modal -->
    
                          </div>
                        </div>
                      </div>
                              

    <!-- End Third Modal -->