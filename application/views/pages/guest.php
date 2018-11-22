  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        REGISTRATION
        <small>GUEST</small>
      </h1>
      <ol class="breadcrumb">
        <!-- <li><i class="fa fa-cog"></i> SETTING</li> -->
        <li><i class="fa fa-registered"></i> REGISTRATION GUEST HOTEL</li>
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
              <h3 class="box-title"><i class="fa fa-database"></i> DATA GUEST</h3>
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
                  <table id="tableDataGuestTentative" class="table table-bordered table-hover table-condensed">
                <a href="<?php echo base_url('home/registrationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                <thead>
                  <tr>
                    <!-- <th>Nomor</th> -->
                    <th>Guest Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Email</th>
                    <th>Phone</th> 
                    <th>Identity Type</th>
                    <!-- <th>Guest Type</th> -->
                    <th>Address</th>
                    <!-- <th>Remarks</th> -->
                    <th>Status Payment</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  if(! empty($guest)){
                  $no = 1;
                    foreach ($guest as $key) {
                      if($key['status'] == '2') {

                      $id_regist          = $key['id_regist'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $middle_name        = $key['middle_name'];
                      $last_name          = $key['last_name'];
                      $email              = $key['email'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];
                      $phone        = $key['phone'];
                      // $guest_type         = $key['guest_type'];
                      $dsc_tipe           = $key['guest_room_type'];
                      $no_of_room         = $key['no_of_room'];
                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['email'];?> </td>
                        <td> <?php echo $key['phone'];?> </td>
                        <td> <?php echo $key['name_identity'];?> </td>
                        <!-- <td> <?php echo $key['guest_type'];?> </td> -->
                        <td> <?php echo $key['address'];?> </td>
                        <!-- <td> <?php echo $key['remarks'];?> </td> -->
                        <td> <?php echo $key['stat_payment'];?> </td>
                        <td>
                          <button class="btn btn-info btn-sm" data-id="<?php echo $id_regist; ?>" data-json='<?php echo json_encode($key) ?>' onclick="openDepositModal(this)"><i class="fa fa-money"></i></button>
                          <button class="btn btn-info btn-sm" onclick="editGuestTentativeModal(<?php echo $id_regist; ?>)"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button>


                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php }
                    }
                  } 
                  else {
                    echo "<tr><td align='center' colspan='10'>Data Not Available ! </td></tr>";
                  }
                  ?>
              </tbody>
              </table>
                </div>









                <div id="confirm" class="tab-pane fade">
                  <br/>
                  <table id="tableDataGuestConfirm" class="table table-bordered table-hover table-condensed">
                <a href="<?php echo base_url('home/registrationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                <thead>
                  <tr>
                     <th>Guest Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Email</th>
                    <th>Phone</th> 
                    <th>Identity Type</th>
                    <!-- <th>Guest Type</th> -->
                    <th>Address</th>
                    <th>Remarks</th>
                    <th>Status Payment</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  if(! empty($guest)){
                  $no = 1;
                    foreach ($guest as $key) {
                      if($key['status'] == '1') {

                      $id_regist          = $key['id_regist'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $middle_name        = $key['middle_name'];
                      $last_name          = $key['last_name'];
                      $email              = $key['email'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];
                      $phone        = $key['phone'];
                      // $guest_type         = $key['guest_type'];
                      $dsc_tipe           = $key['guest_room_type'];
                      $no_of_room         = $key['no_of_room'];
                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['email'];?> </td>
                        <td> <?php echo $key['phone'];?> </td>
                        <td> <?php echo $key['name_identity'];?> </td>
                        <!-- <td> <?php echo $key['guest_type'];?> </td> -->
                        <td> <?php echo $key['address'];?> </td>
                        <td> <?php echo $key['remarks'];?> </td>
                        <td> <?php echo $key['stat_payment'];?> </td>
                        <td> 
                          <button class="btn btn-info btn-sm" data-id="<?php echo $id_regist; ?>" data-json='<?php echo json_encode($key) ?>' onclick="openDepositModal(this)"><i class="fa fa-money"></i></button>
                          <button class="btn btn-info btn-sm" onclick="editGuestTentativeModal(<?php echo $id_regist; ?>)"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button>


                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php }
                    }
                  } else {
                    echo "<tr><td align='center' colspan='10'>Data Not Available ! </td></tr>";
                  }
                  ?>
              </tbody>
              </table>
                </div>



                <div id="wl" class="tab-pane fade">
                  <br/>
                  <table id="tableDataGuestWaiting" class="table table-bordered table-hover table-condensed">
                <a href="<?php echo base_url('home/registrationGuest'); ?>" class="btn btn-success btn-sm"><span class="fa fa-plus">&nbsp</span>Add New</a><!-- <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a> -->
                <p>
                <thead>
                  <tr>
                     <th>Guest Name</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Email</th>
                    <th>Phone</th> 
                    <th>Identity Type</th>
                    <!-- <th>Guest Type</th> -->
                    <th>Address</th>
                    <th>Remarks</th>
                    <th>Status Payment</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  if(! empty($guest)){
                  $no = 1;
                    foreach ($guest as $key) {
                      if($key['status'] == '3') {

                      $id_regist          = $key['id_regist'];
                      $tittle             = $key['tittle'];
                      $first_name         = $key['first_name'];
                      $middle_name        = $key['middle_name'];
                      $last_name          = $key['last_name'];
                      $email              = $key['email'];
                      $arr_date           = $key['arr_date'];
                      $arr_time           = $key['arr_time'];
                      $dprt_date          = $key['dprt_date'];
                      $dprt_time          = $key['dprt_time'];
                      $phone        = $key['phone'];
                      // $guest_type         = $key['guest_type'];
                      $dsc_tipe           = $key['guest_room_type'];
                      $no_of_room         = $key['no_of_room'];
                      
                      ?>
                      <tr>
                        <!-- <td> <?php echo $no++;?></td> -->
                        <td style="text-transform: uppercase; word-wrap: 0;" id="testNama"> <?php echo $key['tittle'].". ".$key['first_name']." ".$key['surname'];?> </td>
                        <td > <?php echo date('d F Y', strtotime($arr_date))." ".date('H:i:s', strtotime($arr_time)); ?> </td>
                        <td > <?php echo date('d F Y', strtotime($dprt_date))." ".date('H:i:s', strtotime($dprt_time)); ?> </td>
                        <td> <?php echo $key['email'];?> </td>
                        <td> <?php echo $key['phone'];?> </td>
                        <td> <?php echo $key['name_identity'];?> </td>
                        <!-- <td> <?php echo $key['guest_type'];?> </td> -->
                        <td> <?php echo $key['address'];?> </td>
                        <td> <?php echo $key['remarks'];?> </td>
                        <td> <?php echo $key['stat_payment'];?> </td>
                        <td> 
                          <button class="btn btn-info btn-sm" data-id="<?php echo $id_regist; ?>" data-json='<?php echo json_encode($key) ?>' onclick="openDepositModal(this)"><i class="fa fa-money"></i></button>
                          <button class="btn btn-info btn-sm" onclick="editGuestTentativeModal(<?php echo $id_regist; ?>)"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-primary btn-sm guestPrintPdf" onclick="printPdfGuest(<?= $id_regist; ?>)"><i class="fa fa-file-pdf-o"></i></button>


                          <!-- <a  href="<?php //echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>" class="btn btn-info fa fa-file-pdf-o" ></a> -->
                      </tr>
                    <?php }
                    }
                  } else {
                    echo "<tr><td align='center' colspan='10'>Data Not Available ! </td></tr>";
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
   <div id="modalGuestTentative" class="modal fade" role="dialog">
                                  <form role="form" action="<?php echo base_url('home/updateGuest'); ?>" method="post" enctype="multipart/form-data">
                                      <div class="modal-dialog modal-lg">
                                        <!-- konten modal-->
                                        <div class="modal-content">
                                          <!-- heading modal -->
                                          <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><i class="fa fa-edit"></i> EDIT REGISTRATION</h4>
                                          </div>
                                          <!-- body modal -->

                                          <div class="modal-body">

                                            <div class="form-group col-xs-4">
                                              <input type="hidden" name="id_regist" id="idRegistTentative">
                                              <label for="TittleInput">Tittle</label>
                                                <select name="tittle_edit" id="tittle_modal" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="MR">MR.</option>
                                                  <option value="MRS">MRS.</option>
                                                  <option value="MISS">MISS.</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="firstNameInput">First Name</label>
                                                <input type="text" name="first_name_edit" class="form-control" id="first_name_modal" placeholder="Enter first name" >
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="firstNameInput">Surname</label>
                                                <input type="text" name="surname_edit" class="form-control" id="surname_modal" placeholder="Enter surname" >
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="middleNameInput">Middle Name</label>
                                                <input type="text" class="form-control" id="middle_name_modal" name="middle_name_edit" />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Last Name</label>
                                                <input type="text" class="form-control" id="last_name_modal" name="last_name_edit" />
                                              </div>
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="addressInput">Address</label>
                                              <textarea class="form-control" name="address_edit" id="address_modal" rows="4" placeholder="Enter address"  style="resize: none; overflow: auto;"></textarea>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="countryInput">Country</label>
                                             <select name="regist_country_edit" id="selectCountryRegist" class="form-control" >
                                                <option value="country"> </option>
                                              <?php foreach ($ghcvr as $key) {
                                                echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">City</label>
                                                <input type="text" class="form-control" id="idCityRegist" name="CityRegist" />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="zipInput">Zip Code</label>
                                              <input type="text" name="zip_code_edit" class="form-control" id="zipInput" placeholder="Enter zip code" >
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Phone</label>
                                                <input type="text" class="form-control" id="phone_modal" name="phone_edit" />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGuestType">Guest Type</label>
                                              <a href="<?php echo base_url('home/newGuestType'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW GUEST TYPE</a>
                                             <select name="guest_type_edit" id="selectGuestType_modal" class="form-control" >
                                                <option value="guest_type"> </option>
                                              <?php foreach ($ggtvr as $key) {
                                                echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityGroup">Detail</label>
                                              <a href="<?php echo base_url('home/newDetail'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW DETAIL</a>
                                             <select name="detail_guest_type_edit" id="selectDetailGuestType_modal" class="form-control" style="text-transform: uppercase;">
                                                <option value="group_registration"> </option>
                                              <?php foreach ($gdgtvr as $key) {
                                                echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                                              } ?>
                                              </select>
                                              <!-- <input type="checkbox" name="cb_group" id="cb_group" value="1"><small><b>&nbsp&nbsp*Klik for Group Reservation</b></small> -->
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="zipInput">Jabatan</label>
                                              <input type="text" name="jabatan_edit" class="form-control" id="jabatan_guest_modal" placeholder="Enter Jabatan" >
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityInput">Identity Type</label>
                                             <select name="identity_type_edit" id="selectIdentityType_modal" class="form-control" >
                                                <option value="identity"> </option>
                                              <?php foreach ($it as $key) {
                                                echo  "<option value=".$key['id_identity_tipe'].">".$key['name_identity']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="idnumberInput">Identity Number</label>
                                              <input type="text" name="identity_number_edit" class="form-control" id="identity_number_modal" placeholder="Enter ID Number" >
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Date of Birth</label>
                                                <input type="date" class="form-control" id="date_birth_modal" name="date_birth_edit" />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Email</label>
                                                <input type="email" class="form-control" id="email_modal" name="email_edit" />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="countryInput">Nationality</label>
                                             <select name="nationality_edit" id="nationality_modal" class="form-control" >
                                                <option value="country"> </option>
                                              <?php foreach ($ghcvr as $key) {
                                                echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Deposit</label>
                                                <select name="DepositRegistrationEditModal" id="idDepositRegistrationEditModal" class="form-control" onchange="checkDepositReserv()" >
                                                  <option value="complete"> </option>
                                                  <option value="CASH">CASH</option>
                                                  <option value="CREDIT">CREDIT</option>
                                                  <!-- <option value="DEBIT">DEBIT</option> -->
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Type Card</label>
                                             <select name="TypeCardRegistrationEditModal" id="idTypeCardRegistrationEditModal" class="form-control">
                                                <option value="noroom"> </option>
                                              <?php foreach ($gtcvr as $key) {
                                                echo  "<option value=".$key['id_type_card'].">".$key['type_card']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="guestNameInput">Card No</label>
                                              <input type="text" name="CardNoRegistrationEditModal" class="form-control" id="idCardNoRegistrationEditModal" >
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="adf">Expired Date</label>
                                              <input type="date" name="ExpDateRegistrationEditModal" class="form-control" id="idExpDateRegistrationEditModal">
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">Registration Handled</label>
                                                <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                                                <input type="text" name="ReservByRegistrationEditModal" class="form-control" id="idReservByRegistrationEditModal">
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">Checked By</label>
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="CheckedByRegistrationEditModal" class="form-control" id="idCheckedByRegistrationEditModal">
                                            </div>

                                            <div class="form-group col-xs-4 input_fields_wrap_first">
                                              <label for="guestNameInput">Purpose of Visit</label>
                                                <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                                                <input type="text" name="PurposeofVisitRegistrationEditModal" class="form-control" id="idPurposeofVisitRegistrationEditModal" >
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Building</label>
                                             <select name="BuildingReservationEditModal" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()">
                                                <option value="buildingNone"> </option>
                                              <?php foreach ($gbvr as $key) {
                                                echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Floor</label>
                                             <select name="FloorReservationEditModal" id="selectFloorReservation" class="form-control " onchange="changeFloorEditReservation()" >
                                                <option value="floorNone"> </option>
                                              <!-- <?php foreach ($gf as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['floor']."</option>";
                                              } ?> -->
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-2">
                                              <label for="identityAgent">No Room</label>
                                             <select name="NoRoomReservationEditModal" id="idNoRoomReservationEditModal" class="form-control" onchange="changeTypeRoomRegistrationModal()">
                                                <option value="noroom"> </option>
                                              <!-- <?php foreach ($gnrer as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                              } ?> -->
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-2">
                                              <label for="roomRateInput">Room Rate</label>
                                              <input type="text" name="room_rate_edit" class="form-control" id="room_rate_modal" readonly>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityAgent">Type Room</label>
                                             <select name="room_edit" id="room_type_modal" class="form-control " onchange="changeTypeRoomGuestModal()" >
                                                <option value="roomtype"> </option>
                                              <?php foreach ($gtrvr as $key) {
                                                echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check In Date</label>
                                                <input type="date" class="form-control" id="checkInDateModal" name="checkInDateEdit" />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check In Time</label>
                                                <input type="time" class="form-control" id="checkInTimeModal" name="checkInTimeEdit" />
                                              </div>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="user_photo">Identity Photo</label>
                                              <input type="file" id="input-file-now-modal" class="dropifyEditGuestTentative" name="identity_foto_edit" accept="image/*"  />
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check Out Date</label>
                                                <input type="date" class="form-control" id="checkOutDateModal" name="checkOutDateEdit" />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check Out Time</label>
                                                <input type="time" class="form-control" id="checkOutTimeModal" name="checkOutTimeEdit" />
                                              </div>
                                            </div>

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check In</label>
                                                <input type="datetime-local" class="form-control" id="check_in_modal" name="chki_edit" />
                                              </div>
                                            </div>

                                            <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="TypeRoom">Check Out</label>
                                                <input type="datetime-local" class="form-control" id="check_out_modal" name="chko_edit" />
                                              </div>
                                            </div> -->

                                            <div class="form-group col-xs-4">
                                              <label for="TotalPaxInput">Total Pax</label>
                                              <input type="text" name="total_pax_edit" class="form-control" id="total_pax_modal" placeholder="Enter Total Pax" required>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="identityStatus">Status</label>
                                             <select name="status_edit" id="status_modal" class="form-control" >
                                                <option value="status"> </option>
                                              <?php foreach ($status as $key) {
                                                echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-8">
                                              <label for="addressInput">Spesial Request</label>
                                              <textarea class="form-control" name="SpesialRequestRegistrationEditModal" id="idSpesialRequestRegistrationEditModal" rows="4" style="resize: none; overflow: auto;"></textarea>
                                            </div>                                            

                                            <!-- <div class="form-group col-xs-4">
                                              <label for="provinceInput">Province</label>
                                             <select name="regist_province_edit" id="selectProvinceRegist" class="form-control">
                                                <option value="province"> </option>
                                                <?php foreach ($pg as $key) {
                                                echo  "<option value=".$key['id_province'].">".$key['name_province']."</option>";
                                              } ?>
                                              </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="cityInput">City</label>
                                               <select name="regist_city_edit" id="selectCityRegist" class="form-control">
                                                <option value="city"> </option>
                                                <?php foreach ($cg as $key) {
                                                echo  "<option value=".$key['id_city'].">".$key['name_city']."</option>";
                                              } ?>
                                              </select>
                                            </div> -->

                                            <!-- <div class="col-sm-4">
                                              <div class="form-group">
                                                <label for="identityAgent">Segmentation</label>
                                                <input type="hidden" name="id_regist" id="idRegistTentative">
                                               <select name="segment_edit" id="segment_modal" class="form-control" >
                                                  <option value="segment"> </option>
                                                <?php foreach ($gsvr as $key) {
                                                  echo  "<option value=".$key['id_segment'].">".$key['segment']."</option>";
                                                } ?>
                                                </select>
                                              </div>
                                            </div> -->

                                            <!-- <div style="margin-top: 25px;" class="form-group col-xs-1">
                                              <label for="guestNameInput">First Name</label>
                                                <select name="tittle" id="tittle" class="form-control" >
                                                  <option value=""></option>
                                                  <option value="Mr">Mr.</option>
                                                  <option value="Mrs">Mrs.</option>
                                                  <option value="Ms">Ms</option>
                                                </select>
                                            </div> -->                                            

                                            

                                            <!-- <div class="form-group col-xs-4">
                                              <label>Gender</label><br/>
                                              <form method="post" action="#">
                                              <input type="radio" id="genderLGuest" name="gender_edit" value="Male" > Male &nbsp;
                                              <input type="radio" id="genderPGuest" name="gender_edit" value="Female" > Female
                                            </div> -->
                                            
                                            <!-- <div class="form-group col-xs-4">
                                              <label for="TotalPaxInput">Total Pax</label>
                                              <input type="text" name="total_pax_edit" class="form-control" id="total_pax_modal" placeholder="Enter Total Pax" required>
                                            </div> -->

                                            <!-- <div class="form-group col-xs-2">
                                              <label for="identityNoRoom">No Room</label>
                                             <select name="no_room_edit" id="no_room_modal" class="form-control" >
                                                <option value="noroom"> </option>
                                              <?php foreach ($gnrvr as $key) {
                                                echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                                              } ?>
                                              </select>
                                            </div> -->

                                           <!--  <div class="form-group col-xs-12">
                                              <label for="remarksInput">Remarks</label>
                                              <textarea class="form-control" name="remarks_edit" id="remarks_modal" rows="4" placeholder="Enter Remarks"  style="resize: none; overflow: auto;"></textarea required>
                                            </div>
 -->
                                            <!--<div class="form-group col-xs-4">
                                              <label for="guestNameInput">Payment Method</label>
                                                <select name="pay_method_edit" id="pay_method_modal" class="form-control" onchange="checkValCodeGuestModal()" >
                                                  <option value="CASH">Cash</option>
                                                  <option value="DEBIT">Debit</option>
                                                  <option value="CREDIT">Credit</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4">
                                              <label for="statPayment">Status Payment</label>
                                                <select name="stat_payment_edit" id="stat_payment_modal" class="form-control">
                                                  <option value="complete"> </option>
                                                  <option value="complete">Complete</option>
                                                  <option value="incomplete">Incomplete</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-xs-4 ">
                                              <label for="PriceRoom">Total Bill</label>
                                              <input type="text" name="tot_bill_edit" class="form-control" id="PriceRoom" required>
                                            </div>
-->
                                              <input type="hidden" name="tot_bill_edit" class="form-control" id="PriceRoom">
                                              <input type="hidden" name="tax" class="form-control" id="tax">
                                              <input type="hidden" name="service" class="form-control" id="service">
                                              <input type="hidden" name="payment_type" class="form-control" id="payment_type" value="cash">
                                              <div class="form-group col-xs-12">
                                                  <label for="guestNameInput">Payment Method</label>
                                                  <ul class="nav nav-pills">
                                                      <li class="active"><a data-toggle="tab" href="#cash" onclick="changePaymentType('cash')"><i class="fa fa-money"></i> Cash</a></li>
                                                      <li><a data-toggle="tab" href="#transfer" onclick="changePaymentType('transfer')"><i class="fa fa-exchange"></i> Transfer</a></li>
                                                      <li><a data-toggle="tab" href="#debit" onclick="changePaymentType('debit')"><i class="fa fa-credit-card"></i> Kartu Debit</a></li>
                                                      <li><a data-toggle="tab" href="#kredit" onclick="changePaymentType('kredit')"><i class="fa fa-credit-card"></i> Kartu Kredit</a></li>
                                                  </ul>

                                                  <div class="tab-content">
                                                      <div id="cash" class="tab-pane fade in active">
                                                          <div class="row">
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="PriceRoom">Jumlah Tagihan</label>
                                                                  <input type="text" class="form-control" id="PriceRoomPayment" disabled>
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="cash_payment_amount">Jumlah Dibayarkan</label>
                                                                  <input type="text" class="form-control" id="cash_payment_amount" name="cash_payment_amount">
                                                              </div>
                                                              <div class="form-group col-xs-3 ">
                                                                  <label for="cash_date_payment">Tanggal Pembayaran</label>
                                                                  <input type="datetime-local" class="form-control" id="cash_date_payment" name="cash_date_payment">
                                                              </div>
                                                              <div class="form-group col-xs-9" style="padding-top: 5px">
                                                                  <br>
                                                                  <button type="button" class="btn btn-primary btn-sm" onclick="setToday('cash_date_payment')"><i class="fa fa-date"></i> Hari ini</button>
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="cash_remark_payment">Remarks Pembayaran</label>
                                                                  <textarea class="form-control" id="cash_remark_payment" name="cash_remark_payment" rows="4" placeholder="Optional"  style="resize: none; overflow: auto;"></textarea>

                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div id="transfer" class="tab-pane fade">
                                                          <div class="row">
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="transfer_payment_amount">Jumlah Dibayarkan</label>
                                                                  <input type="text" class="form-control" id="transfer_payment_amount" name="transfer_payment_amount" >
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="transfer_from_bank">Dari Bank</label>
                                                                  <select class="form-control" id="transfer_from_bank" name="transfer_from_bank">
                                                                      <?php foreach (CONSTANT['bankList'] as $bank){ ?>
                                                                          <option value="<?php echo $bank['code'] ?>"><?php echo $bank['name'] ?></option>
                                                                      <?php } ?>
                                                                  </select>
                                                              </div>

                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="transfer_bank_account_number">Rekening</label>
                                                                  <input type="text" class="form-control" id="transfer_bank_account_number" name="transfer_bank_account_number" >
                                                              </div>
                                                              <div class="form-group col-xs-3">
                                                                  <label for="transfer_date_payment">Tanggal Transfer</label>
                                                                  <input type="datetime-local" class="form-control" id="transfer_date_payment" name="transfer_date_payment">
                                                              </div>
                                                              <div class="form-group col-xs-9" style="padding-top: 5px">
                                                                  <br>
                                                                  <button type="button" class="btn btn-primary btn-sm" onclick="setToday('transfer_date_payment')"><i class="fa fa-date"></i> Hari ini</button>
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="transfer_remark_payment">Remarks Pembayaran</label>
                                                                  <textarea class="form-control" name="transfer_remark_payment" id="transfer_remark_payment" rows="4" placeholder="Optional"  style="resize: none; overflow: auto;"></textarea>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div id="debit" class="tab-pane fade">
                                                          <div class="row">
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="debit_payment_amount">Jumlah Dibayarkan</label>
                                                                  <input type="text" class="form-control" id="debit_payment_amount" name="debit_payment_amount">
                                                              </div>
                                                              <div class="form-group col-xs-3 ">
                                                                  <label for="debit_date_payment">Tanggal Pembayaran</label>
                                                                  <input type="datetime-local" class="form-control" id="debit_date_payment" name="debit_date_payment">
                                                              </div>
                                                              <div class="form-group col-xs-9" style="padding-top: 5px">
                                                                  <br>
                                                                  <button type="button" class="btn btn-primary btn-sm" onclick="setToday('debit_date_payment')"><i class="fa fa-date"></i> Hari ini</button>
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="debit_bank_issuer">Bank Issuer</label>
                                                                  <input type="text" class="form-control" id="debit_bank_issuer" name="debit_bank_issuer">
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="debit_remark_payment">Remarks Pembayaran</label>
                                                                  <textarea class="form-control" name="debit_remark_payment" id="debit_remark_payment" rows="4" placeholder="Optional"  style="resize: none; overflow: auto;"></textarea>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div id="kredit" class="tab-pane fade">
                                                          <div class="row">
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="kredit_payment_amount">Jumlah Dibayarkan</label>
                                                                  <input type="text" class="form-control" id="kredit_payment_amount" name="kredit_payment_amount">
                                                              </div>
                                                              <div class="form-group col-xs-3">
                                                                  <label for="kredit_date_payment">Tanggal Pembayaran</label>
                                                                  <input type="datetime-local" class="form-control" id="kredit_date_payment" name="kredit_date_payment">
                                                              </div>
                                                              <div class="form-group col-xs-9" style="padding-top: 5px">
                                                                  <br>
                                                                  <button type="button" class="btn btn-primary btn-sm" onclick="setToday('kredit_date_payment')"><i class="fa fa-date"></i> Hari ini</button>
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="kredit_bank_issuer">Bank Issuer</label>
                                                                  <input type="text" class="form-control" id="kredit_bank_issuer" name="kredit_bank_issuer">
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="kredit_card_number">Nomor Kartu</label>
                                                                  <input type="text" class="form-control" id="kredit_card_number" name="kredit_card_number">
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="kredit_name">Nama</label>
                                                                  <input type="text" class="form-control" id="kredit_name" name="kredit_name">
                                                              </div>
                                                              <div class="form-group col-xs-12 ">
                                                                  <label for="kredit_remark_payment">Remarks Pembayaran</label>
                                                                  <textarea class="form-control" name="kredit_remark_payment" id="kredit_remark_payment" rows="4" placeholder="Optional"  style="resize: none; overflow: auto;"></textarea>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>



                                            <!-- <div class="form-group col-xs-2">
                                              <label for="adt">Price</label>
                                              <input type="text" name="price_regist_edit" class="form-control" id="PriceRoom_modal" >
                                            </div>

                                            

                                            <div class="form-group col-xs-6">
                                              <label for="adt">Validation Code</label>
                                              <input type="text" name="val_code_edit" class="form-control currency" id="val_code">
                                            </div> -->

                                          </div>
                                          <!-- footer modal -->
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-sm" style="margin-right: 15px;" name="submitCompany" value="payment"><i class="fa fa-dollar"></i> Payment</button>
                                            <button type="submit" class="btn btn-primary btn-sm" style="margin-right: 15px;" name="submitCompany" value="update"><i class="fa fa-refresh"></i> Update</button>
                                            
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                  </form>
                                </div>
                        </div>
                      </div>
  </div>


  <div id="modalDeposit" class="modal fade" role="dialog">
      <form role="form" action="<?php echo base_url('home/updateDeposit'); ?>" method="post">
          <div class="modal-dialog modal-lg">
              <!-- konten modal-->
              <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-edit"></i> Deposit </h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body">
                      <input type="hidden" id="id_regist" name="id_regist">
                      <input type="hidden" id="saveDeposit" name="save_deposit" value="N">
                      <div class="row">
                          <div class="form-group col-xs-12 ">
                              <label for="deposit_name">Nama</label>
                              <input type="text" class="form-control" id="deposit_name" name="deposit_name" disabled>
                          </div>
                          <div class="form-group col-xs-12">
                              <label for="deposit_room">Room</label>
                              <input type="text" class="form-control" id="deposit_room" name="deposit_room" disabled>
                          </div>
                          <div class="form-group col-xs-12 ">
                              <label for="deposit_amount">Jumlah</label>
                              <input type="text" class="form-control" id="deposit_amount" name="deposit_amount">
                          </div>
                          <div class="form-group col-xs-12 ">
                              <label for="remark_deposit">Remarks</label>
                              <textarea class="form-control" name="remark_deposit" id="remark_deposit" rows="4" placeholder="Optional"  style="resize: none; overflow: auto;"></textarea>
                          </div>
                      </div>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                      <button type="button" id="btnDeposit" class="btn btn-success" onclick="printDeposit()">Simpan & Print</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
  <iframe id="iframePDF4" width="0" height="0"></iframe>
  <script>
      function openDepositModal(elem){
          var dataId = $(elem).data('id');
          var dataJson = $(elem).data('json');
          console.log(dataId, dataJson);
          $('#id_regist').val(dataJson.id_regist);
          $('#deposit_name').val(dataJson.first_name+" "+ dataJson.surname);
          $('#deposit_room').val(dataJson.name_room+" Room No "+ dataJson.no_of_room);
          $('#deposit_amount').val(dataJson.deposit_amount);
          $('#remark_deposit').val(dataJson.remark_deposit);
          if(dataJson.deposit_amount > 0){
              $('#deposit_amount').prop('disabled', true);
              $('#remark_deposit').prod('disabled', true);
          }else{
              $('#saveDeposit').val("Y");
          }
          $('#modalDeposit').modal('show');
      };

      function updateDeposit(elem){

          var registrationId = $('#deposit_name').val();
          var depositName = $('#deposit_name').val();
          var depositRoom = $('#deposit_room').val();
          var depositAmount = $('#deposit_amount').val();
          var remarkDeposit = $('#remark_deposit').val();

          $.ajax({
              url: '<?php echo base_url('home/updateDeposit'); ?>',
              data: {id:id_regist},
              dataType: 'json',
              type: 'post'
          });
          //$('#modalSearchCustomer').modal('hide');
          var dataJson = $(elem).data('json');

          var arrName = dataJson.customer_name.split(" ");
          if(arrName[0]){
              $('#idFirstnameReservation').val(arrName[0]);
              $('#idFirstNameCPReservation').val(arrName[0]);
          }
          if(arrName[1]){
              $('#idMiddleNameReservation').val(arrName[1]);
              $('#idMiddleNameCPReservation').val(arrName[1]);
          }
          if(arrName[2]){
              $('#idLastNameReservation').val(arrName[2]);
              $('#idLastNameCPReservation').val(arrName[2]);
          }
          //$('#idFirstnameReservation').val(dataJson.customer_name);
          $('#idPhoneNumberCPReservation').val(dataJson.phone_number);
          $('#idEmailCPReservation').val(dataJson.customer_email);


          console.log(dataJson);
      }

      function printDeposit(){
          var isSave =  $('#saveDeposit').val();

          var id_regist = $('#id_regist').val();
          var depositName = $('#deposit_name').val();
          var depositRoom = $('#deposit_room').val();
          var depositAmount = $('#deposit_amount').val();
          var remarkDeposit = $('#remark_deposit').val();

          if(isSave == 'Y'){
              $.ajax({
                  url: '<?php echo base_url('home/updateDeposit'); ?>',
                  data: {id_regist:id_regist,deposit_amount:depositAmount,remark_deposit:remarkDeposit},
                  dataType: 'json',
                  type: 'post',
                  success:function(data){
                    console.log(data);
                  }
              })
          }


          var doc = new jsPDF('l');
          var logoSnabb = "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";


          var width = doc.internal.pageSize.getWidth();
          doc.addFont('Segoe.ttf', 'Segoe', 'normal');
          doc.setFont('Segoe');

          //header
          doc.setFillColor(232, 225, 219);
          doc.rect(0, 0, width, 28, 'F'); // filled square
          doc.addImage(logoSnabb, 'PNG',15,3,15,15);
          doc.text("VOXSTAY",11,25);
          doc.setFontSize(10);
          doc.text("No.",210,12);
          doc.setFontSize(20);
          doc.text("CASH DEPOSIT RECEIPT",210,23);

          //footer

          doc.setFontSize(12);
          doc.text("Taman Darmawangsa Jalan Raden Rubaya Karangpawitan, Karawang Karawang Barat, Jawa Barat 41315 - Indonesia",31,196.9);

          doc.text("T. 0267-8411044 | voxstaykarawang@thevoxotel.com | www.thevoxotel.com",70,201.9);

          //text
          doc.setFontSize(16);
          doc.text("Name/Nama",12, 40);
          doc.text("Room/Kamar",12, 55);
          doc.text("Amount/Jumlah",12, 70);
          doc.text("Remarks/Keterangan",12, 85);
          doc.text("Rp.",12, 120);


          doc.text("Guest Signature",40, 145);
          doc.text("Tanda Tangan tamu",35, 150);

          doc.text("Cashier",210, 145);
          doc.text("Kasir",210, 150);

          doc.text(":",70, 40);
          doc.text(":",70, 55);
          doc.text(":",70, 70);
          doc.text(":",70, 85);

          doc.text(depositName,75, 40);
          doc.text(depositRoom,75, 55);
          doc.text(depositAmount,75, 70);
          doc.text(remarkDeposit,75, 85);


          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .",73, 42);
          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .",73, 57);
          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .",73, 72);
          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .",73, 87);
          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .",73, 102);

          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . .",25, 180);
          doc.text(". . . . . . . . . . . . . . . . . . . . . . . . . . . .",180, 180);




          doc.setTextColor(232, 225, 219);
          doc.text("_______________________________________________________________________________________________________",37, 114);
          doc.text("_______________________________________________________________________________________________________",35, 116);
          doc.text("_______________________________________________________________________________________________________",33, 118);
          doc.text("_______________________________________________________________________________________________________",31, 120);
          doc.text("_______________________________________________________________________________________________________",29, 122);
          doc.text("_______________________________________________________________________________________________________",27, 124);
          doc.text("_______________________________________________________________________________________________________",25, 126);


          doc.autoPrint();
          var iframe = document.getElementById('iframePDF4');
          iframe.src = doc.output('dataurlstring');

      }



      var daftarAngka=new Array("","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan");
      function terbilang(nilai){
          var temp='';
          var hasilBagi,sisaBagi;
//batas untuk ribuan
          var batas=3;
//untuk menentukan ukuran array, jumlahnya sesuaikan dengan jumlah anggota dari array gradeNilai[]
          var maxBagian = 5;
          var gradeNilai=new Array("","ribu","juta","milyar","triliun");
//cek apakah ada angka 0 didepan ==> 00098, harus diubah menjadi 98
          nilai = this.hapusNolDiDepan(nilai);
          var nilaiTemp = ubahStringKeArray(batas, maxBagian, nilai);
//ubah menjadi bentuk terbilang
          var j = nilai.length;
//menentukan batas array
          var banyakBagian = (j % batas) == 0 ? (j / batas) : Math.round(j / batas + 0.5);
          var h=0;
          for(var i = banyakBagian - 1; i >=0; i-- ){
              var nilaiSementara = parseInt(nilaiTemp[h]);
              if (nilaiSementara == 1 && i == 1){
                  temp +="seribu ";
              }
              else {
                  temp +=this.ubahRatusanKeHuruf(nilaiTemp[h])+" ";
// cek apakah string bernilai 000, maka jangan tambahkan gradeNilai[i]
                  if(nilaiTemp[h] != "000"){
                      temp += gradeNilai[i]+" ";
                  }
              }
              h++;
          }
          return temp;
      }
      function ubahStringKeArray(batas, maxBagian,kata){
// maksimal 999 milyar
          var temp= new Array(maxBagian);
          var j = kata.length;
//menentukan batas array
          var banyakBagian = (j % batas) == 0 ? (j / batas) : Math.round(j / batas + 0.5);
          for(var i = banyakBagian - 1; i >= 0 ; i--){
              var k = j - batas;
              if(k < 0) k = 0;
              temp[i]=kata.substring(k,j);
              j = k ;
              if (j == 0)
                  break;
          }
          return temp;
      }

      function ubahRatusanKeHuruf(nilai){
//maksimal 3 karakter
          var batas = 2;
//membagi string menjadi 2 bagian, misal 123 ==> 1 dan 23
          var maxBagian = 2;
          var temp = this.ubahStringKeArray(batas, maxBagian, nilai);
          var j = nilai.length;
          var hasil="";
//menentukan batas array
          var banyakBagian = (j % batas) == 0 ? (j / batas) : Math.round(j / batas + 0.5);
          for(var i = 0; i < banyakBagian ;i++){
//cek string yang memiliki panjang lebih dari satu ==> belasan atau puluhan
              if(temp[i].length > 1){
//cek untuk yang bernilai belasan ==> angka pertama 1 dan angka kedua 0 - 9, seperti 11,16 dst
                  if(temp[i].charAt(0) == '1'){
                      if(temp[i].charAt(1) == '1') {
                          hasil += "sebelas";
                      }
                      else if(temp[i].charAt(1) == '0') {
                          hasil += "sepuluh";
                      }
                      else hasil += daftarAngka[temp[i].charAt(1) - '0']+ " belas ";
                  }
                  //cek untuk string dengan format angka  pertama 0 ==> 09,05 dst
                  else if(temp[i].charAt(0) == '0'){
                      hasil += daftarAngka[temp[i].charAt(1) - '0'] ;
                  }
                  //cek string dengan format selain angka pertama 0 atau 1
                  else
                      hasil += daftarAngka[temp[i].charAt(0) - '0']+ " puluh " +daftarAngka[temp[i].charAt(1) - '0'] ;
              }
              else {
//cek string yang memiliki panjang = 1 dan berada pada posisi ratusan
                  if(i == 0 && banyakBagian !=1){
                      if (temp[i].charAt(0) == '1')
                          hasil+=" seratus ";
                      else if (temp[i].charAt(0) == '0')
                          hasil+=" ";
                      else hasil+= daftarAngka[parseInt(temp[i])]+" ratus ";
                  }
//string dengan panjang satu dan tidak berada pada posisi ratusan ==> satuan
                  else hasil+= daftarAngka[parseInt(temp[i])];
              }
          }
          return hasil;
      }
      function hapusNolDiDepan(nilai){
          while(nilai.indexOf("0") == 0){
              nilai = nilai.substring(1, nilai.length);
          }
          return nilai;
      }




  </script>