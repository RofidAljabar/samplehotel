<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#" class="text-success">SNABB For HMS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<!-- Di command Supaya tidak bentrok jquery -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Pembatas -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <!-- daypilot libraries -->
  <!-- <script src="<?php echo base_url() ?>assets/js_daypilot/jquery/jquery-1.9.1.min.js" type="text/javascript"></script> -->
  <script src="<?php echo base_url() ?>assets/js_daypilot/daypilot/daypilot-all.min.js" type="text/javascript"></script>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/icons_daypilot/style.css" />

  <!-- JSPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script src="<?php echo base_url() ?>assets/jsPDF-CustomFonts-support-master/dist/jspdf.customfonts.min.js"></script>
<script src="<?php echo base_url() ?>assets/jsPDF-CustomFonts-support-master/dist/default_vfs.js"></script>



<script src="<?php echo base_url() ?>assets/jsPDF/plugins/autoprint.js"></script>
<script src="<?php echo base_url() ?>assets/jsPDF/plugins/standard_fonts_metrics.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/dropify/dist/js/dropify.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/maskmoney/jquery.maskedinput.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/maskmoney/jquery.maskedinput.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.4/jspdf.plugin.autotable.js"></script> -->



<!-- 
<script src="<?php echo base_url()?> assets/bower_components/moment/min/moment.min.js "></script>
<script src="<?php echo base_url()?> assets/bower_components/moment/moment.js "></script>
<script src="<?php echo base_url()?> assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url()?> assets/bower_components/fullcalendar/dist/fullcalendar.css"></script>
 -->

<!-- DateTimePicker -->

<!-- <script type="text/javascript" src="<?php echo base_url()?> assets/js/datetimepicker/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?> assets/js/datetimepicker/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?> assets/js/datetimepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?> assets/js/datetimepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script> -->

 <!-- START CALENDAR -->           

<script type="text/javascript">
  //init dp calender table
  var dp = new DayPilot.Scheduler("dp");
  dp.startDate = DayPilot.Date.today().firstDayOfMonth();
  dp.days = DayPilot.Date.today().daysInMonth();
  dp.scale = "Day";
  dp.timeHeaders = [
      { groupBy: "Month", format: "MMMM yyyy" },
      { groupBy: "Day", format: "d" }
  ];

  dp.rowHeaderColumns = [
  {title: "Room", width: 80},
  {title: "Type", width: 80},
  {title: "Capacity", width: 80},
  {title: "Status", width: 80},
];

  var nav = new DayPilot.Navigator("nav");
  nav.selectMode = "Month";
  nav.showMonths = 1;
  nav.skipMonths = 1;
  nav.onTimeRangeSelected = function(args) {
      loadTimeline(args.start);
      loadEvents();
  };

  dp.init();
  nav.init();

  loadResources();

  dp.onBeforeResHeaderRender = function(args){
    args.resource.columns[0].html = args.resource.tipe;

    args.resource.columns[1].html = args.resource.capacity+' person(s)';
    args.resource.columns[2].html = args.resource.status;
    switch (args.resource.status) {
      case "Available":
          args.resource.cssClass = "status_available";
          break;
           case "Reserved":
          args.resource.cssClass = "status_reserved";
          break;
           case "Day Use":
          args.resource.cssClass = "status_dayuse";
          break;
           case "Staying Guest":
          args.resource.cssClass = "status_stayingguest";
          break;
           case "Checkout":
          args.resource.cssClass = "status_checkout";
          break;
           case "OOS/OOO":
          args.resource.cssClass = "status_oos";
          break;
           case "Old Room":
          args.resource.cssClass = "status_oldroom";
          break;
           case "No Show":
          args.resource.cssClass = "status_noshow";
          break;
  }

  }

  function loadResources(){
    $.get( '<?php echo base_url('home/getDpRoom'); ?>', function( data ) {
      var parseDpRoom = JSON.parse(data);
      var parseDpRoomLength = parseDpRoom.length;
      var roomArr = [];

      for(var i = 0; i < parseDpRoomLength; i++){
        var idRoom = parseDpRoom[i].id_room;
        var nameRoom = parseDpRoom[i].name_room;
        var capacityRoom = parseDpRoom[i].max_person_room;
        var statusRoom = parseDpRoom[i].status_text;
        var tipeRoom = parseDpRoom[i].type_room;


        roomArr.push({
          id:idRoom,
          name:nameRoom,
          capacity:capacityRoom,
          status:statusRoom,
          tipe:tipeRoom
        });

      }



      var realData = JSON.stringify(roomArr);
      var realDataAsli = JSON.parse(realData);

      console.log("DP RESULT: "+realDataAsli);
      dp.resources = realDataAsli;
      dp.update();
    });
  }

</script>
<script type="text/javascript">
  $("#timerange").change(function() {
  switch (this.value) {
      case "week":
          dp.days = 7;
          nav.selectMode = "Week";
          nav.select(nav.selectionDay);
          break;
      case "month":
          dp.days = dp.startDate.daysInMonth();
          nav.selectMode = "Month";
          nav.select(nav.selectionDay);
          break;
  }
  loadTimeline(DayPilot.Date.today());
  loadEvents();
});
</script>




<!-- END CALENDAR -->

<script>

  $(function () {
    $('#tableHumanResources').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableCourse').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableChapter').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableCity').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableProvince').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableCountry').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableReligion').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tablePersonalData').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableDetailsInformation').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableDetailFasilitas').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

    $('#tableHotelInformation').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });

   $('#tableDetailsTypeRoom').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDataGuestType').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDetailsFasilitas').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false
  });

   $('#tableUserHotel').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 6
  });

   $('#tableDataCompany').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDataTentative').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDataGuestTentative').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDataConfirm').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

  $('#tableDataWaiting').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

   $('#tableDataGuestConfirm').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

  $('#tableDataGuestWaiting').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });


   $('#tableDataUser').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'    : 5
  });

   $('#tableCountryHotel').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false
  });

   $('#tableNewRole').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false
  });

   $('#tableDataTax').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : true,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 5
  });

//   $('#tableDetailTypeGuest').DataTable({
//       'paging'      : true,
//       'lengthChange': false,
//       'searching'   : true,
//       'ordering'    : true,
//       'info'        : true,
//       'autoWidth'   : false
// });


    $('#beginInput').datepicker({
      autoclose: true
    });

    $('#endInput').datepicker({
      autoclose: true
    });

    $('#dateSimulationInput').datepicker({
      autoclose: true
    });

    $('#birthDateInput').datepicker({
      autoclose: true
    });

    $('#birthDateInput2').datepicker({
      autoclose: true
    });
  })


</script>
</body>
</html>
<script >
  document.getElementById("#testTampil").innerHTML = "";
</script>

 <script>
    if (performance.navigation.type == 1) {
    console.info( "This page is reloaded" );
    $('.tabsParticipant a:first').tab('show');
  } else {
    console.info( "This page is not reloaded");
  }
  </script>

  <script type="text/javascript">

 function toggle_password () {
    var tag = document.getElementById("newpass");
    var tag2 = document.getElementById("showhide");
    if (tag2.innerHTML == 'Show Password'){
        tag.type="text";   
        tag2.innerText = 'Hide Password';
    }
    else {
        tag.type="password";   
        tag2.innerText = 'Show Password';
    }

    }

 function toggle_password2 () {
    var tag = document.getElementById("repass");
    var tag2 = document.getElementById("showhide2");
    if (tag2.innerHTML == 'Show Password'){
        tag.type="text";   
        tag2.innerText = 'Hide Password';
    }
    else {
        tag.type="password";   
        tag2.innerText = 'Show Password';
    }

    }   
</script>

<script type="text/javascript">
  
  var newpsw = document.getElementById("newpass")
  , repsw = document.getElementById("repass");

function validatePassword(){
  if(newpsw.value != repsw.value) {
    repsw.setCustomValidity("Re Passwords Doesn't Match With New password");
  } else {
    repsw.setCustomValidity('');
  }
}

newpass.onchange = validatePassword;
repass.onkeyup = validatePassword;
</script>

<script type="text/javascript">


  function bookchart(){
    location.href = '<?php echo base_url('home/bookchart'); ?>'
  }

  function baseUrl(){
    location.href = '<?php echo base_url(); ?>';
  }

  function HotelInformation(){
     location.href = '<?php echo base_url('home/HotelInformation'); ?>';
  }

  function course(){
     location.href = '<?php echo base_url('home/course'); ?>';
  }

  function UserManagement(){
     location.href = '<?php echo base_url('home/UserManagement'); ?>';
  }

  function venueOfTraining(){
     location.href = '<?php echo base_url('home/venueOfTraining'); ?>';
  }

  function instructor(){
     location.href = '<?php echo base_url('home/instructor'); ?>';
  }

  function userAccount(){
     location.href = '<?php echo base_url('home/userAccount'); ?>';
  }

  function officeBoy(){
     location.href = '<?php echo base_url('home/officeBoy'); ?>';
  }

  function typeExdepro(){
     location.href = '<?php echo base_url('home/typeExdepro'); ?>';
  }

  function typeTraining(){
     location.href = '<?php echo base_url('home/typeTraining'); ?>';
  }

  function religion(){
     location.href = '<?php echo base_url('home/religion'); ?>';
  }

  function region(){
     location.href = '<?php echo base_url('home/region'); ?>';
  }

  function batchMaster(){
     location.href = '<?php echo base_url('home/batchMaster'); ?>';
  }

  function RoomManagement(){

     location.href = '<?php echo base_url('home/RoomManagement'); ?>';
  }

  function inputHotel(){
    location.href = '<?php echo base_url('home/inputHotel'); ?>';
  }

  function viewProfile(){
     location.href = '<?php echo base_url('home/viewProfile'); ?>';
  }

  function Guest(){
     location.href = '<?php echo base_url('home/guest'); ?>';
  }

  function registrationGuest(){
     location.href = '<?php echo base_url('home/registrationGuest'); ?>';
  }

  function segmentation(){
     location.href = '<?php echo base_url('home/segmentation'); ?>';
  }

   function guestType(){
     location.href = '<?php echo base_url('home/guestType'); ?>';
  }

  function Reservation(){
     location.href = '<?php echo base_url('home/Reservation'); ?>';
  }

  function Promo(){
     location.href = '<?php echo base_url('home/Promo'); ?>';
  }

  function Tax(){
     location.href = '<?php echo base_url('home/tax'); ?>';
  }

  // function PriceManagement(){
  //    location.href = '<?php echo base_url('home/PriceManagement'); ?>';
  // }

  function hrView(id){
    $.ajax({
      url: '<?php echo base_url('home/hrView'); ?>',
      data: {id:id},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
        if (data['contactPerson'] == 0 || data['contactPerson'] == null ) {
          console.log("kosong");
        } else {
          console.log(data['contactPerson']);
        }

        var cpLength = data['contactPerson'].length;

        var hr_id = data['hrView'][0]['hr_id'];
        var hr_company = data['hrView'][0]['hr_company_name'];
        var hr_office = data['hrView'][0]['hr_office_building'];
        var hr_floor = data['hrView'][0]['hr_floor'];
        var hr_address = data['hrView'][0]['hr_address'];
        var hr_city = data['hrView'][0]['hr_city'];
        var hr_zip_code = data['hrView'][0]['hr_zip_code'];
        var hr_province = data['hrView'][0]['hr_province'];
        var hr_country = data['hrView'][0]['hr_country'];

        $('#modalHrView #modalHrViewCompany').html(hr_company);
        $('#modalHrView #modalHrViewAddress').html(hr_address);
        $('#modalHrView #modalHrViewOffice').html(hr_office);
        $('#modalHrView #modalHrViewFloor').html(hr_floor);
        $('#modalHrView #modalHrViewCity').html(hr_city);
        $('#modalHrView #modalHrViewProvince').html(hr_province);
        $('#modalHrView #modalHrViewCountry').html(hr_country);
        $('#modalHrView #modalHrViewZipCode').html(hr_zip_code);

        if (cpLength == 0) {
          $('#modalHrView #modalHrViewTitleCP').html("Cannot found contact person data");
        } else {
          $('#modalHrView #modalHrViewTitleCP').html("Contact Person");
        }

        $('#modalHrView').modal('show');
      }
    });
  }

  function hrEdit(id){
    alert(id);
  }

  function hrDelete(id){
    alert(id);
  }

  function hrDelete(id){
    alert(id);
  }


// Start Hotel Information

