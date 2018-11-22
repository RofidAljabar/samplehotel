  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GUEST RESERVATION
        <!-- <small>Personal</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-book"></i> RESERVATION GUEST HOTEL</li>
        <li>GUEST RESERVATION</li>
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
                  <h3 class="box-title"><i class="fa fa-book"></i> RESERVATION</h3>
                  <button style="float: right" type="button" class="btn btn-primary btn-sm" onclick="searchCustomer()"><i class="fa fa-search"></i> History Customer</button>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <!-- <form role="form" action="<?php //echo base_url('home/addRegistrationGuest'); ?>" method="post"> -->
                  <form role="form" action="<?php echo base_url();?>home/addRegistrationReservation" method="post" enctype="multipart/form-data">
                  <!-- <?php //echo form_open_multipart('http://192.168.2.118:88/samplehotel/home/addRegistrationGuest');?> -->
                  <div class="box-body">

                    <div class="form-group col-xs-4 input_fields_wrap_tittle">
                      <label for="guestNameInput">Tittle</label>
                        <select name="TittleReservation" id="idTittleReservation" class="form-control" >
                          <option value=""></option>
                          <option value="MR">MR.</option>
                          <option value="MRS">MRS.</option>
                          <option value="MISS">MISS.</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="guestNameInput">First Name</label>
                        <input type="text" name="FirstNameReservation" class="form-control" id="idFirstnameReservation" placeholder="Enter first name" required>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="guestNameInput">Surname</label>
                        <input type="text" name="SurnameReservation" class="form-control" id="idSurnameReservation" placeholder="Enter surname" required>
                    </div>

                    <!-- <div class="form-group col-xs-4 ">
                      <label for="guestNameInput">Middle Name</label>
                      <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                      <input type="text" name="MiddleNameReservation" class="form-control" id="idMiddleNameReservation" placeholder="Enter middle name" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityGuestType">Last Name</label>
                       <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span> ADD GROUP NAME</button>
                      <input type="text" name="LastNameReservation" class="form-control" id="idLastNameReservation" placeholder="Enter last Name" required>
                    </div> -->

                    <div class="form-group col-xs-2">
                      <label for="adf">Arrival Date</label>
                      <input type="date" name="ArrDateReservation" class="form-control" id="idArrDateReservation" required>
                    </div>

                    <div class="form-group col-xs-2">
                      <label for="adf">Arrival Time</label>
                      <input type="time" name="ArrTimeReservation" class="form-control" id="idArrTimeReservation" required>
                    </div>

                    <div class="form-group col-xs-2">
                      <label for="adf">Departure Date</label>
                      <input type="date" name="DprtDateReservation" class="form-control" id="idDprtDateReservation" required>
                    </div>

                    <div class="form-group col-xs-2">
                      <label for="adf">Departure Time</label>
                      <input type="time" name="DprtTimeReservation" class="form-control" id="idDprtTimeReservation" required>
                    </div>

