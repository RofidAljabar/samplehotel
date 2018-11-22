  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        RESERVATION
        <small>GUEST</small>
      </h1>
      <ol class="breadcrumb">
        <!-- <li><i class="fa fa-cog"></i> SETTING</li> -->
        <li><i class="fa fa-book"></i> RESERVATION GUEST HOTEL</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <!-- Company -->
      <div class="row">

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> DATA RESERVATION</h3>
            </div>
            <div class="box-body">

              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tentative"><i class="fa fa-spinner"></i> TENTATIVE</a></li>
                <li><a data-toggle="tab" href="#confirm"><i class="fa fa-check"></i> CONFIRM</a></li>
                <li><a data-toggle="tab" href="#wl"><i class="fa fa-clock-o"></i> WAITING LIST</a></li>
              </ul>

              <div class="tab-content">
                <div id="tentative" class="tab-pane fade in active">
                  <br/>
                  <table id="tableDataTentative" class="table table-bordered table-hover table-condensed">
                <a href="<?php echo base_url('home/reservationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                <thead>
                  <tr>
                    <th>Guest Name</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Total Pax</th>
                    <!-- <th>Date / Time</th> -->
                    <th>Reservation Handled</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // print_r($rsv);


                  ?>

                <?php 
                  if(! empty($rsv)){
                  $no = 1;
                    foreach ($rsv as $key) {
                      if($key['status'] == '2') {

                      $id_reservation     = $key['id_reservation'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $last_name          = $key['last_name'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];

                      // $arrival_date       = $key['arrival_date'];
                      // $depart_date        = $key['depart_date'];
                      $email              = $key['emailCP'];
                      $phone_number       = $key['phoneCP'];
                      $pax                = $key['total_pax'];
                      // $datetime           = $key['datetimeCP'];
                      $reservation_handle_by = $key['reservation_handle_by'];                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['emailCP'];?> </td>
                        <td> <?php echo $key['phoneCP'];?> </td>
                        <td> <?php echo $key['total_pax'];?></td>
                        <!-- <td > <?php echo date('d F Y H:i:s', strtotime($datetime)); ?> </td> -->
                        <td> <?php echo $key['reservation_handle_by'];?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" onclick="viewReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-eye"></i></button>  
                           <button type="button" class="btn btn-primary btn-sm" onclick="editReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-edit"></i></button> 
                           <button type="button" class="btn btn-danger btn-sm" onclick="removeReservation(<?php echo $id_reservation ?>)"><i class="fa fa-trash"></i></button>
                          <!-- <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button> -->
                        </td>

                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php  
                        }
                    } 
                  }  
                  else {
                    echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                  }
                     
                  ?>
              </tbody>
              </table>
                </div>




                <div id="wl" class="tab-pane fade">
                  <br/>
                  <table id="tableDataWaiting" class="table table-bordered table-hover table-condensed">
                    <a href="<?php echo base_url('home/reservationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a>
                <!-- <a href="<?php echo base_url('home/reservationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                 <thead>
                  <tr>
                    <th>Guest Name</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Date / Time</th> -->
                    <th>Reservation Handled</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // print_r($rsv);


                  ?>

                <?php 
                  if(! empty($rsv)){
                  $no = 1;
                    foreach ($rsv as $key) {
                      if($key['status'] == '3') {

                      $id_reservation     = $key['id_reservation'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $last_name          = $key['last_name'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];
                      $email              = $key['emailCP'];
                      $phone_number       = $key['phoneCP'];
                      // $datetime           = $key['datetimeCP'];
                      $reservation_handle_by = $key['reservation_handle_by'];                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['emailCP'];?> </td>
                        <td> <?php echo $key['phoneCP'];?> </td>
                        <!-- <td > <?php echo date('d F Y H:i:s', strtotime($datetime)); ?> </td> -->
                        <td> <?php echo $key['reservation_handle_by'];?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" onclick="viewReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-eye"></i></button>  
                           <button type="button" class="btn btn-primary btn-sm" onclick="editReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-edit"></i></button> 
                           <button type="button" class="btn btn-danger btn-sm" onclick="removeReservation(<?php echo $id_reservation ?>)"><i class="fa fa-trash"></i></button>
                          <!-- <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button> -->
                        </td>

                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php  
                        }
                    } 
                  }  
                  else {
                    echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                  }
                     
                  ?>
              </tbody>
              </table>
                </div>





                <div id="confirm" class="tab-pane fade">
                  <br/>
                  <table id="tableDataConfirm" class="table table-bordered table-hover table-condensed">
                    <a href="<?php echo base_url('home/reservationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a>
                <!-- <a href="<?php echo base_url('home/reservationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                 <thead>
                  <tr>
                    <th>Guest Name</th>
                    <th>Arrival Date</th>
                    <th>Departure Date</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Date / Time</th> -->
                    <th>Reservation Handled</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    // print_r($rsv);


                  ?>

                <?php 
                  if(! empty($rsv)){
                  $no = 1;
                    foreach ($rsv as $key) {
                      if($key['status'] == '1') {

                      $id_reservation     = $key['id_reservation'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $last_name          = $key['last_name'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];
                      $email              = $key['emailCP'];
                      $phone_number       = $key['phoneCP'];
                      // $datetime           = $key['datetimeCP'];
                      $reservation_handle_by = $key['reservation_handle_by'];                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['emailCP'];?> </td>
                        <td> <?php echo $key['phoneCP'];?> </td>
                        <!-- <td > <?php echo date('d F Y H:i:s', strtotime($datetime)); ?> </td> -->
                        <td> <?php echo $key['reservation_handle_by'];?> </td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" onclick="viewReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-eye"></i></button>  
                           <button type="button" class="btn btn-primary btn-sm" onclick="editReservation(<?php echo $id_reservation; ?>)"><i class="fa fa-edit"></i></button> 
                           <button type="button" class="btn btn-danger btn-sm" onclick="removeReservation(<?php echo $id_reservation ?>)"><i class="fa fa-trash"></i></button>
                          <!-- <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button> -->
                        </td>

                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php  
                        }
                    } 
                  }  
                  else {
                    echo "<tr><td align='center' colspan='5'>Data Not Yet </td></tr>";
                  }
                     
                  ?>
              </tbody>
              </table>
                </div>

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
   <div id="modalReservation" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateReservation'); ?>" method="post">
                                      <div class="modal-dialog modal-lg">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-edit"></i> EDIT RESERVATION</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">

                                            <div class="form-group col-xs-4 input_fields_wrap_tittle">
                                              <label for="guestNameInput">Tittle</label>
                                                <select name="TittleReservationEditModal" id="idTittleReservationEditModal" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="MR">MR.</option>
                                                  <option value="MRS">MRS.</option>
                                                  <option value="MISS">MISS.</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">First Name</label>
                                              <input type="hidden" name="id_reservation" id="idReservation">
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="FirstNameReservationEditModal" class="form-control" id="idFirstnameReservationEditModal" placeholder="Enter first name" required>
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">Surname</label>
                                              <!-- <input type="hidden" name="id_reservation" id="idReservation"> -->
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="SurnameReservationEditModal" class="form-control" id="idSurnameReservationEditModal" placeholder="Enter first name" required>
                                            </div>

<!--                                             <div class="form-group col-xs-4 input_fields_wrap_middle">
                                              <label for="guestNameInput">Middle Name</label>
                                              <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                                              <input type="text" name="MiddleNameReservationEditModal" class="form-control" id="idMiddleNameReservationEditModal" placeholder="Enter middle name">
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_last">
                                              <label for="identityGuestType">Last Name</label>
                                               <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span> ADD GROUP NAME</button>
                                              <input type="text" name="LastNameReservationEditModal" class="form-control" id="idLastNameReservationEditModal" placeholder="Enter last Name">
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="adf">Arrival Date</label>
                                              <input type="date" name="ArrivalDateReservationEditModal" class="form-control" id="idArrivalDateReservationEditModal" required>
                                            </div>

                                           <div class="form-group col-xs-4">
                                              <label for="adf">Arrival Time</label>
                                              <input type="time" name="ArrivalTimeReservationEditModal" class="form-control" id="idArrivalTimeReservationEditModal" required>
                                            </div>

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="adf">Arrival Date</label>
                                              <input type="datetime-local" name="ArrivalDateReservationEditModal" class="form-control" id="idArrivalDateReservationEditModal" required>
                                            </div>

                                           <div class="form-group col-xs-4">
                                              <label for="adf">Departure Date</label>
                                              <input type="datetime-local" name="DepartDateReservationEditModal" class="form-control" id="idDepartDateReservationEditModal" required>
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Total Pax</label>
                                              <input type="number" name="TotalPaxReservationEditModal" class="form-control" id="idTotalPaxReservationEditModal" placeholder="Enter Total Pax" required>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="adf">Departure Date</label>
                                              <input type="date" name="DepartureDateReservationEditModal" class="form-control" id="idDepartureDateReservationEditModal" required>
                                            </div>

                                           <div class="form-group col-xs-4">
                                              <label for="adf">Departure Time</label>
                                              <input type="time" name="DepartureTimeReservationEditModal" class="form-control" id="idDepartureTimeReservationEditModal" required>
                                            </div>

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="identityAgent">Building</label>
                                             <select name="BuildingReservationEditModal" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()" required>
                                                <option value="buildingNone"> </option>
                                              <?php foreach ($gb as $key) {
                                                // echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Floor</label>
                                             <select name="FloorReservationEditModal" id="selectFloorReservation" class="form-control " onchange="changeFloorEditReservation()" required>
                                                <option value="floorNone"> </option> -->
                                                      <!-- COMMAND LAMA JGN DI APUS   -->
                                                      <!-- <?php foreach ($gf as $key) {
                                                        // echo  "<option value=".$key['id_room'].">".$key['floor']."</option>";
                                                      } ?> -->
                                                      <!-- END COMMAND LAMA -->
                                              <!-- </select>
                                            </div> -->

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="identityAgent">No Room</label>
                                             <select name="NoRoomReservationEditModal" id="idNoRoomReservationEditModal" class="form-control" required>
                                                <option value="noroom"> </option> -->
                                                      <!-- COMMAND LAMA JGN DI APUS -->
                                                      <!-- <?php foreach ($gnrer as $key) {
                                                        // echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                                      } ?> -->
                                                      <!-- END COMMAND LAMA -->
                                              <!-- </select>
                                            </div> -->

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="identityAgent">Type Room</label>
                                             <select name="RoomTypeReservationEditModal" style="text-transform: uppercase;" id="selectRoomTypeReservationEditModal" class="form-control " onchange="changeTypeRoomReservation()" required>
                                                <option value="roomtype"> </option>
                                              <?php foreach ($gtr as $key) {
                                                //echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Room Rate</label>
                                              <input type="text" name="RoomRateReservationEditModal" class="form-control" id="idRoomRateReservationEditModal" readonly>
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="identityInput">Billing Instruction</label>
                                                <select name="BillingInstructionReservationEditModal" id="idBillingInstructionReservationEditModal" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="GUARANTEE" style="text-transform: uppercase;">GUARANTEE LETTER</option>
                                                  <option value="PERSACC" style="text-transform: uppercase;">PERSONAL ACCOUNT</option>
                                                  <option value="VOUCHER" style="text-transform: uppercase;">VOUCHER</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="addressInput">Spesial Request</label>
                                              <textarea class="form-control" name="SpesialRequestReservationEditModal" id="idSpesialRequestReservationEditModal" rows="4" placeholder="Enter Your Request"  style="resize: none; overflow: auto;"></textarea>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Deposit</label>
                                                <select name="DepositByReservationEditModal" id="idDepositByReservationEditModal" class="form-control" onchange="checkDepositReserv()" >
                                                  <option value="complete"> </option>
                                                  <option value="CASH">CASH</option>
                                                  <option value="CREDIT">CREDIT</option>
                                                  <!-- <option value="DEBIT">DEBIT</option> -->
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Type Card</label>
                                             <select name="TypeCardReservationEditModal" id="idTypeCardReservationEditModal" class="form-control">
                                                <option value="noroom"> </option>
                                              <?php foreach ($gtcer as $key) {
                                                echo  "<option value=".$key['id_type_card'].">".$key['type_card']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Card No</label>
                                              <input type="text" name="CardNoReservationEditModal" class="form-control" id="idCardNoReservationEditModal" placeholder="Enter Card No" >
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="adf">Expired Date</label>
                                              <input type="date" name="ExpDateReservationEditModal" class="form-control" id="idExpDateReservationEditModal">
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="addressInput">Note</label>
                                              <textarea class="form-control" name="NoteReservationEditModal" id="idNoteReservationEditModal" rows="4" placeholder="Enter Your Note"  style="resize: none; overflow: auto;"></textarea>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGuestType">Guest Type</label>
                                              <a href="<?php echo base_url('home/newGuestType'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW GUEST TYPE</a>
                                             <select name="GuestTypeReservationEditModal" id="idGuestTypeReservationEditModal" class="form-control" >
                                                <option value="guest_type"> </option>
                                              <?php foreach ($ggter as $key) {
                                                echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGroup">Detail</label>
                                              <a href="<?php echo base_url('home/newDetail'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW DETAIL</a>
                                             <select name="DetailGuestTypeReservationEditModal" id="idDetailGuestTypeReservationEditModal" class="form-control" style="text-transform: uppercase;">
                                                <option value="group_registration"> </option>
                                              <?php foreach ($gdgter as $key) {
                                                echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                                              } ?>
                                              </select>
                                              <!-- <input type="checkbox" name="cb_group" id="cb_group" value="1"><small><b>&nbsp&nbsp*Klik for Group Reservation</b></small> -->
                                            </div>

                                            <div class="form-group col-xs-8">
                                              <label for="identityStatus">Status</label>
                                             <select name="StatusReservationEditModal" id="idStatusReservationEditModal" class="form-control" >
                                                <option value="status"> </option>
                                              <?php foreach ($status as $key) {
                                                echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                                              } ?>
                                              </select> 
                                            </div>

                                            <div class="form-group col-xs-12">
                                              <label for="addressInput">Remarks</label>
                                              <textarea class="form-control" name="RemarksReservationEditModal" id="idRemarksReservationEditModal" rows="4" placeholder="Enter Remarks"  style="resize: none; overflow: auto;"></textarea required>
                                            </div>

                                            <div class="form-group  col-xs-12">
                                            <h3><i class="fa fa-address-book"></i> CONTACT PERSON</h3>
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_tittle">
                                              <label for="guestNameInput">Tittle</label>
                                                <select name="TittleCPReservationEditModal" id="idtittleCPReservationEditModal" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="MR">MR.</option>
                                                  <option value="MRS">MRS.</option>
                                                  <option value="MISS">MISS.</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">First Name</label>
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="FirstNameCPReservationEditModal" class="form-control" id="idFirstNameCPReservationEditModal" placeholder="Enter first name" required>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Surname</label>
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="SurnameCPReservationEditModal" class="form-control" id="idSurnameCPReservationEditModal" placeholder="Enter first name" required>
                                            </div>

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Middle Name</label>
                                              <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                                              <input type="text" name="MiddleNameCPReservationEditModal" class="form-control" id="idMiddleNameCPReservationEditModal" placeholder="Enter middle name">
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGuestType">Last Name</label>
                                               <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span> ADD GROUP NAME</button>
                                              <input type="text" name="LastNameCPReservationEditModal" class="form-control" id="idLastNameCPReservationEditModal" placeholder="Enter last Name">
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Phone</label>
                                              <input type="text" name="PhoneNumberCPReservationEditModal" class="form-control" id="idPhoneNumberCPReservationEditModal" placeholder="Enter phone" required>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Email</label>
                                              <input type="email" name="EmailCPReservationEditModal" class="form-control" id="idEmailCPReservationEditModal" placeholder="Enter Email" required>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="adf">Date / Time</label>
                                              <input type="datetime-local" name="DateTimeCPReservationEditModal" class="form-control" id="idDateTimeCPReservationEditModal" required>
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">Reservation Handled</label>
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="ReservByReservationEditModal" class="form-control" id="idReservByReservationEditModal" placeholder="Enter name" required>
                                            </div>

                                            <button style="margin-left: 490px; margin-top: 70px;" type="submit" class="btn btn-sm btn-primary" name="submitCompany"><i class="fa fa-refresh"></i> Update</button>

                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->
                                            
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                  </form>
                                </div>
                        </div>
                      </div>
  </div>

  <!-- View Modal -->
   <div id="modalViewReservation" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/addReservTORegistrationGuest'); ?>" method="post">
                                      <div class="modal-dialog modal-lg">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-book"></i> VIEW RESERVATION</h4>
                                          </div>
                                          <!-- body modal -->
                                          <div class="modal-body">

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">TITTLE</label>
                                                <select name="tittle_edit2" id="tittle_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                  <option value=""></option>
                                                  <option value="MR">MR.</option>
                                                  <option value="MRS">MRS.</option>
                                                  <option value="MISS">MISS.</option>
                                                </select>
                                            </div>

                                            <!-- <div class="form-group col-xs-2">
                                              <label for="guestNameInput">TITTLE</label>
                                              <label for="guestNameInput">&nbsp;</label>
                                                <input type="text" name="tittle_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"  id="tittle_modal2" placeholder="Enter first name" readonly>
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">FIRST NAME</label>
                                              <input type="hidden" name="id_reservation2" id="idReservation2">
                                              <label for="guestNameInput">&nbsp;</label>
                                                <input type="text" name="first_name_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"  id="first_name_modal2" placeholder="Enter first name" readonly>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">SURNAME</label>
                                              <!-- <input type="hidden" name="id_reservation2" id="idReservation2"> -->
                                              <label for="guestNameInput">&nbsp;</label>
                                                <input type="text" name="surname_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"  id="surname_modal2" readonly>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">MIDDLE NAME</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="middle_name_modal2" name="middle_name_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">LAST NAME</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="last_name_modal2" name="last_name_edit2" readonly />
                                              </div>
                                            </div> -->

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">ARRIVAL DATE</label>
                                                <input type="date" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="arrivalDate_modal2" name="arrivalDate_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">ARRIVAL TIME</label>
                                                <input type="time" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="arrivalTime_modal2" name="arrivalTime_edit2" readonly />
                                              </div>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">ARRIVAL DATE</label>
                                                <input type="datetime-local" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="arrival_modal2" name="arrival_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">DEPARTURE DATE</label>
                                                <input type="datetime-local" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="departure_modal2" name="departure_edit2" readonly />
                                              </div>
                                            </div> -->

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">TOTAL PAX</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="total_modal2" name="total_edit2" readonly />
                                              </div>
                                            </div>

                                             <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">DEPARTURE DATE</label>
                                                <input type="date" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="departDate_modal2" name="departDate_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">DEPARTURE TIME</label>
                                                <input type="time" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="departTime_modal2" name="departTime_edit2" readonly />
                                              </div>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="BuildingViewReservation">BUILDING</label>
                                                   <select name="building_edit2" id="building_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                      <option value="building"> </option>
                                                    <?php foreach ($gb as $key) {
                                                      echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                                                    } ?>
                                                    </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">FLOOR</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="floor_modal2" name="floor_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">NO ROOM</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="no_room_modal2" name="no_room_edit2" readonly />
                                              </div>
                                            </div> -->

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="BuildingViewReservation">FLOOR</label>
                                                   <select name="floor_edit2" id="floor_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;">
                                                      <option value="floor"> </option>
                                                    <?php foreach ($gf as $key) {
                                                      echo  "<option value=".$key['id_room'].">".$key['floor']."</option>";
                                                    } ?>
                                                    </select>
                                              </div>
                                            </div> -->

<!--                                             <div class="form-group col-xs-4">
                                              <label for="NoRoom">NO ROOM</label>
                                             <select name="no_room_edit2" id="no_room_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;">
                                                <option value="noroom"> </option>
                                              <?php foreach ($gnrm as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                              } ?>pay_methodpay_method
                                              </select>
                                            </div> -->

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="identityAgent">TYPE ROOM</label>
                                             <select name="room_type_edit2" id="room_type_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" onchange="changeTypeRoomReservationModal()" readonly>
                                                <option value="roomtype"> </option>
                                              <?php foreach ($rtm as $key) {
                                                echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">ROOM RATE</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="room_rate_modal2" name="room_rate_edit2" readonly />
                                              </div>
                                            </div> -->

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="identityAgent">BILLING INSTRUCTION</label>
                                                   <select name="billing_instruction_edit2" id="billing_instruction_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                      <option value="segment"> </option>
                                                      <option value="GUARANTEE" style="text-transform: uppercase;">GUARANTEE LETTER</option>
                                                      <option value="PERSACC" style="text-transform: uppercase;">PERSONAL ACCOUNT</option>
                                                      <option value="VOUCHER" style="text-transform: uppercase;">VOUCHER</option>
                                                    </select>
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="addressInput">SPESIAL REQUEST</label>
                                              <textarea class="form-control" name="spesial_request_edit2" id="spesial_request_modal2" rows="4" style="resize: none; overflow: auto; font-weight: bold; text-transform: uppercase;" readonly></textarea>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">DEPOSIT</label>
                                                <select name="pay_method" id="selectPay_Method" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                  <option value="complete"> </option>
                                                  <option value="CASH">CASH</option>
                                                  <option value="CREDIT">CREDIT</option>
                                                  <option value="DEBIT">DEBIT</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">TYPE CARD</label>
                                             <select name="TypeCardReservationEditModal" id="idTypeCardReservationEditModal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="noroom"> </option>
                                              <?php foreach ($gtcer as $key) {
                                                echo  "<option value=".$key['id_type_card'].">".$key['type_card']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">CARD NO</label>
                                              <input type="text" name="CardNoReservationEditModal" class="form-control no-border" id="idCardNoReservationEditModal2" style="font-weight: bold; text-transform: uppercase;" readonly>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">EXPIRED DATE</label>
                                                <input type="date" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="exp_date_modal2" name="exp_date_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="addressInput">NOTE</label>
                                              <textarea class="form-control" name="note_edit2" id="note_modal2" rows="4" style="resize: none; overflow: auto; font-weight: bold; text-transform: uppercase;" readonly></textarea>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="identityGuestType">GUEST TYPE</label>
                                               <select name="guest_type" id="selectGuestType" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                  <option value="guest_type"> </option>
                                                <?php foreach ($ggtr as $key) {
                                                  echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                                                } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGroup">DETAIL</label>
                                             <select name="detail_guest_type" id="selectDetailGuestType" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                <option value="group_registration"> </option>
                                              <?php foreach ($gdgtr as $key) {
                                                echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-8">
                                              <label for="identityStatus">STATUS</label>
                                             <select name="status_edit2" id="selectStatus" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                <option value="status"> </option>
                                              <?php foreach ($status as $key) {
                                                echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-12">
                                              <label for="addressInput">REMARKS</label>
                                              <textarea class="form-control no-border" style="font-weight: bold; text-transform: uppercase; resize: none;" name="remarks_edit2" id="remarks_modal2" rows="4" placeholder="Enter Remarks"  style="resize: none; overflow: auto;" readonly></textarea>
                                            </div>

                                            <div class="form-group  col-xs-12">
                                            <h3><i class="fa fa-address-book"></i> CONTACT PERSON</h3>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">TITTLE</label>
                                                <select name="tittle_cp_edit2" id="tittle_cp_modal2" class="form-control" no-border" style="font-weight: bold; text-transform: uppercase;" readonly>
                                                  <option value=""></option>
                                                  <option value="MR">MR.</option>
                                                  <option value="MRS">MRS.</option>
                                                  <option value="MISS">MISS.</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">FIRST NAME</label>
                                              <!-- <input type="hidden" name="id_reservation2" id="idReservation2"> -->
                                              <label for="guestNameInput">&nbsp;</label>
                                                <input type="text" name="first_name_cp_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"  id="first_name_cp_modal2" readonly>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">SURNAME</label>
                                              <!-- <input type="hidden" name="id_reservation2" id="idReservation2"> -->
                                              <label for="guestNameInput">&nbsp;</label>
                                                <input type="text" name="surname_cp_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"  id="surname_cp_modal2" readonly>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">MIDDLE NAME</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="middle_name_cp_modal2" name="middle_name_cp_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">LAST NAME</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="last_name_cp_modal2" name="last_name_cp_edit2" readonly />
                                              </div>
                                            </div> -->

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">PHONE</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="phone_number_cp_modal2" name="phone_number_cp_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">EMAIL ADDRESS</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="email_cp_modal2" name="email_cp_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">DATE / TIME</label>
                                                <input type="datetime-local" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="datetime_cp_modal2" name="datetime_cp_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="ReservationHanded">RESERVATION HANDLED</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="reserv_handled_modal2" name="reserv_handled_edit2" readonly />
                                              </div>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="user_photo">IDENTITY PHOTO</label>
                                                <input type="file" id="input-file-now-view" class="dropifyView" name="identity_foto" accept="image/*"  />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">IDENTITY TIPE</label>
                                                <input type="text" class="form-control" id="identity_type_modal" name="identity_type_edit" />

                                                <select id="identity_type_modal2" name="identity_type_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled />
                                            <?php 
                                                foreach ($identipe as $key) {
                                                  echo "<option value='".htmlspecialchars($key['id_identity_tipe'])."'>";
                                                  echo $key['name_identity'];
                                                  echo "</option>";
                                                }
                                            ?>
                                          </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">IDENTITY NUMBER</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="identity_number_modal2" name="identity_number_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label>GENDER</label><br/>
                                              <form method="post" action="#">
                                              <input type="radio" id="genderLReservation" name="gender_view_reservation" value="Male" disabled > Male &nbsp
                                              <input type="radio" id="genderPReservation" name="gender_view_reservation" value="Female" disabled> Female
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="countryInput">NATIONALITY</label>
                                               <select name="regist_country_viewReserv" id="selectCountryRegistViewReserv" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="country"> </option>
                                                <?php foreach ($gcvr as $key) {
                                                  echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                                                } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="provinceInput">PROVINCE</label>
                                               <select name="regist_province_viewReserv" id="selectProvinceRegistViewReserv" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="province"> </option>
                                                   <?php foreach ($gpvr as $key) {
                                                      echo  "<option value=".$key['id_province'].">".$key['name_province']."</option>";
                                                   } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="cityInput">CITY</label>
                                                 <select name="regist_city_viewReserv" id="selectCityRegistViewReserv" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="city"> </option>
                                                  <?php foreach ($gcivr as $key) {
                                                      echo  "<option value=".$key['id_city'].">".$key['name_city']."</option>";
                                                   } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-12">
                                              <label for="zipInput">ZIP CODE</label>
                                              <input type="text" name="zip_code" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="zipInputView" placeholder="Enter zip code" readonly >
                                            </div>

                                             <div class="form-group col-xs-12">
                                              <label for="addressInput">ADDRESS</label>
                                              <textarea class="form-control no-border" style="font-weight: bold; text-transform: uppercase; resize: none; overflow: auto;" name="address_edit2" id="address_modal2" rows="4" placeholder="Enter address"readonly></textarea>
                                            </div>

                                            <div class="form-group col-xs-2">
                                              <label for="identityAgent">NO ROOM</label>
                                             <select name="no_room_edit2" id="no_room_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="noroom"> </option>
                                              <?php foreach ($gnrm as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="statPayment">STATUS PAYMENT</label>
                                                <select name="stat_payment" id="stat_payment_modal" class="form-control" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="complete"> </option>
                                                  <?php foreach ($gsp as $key) {
                                                    echo  "<option value=".$key['id_stat_payment'].">".$key['status_payment']."</option>";
                                                  } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4 ">
                                              <label for="PriceRoom">TOTAL BILL</label>
                                              <input type="text" name="tot_bill" class="form-control" id="PriceRoomView" style="font-weight: bold; text-transform: uppercase;" readonly>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">No Room</label>
                                                <input type="text" class="form-control" id="no_room_modal" name="no_room_edit" />
                                              </div>
                                            </div> -->

                                            <button style="margin-left: 90%;" type="submit" class="btn btn-sm btn-primary" name="submitCompany"><i class="fa fa-check"></i></button>

                                            <button type="button" style="color: #FFFFFF; margin-right: 10px;" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></a>

                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <!-- <button type="button" style="color: #FFFFFF; margin-right: 15px;" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-check"></i></a> -->
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                  </form>
                                </div>

<!-- View Reservation Confirm -->

<!-- <div id="modalViewReservation" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/Guest'); ?>" method="post">
                                      <div class="modal-dialog modal-lg">
                                         konten modal
                                        <div class="modal-content">
                                          heading modal
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-book"></i> VIEW RESERVATION</h4>
                                          </div>
                                          body modal
                                          <div class="modal-body">

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="identityAgent">Segmentation</label>
                                                   <select name="segment" id="segment" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                      <option value="segment"> </option>
                                                    <?php foreach ($gsr as $key) {
                                                      echo  "<option value=".$key['id_segment'].">".$key['segment']."</option>";
                                                    } ?>
                                                    </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="identityGuestType">Guest Type</label>
                                               <select name="guest_type" id="selectGuestType" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="guest_type"> </option>
                                                <?php foreach ($ggtr as $key) {
                                                  echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                                                } ?>
                                                </select>
                                              </div>
                                            </div>


                                            <div class="form-group col-xs-4">
                                              <label for="identityGroup">Detail</label>
                                             <select name="detail_guest_type" id="selectDetailGuestType" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="group_registration"> </option>
                                              <?php foreach ($gdgtr as $key) {
                                                echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                                              } ?>
                                              </select>
                                              <input type="checkbox" name="cb_group" id="cb_group" value="1"><small><b>&nbsp&nbsp*Klik for Group Reservation</b></small>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">FIRST NAME</label>
                                                <input type="hidden" name="id_reservation2" id="idReservation2">
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="first_name_modal2" name="first_name_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">MIDDLE NAME</label>
                                                <input type="hidden" name="id_reservation2" id="idReservation2">
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="middle_name_modal2" name="middle_name_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">LAST NAME</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="last_name_modal2" name="last_name_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="user_photo">Identity Photo</label>
                                                <input type="file" id="input-file-now-view" class="dropifyView" name="identity_foto" accept="image/*"  />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">IDENTITY TIPE</label>
                                                <input type="text" class="form-control" id="identity_type_modal" name="identity_type_edit" />

                                                <select id="identity_type_modal2" name="identity_type_edit2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled />
                                            <?php 
                                                foreach ($identipe as $key) {
                                                  echo "<option value='".htmlspecialchars($key['id_identity_tipe'])."'>";
                                                  echo $key['name_identity'];
                                                  echo "</option>";
                                                }
                                            ?>
                                          </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">IDENTITY NUMBER</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="identity_number_modal2" name="identity_number_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label>Gender</label><br/>
                                              <form method="post" action="#">
                                              <input type="radio" id="genderLReservation" name="gender_view_reservation" value="Male" > Male &nbsp
                                              <input type="radio" id="genderPReservation" name="gender_view_reservation" value="Female" > Female
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">EMAIL ADDRESS</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="email_modal2" name="email_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">PHONE</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="phone_number_modal2" name="phone_number_edit2" readonly />
                                              
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="countryInput">Nationality</label>
                                               <select name="regist_country" id="selectCountryRegist" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="country"> </option>
                                                <?php foreach ($gcvr as $key) {
                                                  echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                                                } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="provinceInput">Province</label>
                                               <select name="regist_province" id="selectProvinceRegist" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="province"> </option>
                                                   <?php foreach ($gpvr as $key) {
                                                      echo  "<option value=".$key['id_province'].">".$key['name_province']."</option>";
                                                   } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="cityInput">City</label>
                                                 <select name="regist_city" id="selectCityRegist" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="city"> </option>
                                                  <?php foreach ($gcivr as $key) {
                                                      echo  "<option value=".$key['id_city'].">".$key['name_city']."</option>";
                                                   } ?>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-12">
                                              <label for="zipInput">Zip Code</label>
                                              <input type="text" name="zip_code" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="zipInput" placeholder="Enter zip code" readonly >
                                            </div>

                                             <div class="form-group col-xs-12">
                                              <label for="addressInput">Address</label>
                                              <textarea class="form-control no-border" style="font-weight: bold; text-transform: uppercase; resize: none; overflow: auto;" name="address_edit2" id="address_modal2" rows="4" placeholder="Enter address"readonly></textarea>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">CHECK IN</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="arrival_modal2" name="arrival_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">CHECK OUT</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="departure_modal2" name="departure_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">TOTAL PAX</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;"" id="total_modal2" name="total_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">TYPE ROOM</label>
                                             <select name="room_type_edit2" id="room_type_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" onchange="changeTypeRoomReservationModal()" disabled>
                                                <option value="roomtype"> </option>
                                              <?php foreach ($rtm as $key) {
                                                echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="col-sm-2">
                                              <div class="form-group">
                                                <label for="TypeRoom">ROOM RATE</label>
                                                <input type="text" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" id="room_rate_modal2" name="room_rate_edit2" readonly />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-2">
                                              <label for="identityAgent">NO ROOM</label>
                                             <select name="no_room_edit2" id="no_room_modal2" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="noroom"> </option>
                                              <?php foreach ($gnrm as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityStatus">STATUS</label>
                                             <select name="status" id="selectStatus" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="status"> </option>
                                              <?php foreach ($status as $key) {
                                                echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-12">
                                              <label for="addressInput">REMARKS</label>
                                              <textarea class="form-control no-border" style="font-weight: bold; text-transform: uppercase; resize: none;" name="remarks_edit2" id="remarks_modal2" rows="4" placeholder="Enter Remarks"  style="resize: none; overflow: auto;" readonly></textarea>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityStatus">PAYMENT METHOD</label>
                                             <select name="pay_method" id="selectPay_Method" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                <option value="status"> </option>
                                              <?php foreach ($pay_method as $key) {
                                                echo  "<option value=".$key['id_pay_method'].">".$key['payment_method']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Payment Method</label>
                                                <select name="pay_method" id="selectPay_Method" class="form-control no-border" style="font-weight: bold; text-transform: uppercase;" disabled onchange="checkValCode()" >
                                                  <option value="complete"> </option>
                                                  <option value="CASH">CASH</option>
                                                  <option value="CREDIT">CREDIT</option>
                                                  <option value="DEBIT">DEBIT</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="statPayment">Status Payment</label>
                                                <select name="stat_payment" id="stat_payment_modal" class="form-control" style="font-weight: bold; text-transform: uppercase;" disabled>
                                                  <option value="complete"> </option>
                                                  <option value="complete">Complete</option>
                                                  <option value="incomplete">Incomplete</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4 ">
                                              <label for="PriceRoom">Total Bill</label>
                                              <input type="text" name="tot_bill" class="form-control" id="PriceRoom" style="font-weight: bold; text-transform: uppercase;" readonly>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">No Room</label>
                                                <input type="text" class="form-control" id="no_room_modal" name="no_room_edit" />
                                              </div>
                                            </div>

                                            <button style="margin-left: 90%;" type="submit" class="btn btn-sm btn-primary" name="submitCompany"><i class="fa fa-check"></i></button>

                                            <button type="button" style="color: #FFFFFF; margin-right: 10px;" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i></a>

                                          </div>
                                          footer modal
                                          <div class="modal-footer">
                                            <button type="button" style="color: #FFFFFF; margin-right: 15px;" class="btn btn-sm btn-primary" data-dismiss="modal"><i class="fa fa-check"></i></a>
                                            
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                  </form>
                                </div> -->



<!-- End View Reservation Confirm -->
                        </div>
                      </div>
  </div>
  <iframe id="iframePDF4" width="0" height="0"></iframe>
  