function hiDelete(id_hotel){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusHotelInformation'); ?>',
      data: {id:id_hotel},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/HotelInformation'); ?>';
        //alert(data);
      }
    });
  }

  function guestDelete(id_regist){
    $.ajax({
      url: '<?php echo base_url('home/hapusGuest'); ?>',
      data: {id:id_regist},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/Guest'); ?>';
      }
    });
  }

  function userDelete(id_user){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusUser'); ?>',
      data: {id:id_user},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/UserManagement'); ?>';
        //alert(data);
      }
    });
  }

  function removeMasterSegment(id_segment){
    $.ajax({
      url: '<?php echo base_url('home/hapusSegment'); ?>',
      data: {id:id_segment},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/segmentation'); ?>';
      }
    });
  }

  function removePromo(id_promo){
    $.ajax({
      url: '<?php echo base_url('home/hapusPromo'); ?>',
      data: {id:id_promo},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/Promo'); ?>';
      }
    });
  }

  function ubahPromo(id_promo){
    // console.log("Testing: "+name_promo);

    $.ajax({
      url: '<?php echo base_url('home/editPromo'); ?>',
      data: {id:id_promo},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var namepr          = data['editPromo'][0]['name_promo'];
        var statuspr        = data['editPromo'][0]['status_promo'];
        var startpr         = data['editPromo'][0]['start_date'];
        var endpr           = data['editPromo'][0]['end_date'];
        var codepr          = data['editPromo'][0]['code_promo'];
        var id_promo        = data['editPromo'][0]['id_promo'];

        $('#name_promo_modal').val(namepr);
        $('#status_promo_modal').val(statuspr);
        $('#start_promo_modal').val(startpr);
        $('#end_promo_modal').val(endpr);
        $('#code_promo_modal').val(codepr);
        $('#id_promo_modal').val(id_promo);
        $('#promoModal').modal('show');
      }
    });
  }

  function removeGuestType(id_guest_type){
    $.ajax({
      url: '<?php echo base_url('home/hapusGuestType'); ?>',
      data: {id:id_guest_type},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/guestType'); ?>';
      }
    });
  }

   function removeDetailGuestType(id_detail_guest_type){
    $.ajax({
      url: '<?php echo base_url('home/hapusDetailGuestType'); ?>',
      data: {id:id_detail_guest_type},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/guestType'); ?>';
      }
    });
  }

   function ubahTax(id){
    //console.log("Testing: "+hi2);

    $.ajax({
      url: '<?php echo base_url('home/editTax'); ?>',
      data: {id:id},
      dataType: 'json',
      type: 'post',
      success:function(data){

        var nama      = data['editTax'][0]['nama'];
        var nominal   = data['editTax'][0]['nominal'];
        var id        = data['editTax'][0]['id'];

        $('#nama_modal').val(nama);
        $('#nominal_modal').val(nominal);
        $('#id_tax').val(id);
        $('#myModal').modal('show');
      }
    });
  }

  function deleteTax(id){
    $.ajax({
      url: '<?php echo base_url('home/hapusTax'); ?>',
      data: {id:id},
      dataType: 'json',
      type: 'post',
      success:function(data){
         location.href = '<?php echo base_url('home/Tax'); ?>';
      }
    });
  }

  

  function ubahUserHotel(id_user){

    $.ajax({
      url: '<?php echo base_url('home/ubahUserHotel'); ?>',
      data: {id:id_user},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var role        = data['ubahUserHotel'][0]['role'];
        var user_photo  = data['ubahUserHotel'][0]['user_photo'];
        var full_name   = data['ubahUserHotel'][0]['full_name'];
        var email       = data['ubahUserHotel'][0]['email'];
        var mobile_phone = data['ubahUserHotel'][0]['mobile_phone'];
        var password    = "Default Password ( hoteluser )";
        var re_password = data['ubahUserHotel'][0]['re_password'];

        $('#idUserHotel').val(id_user);
        $('#idRole').val(role);
        $('#idUserPhoto').val(user_photo);
        $('#idFullName').val(full_name);
        $('#idEmail').val(email);
        $('#id_mobile_phone').val(mobile_phone);
        $('#idPassword').val(password);
        $('#idRepassword').val(re_password);
        $('#editModalUserHotel').modal('show');
      }
    });
  }

  function ubahGuest(id_regist){
    //console.log("Testing: "+hi2);

    $.ajax({
      url: '<?php echo base_url('home/editGuest'); ?>',
      data: {id:id_regist},
      dataType: 'json',
      type: 'post',
      success:function(data){

        var tittle          = data['editGuest'][0]['tittle'];
        var first_name      = data['editGuest'][0]['first_name'];
        var middle_name     = data['editGuest'][0]['middle_name'];
        var last_name       = data['editGuest'][0]['last_name'];
        var identity_photo  = data['editGuest'][0]['identity_photo'];
        var identity_tipe   = data['editGuest'][0]['identity_tipe'];
        var identity_number = data['editGuest'][0]['identity_number'];
        var gender          = data['editGuest'][0]['gender'];
        var phone           = data['editGuest'][0]['phone'];
        var email           = data['editGuest'][0]['email'];
        var zip_code        = data['editGuest'][0]['zip_code'];
        var regist_country  = data['editGuest'][0]['regist_country'];
        var regist_province = data['editGuest'][0]['regist_province'];
        var regist_city     = data['editGuest'][0]['regist_city'];
        var adf_date        = data['editGuest'][0]['adf_date'];
        var adt_date        = data['editGuest'][0]['adt_date'];
        var sts             = data['editGuest'][0]['status'];
        var curn            = data['editGuest'][0]['currency'];
        var agnt            = data['editGuest'][0]['agent'];
        var g_regist        = data['editGuest'][0]['group_registration'];
        var mstr            = data['editGuest'][0]['guest_room_type'];
        var no_of_room      = data['editGuest'][0]['no_of_room'];
        var price_regist    = data['editGuest'][0]['price_regist']; 
        var address         = data['editGuest'][0]['address'];
        var pay_method      = data['editGuest'][0]['pay_method'];
        var valid_code      = data['editGuest'][0]['valid_code'];
        var id_regist       = data['editGuest'][0]['id_regist'];

        // var genderGuest = data[0]['gender'];

        if (gender == 'Laki - Laki') {
                  $('#modalGuest #genderL').prop('checked', true);
                } else {
                  $('#modalGuest #genderP').prop('checked', true);
                }

        $('#id_tittle_modal').val(tittle);
        $('#id_first_name_modal').val(first_name);
        $('#id_middle_name_modal').val(middle_name);
        $('#id_last_name_modal').val(last_name);
        $('#id_identity_photo_modal').val(identity_photo);
        $('#selectIdentity').val(identity_tipe);
        $('#id_identity_number_modal').val(identity_number);
        $('#id_gender_modal').val(gender);
        $('#id_phone_modal').val(phone);
        $('#id_email_modal').val(email);
        $('#id_zip_code_modal').val(zip_code);
        $('#selectStatus').val(sts);
        $('#selectAgent').val(agnt);
        $('#selectCurrency').val(curn);
        $('#selectRoomType').val(mstr);
        $('#selectCountryGuest_Modal').val(regist_country);      
        $('#selectProvinceGuest_Modal').val(regist_province);
        $('#selectCityGuest_Modal').val(regist_city);
        $('#arrivalDate_modal').val(adf_date);
        $('#departureDate_modal').val(adt_date);
        $('#id_address_modal').val(address);
        $('#hiddenIdRegist').val(id_regist);

      var countryId = regist_country;
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="cityguest_modal"]').prop("disabled", true);
        $('select[name="provinceguest_modal"]').prop("disabled", true);

        $('#selectProvinceGuest_Modal').find('option').remove().end();
        $('#selectCityGuest_Modal').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceGuest') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="provinceguest_modal"]').prop("disabled", false);


            var count = Object.keys(data).length;
            var selectProvinceGuest_Modal = document.getElementById('selectProvinceGuest_Modal');
            // console.log("rofid: "+count);


            $('#selectProvinceGuest_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceGuest_Modal.appendChild(opt);
              if (data[i]['id_province'] == regist_province ) {
              console.log(data[i]['id_province']+"-------"+regist_province);

                selectProvinceGuest_Modal.selected = "true";
              }
            }  
          }
        });
      }

        $('#modalGuest').modal('show');
      }
    });
  }


//   function laporanPDF(id){

//     $.ajax({
//     url: '<?php //echo base_url('home/laporanPDF'); ?>',
//     type: 'GET',
//     data: {id:id},
//     success:function(data){
        
//     }
// })

