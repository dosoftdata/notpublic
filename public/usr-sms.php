<?php
require_once 'header.php'; 
$custid =Util::StrCookie('susrid');
$page = Util::StrGet('display');

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
<div class="headerbox">My Messages - <?= $page ?></div>
<form method="post" action="">
<input name="save" type="hidden" value="1"/>
<!--div style="margin-bottom:15px;">
<div style="float:left">Mark as: 
<select name="markas" class="control" onchange="gsubmit();">
<option value="">Select</option><option value="read">Read</option>
<option value="unread">Unread</option>
</select>
</div>
<div style="float:left; margin-left:40px;">Show: 
<select name="display" id="display" class="control" onchange="fchangeMessageDisplay();">
<option value="all">All Messages</option>
<option value="unread" selected="">Unread Messages</option>
<option value="read">Read Messages</option>
<option value="archived">Archived Messages</option>
</select></div>
<div class="clear"></div>
</div!---><div style=""></div>

<table style="color: black;" width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
<tbody>
<?php 
Fm_User::GETSMSURI($page,$custid)
?>

 </tbody>
 </table>
 <br />
 </form>
 </div>
</div>


<div class="clear"></div>
</div>
</div> 
<script type="text/javascript">

    $.noConflict();
	jQuery(document).ready(function($) {
            
    $('.acceptcp').click(function(){
        
      proccessacceptcp(); 
        
    });
    $('.cancellcp').click(function(){
       $('.actionbox').removeClass('hidden'); 
       if($('.actionbox_ok').click(function()
       {
        proccesscancellcp();
       }));
       if($('.actionbox_no').click(function()
       {
        $('.actionbox').addClass('hidden'); 
       }));
    });
    var cpid = $('#cpid').val();
    var cid = $('#cid').val();
    var action ; 
    //switch(cpid)   
   function proccesscancellcp()
   {
      action = $('#cancellcp').val();
   
   $.get("http://freightmeta.com/testb/public/ajax.accept_cancell_contratproposal.php?cid="+cid+"&cpid="+cpid+"&action="+action, function(data){
		//alert(data);
        var res =data;
        
        if(res === 201){ 
            alert('allow:'+res);
          $('.successbox').removeClass('hidden');    
        }
        else{     
            
        }
        });

    //alert('allow');
   }//end func
   function proccessacceptcp(){
    action = $('#acceptcp').val();
    
    switch(action){
        case '':
        return false;
        break;
        case 200:
        $.get("http://freightmeta.com/testb/public/ajax.accept_cancell_contratproposal.php?cid="+cid+"&cpid="+cpid+"&action="+action, function(data){
		//alert(data);
        var res =data;
        
        if(res === 200){ 
            alert('allow:'+res);
          $('.successbox').removeClass('hidden');    
        }
        else{     
            
        }
 
       });
        return true;
        break;
   }
   }
            
		});
        
	</script>
<?php 
require_once HELPERS_DIR .'inline.common.css.inc';
require_once HELPERS_DIR .'footer_content.php'; 
require_once HELPERS_DIR .'foot-main-content.php';
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
?>   
    
    
   
    
    
    


