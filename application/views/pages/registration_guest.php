  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GUEST REGISTRATION
        <!-- <small>Personal</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-registered"></i> REGISTRATION</li>
        <li>GUEST REGISTRATION</li>
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
                  <h3 class="box-title"><i class="fa fa-registered"></i> REGISTRATION</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <!-- <form role="form" action="<?php //echo base_url('home/addRegistrationGuest'); ?>" method="post"> -->
                  <form role="form" action="<?php echo base_url();?>home/addRegistrationGuest" method="post" enctype="multipart/form-data">
                  <!-- <?php //echo form_open_multipart('http://192.168.2.118:88/samplehotel/home/addRegistrationGuest');?> -->
                  <div class="box-body">
                    <!-- <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#person1"><i class="fa fa-users"></i> Person 1</a></li>
                      <li><a data-toggle="tab" href="#person2"><i class="fa fa-users"></i> Person 2</a></li>
                    </ul> -->
                    <br/>
                    <div class="tab-content">
                      <div id="person1" class="tab-pane fade in active">

                   <div class="form-group col-xs-4">
                      <label for="guestNameInput">Tittle</label>
                        <select name="TittleRegistrationGuest" id="idTittleRegistrationGuest" class="form-control" >
                          <option value=""></option>
                          <option value="MR">MR.</option>
                          <option value="MRS">MRS.</option>
                          <option value="MISS">MISS.</option>
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">First Name</label>
                        <input type="text" name="FirstNameRegistrationGuest" class="form-control" id="idFirstNameRegistrationGuest" placeholder="Enter first name" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Surname</label>
                        <input type="text" name="SurnameRegistrationGuest" class="form-control" id="idSurnameRegistrationGuest" placeholder="Enter surname" >
                    </div>

