<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | Contact us</title>
    </head>
    <body>
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
	<div id="middle_container" class="rounded7">
			<div style="float:right">
				If you are a Transport Provider <strong><a class="fz11bold"href="carrier_learnmore?">Click here to learn more</a></strong>
			</div>

			<h1>How It Works</h1>
			<div class="sep"></div>
			
			<div class="fl rounded7" style="width:300px;">

				<a class="fm_tvideo rounded7" <?= FREIGHTMETATVAD?>><img style="width: 350px;height: 180px; background-size: 100% 100%;" src="images/btn/fmtv.jpg" alt="Freightmeta TV AD" border="0"  /></a>

			</div>
			
			<div class="fr" style="width:600px;">
			
				
		
				<h2><span class="bluebg rounded5">1</span> List Your Freight</h2>
				<ul><li><a class="fz11" href="<?= Link::Build('public/add_freight'); ?>">List your freight</a> in the Freightmeta marketplace in under a minute. </li><li>Customers simply answer the required questions and follow the prompts. 
			
				We will ask what is in the shipment, what dates the shipment needs to be moved, where it needs to be picked up and where it's going to. Only the customers postcode is shown publicly. </li><li>Quotes are free and you have no obligation to accept a quote.<br />
			
				</li></ul><h2><span class="bluebg rounded5">2</span> Receive Quotes</h2><ul><li>Transport providers compete for your business providing online quotes.</li><li>No phone calls! No pressure! All quotes are online. You receive email notifications.<br /></li></ul>
				
				<h2><span class="bluebg rounded5">3</span> Choose a Transport Provider</h2>
				<ul><li>Ask any questions you might have about the quotes. </li><li>When you're satisfied you have found a transporter that suits your needs and budget, simply accept the quote. To book the transporter, it's FREE. <br />
				
				</li></ul><h2><span class="bluebg rounded5">4</span> Leave Feedback</h2>
				<ul><li>When your delivery is complete, we'd love for you to take a minute to answer a couple of questions about your experience with the transport provider. </li><li>This will help future customers when selecting a transporter.<br /><br />
				
				</li></ul><div class="button_link"><a class="fzcolored btn-primary" href="<?= Link::Build('public/add_freight'); ?>">List Your Freight - Get Quotes</a></div>
				
				<br /><br />
				
			</div>

	
	

			<!--  end of content -->
	
			<div class="clear"></div>	
	</div>
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
      
                
		});
        
       
</script>
<?php require_once 'footer.php';?>