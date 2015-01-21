<?php
require_once 'header.php';
$custid =$_COOKIE["susrid"];
//Fm_User::sidlog(); 
//usrlogin::check_session_login(); 
//usrlogin::admin_access($custid)
?>

  <title><?= SITE_NAME?> | <?php //$_COOKIE['cusrname']?></title>
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
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>

<?php 
//$_COOKIE["susrid"]
  Fm_User::load_customer_left_bardata($custid); 
  //require_once HELPERS_DIR .'user_profile_menu.inc';
?>

<div class="column" id="rightcolumn">
<div class="actionbox hidden" style="height: 95px; width: 220px;"> 
<div class="actionbox_note"> 
 Are you sure to <span style="color: #5aa5acc;"> Cancell</span> this freight?
</div>
<action style="cursor: pointer;">
<div class="actionbox_ok allow"></div>
<div class="actionbox_no denied"></div>
</action>
</div>
<div class="headerbox"><span class="pl">My Messages</span></div>
<form method="post" action="/messages.php?display=unread&amp;">
<input name="save" type="hidden" value="1"/>
<div style="margin-bottom:15px;">
<div class="clear"></div>
</div><div style=""></div>
<table style="color: black;" width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
<tbody>
<?php 
//$_COOKIE["susrid"]
Fm_User::ONLOAD_C_SMS(1,$custid)
?>

 </tbody>
 </table>
 
 </form>
  
 <div class="headerbox"><span class="pl">Freight listed</span></div>
<div style="position: relative;padding: 10px 10px 10px 10px; width: 100%;">
<div style=""><img src="images/cust/info_16.png" width="16" height="16" class="iconleft"> Note. To view quote details, accept or decline quotes please click on your freight listing</div><br>
<div class="successbox hidden hw" style="width:40%;">
    Freight succefully cancelled!
    </div>

<table style="font-size: 10pt;color: black; width: 100%;"  width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table"><tbody>

<?php 
$_COOKIE["susrid"];
Fm_User:: _ONLOAD_FREIGHT_ACTIVE(1,$custid);
?>
<script type="text/javascript">
function confirmFreightCancel(fid)
{
    $('.actionbox').removeClass('hidden'); 
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
    
    
   
    
    
    


