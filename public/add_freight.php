<?php
  #remove the directory path we don't want
  //$request  = str_replace("/testb/public/","", $_SERVER['REQUEST_URI']);
  #split the path by '/'
  //$params     = split("/", $request);
  require_once 'header.php';
  usrlogin::access_add_freightpage();
  ?>
  <title><?= SITE_NAME?> | Add freight</title> 
 <style type="text/css">

.preview
{
width:100px;
border:solid 1px #dedede;
padding:10px;
height: 100px;
margin-left:145px;
margin-bottom: 5px;
}
#preview
{
color:#cc0000;
font-size:12px

}
.note{
    position: relative;
    margin-top: -2px;
    font-weight: bold;
    margin-left: 140px;
    
}
 </style> 
 </head> 
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!-- This div is used to indicate the original position of the scrollable fixed div. -->
  <?php 
  usrlogin::fmpagelogincontrole(HELPERS_DIR .'add_f_menu.php',HELPERS_DIR .'logged-nav.p.inc','usrdiv');
  //require_once HELPERS_DIR .'add_f_menu.php';
  ///require_once HELPERS_DIR .'i18n.php';  
?>
<div style="position: absolute; top:0px;"></div>
 <div id="middle" style="color: black; top:0px;">
 <div id="middle_container" >    
<div class="container_2">
 <table cellpadding="0" cellspacing="0" border="0" >
  <div id="addfreight_container_title" class="bluebgimg">
            <span style="color: #FFFFFF; position: absolute;left: 58px;top: -5px; font-size: 35px;">
                Need Something Moved?
            </span>
            <br />
            <span style="color: white;position: relative; margin-left: 58px;top: 17px; font-size: 10pt; font-weight: lighter;" >
                Tell us what you need to move and receive free quotes from customer-rated transport providers. You can save upto 60%
            </span>
            <img  alt="Free Quotes" src="<?= SITE_URL?>public/images/gen/freequotes2.png" class="fl rounded7 ro2d" style="position:absolute;width: 75px;height: 60px;top: -2px; background-size: 100% 100%;left:-15px;" />
          </div>
  </table> 
<?php
require_once HELPERS_DIR .'add_freight_status_css.inc';
?>
  <div class="fmloader" style="top: 30%;"></div>
     
 <div class="grid_1 alpha pull_1 fl rounded7" style="left: -10px;">
 <div id="tabs" class="fw" style="border:none; padding:0px;">
 <ul style="background: none;border: none;">
		<li><a class="listfreight" href="#listfreight">List your freight</a></li>
		<li><a class="transporterinfo" href="#transporterinfo" onclick="transporterinfo()">Carrier Review</a></li>
	</ul>
 <div id="listfreight">
  <!-- start of left column -->
 <?php
require_once HELPERS_DIR .'freightnew_review_discount/freightnew.php';
?>
	
    
    <div  id="lodgin2freight" class="hidden" style="z-index: 999999; "  >
    <div id="fm_login_container" style="z-index: 999999; background-color: #3C3C3C; height: 300px;" class="mainboxshadow rounded7">
   <form id="loging2" action="#" method="post">
   <input type="hidden" alt="addf" name="mlogin" id="mlogin" value="<?= $_GET['lfrom'] ?>" />
  
  <h1  class="fw"style="border-radius: 7px 7px 0 0; font-size: 25pt;"> 
  <span class="fl fw" style="position:absolute;padding:10px; left: 0px;">Login - Freightmeta</span>
  </h1>
  
  <table style="color: black; position:relative;top: -95px;" class="pl">
  <tr>
  <td> 
  <input placeholder="Enter your Username or E-mail here..." style="width: 450px; height: 35px;" class="required input"  maxlength="100" type="text" name="fm_usrnm" value=""  id="usrnm" autocomplete="off"/>
  </td>
  </tr>
  </table>
  <table style="color: black; position:relative;top: -95px;">
  <tr>
  <td> 
  <input placeholder="Enter your password here..." class="required logusrpwd input" style="width: 450px; height: 35px;"  type="password" name="fm_usrpwd" value="" id="usrpwd" autocomplete="off" />
  </td>
  </tr>
  </table>
  
  <table style="color: black; border-bottom: 1px dotted grey; padding-bottom: 20px; position:relative;top: -95px;">
   <tr>
   <td style="width: 20px;">
    <input  checked="1" style="width: 20px; height: 20px;" type="checkbox" name="fm_keepmein" id="fm_keepmein" value="keepmein" />
   </td>
   <td>
   <span style="font-weight: lighter; color: white;">Log me on automatically each visit</span>
   </td>
  </tr>
  </table>
  <table style=" position:relative;top: -95px;">
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
  <table style="position:relative;top: -95px; color: white;">
  <tr>
  <td style="top: -55px;">
 <a  class="iframe  fancybox.iframe" href="forgopwd.php?forgot=pwd" style="text-decoration: underline;font-weight: lighter;color: black; font-size: 12px; color: #FFFFFF;">Forgot your password?</a><br />
 <a  class="iframe  fancybox.iframe" href="forgotusrnm.php?forgot=usrnm"  style="text-decoration: underline; font-weight: lighter;color: black;font-size: 12px; margin-top: -26px; color: #FFFFFF;">Forgot Username</a>
  </td>
  </tr>
  </table>
  </div>
    </div>
    		<!-- end of left column -->
 </div>
	<div id="transporterinfo">
          <div style="">
         <div id="pagination_system">
         
         </div> 
         </div>           
       </table>
    <!--div id="shipdiscount" title="Shipping discount">

  <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>

