<?php
require_once 'header.php';
$custid =Util::StrCookie('susrid');
//$custid = 25;
?>
  <title><?= SITE_NAME?> | <?php // $_COOKIE['cusrname']?></title>
  <style type="text/css">
 .successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;
    width: 70%;	
	padding: 10px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 15px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
} 
  
  </style>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php require_once HELPERS_DIR .'logged-nav.p.inc';?>
<div id="middle" style="margin-top: 30px;">
<div id="middle_container" class="rounded7">
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>
<?php 
Fm_User::load_customer_left_bardata($custid);
?>



<div class="column" id="rightcolumn">

<div class="headerbox" style="padding: 10px 10px 10px 10px; padding-left: 30px;">Update My Password</div>
<div class="successbox hidden">
    Passowrd succefully changed!
    </div>
<div style="padding: 20px;">
<div class="formwidth" style="padding:10px 10px 10px 10px">
<div id="receiver-password" class="receiver"></div>
<form action="" method="post" onsubmit="return false;" id="form-password">
<input name="cpwdurl" type="hidden" id="cpwdurl" value="cpwd"/>
<input name="customerid" type="hidden" id="customerid" value="<?=$custid ?>"/>
<div class="row">
<div class="formlabel">Old Password:<span class="requiredtxt">*</span></div>
<div class="forminput">
<input class="input" name="old_passwd" type="password" class="control required" id="old_passwd"/></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="sep"></div>
<div class="row">
<div class="formlabel">New Password:<span class="requiredtxt">*</span></div>
<div class="forminput">
<input  name="new_passwd" type="password" class="required password control input" id="usrpwd"/>
</div>
<div class="clear"></div>
</div>
<div class="row">
<div class="formlabel">New Password Confirm:</div>
<div class="forminput">
<input equalTo="#usrpwd" name="new_passwd2" type="password" class="control required input" id="new_passwd2"/></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="sep"></div>
<div class="uibutton">
<button type="submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" role="button" aria-disabled="false">
<span class="ui-button-text btn-primary">Change Password</span>
</button>
</div>
</form>
</div>
</div>
</div>

  <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/mktSignup _login.js"></script>

<div class="clear"></div>
</div>
</div> 
<?php 
require_once HELPERS_DIR .'footer_content.php'; 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
?>   
    
    
   
    
    
    


