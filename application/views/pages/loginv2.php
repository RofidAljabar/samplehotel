<!DOCTYPE html>
<html>
<head>
<title>Hotel Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/cssloginv2/style.css">
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--/webfonts-->
</head>
<body>
<!--start-main-->
<h1>Hotel<span>Management System</span></h1>
<div class="login-box">
		<form id="login-form" method="post" action="<?php echo base_url('login/proseslogin'); ?>">
			<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
			<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

			<?php
                    $error = $this->session->flashdata('error');
                      if (isset($error)) {
                        echo "<text class=\"text-primary small\">".$error."</text>";
                      }
                    ?>
		</form>
		<!-- <div class="remember">
			<a href="#"><p>Remember me</p></a>
			<h4>Forgot your password?<a href="#">Click here.</a></h4>
		</div> -->
		<div class="clear"> </div>
		<div class="btn">
			<input type="submit" value="LOGIN">
		</div>
		<div class="clear"> </div>
</div>
<!--//End-login-form-->
<!--start-copyright-->
<div class="copy-right">
	<p>Software Developer |<a href="http://sentral.co.id">  &nbspPT. Sentral Mitra Informatika</a></p> 
</div>
<!--//end-copyright-->	
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