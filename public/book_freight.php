<?php
require_once 'header.php';
$custid= usrlogin::sid_value();
$quoteid=Util::StrGet('quoteid');
usrlogin::sid_value();
usrlogin::fm_login_check();
usrlogin::divdisplay_before_login();
usrlogin::sender_login_check();
usrlogin::sessionfreightdivset();
?>
  <title><?= SITE_NAME?> | Book freight</title>
    </head>
    <body style="color: black;">
    <div class="fm_dialog diologrounder7 hidden"></div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<style>

table, tr, td, th{
    border: none;
}
.formlabel{
	width:30%;
    }
    .item{
	width:100%;
	border-bottom: 1px solid #e5e5e5;
}
     .list-left{
	float:left;
	width:40%;
	text-align:left;
	font-weight:bold;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
.list-right{
	float:left;
	width: 50%;
	text-align:left;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
.left{
    float: left;
}
#divleft{
    position: absolute;
    left: 0;
    float: left;
    top: 40px;
    width: 50%;
    padding: 20px;
}
#divright{
    position: absolute;
    left: 520px;
    float: left;
    top: 20px;
    width: 50%;
}
</style> 
    <div id="middle">
 <div id="middle_container" >
 <div id="error_box_main" class="arrow_box">
  </div>
<div id="f1_main_content" class="rounded7" style="background: none;height: 500px; margin-top: 20px; padding-top: 0px;">
<div style="margin:20px; margin-top: 14px; text-align:left;">
<div style="width:970px; margin-bottom:20px;">

	<div class="popup-title">Quote booking</div>
		
<?php
fm_freight::function_FREIGHT_ON_BOOKING_INFOS($quoteid,$custid);
?>		
</div></div> 
 </div></div>  </div> 
<?php  
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
        
?>