//   }

  function viewGuest(id){
    //console.log("Testing: "+hi2);

    $.ajax({
      url: '<?php echo base_url('home/viewGuest'); ?>',
      data: {id:id},
      dataType: 'json',
      type: 'post',
      success:function(data){

        var guest_name      = data['viewGuest'][0]['guest_name'];
        var identity_tipe   = data['viewGuest'][0]['identity_tipe'];
        var identity_number = data['viewGuest'][0]['identity_number'];
        var job             = data['viewGuest'][0]['job'];
        var gender          = data['viewGuest'][0]['gender'];
        var phone           = data['viewGuest'][0]['phone'];
        var email           = data['viewGuest'][0]['email'];
        var zip_code        = data['viewGuest'][0]['zip_code'];
        var regist_country  = data['viewGuest'][0]['regist_country'];
        var regist_province = data['viewGuest'][0]['regist_province'];
        var regist_city     = data['viewGuest'][0]['regist_city'];
        var address         = data['viewGuest'][0]['address'];
        var id_regist       = data['viewGuest'][0]['id_regist'];

        $('#guest_name').val(guest_name);
        $('#identity_tipe').val(identity_tipe);
        $('#identity_number').val(identity_number);
        $('#job').val(job);
        $('#gender').val(gender);
        $('#phone').val(phone);
        $('#email').val(email);
        $('#zip_code').val(zip_code);
        $('#selectCountryGuest_Modal').val(regist_country);      
        $('#selectProvinceGuest_Modal').val(regist_province);
        $('#selectCityGuest_Modal').val(regist_city);
        $('#address').val(address);
        $('#hiddenIdRegist').val(id_regist);
        $('#modalGuest').modal('show');
      }
    });
  }

  function gantipass(){

    $.ajax({
      // url: '<?php echo base_url('home/ubahProvinceHotel'); ?>',
      // data: {id:id_province},
      // dataType: 'json',
      // type: 'post',
      success:function(data){
        // var name_province = data['ubahProvinceHotel'][0]['name_province'];

        // $('#idProvinceHotel').val(id_province);
        // $('#idNameProvinceHotel').val(name_province);
        $('#modalgantipass').modal('show');
      }
    });
  }

  function ubahRegist(id_regist){

    $.ajax({
      url: '<?php echo base_url('home/editRegist'); ?>',
      data: {id:id_regist},
      dataType: 'json',
      type: 'post',
      success:function(data){

        var guest_name      = data['editRegist'][0]['guest_name'];
        var identity_tipe   = data['editRegist'][0]['identity_tipe'];
        var identity_number = data['editRegist'][0]['identity_number'];
        var job             = data['editRegist'][0]['job'];
        var gender          = data['editRegist'][0]['gender'];
        var phone           = data['editRegist'][0]['phone'];
        var email           = data['editRegist'][0]['email'];
        var zip_code        = data['editRegist'][0]['zip_code'];
        var regist_country  = data['editRegist'][0]['regist_country'];
        var regist_province = data['editRegist'][0]['regist_province'];
        var regist_city     = data['editRegist'][0]['regist_city'];
        var address         = data['editRegist'][0]['address'];

        $('#guest_name_modal').val(guest_name);
        $('#identity_tipe_modal').val(identity_tipe);
        $('#identity_number_modal').val(identity_number);
        $('#job_modal').val(job);
        $('#gender_modal').val(gender);
        $('#phone_modal').val(phone);
        $('#email_modal').val(email);
        $('#zip_code_modal').val(zip_code);
        $('#regist_country_modal').val(regist_country);
        $('#regist_province_modal').val(regist_province);
        $('#regist_city_modal').val(regist_city);
        $('#address').val(address);
        $('#hiddenIdRegist').val(id_regist);

        $('#myModalRegist').modal('show');
      }
    });
  }

  // function ubahProfile(id_user){

  //   $.ajax({
  //     url: '<?php //echo base_url('home/editProfile'); ?>',
  //     data: {id:id_user},
  //     dataType: 'json',
  //     type: 'post',
  //     success:function(data){

  //       var full_name       = data['editRegist'][0]['guest_name'];
  //       var user_photo      = data['editRegist'][0]['identity_tipe'];
  //       var email           = data['editRegist'][0]['identity_number'];
  //       var phone           = data['editRegist'][0]['job'];
  //       var role            = data['editRegist'][0]['gender'];

  //       $('#full_name_vp').val(full_name);
  //       $('#user_photo_vp').val(user_photo);
  //       $('#email_vp').val(email);
  //       $('#phone_vp').val(phone);
  //       $('#role_vp').val(role);

  //       $('#myModalRegist').modal('show');
  //     }
  //   });
  // }


  // End Hotel Information

  // Start Inputan Hotel(City, Province, Country)

  function removeCityHotel(id_city){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusInputCityHotel'); ?>',
      data: {id:id_city},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/inputHotel'); ?>';
        //alert(data);
      }
    });
  }

  function ubahCityHotel(id_city){

    $.ajax({
      url: '<?php echo base_url('home/ubahCityHotel'); ?>',
      data: {id:id_city},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var name_city = data['ubahCityHotel'][0]['name_city'];

        $('#iDCity').val(id_city);
        $('#NameCity').val(name_city);
        $('#editModalCityHotel').modal('show');
      }
    });
  }

  function ubahProvinceHotel(id_province){

    $.ajax({
      url: '<?php echo base_url('home/ubahProvinceHotel'); ?>',
      data: {id:id_province},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var name_province = data['ubahProvinceHotel'][0]['name_province'];

        $('#idProvinceHotel').val(id_province);
        $('#idNameProvinceHotel').val(name_province);
        $('#editModalProvinceHotel').modal('show');
      }
    });
  }

  function removeProvinceHotel(id_province){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusProvinceHotel'); ?>',
      data: {id:id_province},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/inputHotel'); ?>';
        //alert(data);
      }
    });
  }

  function removeCountryHotel(id_country){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusCountryHotel'); ?>',
      data: {id:id_country},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/inputHotel'); ?>';
        //alert(data);
      }
    });
  }

  function ubahCountryHotel(id_country){

    $.ajax({
      url: '<?php echo base_url('home/ubahCountryHotel'); ?>',
      data: {id:id_country},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var name_country = data['ubahCountryHotel'][0]['name_country'];

        $('#idCountryHotel').val(id_country);
        $('#idNameCountryHotel').val(name_country);
        $('#editModalCountryHotel').modal('show');
      }
    });
  }

  function ubahNewRole(id_role){

    $.ajax({
      url: '<?php echo base_url('home/ubahNewRole'); ?>',
      data: {id:id_role},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var name_role = data['ubahNewRole'][0]['name_role'];

        $('#idIDNewRole2').val(id_role);
        $('#idNewRole2').val(name_role);
        $('#editRole2').modal('show');
      }
    });
  }

  function removeNewRole(id_role){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusNewRole'); ?>',
      data: {id:id_role},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/UserManagement'); ?>';
        //alert(data);
      }
    });
  }

  // function ubahNewRole(id_role){
  //   //alert(id_tipe);

  //   $.ajax({
  //     url: '<?php //echo base_url('home/editRole'); ?>',
  //     data: {id:id_role},
  //     dataType: 'json',
  //     type: 'post',
  //     success:function(data){
  //       //alert(data['hrView'][0]['hr_company_name']);
  //        location.href = '<?php //echo base_url('home/editRole'); ?>';
  //       //alert(data);
  //     }
  //   });
  // }

  // End Inputan Hotel(City, Province, Country)







  function removeFasilitas(id_fasilitas){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusFasilitas'); ?>',
      data: {id:id_fasilitas},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
        
         location.href = '<?php echo base_url('home/RoomManagement'); ?>';
        //alert(data);
      }
    });
  }

  function ubahFasilitas(id_fasilitas){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editFasilitas'); ?>',
      data: {id:id_fasilitas},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var dscf = data['editDetailFasilitas'][0]['dsc_fasilitas'];

        $('#idTipeFasilitas').val(id_fasilitas);
        $('#idDscFasilitas').val(dscf);
        $('#editModalFasilitas').modal('show');
      }
    });
  }

  function remove(id_tipe){

    $.ajax({
      url: '<?php echo base_url('home/hapus'); ?>',
      data: {id:id_tipe},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/RoomManagement'); ?>';
         
        //alert(data);
      }
    });
  }

  function removeRoom(id_room){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusRoom'); ?>',
      data: {id:id_room},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/RoomManagement'); ?>';
        //alert(data);
      }
    });
  }

  function removeSubFasilitas(id_detail, dscFasilitas, idFasilitas){
    //alert(id_detail+"----"+dscFasilitas+"-----"+idFasilitas);

    $.ajax({
      url: '<?php echo base_url('home/hapusSubFasilitas'); ?>',
      data: {id:id_detail},
      dataType: 'json',
      type: 'post',
      success:function(data){
       location.href = '<?php echo base_url('home/detailfasilitas')?>/?dsc='+dscFasilitas+'&idFasilitas='+idFasilitas;
      }
    });
  }

  function ubahRoom(id_room){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editRoom'); ?>',
      data: {id:id_room},
      dataType: 'json',
      type: 'post',
      success:function(data){
        console.log(JSON.stringify(data));
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var NameRoom = data['editDetailRoom'][0]['name_room'];
        var TypeRoom = data['editDetailRoom'][0]['type_room'];
        var NoOfRoom = data['editDetailRoom'][0]['no_of_room'];
        var Building = data['editDetailRoom'][0]['building'];
        //console.log("TEST BUILDING :"+Building);
        var Floor    = data['editDetailRoom'][0]['floor'];
        var PriceRoom = data['editDetailRoom'][0]['price_room'];
        var MaxPerson = data['editDetailRoom'][0]['max_person_room'];
        var statusRoom = data['editDetailRoom'][0]['status'];

        $('#idRoom').val(id_room);
        $('#idNameRoom').val(NameRoom);
        $('#idTypeRoom').val(TypeRoom);
        $('#idNoOfRoom').val(NoOfRoom);
        $('#buildingRoom').val(Building);
        $('#idFloor').val(Floor);
        $('#idPriceRoom2').val(PriceRoom);
        $('#idMaxPerson').val(MaxPerson);
        $('#statusRoom').val(statusRoom);

        $('#editModalRoom').modal('show');
      }
    });
  }

  function ubahSubFasilitas(id_detail){

    $.ajax({
      url: '<?php echo base_url('home/editSubFasilitas'); ?>',
      data: {id:id_detail},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var dscf = data['editDetailSubFasilitas'][0]['dsc_fasilitas'];
        var dsc = data['editDetailSubFasilitas'][0]['dsc_detail'];
        var qty = data['editDetailSubFasilitas'][0]['qty'];
        var brand = data['editDetailSubFasilitas'][0]['brand'];
        var nte = data['editDetailSubFasilitas'][0]['note'];

        $('#IdDetail').val(id_detail);
        $('#dsc_sub_fasilitas').val(dscf);
        $('#dsc_sub_fasilitas1').val(dscf);
        $('#detail_sub_fasilitas').val(dsc);
        $('#detail_sub_qty').val(qty);
        $('#detail_sub_brand').val(brand);
        $('#note_modal').val(nte);
        $('#editModalSubFasilitas').modal('show');
      }
    });
  }

  function getDetFasilitas(id_room){
     $.ajax({
      url: '<?php echo base_url('home/viewDetFasilitas2'); ?>',
      data: {id:id_room},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var prev = '';
        var size = Object.keys(data).length;
        
        $('#testTampil').empty();

        for (var i = 0; i<size;i++) {
          console.log("Fasilitas di kamar ini: "+data[i]['dsc_detail']);
          $('#testTampil').append("<label type=textbox checked value="+data[i]['dsc_fasilitas']+">"+data[i]['dsc_fasilitas'] +"</br> <br/>");
          $('#testTampil').append(data[i]['dsc_detail']+"<br/>");
          // $('#testTampil').append("<input type=checkbox checked value="+data[i]['dsc_detail']+">"+data[i]['dsc_detail'] +"</br>");
          
        }
        $('#vFasilitas').modal('show');
      }
    });
  }
  function stay(){
    // alert("Test");
    var id_room_f = $('#myModal #idRoomF').val();
    var fasilitas = $("#myModal input[name='fasilitas[]']:checkbox:checked")
              .map(function(){return $(this).val();}).get();
    //var fasilitas = $('#myModal #fasilitas').val();

    $.ajax({
      url: '<?php echo base_url('home/addFasilitasRoom'); ?>',
      data: {id_room_f:id_room_f, fasilitas:fasilitas},
      dataType: 'json',
      type: 'post',
      success:function(data){
        // $('#myModal').on('hidden.bs.modal',function(){
        //   location.reload();
        // });
      }
    });
    alert('Data Has Been Updated');
  }
  function addSubFasilitasNew(id_room){
    $.ajax({
      url: '<?php echo base_url('home/viewDetFasilitas'); ?>',
      data: {id:id_room},
      dataType: 'json',
      type: 'post',
      success:function(data){
        var pd = data.length;
        for(var a=0;a<pd;a++){
          var statusFasilitas = data[a]['kosong'];
          var idFasilitas = data[a]['IDFAS'];

        }
        
        $('#idRoomF').val(id_room);
        $('#myModal').modal('show');

        var sList = "";
        $('#myModal input[type=checkbox]').prop('checked', false);
        $('#myModal input[type=checkbox]').each(function () {
          var idFasilitasLama = $(this).val();
            for(var a=0;a<pd;a++){
              var statusFasilitas = data[a]['addressexists'];
              var idFasilitas = data[a]['IDFAS'];
              if (idFasilitas == idFasilitasLama  ) {
                if (statusFasilitas == "ADA") {
                  $(this).prop('checked', true);
                  console.log(data[a]['DESCDET']);
                }
              }
            }
        });
      }
    });
  }
  
  function ubahPsw(id_user){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editPsw'); ?>',
      data: {id:id_user},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var role = data['editPassword'][0]['role'];
        var email = data['editPassword'][0]['email'];
        var pass = data['editPassword'][0]['password'];

        $('#idUser').val(id_user);
        $('#idRoleChg').val(role);
        $('#idEmailChg').val(email);
        $('#idPassChg').val(pass);
        $('#modalchg').modal('show');
      }
    });
  }


  function ubah(id_tipe){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/edit'); ?>',
      data: {id:id_tipe},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var dsc = data['editDetail'][0]['dsc_tipe'];
        var prc = data['editDetail'][0]['price'];

        $('#idTipe').val(id_tipe);
        $('#idDscTipe').val(dsc);
        $('#idPriceRoom').val(prc);
        $('#editModal').modal('show');
      }
    });
  }

  function ubahGuestType(id_guest_type){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editGuestType'); ?>',
      data: {id:id_guest_type},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var edit_guest = data['editGuestType'][0]['guest_type'];
        var id_guest_type = data['editGuestType'][0]['id_guest_type'];

        $('#idDscTipe').val(edit_guest);
        $('#id_type_guest_modal').val(id_guest_type);
        $('#editGuestTypeModal').modal('show');
      }
    });
  }

  function ubahMasterSegment(id_segment){
    //console.log("Testing: "+hi2);

    $.ajax({
      url: '<?php echo base_url('home/editSegmentation'); ?>',
      data: {id:id_segment},
      dataType: 'json',
      type: 'post',
      success:function(data){

        var segment_modal   = data['editSegment'][0]['segment'];
        var id_segment      = data['editSegment'][0]['id_segment'];

        $('#segment_modal').val(segment_modal);
        $('#id_segment_modal').val(id_segment);
        $('#editModalSegment').modal('show');
      }
    });
  }

  function ubahDetailGuestType(id_detail_guest_type){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editDetailGuestType'); ?>',
      data: {id:id_detail_guest_type},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var select_detail_type_guest = data['editDetailGuestType'][0]['detail_type_guest'];
        var detail_type_guest = data['editDetailGuestType'][0]['detail'];
        var id_detail_guest_type = data['editDetailGuestType'][0]['id_detail_guest_type'];
        var price_guest = data['editDetailGuestType'][0]['price'];

        $('#selectDetailTypeGuest_modal').val(select_detail_type_guest);
        $('#detail_type_guest_modal').val(detail_type_guest);
        $('#id_detail_guest_type').val(id_detail_guest_type);
        $('#price_edit').val(price_guest);
        $('#editModalDetailGuestType').modal('show');
      }
    });
  }

  function editReservation(id_reservation){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/editReservation'); ?>',
      dateFormat: 'dd-mm-yy',
      data: {id:id_reservation},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);

        var TittleReservationEditModal                     = data['editModalReservation'][0]['tittle'];
        var FirstNameReservationEditModal                  = data['editModalReservation'][0]['first_name'];
        var SurnameReservationEditModal                    = data['editModalReservation'][0]['surname'];
        // var MiddleNameReservationEditModal                 = data['editModalReservation'][0]['middle_name'];
        // var LastNameReservationEditModal                   = data['editModalReservation'][0]['last_name'];

        var ArrivalDateReservationEditModal                = data['editModalReservation'][0]['arr_date'];
        var ArrivalTimeReservationEditModal                = data['editModalReservation'][0]['arr_time'];

        var DprtDateReservationEditModal                   = data['editModalReservation'][0]['dprt_date'];
        var DprtTimeReservationEditModal                   = data['editModalReservation'][0]['dprt_time'];


        // var ArrivalDateReservationEditModal                = data['editModalReservation'][0]['arrival_date'];
        // var a = new Date(ArrivalDateReservationEditModal);
        // var aDay = a.getDate();
        // aDay = aDay > 9 ? aDay : '0'+aDay;
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newArrival = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW ARRIVAL: "+newArrival);


        // var DepartDateReservationEditModal                 = data['editModalReservation'][0]['depart_date'];
        // var a = new Date(DepartDateReservationEditModal);
        // var aDay = a.getDate();
        // aDay = aDay > 9 ? aDay : '0'+aDay;
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newDepart = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW ARRIVAL: "+newDepart);


        var TotalPaxReservationEditModal                   = data['editModalReservation'][0]['total_pax'];
        var BuildingReservationEditModal                   = data['editModalReservation'][0]['building'];
        var FloorReservationEditModal                      = data['editModalReservation'][0]['floor'];
        var RoomTypeReservatonEditModal                    = data['editModalReservation'][0]['room_type'];
        var NoRoomReservationEditModal                     = data['editModalReservation'][0]['no_of_room'];
        var RoomRateReservationEditModal                   = data['editModalReservation'][0]['room_rate'];
        var SpesialRequestReservationEditModal             = data['editModalReservation'][0]['spesial_request'];
        var BillingInstructionReservationEditModal         = data['editModalReservation'][0]['billing_instruction'];
        var DepositByReservationEditModal                  = data['editModalReservation'][0]['pay_method'];
        var TypeCardReservationEditModal                   = data['editModalReservation'][0]['type_card'];
        var CardNoReservationEditModal                     = data['editModalReservation'][0]['card_no'];

        var ExpDateReservationEditModal                    = data['editModalReservation'][0]['expired_date'];
        // var a = new Date(ExpDateReservationEditModal);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newExpDate = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW EXP DATE: "+newExpDate);


        var NoteReservationEditModal                       = data['editModalReservation'][0]['note'];
        var StatusReservationEditModal                     = data['editModalReservation'][0]['status'];
        var GuestTypeReservationEditModal                  = data['editModalReservation'][0]['guest_type'];
        var DetailGuestTypeReservationEditModal            = data['editModalReservation'][0]['detail_guest_type'];
        var RemarksReservationEditModal                    = data['editModalReservation'][0]['remarks'];
        var TittleCPReservationEditModal                   = data['editModalReservation'][0]['tittleCP'];
        var FirstNameCPReservationEditModal                = data['editModalReservation'][0]['first_nameCP'];
        var SurnameCPReservationEditModal                  = data['editModalReservation'][0]['surnameCP'];
        // var MiddleNameCPReservationEditModal               = data['editModalReservation'][0]['middle_nameCP'];
        // var LastnameCPReservationEditModal                 = data['editModalReservation'][0]['last_nameCP'];
        var PhoneNumberCPReservationEditModal              = data['editModalReservation'][0]['phoneCP'];
        var EmailCPReservationEditModal                    = data['editModalReservation'][0]['emailCP'];

        var DateTimeCPReservationEditModal                 = data['editModalReservation'][0]['datetimeCP'];
        var a = new Date(DateTimeCPReservationEditModal);
        var aDay = a.getDate();
        var aMonth = a.getMonth()+1;
        aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        var aYear = a.getFullYear();
        var aHours = a.getHours();
        var aMinutes = a.getMinutes();
        aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        var aSeconds = a.getSeconds();
        aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        var newDateTimeCP = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        console.log("NEW ARRIVAL: "+newDateTimeCP);

        var ReservByReservationEditModal                   = data['editModalReservation'][0]['reservation_handle_by'];






        // var sgmnttn                     = data['editDetailReservation'][0]['segmentation'];
        // var guest_type_edit             = data['editDetailReservation'][0]['guest_type'];
        // var detail_guest_type_edit      = data['editDetailReservation'][0]['detail_guest_type'];
        // var tittle                      = data['editDetailReservation'][0]['tittle'];
        // var frst                        = data['editDetailReservation'][0]['first_name'];
        // var mddl_modal                  = data['editDetailReservation'][0]['middle_name'];
        // var lst                         = data['editDetailReservation'][0]['last_name'];
        // var idfoto                      = data['editDetailReservation'][0]['identity_foto'];
        // var idt                         = data['editDetailReservation'][0]['id_identity_tipe'];
        // var idn                         = data['editDetailReservation'][0]['identity_number'];
        // var gender                      = data['editDetailReservation'][0]['gender'];
        // var regist_country              = data['editDetailReservation'][0]['regist_country'];
        // var regist_province             = data['editDetailReservation'][0]['regist_province'];
        // var regist_city                 = data['editDetailReservation'][0]['regist_city'];
        // var zip_code                    = data['editDetailReservation'][0]['zip_code'];
        // var pay_method                  = data['editDetailReservation'][0]['pay_method'];
        // var stat_payment                = data['editDetailReservation'][0]['stat_payment'];
        // var tot_bill                    = data['editDetailReservation'][0]['tot_tagihan'];


        // var sts                         = data['editDetailReservation'][0]['status'];
        // var arr                         = data['editDetailReservation'][0]['arrival_date'];
        // var dept                        = data['editDetailReservation'][0]['depart_date'];
        // var roomtype                    = data['editDetailReservation'][0]['room_type'];
        // var noroom                      = data['editDetailReservation'][0]['no_of_room'];
        // var roomrate                    = data['editDetailReservation'][0]['room_rate'];
        // var tot                         = data['editDetailReservation'][0]['total_pax'];
        // var email                       = data['editDetailReservation'][0]['email'];
        // var phn                         = data['editDetailReservation'][0]['phone_number'];
        // var add                         = data['editDetailReservation'][0]['address'];
        // var rem                         = data['editDetailReservation'][0]['remarks'];


       //  var baseUrlPhoto = "<?php echo base_url();?>assets/reservation_foto/"+idfoto;

       //  var drEvent = $('.dropifyEditReservation').dropify();
       // drEvent = drEvent.data('dropify');
       // drEvent.resetPreview();
       // drEvent.clearElement();
       // drEvent.settings['defaultFile']=baseUrlPhoto;
       // drEvent.destroy();
       // drEvent.init();


       //  if (gender == 'Male') {
       //            $('#modalReservation #genderM_edit_reservation_modal').prop('checked', true);
       //          } else {
       //            $('#modalReservation #genderF_edit_reservation_modal').prop('checked', true);
       //          }



        $('#idReservation').val(id_reservation);
        $('#idTittleReservationEditModal').val(TittleReservationEditModal);
        $('#idFirstnameReservationEditModal').val(FirstNameReservationEditModal);
        $('#idSurnameReservationEditModal').val(SurnameReservationEditModal);
        // $('#idMiddleNameReservationEditModal').val(MiddleNameReservationEditModal);
        // $('#idLastNameReservationEditModal').val(LastNameReservationEditModal);
        $('#idArrivalDateReservationEditModal').val(ArrivalDateReservationEditModal);
        $('#idArrivalTimeReservationEditModal').val(ArrivalTimeReservationEditModal);
        $('#idDepartureDateReservationEditModal').val(DprtDateReservationEditModal);
        $('#idDepartureTimeReservationEditModal').val(DprtTimeReservationEditModal);
        // $('#idArrivalDateReservationEditModal').val(newArrival);
        // $('#idDepartDateReservationEditModal').val(newDepart);
        $('#idTotalPaxReservationEditModal').val(TotalPaxReservationEditModal);
        $('#selectBuildingReservation').val(BuildingReservationEditModal);
        $('#selectFloorReservation').val(FloorReservationEditModal);
        $('#selectRoomTypeReservationEditModal').val(RoomTypeReservatonEditModal);
        $('#idNoRoomReservationEditModal').val(NoRoomReservationEditModal);
        $('#idRoomRateReservationEditModal').val(RoomRateReservationEditModal);
        $('#idSpesialRequestReservationEditModal').val(SpesialRequestReservationEditModal);
        $('#idBillingInstructionReservationEditModal').val(BillingInstructionReservationEditModal);
        $('#idDepositByReservationEditModal').val(DepositByReservationEditModal);
        $('#idTypeCardReservationEditModal').val(TypeCardReservationEditModal);
        $('#idCardNoReservationEditModal').val(CardNoReservationEditModal);
        $('#idExpDateReservationEditModal').val(ExpDateReservationEditModal);
        $('#idNoteReservationEditModal').val(NoteReservationEditModal);
        $('#idStatusReservationEditModal').val(StatusReservationEditModal);
        $('#idGuestTypeReservationEditModal').val(GuestTypeReservationEditModal);
        $('#idDetailGuestTypeReservationEditModal').val(DetailGuestTypeReservationEditModal);
        $('#idRemarksReservationEditModal').val(RemarksReservationEditModal);
        $('#idtittleCPReservationEditModal').val(TittleCPReservationEditModal);
        $('#idFirstNameCPReservationEditModal').val(FirstNameCPReservationEditModal);
        $('#idSurnameCPReservationEditModal').val(SurnameCPReservationEditModal);
        // $('#idMiddleNameCPReservationEditModal').val(MiddleNameCPReservationEditModal);
        // $('#idLastNameCPReservationEditModal').val(LastnameCPReservationEditModal);
        $('#idPhoneNumberCPReservationEditModal').val(PhoneNumberCPReservationEditModal);
        $('#idEmailCPReservationEditModal').val(EmailCPReservationEditModal);
        $('#idDateTimeCPReservationEditModal').val(newDateTimeCP);
        $('#idReservByReservationEditModal').val(ReservByReservationEditModal);















        // $('#segment_edit').val(sgmnttn);
        // $('#selectGuestType_modal').val(guest_type_edit);
        // $('#selectDetailGuestType_modal').val(detail_guest_type_edit);
        // $('#tittle_modal').val(tittle);
        // $('#first_name_modal').val(frst);
        // $('#middle_name_modal').val(mddl_modal);
        // $('#last_name_modal').val(lst);
        // $('#selectCountryRegist').val(regist_country);
        // $('#selectProvinceRegist').val(regist_province);
        // $('#selectCityRegist').val(regist_city);
        // $('#zipInput').val(zip_code);
        // $('#status_edit').val(sts);
        // $('#arrival_modal').val(arr);
        // $('#departure_modal').val(dept);
        // $('#room_type_modal').val(roomtype);
        // $('#no_room_modal').val(noroom);
        // $('#room_rate_modal').val(roomrate);
        // $('#total_modal').val(tot);
        // $('#email_modal').val(email);
        // $('#phone_number_modal').val(phn);
        // $('#identity_type_modal').val(idt);
        // $('#identity_number_modal').val(idn);
        // $('#pay_method').val(pay_method);
        // $('#stat_payment').val(stat_payment);
        // $('#PriceRoom').val(tot_bill);
        // $('#address_modal').val(add);
        // $('#remarks_modal').val(rem);
        $('#modalReservation').modal('show');
      }
    });
  }

  function viewReservation(id_reservation){
    //alert(dsc_tipe);
           


    $.ajax({
      url: '<?php echo base_url('home/viewReservation'); ?>',
      dateFormat: 'dd-mm-yy',
      data: {id:id_reservation},
      dataType: 'json',
      type: 'post',
      success:function(data){


        // console.log("HASIL VIEW RESERV: "+JSON.stringify(data));
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var sgmntation            = data['viewDetailReservation'][0]['segmentation'];
        var guest_type            = data['viewDetailReservation'][0]['id_guest_type'];
        var detail                = data['viewDetailReservation'][0]['detail_guest_type'];
        var tittle                = data['viewDetailReservation'][0]['tittle'];
        var frst                  = data['viewDetailReservation'][0]['first_name'];
        var surnameView           = data['viewDetailReservation'][0]['surname'];
        // var middl                 = data['viewDetailReservation'][0]['middle_name'];
        // var lst                   = data['viewDetailReservation'][0]['last_name'];
        var bldng                 = data['viewDetailReservation'][0]['building'];
        var floor                 = data['viewDetailReservation'][0]['floor'];
        var spesreq               = data['viewDetailReservation'][0]['spesial_request'];
        var billins               = data['viewDetailReservation'][0]['billing_instruction'];
        // var idf                   = data['viewDetailReservation'][0]['identity_foto'];
        var idt                   = data['viewDetailReservation'][0]['id_identity_tipe'];
        var idn                   = data['viewDetailReservation'][0]['identity_number'];
        var gender                = data['viewDetailReservation'][0]['gender'];
        var covr                  = data['viewDetailReservation'][0]['regist_country'];
        var cpvr                  = data['viewDetailReservation'][0]['regist_province'];
        var ccivr                 = data['viewDetailReservation'][0]['regist_city'];
        var zCode                 = data['viewDetailReservation'][0]['zip_code'];
        var addrs                 = data['viewDetailReservation'][0]['address'];
        var arrdateView           = data['viewDetailReservation'][0]['arr_date'];
        var arrtimeView           = data['viewDetailReservation'][0]['arr_time'];
        var dprtdateView          = data['viewDetailReservation'][0]['dprt_date'];
        var dprttimeView          = data['viewDetailReservation'][0]['dprt_time'];

        // var a = new Date(arr);
        // var aDay = a.getDate();
        // aDay = aDay > 9 ? aDay : '0'+aDay;
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newArrivalDateViewReservation = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW ARRIVAL: "+newArrivalDateViewReservation);

        // var dept                  = data['viewDetailReservation'][0]['depart_date'];
        // var a = new Date(dept);
        // var aDay = a.getDate();
        // aDay = aDay > 9 ? aDay : '0'+aDay;
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newDeptDateViewReservation = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW DEPT: "+newDeptDateViewReservation);

        var roomtype              = data['viewDetailReservation'][0]['room_type'];
        var typeCard              = data['viewDetailReservation'][0]['type_card'];
        var cardNo                = data['viewDetailReservation'][0]['card_no'];

        var expDate               = data['viewDetailReservation'][0]['expired_date'];
        // var a = new Date(expDate);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth();
        // aMonth = aMonth > 9 ? aMonth+1 : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newExpDateViewReservation = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW Exp Date: "+newExpDateViewReservation);


        var noroom                = data['viewDetailReservation'][0]['no_of_room'];
        var roomrate              = data['viewDetailReservation'][0]['room_rate'];
        var tot                   = data['viewDetailReservation'][0]['total_pax'];
        var email                 = data['viewDetailReservation'][0]['email'];
        var phn                   = data['viewDetailReservation'][0]['phone_number'];
        var add                   = data['viewDetailReservation'][0]['address'];
        var status                = data['viewDetailReservation'][0]['id_status'];
        var rem                   = data['viewDetailReservation'][0]['remarks'];
        var pay_method            = data['viewDetailReservation'][0]['pay_method'];
        var stat_payment          = data['viewDetailReservation'][0]['stat_payment'];
        var noteViewReservation   = data['viewDetailReservation'][0]['note'];
        var TittleCPViewReserv    = data['viewDetailReservation'][0]['tittleCP'];
        var FirstNameCPViewReserv = data['viewDetailReservation'][0]['first_nameCP'];
        var SurnameCPViewReserv   = data['viewDetailReservation'][0]['surnameCP'];
        // var MiddleNameCPViewReserv = data['viewDetailReservation'][0]['middle_nameCP'];
        // var LastNameCPViewReserv  = data['viewDetailReservation'][0]['last_nameCP'];
        var PhoneCPViewReserv     = data['viewDetailReservation'][0]['phoneCP'];
        var EmailCPViewReserv     = data['viewDetailReservation'][0]['emailCP'];

        var DateTimeCPViewReserv  = data['viewDetailReservation'][0]['datetimeCP'];
        var a = new Date(DateTimeCPViewReserv);
        var aDay = a.getDate();
        var aMonth = a.getMonth();
        aMonth = aMonth > 9 ? aMonth+1 : '0'+aMonth;
        var aYear = a.getFullYear();
        var aHours = a.getHours();
        var aMinutes = a.getMinutes();
        aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        var aSeconds = a.getSeconds();
        aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        var newDateTimeViewReservation = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        console.log("NEW Exp Date: "+newDateTimeViewReservation);
        
        var ReservHandledViewReservation = data['viewDetailReservation'][0]['reservation_handle_by'];


        // console.log("STATUS PAYMENT :"+stat_payment);
        var tot_bills              = data['viewDetailReservation'][0]['tot_tagihan'];
        // console.log("TOTAL BILL : "+tot_bill);
        

       //  var baseUrlPhoto = "<?php echo base_url();?>assets/reservation_foto/"+idf;

       //  var drEvent = $('.dropifyView').dropify();
       // drEvent = drEvent.data('dropify');
       // drEvent.resetPreview();
       // drEvent.clearElement();
       // drEvent.settings['defaultFile']=baseUrlPhoto;
       // drEvent.destroy();
       // drEvent.init();

        // $('.dropifyView').dropify({
        //   defaultFile:baseUrlPhoto, 
        // });
        if (gender == 'Male') {
                  $('#modalViewReservation #genderLReservation').prop('checked', true);
                } else {
                  $('#modalViewReservation #genderPReservation').prop('checked', true);
                }


        $('#idReservation2').val(id_reservation);
        $('#segment').val(sgmntation);
        $('#selectGuestType').val(guest_type);
        $('#selectDetailGuestType').val(detail);
        $('#tittle_modal2').val(tittle);
        $('#first_name_modal2').val(frst);
        $('#surname_modal2').val(surnameView);
        // $('#middle_name_modal2').val(middl);
        // $('#last_name_modal2').val(lst);
        $('#building_modal2').val(bldng);
        $('#floor_modal2').val(floor);
        $('#spesial_request_modal2').val(spesreq);
        $('#billing_instruction_modal2').val(billins);
        $('#identity_type_modal2').val(idt);
        $('#identity_number_modal2').val(idn);
        $('#selectCountryRegistViewReserv').val(covr);
        $('#selectProvinceRegistViewReserv').val(cpvr);
        $('#selectCityRegistViewReserv').val(ccivr);
        $('#zipInputView').val(zCode);
        $('#address_view').val(addrs);
        $('#selectStatus').val(status);
        $('#arrivalDate_modal2').val(arrdateView);
        $('#arrivalTime_modal2').val(arrtimeView);
        $('#departDate_modal2').val(dprtdateView);
        $('#departTime_modal2').val(dprttimeView);
        // $('#arrival_modal2').val(newArrivalDateViewReservation);
        // $('#departure_modal2').val(newDeptDateViewReservation);
        $('#exp_date_modal2').val(expDate);
        $('#room_type_modal2').val(roomtype);
        $('#idTypeCardReservationEditModal2').val(typeCard);
        $('#idCardNoReservationEditModal2').val(cardNo);
        $('#note_modal2').val(noteViewReservation);
        $('#no_room_modal2').val(noroom);
        $('#room_rate_modal2').val(roomrate);
        $('#total_modal2').val(tot);
        $('#email_modal2').val(email);
        $('#phone_number_modal2').val(phn);
        $('#tittle_cp_modal2').val(TittleCPViewReserv);
        $('#first_name_cp_modal2').val(FirstNameCPViewReserv);
        $('#surname_cp_modal2').val(SurnameCPViewReserv);
        // $('#middle_name_cp_modal2').val(MiddleNameCPViewReserv);
        // $('#last_name_cp_modal2').val(LastNameCPViewReserv);
        $('#phone_number_cp_modal2').val(PhoneCPViewReserv);
        $('#email_cp_modal2').val(EmailCPViewReserv);
        $('#datetime_cp_modal2').val(newDateTimeViewReservation);
        $('#reserv_handled_modal2').val(ReservHandledViewReservation);




        $('#address_modal2').val(add);
        $('#remarks_modal2').val(rem);
        $('#selectPay_Method').val(pay_method);
        $('#stat_payment_modal').val(stat_payment);
        $('#PriceRoomView').val(tot_bills);
        $('#modalViewReservation').modal('show');

       //  $('#modalViewReservation').on('hidden.bs.modal',function(){
       //     var drEvent = $('.dropifyView').dropify();
       // drEvent = drEvent.data('dropify');
       // drEvent.resetPreview();
       // drEvent.clearElement();
       //  })
      }
    });
  } 


  // function viewReservationConfirm(id_reservation){
  //   //alert(dsc_tipe);
           


  //   $.ajax({
  //     url: '<?php echo base_url('home/viewReservation'); ?>',
  //     dateFormat: 'dd-mm-yy',
  //     data: {id:id_reservation},
  //     dataType: 'json',
  //     type: 'post',
  //     success:function(data){


  //       // console.log("HASIL VIEW RESERV: "+JSON.stringify(data));
  //       //alert(data['hrView'][0]['hr_company_name']);
  //        //location.href = '<?php //echo base_url('home/participant'); ?>';
        
  //       //console.log(data);
  //       var sgmntation            = data['viewDetailReservation'][0]['segmentation'];
  //       var guest_type            = data['viewDetailReservation'][0]['id_guest_type'];
  //       var detail                = data['viewDetailReservation'][0]['detail_guest_type'];
  //       var frst                  = data['viewDetailReservation'][0]['first_name'];
  //       var middl                 = data['viewDetailReservation'][0]['middle_name'];
  //       var lst                   = data['viewDetailReservation'][0]['last_name'];
  //       var idf                   = data['viewDetailReservation'][0]['identity_foto'];
  //       var idt                   = data['viewDetailReservation'][0]['id_identity_tipe'];
  //       var idn                   = data['viewDetailReservation'][0]['identity_number'];
  //       var gender                = data['viewDetailReservation'][0]['gender'];
  //       var covr                  = data['viewDetailReservation'][0]['regist_country'];
  //       var cpvr                  = data['viewDetailReservation'][0]['regist_province'];
  //       var ccivr                 = data['viewDetailReservation'][0]['regist_city'];
  //       var zCode                 = data['viewDetailReservation'][0]['zip_code'];
  //       var addrs                 = data['viewDetailReservation'][0]['address'];
  //       var arr                   = data['viewDetailReservation'][0]['arrival_date'];
  //       var dept                  = data['viewDetailReservation'][0]['depart_date'];
  //       var roomtype              = data['viewDetailReservation'][0]['room_type'];
  //       var noroom                = data['viewDetailReservation'][0]['no_of_room'];
  //       var roomrate              = data['viewDetailReservation'][0]['room_rate'];
  //       var tot                   = data['viewDetailReservation'][0]['total_pax'];
  //       var email                 = data['viewDetailReservation'][0]['email'];
  //       var phn                   = data['viewDetailReservation'][0]['phone_number'];
  //       var add                   = data['viewDetailReservation'][0]['address'];
  //       var status                = data['viewDetailReservation'][0]['id_status'];
  //       var rem                   = data['viewDetailReservation'][0]['remarks'];
  //       var pay_method            = data['viewDetailReservation'][0]['pay_method'];
  //       var stat_payment          = data['viewDetailReservation'][0]['stat_payment'];
  //       var tot_bill              = data['viewDetailReservation'][0]['tot_tagihan'];
  //       // console.log("TOTAL BILL : "+tot_bill);


  //       var baseUrlPhoto = "<?php echo base_url();?>assets/reservation_foto/"+idf;

  //       var drEvent = $('.dropifyView').dropify();
  //      drEvent = drEvent.data('dropify');
  //      drEvent.resetPreview();
  //      drEvent.clearElement();
  //      drEvent.settings['defaultFile']=baseUrlPhoto;
  //      drEvent.destroy();
  //      drEvent.init();

  //       // $('.dropifyView').dropify({
  //       //   defaultFile:baseUrlPhoto,
  //       // });
  //       if (gender == 'Male') {
  //                 $('#modalViewReservation #genderLReservation').prop('checked', true);
  //               } else {
  //                 $('#modalViewReservation #genderPReservation').prop('checked', true);
  //               }


  //       $('#idReservation2').val(id_reservation);
  //       $('#segment').val(sgmntation);
  //       $('#selectGuestType').val(guest_type);
  //       $('#selectDetailGuestType').val(detail);
  //       $('#first_name_modal2').val(frst);
  //       $('#middle_name_modal2').val(middl);
  //       $('#last_name_modal2').val(lst);
  //       $('#identity_type_modal2').val(idt);
  //       $('#identity_number_modal2').val(idn);
  //       $('#selectCountryRegist').val(covr);
  //       $('#selectProvinceRegist').val(cpvr);
  //       $('#selectCityRegist').val(ccivr);
  //       $('#zipInput').val(zCode);
  //       $('#address_view').val(addrs);
  //       $('#selectStatus').val(status);
  //       $('#arrival_modal2').val(arr);
  //       $('#departure_modal2').val(dept);
  //       $('#room_type_modal2').val(roomtype);
  //       $('#no_room_modal2').val(noroom);
  //       $('#room_rate_modal2').val(roomrate);
  //       $('#total_modal2').val(tot);
  //       $('#email_modal2').val(email);
  //       $('#phone_number_modal2').val(phn);
  //       $('#address_modal2').val(add);
  //       $('#remarks_modal2').val(rem);
  //       $('#selectPay_Method').val(pay_method);
  //       $('#stat_payment_modal2').val(stat_payment);
  //       $('#PriceRoom').val(tot_bill);
  //       $('#modalViewReservation').modal('show');

  //      //  $('#modalViewReservation').on('hidden.bs.modal',function(){
  //      //     var drEvent = $('.dropifyView').dropify();
  //      // drEvent = drEvent.data('dropify');
  //      // drEvent.resetPreview();
  //      // drEvent.clearElement();
  //      //  })
  //     }
  //   });
  // }


  function removeReservation(id_reservation){
    //alert(id_tipe);

    $.ajax({
      url: '<?php echo base_url('home/hapusReservation'); ?>',
      data: {id:id_reservation},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //alert(data['hrView'][0]['hr_company_name']);
         location.href = '<?php echo base_url('home/reservation'); ?>';
        //alert(data);
      }
    });
  }

  function changePaymentType(payment_type){
      $('#payment_type').val(payment_type);
  }
  function setToday(elem){
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var t = today.getTimezoneOffset()/60;
      if(t<0) t = t * -1;
      var h = today.getHours();
      var m = today.getMinutes();

      var yyyy = today.getFullYear();
      if(dd<10){
          dd='0'+dd;
      }
      if(mm<10){
          mm='0'+mm;
      }
      if(h<10){
          h='0'+h;
      }
      if(m<10){
          m='0'+m;
      }
      var today = yyyy+'-'+mm+'-'+dd+'T'+h+':'+m;
      $('#' + elem).val(today);
  }

  function editGuestTentativeModal(id_regist){
    //alert(dsc_tipe);

    $.ajax({
      url: '<?php echo base_url('home/getGuestTentativeModal'); ?>',
      data: {id:id_regist},
      dataType: 'json',
      type: 'post',
      success:function(data){
        //console.log(data);
        //alert(data['hrView'][0]['hr_company_name']);
         //location.href = '<?php //echo base_url('home/participant'); ?>';
        
        //console.log(data);
        var id_regist                     = data['editGuestTentative'][0]['id_regist'];
        var segmentation_var              = data['editGuestTentative'][0]['segmentation'];
        var guest_type_var                = data['editGuestTentative'][0]['id_guest_type'];
        var detail_guest_type_var         = data['editGuestTentative'][0]['detail_guest_type'];
        var tittle_var                    = data['editGuestTentative'][0]['tittle'];
        var first_name_var                = data['editGuestTentative'][0]['first_name'];
        var surname_var                   = data['editGuestTentative'][0]['surname'];
        // var middle_name_var               = data['editGuestTentative'][0]['middle_name'];
        // var last_name_var                 = data['editGuestTentative'][0]['last_name'];
        var identity_foto_var             = data['editGuestTentative'][0]['identity_foto'];
        var identity_tipe_var             = data['editGuestTentative'][0]['identity_tipe'];
        var identity_number_var           = data['editGuestTentative'][0]['identity_number']; 
        var gender                        = data['editGuestTentative'][0]['gender'];
        var email_var                     = data['editGuestTentative'][0]['email'];
        var phone_var                     = data['editGuestTentative'][0]['phone'];
        var regist_country_var            = data['editGuestTentative'][0]['regist_country'];
        var regist_nationality_var        = data['editGuestTentative'][0]['regist_nationality'];
        var regist_province_var           = data['editGuestTentative'][0]['regist_province'];
        var regist_city_var               = data['editGuestTentative'][0]['city_text'];
        var zip_code_var                  = data['editGuestTentative'][0]['zip_code'];
        var address_var                   = data['editGuestTentative'][0]['address'];
        var jabatan_var                   = data['editGuestTentative'][0]['jabatan'];
        var type_card_var                 = data['editGuestTentative'][0]['type_card'];
        var card_no_var                   = data['editGuestTentative'][0]['card_no'];

        var dob_var                       = data['editGuestTentative'][0]['date_of_birth'];
        // var a = new Date(dob_var);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newDateOfBirth_Var = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW CHKI: "+newDateOfBirth_Var);

        var regis_handled_var             = data['editGuestTentative'][0]['registration_handled'];
        var checked_by_var                = data['editGuestTentative'][0]['checked_by'];
        var purpose_of_var                = data['editGuestTentative'][0]['purpose_of_visit'];
        var spesial_req_var               = data['editGuestTentative'][0]['spesial_request'];
        var arrDateRegist_var             = data['editGuestTentative'][0]['arr_date'];
        var arrTimeRegist_var             = data['editGuestTentative'][0]['arr_time'];
        // var a = new Date(chki_var);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newCHKI_Var = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW CHKI: "+newCHKI_Var);

        var dprtDateRegist_var             = data['editGuestTentative'][0]['dprt_date'];
        var dprtTimeRegist_var             = data['editGuestTentative'][0]['dprt_time'];
        // var a = new Date(chko_var);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newCHKO_Var = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW CHKI: "+newCHKO_Var);

        var expdateregist_var                      = data['editGuestTentative'][0]['expired_date'];
        // var a = new Date(expdateregist_var);
        // var aDay = a.getDate();
        // var aMonth = a.getMonth()+1;
        // aMonth = aMonth > 9 ? aMonth : '0'+aMonth;
        // var aYear = a.getFullYear();
        // var aHours = a.getHours();
        // var aMinutes = a.getMinutes();
        // aMinutes = aMinutes > 9 ? aMinutes : '0'+aMinutes;
        // var aSeconds = a.getSeconds();
        // aSeconds = aSeconds > 9 ? aSeconds : '0'+aSeconds;

        // var newExpDate_Var = aYear+"-"+aMonth+"-"+aDay+"T"+aHours+":"+aMinutes+":"+aSeconds;
        // console.log("NEW EXP DATE: "+newExpDate_Var);



        var total_pax_var                 = data['editGuestTentative'][0]['total_pax'];
        var guest_room_type_var           = data['editGuestTentative'][0]['guest_room_type'];
        var building_var                  = data['editGuestTentative'][0]['building'];
        var floor_var                     = data['editGuestTentative'][0]['floor'];
        var room_rate_var                 = data['editGuestTentative'][0]['room_rate'];
        var no_room_var                   = data['editGuestTentative'][0]['no_of_room'];
        var status_var                    = data['editGuestTentative'][0]['status'];
        var remarks_var                   = data['editGuestTentative'][0]['remarks'];
        var deposit_var                       = data['editGuestTentative'][0]['pay_method'];
        // var pay_method_var                = data['editGuestTentative'][0]['pay_method'];
        var payment_amount                 = data['editGuestTentative'][0]['pay_method'];
        var date_payment = data['editGuestTentative'][0]['date_payment'];
          var bank_code = data['editGuestTentative'][0]['bank_code'];
          var card_owner_name = data['editGuestTentative'][0]['card_owner_name'];
          var card_number = data['editGuestTentative'][0]['card_number'];
          var bank_issuer = data['editGuestTentative'][0]['bank_issuer'];
          var remark_payment = data['editGuestTentative'][0]['remark_payment'];
          var bank_issuer = data['editGuestTentative'][0]['pay_method'];
          var bank_code = data['editGuestTentative'][0]['pay_method'];
          var bank_code = data['editGuestTentative'][0]['pay_method'];
          var bank_code = data['editGuestTentative'][0]['pay_method'];
        var stat_payment_var              = data['editGuestTentative'][0]['stat_payment'];
        var tot_bill_var                  = data['editGuestTentative'][0]['tot_bill'];

        var baseUrlPhoto = "<?php echo base_url();?>assets/guest_foto/"+identity_foto_var;
        console.log("FOTO: "+baseUrlPhoto);

        var drEvent = $('.dropifyEditGuestTentative').dropify();
       drEvent = drEvent.data('dropify');
       drEvent.resetPreview();
       drEvent.clearElement();
       drEvent.settings['defaultFile']=baseUrlPhoto;
       drEvent.destroy();
       drEvent.init();

        if (gender == 'Male') {
                  $('#modalGuestTentative #genderLGuest').prop('checked', true);
                } else {
                  $('#modalGuestTentative #genderPGuest').prop('checked', true);
                }
       

        $('#segment_modal').val(segmentation_var);
        $('#selectGuestType_modal').val(guest_type_var);
        $('#selectDetailGuestType_modal').val(detail_guest_type_var);
        $('#tittle_modal').val(tittle_var);
        $('#first_name_modal').val(first_name_var);
        $('#surname_modal').val(surname_var);
        // $('#middle_name_modal').val(middle_name_var);
        // $('#last_name_modal').val(last_name_var);
        // $('#input-file-now-modal').val(identity_foto_var);
        $('#selectIdentityType_modal').val(identity_tipe_var);
        $('#identity_number_modal').val(identity_number_var);
        $('#email_modal').val(email_var);
        $('#phone_modal').val(phone_var);
        $('#jabatan_guest_modal').val(jabatan_var);
        // $('input:radio[name=gender_edit]').val(gender_var);
        $('#selectCountryRegist').val(regist_country_var);
        $('#nationality_modal').val(regist_nationality_var);
        $('#idDepositRegistrationEditModal').val(deposit_var);
        $('#idTypeCardRegistrationEditModal').val(type_card_var);
        $('#idCardNoRegistrationEditModal').val(card_no_var);  
        $('#date_birth_modal').val(dob_var);
        $('#idSpesialRequestRegistrationEditModal').val(spesial_req_var);  
        $('#idReservByRegistrationEditModal').val(regis_handled_var);
        $('#idCheckedByRegistrationEditModal').val(checked_by_var);
        $('#idPurposeofVisitRegistrationEditModal').val(purpose_of_var);        
        $('#selectProvinceRegist').val(regist_province_var);
        $('#idCityRegist').val(regist_city_var);
        $('#zipInput').val(zip_code_var);
        $('#address_modal').val(address_var);
        $('#checkInDateModal').val(arrDateRegist_var);
        $('#checkInTimeModal').val(arrTimeRegist_var);
        $('#checkOutDateModal').val(dprtDateRegist_var);
        $('#checkOutTimeModal').val(dprtTimeRegist_var);

        // $('#check_in_modal').val(newCHKI_Var);
        // $('#check_out_modal').val(newCHKO_Var);
        $('#idExpDateRegistrationEditModal').val(expdateregist_var);
        $('#total_pax_modal').val(total_pax_var);
        $('#selectBuildingReservation').val(building_var);
        $('#selectFloorReservation').val(floor_var);
        $('#room_type_modal').val(guest_room_type_var);
        $('#room_rate_modal').val(room_rate_var);
        $('#no_room_modal').val(no_room_var);
        $('#status_modal').val(status_var);
        $('#remarks_modal').val(remarks_var);
        // $('#pay_method_modal').val(pay_method_var);
        $('#stat_payment_modal').val(stat_payment_var);
        $('#PriceRoom').val(tot_bill_var);

          // var dpp = parseInt(tot_bill_var);
          // var tax_amount = dpp * 10 /100;
          // var tax_service_amount = dpp * 11 /100;
          // var grand_total = Math.round(dpp + tax_amount + tax_service_amount);
          // $('#tax').val(tax_amount);
          // $('#service').val(tax_service_amount);
          // $('#PriceRoomPayment').val(grand_total);
          
          $('#PriceRoomPayment').val(room_rate_var);
          $('#cash_payment_amount').val(room_rate_var);
          $('#transfer_payment_amount').val(room_rate_var);
          $('#debit_payment_amount').val(room_rate_var);
          $('#kredit_payment_amount').val(room_rate_var);
        $('#idRegistTentative').val(id_regist);
        $('#modalGuestTentative').modal('show');


      }
    });
  }


  $('#submitUser').submit(function(e){
            e.preventDefault();
                 $.ajax({
                     url:'<?php echo base_url('home/uploadFoto');?>', //URL submit
                     type:"post", //method Submit
                     data:new FormData(this), //penggunaan FormData
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false
                   //    success: function(data){
                   //        alert("Upload Image Berhasil."); //alert jika upload berhasil
                   // }
                 });
});

 // $('#calendar').fullCalendar({
 //     eventSources: [
 //         {
 //             events: function(start, end, timezone, callback) {
 //                 $.ajax({
 //                 url: '<?php echo base_url() ?>home/get_events',
 //                 type: 'POST',
 //                 dataType: 'json',
 //                 data: {
 //                 // our hypothetical feed requires UNIX timestamps
 //                 start: start.unix(),
 //                 end: end.unix()
 //                 },
 //                 success: function(msg) {
 //                     var events = msg.events;
 //                     callback(events);
 //                 }
 //                 });
 //             }
 //         },
 //     ]
 // });

