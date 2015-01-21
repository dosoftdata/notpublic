<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | Contact us</title>
  <script type="text/javascript" >
function myfun(value)
{
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		
		//alert(xmlhttp.responseText);
    document.getElementById("status").innerHTML=xmlhttp.responseText;
	
	
    }
  }
  //alert(document.getElementById("txtHint").innerHTML);
xmlhttp.open("GET","captcha_ajax.php?captcha="+value,true);
xmlhttp.send();
	//alert(value);
	//document.form1.submit();
}
function click_refresh()
{
	document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();
	document.getElementById('status').innerHTML="";
	document.getElementById('captcha-form').value="";
}
</script>
    </head>
    <body onload="">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
//require_once HELPERS_DIR .'i18n.php'; 
?>
<script type="text/javascript">
function equalHeight(group) {
   tallest = 0;
   group.each(function() {
      thisHeight = $(this).height();
      if(thisHeight > tallest) {
         tallest = thisHeight;
      }
   });
   group.height(tallest);
}
$(document).ready(function() {
   equalHeight($(".column"));
});


</script>
      <div id="middle">
    <div id="middle_container" class="rounded7" style="top: 1px !important;">
    
<div class="row">
    <h1>Contact Us</h1>
    <div class="sep"></div>
    <div style="width: 45%; border-right: 1px solid #e0e0e0; padding-right: 20px;" class="column fl">
    
	At Freightmeta, we are here to help you at all times.  You can easily contact us by e-mail.<br /><br />Please note that if you are looking for a transport quote, Freightmeta is not a transporter, but an online service that allows you to obtain quotes from multiple transport companies. Simply <a class="fzcolored" href="<?= Link::Build('public/add_freight'); ?>">Click Here</a> to list your freight on our site (Free).<br /><br />
    <div style="width:45%; margin-right:10px; margin-bottom:15px;" class="fl">  
		<strong>Freightmeta</strong><br /> LONDON,UK</div>
	</div>
    <div style="float:left; width:50%; padding-left: 20px;" class="column">

If you need further help, please enter in your enquiry below and we'll respond asap. <br />
<br />
<div class="row fw" style="">
<span class="send-status hidden"> <img alt="Loading---" src="images/loaders/anim_wait_bar_mini_01.gif" width="16px" height="16px" /></span>
<span class="status-send hidden"></span>
</div>
<form action="#" method="post" name="contactform" id="contactform">
<input type="hidden" name="tast" id="tast" value="contact_us" />
  <div class="errorbox" id="VDaemonID_1" style="display:none"></div>
	<style>
    table, tr, td{
        border: none;
    }
    </style>
    
    	<table style="color: black;" width="100%" border="0" align="center" cellpadding="3" cellspacing="3" style="border: none;">
		  <tr>
			 <td width="40%">Name: <span class="requiredtxt">*</span> </td>
			 <td width="60%"><input name="contactname" type="text" class="control fw required" id="contactname" placeholder="First name and Last name" />
				</td>
		  </tr>
		  <tr>
		  	<td>Company:</td>
		  	<td><input name="contactcompany" type="text" class="control fw " id="contactcompany" placeholder="Compagny Name, Location"  /></td></tr>
		  <tr>
		  	<td>E-mail: <span class="requiredtxt">*</span> </td>
		  	<td><input name="contactemail" type="text" class="control fw required email" placeholder="E-mail address" id="contactemail" />
				</td>
	  	</tr>
		  <tr><td valign="top">Subject:<span class="requiredtxt">*</span></td><td><input name="contactreason" type="text" class="control fw required" id="contactreason" placeholder="Title" /></td></tr>
          <tr>
			 <td valign="top">What can we help you with today? <span class="requiredtxt">*</span></td>
			 <td>
             <textarea name="contactcomments" maxlength="300" rows="9" class="control fw required" id="contactcomments" placeholder="Write description here! "></textarea>
				<span class="char-counter fr bold lighttext" style="position: relative; margin-top: -18px; padding-right: 30px;"> 300 </span>
                </td>
		  </tr>
		  <tr>
          <td valign="top">
			 User Validator Text:<span class="requiredtxt">*</span>
             </td>
             <td>
             <center>
             <form method="GET" name="form1">
             
             <table border="1" cellpadding="0" cellspacing="0">
             <tr>
             <td valign="top">
             <input class="required control fw" type="text" placeholder="Security Text" name="captcha" id="captcha-form" onblur="myfun(this.value)" onkeyup="myfun(this.value)" /><br/>
             </td>
             <td valign="top">
                <img  width="105px" height="30px"src="captcha.php" id="captcha" /><br/>
               </td>
                <td valign="top">
       <a href="javascript:;" onclick="click_refresh()" id="change-image"><img src="images/ajax-refresh-icon.png" alt="walkswithme captcha validation" /></a>
       </td>
             </tr>
             <tr >
             <td valign="top" style="position:relative;top: -13px;">
             <div id="status"></div>
             </td>
             </tr>
             </table>

             </td>
             </form>
               </center>
		  </tr>
		  <tr>
			 <td valign="top">&nbsp;</td>
			 <td>
             <div class="uibutton fr">
												<button type="submit" class="btn-primary rounded7 contactus" onclick="">Send</button>	
												<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
				</div>
             
             </td>
		  </tr>
		</table>
     <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script class="hidden" type="text/javascript" src="<?= SITE_URL?>public/js/ValidSoldFreight_Ajax.js"></script> 
