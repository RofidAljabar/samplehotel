

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Religion
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Administrator</li>
        <li>Religion</li>
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
                  <h3 class="box-title"><i class="fa fa-tree"></i> Religion</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addReligion'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="religionInput">Religion</label>
                      <input type="text" name="religion" class="form-control" id="religionInput" placeholder="Religion" required>
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
        <div class="row">
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tree"></i> Religion</h3>
            </div>

            <div class="box-body">
              <table id="tableReligion" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Religion</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($religion as $key) {
                    echo "<tr>";
                    echo "<td>".$key['religion_name']."</td>";
                    echo "</tr>";
                  }
                ?>
                <!-- <tr>
                  <td>Buddha</td>
                </tr>
                 <tr>
                  <td>Catholic</td>
                </tr>
                 <tr>
                  <td>Christian</td>
                </tr>
                <tr>
                  <td>Hindu</td>
                </tr>
                <tr>
                  <td>Moslem</td>
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
  
