<?php
require_once 'header.php';?>
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

<style>

/* Core CSS */
#box
{
	background: white;
	
	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 
}

#box-inner
{
	background: white;
	margin-top: -30px;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 

	/* transform z-index hack */	
	-moz-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	transform: rotate(0deg);
}

#box:before
{
	content: '';
	position: relative;

	margin-left: 3%;
	top: 0px;


	background: white;
	display: block;
	width: 25px;
	height: 25px;

	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
    border-radius: 10px;
}

#box
{
	width: 90%;
}

#box-inner
{
	padding: 5px;
}

.fzbox{
    font-size: 15px;
}


</style>

<style>
#box2
{
	background: white;
	
	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 
}

#box-inner2
{
	background: white;
	margin-top: -15px;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 

	/* transform z-index hack */	
	-moz-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	transform: rotate(0deg);
}

#box2:before
{
	content: '';
	position: relative;
    margin-left: 94%;
	top: 0px;
	background-color:#5aa5cc;
	display: block;
	width: 25px;
	height: 25px;

	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
}


#box2
{
   margin-top: 20px;
	width: 80%;
}

#box-inner2
{
	padding: 5px;
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
Fm_User::load_customer_left_bardata(15);
?>
<div class="column" id="rightcolumn">

<div class="headerbox" style="padding: 10px 10px 10px 10px; padding-left: 30px;">Answers to the question below</div>
<div class="successbox hidden">
    Question succefully answered!
    </div>

<div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
<div class="formwidth " style="padding:10px 10px 10px 10px; ">
<div style="position: relative;padding: 10px 10px 10px 10px; width: 100%; margin-top: -40px;">
<div style=""><img src="images/cust/info_16.png" width="16" height="16" class="iconleft"/> Note. To view quote details, accept or decline quotes please click on your freight listing</div><br/>
<!-- the good stuff -->
	
<?php Fm_User::load_askedquestion_answer(15) ?>

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
                width:'650',
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
    
    
   
    
    
    