<div style="display:none"><input type="hidden" name="VDaemonValidators" value="866f3313d5248c951121ffd005c08db1eNqtkk1vwjAMhv+Lr5PWlu+ZU8XgCBOT0K5Zm7WRkqYkKdJU9b8vbsNA4gISN8ev/divlR0mY4TV4f3A5L6pnFAccIatxTcE+2G005mWsLQ4RyidqzGK6DUllRWc4mSEEGW6cixzr3VZn/XUFJbiGCEAbFplpTZXSarbaKN6ToIQMD8hNUNgW51zz2E4xlZgvNwR6UtJygMlB8qWKX6mnOSJSZEzN8wiSuqc6SkTapggVKF+PoR7fqSXF9xv3QsLBMOPjTA8D3W0nBmucQXwdG6MskU/3V+TNnm5tHb9Ldln8/3vJMa26wQmz/biV+aKCfmgmWlou3XjCWtS7rIzerad4UMoxStnH7S0uHTeuvKlqyDeYazr/gAskf8O" /></div>
</form>

</div>
    <!--div style="width: 45%; border-right: 1px solid #e0e0e0; padding-right: 20px;" class="column fl">
    
	At Freightmeta, we are here to help you at all times.  You can easily contact us by email, post or phone.<br /><br />Call us on <span style="font-weight: bold">1300 797 464</span> to speak to your local Freightmeta Representative. <br /><br />Please note that if you are looking for a transport quote, Freightmeta is not a transporter, but an online service that allows you to obtain quotes from multiple transport companies. Simply <a href="list_freight1.html">Click Here</a> to list your freight on our site (Free).<br /><br />
	</div>
	<div style="width:45%; margin-right:10px; margin-bottom:15px;" class="fl">  
		<strong>Freightmeta</strong><br />27 - 29 Micro Circuit<br />Dandenong South, VIC, 3175<br />Ph : 1300 797 464<br /></div>
	
	</div!--->
    <!--!-->
    <!--  end of content -->
	</div>
			<div class="clear"></div>
    </div>
  </div>
<script type="text/javascript">
(function($) {
    $.fn.extend( {
        limiter: function(limit, elem) {
            $(this).on("keyup focus", function() {
                setCount(this, elem);
            });
            function setCount(src, elem) {
                var chars = src.value.length;
                if (chars > limit) {
                    src.value = src.value.substr(0, limit);
                    chars = limit;
                }
                elem.html( limit - chars+'/'+limit);
            }
            setCount($(this)[0], elem);
        }
    });
})(jQuery);
      $.noConflict();
		jQuery(document).ready(function($) {      

 var elem = $(".char-counter");
$("#contactcomments").limiter(300, elem);
        });//end script  
    //setTimeout(function(){$('.modal').modal('show');},5000);     
</script>

<?php require_once 'footer.php';?>