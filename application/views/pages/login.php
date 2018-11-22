<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.sea.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico"> -->
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/HMS.png">

  <!-- Isi css hms -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/assets_loginhms/css/style.css">
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body >
    <!--header-->
  <div class="header-w3l">
    <h1>&nbsp;</h1>
  </div>
<!--//header-->

<!--main-->
<div>
  <div class="sub-main-w3" >  
    <form action="<?php echo base_url('login/proseslogin'); ?>" method="post">
      <input placeholder="USERNAME" name="username" class="user" type="text" required=""><br>
      <input  placeholder="PASSWORD" name="password" class="pass" type="password" required=""><br>
      <input type="submit" value="">
    </form>
  </div>
</div>
<!--//main-->

<!--footer-->
<div class="footer" >
  <p>&copy; <?php echo date('Y') ?>. All rights reserved | PT Sentral Mitra Informatika</p>
</div>
<!--//footer-->
    
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#loading").hide();

        $('.btnlogin').click(function(){
          var username = $('.inputusername').val();
          var password = $('.inputpassword').val();

          if (username != '' && password != '') {
            $("#loading").show();
          }

        });
      });
    </script>
  </body>
</html>
