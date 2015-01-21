<?php
// Activate session 
//ob_start();
require_once 'header.php';
//usrlogin::sessionvaltest();
//session_start();
//Fm_User::get_session();

?>
  <title><?= SITE_NAME?> | Home </title>    
  <!---script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50848898-1', 'freightmeta.com');
  ga('send', 'pageview');
var dimensionValue = 'SOME_DIMENSION_VALUE';
ga('set', 'dimension1', dimensionValue);
</script!--->
  </head>
    <body onload="" >
       <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
//usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);

?>
 

<div id="middle" style="">
<div id="middle_container">

	
		<!-- modal content -->
	</div>
<div id="mapdistancediv"></div>
			<!-- end of map -->
			<div class="clear"></div>
  	
<div id="middle_container_1">
 <div id="getfreight_form_content" >
  <div class="fl mainformtxt whitetext pl" style="padding-left: 30px; font-size: 25px; font-weight: bold; " >
  <span>
  What do you need to Ship? 
  </span>
  </div>
  <div class="fl mainformtxt whitetext " style="padding-left: 30px; font-size: 15px; font-weight: lighter;  margin-top: -3px;" >
  <span class="bold">
  100% Commission Free
  </span>
  </div>
  <div class="fl mainformtxt whitetext " style="padding-left: 30px; font-size: 15px; font-weight: lighter;  margin-top: -7px;" >
  <span class="bold">
  Save up to 60% of the transport
  </span>
  </div>
   <form  id="mainform" action="public/add_freight" method="post" onchange=""> 
 <select id="categoryhome" class="fl" style=" position: relative;left: 30px;width:375px; margin-top:-15px ;"name="selectionField"> 
    <?= fm_freight::load_categories(); ?>
 </select> 
 <div class="fl" style="position: relative; top:20px; width: 390px; height:30px;  ">
<input class="input val1" class="fr" type="text" name="origin" placeholder="Home address City, Country" value="" style="position: relative; left: 30px;width: 370px; right: 58px; margin-top: -2px;" id="inputorigin" />
 </div>
  <div class="fl" style="position: relative; top:35px; width: 370px; height: 30px;  ">
<input class="input val2" class="fr" type="text" name="origin" placeholder="Destination address City, Country" value="" style="position: relative; left: 30px;width: 370px; right: 58px; margin-top: -2px;" id="inputdest" />
 </div>
 <div class="fl" style="position: relative; margin-top: 70px; width: 100%; height: 45px;  ">
 <input id="submit" type="submit" name="Submit" value="" />
 </div>     
   </form>
  </div>
  
   <div id="top_right_sidebar">
  <link rel="stylesheet" href="public/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
$(window).load(function() {$('#slider,#slider2,#slider3').nivoSlider();});
</script>
   <div id="home-banner"  >
   <div id="slider" class="nivoSlider">
         <img src="<?= SITE_URL?>public/images/home_banners/Palletised_Packaed_Freight.jpg" />
	    <img src="<?= SITE_URL?>public/images/home_banners/Parcels_Small_Pachages.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Container_Transport.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Food_Drink.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Foul_Patrial_Truckload.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Dangerous_freight.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Heavy_Equipment_Transport.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Livestock_Transport.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/House_Office_Removals.jpg" />
	     <img src="<?= SITE_URL?>public/images/home_banners/Transport_across_Europe.jpg" />
		 <img src="<?= SITE_URL?>public/images/home_banners/Vehicles_Transport.jpg" />
         <img src="<?= SITE_URL?>public/images/home_banners/Motorcycle.jpg" />
         <img src="<?= SITE_URL?>public/images/home_banners/Boat_Yachts.jpg" />
         <img src="<?= SITE_URL?>public/images/home_banners/Hay_Grain_Feed.jpg" />
         <img src="<?= SITE_URL?>public/images/home_banners/International_Transport.jpg" />
 </div>
   </div>
  
   
  </div> 
 <div class="clear"></div>
 <div id="middle_container_bottom">
 <div id="middle_container_bottom_left" class="fl">
 <div id="howitworks"  class="rounded7">
 <div id="howitworks_header">
 <img src="public/images/gen/how.png" alt="?" />
 <span>
 How It Works 
 </span>
 </div>
 <div id="how1" class="rounded7">
 <h2 style="position: relative;margin-top: 0px;"><span class="bluebg rounded5">1</span> List Your Freight</h2>
	<p style="font-size:10pt;position: relative;margin-top: 3px; font-weight: lighter; margin-left: 30px; color: black;">List your freight for FREE. It's simple and takes less than 60 seconds!</p>
  <img class="fr" src="public/images/gen/listf.png" alt="---" />
 </div>
 <div id="how2">
 <h2 style="position: relative;margin-top: 0px;"><span class="bluebg rounded5">2</span> Receive Quotes</h2>
	<p style="font-size:10pt;position: relative;margin-top: 3px; font-weight: lighter;margin-left: 30px;color: black;">Receive competitive quotes from transporters online without the need to phone around.</p>
  <img src="public/images/gen/receiveq.png" alt="" />
 </div>
 <div id="how3">
 <h2 style="position: relative;margin-top: 0px;"><span class="bluebg rounded5">3</span> Check Rating & Prices</h2>
	<p style="font-size:10pt;position: relative;margin-top: 3px; font-weight: lighter;margin-left: 30px;color: black;">Read ratings and reviews from previous customers to make the right choice.</p>
  <img src="public/images/gen/ratet.png" alt="" />
 </div>
 <div id="how4">
 <h2 style="position: relative;margin-top: 0px;"><span class="bluebg rounded5">4</span> Select a Transporter</h2>
	<p style="font-size:10pt;position: relative;margin-top: 3px; font-weight: lighter;margin-left: 30px; color: black;">Select a transporter that matches your needs and budget. There's no obligations!</p>
  <img src="public/images/gen/checkf.png" alt="" />
 </div>
 </div>
 <ul style="list-style: none;position: relative;margin-top: 15px;" style="">
		<li style="list-style: none;"><a class="fm_tvideo rounded7 bg" href="http://youtu.be/3gpu9ufBAHc?autoplay=1"><div id="media_video_yt"></div></a></li>
	</ul> 
  <div id="middle_container_bottom_right" class="fr">
 <div style="position: relative; margin-top: -22px; width: 100%; height: auto; margin-left: 5px;">
   <span style="color: black; font-size: 22px;" class="pl">
   Newsletter for freight quote notification!
   </span>
   </div>
   <ul class="mainsearchdiv rounded7" style="width: 513px;">
   <li>
   <div  id="mainsearch"> 
  <input class="input" name="search" id="searchkeyword" type="text" size="40" placeholder="Receive quote notification" value="" />
  <input type="submit" class="btn-primary ui-button" onclick="newsletter();" value="Add"> 
