

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Database</li>
        <li>Course</li>
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
                  <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Course</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo base_url('home/addCourse'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="courseInput">Course Name</label>
                      <input type="text" name="courseName" class="form-control" id="courseInput" placeholder="Enter course name">
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="typeCourseInput">Type</label>
                       <div class="radio">
                        <label>
                          <input type="radio" name="optionsCourse1" id="optionsCourse1" value="RMCBE">
                          RMCBE
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsCourse1" id="optionsCourse2" value="RMCE">
                          RMCE
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsCourse1" id="optionsCourse3" value="None of above">
                          None of above
                        </label>
                      </div>
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
              <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Course</h3>
            </div>

            <div class="box-body">
              <table id="tableCourse" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Course Name</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($course as $key) {
                    echo "<tr>";
                    echo "<td>".$key['course_name']."</td>";
                    echo "<td>".$key['course_type']."</td>";
                    echo "</tr>";
                  }
                ?>
              <!--   <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  
                </tr>
                 <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  
                </tr>
                 <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  
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
  
