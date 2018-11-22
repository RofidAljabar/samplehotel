

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Batch Master
        <small>Training</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> EXDEPRO</li>
        <li>Training</li>
        <li>Batch Master</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">
        <div class="col-md-5">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-briefcase"></i> Batch Master</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start --> 
                <form role="form" action="<?php echo base_url('home/addBatchMaster'); ?>" method="post">
                  <div class="box-body">
                    <div class="form-group col-xs-12">
                      <label for="trainingProgramInput">Training Program</label> 
                     <select name="course" class="form-control" required>
                      <?php foreach ($course as $key) {
                        echo  "<option value=".$key['course_name'].">".$key['course_name']."</option>";
                      } ?>
                      </select>
               
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="batchCodeInput">Batch Code</label>
                      <input type="text" name="batchCode" class="form-control" id="batchCodeInput" placeholder="Batch code" required>
                    </div>

                     <div class="form-group col-xs-8">
                      <label for="classInput">Class of</label>
                      <input type="text" name="classInput" class="form-control" id="classInput" placeholder="Class of" required>
                    </div>

                     <div class="form-group col-xs-12">
                      <label for="venueInput">Venue</label> 
                      <select name="venue" class="form-control" required>
                      <?php foreach ($venue as $key) {
                        echo  "<option value=".$key['vot_name'].">".$key['vot_name']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="roomInput">Room</label>
                      <input type="text" name="room" class="form-control" id="roomInput" placeholder="Room" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="beginInput">Begin</label>
                      <input type="text" name="begin" class="form-control" id="beginInput" placeholder="Begin time" required>
                    </div>

                    <div class="form-group col-xs-6">
                      <label for="endInput">End</label>
                      <input type="text" name="end" class="form-control" id="endInput" placeholder="End time" required>
                    </div>


                    <div class="form-group col-xs-3">
                      <label for="locationInput">Location</label>
                       <div class="radio">
                        <label>
                          <input type="radio" name="location1" id="location1" value="location1">
                          Location 1
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="location1" id="location2" value="location2">
                          Location 2
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-xs-3">
                      <label for="typeInput">Type</label>
                       <div class="radio">
                        <label>
                          <input type="radio" name="type1" id="type1" value="type1">
                          Type 1
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="type1" id="type2" value="type2">
                          Type 2
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-xs-3">
                      <label for="languageInput">Language</label>
                       <div class="radio">
                        <label>
                          <input type="radio" name="language1" id="language1" value="language1">
                          English
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="language1" id="language2" value="language2">
                          Indonesia
                        </label>
                      </div>
                    </div>

                     <div class="form-group col-xs-3">
                      <label for="venueInput">Venue</label>
                       <div class="radio">
                        <label>
                          <input type="radio" name="venue1" id="venue1" value="venue1">
                          Venue 1
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="venue1" id="venue2" value="venue2">
                          Venue 2
                        </label>
                      </div>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="dateSimulationInput">Date of Online Simulation Test</label>
                      <input type="text" name="dateSimulation" class="form-control" id="dateSimulationInput" placeholder="date simulation" required>
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
        <div class="col-md-7">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-briefcase"></i> Batch Master</h3>
            </div>

            <div class="box-body">
              <table id="tableHumanResources" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Class</th>
                    <th>First Date</th>
                    <th>Last Date</th>
                  </tr>
                </thead>
                <tbody>
               <!--  -->
               <?php 
                  foreach ($batchMaster as $key) {
                    $newBegin = date('d M Y', strtotime($key['bm_begin']));
                    $newEnd = date('d M Y', strtotime($key['bm_end']));


                    echo "<tr>";
                    echo "<td>".$key['bm_batch_code']."</td>";
                    echo "<td>".$key['bm_class_input']."</td>";
                    echo "<td>".$newBegin."</td>";
                    echo "<td>".$newEnd."</td>";
                    echo "</tr>";
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
  
