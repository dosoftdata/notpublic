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
 <div id="content300w" style="background: url(images/cats/Container_Transport.jpg) no-repeat;">
 <div style="">
 <div id="banner-arrow"><img class="ro2d30" src="images/gen/green-arrow-home.png" /></div>
			
			<div id="banner-content" class="whitebg rounded5 opacity65" style="padding: 10px 10px 10px 10px;left: 70px;">
				<h1 class="banner">Shipping Container Transport Quotes</h1>
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
  Shipping Containers! 
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
   
    fm_freight::load_freight_subcat_list(7); 
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
 <img src="<?= Link::Build('public/images/gen/how.png'); ?>" alt="?" />
 <span style="top: 15px;">
 How It Works 
 </span>
 </div>
				<div id="how1_v"style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">1</span><span style="font-size: 12.5pt;"> List Your Container</span></h2>
						<span class="pl"><p class="pl">List your container for FREE. It's simple and takes less than 60 seconds!</p></span>
				</div>
				<div id="how2_v" style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">2</span><span style="font-size: 12.5pt;"> Receive Quotes</span></h2>
						<span class="pl"><p class="pl">Receive container shipping quotes from transporters at discounted rates. Save upto 60%</p></span>
				</div>
				<div id="how3_v" style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">3</span> <span style="font-size: 12.5pt;">Check Their Ratings</span></h2>
						<span class="pl"><p class="pl">Read ratings and reviews from previous customers to make the right choice.</p></span></div>
				<div id="how4_v" style="background-color:#FFFFFF; padding:2px;" class="rounded">
					<h2><span class="bluebg rounded5">4</span><span style="font-size: 12.5pt;" > <span style="font-size: 12pt;">Select a Transporter</span></span></h2>
						<span class="pl"><p class="pl">Select a carrier that matches your needs and budget. There's no obligations!
				No Calls!</p></span></div>
			</div>
 <div class="clear"></div>
 <div id="index-bottom">
 <div class="fl" style="font-size:9pt;width:520px; border-right:1px dotted #cccccc; padding-right:20px; margin-left:10px;">
				
					<div style="margin-bottom:6px;">
						<h2 class="sml">More about shipping your Container with Freighmeta</h2>
					</div>
					
					<p>When shipping containers it can be exhausting and frustrating trying to chase around container transport companies for quotes. 
                    <a href="<?= Link::Build(''); ?>">Freightmeta.com</a> allows the customer to list what they need moved then just sit back and wait for quotes to come in. Customers then select a transporter based on reviews and a price that suits their budget. </p>
                    <p>Container transporters compete for your business in the Freighmeta public marketplace driving down prices and can offer customers massive bargains as Freightmeta helps them to utilise the empty capacity in their trucks, especially when returning home from a delivery.</p><p>All quotes are online so you'll never receive any sales calls and your information is kept strictly private. You details are only provided to the transport provider you choose for the job. Freightmeta offers shipping customers and transport providers great online tools to manage the whole process with ease and best of all, It's a FREE service!</p><p>Whether you're a business with lots of regular containers to move, or an individual with a once off shipment, Freightmeta can save you a buck!</p><br />

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
           $(function()
           {
           $(".val1").geocomplete();
           $(".val2").geocomplete();
                        
           });      
		});//end script
        
       
</script>
					<div style="margin-bottom:8px;">
						<h2 class="sml" style="font-size: 8.4pt;">Why should I use Freightmeta to help me ship my container?</h2>
					</div>
					<div style="font-size: 8pt;">
						<div style="margin-bottom:6px;">
							<div class="left" style="width:20px;height:20px;">
								<img src="images/gen/tick.gif" />
							</div>
							<strong>Save Money</strong> - Freight Transporters compete against each other in a public marketplace driving down prices.
							<div class="clear"></div>
						</div>
						
						<div style="margin-bottom:6px;">
							<div class="left" style="width:20px;height:20px;">
								<img src="images/gen/tick.gif" />
							</div>
							<strong>No Obligations</strong> - If you're not happy with any of the quotes, no problems! You're under no obligation to accept any of them.
							<div class="clear"></div>
						</div>
						
						<div style="margin-bottom:6px;">
							<div class="left" style="width:20px;height:20px;">
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
