<?php
// Activate session 
session_start();
// Start output buffer
ob_start();
require_once 'header.php';?>
  <title><?= SITE_NAME?> | Forgot Username </title>   
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
			<div class="success_message_header">Username Sent</div>
			<ul>
				<li>Your username has been emailed to you. Please allow a couple of minutes for the email to come through.</li>
			</ul>
		</div>
	</div>
 
  <div id="faillur" class="hidden">
		<div class="faillur_message">
			<div class="faillur_message_header">Username NOT Sent</div>
			<ul style="margin-left: -50px;">
				<li><strong style="font-weight: lighter; font-size: 11pt;">Not freightmeta account is set yet.</strong></li>	
			</ul>
		</div>
	</div>
<div id="usrnmforgot" style="position: relative; margin-left:0;margin-top:0; text-align:left; color: black;">
<div style="width:400px; padding: 20px;">

	<div class="popup-title">Forgot Username</div>
	
	<div id="usernametext">
	Simply enter your email address in the below field, and your username will be sent to you via email. Email address must be email address attached to your account.
	 <br /><br />If you no longer have access to the email you registered with then contact Freightmeta<a style="color: #5aa5cc;" href="<?= SITE_URL ?>/public/contact_us.php" target="_top"> support</a>.<br /><br />
	</div>
	
				
	
	<div id="receiver-forgot" class="receiver"></div>
		   <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/mktSignup _login.js"></script>  
 		
	<form action="#" method="post" onsubmit="return false;" id="form-forgot">
	 <input type="hidden" id="fmloginall" name="fmloginall" value="usrnm" />
    <input type="hidden" name="token" value=""/>

		<div class="row">		
			<div class="formlabel_newline">Email Address<span class="required1">*</span>:</div>
			<input  name="usrnm" type="text"  class="required email control"  remote="emails.action" maxlength="100" id="usrnm" autocomplete="off" value=""  style="width:95%;">
		</div>
		
		<div class="uibutton" style="position: relative; margin-top: 10px;">
			<button type="submit" class="btn-primary" onclick="$('#loaderimage').show(); ">Send Username</button>	
			<img src="<?= SITE_URL ?>public/images/ajax-loader.gif" id="loaderimage" style="display:none" />
		</div>
	</form>																							
</div>	
</div>

 <script type="text/javascript">
$(function() {
	//$("button, input:submit").button();
});
</script>
  <style type="text/css">
.formlabel{
	width:30%;
}
</style>  
<?php 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
?>

