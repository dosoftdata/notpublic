<?php
// Activate session 

// Start output buffer
ob_start();
require_once 'header.php';?>
  <title><?= SITE_NAME?> | Login </title>    </head>
    <body class="claro">
       <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<?php 
//require_once HELPERS_DIR .'nav.php';
//require_once HELPERS_DIR .'i18n.php'; 
?>
<style>
    table, tr, td{
        border: none;
    }
    </style>
    
<script type="text/javascript">
      $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'400',
                height: '300',
                autoDimensions:false
                //padding:'10'  
            });
		});
	</script>

 <div id="error_box_main" class="arrow_box">
  </div> 
  
  <div id="fm_login_container" class="mainboxshadow rounded7">
   <form action="#" method="post">
   <input type="hidden" alt="addf" name="mlogin" id="mlogin" value="<?= $_GET['lfrom'] ?>" />
  
  <h1  class="fw"style="border-radius: 7px 7px 0 0; font-size: 25pt;"> 
  <span class="fl fw" style="position:absolute;padding:10px; left: 0px;">Login - Freightmeta</span>
  </h1>
  
  <table style="color: black;" class="pl">
  <tr>

  <td> 
   <span>Email or username</span>
   <span class="requiredtxt">*</span>:
  </td>
  </tr>
  <tr>
  <td> 
  <input placeholder="Enter your Username or E-mail here..." style="width: 450px; height: 35px;" class="required input"  maxlength="100" type="text" name="fm_usrnm" value=""  id="usrnm" autocomplete="off"/>
  </td>
  </tr>
  </table>
  <table style="color: black;">
   <tr>
  <td> Password<span class="requiredtxt">*</span> :</td>
  </tr>
  <tr>
  <td>
   <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/mktSignup _login.js"></script> 
 
  <input placeholder="Enter your password here..." class="required logusrpwd input" style="width: 450px; height: 35px;"  type="password" name="fm_usrpwd" value="" id="usrpwd" autocomplete="off" />
  </td>
  </tr>
  </table>
  <table style="color: black; border-bottom: 1px dotted grey; padding-bottom: 20px;">
   <tr>
   <td style="width: 20px;">
    <input  checked="1" style="width: 20px; height: 20px;" type="checkbox" name="fm_keepmein" id="fm_keepmein" value="keepmein" />
   </td>
   <td>
   <span style="font-weight: lighter;">Log me on automatically each visit</span>
   </td>
  </tr>
  </table>
  <table style="margin-top: 10px;">
  <tr>
  <td>
  
  <div class="uibutton ">
		<button type="submit" class="fr btn-primary rounded5" onclick="">Login - Freightmeta</button>	
		<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
  </div>
  </td>
  </tr>
  <tr>
    <?php  
       //  print "Session login :" .$_SESSION['login'];
  
  // dirname(dirname(__FILE__)).'/public/header.php'; ?>
  </tr>
  </table>
  </form>
  <table>
  <tr>
  <td style="top: -55px;">
 <a  class="iframe  fancybox.iframe" href="forgopwd.php?forgot=pwd" style="text-decoration: underline;font-weight: lighter;color: black; font-size: 12px;">Forgot your password?</a><br />
 <a  class="iframe  fancybox.iframe" href="forgotusrnm.php?forgot=usrnm"  style="text-decoration: underline; font-weight: lighter;color: black;font-size: 12px; margin-top: -26px;">Forgot Username</a>
  </td>
  </tr>
  </table>
  </div>
  <div style="clear: both;"></div>  
<?php require_once HELPERS_DIR .'foot-main-content.php';?>

