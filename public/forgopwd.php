<?php

// Start output buffer
ob_start();
require_once 'header.php';?>
  <title><?= SITE_NAME?> | Forgor password </title>   
   </head>
    <body class="claro">
       <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<style>
.popup-title{
	font-weight:bold;
	font-size:18px;
	margin-bottom:20px;
	padding-bottom:7px;
	border-bottom: 1px dotted #cccccc;
}
.success_message{
	border:2px solid #629f13;
	background-color:#f4f4f4; 
	padding:15px;
	margin-top:10px; 
	margin-bottom:20px;	
	background-image:url(../public/images/gen/tick_48.png);
	background-repeat:no-repeat;
	background-position:top left;
	padding-left:70px;
	min-height:25px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
    color: black;
}
.success_message_header{
	font-size:18px;
	font-weight:bold;
	margin-bottom:5px;
    color: black;	
}

.faillur_message{
	border:2px solid red;
	background-color:#f4f4f4; 
	padding:15px;
	margin-top:10px; 
	margin-bottom:20px;	
	background-image:url(../public/images/gen/alert.png);
	background-repeat:no-repeat;
	background-position:20px 20px;
	padding-left:70px;
	min-height:25px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
    color: black;
}
.faillur_message_header{
	font-size:18px;
	font-weight:bold;
	margin-bottom:5px;
    color: black;	
}
#loaderimage{
	margin-left:5px;
	padding-top:6px;
}
</style>
<div id="success" class="hidden">
		<div class="success_message">
			<div class="success_message_header">Password Sent</div>
			<ul style="margin-left: -50px;">
				<li>Your password has been reset and emailed to you.</li>	
			</ul>
		</div>
	</div>
 <div id="faillur" class="hidden">
		<div class="faillur_message">
			<div class="faillur_message_header">Password NOT Sent</div>
			<ul style="margin-left: -50px;">
				<li><strong style="font-weight: lighter; font-size: 11pt;">Not freightmeta account is set yet.</strong></li>	
			</ul>
		</div>
	</div>
<div id="pwdforgot" style="margin-left:0; margin-top:0px; text-align:left; color: black;">

<div style="width:400px; padding: 20px;">


	<div class="popup-title">Forgot Password</div>
	
	<div id="passwordtext">
	Simply enter your email address in the below field, and your password will be automatically reset and sent to you via email. Email address must be email address attached to your account.
	 <br /><br />If you no longer have access to the email you registered with then contact Freightmeta <a style="color: #5aa5cc;" href="<?= SITE_URL ?>/public/contact_us" target="_top"> support</a>.<br /><br />
	</div>
	
				
	
	<div id="receiver-forgot" class="receiver"></div>
	   <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/mktSignup _login.js"></script> 
 	
	<form action="#" method="post" onsubmit="return false;" id="form-forgot">
	<input type="hidden" id="fmloginall" name="fmloginall" value="pwd" />

		<div class="row">		
			<div class="formlabel_newline">Email Address<span class="requiredtxt">*</span>:</div>
			<input  name="usrnm" type="text"  class="required email control"  remote="emails.action" maxlength="100" id="usrnm" autocomplete="off" value=""  style="width:95%;">
		</div>
		<!-----ajax_form_popup('form-forgot', '<?=SITE_URL ?>public/scripts/ajax_forgot_password.php', 'receiver-forgot', 'forgotpassword');!--->
		<div class="uibutton" style="position: relative; margin-top: 10px;">
			<button type="submit" class="btn-primary" onclick="$('#loaderimage').show(); ">Reset Password</button>	
			<img src="<?= SITE_URL ?>public/images/ajax-loader.gif" id="loaderimage" style="display:none" />
		</div>	


	</form>								
				
															
</div>	
</div>  
<?php 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
?>  
