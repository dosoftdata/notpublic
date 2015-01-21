<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | FAQ</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->       
         <?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
//require_once HELPERS_DIR .'i18n.php';
//print $_SESSION['default_page'] = sha1('freighmeta'); 
?> 
    
      <div id="middle" style="margin-top: 30px;">
 <div id="middle_container">

  <div id="header_line">
  <h1 style="color: black;">Frequently Asked Questions for Customers</h1>
  </div>
  <div class="fr"> <a style="color: #5aa5cc; text-decoration: underline;" href="./faq_carriers">Transport Provider FAQ's </a></div>
  <div id="faq_container">
  	<div id="accwrapper">
	<h2 class="accordion-header">How does it work?</h2>
			<div class="accordion-content">
				<p>Customers who need something moved list their freight on Freightmeta in just a few simple steps. We'll ask you what you're shipping, the origin and destination points, when you need it shipped etc. Our network of wordlwild transport companies will then be alerted to your transport request. Transporters will then provide online quotes to move your goods. When you find a quote that is suitable to your needs and budget simply accept the quote. </a></p>
			</div>
			
			<h2 class="accordion-header">What can I ship with Freightmeta?</h2>
			
			<div class="accordion-content">
				
				<p>You can ship just about anything. Commercial freight, vehicles, horses and livestock, parcels and packages, boats, shipping containers, household goods... just about anything. Once you list your freight we will alert all relevant transport providers. So if you need a boat transported for example, we'll alert only boat transporters about your freight request.</a></p>
			</div>
			
			<h2 class="accordion-header">How do I register?</h2>
			
			<div class="accordion-content">
				<p>Simply <a style="color: #5aa5cc; text-decoration: underline;" href="./account">click here</a> </p>
			</div>
			
			<h2 class="accordion-header">How do I pay?</h2>
			
			<div class="accordion-content">
				<p> After you've accepted a quote from a transporter you will not be required to pay. It's FREE </p>
            </div>
            
            <h2 class="accordion-header">What if I don't know the weight or dimensions of my shipment?</h2>
			<div class="accordion-content">
				<p> No problems. You simply tick the box "unsure of item weight or dimensions" and we will make sure the transporter is aware of this. </p>
            </div>
            
            <h2 class="accordion-header">What if the transporter needs extra information from me in order to provide an accurate quote?</h2>
			<div class="accordion-content">
				<p> No problems, the transporter has the ability to ask you online questions about your freight. </p>
             </div>
             
             <h2 class="accordion-header">Is my shipment insured?</h2>
			<div class="accordion-content">
				<p>You will need to arrange insurance with the transporter directly. Some transporters offer insurance as standard, some do not. You can view insurance information on the transporters profile before accepting a quote. </p>
             </div>
             <h2 class="accordion-header">Can I contact the transport provider by phone or email?</h2>
			<div class="accordion-content">
				<p> Contact information is not visible until you've made a booking. After a booking is made, Freightmeta provides both you and the transporter with each others details. </p>
                </div>
                <h2 class="accordion-header">What happens after I've accepted a quote from a transport provider?</h2>
			
			<div class="accordion-content">
				<p> After a quote has been accepted, your details will be sent to the transporter. The transporter will contact you within 2 working days to arrange pickup and delivery.</p>
                </div>
                <h2 class="accordion-header">How do I get more quotes?</h2>
			
			<div class="accordion-content">
				<p> The best way to get more quotes is put as much information about your freight online as possible. Transporters love this because it makes quoting a delivery easy. If you can upload photos of your shipment that would be fantastic. As they say... a picture speaks a thousand words!</p>
                </div>
                <h2 class="accordion-header">What If I need to change the details of my shipment that I've already listed?</h2>
			
			<div class="accordion-content">
				<p> No problems. Simply <a style="color: #5aa5cc; text-decoration: underline;" href="./login"> login</a> to your dashboard and click 'Edit' next to your listing. If you need to change any details it's better to do it as soon as possible as all quotes you've received up to that point in time will be automatically cancelled. </p>
                </div>
                <h2 class="accordion-header">How do I know if the transport provider is trustworthy or not?</h2>
			
			<div class="accordion-content">
				<p> Freightmeta is driven by a customer review system. Before selecting a transporter take a look at their profile which contains any reviews from previous customers both good and bad. When your shipment is complete, we'll ask you to take a minute to review your transporter, and this will in turn be helpful to another customer down the track.</p>
                </div>
                <h2 class="accordion-header">Do I have to choose a quote?</h2>
			
			<div class="accordion-content">
				<p> No you do not. There is absolutely no obligations to select a quote. </p>
                </div>
                <h2 class="accordion-header">How long does it take to get quotes?</h2>
			
			<div class="accordion-content">
				<p>You should usually get a number of quotes within a couple of days. </p>
			</div>

	</div>
  
  </div>
  <div class="button_link"><a href="<?= Link::Build('public/add_freight.php'); ?>">List Your Freight - Get Quotes</a></div>
  </div>
  </div>

<script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
	
      //Header locate freight
      $('.gofreight').click(function(){
        window.location='http://freightmeta.com/test__/public/add_freight.php';
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
    </body>
</html>