</div>
</li>
</ul>
<ul id="shipdetail">
<li>
<div id="home-banner2">
 <div id="slider2" class="nivoSlider">
<img   src="<?= SITE_URL?>public/images/home_banners/next/boat2.jpg"/>
<img  src="<?= SITE_URL?>public/images/home_banners/next/remorck2.jpg"/>
</div>
</div>
</li>
<li><img  src="public/images/gen/forward.png" alt="-->" />
    <span style="font-size: 20px; color: #5aa5cc; font-weight: bold;"> Worldwide Shipping - Freights accross Europe</span></li>
<li>
<div id="home-banner3">
 <div id="slider3" class="nivoSlider">
 <img  src="<?= SITE_URL?>public/images/home_banners/next/worldshipping3.png"/>
<img  src="<?= SITE_URL?>public/images/home_banners/next/worldshipping.png"/>
</div>
</div>
</li>
<li><img src="public/images/gen/forward.png" alt="-->" />
    <span style="font-size: 20px; color: #5aa5cc;font-weight: bold;">Freight Forwarders</span><br />
    <span class="lighttext">(A freight forwarder is a person or company that organizes shipments for 
    individuals or corporations to get goods from the manufacturer or producer to a market, 
    customer or final point of distribution.)
    </span>
    </li>
<li>
<ul id="shipdetail_nested" class="greybg rounded7" style="height: 45px; list-style: none; width: 513px;">
<li><span style="font-size: 12.1pt; top: -4px;">Have you any freight for Shipping?</span></li>
<li style="margin-top: -19px; padding-top:10px; padding-bottom: 5px;"><span class="fr" style="position: absolute;right: 15px;"><a href="<?= Link::Build('public/login?usr=all'); ?>" target="_parent"> Login</a>&nbsp;or&nbsp;<a  href="t-register?ttr=home" target="_parent" title="Transporter register">Register</a> </span></li>
</ul>
</li>
<li>
<ul id="shipdetail_nested" class="greybg rounded7" style="height: 45px; list-style: none;width: 513px;">
<li><span style="font-size: 12.1pt;top: -4px;">Transporter?</span></li>
<li style="margin-top: -19px; padding-top: 10px;padding-bottom: 5px;"><span  class="fr" style="position: absolute;right: 15px;"><a href="<?= Link::Build('public/login?usr=all'); ?>" target="_parent"> Login</a>&nbsp;or&nbsp;<a  href="t-register?ttr=home" target="_parent" title="Transporter register">Register</a> </span></li>
</ul>
</li>
</ul>
 </div>
 </div>

 </div> 
</div>
<script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
		 

 
		  //$('#site-top-bar_logo').addClass('blackbg');  
			$('.fm_tvideo').fancybox(
             {
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
                    arrows : true,
					helpers : {
						media : {},
						buttons : {}
					}
				});
      //Header locate freight
      $('#submit').click(function(){
        //alert('Go add freight please!');
        //var val1=$('.val1').text();
        //var val2=$('.val2').text();
        //var submit=$('#categoryhome>option:selected').text();
        //if(val1.length < 0 && val2.length < 0)
        //{
        window.location='http://freightmeta.com/testb/public/add_freight';
       // }
        //else{
            
           // alert('Please, All fields are requiered');
          // window.location='http://freightmeta.com/testb/public/add_freight';
       // }
      });
           $(function()
           {$(".val1").geocomplete();
                        $(".val2").geocomplete();
           });      


        });//end script  
    //setTimeout(function(){$('.modal').modal('show');},5000);     
</script>

</div>

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Shipping discount</h4>
      </div>
      <div class="modal-body">
      From to just with....
      </div>
      <!---div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div!--->
    </div>
  </div>
</div>
<?php  require_once 'footer.php';?>