/*-------------------------------------------------------------------------------------------------------------------------------*/
//inputan human resources

  $('select[name="Iprovince"]').on('change', function() {
      var provinceId = $(this).val();

      if (provinceId == null || provinceId == '') {
        $('select[name="Icity"]').prop("disabled", true);
        $('#selectCity').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getCityNew') ?>",
          data: {id : provinceId },
          dataType: 'json',
          success: function (data) {

            $('select[name="Icity"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectCity = document.getElementById('selectCity');

            $('#selectCity').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_city'];
              opt.text = data[i]['name_city'];
              selectCity.add(opt);
            }
          }
        });
      }
  });

  // Guest Type
  $('select[name="guest_type"]').on('change', function() {
      var guestTypeID = $(this).val();

      if (guestTypeID == null || guestTypeID == '' || guestTypeID == 'guest_type') {
        $('select[name="detail_guest_type"]').prop("disabled", true);
        $('#selectDetailGuestType').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getDetailNew') ?>",
          data: {id : guestTypeID },
          dataType: 'json',
          success: function (data) {

            $('select[name="detail_guest_type"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var idDetailGuestTypeReservation = document.getElementById('selectDetailGuestType');

            $('#selectDetailGuestType').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_detail_guest_type'];
              opt.text = data[i]['detail'];
              idDetailGuestTypeReservation.add(opt);
            }
          }
        });
      }
  });

  $('select[name="GuestTypeReservation"]').on('change', function() {
      var guestTypeID = $(this).val();

      if (guestTypeID == null || guestTypeID == '' || guestTypeID == 'GuestTypeReservation') {
        $('select[name="DetailGuestTypeReservation"]').prop("disabled", true);
        $('#idDetailGuestTypeReservation').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getDetailNew') ?>",
          data: {id : guestTypeID },
          dataType: 'json',
          success: function (data) {

            $('select[name="DetailGuestTypeReservation"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var idDetailGuestTypeReservation = document.getElementById('idDetailGuestTypeReservation');

            $('#idDetailGuestTypeReservation').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_detail_guest_type'];
              opt.text = data[i]['detail'];
              idDetailGuestTypeReservation.add(opt);
            }
          }
        });
      }
  });

  $('select[name="GuestTypeReservationEditModal"]').on('change', function() {
      var guestTypeID = $(this).val();

      if (guestTypeID == null || guestTypeID == '' || guestTypeID == 'GuestTypeReservationEditModal') {
        $('select[name="DetailGuestTypeReservationEditModal"]').prop("disabled", true);
        $('#idDetailGuestTypeReservationEditModal').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getDetailNew') ?>",
          data: {id : guestTypeID },
          dataType: 'json',
          success: function (data) {

            $('select[name="DetailGuestTypeReservationEditModal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var idDetailGuestTypeReservationEditModal = document.getElementById('idDetailGuestTypeReservationEditModal');

            $('#idDetailGuestTypeReservationEditModal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_detail_guest_type'];
              opt.text = data[i]['detail'];
              idDetailGuestTypeReservationEditModal.add(opt);
            }
          }
        });
      }
  });


  $('select[name="guest_type_edit"]').on('change', function() {
      var guestTypeID = $(this).val();

      if (guestTypeID == null || guestTypeID == '' || guestTypeID == 'guest_type_edit') {
        $('select[name="detail_guest_type_edit"]').prop("disabled", true);
        $('#selectDetailGuestType_modal').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getDetailNew') ?>",
          data: {id : guestTypeID },
          dataType: 'json',  
          success: function (data) {

            $('select[name="detail_guest_type_edit"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectDetailGuestType_modal = document.getElementById('selectDetailGuestType_modal');

            $('#selectDetailGuestType_modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_detail_guest_type_modal'];
              opt.text = data[i]['detail'];
              selectDetailGuestType_modal.add(opt);
            }
          }
        });
      }
  });

  $('select[name="GuestTypeRegistrationGuest"]').on('change', function() {
      var guestTypeID = $(this).val();

      if (guestTypeID == null || guestTypeID == '' || guestTypeID == 'GuestTypeRegistrationGuest') {
        $('select[name="DetailGuestTypeRegistrationGuest"]').prop("disabled", true);
        $('#idDetailGuestTypeRegistrationGuest').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getDetailNew') ?>",
          data: {id : guestTypeID },
          dataType: 'json',
          success: function (data) {

            $('select[name="DetailGuestTypeRegistrationGuest"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var idDetailGuestTypeRegistrationGuest = document.getElementById('idDetailGuestTypeRegistrationGuest');

            $('#idDetailGuestTypeRegistrationGuest').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_detail_guest_type'];
              opt.text = data[i]['detail'];
              idDetailGuestTypeRegistrationGuest.add(opt);
            }
          }
        });
      }
  });

  // End Guest Type



  $('select[name="Icountry"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="Icity"]').prop("disabled", true);
        $('select[name="Iprovince"]').prop("disabled", true);

        $('#selectProvince').find('option').remove().end();
        $('#selectCity').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceNew') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="Iprovince"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvince = document.getElementById('selectProvince');
            // console.log("rofid: "+count);


            $('#selectProvince').find('option').remove().end();



            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvince.appendChild(opt);
            }
          }
        });
      }
  });