<!--                     <div class="form-group col-xs-4">
                      <label for="guestNameInput">Middle Name</label>
                      <input type="text" name="MiddleNameRegistrationGuest" class="form-control" id="idMiddleNameRegistrationGuest" placeholder="Enter middle name">
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Last Name</label>
                      <input type="text" name="LastNameRegistrationGuest" class="form-control" id="idLastNameRegistrationGuest" placeholder="Enter last name" >
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="addressInput">Address</label>
                      <textarea class="form-control" name="AddressRegistrationGuest" id="idAddressRegistrationGuest" rows="4" placeholder="Enter address"  style="resize: none; overflow: auto;"></textarea>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="countryInput">Country</label>
                     <select name="CountryRegistrationGuest" id="selectCountryRegist" class="form-control" >
                        <option value="country"> </option>
                      <?php foreach ($cor as $key) {
                        echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">City</label>
                      <input type="text" name="CityRegistrationGuest" class="form-control" id="idCityRegistrationGuest" placeholder="Enter your city" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="zipInput">Zip Code</label>
                      <input type="text" name="ZipCodeRegistrationGuest" class="form-control" id="idZipCodeRegistrationGuest" placeholder="Enter zip code" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Phone</label>
                      <input type="text" name="PhoneRegistrationGuest" class="form-control" id="idPhoneRegistrationGuest" placeholder="Enter phone" >
                    </div>

<!--                     <div class="form-group col-xs-4">
                      <label for="phoneInput">Phone</label>
                      <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="Enter phone" >
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="identityGuestType">Guest Type</label>
                      <a href="<?php echo base_url('home/newGuestType'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW GUEST TYPE</a>
                     <select name="GuestTypeRegistrationGuest" id="idGuestTypeRegistrationGuest" class="form-control" >
                        <option value="guest_type"> </option>
                      <?php foreach ($ggt as $key) {
                        echo  "<option value=".$key['id_guest_type'].">".$key['guest_type']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityGroup">Detail</label>
                      <a href="<?php echo base_url('home/newDetail'); ?>" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span> NEW DETAIL</a>
                     <select name="DetailGuestTypeRegistrationGuest" id="idDetailGuestTypeRegistrationGuest" class="form-control" style="text-transform: uppercase;" disabled>
                        <option value="group_registration"> </option>
                      <?php foreach ($gdgtvr as $key) {
                        echo  "<option value=".$key['id_detail_guest_type'].">".$key['detail']."</option>";
                      } ?>
                      </select>
                      <!-- <input type="checkbox" name="cb_group" id="cb_group" value="1"><small><b>&nbsp&nbsp*Klik for Group Reservation</b></small> -->
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Jabatan</label>
                      <input type="text" name="JabatanRegistrationGuest" class="form-control" id="idJabatanRegistrationGuest" placeholder="Enter jabatan" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityInput">Identity Type</label>
                     <select name="IdentityTypeRegistrationGuest" id="idIdentityTypeRegistrationGuest" class="form-control" >
                        <option value="identity"> </option>
                      <?php foreach ($it as $key) {
                        echo  "<option value=".$key['id_identity_tipe'].">".$key['name_identity']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="idnumberInput">Identity Number</label>
                      <input type="text" name="IdentityNumberRegistrationGuest" class="form-control" id="idIdentityNumberRegistrationGuest" placeholder="Enter ID Number" >
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="TypeRoom">Date of Birth</label>
                        <input type="date" class="form-control" id="idDateBirthRegistrationGuest" name="DateBirthRegistrationGuest" />
                      </div>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="emailInput">Email</label>
                      <input type="email" name="EmailRegistrationGuest" class="form-control" id="idEmailRegistrationGuest" placeholder="Enter email" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="countryInput">Nationality</label>
                     <select name="NationalityRegistrationGuest" id="idNationalityRegistrationGuest" class="form-control" >
                        <option value="country"> </option>
                      <?php foreach ($cor as $key) {
                        echo  "<option value=".$key['id_country'].">".$key['name_country']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Deposit</label>
                        <select name="DepositRegistrationGuest" id="idDepositRegistrationGuest" class="form-control" onchange="checkDepositRegist()" >
                          <option value="complete"> </option>
                          <option value="CASH">CASH</option>
                          <option value="CREDIT">CREDIT</option>
                          <!-- <option value="DEBIT">DEBIT</option> -->
                        </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="identityAgent">Type Card</label>
                     <select name="TypeCardRegistrationGuest" id="idTypeCardRegistrationGuest" class="form-control">
                        <option value="noroom"> </option>
                      <?php foreach ($gtcgr as $key) {
                        echo  "<option value=".$key['id_type_card'].">".$key['type_card']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Card No</label>
                      <input type="text" name="CardNoRegistrationGuest" class="form-control" id="idCardNoRegistrationGuest" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Expired Date</label>
                      <input type="date" name="ExpDateRegistrationGuest" class="form-control" id="idExpDateRegistrationGuest">
                    </div>

                    <div class="form-group col-xs-4 input_fields_wrap_first">
                      <label for="guestNameInput">Registration Handled</label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="ReservByRegistrationGuest" class="form-control" id="idReservByRegistrationGuest">
                    </div>

                    <div class="form-group col-xs-4 input_fields_wrap_first">
                      <label for="guestNameInput">Checked By</label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="CheckedByRegistrationGuest" class="form-control" id="idCheckedByRegistrationGuest">
                    </div>

                    <div class="form-group col-xs-4 input_fields_wrap_first">
                      <label for="guestNameInput">Purpose of Visit</label>
                        <!-- <button class="btn btn-link btn-xs add_field_button" style="float: right;"><span class="fa fa-plus"></span></button> -->
                        <input type="text" name="PurposeofVisitRegistrationGuest" class="form-control" id="idPurposeofVisitRegistrationGuest" >
                    </div>

                    <div class="form-group col-xs-3 wrappertype">
                      <label for="identityAgent">Type Room</label>
                      <button class="btn btn-link btn-xs" type="button" onclick="education_fields();" style="float: right;"><span class="fa fa-plus"></span></button>
                     <select name="room_type[]" id="selectRoomTypeReservation" class="form-control " >
                        <option value="roomtype"> </option>
                      <?php foreach ($rtg as $key) {
                        echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-1 wrapperbuilding">
                      <label for="identityAgent">Building</label>
                     <select name="BuildingRegistration[]" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()" required>
                        <option value="buildingNone"> </option>
                      <?php foreach ($building as $key) {
                        echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                      } ?>
                      </select>
                    </div>

                    <div class="form-group col-xs-4 wrapperfloor">
                      <label for="identityAgent">Floor</label>
                     <select name="FloorRegistration[]" id="selectFloorReservation" class="form-control " onchange="changeFloorReservation()" required>
                        <option value="floorNone"> </option>
                      <!-- <?php foreach ($building as $key) {
                        echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";
                      } ?> -->
                      </select>
                    </div>

                    <div class="form-group col-xs-2 wrappernoroom">
                      <label for="identityAgent">No Room</label>
                     <select name="no_of_room[]" id="idNoRoomReservation" class="form-control" onchange="changeTypeRoomRegistration()" required>
                        <option value="noroom"> </option>
                     <!--  <?php foreach ($nrg as $key) {
                        echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";
                      } ?> -->
                      </select>
                    </div>  

                    <div class="form-group col-xs-2 wrapperrate">
                      <label for="guestNameInput">Room Rate</label>
                      <input type="text" name="room_rate[]" class="form-control" id="room_rate" readonly>
                    </div>   
                    <div id="education_fields"></div>
                    <!-- <div class="form-group col-xs-4">
                      <label>Gender</label><br/>
                      <form method="post" action="#">
                      <input type="radio" name="gender" value="Male" > Male &nbsp
                      <input type="radio" name="gender" value="Female" > Female
                    </div> -->

                    

                   <!--  <div class="form-group col-xs-4">
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
                    </div> -->

                    <!-- <div class="form-group col-xs-6 ">
                      <label for="countryInput">Region</label>
                     <select name="regist_region" id="selectCountry" class="form-control" >
                        <option value="country"> </option>
                      <?php foreach ($rr as $key) {
                        //echo  "<option value=".$key['id_region'].">".$key['name_region']."</option>";
                      } ?>
                      </select>
                    </div> -->

                    

                    <!-- <div class="form-group col-xs-4">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <div class='input-group date' id='date1'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="form-group col-xs-4">
                      <label for="adf">Arrival Date</label>
                        <div class="input-group date form_datetime" data-date="<?php //date('Y-m-d')?>" data-date-format="dd MM yyyy - HH:ii p" data-link-field="adf">
                          <input class="form-control" type="text" value="">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                      <input type="hidden" id="arrivalDate1" value="" /><br/>
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="user_photo">Identity Photo</label>
                      <input type="file" id="input-file-now" class="dropify" name="identity_foto" accept="image/*"  />
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Check In Date</label>
                      <input type="date" name="CheckInDateRegistrationGuest" class="form-control" id="idCheckInDateistrationGuest" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Check In Time</label>
                      <input type="time" name="CheckInTimeRegistrationGuest" class="form-control" id="idCheckInTimeRegistrationGuest" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Check Out Date</label>
                      <input type="date" name="CheckOutDateRegistrationGuest" class="form-control" id="idCheckOutDateRegistrationGuest" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adf">Check Out Time</label>
                      <input type="time" name="CheckOutTimeRegistrationGuest" class="form-control" id="idCheckOutTimeRegistrationGuest" >
                    </div>

                    <!-- <div class="form-group col-xs-4">
                      <label for="adf">Check In</label>
                      <input type="datetime-local" name="CheckInRegistrationGuest" class="form-control" id="idCheckInRegistrationGuest" >
                    </div>

                    <div class="form-group col-xs-4">
                      <label for="adt">Check Out</label>
                      <input type="datetime-local" name="CheckOutRegistrationGuest" class="form-control" id="idCheckOutRegistrationGuest" value="<?php echo date('Y-m-d', strtotime('tomorrow')); ?>" >
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="guestNameInput">Total Pax</label>
                      <input type="number" name="TotalPaxRegistrationGuest" class="form-control" id="idTotalPaxRegistrationGuest" placeholder="Enter Total Pax" >
                    </div>

                    <!-- <div class="form-group col-xs-4">
                      <label for="adf">Arrival Date</label><br/>
                        <div class="input-group date form_datetime" data-date="1979-09-16 05:25:07" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                          <input class="form-control" name="date1" id="arrivalDate1" size="16" type="text" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                    </div> -->

                    <!-- <div class="form-group col-xs-4">
                      <label for="adf">Departure Date</label><br/>
                        <div class="input-group date form_datetime" data-date="1979-09-16 05:25:07" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                          <input class="form-control" name="date2" id="arrivalDate2" size="16" type="text" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                    </div> -->   
                    <!-- <div class="wrapperForm"> -->
                    
                    <!-- </div>                -->

                    <div class="form-group col-xs-4">
                      <label for="identityStatus">Status</label>
                     <select name="StatusRegistrationGuest" id="idStatusRegistrationGuest" class="form-control" >
                        <option value="status"> </option>
                      <?php foreach ($status as $key) {
                        echo  "<option value=".$key['id_status'].">".$key['nama_status']."</option>";
                      } ?>
                      </select>
                    </div>

                    <!-- <div class="form-group col-xs-12">
                      <label for="addressInput">Remarks</label>
                      <textarea class="form-control" name="remarks" rows="4" placeholder="Enter Remarks"  style="resize: none; overflow: auto;"></textarea >
                    </div> -->

                    <!-- <div class="form-group col-xs-4">
                      <label for="guestNameInput">Payment Method</label>
                        <select name="pay_method" id="pay_method" class="form-control" onchange="checkValCode()" >
                          <option value="complete"> </option>
                          <option value="CASH">CASH</option>
                          <option value="CREDIT">CREDIT</option>
                          <option value="DEBIT">DEBIT</option>
                        </select>
                    </div> -->

                    <!-- <div class="form-group col-xs-6">
                      <label for="statPayment">Status Payment</label>
                        <select name="stat_payment" id="stat_payment" class="form-control">
                          <option value="complete"> </option>
                          <option value="complete">Complete</option>
                          <option value="incomplete">Incomplete</option>
                        </select>
                    </div> -->

                    <div class="form-group col-xs-4">
                      <label for="PriceRoom">Total Bill</label>
                      <input type="text" name="TotalBillRegistrationGuest" class="form-control" id="idTotalBillRegistrationGuest" readonly="" >
                    </div>

                    <!-- <div class="form-group  col-xs-12">
                    <h3><i class="fa fa-users"></i> NO OF PERSON</h3>
                    </div> -->

                    <div class="form-group col-xs-2">
                      <label>No of Person</label>
                      <input type="number" name="AdultRegistrationGuest" id="idAdultRegistrationGuest" class="form-control" placeholder="Adult / Dewasa">
                    </div>

                    <div class="form-group col-xs-2">
                      <label>&nbsp</label>
                      <input type="number" name="ChildRegistrationGuest" id="idChildRegistrationGuest" class="form-control" placeholder="Child / Anak - Anak">
                    </div>

                    <div class="form-group col-xs-12">
                      <label for="addressInput">Spesial Request</label>
                      <textarea class="form-control" name="SpesialRequestRegistrationGuest" id="idSpesialRequestRegistrationGuest" rows="4" style="resize: none; overflow: auto;"></textarea>
                    </div>

                    <!-- <div class="form-group col-xs-2">
                      <label for="adt">Validation Code</label>
                      <input type="text" name="val_code" class="form-control currency" id="val_code" disabled>
                    </div> -->

                    <!-- <div id="TextBoxesGroup" class="form-group col-xs-4">
                      <button type="button" id="removeButton" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-minus"></span></button>
                      <button type="button" id="addButton" class="btn btn-link btn-xs" style="float: right;"><span class="fa fa-plus"></span></button>
                        <div id="TextBoxDiv1">
                          <label for="add_facility">Add Facility</label>
                        </div>
                      <input type="text" name="add_facility" class="form-control" id="add_facility" >
                    </div> -->

                    <!-- <div class="form-group col-md-6" style="margin-bottom: 25px; padding:0;">
            <label class="col-md-12 control-label" for="producttext">Eigen text op product *</label>
            <div class="col-md-12">
                <select id="producttext" name="producttext" class="form-control" ="">
                    <option class="active" value="default" selected disabled>Eigen text op product</option>
                    <option value="nee">Nee</option>
                    <option value="Ja">Ja(+€3,50)</option>
                </select>
            </div>
        </div>
        <script>
        </script>

        <div class="form-group col-md-6" style="margin-bottom:0;">
            <label class="control-label" for="product_text">Uw eigen text*</label>
            <input id="product_text" name="product_text" placeholder="Indien Ja" class="form-control input-md" type="text">
        </div> -->

                    <!-- <div class="form-group col-xs-6">
                      <label for="guestNameInput"></label><br/>
                      <a href="<?php //echo base_url('home/laporanPDF'); ?>" class="btn btn-primary btn-sm" style="width: 12%;"><span class="fa fa-file-pdf-o">&nbsp</span>PDF</a>
                    </div> -->
                
                  
                  <!-- /.box-body -->
                  
                  <div class="box-footer" style="margin-right: 60%;">
                    <a href="<?php echo base_url('home/Guest'); ?>" class="btn btn-sm btn-primary" style="height: 90%;"><span class="fa fa-caret-left">&nbsp</span>Back</a>
                  	<button type="reset" class="btn btn-sm btn-danger"><span class="fa fa-undo">&nbsp</span> Reset</button>
                    <button type="submit" class="btn btn-sm btn-success" onclick=""><span class="fa fa-plus">&nbsp</span> Add Guest</button>
                    <!-- <button type="submit" class="btn btn-success" onclick=""><span class="fa fa-group">&nbsp</span> Add (Group)</button> -->
                   <!--  <input id="saveForm" name="saveForm" class="btn btn-success" type="submit" value="Add Guest" style="padding-left:20px" width="100" tabindex="23" onclick="FormSubmission(); SalesForceSubmission();" /> -->
                  </div>
                  </div>
                </form>


<!--                                                                     END TAB PANE PERSON 1                                                     -->
              
               
                


<!--                                                                                      END TAB PANE PERSON 2                                              -->

    
                </div>
              </div>
                <!-- </form> -->
                </div>
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




    <!-- Modal -->
  <div class="col-sm-12" width="60px">
                      <br/>
                      <div id="myModalRegist" class="modal fade " role="dialog">
                        <form role="form" action="<?php echo base_url('home/updateHotel'); ?>" method="post">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Update Registration Guest</h4>
                            </div>
                            <!-- hidden id hotel -->
                            <input type="hidden" name="id_regist" id="hiddenIdRegist">
                            <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <!-- Col 1 -->
                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>Guest Name</label>
                                        <input type="text" class="form-control" name="guest_name_modal" id="guest_name_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Identity Tipe</label>
                                        <input type="text" class="form-control" name="identity_tipe_modal" id="identity_tipe_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Identity Number</label>
                                        <input type="text" class="form-control" name="identity_number_modal" id="identity_number_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Job</label>
                                        <input type="text" class="form-control" name="job_modal" id="job_modal">
                                      </div>
                                    </div>

                                    <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email_modal" id="email_modal">
                                      </div>
                                      </div>

                                    <div class="form-group col-sm-5">
                                      <label>Gender</label><br/>
                                      <!-- <form method="post" action="#"> -->
                                      <input type="radio" name="gender_modal" value="Laki - Laki" > Laki-laki &nbsp
                                      <input type="radio" name="gender_modal" value="Perempuan" > Perempuan
                                    </div>

                                      <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone_modal" id="phone_modal">
                                      </div>
                                      </div>

                                    <div class="col-sm-9">
                                      <div class="form-group">
                                        <label>Address</label><br/>
                                        <textarea name="address" id="address" style="resize:none;width:850px;height:150px;"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="registCountryInput">Country</label>
                                          <select name="regist_country_modal" class="form-control" id="regist_country_modal" >
                                            <option value="country"> </option>
                                              <?php foreach ($cor as $key) {
                                                echo  "<option value=".$key['name_country'].">".$key['name_country']."</option>";
                                              } ?>
                                          </select>
                                      </div>
                                      </div>

                                      <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="registProvinceInput">Province</label>
                                          <select name="regist_province_modal" class="form-control" id="regist_province_modal" >
                                            <option value="province"> </option>
                                              <?php foreach ($pr as $key) {
                                                echo  "<option value=".$key['name_province'].">".$key['name_province']."</option>";
                                              } ?>
                                          </select>
                                      </div>
                                      </div>

                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="registCityInput">City</label>
                                          <select name="regist_city_modal" class="form-control" id="regist_city_modal" >
                                            <option value="city"> </option>
                                              <?php foreach ($cr as $key) {
                                                echo  "<option value=".$key['name_city'].">".$key['name_city']."</option>";
                                              } ?>
                                          </select>
                                      </div>
                                      </div>

                                      <div class="col-sm-4">
                                      <div class="form-group">
                                        <label>Zip Code</label>
                                        <input type="text" class="form-control" name="zip_code_modal" id="zip_code_modal">
                                      </div>
                                      </div>

                                  </div>

                                  </div>
                                  <button type="submit" class="btn btn-success btn-lg">Confirm</button> 
                                </form>
                                </div>
                              </div>
  <!-- End Modal -->
                            </div>
                          </div>
                        </div>

  
  <!-- For New Agent -->
       <div id="AddAgent" class="modal fade" role="dialog">
        <form role="form" action="<?php echo base_url('home/addNewAgent'); ?>" method="post">
        <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Agent</h4>
            </div>
             <!-- body modal -->
             <!-- <input type="hidden" name="id_role" id="idIDNewRole"> -->
            <div class="modal-body">
              <div class="form-group">
                <label>New Agent</label>
                <input type="text" class="form-control" name="name_agent" id="idNewAgent">
              </div>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm"><span class="fa fa-check"></span> Confirm</button>
              <button type="reset" class="btn btn-danger btn-sm"><span class="fa fa-times"></span> Reset</button>
            </div>

          </div>
        </div>
      </form>
      </div>
      <!-- For New Agent -->


