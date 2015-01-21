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
  .ui-button-text{
    color: #ffffff;
  }
button{
    color: #ffffff;
}
.fz2
{
  font-weight: bold !important;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  font-size: 10.1pt;

}
  </style>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php require_once HELPERS_DIR .'logged-nav.p.inc';
require_once HELPERS_DIR.'inline.common.css.inc';
?>
<div id="middle" style="margin-top: 30px;">
<div id="middle_container" class="rounded7">
<input onclick="" />
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>
<?php 
Fm_User::load_customer_left_bardata($custid);
?>
<div class="column" id="rightcolumn" style="margin-top:-25px ;">
<div class="actionbox hidden" style="height: 95px; width: 220px;"> 
<div class="actionbox_note"> 
 Are you sure to <span style="color: #5aa5acc;"> Cancell</span> this freight?
</div>
<action style="cursor: pointer;">
<div class="actionbox_ok allow"></div>
<div class="actionbox_no denied"></div>
</action>
</div>

<div class="headerbox"><span class="pl">My Freight -<?= strtoupper($_GET['status'])?></span></div>

<div style="position: relative;padding: 10px 10px 10px 10px; width: 100%;">
<div style=""><img src="<?= Link::Build('public/images/cust/info_16.png','https') ?>" width="16" height="16" class="iconleft"> Note. To view quote details, accept or decline quotes please click on your freight listing</div><br>
<div class="successbox hidden hw" style="width:40%;">
    Freight succefully cancelled!
    </div>
<table style="font-size: 10pt;color: black; width: 100%;"  width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table"><tbody>

<?php 

switch($_GET['status'])
{     
    case 'active':
    $mstatus=1;
                print '<tr class="listing_header">
<td width="5%">&nbsp;</td>

<td width="28%">Freight / Date</td>
<td width="17%">Date Listed</td>
<td width="15%" align="left">Expire Date</td>
<td width="17%" align="left">Quotes / Questions</td>
<td width="10%" align="left">Status</td>

<td width="8%" align="left">&nbsp;</td>
</tr>';
    $csql = 'CALL _C_ACTIVEANDEXPIRED_FREIGHT_PF(:mstatus,:cid)';
    $cparams = array (':mstatus'=>$mstatus,':cid'=>$custid);
    require_once HELPERS_DIR.'freight_active_expires_cancell_c_status.inc';
    //print '<script type="text/javascript"> $(document).ready(function(){'; 
            //print "alert('Active'+".$custid.");";
            //print '});</script>';
    break;
    case 'expired':
    $mstatus=2;
            print '<tr class="listing_header"
><td width="5%">&nbsp;</td>
<td width="28%">Freight / Date</td>
<td width="17%">Date Listed</td>
<td width="15%" align="left">Expire Date</td>
<td width="17%" align="left">Quotes / Questions</td>
<td width="10%" align="left">Status</td>
<td width="8%" align="left">&nbsp;</td>
</tr>';
    $csql = 'CALL _C_ACTIVEANDEXPIRED_FREIGHT_PF(:mstatus,:cid)';
    $cparams = array (':mstatus'=>$mstatus,':cid'=>$custid);
    require_once HELPERS_DIR.'freight_active_expires_cancell_c_status.inc';
    //print '<script type="text/javascript"> $(document).ready(function(){'; 
            //print "alert('Active'+".$custid.");";
            //print '});</script>';
    break;
    case 'cancelled':
   
          print '<tr class="listing_header"
          <td width="5%">&nbsp;</td>
<td width="28%">Freight / Date</td>
<td width="17%">Date Listed</td>
<td width="15%" align="left">Expire Date</td>
<td width="17%" align="left">Quotes / Questions</td>
<td width="10%" align="left">Status</td>
<td width="8%" align="left">&nbsp;</td>
</tr>';
 $mstatus=0;
    $csql = 'CALL _C_ACTIVEANDEXPIRED_FREIGHT_PF(:mstatus,:cid)';
    $cparams = array (':mstatus'=>$mstatus,':cid'=>$custid);
    require_once HELPERS_DIR.'freight_active_expires_cancell_c_status.inc';
    break;
    case 'quoted':
    
          print '<tr class="listing_header"
><td width="5%">&nbsp;</td>
<td width="28%">Freight / Date</td>
<td width="17%">Date Listed</td>
<td width="15%" align="left">Expire Date-Amout</td>
<td width="17%" align="left">Quotes / Questions</td>
<td width="10%" align="left">Status</td>
<td width="8%" align="left">List book</td>
</tr>';
 $mstatus=1;
    $csql = 'CALL _get_CID_QUOTED_FREIGHT(:cid)';
    $cparams = array (':cid'=>$custid);
    require_once HELPERS_DIR.'cust_freight_quoted_list.inc';
    
    break;
    
}
?>
<script type="text/javascript">
function confirmFreightCancel(fid)
{
    $('.actionbox').removeClass('hidden'); 
    $('.actionbox').css('height','95px');
    $('.actionbox').css('width','220px');

       if($('.actionbox_ok').click(function()
       {
        //alert(fid);
        	$.get("http://freightmeta.com/testb/public/ajax.freight.status.php?freightnum="+fid, function(data){
		//alert(data);
        var res =data;
        
           if(res==200){  
          $('.actionbox').addClass('hidden');
          $('.successbox').removeClass('hidden'); 
           window.location.reload();
           return false;  
        }
        else{}
 
       });
       }));
       if($('.actionbox_no').click(function()
       {
        $('.actionbox').addClass('hidden'); 
       }));   
    
}

</script>
<script type="text/javascript">
    $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'1040',
                height: '500',
                autoDimensions:false
                //padding:'10'  
            });
            
                 
		});
        
        
	</script>
</tbody>
</table>
</div>
</div>
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
    
    
   
    
    
    