/*-------------------------------------------------------------------------------------------------------------------------------*/


//Modal Human Resources

$('select[name="provincehi_modal"]').on('change', function() {
      var provinceId = $(this).val();

      if (provinceId == null || provinceId == '') {
        $('select[name="cityhi_modal"]').prop("disabled", true);
        $('#selectCityHI_Modal').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getCityHIModal') ?>",
          data: {id : provinceId },
          dataType: 'json',
          success: function (data) {

            $('select[name="cityhi_modal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectCityHI_Modal = document.getElementById('selectCityHI_Modal');

            $('#selectCityHI_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_city'];
              opt.text = data[i]['name_city'];
              selectCityHI_Modal.add(opt);
            }
          }
        });
      }
  });



  $('select[name="countryhi_modal"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="cityhi_modal"]').prop("disabled", true);
        $('select[name="provincehi_modal"]').prop("disabled", true);

        $('#selectProvinceHI_Modal').find('option').remove().end();
        $('#selectCityHI_Modal').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceHIModal') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="provincehi_modal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvinceHI_Modal = document.getElementById('selectProvinceHI_Modal');
            // console.log("rofid: "+count);


            $('#selectProvinceHI_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceHI_Modal.appendChild(opt);
            }
          }
        });
      }
  });

/*-------------------------------------------------------------------------------------------------------------------------------*/


