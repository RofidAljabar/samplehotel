

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Office Boy
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Office Boy</li>
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
                  <h3 class="box-title"><i class="fa fa-child"></i> Logistic Officer</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addLogisticOfficer'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-4">
                      <label for="officeBoyInput">Logistic Officer</label>
                      <input type="text" name="logisticOfficer" class="form-control" id="officeBoyInput" placeholder="Enter office boy" required>
                    </div>

                     <div class="form-group col-xs-4">
                      <label for="initialInput">Initial</label>
                      <input type="text" name="initial" class="form-control" id="initialInput" placeholder="Enter initial" required> 
                    </div>

                    <div class="form-group col-xs-4">
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
        <div class="row">
        </div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-child"></i> Office Boy</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Office Boy</th>
                    <th>Initial</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($logisticOfficer as $key) {
                    echo "<tr>";
                    echo "<td>".$key['lo_name']."</td>";
                    echo "<td>".$key['lo_initial']."</td>";
                    echo "</tr>";
                  }
                ?>
                <!-- <tr>
                  <td>Dedi Susanto</td>
                  <td>ST</td>
                </tr>
                 <tr>
                  <td>Dedi Sutisna</td>
                  <td>DT</td>
                </tr>
                 <tr>
                  <td>Eko Nurdianto</td>
                  <td>EN</td> 
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
  