</div>
<button id="opener">Open Dialog</button>
    </p>
    <div id="dialog-message" title="Download complete">

  <p>

    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>

    Your files have downloaded successfully into the
    My Downloads folder.

  </p>

  <p>

    Currently using <b>36% of your storage space</b>.

  </p>

</div>

 

<p>Sed vel diam id libero <a href="http://example.com">
rutrum convallis</a>. Donec aliquet leo vel magna. 
Phasellus rhoncus faucibus ante. Etiam bibendum, enim 
faucibus aliquet rhoncus, arcu felis ultricies neque, 
sit amet auctor elit eros a lectus.</p>

<div class="rowblueborder fw rounded5">
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> 1</td>
<td class=""> 2</td>
<td></td><td></td>
<td class=" hw3">
<span class="fr" style="padding-right: 20px; position: relative;"> 3</span>
</td>
</tr>
</table>
</div>
<div class="rscontent fw ">
Lorem ipsum dolor sit amet.Basic version | All caps version
</div>
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> </td>
<td class=""> </td>
<td></td><td></td>
<td class="hw">
<span class="fr" style="padding-right: 20px; position: relative;"> 3</span>
</td>
</tr>
</table>
</div>

</div> 
<div class="sep2"></div>
<div class="rowblueborder fw rounded5">
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> 1</td>
<td class=""> 2</td>
<td></td><td></td>
<td class=" hw3">
<span class="fr" style="padding-right: 20px; position: relative;"> 3</span>
</td>
</tr>
</table>
</div>
<div class="rscontent fw ">
Lorem ipsum dolor sit amet.Basic version | All caps version
</div>
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> </td>
<td class=""> </td>
<td></td><td></td>
<td class="hw">
<span class="fr" style="padding-right: 20px; position: relative;"> 3</span>
</td>
</tr>
</table>
</div>

</div!--->


    </div>

 </div>


			

  </div> <!--!end---->
     
  <div class="grid_2 omega push_1 pull_2 fr">

                              <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'500',
                height: '400',
                autoDimensions:false
                //padding:'10'  
            });
            $('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
             $(function(){
            // $('#Ormypostcode').geocomplete();
             $('#Orrefdetail').geocomplete();
             //$('#Dsmypostcode').geocomplete();
             $('#Dsrefdetail').geocomplete();
             
             
            // $('#continentin').geocomplete();
             $('#country').geocomplete();
             //$('#province').geocomplete();
             //$('#region').geocomplete();
             $('#city').geocomplete();
             
             //$('#continentout').geocomplete();
             $('#mycountry').geocomplete();
             //$('#myprovince').geocomplete();
            // $('#myregion').geocomplete();
             $('#mycity').geocomplete();
             
           });//
          
          setbg('#000000','site-top-bar_addfreight');
          vpb_pagination_system(1);
          //$(function() {$("#tabs" ).tabs();}); 
          $(function() {

    $( "#shipdiscount" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });

    $( "#opener" ).click(function() {
      $( "#shipdiscount" ).dialog( "open" );
    });
  }); 
 
  $(function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
  
   /*
$(function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  });
       */
		});// end
        

 