// Start Registration Guest Tab Pane 2

$('select[name="regist_province_2"]').on('change', function() {
      var provinceId = $(this).val();

      if (provinceId == null || provinceId == '') {
        $('select[name="regist_city_2"]').prop("disabled", true);
        $('#selectCityRegist2').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getCityRegistration') ?>",
          data: {id : provinceId },
          dataType: 'json',
          success: function (data) {

            $('select[name="regist_city_2"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectCityRegist = document.getElementById('selectCityRegist2');

            $('#selectCityRegist2').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_city'];
              opt.text = data[i]['name_city'];
              selectCityRegist.add(opt);
            }
          }
        });
      }
  });



  $('select[name="regist_country_2"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="regist_city_2"]').prop("disabled", true);
        $('select[name="regist_province_2"]').prop("disabled", true);

        $('#selectProvinceRegist2').find('option').remove().end();
        $('#selectCityRegist2').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceRegistration') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="regist_province_2"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvinceRegist = document.getElementById('selectProvinceRegist2');
            // console.log("rofid: "+count);


            $('#selectProvinceRegist2').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceRegist.appendChild(opt);
            }
          }
        });
      }
  });




//End Registration Guest Tab Pane 2



// Registration Guest

$('select[name="regist_province"]').on('change', function() {
      var provinceId = $(this).val();

      if (provinceId == null || provinceId == '') {
        $('select[name="regist_city"]').prop("disabled", true);
        $('#selectCityRegist').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getCityRegistration') ?>",
          data: {id : provinceId },
          dataType: 'json',
          success: function (data) {

            $('select[name="regist_city"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectCityRegist = document.getElementById('selectCityRegist');

            $('#selectCityRegist').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_city'];
              opt.text = data[i]['name_city'];
              selectCityRegist.add(opt);
            }
          }
        });
      }
  });



  $('select[name="regist_country"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="regist_city"]').prop("disabled", true);
        $('select[name="regist_province"]').prop("disabled", true);

        $('#selectProvinceRegist').find('option').remove().end();
        $('#selectCityRegist').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceRegistration') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="regist_province"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvinceRegist = document.getElementById('selectProvinceRegist');
            // console.log("rofid: "+count);


            $('#selectProvinceRegist').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceRegist.appendChild(opt);
            }
          }
        });
      }
  });


  // $('select[name="regist_country_viewReserv"]').on('change', function() {
  //     var countryId = $(this).val();
  //     console.log("test "+countryId);

  //     if (countryId == null || countryId == '' || countryId == 'country') {
  //       console.log("kosong");
  //       $('select[name="regist_city_viewReserv"]').prop("disabled", true);
  //       $('select[name="regist_province_viewReserv"]').prop("disabled", true);

  //       $('#selectProvinceRegistViewReserv').find('option').remove().end();
  //       $('#selectCityRegistViewReserv').find('option').remove().end();


  //     } else {
  //       $.ajax({
  //         type: "POST",
  //         url: "<?php echo base_url('home/getProvinceRegistration') ?>",
  //         data: {id : countryId },
  //         dataType: 'json',
  //         success: function (data) {
  //           console.log(data);
  //           $('select[name="regist_province_viewReserv"]').prop("disabled", false);
  //           var count = Object.keys(data).length;
  //           var selectProvinceRegistViewReserv = document.getElementById('selectProvinceRegistViewReserv');
  //           // console.log("rofid: "+count);


  //           $('#selectProvinceRegistViewReserv').find('option').remove().end();

  //           for (var i = 0; i < count; i++) {
  //             var opt = document.createElement('option');
  //             opt.value = data[i]['id_province'];
  //             opt.text = data[i]['name_province'];
  //             selectProvinceRegistViewReserv.appendChild(opt);
  //           }
  //         }
  //       });
  //     }
  // });


/*-------------------------------------------------------------------------------------------------------------------------------*/

// Guest Modal

$('select[name="provinceguest_modal"]').on('change', function() {
      var provinceId = $(this).val();

      if (provinceId == null || provinceId == '') {
        $('select[name="cityguest_modal"]').prop("disabled", true);
        $('#selectCityGuest_Modal').find('option').remove().end();

      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getCityGuest') ?>",
          data: {id : provinceId },
          dataType: 'json',
          success: function (data) {

            $('select[name="cityguest_modal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectCityGuest_Modal = document.getElementById('selectCityGuest_Modal');

            $('#selectCityGuest_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_city'];
              opt.text = data[i]['name_city'];
              selectCityGuest_Modal.add(opt);
            }
          }
        });
      }
  });



  $('select[name="countryguest_modal"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="cityguest_modal"]').prop("disabled", true);
        $('select[name="provinceguest_modal"]').prop("disabled", true);

        $('#selectProvinceGuest_Modal').find('option').remove().end();
        $('#selectCityGuest_Modal').find('option').remove().end();


      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('home/getProvinceGuest') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="provinceguest_modal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvinceGuest_Modal = document.getElementById('selectProvinceGuest_Modal');
            // console.log("rofid: "+count);


            $('#selectProvinceGuest_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceGuest_Modal.appendChild(opt);
            }
          }
        });
      }
  });


  // var price = document.getElementById('PriceRoom');
  //   PriceRoom.addEventListener('keyup', function(e)
  //   {
  //       price.value = formatRupiah(this.value);
  //   });

    var price = document.getElementById('cash_payment_amount');
    cash_payment_amount.addEventListener('keyup', function(e)
    {
        price.value = formatRupiah(this.value);
    });

  var priceReservation = document.getElementById('room_rate');
    room_rate.addEventListener('keyup', function(e)
    {
        priceReservation.value = formatRupiah(this.value);
    });

    var priceReservationModal = document.getElementById('room_rate_modal');
    room_rate_modal.addEventListener('keyup', function(e)
    {
        priceReservationModal.value = formatRupiah(this.value);
    });

    var priceGuestModal = document.getElementById('PriceRoom_modal');
    PriceRoom_modal.addEventListener('keyup', function(e)
    {
        priceGuestModal.value = formatRupiah(this.value);
    });

    var PriceManagement = document.getElementById('priceRoom');
    PriceManagement.addEventListener('keyup', function(e)
    {
        PriceManagement.value = formatRupiah(this.value);
    });

    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

  // $(document).ready(function(){
  //  var calendar = $('#calendar').fullCalendar({
  //     editable : true,
  //     header :{
  //       theme : true,
  //       left : 'prev,next today',
  //       center : 'title',
  //       right : 'month,agendaWeek,agendaDay'
  //     },
  //   });
  // });



        ////////////////////////////////////////////////////////////////////////////////////////////

        $('select[name="guest_room_type"]').on('change', function() {
      var countryId = $(this).val();
      console.log("test "+countryId);

      if (countryId == null || countryId == '' || countryId == 'country') {
        console.log("kosong");
        $('select[name="price_regist"]').prop("disabled", false);
        // $('select[name="provinceguest_modal"]').prop("disabled", true);


      } else {
        $.ajax({
          type: "POST",
          url: "<?php //echo base_url('home/getPriceRoomGuest') ?>",
          data: {id : countryId },
          dataType: 'json',
          success: function (data) {
            console.log(data);
            $('select[name="provinceguest_modal"]').prop("disabled", false);
            var count = Object.keys(data).length;
            var selectProvinceGuest_Modal = document.getElementById('selectProvinceGuest_Modal');
            // console.log("rofid: "+count);


            $('#selectProvinceGuest_Modal').find('option').remove().end();

            for (var i = 0; i < count; i++) {
              var opt = document.createElement('option');
              opt.value = data[i]['id_province'];
              opt.text = data[i]['name_province'];
              selectProvinceGuest_Modal.appendChild(opt);
            }
          }
        });
      }
  });


var checkbox = document.querySelector("#cb_group");
var input = document.querySelector("#selectGroupRegistration");

var toogleInput = function(e){
  input.disabled = !e.target.checked;
};

toogleInput({target: checkbox});
checkbox.addEventListener("change", toogleInput);



////////////////////////////Payment Method/////////////////////////////////////////

 $('select[name="pay_method"]').on('change', function() {
  // alert('Test');
      // var payID = $(this).val();
      // console.log("test "+payID);

      // if (payID == 'cash') {
      //   console.log("kosong");
      //   $('input[name="val_code"]').attr("disabled", true);

      //   // $('#val_code').find('option').remove().end();


      // } else {
      //       $('input[name="val_code"]').attr("disabled", false);
      //   };

  });

 function checkValCode(){
  var payID = $('#idDepositByReservation').val();
      // console.log("test "+payID);

      if (payID == 'CASH') {
        // console.log("kosong");
        $('select[name="TypeCardReservation"]').attr("disabled", true);
        $('input[name="CardNoReservation"]').attr("disabled", true);
        $('input[name="ExpDateReservation"]').attr("disabled", true);


        // $('#val_code').find('option').remove().end();


      } else {
            $('select[name="TypeCardReservation"]').attr("disabled", false);
            $('input[name="CardNoReservation"]').attr("disabled", false);
            $('input[name="ExpDateReservation"]').attr("disabled", false);

        };
 }

 function checkDepositReserv(){
  var payID = $('#idDepositByReservationEditModal').val();
      // console.log("test "+payID);

      if (payID == 'CASH') {
        // console.log("kosong");
        $('select[name="TypeCardReservationEditModal"]').attr("disabled", true);
        $('input[name="CardNoReservationEditModal"]').attr("disabled", true);
        $('input[name="ExpDateReservationEditModal"]').attr("disabled", true);


        // $('#idTypeCardReservationEditModal').find('option').remove().end();
        // $('#idCardNoReservationEditModal').find('option').remove().end();
        // $('#idExpDateReservationEditModal').find('option').remove().end();



      } else {
            $('select[name="TypeCardReservationEditModal"]').attr("disabled", false);
            $('input[name="CardNoReservationEditModal"]').attr("disabled", false);
            $('input[name="ExpDateReservationEditModal"]').attr("disabled", false);

        };
 }

 function checkDepositRegist(){
  var payID = $('#idDepositRegistrationGuest').val();
      // console.log("test "+payID);

      if (payID == 'CASH') {
        // console.log("kosong");
        $('select[name="TypeCardRegistrationGuest"]').attr("disabled", true);
        $('input[name="CardNoRegistrationGuest"]').attr("disabled", true);
        $('input[name="ExpDateRegistrationGuest"]').attr("disabled", true);


        // $('#val_code').find('option').remove().end();


      } else {
            $('select[name="TypeCardRegistrationGuest"]').attr("disabled", false);
            $('input[name="CardNoRegistrationGuest"]').attr("disabled", false);
            $('input[name="ExpDateRegistrationGuest"]').attr("disabled", false);

        };
 }

 // function checkDepositReserv(){
 //  var payID = $('#deposit_reservation').val();
 //      // console.log("test "+payID);

 //      if (payID == 'CASH') {
 //        // console.log("kosong");
 //        $('input[name="val_code"]').attr("disabled", true);

 //        // $('#val_code').find('option').remove().end();


 //      } else {
 //            $('input[name="val_code"]').attr("disabled", false);
 //        };
 // }

 function checkValCodeGuestModal(){
  var payIDModal = $('#pay_method_modal').val();
      // console.log("test "+payID);

      if (payIDModal == 'CASH') {
        // console.log("kosong");
        $('input[name="val_code_edit"]').attr("disabled", true);

        // $('#val_code').find('option').remove().end();


      } else {
            $('input[name="val_code_edit"]').attr("disabled", false);
        };
 }

 // $('#selectRoomType').change(function(){
 //  //var idRoom = $('#selectRoomType').val();
 //  alert("helo");
 // });

 function changeTypeRoom(){
  var typeRoomId = $('#selectRoomType option:selected').val();
  if(typeRoomId == '' || typeRoomId == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoom') ?>',
      type:'POST',
      data:{typeRoomId:typeRoomId},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil2.changeTypeRoom.data[0].price);

        var harga = hasil2.changeTypeRoom.data[0].price;
        $('#PriceRoom').val('');
        $('#PriceRoom').text(harga);
        $('#PriceRoom').val(harga);
      }
    });
  }

 }

 function changeTypeRoomGuestModal(){
  var price_regist_edit = $('#room_type_modal option:selected').val();
  if(price_regist_edit == '' || price_regist_edit == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoomGuestModal') ?>',
      type:'POST',
      data:{price_regist_edit:price_regist_edit},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil2.changeTypeRoomGuestModal.data[0].price);

        var harga = hasil2.changeTypeRoomGuestModal.data[0].price;
        $('#PriceRoom_modal').val('');
        $('#PriceRoom_modal').text(harga);
        $('#PriceRoom_modal').val(harga);
      }
    });
  }

 }

 function changeTypeRoomReservation(){
  var room_rate = $('#idNoRoomReservation option:selected').val();
  var room_building = $('#selectBuildingReservation option:selected').val();
  var room_floor = $('#selectFloorReservation option:selected').val();

  console.log(room_rate+"---"+room_building+'---'+room_floor);
  if(room_rate == '' || room_rate == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoomReservation') ?>',
      type:'POST',
      data:{room_rate:room_rate,room_building:room_building,room_floor:room_floor},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil);

        var harga = hasil2.changeTypeRoomReservation.data[0].price_room;
        $('#idRoomRateReservation').val('');
        $('#idRoomRateReservation').text(harga);
        $('#idRoomRateReservation').val(harga);
      }
    });
  }

 }

function changeTypeRoomRegistration(){
  var room_rate = $('#idNoRoomReservation option:selected').val();
  var room_building = $('#selectBuildingReservation option:selected').val();
  var room_floor = $('#selectFloorReservation option:selected').val();

  if(room_rate == '' || room_rate == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoomReservation') ?>',
      type:'POST',
      data:{room_rate:room_rate,room_building:room_building,room_floor:room_floor},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil2.changeTypeRoomReservation.data[0].price_room);

        var harga = hasil2.changeTypeRoomReservation.data[0].price_room;
        // var harga2 = hasil2.changeTypeRoomReservation.data[0].price_room;

        $('#room_rate').val('');
        $('#room_rate').text(harga);
        $('#room_rate').val(harga);

        $('#idTotalBillRegistrationGuest').val('');
        $('#idTotalBillRegistrationGuest').text(harga);
        $('#idTotalBillRegistrationGuest').val(harga);
      }
    });
  }

 }

 function changeTypeRoomRegistrationModal(){
  var room_rate = $('#idNoRoomReservationEditModal option:selected').val();
  var room_building = $('#selectBuildingReservation option:selected').val();
  var room_floor = $('#selectFloorReservation option:selected').val();

  if(room_rate == '' || room_rate == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoomReservation') ?>',
      type:'POST',
      data:{room_rate:room_rate,room_building:room_building,room_floor:room_floor},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil2.changeTypeRoomReservation.data[0].price_room);

        var harga = hasil2.changeTypeRoomReservation.data[0].price_room;
        // var harga2 = hasil2.changeTypeRoomReservation.data[0].price_room;

        $('#room_rate_modal').val('');
        $('#room_rate_modal').text(harga);
        $('#room_rate_modal').val(harga);

      }
    });
  }

 }

 // function changeTypeRoomReservation2(){
 //  var room_rate = $('#selectRoomTypeReservation option:selected').val();
 //  if(room_rate == '' || room_rate == null ){
 //    alert("Please select type room");
 //  } else {
 //      $.ajax({
 //      url:'<?= base_url('home/changeTypeRoomReservation') ?>',
 //      type:'POST',
 //      data:{room_rate:room_rate},
 //      dataType:'json',
 //      success:function(data){
 //        var hasil = JSON.stringify(data);
 //        var hasil2 = JSON.parse(hasil, true);
 //        console.log("Price: "+hasil2.changeTypeRoomReservation.data[0].price);

 //        var harga = hasil2.changeTypeRoomReservation.data[0].price;
 //        $('#room_rate2').val('');
 //        $('#room_rate2').text(harga);
 //        $('#room_rate2').val(harga);
 //      }
 //    });
 //  }

 function changeTypeRoomReservationModal(){
  var room_rate_edit = $('#room_type_modal option:selected').val();
  if(room_rate_edit == '' || room_rate_edit == null ){
    alert("Please select type room");
  } else {
      $.ajax({
      url:'<?= base_url('home/changeTypeRoomReservationModal') ?>',
      type:'POST',
      data:{room_rate_edit:room_rate_edit},
      dataType:'json',
      success:function(data){
        var hasil = JSON.stringify(data);
        var hasil2 = JSON.parse(hasil, true);
        console.log("Price: "+hasil2.changeTypeRoomReservationModal.data[0].price);

        var harga = hasil2.changeTypeRoomReservationModal.data[0].price;
        $('#room_rate_modal').val('');
        $('#room_rate_modal').text(harga);
        $('#room_rate_modal').val(harga);
      }
    });
  }

 }

 




