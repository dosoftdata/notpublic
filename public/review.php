<?php
require_once 'header.php';
$custid =Util::StrCookie('susrid');
//$custid = 25;
?>
  <title><?= SITE_NAME?> | <?=  'Username'?></title>
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

<div class="headerbox" style="padding: 10px 10px 10px 10px; padding-left: 30px;">Rate and Review transporter provider</div>
<div class="successbox hidden">
    Passowrd succefully changed!
    </div>

<div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
<div class="formwidth " style="padding:10px 10px 10px 10px; ">
<?php  Fm_User::cratereview($custid); ?>
  <span ></span>
</tbody>
</table>
</div>
</div>
</div>


<div class="clear"></div>
</div>
</div> 
<script type="text/javascript">
    $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'600',
                height: '380',
                autoDimensions:false
                //padding:'10'  
            });
		});
	</script>
<?php 
require_once HELPERS_DIR .'footer_content.php'; 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
?>   
    
    
   
    
    
    


