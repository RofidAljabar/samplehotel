<!--  <style type="text/css">
            .icon {
                font-size: 14px;
                text-align: center;
                line-height: 14px;
                vertical-align: middle;
                cursor: pointer;
            }

            .scheduler_default_rowheader_inner
            {
                border-right: 1px solid #ccc;
            }
            .scheduler_default_rowheadercol2
            {
                background: White;
            }
            .scheduler_default_rowheadercol2 .scheduler_default_rowheader_inner
            {
                top: 2px;
                bottom: 2px;
                left: 2px;
                background-color: transparent;
                border-left: 5px solid #38761d; /* green */
                border-right: 0px none;
            }
            .status_dirty.scheduler_default_rowheadercol2 .scheduler_default_rowheader_inner
            {
                border-left: 5px solid #cc0000; /* red */
            }
            .status_cleanup.scheduler_default_rowheadercol2 .scheduler_default_rowheader_inner
            {
                border-left: 5px solid #e69138; /* orange */
            }

        </style> -->
         <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BOOK CHART
        <small>Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-line-chart"></i> BOOK CHART</li>
        <!-- <li>Database</li>
        <li>Book Chart</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">

      <?php 
      if(isset($_SESSION['alert'])){
        echo " <div class=\"alert alert-success alert-dismissible fade in\" id=\"alertSukses\" role=\"alert\">
        Room Status Updated!
      </div>";
      }
      ?>

     
       <!--  <div class="col-md-8">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-user-o"></i> Book Chart</h3>
                </div>
                <form role="form" action="<?php echo base_url('home/addUserAccount'); ?>" method="post">
                  <div class="box-body">
                   
                    <div class="form-group col-xs-4">
                      <label for="fullNameInput">Room Type</label>
                      <select name="type_room" class="form-control" >
                             <?php 
                                foreach ($typesroom as $key) {
                                  echo "<option value='".htmlspecialchars($key['dsc_tipe'])."'>";
                                  echo $key['dsc_tipe'];
                                  echo "</option>";
                                }
                              ?>
                          </select>
                    </div>

                     <div class="form-group col-xs-4">
                      <label for="usernameInput">From Date</label>
                      <input type="date" name="birthDate" class="form-control" placeholder="Enter birth date" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="initialInput">To Date</label>
                       <input type="date" name="birthDate" class="form-control" placeholder="Enter birth date" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="initialInput">Room No</label>
                      <select name="type_room" class="form-control" >
                             <?php 
                                foreach ($noroom as $key) {
                                  echo "<option value='".htmlspecialchars($key['no_of_room'])."'>";
                                  echo $key['no_of_room'];
                                  echo "</option>";
                                }
                              ?>
                          </select>
                    </div>
                  </div>

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submitCompany">Search</button>
                  </div>
                </form>
              </div>
        </div> -->
        <div class="col-md-12">
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-user-o"></i> Status Room</h3>
                </div>

                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <td bgcolor="#3333FF" width="10%;"><font color="white">OCCUPIED READY</font></td>
                      <td bgcolor="#f9cb59" width="10%;">OCCUPIED DIRTY</td>
                      <td bgcolor="#59f967" width="10%;">OCCUPIED CLEAN</td>
                      <td bgcolor="#8cffed" width="10%;">VACANT DIRTY</td>
                      <td bgcolor="#fdff8c" width="10%;">VACANT CLEAN</td>
                      <td bgcolor="#856C11" width="10%;"><font color="white">VACANT READY</font></td>
                      <td bgcolor="#f26154" width="10%;"><font color="white">OOO</font></td>
                      <td bgcolor="#1769aa" width="10%;"><font color="white">OOS</font></td>
                    </tr>
                    <tr>
                    <?php
                      foreach($counterRoom as $key){
                        $counterAsli = $key['counter'];
                        if($counterAsli == 0){$counterAsli = '-';} 
                        echo "<td>".$counterAsli."</td>";
                      }
                    ?>            
                  </tr>
                  </table>
                </div>

                <div class="box-footer">
                    <!-- <button type="submit" class="btn btn-primary" name="submitCompany">Submit</button> -->
                  </div>
          </div>
        </div>
        <!-- Contact Person -->


        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-building-o"></i> Room </h3>
            </div>
             <div class="shadow"></div>
            <div class="hideSkipLink">
            </div>
            
              <div class="box-body">
        
              <!-- Gambar hotel disini -->
              <div class="card col-md-3" style="width: 12rem;">
                <ul class="list-group">
                <li class="list-group-item alert-danger" style="text-align:center;">Building</li>
              <?php 
              
                foreach($building as $key){
                  $buildCounter = 0;
                  $idBuilding = $key['id_building'];

                  foreach($masterRoom as $key2){
                    $idBuildingMaster = $key2['building'];
                    $statusMaster = $key2['status'];
                    if($idBuilding == $idBuildingMaster){
                      
                      if($statusMaster == 4 || $statusMaster == 5 || $statusMaster == 6 ){
                        $buildCounter++;
                      } else {
                        continue;
                      }

                    }
                  }


                  if($buildCounter > 0){
                    echo "<a href=\"javascript:void(0)\" onclick=\"getDetailRoom(".$key['id_building'].")\" class=\"list-group-item\" style=\"text-align:center;\">";
                    echo "<span class=\"btn btn-success\">".$key['name_building']."</span>";
                    echo "</a>";
                  } else {
                    echo "<a href=\"javascript:void(0)\" onclick=\"getDetailRoom(".$key['id_building'].")\" class=\"list-group-item\" style=\"text-align:center;\">";
                    echo "<span class=\"btn btn-danger\">".$key['name_building']."</span>";
                    echo "</a>";
                  }
                 
                }
              ?>
                </ul>
              </div>

              <div class="row" id="contentHotel">
                <!-- <div class="box box-widget widget-user-2">
                  <div class="widget-user-header">
                  </div>
                  <div class="box-footer no-padding">
                  </div>
                </div> -->
              </div>
           

              <!-- <div class="card col-md-8" style="background-color:#FF80AB;">
                <div class="card-body">
                  This is some text within a card body.
                </div>
              </div> -->

              
              
              </div>    
          

                  <!-- <div class="box-body no-padding">
                      <div id="calendar" ></div>
                      <div id="event_list" class="none"></div>
                  </div> -->
              
          </div>
        </div>
      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->






   <div class="modal fade" id="modalEditChartRoom">
          <div class="modal-dialog ">
            <div class="modal-content">
            <form role="form" action="<?php echo base_url('home/updateRoomChart'); ?>" method="post">
              <div class="modal-header" style="background: #FFA000;">
                <h5 class="modal-title" style="color: #ffffff;"><i class="fa fa-user"></i> Change room status</h5>
              </div>
              <div class="modal-body">
                <input type="hidden" name="editChartId" id="editChartId" class="form-control">
                <select name="editChartStatus" id="editChartStatus" class="form-control">
                  <?php 
                  foreach($statusRoom  as $key){
                    echo "<option value=".$key['id'].">";
                    echo $key['status'];
                    echo "</option>";
                  }
                    
                  ?>
                </select>
              </div>
              <!-- Contact Person -->
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
                <input type="submit" name="submit" class="btn btn-primary" value="OK">
                <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

  