//  $(function(){
// $("#upload_link").on('click', function(e){
//     e.preventDefault();
//     $("#user_photo:hidden").trigger('click');
// });
// });
$(document).ready(function(){
      $('#PriceRoom').maskMoney();
    });


// $('#guestPrintPdf').on('click',function(){
//   var doc = new jsPDF();
//   doc.text("Hello World",10,10);
//   doc.autoPrint();
//     var iframe = document.getElementById('iframePDF4');
//     iframe.src = doc.output('dataurlstring');

// });

function printPdfGuest(id_regist){


  $.ajax({
    url:'<?php echo base_url('home/getPrintPdfGuest'); ?>',
    data:{id_regist:id_regist},
    type:'POST',
    dataType:'json',
    success:function(data){
      //console.log("PRINT PDF GUEST: "+JSON.stringify(data));

      var realData = JSON.parse(JSON.stringify(data));
   
   console.log("RIO "+realData[0].guest_type);

   var surname = realData[0].tittle;
    if(surname == '' || surname == null){
      surname = '';
    }

   var firstName = realData[0].first_name;
   if(firstName == '' || firstName == null){
      firstName = '';
    }

      var surName = realData[0].surname;
   if(surName == '' || surName == null){
      surName = '';
    }


   //  var middleName = realData[0].middle_name;
   // if(middleName == '' || middleName == null){
   //    middleName = '';
   //  }

   //  var lastName = realData[0].last_name;
   // if(lastName == '' || lastName == null){
   //    lastName = '';
   //  }

   var roomRate = realData[0].room_rate;
   if(roomRate == '' || roomRate == null){
      roomRate = '';
    }
   var typeRoom = realData[0].dsc_tipe;
   if(typeRoom == '' || typeRoom == null){
      typeRoom = '';
    }

    var roomNumber = realData[0].no_of_room;
    if(roomNumber == '' || roomNumber == null){
      roomNumber = '';
    }

    var address = realData[0].address;
    if(address == '' || address == null){
      address = '';
    }

    var noOfAdult = realData[0].regist_adult;
    if(noOfAdult == '' || noOfAdult == null){
      noOfAdult = '';
    }

    var noOfChild = realData[0].regist_child;
    if(noOfChild == '' || noOfChild == null){
      noOfChild = '';
    }

    var checkInDate = realData[0].arr_date;
    if(checkInDate == '' || checkInDate == null){
      checkInDate = '';
    }

    var checkInTime = realData[0].arr_time;
    if(checkInTime == '' || checkInTime == null){
      checkInTime = '';
    }

    var checkOutDate = realData[0].dprt_date;
    if(checkOutDate == '' || checkOutDate == null){
      checkOutDate = '';
    }

    var checkOutTime = realData[0].dprt_time;
    if(checkOutTime == '' || checkOutTime == null){
      checkOutTime = '';
    }


    // var checkInDate = realData[0].adt_date;
    // if(checkInDate == '' || checkInDate == null){
    //   checkInDate = '';
    // }

    // var checkOutDate = realData[0].adf_date;
    // if(checkOutDate == '' || checkOutDate == null){
    //   checkOutDate = '';
    // }

    var phone = realData[0].phone;
    if(phone == '' || phone == null){
      phone = '';
    }

     var email = realData[0].email;
    if(email == '' || email == null){
      email = '';
    }

     var phone = realData[0].phone;
    if(phone == '' || phone == null){
      phone = '';
    }

    var zipCode = realData[0].zip_code;
    if(zipCode == '' || zipCode == null){
      zipCode = '';
    }

    var cityText = realData[0].city_text;
    if(cityText == '' || cityText == null){
      cityText = '';
    }

    var countryRegist = realData[0].name_country;
    if(countryRegist == '' || countryRegist == null){
      countryRegist = '';
    }

    var Jabatan = realData[0].jabatan;
    if(Jabatan == '' || Jabatan == null){
      Jabatan = '';
    }

    var POV = realData[0].purpose_of_visit;
    if(POV == '' || POV == null){
      POV = '';
    }

    var IDType = realData[0].name_identity;
    if(IDType == '' || IDType == null){
      IDType = '';
    }

    var IDNumber = realData[0].identity_number;
    if(IDNumber == '' || IDNumber == null){
      IDNumber = '';
    }

    var DateofBirth = realData[0].date_of_birth;
    if(DateofBirth == '' || DateofBirth == null){
      DateofBirth = '';
    }

    var Nationality = realData[0].name_country;
    if(Nationality == '' || Nationality == null){
      Nationality = '';
    }

    var Deposit = realData[0].pay_method;
    if(Deposit == '' || Deposit == null){
      Deposit = '';
    }

    var RegistHandled = realData[0].registration_handled;
    if(RegistHandled == '' || RegistHandled == null){
      RegistHandled = '';
    }

    var CheckedBy = realData[0].checked_by;
    if(CheckedBy == '' || CheckedBy == null){
      CheckedBy = '';
    }

    // var DateArrRegist = realData[0].adf_date;
    // if(DateArrRegist == '' || DateArrRegist == null){
    //   DateArrRegist = '';
    // }

    // var TimeArrRegist = realData[0].adf_date;
    // if(TimeArrRegist == '' || TimeArrRegist == null){
    //   TimeArrRegist = '';
    // }

    var DateRegist = realData[0].adt_date;
    if(DateRegist == '' || DateRegist == null){
      DateRegist = '';
    }

    var TimeRegist = realData[0].adt_date;
    if(TimeRegist == '' || TimeRegist == null){
      TimeRegist = '';
    }

    var doc = new jsPDF('l');
  var oTable = $('#tableDataGuest').DataTable();

  var dataRow = oTable.rows().data();

  var jsonDataRow = JSON.stringify(dataRow);
  var newDataRow = JSON.parse(jsonDataRow);


  var logoSnabb = "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";


  var width = doc.internal.pageSize.getWidth();
  var widthPart = width/2;
  console.log("INI WIDTH PART: "+widthPart);

  // doc.addImage(logoSnabb, 'PNG',10,5,10,10);

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
  doc.text("REGISTRATION CARD",210,23);

  //form
  doc.setFontSize(8);
  doc.rect(11, 35, widthPart-11, 13);
  let partKubus = (widthPart-11)/3;
  doc.rect(11+widthPart-11, 35, partKubus, 13);
  

  doc.rect(11+widthPart-11+partKubus, 35, partKubus, 13);
  doc.rect(11+widthPart-11+partKubus+partKubus, 35, partKubus, 13);

  doc.rect(11, 48, widthPart-11, 43);
  
  doc.rect(11+widthPart-11, 48, partKubus, 21.5);
  doc.rect(11+widthPart-11, 69.5, partKubus, 21.5);
  doc.rect(11+widthPart-11, 91, partKubus, 31);

  doc.rect(11+widthPart-11+partKubus, 48, partKubus+partKubus, 6.5);
  
  doc.rect(11+widthPart-11+partKubus, 54.5, partKubus, 7.5);
  doc.rect(11+widthPart-11+partKubus+partKubus, 54.5, partKubus, 7.5);

  doc.rect(11+widthPart-11+partKubus, 62, partKubus, 7.4);
  doc.rect(11+widthPart-11+partKubus+partKubus, 62, partKubus, 7.4);

  doc.rect(11+widthPart-11+partKubus, 69.4, partKubus, 9);
  doc.rect(11+widthPart-11+partKubus+partKubus, 69.4, partKubus, 9);

  doc.setFillColor(0, 0, 0); 
  doc.rect(11+widthPart-11+partKubus, 78.4, partKubus+partKubus, 6.5, 'F');
  doc.rect(11+widthPart-11+partKubus, 84.7, partKubus+partKubus, 6.4);

  doc.rect(11+widthPart-11+partKubus, 91, partKubus, 6.5);
  doc.rect(11+widthPart-11+partKubus+partKubus, 91, partKubus, 6.4);

  doc.rect(11+widthPart-11+partKubus, 97.3, partKubus, 6.4);
  doc.rect(11+widthPart-11+partKubus+partKubus, 97.3, partKubus, 6.4);

  doc.setFillColor(0, 0, 0);   
  doc.rect(11+widthPart-11+partKubus, 103.5, partKubus+partKubus, 6.4, 'F');
  doc.rect(11+widthPart-11+partKubus, 109.9, partKubus+partKubus, 12);

  //form
  doc.rect(11, 91, (widthPart-11)/2, 15);
  doc.rect(11+(widthPart-11)/2, 91, (widthPart-11)/2, 15);

  doc.rect(11+(widthPart-11)/2, 76, (widthPart-11)/2, 15);

  doc.rect(11, 106, (widthPart-11)/2, 16);
  doc.rect(11+(widthPart-11)/2, 106, (widthPart-11)/2, 16);
  
  doc.rect(11, 122, (widthPart-11)/2, 15);
  doc.rect(11+(widthPart-11)/2, 122, (widthPart-11)/2, 15);

  doc.rect(11, 137, (widthPart-11)/2, 15);
  doc.rect(11+(widthPart-11)/2, 137, (widthPart-11)/2, 15);

  doc.rect(11, 152, (widthPart-11)/2, 25);

  doc.rect(11+(widthPart-11)/2, 152, (widthPart-11)/2, 8.3);
  doc.rect(11+(widthPart-11)/2, 160.3, (widthPart-11)/2, 8.3);
  doc.rect(11+(widthPart-11)/2, 168.6, (widthPart-11)/2, 8.3);

  doc.rect(11+widthPart-11, 122, partKubus+partKubus+partKubus, 55);

  //footer
  doc.rect(11, 176.9, (widthPart-11)*2, 10);

  doc.setFontSize(12);
  doc.text("Taman Darmawangsa Jalan Raden Rubaya Karangpawitan, Karawang Karawang Barat, Jawa Barat 41315 - Indonesia",31,196.9);

  doc.text("T. 0267-8411044 | voxstaykarawang@thevoxotel.com | www.thevoxotel.com",70,201.9);




  //text
  doc.setFontSize(7);
  doc.text("SURNAME (         )",12, 39);
  doc.text("Nama Keluarga",12, 42);
  doc.text(surname,25, 39);
  doc.text(surName,12, 45);

  doc.text("FIRST NAME/INITIALS",12+widthPart-63, 39);
  doc.text("Nama Depan/Inisial",12+widthPart-63, 42);
  doc.text(firstName,12+widthPart-63, 45);

  doc.text("ROOM RATE",12+widthPart-11, 39);
  doc.text("Harga Kamar",12+widthPart-11, 42);
  doc.text("Rp ",12+widthPart-11, 45);
  doc.text(roomRate,15+widthPart-11, 45);

  doc.text("ROOM TYPE",12+widthPart-11+partKubus, 39);
  doc.text("Tipe Kamar",12+widthPart-11+partKubus, 42);
  doc.text(typeRoom,12+widthPart-11+partKubus, 45);
  
  doc.text("ROOM NUMBER",12+widthPart-11+partKubus+partKubus, 39);
  doc.text("Nomor Kamar",12+widthPart-11+partKubus+partKubus, 42);
  doc.text(roomNumber,12+widthPart-11+partKubus+partKubus, 45);

  doc.text("ADDRESS/Alamat",12, 52);
  doc.text(address,12, 56);

  doc.text("NO OF PERSON",12+widthPart-11, 52);
  doc.text("Jumlah Orang",12+widthPart-11, 55);
  doc.text("Adult/Dewasa :",12+widthPart-11, 58);
  doc.text(noOfAdult,12+widthPart-11, 61);
  doc.text("Child/Anak-anak :",12+widthPart-11, 64);
  doc.text(noOfChild,12+widthPart-11, 67);

  doc.text("CHECK IN/Kedatangan",12+widthPart-11+partKubus+33, 52);

  doc.text("DATE/Tanggal",12+widthPart-11+partKubus+5, 59);
  doc.text(checkInDate,63+widthPart-11+partKubus+5, 59);
  
  doc.text("TIME/Jam",12+widthPart-11+partKubus+5, 66);
  doc.text(checkInTime,65+widthPart-11+partKubus+5, 66);

  doc.text("ARRIVED FROM",12+widthPart-11+partKubus+5, 73);
  doc.text("Tiba Dari",12+widthPart-11+partKubus+5, 76);

  doc.setTextColor(255,255,255);
  doc.text("CHECK IN TIME 14:00 HOURS",12+widthPart-11+partKubus+30, 82);
  doc.setTextColor(0,0,0);

  doc.text("CHECK OUT/Keberangkatan",12+widthPart-11+partKubus+30, 89);

   doc.text("DATE/Tanggal",12+widthPart-11+partKubus+5, 95);
   doc.text(checkOutDate,63+widthPart-11+partKubus+5, 95);

  doc.text("TIME/Jam",12+widthPart-11+partKubus+5, 101);
  doc.text(checkOutTime,65+widthPart-11+partKubus+5, 101);
  doc.setTextColor(255,255,255);
  doc.text("CHECK OUT TIME 12:00 HOURS",12+widthPart-11+partKubus+29, 107.5);
  doc.setTextColor(0,0,0);


  doc.text("Purpose of visit/maksud kedatangan",12+widthPart-11+partKubus+5, 113.5);
  doc.text(POV,12+widthPart-11+partKubus+5, 118.5);


  doc.text("ZIP CODE",12+widthPart-79, 80);
  doc.text("Kode Pos",12+widthPart-79, 83);
  doc.text(zipCode,12+widthPart-79, 86);


  doc.text("TELP NO/HP",12+widthPart-11, 73);
  doc.text("Nomor Telepon/Tel Genggam",12+widthPart-11, 76);
  doc.text(phone,12+widthPart-11, 79);

  doc.text("CITY/Kota",12, 95);
  doc.text(cityText,12, 99);

  doc.text("COUNTRY/Negara",12+widthPart-79, 95);
  doc.text(countryRegist,12+widthPart-79, 99);

   doc.text("COMPANY/Perusahaan",12, 110);
   doc.text("OCCUPATION/Jabatan",12+widthPart-79, 110);
   doc.text(Jabatan,12+widthPart-79, 114);

   doc.text("PASSPORT/ID NO-No Pasport/Kartu Identitas",12, 125);
   doc.text(IDType,12, 130);
   doc.text(" / ",23, 130);
   doc.text(IDNumber,26, 130);

   doc.text("DATE OF BIRTH/Tanggal Lahir",12+widthPart-79, 125);
   doc.text(DateofBirth,12+widthPart-79, 130);

   doc.text("PLACE & DATE ISSUED",12, 140);
   doc.text("Tempat & Tanggal dikeluarkan",12, 143);

   doc.text("NATIONALITY",12+widthPart-79, 140);
   doc.text("Kewarganegaraan",12+widthPart-79, 143);
   doc.text(Nationality,12+widthPart-79, 147);

   doc.text("EMAIL ADDRESS",12+widthPart-11, 95);
  doc.text("Alamat Email",12+widthPart-11, 98);
  doc.text(email,12+widthPart-11, 102);

  doc.text("GTD INFO/Jaminan",12+widthPart-79, 155);
  doc.text(Deposit,12+widthPart-79, 158);

  doc.text("FO CLERK",12+widthPart-79, 163);
   doc.text("Petugas FO",12+widthPart-79, 166);
   doc.text(RegistHandled,30+widthPart-79, 166);

   doc.text("Checked By",12+widthPart-79, 171.5);
   doc.text(CheckedBy,12+widthPart-79, 174.5);

   doc.text("SIGNATURE",12, 155);
   doc.text("Tanda Tangan",12, 158);

   doc.text("MY ACCOUNT WILL BE SETTLED BY/Cara Pembayaran",12+widthPart-11, 125);

   doc.rect(12+widthPart-11, 132, 4, 4);
   doc.text("Credit Card (Visa/Master/BCA/JCB/Amex)",12+widthPart-5, 133);
   doc.text("Card no ___________________________________________  Exp ____________/_____________",12+widthPart-5, 137);

   doc.rect(12+widthPart-11, 144, 4, 4);
   doc.text("Cash",12+widthPart-5, 145);
   doc.text("Deposit Rp._________________________________________",12+widthPart-5, 149);

   doc.rect(12+widthPart-11, 156, 4, 4);
   doc.text("City Ledge (Rooms/Meals/Laundry/Telp/Others)",12+widthPart-5, 157);
   doc.text("Remarks___________________________________________",12+widthPart-5, 161);

   doc.rect(12+widthPart-11, 168, 4, 4);
   doc.text("Voucher (Remarks ___________________________________)",12+widthPart-5, 169);
   doc.text("Travel Agent",12+widthPart-5, 173);

  doc.setFontSize(6);
  doc.text("Hotel is not responsible for the safety of any valuables left in guest rooms",12, 180);
  doc.text("Safety deposit boxes are available at every room for free of charge",12, 183);

  doc.text("Hotel tidak bertanggung jawab atas barang-barang yang ditinggalkan di kamar tamu",12+widthPart-11, 180);
  doc.text("Kotak penyimpanan barang berharga tersedia di setiap kamar untuk digunakan oleh tamu hotel secara cuma-cuma",12+widthPart-11, 183);

  doc.autoPrint();
  var iframe = document.getElementById('iframePDF4');
  iframe.src = doc.output('dataurlstring');

   }
  });
  

}

