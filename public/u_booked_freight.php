<?php
require_once 'header.php'; 
$custid =Util::StrCookie('susrid');
$page = Util::StrGet('bstatus');
?>
  <title><?= SITE_NAME?> | <?=  'Booked Freight'?></title>
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
<div class="headerbox">My Bookings - <?= $page ?></div>
<div style="position: relative;padding: 10px 10px 10px 10px; width: 100%;">
<div style=""><img src="<?= Link::Build('public/images/cust/info_16.png') ?>" width="16" height="16" class="iconleft"> Note. To view quote details, accept or decline quotes please click on your freight listing</div><br>
<table style="font-size: 10pt;color: black; width: 100%;"  width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table"><tbody>

<?php 
switch($page)
    {
        case 'booked':
        $mstatus=3;
        return  Fm_User::_CFREIGHTBOOKING($mstatus,$custid);
        break;
        case 'cancelled' :
        $mstatus=0;
        return Fm_User::_CFREIGHTBOOKING($mstatus,$custid);
        break;
        $mstatus=5;
        case 'complete':
        return Fm_User::_CFREIGHTBOOKING($mstatus,$custid);
        break;
        
    }
//Fm_User::GETFREIGHTBOOKINGSURI($page,$custid);
?>

</tbody>
</table>
</div>
</div></div>