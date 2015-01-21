<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> |Container Transport</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
///require_once HELPERS_DIR .'i18n.php'; 
?>
    
   <div id="middle">
 <div id="middle_container" style="top: 0px;">
 <div id="content300w" style="background: url(images/cats/LivestockTransport.jpg) no-repeat;">
 <div style="">
 <div id="banner-arrow"><img class="ro2d30" src="images/gen/green-arrow-home.png" /></div>
			
			<div id="banner-content" class="whitebg rounded5 opacity65" style="padding: 10px 10px 10px 10px; left: 100px;">
				<h1 class="banner">Livestock Transport Quotes Online</h1>
				<h2 class="banner">
					Massive Savings, No obligations, No Calls! 
				</h2></div>
			</div>
 
 </div>
 <div id="listform">
 <div id="getfreight_form_content"  class="rounded7" style="left: -10px;top: -5px;">
 <div class="row">
   <div class="fl mainformtxt whitetext pl" style="padding-left: 30px; font-size: 25px; font-weight: bold; " >
  <span>
  Livestock Transport Quotes 
  </span>
  </div>
  </div>
  <div class="row">
  <div class="fl mainformtxt whitetext " style="padding-left: 30px; font-size: 15px; font-weight: lighter;  margin-top: -3px;" >
  <span>
  100% Commission Free
  </span>
  </div></div>
  <div class="row">
  <div class="fl mainformtxt whitetext " style="padding-left: 30px; font-size: 15px; font-weight: lighter;  margin-top: -7px;" >
  <span>
  Save up to 60% of the transport
  </span>
  </div>
  </div>
  <div class="row" style="position: absolute;top:-10px;">
   <form  id="mainform" action="" method="post"> 
 <select id="categoryhomecat" class="fl" style=" position: relative;left: 30px;width: 375px; margin-top:0px ;"name="selectionField"> 
            <script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
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
        var val1=$('.val1').text();
        var val2=$('.val2').text();
        var submit=$('#categoryhome>option:selected').text();
        if(val1.length < 0 && val2.length < 0)
        {
        window.location='http://freightmeta.com/testb/public/add_freight.php';
        }
        else{
            
            alert('Please, All fields are requiered');
        }
      });
           $(function(){$(".val1").geocomplete();
                        $(".val2").geocomplete();});      
		});//end script
        
       
</script>
    <?= 
   
    fm_freight::load_freight_subcat_list(10); 
    ?>
 </select> 
<div class="fl" style="position: relative; top:20px; width: 390px; height: 30px; ">
<input class="input val1" class="fr" type="text" name="origin" placeholder="Home address City, Country" value="" style="position: relative; left: 30px;width: 370px; right: 58px; margin-top: -2px;" id="inputorigin" />
 </div>
  <div class="fl" style="position: relative; top:35px; width: 370px; height: 30px; ">
