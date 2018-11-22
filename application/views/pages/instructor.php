

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Instructor
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Instructor</li>
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
                  <h3 class="box-title"><i class="fa fa-user"></i> Instructor</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addInstructor'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="instructorNameInput">Name of Instructor</label>
                      <input type="text" name="instructorName" class="form-control" id="instructorNameInput" placeholder="Enter instructor name" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="mobile1Input">Mobile Phone 1</label>
                      <input type="text" name="instructorMobilePhone1" class="form-control" id="mobile1Input" placeholder="Enter mobile number" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="mobile2Input">Mobile Phone 2</label>
                      <input type="text" name="instructorMobilePhone2" class="form-control" id="mobile2Input" placeholder="Enter mobile number" required>
                    </div>

                    <div class="form-group col-xs-12 ">
                      <label for="emailInput">Email Address</label>
                      <input type="email" name="instructorEmailAddress" class="form-control" id="emailInput" placeholder="Enter email address" required>
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
              <h3 class="box-title"><i class="fa fa-user"></i> Instructor</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Instructor</th>
                    <th>Mobile Phone 1</th>
                    <th>Mobile Phone 2</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                  foreach ($instructor as $key) {
                    echo "<tr>";
                    echo "<td>".$key['instructor_name']."</td>";
                    echo "<td>".$key['instructor_mobile_phone1']."</td>";
                    echo "<td>".$key['instructor_mobile_phone2']."</td>";
                    echo "</tr>";
                  }
                ?>
               <!--  <tr>
                  <td>Mr. Derry</td>
                  <td>08125367274</td>
                  <td>08374783264</td>
                </tr>
                 <tr>
                 
                  <td>Mr. Rio</td>
                  <td>08334273283</td>
                  <td>08334243222</td>
                  
                </tr>
                 <tr>
                  <td>Mr. Adi</td>
                  <td>08152353137</td>
                  <td>08334273281</td>     
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
  