function detailTypeGuestChange(sel){
  // $('#tableDetailTypeGuest').DataTable().fnDestroy();
  var table = $('#tableDetailTypeGuest').DataTable({
          'destroy'     :true,
          'paging'      : true,
          'lengthChange': false,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false,
      });

  table.search(sel.value).draw();

}




</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });
    });

</script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idPhoneNumberCPReservation").mask("9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idPhoneRegistrationGuest").mask("9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#phone_modal").mask("9999 - 9999 - 9999");
        });
        </script>


<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idCardNoReservation").mask("9999 - 9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idCardNoRegistrationEditModal").mask("9999 - 9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#phone_number_modal").mask("9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idPhoneNumberCPReservationEditModal").mask("9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idCardNoReservationEditModal").mask("9999 - 9999 - 9999 - 9999");
        });
        </script>

<script>
        jQuery(function($){
            // $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
            $("#idCardNoRegistrationGuest").mask("9999 - 9999 - 9999 - 9999");
        });
        </script>

<!-- <script type="text/javascript">
$("#datetime").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
</script> -->

<!-- <script type="text/javascript">

$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

  if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
  }

  var newTextBoxDiv = $(document.createElement('div'))
       .attr("id", 'TextBoxDiv' + counter);

  newTextBoxDiv.after().html('<br/><div class="form-group col-xs-4"><label>Firstname ' + counter + ' : </label>' +
        '<input type="text" name="textbox' + counter +
        '" id="textbox' + counter + '" value="" ></div>');

  newTextBoxDiv.appendTo("#TextBoxDiv1");


  counter++;
     });

     $("#removeButton").click(function () {
  if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

  counter--;

        $("#TextBoxDiv" + counter).remove();

     });

     $("#getButtonValue").click(function () {

  var msg = '';
  for(i=1; i<counter; i++){
      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
  }
        alert(msg);
     });
  });
</script> -->

<!-- <script type="text/javascript">
  var max_fields      = 100;
var wrapper         = $(".input_fields_wrap");
var add_button      = $(".add_field_button");
var remove_button   = $(".remove_field_button");

$(add_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields < max_fields){
        $(wrapper).append('<input type="text" name="first_name[]" class="field-long" />');

        $(wrapper).append('<input type="text" name="middle_name[]" class="field-long" />');

        $(wrapper).append('<input type="text" name="last_name[]" class="field-long" />');

    }
});
$(remove_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields>1){
        wrapper[0].childNodes[total_fields-1].remove();
    }
});
</script> -->
<script type="text/javascript">
  $(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  // var wrapper         = $(".input_fields_wrap_tittle");
  var wrapper1         = $(".wrappertype");
  var wrapper2        = $(".wrapperbuilding");
  var wrapper3        = $(".wrapperfloor");
  var wrapper4        = $(".wrappernoroom");
  var wrapper5        = $(".wrapperrate");
  // var wrapper6        = $(".input_fields_wrap_six"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID

  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      // $(wrapper).append('<div><br/><select name="tittle[]" id="tittle" class="form-control" ><option value=""></option><option value="Mr">Mr.</option><option value="Mrs">Mrs.</option><option value="Ms">Ms</option></select><a href="#" class="remove_field">Remove</a></div>'); //add input box
      $(wrapper1).append('<div><br/><select name="room_type[]" id="selectRoomTypeReservation" class="form-control " onchange="changeTypeRoomReservation()" required><option value="roomtype"> </option><?php foreach ($rtg as $key) { echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>"; } ?></select><a href="#" class="remove_field">Remove</a></div>'); //add input box
      $(wrapper2).append('<div><br/><input type="text" class="form-control" name="BuildingRegistration[]"/><a href="#" class="remove_field2">Remove</a></div>');
      $(wrapper3).append('<div><br/><input type="text" class="form-control" name="FloorRegistration[]" /><a href="#" class="remove_field3">Remove</a></div>')
      $(wrapper4).append('<div><br/><input type="text" class="form-control" name="no_of_room[]" /><a href="#" class="remove_field4">Remove</a></div>');
      $(wrapper5).append('<div><br/><input type="text" class="form-control" name="room_rate[]" /><a href="#" class="remove_field5">Remove</a></div>');
      // $(wrapper6).append('<div><br/><select name="BuildingReservation[]" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()" required> <option value="buildingNone"> </option> <?php foreach ($building as $key) { echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";} ?></select><a href="#" class="remove_field6">Remove</a></div>');
    }
  });

  $(wrapper1).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })

  $(wrapper2).on("click",".remove_field2", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })

  $(wrapper3).on("click",".remove_field3", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })

  $(wrapper4).on("click",".remove_field4", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })

  $(wrapper5).on("click",".remove_field5", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })

  $(wrapper6).on("click",".remove_field6", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>

<script type="text/javascript">
  var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group col-sm-3"><select name="room_type[]" id="selectRoomTypeReservation" class="form-control " > <option value="roomtype"> </option> <?php foreach ($rtg as $key) { echo  "<option value=".$key['id_tipe'].">".$key['dsc_tipe']."</option>"; } ?> </select></div><div class="col-sm-1"> <select name="BuildingRegistration[]" id="selectBuildingReservation" class="form-control " onchange="changeBuildingReservation()" required><option value="buildingNone"> </option> <?php foreach ($building as $key) { echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>"; } ?> </select></div><div class="col-sm-4 form-group"><select name="FloorRegistration[]" id="selectFloorReservation" class="form-control " onchange="changeFloorReservation()" required><option value="floorNone"> </option> <?php foreach ($building as $key) {echo  "<option value=".$key['id_building'].">".$key['name_building']."</option>";} ?> </select></div><div class="col-sm-2 form-group"><select name="no_of_room[]" id="idNoRoomReservation" class="form-control" onchange="changeTypeRoomRegistration()" required> <option value="noroom"> </option> <?php foreach ($nrg as $key) { echo  "<option value=".$key['id_room'].">".$key['no_of_room']."</option>";} ?></select></div><div class="col-sm-1 form-group"><input type="text" name="room_rate[]" class="form-control" id="room_rate" readonly></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
     $('.removeclass'+rid).remove();
   }
</script>


<script type="text/javascript">
function getDetailRoom(id){
  $.ajax({
    url:'<?php echo base_url('home/getDetailRoomChart'); ?>',
    data:{id:id},
    type:'POST',
    dataType:'json',
    success:function(data){
      var detailRoomChart = JSON.stringify(data);
      var roomChart = JSON.parse(detailRoomChart);
      var roomChartLength  = roomChart.length;
      console.log("SIZE ROOM CHART: "+detailRoomChart);
      
      var floorArray = new Array();

      for(var i = 0; i < roomChartLength; i++){
        var id_room = roomChart[i].id_room;
        var name_room = roomChart[i].name_room;
        var type_room = roomChart[i].type_room;
        var no_room = roomChart[i].no_of_room;
        var building_room = roomChart[i].building;
        var floor_room = roomChart[i].floor;
        var status_room = roomChart[i].status;

        floorArray.push(floor_room);
      }

      function onlyUnique(value, index, self) { 
        return self.indexOf(value) === index;
      }

      var newFloorArray = floorArray.filter(onlyUnique);
      newFloorArray.sort();
      var floorArrSize = newFloorArray.length;
      
      var content = "";
      
      for(let j = 0; j < floorArrSize; j++){ 
        content+= " <div class=\"col-md-5\">"; 
        content += "<div class=\"box box-widget widget-user-2 bg-white\" style=\"border-style: ridge;\">";
        content += "<div class=\"widget-user-header\" style=\"text-align:center;\">";
        content += "<h3>Floor "+newFloorArray[j]+"</h3>";
        content += "</div>";
        content += "<table class=\"table table-bordered\">";
        content += "<tr><th>Room Name</th><th>Room No.</th><th>Room Status</th><th>Action</th></tr>";
        
        for(let k = 0; k < roomChartLength; k++){
          var id_room2 = roomChart[k].id_room;
          var name_room2 = roomChart[k].name_room;
          var type_room2 = roomChart[k].type_room;
          var no_room2 = roomChart[k].no_of_room;
          var building_room2 = roomChart[k].building;
          var floor_room2 = roomChart[k].floor;
          var status_room2 = roomChart[k].statusAwal;
          var realStatus = roomChart[k].realStatus;
          var realBuilding = roomChart[k].name_building;

          if(newFloorArray[j] == floor_room2){
          content += "<tr><td>"+name_room2+"</td>";
          content += "<td>"+no_room2+"</td>";
          if(realStatus == "Occupied Ready" || realStatus == "Occupied Dirty" || realStatus == "Occupied Clean"){
           
            content += "<td><button class=\"btn btn-sm bg-red\" style=\"width: 100%;\"><span class=\"badge bg-red\">"+realStatus+"</span></button></td>";
          } else if(realStatus == "Vacant Ready" || realStatus == "Vacant Dirty" || realStatus == "Vacant Clean"){
            content += "<td><button class=\"btn btn-sm bg-green\" style=\"width: 100%;\"><span class=\"badge bg-green\">"+realStatus+"</span></button></td>";
          } else if(realStatus == "OOO" || realStatus == "OOS"){
            content += "<td><button class=\"btn btn-sm bg-orange\" style=\"width: 100%;\"><span class=\"badge bg-orange\">"+realStatus+"</span></button></td>";
          }
          content += "<td><button class=\"btn bg-blue btn-sm\" href=\"javascript:void(0)\" onclick=\"editChartRoom("+id_room2+", '"+status_room2+"')\"><i class=\"fa fa-edit\"></i> Chg Status</button></td></tr>";
           
          }

        }
        content += "</table>";        
        content += "</div>";
        content += "</div>";
        

      }
      
      $('#contentHotel').html(content);
      
      

      

      
    }
  })
}


function editChartRoom(id, status){
  $('#modalEditChartRoom #editChartId').val(id);
  $('#modalEditChartRoom #editChartStatus option[value='+status+']').attr('selected','selected');

  $('#modalEditChartRoom').modal('show');

  // alert(id+status);


}
</script>

<script>
$("#alertSukses").fadeTo(2000, 300).slideUp(300, function(){
    $("#alertSukses").slideUp(300);
});
</script>



<!-- Total pax function to change amount room -->
<script type="text/javascript">
  $('#idTotalPaxReservation').on('change', function(){
    let myValue = $('#idTotalPaxReservation').val();
    // alert(myValue);

    // if(myValue == 0){
    //   alert("Total pax cannot be zero");
    // } else {

    // }
  })



  function changeBuildingReservation(){
    let myValue = $('#selectBuildingReservation').val();

    // Ambil lantai
    $.ajax({
      url:'<?php echo base_url('home/getFloorReserv'); ?>',
      data:{idBuilding:myValue},
      type:'POST',
      dataType:'json',
      success:function(data){
        let res = JSON.stringify(data);
        let parseRes = JSON.parse(res);
        //console.log("LANTAI HASIL RESERVATION: "+parseRes[0]['floor']);
        let parseResLength = parseRes.length;

        $('#selectFloorReservation').find('option').remove().end().append('<option value="floorNone"></option>').val('');

        for(let a = 0; a < parseResLength; a++){
          let floor = parseRes[a]['floor'];
          $('<option>').val(floor).text(floor).appendTo('#selectFloorReservation');
        }
      }
    })
  }


  function changeFloorReservation(){
    let buildingValue = $('#selectBuildingReservation').val();
    let floorValue = $('#selectFloorReservation').val();

    $.ajax({
      url:'<?php echo base_url('home/getNoReserv'); ?>',
      data:{buildingValue:buildingValue,floorValue:floorValue},
      type:'POST',
      dataType:'json',
      success:function(data){
        let res = JSON.stringify(data);
        console.log("No Kamar HASIL RESERVATION: "+res);
        let parseRes = JSON.parse(res);
        let parseResLength = parseRes.length;

        $('#idNoRoomReservation').find('option').remove().end().append('<option value="noRoomNone"></option>').val('');

        for(let a = 0; a < parseResLength; a++){
          let noRoom = parseRes[a]['no_of_room'];
          $('<option>').val(noRoom).text(noRoom).appendTo('#idNoRoomReservation');
        }
      }
    })
  }

  function changeFloorEditReservation(){
    let buildingValue = $('#selectBuildingReservation').val();
    let floorValue = $('#selectFloorReservation').val();
    if (buildingValue == 'buildingNone' || floorValue == 'floorNone'){
        $('#idNoRoomReservationEditModal').find('option').remove().end().append('<option value="noRoomNone"></option>').val('');
    }else {


    $.ajax({
      url:'<?php echo base_url('home/getNoReserv'); ?>',
      data:{buildingValue:buildingValue,floorValue:floorValue},
      type:'POST',
      dataType:'json',
      success:function(data){
        let res = JSON.stringify(data);
        console.log("No Kamar HASIL RESERVATION: "+res);
        let parseRes = JSON.parse(res);
        let parseResLength = parseRes.length;

        $('#idNoRoomReservationEditModal').find('option').remove().end().append('<option value="noRoomNone"></option>').val('');

        for(let a = 0; a < parseResLength; a++){
          let noRoom = parseRes[a]['no_of_room'];
          $('<option>').val(noRoom).text(noRoom).appendTo('#idNoRoomReservationEditModal');
        }
      }
    })
    }
  }
</script>

<script type="text/javascript">
  $("#tittle_modal2").css("pointer-events","none");
  $("#building_modal2").css("pointer-events","none");
  $("#room_type_modal2").css("pointer-events","none");
  $("#billing_instruction_modal2").css("pointer-events","none");
  $("#selectPay_method").css("pointer-events","none");
  $("#idTypeCardReservationEditModal2").css("pointer-events","none");
  // $("#selectStatus").css("pointer-events","none");
  // $("#selectGuestType").css("pointer-events","none");
  // $("#selectDetailGuestType").css("pointer-events","none");
  $("#tittle_cp_modal2").css("pointer-events","none");

</script>