<input class="input val2" class="fr" type="text" name="origin" placeholder="Destination address City, Country" value="" style="position: relative; left: 30px;width: 370px; right: 58px; margin-top: -2px;" id="inputdest" />
 </div>
 <div class="fl" style="position: relative; margin-top: 55px; width: 100%; height: 44px; margin-left: -175px; ">
 <input id="submit" type="submit" name="Submit" value="" />
 </div> 
 </form>
 </div>
  </div>
  <div id="listform-faqlink" style="margin-top: 10px;" >
					<span class="pl">	or </span><a style="color: #FFFFFF; margin-top: 5px; " class="bold" href="how_it_works">Learn More</a>
					</div>
 </div>
 <div id="howitworks_v" style="background-color:#eef2e1; padding:0px;" class="rounded">
 <div id="howitworks_header">
 <img style="top: -4px;" src="<?= Link::Build('public/images/gen/how.png'); ?>" alt="?" />
 <span style="top: 10px;">
 How It Works 
 </span>
 </div>
				<div id="how1_v"style="background-color:#FFFFFF; padding:2px; " class="rounded">
					<h2><span class="bluebg rounded5">1</span><span style="font-size: 12.5pt;"> List Your Livestock</span></h2>
					<span class="pl"><p class="pl">List your livestock for FREE. It's simple and takes less than 60 seconds!</p></span>
				</div>
				<div id="how2_v" style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">2</span><span style="font-size: 12.5pt;"> Receive Quotes</span></h2>
                <span class="pl"><p class="pl">Receive livestock transportation quotes from livestock transporters online.</p></span>
				</div>
				<div id="how3_v" style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">3</span> <span style="font-size: 12.5pt;">Check Their Ratings</span></h2>
					<span class="pl"><p class="pl">Read reviews of transporters from previous customers to make the right choice.</p></span></div>
				<div id="how4_v" style="background-color:#FFFFFF; padding:2px; font-size: 12.5pt;" class="rounded">
					<h2><span class="bluebg rounded5">4</span><span style="font-size: 9.5pt;" > <span style="font-size: 12.5pt;">Select a Transporter</span></span></h2>
					<span class="pl"><p class="pl">Select a livestock transporter that matches your needs and budget. There's no obligations!
				No Calls!</p></span></div>
			</div>
 <div class="clear"></div>
 <div id="index-bottom">
 <div class="fl" style="font-size:9pt;width:520px; border-right:1px dotted #cccccc; padding-right:20px; margin-left:10px;">
				
					<div style="margin-bottom:6px;">
						<h2 class="sml">More about shipping your Livestock with Freighmeta</h2>
					</div>
                    
                    	When shipping freight it can be exhausting and frustrating trying to chase around transport companies for quotes. <a href="<?= Link::Build(''); ?>">Freightmeta.com</a> allows the customer to get free quotes online and select a transporter based on reviews and a price that suits their budget. <br /><br />Any type of freight can be listed on Freightmeta, ranging from palletised freight, freight containers, furniture removals, household goods, cars, boats, horses, livestock and even pets. Transporters bid against each other in the Freightmeta public marketplace driving down prices and can offer customers fabulous bargains as Freightmeta allows them to fill their trucks, thus utilising empty capacity that would otherwise go unfilled. <br /><br />Customers don't need to worry about annoying phone calls as everything is done online. Freightmeta offers shipping customers and transport providers great online tools to manage the whole process with ease! 
					<br /><br />Whether you're a business with lots of regular freight to move, or an individual with one item, Freightmeta can save you a buck!<br />

                </div>
    <div class="fr" style="margin-right:0px; line-height:18px; width:390px;">
				
					<div style="margin-bottom:15px;">
						<a class="fm_tvideo" href="http://youtu.be/3gpu9ufBAHc?autoplay=1"><div id="media_video_yt" style="width: 410px; left: 20px; background-size: 100% 100%;"></div></a>
					</div>					
				  	<script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
			$('.fm_tvideo').fancybox(
             {
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
		$(function(){$(".val1").geocomplete();
                        $(".val2").geocomplete();});

		});
	</script>
					<div style="margin-bottom:8px;">
						<h2 class="sml">Why should I use Freightmeta to find a livestock?</h2>
					</div>
					<div style="font-size: 8pt;">
                    <div style="margin-bottom:6px;">
							<div class="fl" style="width:20px;height:60px;">
								<img src="images/gen/tick.gif" />
							</div>
							<strong>Save Money</strong> - Livestock transporters compete against each other in a public marketplace driving down prices.
							Freightmeta also allows them to fill their trucks for return journeys, thus allowing them to offer discounted rates.<div class="clear"></div>
						</div>
						
						<div style="margin-bottom:6px;">
							<div class="fl" style="width:20px;height:20px;">
								<img src="images/gen/tick.gif" />
							</div>
							<strong>No Obligations</strong> - If you're not happy with any of the quotes, no problems! You're under no obligation to accept any of them.
							<div class="clear"></div>
						</div>
						
						<div style="margin-bottom:6px;">
							<div class="fl" style="width:20px;height:20px;">
								<img src="images/gen/tick.gif" />
							</div>
							<strong>No Annoying Phone Calls</strong> - All quotes are online and your contact details are not shared until you accept a quote.
							<div class="clear"></div>
						</div>

					</div>
				</div>
                <div class="clear"></div>
 </div>
 
  </div>
  </div>  
  
  
<?php require_once 'footer.php';?>
