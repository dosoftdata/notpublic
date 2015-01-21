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
//print $_SESSION['default_page'] = sha1('freighmeta'); 
?>   
<div id="middle">
 <div id="middle_container">
  <div id="header_line" class="" style="margin-top: 0px;">
  <h1 style="color: black;">Frequently Asked Questions for Transport Providers</h1>
  </div>
  <div id="faq_container" style="height:auto;">
  	<div id="accwrapper">
	<h2 class="accordion-header">How does it work?</h2>
			<div class="accordion-content">
				<p><a>Freightmeta</a> is an online freight matching service. You find freight that matches your transport capabilities and provide online quotes for your services. Customers select their favorite quote and book your services online.</p>
			</div>
			<h2 class="accordion-header">How much does it cost?</h2>
			<div class="accordion-content">	
				<p><a>Freightmeta</a> is FREE to join and FREE to use. You will only pay a small Matching Fee of approximately 7% of the quoted price or 10% of the shipping discount when you've actually won a job. So all you need to do is make sure you include an additional 7% in your quote or 10% in your Shipping discount to the customer to account for the matching fee and <a>Freightmeta</a> is essentially a free service.</p>
			</div>
			<!--h2 class="accordion-header">How do I pay the matching fee???????</h2>
			<div class="accordion-content">
				<p>In order for a customer to book your services, Freightmeta requires them to pay an online deposit, thus making sure the customer is genuine. We simply take our Matching Fee out of the deposit, so you never have to worry about receiving a bill from Freightmeta.????? </p>
			</div!--->
			<h2 class="accordion-header">After a customer has booked my services... what next?</h2>
			<div class="accordion-content">
				<p> When a customer has accepted your quote and booked you online, you will be sent an email containing the customers contact details. You will then be required to contact the customer within 2 working days to arrange pickup, delivery and payment.</p>
            </div>
            <h2 class="accordion-header">Can I ask the customer questions before I provide a quote?</h2>
			<div class="accordion-content">
				<p> Yes definitely. You have the ability to ask as many online questions of the customer as you wish. You can also view questions and answers that other transport providers have asked. </p>
            </div>
            <h2 class="accordion-header">Can a customer ask me questions in regards to a provided quote?</h2>
			<div class="accordion-content">
				<p> Yes. After you have provided a quote, the customer may ask you online questions before accepting the quote. you will notified by email when a question has been asked.</p>
             </div>
             <h2 class="accordion-header">Does the customer have to choose the lowest quote?</h2>
			<div class="accordion-content">
				<p>No, the customer can choose any of the quotes provided to them. The customer may choose a quote based on price, transport provider reviews and ratings, or even availability of transport provider. </p>
             </div>
             <h2 class="accordion-header">Will the public be able to see my quotes?</h2>
			<div class="accordion-content">
				<p> Your quotes will be displayed, but we will hide your username and company details to everyone except the customer who you are providing the quote for. </p>
                </div>

	</div>
  
  </div>
  <div class="button_link"><a href="<?= Link::Build('public/t-register.php'); ?>">Register as a Transporter Provider</a></div>
  </div>
  </div>
<script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
	
      //Header locate freight
      $('.goregister').click(function(){
        window.location='http://localhost/test_/public/t-register.php';
        });
       
      });       
</script>  
  
 <style type="text/css">
 .button_fm{

border:1px solid #388bb6; -webkit-border-radius: 7px; -moz-border-radius: 7px;border-radius: 7px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #5AA5CC; background-image: -webkit-gradient(linear, left top, left bottom, from(#5AA5CC), to(#1c5a85));
 background-image: -webkit-linear-gradient(top, #5AA5CC, #1c5a85);
 background-image: -moz-linear-gradient(top, #5AA5CC, #1c5a85);
 background-image: -ms-linear-gradient(top, #5AA5CC, #1c5a85);
 background-image: -o-linear-gradient(top, #5AA5CC, #1c5a85);
 background-image: linear-gradient(to bottom, #5AA5CC, #1c5a85);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#5AA5CC, endColorstr=#1c5a85);
}
.button_fm:hover{
 border:1px solid #2d7093;
 background-color: #CBBC97; background-image: -webkit-gradient(linear, left top, left bottom, from(#CBBC97), to(#242A9D));
 background-image: -webkit-linear-gradient(top, #CBBC97, #242A9D);
 background-image: -moz-linear-gradient(top, #CBBC97, #242A9D);
 background-image: -ms-linear-gradient(top, #CBBC97, #242A9D);
 background-image: -o-linear-gradient(top, #CBBC97, #242A9D);
 background-image: linear-gradient(to bottom, #CBBC97, #242A9D);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#CBBC97, endColorstr=#242A9D);
}
 
 </style>
  
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