<!--                     <div class="form-group col-xs-4">
                      <label for="adf">Arrival Date</label>
                      <input type="datetime-local" name="ArrivalDateReservation" class="form-control" id="idArrivalDateReservation" required>
                    </div>

                   <div class="form-group col-xs-4">
                      <label for="adf">Departure Date</label>
                      <input type="datetime-local" name="DepartDateReservation" class="form-control" id="idDepartDateReservation" required>
                    </div> -->                    

                    <!-- <div class="form-group col-xs-4 input_fields_wrap_six">
                      <label for="identityAgent">Building</label>
                     <select name="BuildingReservation[]" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()" required>
                        <option value="buildingNone"> </option>
                      <?php foreach ($building as $key) {
                        echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4 input_fields_wrap_five">
                      <label for="identityAgent">Floor</label>
                     <select name="FloorReservation[]" id="selectFloorReservation" class="form-control " onchange="changeFloorReservation()" required>
                        <option value="floorNone"> </option>
                      <?php foreach ($building as $key) {
                        echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                      } ?>
                      </select>
                    </div>

                     <div class="form-group col-xs-4 input_fields_wrap_middle">
                      <label for="identityAgent">No Room</label>
                      <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                     <select name="NoRoomReservation[]" id="idNoRoomReservation" class="form-control" onchange="changeTypeRoomReservation()" required>
                        <option value="noroom"> </option>
                      <?php foreach ($nrg as $key) {
                        echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                      } ?>
                      </select>
                    </div> -->

                    <!-- <div class="form-group col-xs-4 input_fields_wrap_first">
                      <label for="identityAgent">Type Room</label>
                     <select name="RoomTypeReservation[]" id="selectRoomTypeReservation" class="form-control "  required>
                        <option value="roomtype"> </option>
                      <?php foreach ($rtg as $key) {
                        echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                      } ?>
                      </select>
                    </div> -->

                    <div class="form-group col-xs-4  input_fields_wrap_last">
                      <label for="guestNameInput">Total Pax</label>
                      <input type="number" name="TotalPaxReservation[]" class="form-control" id="idTotalPaxReservation" placeholder="Enter Total Pax" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="addressInput">Spesial Request</label>
                      <textarea class="form-control" name="SpesialRequestReservation" id="idSpesialRequestReservation" rows="4" placeholder="Enter Your Request"  style="resize: none; overflow: auto;"></textarea>
                    </div>                   

                    <!-- <div class="form-group col-xs-4 input_fields_wrap_four">
                      <label for="guestNameInput">Room Rate</label>
                      <input type="text" name="RoomRateReservation[]" class="form-control" id="idRoomRateReservation" readonly>
                    </div> -->

                    

                    <div class="form-group col-xs-4">
                      <label for="identityInput">Billing Instruction</label>
                        <select name="BillingInstructionReservation" id="idBillingInstructionReservation" class="form-control" >
                          <option value=""></option>
                          <option value="GUARANTEE" style="text-transform: uppercase;">GUARANTEE LETTER</option>
                          <option value="PERSACC" style="text-transform: uppercase;">PERSONAL ACCOUNT</option>
                          <option value="VOUCHER" style="text-transform: uppercase;">VOUCHER</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Deposit By</label>
                        <select name="DepositByReservation" id="idDepositByReservation" class="form-control" onchange="checkValCode()" >
                          <!-- <option value="complete"> </option> -->
                          <option value="CASH">CASH</option>
                          <option value="CREDIT">CREDIT</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityAgent">Type Card</label>
                     <select name="TypeCardReservation" id="idTypeCardReservation" class="form-control" disabled>
                        <option value="noroom"> </option>
                      <?php foreach ($gtc as $key) {
                        echo  "<option value=".$key['id_type_card'].">".$key['type_card']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Card No</label>
                      <input type="text" name="CardNoReservation" class="form-control" id="idCardNoReservation" placeholder="Enter Card No" disabled>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="addressInput">Note</label>
                      <textarea class="form-control" name="NoteReservation" id="idNoteReservation" rows="4" placeholder="Enter Your Note"  style="resize: none; overflow: auto;"></textarea>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Expired Date</label>
                      <input type="date" name="ExpDateReservation" class="form-control" id="idExpDateReservation" disabled>
                    </div>

                    

                    <div class="form-group col-xs-4">
                      <label for="identityStatus">Status</label>
                     <select name="StatusReservation" id="idStatusReservation" class="form-control" >
                        <option value="status"> </option>
                      <?php foreach ($status as $key) {
                        echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityGuestType">Guest Type</label>
                      <a href="<?php echo base_url('home/newGuestType'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW GUEST TYPE</a>
                     <select name="GuestTypeReservation" id="idGuestTypeReservation" class="form-control" >
                        <option value="guest_type"> </option>
                      <?php foreach ($ggt as $key) {
                        echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityGroup">Detail</label>
                      <a href="<?php echo base_url('home/newDetail'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW DETAIL</a>
                     <select name="DetailGuestTypeReservation" id="idDetailGuestTypeReservation" class="form-control" style="text-transform: uppercase;" disabled>
                        <option value="group_registration"> </option>
                      <?php foreach ($dgtr as $key) {
                        echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                      } ?>
                      </select>
                      <!-- <input type="checkbox" name="cb_group" id="cb_group" value="1"><small><b>&nbsp&nbsp*Klik for Group Reservation</b></small> -->
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="addressInput">Remarks</label>
                      <textarea class="form-control" name="RemarksReservation" id="idRemarksReservation" rows="4" placeholder="Enter Your Remarks"  style="resize: none; overflow: auto;"></textarea required>
                    </div>

                    <div class="form-group  col-xs-12">
                    <h3><i class="fa fa-address-book"></i> CONTACT PERSON</h3>
                    </div>

                    <div class="form-group col-xs-4 input_fields_wrap_tittle">
                      <label for="guestNameInput">Tittle</label>
                        <select name="TittleCPReservation" id="idtittleCPReservation" class="form-control" >
                          <option value=""></option>
                          <option value="MR">MR.</option>
                          <option value="MRS">MRS.</option>
                          <option value="MISS">MISS.</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">First Name</label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="FirstNameCPReservation" class="form-control" id="idFirstNameCPReservation" placeholder="Enter first name" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Surname</label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="SurnameCPReservation" class="form-control" id="idSurnameCPReservation" placeholder="Enter first name" required>
                    </div>

                    <!-- <div class="form-group col-xs-4">
                      <label for="guestNameInput">Middle Name</label>
                      <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button>
                      <input type="text" name="MiddleNameCPReservation" class="form-control" id="idMiddleNameCPReservation" placeholder="Enter middle name" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityGuestType">Last Name</label>
                       <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span> ADD GROUP NAME</button>
                      <input type="text" name="LastNameCPReservation" class="form-control" id="idLastNameCPReservation" placeholder="Enter last Name" required>
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Phone</label>
                      <input type="text" name="PhoneNumberCPReservation" class="form-control" id="idPhoneNumberCPReservation" placeholder="Enter phone" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Email</label>
                      <input type="email" name="EmailCPReservation" class="form-control" id="idEmailCPReservation" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Date / Time</label>
                      <input type="datetime-local" name="DateTimeCPReservation" class="form-control" id="idDateTimeCPReservation" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Reservation </label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="ReservByReservation" class="form-control" id="idReservByReservation" placeholder="Enter name" value="<?php echo $this->session->userdata('name_session'); ?>" required>
                    </div>







                     <!-- <div id='TextBoxesGroup'>
                      <div id="TextBoxDiv1">
                        <label>Firstname : </label>
                        <input type='textbox' id='textbox1' >
                      </div>
                    </div>
                    <input type='button' value='Add Button' id='addButton'>
                    <input type='button' value='Remove Button' id='removeButton'>
                    <input type='button' value='Get TextBox Value' id='getButtonValue'> -->

                    <!-- <div class="form-group col-xs-4">
                      <label for="user_photo">Identity Photo</label>
                      <input type="file" id="input-file-now" class="dropify" name="identity_foto" accept="image/*"  />
                    </div> -->

                     <!-- <div class="form-group col-xs-4">
                      <label for="identityInput">Identity Type</label>
                     <select name="identity_tipe" id="selectIdentity" class="form-control" required>
                        <option value="identity"> </option>
                      <?php foreach ($it as $key) {
                        echo  "<option value=".$key['id_identity_tipe'].">".$key['name_identity']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="idnumberInput">Identity Number</label>
                      <input type="text" name="identity_number" class="form-control" id="identity_number" placeholder="Enter ID Number" required>
                    </div>

                    <div class="form-group col-xs-4">
                      <label>Gender</label><br/>
                      <form method="post" action="#">
                      <input type="radio" name="gender_reservation" value="Male" > Male &nbsp
                      <input type="radio" name="gender_reservation" value="Female" > Female
                    </div>

                    

                    <div class="form-group col-xs-4">
                      <label for="countryInput">Nationality</label>
                     <select name="regist_country" id="selectCountryRegist" class="form-control" >
                        <option value="country"> </option>
                      <?php foreach ($cor as $key) {
                        echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="provinceInput">Province</label>
                     <select name="regist_province" id="selectProvinceRegist" class="form-control" disabled>
                        <option value="province"> </option>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="cityInput">City</label>
                       <select name="regist_city" id="selectCityRegist" class="form-control" disabled>
                        <option value="city"> </option>
                      </select>
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="zipInput">Zip Code</label>
                      <input type="text" name="zip_code" class="form-control" id="zipInput" placeholder="Enter zip code" >
                    </div> 

                    

                    <div class="form-group col-xs-4">
                      <label for="statPayment">Status Payment</label>
                        <select name="stat_payment" id="stat_payment" class="form-control">
                          <option value="complete"> </option>
                          <option value="complete">Complete</option>
                          <option value="incomplete">Incomplete</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4 ">
                      <label for="PriceRoom">Total Bill</label>
                      <input type="text" name="tot_bill" class="form-control" id="PriceRoom" required>
                    </div> -->

                    <!-- <button type="button" class="add_field_button">Add Field</button>
                    <button type="button" class="remove_field_button">Remove Field</button>
                    <div class="input_fields_wrap">
                    <input type="text" name="answer[]" class="field-long" />
                    <input type="text" name="answer2[]" class="field-long" />
                    <input type="text" name="answer3[]" class="field-long" />
                    </div> -->

                    <!-- <div id='TextBoxesGroup'>
                      <div id="TextBoxDiv1">
                        <label>Firstname : </label>
                        <input type='textbox' id='textbox1' >
                      </div>
                    </div>
                    <input type='button' value='Add Button' id='addButton'>
                    <input type='button' value='Remove Button' id='removeButton'>
                    <input type='button' value='Get TextBox Value' id='getButtonValue'> -->

                    <!-- <div class="form-group col-xs-2">
                      <label for="adt">Validation Code</label>
                      <input type="text" name="val_code" class="form-control currency" id="val_code" disabled>
                    </div> -->                    

                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <a href="<?php echo base_url('home/Reservation'); ?>" class="btn btn-sm btn-primary" style="height: 90%;"><span class="fa fa-caret-left">&nbsp</span>Back</a>
                  	<button type="reset" class="btn btn-sm btn-danger"><span class="fa fa-undo">&nbsp</span> Reset</button>
                    <button type="submit" class="btn btn-sm btn-success" onclick=""><span class="fa fa-plus">&nbsp</span> Add Guest</button>
                    <!-- <button type="submit" class="btn btn-success" onclick=""><span class="fa fa-group">&nbsp</span> Add (Group)</button> -->
                   <!--  <input id="saveForm" name="saveForm" class="btn btn-success" type="submit" value="Add Guest" style="padding-left:20px" width="100" tabindex="23" onclick="FormSubmission(); SalesForceSubmission();" /> -->
                  </div>
                </form>
              </div>

          




        </div>

        <!-- <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-database"></i> Data Registration</h3>
            </div>

            <div class="box-body">
              <table id="tableDataCompany" class="table table-bordered table-hover table-condensed">
                <thead>
                  <tr>
                    <th>Guest Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Check In</th>
                    <th>Check Out</th> 
                    <th>Status</th>
                    <th>Agent</th>
                    <th>Room Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($rg as $key) {
                    $rg = $key['id_regist'];

                    echo "<tr>";
                    echo "<td style=\"text-transform: uppercase; word-wrap: 0;\">".$key['tittle'].". ".$key['first_name']." ".$key['middle_name']." ".$key['last_name'];"</td>";
                    echo "<td>".$key['phone']."</td>";
                    echo "<td>".$key['email']."</td>";
                    echo "<td>".$key['adf_date']."</td>";
                    echo "<td>".$key['adt_date']."</td>";
                    echo "<td>".$key['nama_status']."</td>";
                    echo "<td>".$key['name_agent']."</td>";
                    echo "<td>".$key['dsc_tipe']."</td>";
                    
                    echo "<td style=\"text-align: center;\">
                    <button class=\"btn btn-primary btn-sm ubahGuest\" onclick=\"ubahGuest($rg);\"><i class=\"fa fa-edit\"></i></button> <a  href=\"<?php echo base_url('home/laporanPDF') ?>?idreg=<?php echo $id_regist ?>\" class=\"btn btn-info fa fa-file-pdf-o\" ></a></td>";

                  }
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div> -->
      

      <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div id="modalSearchCustomer" class="modal fade" role="dialog">
      <form role="form" action="<?php echo base_url('home/updateReservation'); ?>" method="post">
          <div class="modal-dialog modal-lg">
              <!-- konten modal-->
              <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header" style="background-color: #D33724; color: #FFFFFF;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-edit"></i> History</h4>
                  </div>
                  <!-- body modal -->
                  <div class="modal-body">
                      <table id="tableSearchCustomer" class="table table-bordered table-hover table-condensed">
                          <thead>
                          <tr>
                              <th>Customer Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                          <tr>
                              <th>Customer Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                          </tfoot>
                      </table>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->

                  </div>
              </div>
          </div>
  </div>
  </form>
  <script>
      function searchCustomer(){
          $.ajax({
              url: '<?php echo base_url('home/searchCustomer'); ?>',
              dateFormat: 'dd-mm-yy',
              data: {'test':'testa'},
              dataType: 'json',
              type: 'post',
              success:function(data){
                    console.log(data);
                  $('#modalSearchCustomer').modal('show');
                  $('#tableSearchCustomer').DataTable({
                      'paging'      : true,
                      'lengthChange': false,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false,
                      'pageLength'  : 5,
                      'data'        : data.list,
                      'columns'     : [
                          { "data" : "customer_name" },
                          { "data" : "phone_number" },
                          { "data" : "customer_email" },
                          { "data" : function (data, type, dataToSet) {
                                  return "<button type='button' class='btn btn-primary btn-sm' data-json='"+JSON.stringify(data)+"' onclick='selectCustomer(this)'><i class='fa fa-plus'></i> Pilih</button>" ;
                              } }
                      ]
                  });
              }
          });
      };

      function selectCustomer(elem){
          $('#modalSearchCustomer').modal('hide');
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




  </script>