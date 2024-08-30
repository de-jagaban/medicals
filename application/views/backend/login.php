<?php 
$system_name = $this->db->get_where('settings', array('type' => 'system_name')) ->row()->description;
$system_title = $this->db->get_where('settings', array('type' => 'system_title')) ->row()->description;
?>


<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="An enhanced Hospital Management system ">
<meta name="author" content="WITTY INVENTIONS DIGITAL AGENCY">
<link rel="icon"  sizes="16x16" href="<?php echo base_url() ?>uploads/gh-logo.png">
    <title><?php echo $system_title;?></title> <!-- Echo system title from the database --> 
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>witty/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php echo base_url(); ?>witty/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>witty/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php echo base_url(); ?>witty/css/colors/megna.css" id="theme"  rel="stylesheet">
<link href="<?php echo base_url();?>witty/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

	
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>

		
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
	 <h4 class="box-title m-b-20" align="center">
        <br>
        <!-- The 'get_phrase function helps in getting the text so it can be translated using the multi-lingual function -->
        <!-- Emergency Dial number -->
        <div>
            <button type="button" class="btn btn-danger btn-rounded" class="navbar-brand"  ><a href="tel:<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?>" style="color: white;"><?php echo get_phrase('Call for Emergency');?></a></button>
        </div>
	 <br><br><br>
        <!-- Login Form -->
					<img src="<?php echo base_url() ?>uploads/hospital-logo.png" width="300" height="70"/></h4>
					<h3 align="center"><a href=""><?php echo $system_name;?></a></h3> <!-- Echo system name from the database --> 
					<br>

                    <div> 
		                <h5 align="center"><?php echo get_phrase('Login to access the system');?></h5>
	                </div>
                    <br>
					
					
	<form method="post" role="form" id="loginform" class="form-horizontal form-material" action="<?php echo base_url();?>login/check_login">

   
       <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" required="" placeholder="<?php echo get_phrase('Email here');?>" style="width:100%">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12" >
                            <input class="form-control" type="password" name="password" required="" placeholder="<?php echo get_phrase('Password here');?>" style="width:100%">
                        </div>
                    </div>
					
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup remember-me"> <?php echo get_phrase('Remember me');?> </label>

            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> <?php echo get_phrase('Forgot password');?></a> </div>
        </div>
       <div class="form-group text-center m-t-20">
        <div class="col-xs-12">
		
		  
<button class="btn btn-success style1 btn-sm btn-rounded btn-block text-uppercase waves-effect waves-light" type="submit" style="width:100%; color:white">
<?php echo get_phrase('Login');?>
</button>

                        </div>
                    </div>
					<br><br><br><br><br><br><br><br><br><br>
                 <?php echo form_close();?>
        			
            	<form method="post" role="form" id="recoverform" class="form-horizontal form-material"  action="<?php echo base_url();?>login/reset_password">
                <input type="email" name="email" class="form-control" placeholder="email" style="width:100%" required>

<div class="form-group text-center m-t-20">
                        <div class="col-xs-6">
		<a href="<?php echo base_url();?>"><button class="btn btn-info btn-rounded btn-sm text-uppercase" type="button" style="color:white"><i class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('Login');?></button></a>
		<button class="btn btn-success btn-rounded btn-sm  text-uppercase" type="submit" style="color:white"><i class="fa fa-key"></i>&nbsp;<?php echo get_phrase('Reset Password');?></button>
                        </div>
                    </div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <?php echo form_close();?>
            </div>
        </div>
	
    </section>
<script src="js/index.js"></script>	


<!-- jQuery -->
<script src="<?php echo base_url(); ?>witty/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>witty/bootstrap/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>witty/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>witty/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>witty/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>


<!--slimscroll JavaScript -->
<script src="<?php echo base_url(); ?>witty/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>witty/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>witty/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo base_url(); ?>witty/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

<script src="<?php echo base_url(); ?>witty/plugins/bower_components/toast-master/js/jquery.toast.js"></script>

<!-- These controls the login error flash message -->
<?php if (($this->session->flashdata('error_message')) != ""): ?>
	<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
           
            text: '<?php echo $this->session->flashdata('error_message'); ?>',
            position: 'top-right',
            loaderBg: '#f56954',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
	<?php endif; ?>




</body>

</html>