</script>
  	 <ul style="list-style: none;left:0px; ;" class="toprel ">
          <li style="list-style: none;">
            <a class="fancybox-media mainboxshadow" href="http://youtu.be/3gpu9ufBAHc?autoplay=1">
              <div id="addfreight_yt_video" class="rounded7"></div>
            </a>
          </li>
        </ul>
        <div id="addfreight_how_it_work" style=" margin-left:30px;">
      <div id="list-faq-container" style="background-color:#eef2e1; padding:20px;" class="rounded">
				<h2>FAQ <?php 
                // Read the file contents into a string variable,
// and parse the string into a data structure

  //fm_freight::load_current_datedate();
    
                 //SESSIONID  // // Link::Build(str_replace(VIRTUAL_LOCATION,getenv('REQUEST_URI')));?></h2>
				<p style="margin-top: 10px;"><strong><a href="#" class="faq" rel="ajax_faq.php?id=1" title="FAQ">How does it work?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=2" title="FAQ">What can I ship with Freightmeta?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=3" title="FAQ">How do I pay?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=4" title="FAQ">What if I don't know the weight or dimensions of my shipment?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=5" title="FAQ">What if the transporter needs extra information from me in order to provide an accurate quote?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=6" title="FAQ">What happens after I've accepted a quote from a transport provider?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=7" title="FAQ">How do I get more quotes?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=8" title="FAQ">What If I need to change the details of my shipment that I've already listed?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=9" title="FAQ">How do I know if the transport provider is trustworthy or not?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=10" title="FAQ">How long does it take to get quotes?</a></strong></p>				
				</div>
        </div>
      </div>
 <div class="clear"></div>
        </div>
   </div>
  </div>
  <?php  require_once 'footer.php';?>


  <script type="text/javascript" src="js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="js/mktSignupfreight.js"></script> 
 
    <!--script type="text/javascript" src="<?php // SITE_URL?>public/js/incs/pwdwidget.js"></script!--->
    <script type="text/javascript">
    // <![CDATA[
    //var pwdwidget = new PasswordWidget('thepwddiv','password');
    //pwdwidget.MakePWDWidget();
// ]]>
    </script>
<script type="text/javascript" src="js/incs/qtip/jquery-1.3.2.min.js "></script>
<script type="text/javascript" src="js/incs/qtip/jquery.qtip-1.0.0-rc3.min.js "></script>
    <script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
    // Use the each() method to gain access to each elements attributes
   $('#list-faq-container a[rel]').each(function()
   {
    //alert('qtip');
      $(this).qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            text: 'Loading...',
            url: $(this).attr('rel'), // Use the rel attribute of each element for the url to load
            title: {
               text: $(this).attr('title'), // Give the tooltip a title using each elements text
               button: 'Close' // Show a close link in the title
            }
         },
         position: {
            corner: {
               target: 'bottomMiddle', // Position the tooltip above the link
               tooltip: 'topMiddle'
            },
            adjust: {
               screen: true // Keep the tooltip on-screen at all times
            }
         },
         show: { 
            when: 'click', 
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            tip: true, // Apply a speech bubble tip to the tooltip at the designated tooltip corner
            border: {
               width: 0,
               radius: 4
            },
            name: 'light', // Use the default light style
            width: 370 // Set the tooltip width
         }
      })
   });
		});

</script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/jquery.min.js', 'https'); ?>"></script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/jquery.wallform.js','https'); ?>"></script>
<script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
        $('#photoimg').die('click').live('change', function(){ 
			           //$("#preview").html('');
                       //alert('???');
			    
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					//console.log('v');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
					//console.log('z');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
							//console.log('d');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});     
                
		});
</script>
<style>

  .ui-tooltip, .arrow:after {
    background: black;
    border: 2px solid white;

  }

  .ui-tooltip {
    padding: 10px 20px;
    color: white;
    border-radius: 20px;
    font: bold 14px "Helvetica Neue", Sans-Serif;
    text-transform: uppercase;
    box-shadow: 0 0 7px black;

  }

  .arrow {
    width: 70px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;

  }

  .arrow.top {
    top: -16px;
    bottom: auto;

  }

  .arrow.left {
    left: 20%;

  }

  .arrow:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    tranform: rotate(45deg);
  }

  .arrow.top:after {
    bottom: -20px;
    top: auto;
  }
  </style>


</body>

</html> 