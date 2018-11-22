

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Type of Exdepro
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Administrator</li>
        <li>Type of Exdepro</li>
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
                  <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Type of Exdepro</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addTypeExdepro'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-12">
                      <label for="typeExdeproInput">Type Exdepro</label>
                      <input type="text" name="typeExdepro" class="form-control" id="typeExdeproInput" placeholder="Enter type of exdepro" required>
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
              <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Type Exdepro</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Type of Exdepro</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($typeExdepro as $key) {
                    echo "<tr>";
                    echo "<td>".$key['te_name']."</td>";
                    echo "</tr>";
                  }
                ?>
               <!--  <tr>
                  <td>ExDePro</td>
                </tr>
                 <tr>
                  <td>Non RMCBE</td>
                </tr>
                 <tr>
                  <td>RMCBE</td>
                </tr>
                <tr>
                  <td>RMCBP</td>
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
  
