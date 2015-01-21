<?php
require_once 'header.php';?>
  <title>FreightMeta | About us</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
<?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php')
?> 
  
      <div id="middle">
 <div id="middle_container">
 
 <div id="error_box_main" class="arrow_box">
  Pour les versions de Internet Explorer < 9.0 utilisez la propriété css filter DropShadow ou shadow. Il se peut qu'il y ai un bug d'affichage, dans ce cas essayez de mettre un zoom:1
  </div>
  <h1>About Us</h1>
			<div class="sep"></div>
				
                <p><a>Freightmeta</a> was created to facilitate global freight shipping; it makes trade easier, 
                <br />as finding and choosing a carrier from all over the world is now simpler than ever. 
                <br/>Thanks to Freightmeta you get served online without having to make calls to find a carrier, 
                <br/> often without success. 
                </p>
                <p>Our idea is that anyone wishing to have a freight shipped, whether an individual or a company,
                <br /> may get offers online. Offers are visible to everyone, enabling you to choose the lowest bidder. 
                <br/>Carriers are selected based on their offer and reviews.
                </p>
                <p>              
                Carriers are also checked by <a>Freightmeta</a> when they do not send us the required documents 
                <br />or when they do not submit their offers for other reasons. 
                </p>
                <p>
                Moreover, <a>Freightmeta</a>provides Shipping Discount option, where you may find great offers from carriers. 
                <br />Carriers will choose to make a favourable offer instead of coming back empty or with only a few freights.
                </p>
               <p>
               Shipping is maded by sea - air - road. Offers are submitted by transport undertakings, as well as <br /> by shipping agents or forwarders. 
               </p>
                
                <p>If you have any questions or comments please follow this link to the <a class="" href="<?= Link::Build('public/contact_us'); ?>">contact us</a> page.<br />
                </p>

	
	
			<!--  end of content -->
	
			<div class="clear">  </div>
  </div>
  </div>
  


<?php require_once 'footer.php';?>