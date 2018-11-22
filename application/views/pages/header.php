<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Management System</title>
  <link rel="stylesheet" type="text/css" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dropify/dist/css/dropify.min.css'?>">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/media_daypilot/layout.css">

   <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>script/fullcalendar/fullcalendar.min.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>script/fullcalendar/fullcalendar.css" /> -->
   <!-- <link href='<?=base_url();?>script/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' /> -->
   <!-- <link rel="stylesheet" href="<?php echo base_url();?> assets/bower_components/fullcalendar/dist/fullcalendar.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?> assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print"> -->
  <!-- <script type="text/javascript" src="my.js"></script> -->
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Datatables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/HMS.png">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



  <style type="text/css">
  .scheduler_default_rowheader_inner
  {
      border-right: 1px solid #ccc;
  }
  .scheduler_default_rowheader.scheduler_default_rowheadercol3
  {
      background: #fff;
  }
  .scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      top: 2px;
      bottom: 2px;
      left: 2px;
      background-color: transparent;
      border-left: 5px solid #1a9d13; /* green */
      border-right: 0px none;
  }
  .status_available.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #1769aa; /* red */
  }
  .status_reserved.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #59f967; /* orange */
  }

  .status_dayuse.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #f9cb59; /* orange */
  }

  .status_stayingguest.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #fdff8c; /* orange */
  }

  .status_checkout.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #8cffed; /* orange */
  }

  .status_oos.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #f26154; /* orange */
  }

  .status_oldroom.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #dc53f1; /* orange */
  }

  .status_noshow.scheduler_default_rowheadercol3 .scheduler_default_rowheader_inner
  {
      border-left: 5px solid #413b42; /* orange */
  }

  /*input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
}

input[type=datetime-local] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
}

select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}*/

</style>
 
</head>
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header" style="color:#990000;">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><i>SNABB</i></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/img/HMS.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('name_session'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/img/HMS.png" class="img-circle" alt="User Image">

                <p>
                  <div class="pull-center">
                  <a href="<?php echo base_url('home/viewProfile');?>" class="btn btn-link"><?php echo $this->session->userdata('name_session'); ?> Hotel || View Profile</a>
                  
                  <!-- <button class="btn btn-primary btn-sm ubahProfile" onclick="ubahProfile($vp);" style="width:48%;"><i class="fa fa-edit"></i> </button> -->
                  </div>
                  <!-- <a onclick="viewProfile();" href="javascript:void(0)"><?php //echo $this->session->userdata('name_session'); ?> Hotel</a> -->

           <!--        <a href="<?php //echo base_url('home/viewProfile'); ?>" class="btn btn-link btn-sm"><?php //echo $this->session->userdata('name_session'); ?> Hotel || <i class="fa fa-edit"></i> View Profile</a> -->
                  
              <!-- <button class="btn btn-link btn-sm ubahProfile" onclick="ubahProfile($ubahprof);" style="width:65%;"><?php //echo $this->session->userdata('name_session'); ?> Hotel || <i class="fa fa-edit"></i> View Profile</a></button> -->
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('home/changepswd');?>" class="btn btn-info btn-sm">Change Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/get_userlogout'); ?>" class="btn btn-sm btn-warning">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/img/HMS.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name_session'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('admin_session'); ?></a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="treeview">
          <a onclick="baseUrl();" href="javascript:void(0)">
            <i class="fa fa-home"></i> <span>DASHBOARD</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>MASTER DATA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a onclick="HotelInformation();" href="javascript:void(0)"><i class="fa fa-building"></i> Hotel Information </a>
              <a onclick="RoomManagement();" href="javascript:void(0)"><i class="fa fa-bed"></i>Room Management</a>
              <a onclick="UserManagement();" href="javascript:void(0)"><i class="fa fa-user"></i>User Management</a>
              <a onclick="segmentation();" href="javascript:void(0)"><i class="fa fa-users"></i>Segmentation</a>
              <a onclick="guestType();" href="javascript:void(0)"><i class="fa fa-user-circle"></i>Guest Type</a>
              <!-- <a onclick="PriceManagement();" href="javascript:void(0)"><i class="fa fa-user-circle"></i>Price Management</a> -->
<!--               <a onclick="Promo();" href="javascript:void(0)"><i class="fa fa-tags"></i>Promo</a>
              <a onclick="Tax();" href="javascript:void(0)"><i class="fa fa-percent"></i>Tax</a> -->


              <!-- <ul class="treeview-menu">
                <li class=" active treeview">
                  <a onclick="humanResources();" href="javascript:void(0)"><i class="fa fa-circle-o"></i>Hotel Information</a>
                  <a onclick="inputHotel();" href="javascript:void(0)"><i class="fa fa-circle-o"></i>Master Input Hotel</a>
                </li>
                
              </ul> -->
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a onclick="Reservation();" href="javascript:void(0)">
            <i class="fa fa-book"></i> <span>RESERVATION</span>
          </a>
        </li>

        <li class="treeview">
          <a onclick="Guest();" href="javascript:void(0)">
            <i class="fa fa-registered"></i> <span>REGISTRATION</span>
          </a>
        </li>

        <li class="treeview">
          <a onclick="bookchart();" href="javascript:void(0)">
            <i class="fa fa-line-chart"></i> <span>BOOK CHART</span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 