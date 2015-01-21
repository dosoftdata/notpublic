<?php
require_once 'header.php';
require_once HELPERS_DIR .'add_freight_status_css.inc';
?>
  <title>Freightmeta | Transporter Reigister</title>
    
    </head>
    <body style="word-break: normal;">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
 <?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
//require_once HELPERS_DIR .'i18n.php'; 

?> 
   <script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
             $(function(){
             $('#postcode').geocomplete();
             $('#address_line2').geocomplete();
             $('#address_line1').geocomplete();
               
             $('#tcountry').geocomplete();
             $('#tprovince').geocomplete();
             $('#tregion').geocomplete();
             $('#tcity').geocomplete();
            
             //$('#Dsrefdetail').geocomplete();
           });//
           $('.iframe').fancybox(
            {
                width:'800',
                height: '700',
                autoDimensions:true,
                padding:'10'  
            });
                   
		});// end 
</script>
<div id="middle">
<style>

</style>	
	<div id="middle_container" class="rounded7">
    <div class="fmloader"> </div>
  <script type="text/javascript" src="js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="js/mktSignup_ttr.js"></script> 
 
			<div class="column" id="">

				<h1>
					Register as a Transport Provider with Freightmeta				</h1>
				<div class="sep"></div>
			
								
				<div id="carrier-top-info">
				
				To start quoting for freight you will first need to fill out the registration form below. <br />
				<br />
				<strong>Have Questions?</strong> View our <a href="<?= Link::Build('public/faq_carriers.php','https') ?>"><strong>Transport Provider FAQ</strong></a><br /><br /><br />
				
				</div>
											
				<form action="#"  method="post" onsubmit="return false;" id="form-account">	
			  
              	 <div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
              <div class="alert-box hidden " style="width: 500px;">
<span id="idsms">notice </span> <em>:</em><em id="msn">message</em>
</div>
              <input name="task" type="hidden" id="task" value="fregister"/>
				<div class="row">
                
                   <div id="fmCheck"></div>		
					<div class="formlabel">Username:<span class="requiredtxt">*</span></div>
                    <div class="forminput">
                        
						<input  name="username" type="text" class="control required trans_u_name fmusrnm" id="username" value="" style="width:70%;"/><br />
                        <span class="formnotes notefail hidden">Enter username between 3-8 character</span>
					</div>
					<div class="clear"></div>
				</div>
								<div class="row">
					<div class="formlabel">Password:<span class="requiredtxt">*</span></div>
					<div class="forminput">
					<input   name="passwd" type="password" class="control required password transpwd" id="passwd" style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="row">
					<div class="formlabel">Password Confirm:</div>
					<div class="forminput">
					<input   name="passwd2" type="password" class=" required control" equalTo="#passwd" id="passwd2" style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
		
				<div class="clear"></div>
				<div class="sep"></div>	

		
				<div class="row">
                     <div id="fmCheckm"></div>
					<div class="formlabel">Email:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="email" type="text" class="control required email transmail fmmail" id="email" value=""  style="width:70%;"/><br />
						<span class="formnotes notmail">If you would like email alerts sent to multiple email addresses, you can enter additional emails below</span>
						<div id="additional_emails_link" style="margin-top:10px; ">
							<strong><a href="#" onclick="$('#additional_emails_link').hide(); $('#additional_emails').show(); return false;">> Add additional email addresses</a></strong>
						</div>
						<div id="additional_emails" style="margin-bottom:10px; margin-top:10px;  display:none;">
                           <div id="fmCheckm"></div>
							<div>Additional Emails:</div>
							<input   name="email2" type="text" class="control email fmmail" id="email2" value=""  style="width:70%; margin-top:5px;"/>
							<input   name="email3" type="text" class="control email fmmail" id="email3" value=""  style="width:70%; margin-top:5px;"/>
						</div>
					</div>
					<div class="clear"></div>
				</div>


				<div class="clear"></div>
				<div class="sep"></div>	
						
		
				<div class="row">
					<div class="formlabel">Phone:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="phone" type="text" class="required control phone transphone" id="phone" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
		
			
		
				<div class="row">
					<div class="formlabel">Contact Firstname:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="firstname" type="text" class="control required configfname" id="firstname" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
		
				
		
				<div class="row">
					<div class="formlabel">Contact Lastname:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="lastname" type="text" class="control required contactilname" id="lastname" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
		
				
				<div class="clear"></div>
				<div class="sep"></div>
				
		
				<div class="row">
					<div class="formlabel">Company Name:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="carrier_name" type="text" class="control required" id="tcompanyname" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
                <div class="row hidden">
					<div class="formlabel">Company ID:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="carrier_id" type="text" class="control tcompanyID" id="carrier_name" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
                <div class="row hidden">
					<div class="formlabel">Company Vat Number:<span class="t">*</span></div>
					<div class="forminput">
						<input   name="carrier_vat" type="text" class="control vatnum" id="carrier_name" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
                <div class="row hidden">
					<div class="formlabel">Company VAT %:<span class=""></span><span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="carrier_vatpercent" type="text" class="control cvatnum" id="carrier_name" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="row hidden">
					<div class="formlabel">ABN:<span class="required"></span><span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="carrier_abn" type="text" class="control" id="carrier_abn" value=""  style="width:30%;"/>
					</div>
					<div class="clear"></div>
				</div>
											
				<div class="row hidden">
					<div class="formlabel">Registered for GST:<span class="requiredtxt">*</span></div>
					<div class="forminput"><label><input   name="carrier_gst_registered" type="checkbox" id="carrier_gst_registered" value="yes"/></label><span class="pl">Yes</span><br /></div>
					<div class="clear"></div>
				</div>		
								
				
				<div class="clear"></div>
				<div class="sep"></div>	
							
		
				<div class="row">
					<div class="formlabel">Address:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="address_line1" type="text" class="control required" id="address_line1" value=""  style="width:70%;"/> 
					</div>
					<div class="clear"></div>
				</div>	
							
				<div class="row">
					<div class="formlabel">Address Line 2:</div>
					<div class="forminput">
						<input   name="address_line2" type="text" class="control " id="address_line2" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>			
		
			
		
				<div class="row hidden">
					<div class="formlabel">Address references:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="addressref" type="text" class="control " id="addressref" value=""  style="width:70%;"/>
					</div>
					<div class="clear"></div>
				</div>
		<div id='notification_div'></div>
        <div class='main'>
        <div class="contents">
				<div class="row hidden">
					<div class="formlabel"> Continent:<span class="requiredtxt">*</span></div>
										<div class="forminput">
                       <select name="tcontinent" class="control" style="width:70%;"  id="tcontinent" onchange=";">
              <option value="Select"></option>						
                   </select>
                </span>                  
					</div>
					<div class="clear"></div>
				</div>
                
                <div class="row">
					<div class="formlabel">Country:<span class="requiredtxt">*</span></div>
										<div class="forminput">               
                         <span>
                	<input   name="tcountry" type="text" class="control required" id="tcountry" value=""  style="width:70%;"/>
                </span>               
                          
					</div>
					<div class="clear"></div>
				</div>
                
                <div class="row">
					<div class="formlabel"> State or Provice:<span class="requiredtxt">*</span></div>
										<div class="forminput">      
                <span>
                	<input   name="tprovince" type="text" class="control required" id="tprovince" value=""  style="width:70%;"/>
               
                </span>                
					</div>
					<div class="clear"></div>
				</div>
                
                <div class="row">
					<div class="formlabel">Region or City:<span class=""></span></div>
										<div class="forminput">  
                 <span>
                 	<input   name="tregion" type="text" class="control" id="tregion" value=""  style="width:70%;"/>
                
                </span>                                           
					</div>
					<div class="clear"></div>
				</div>
               <div class="row">
					<div class="formlabel"> City:</div>
										<div class="forminput">  
                 <span>
                 	<input   name="tcity" type="text" class="control" id="tcity" value=""  style="width:70%;"/>
                </span>                                           
					</div>
					<div class="clear"></div>
				</div>  
		</div>
        </div>
				<div class="row">
					<div class="formlabel">Postcode:</div>
					<div class="forminput">
					<input   name="postcode" type="text" class="control" id="tpostcode" placeholder="Post code" value=""  style="width:30%;">
					</div>
					<div class="clear"></div>
				</div>						
				
				
				<div class="sep"></div>
			
		     		
				<div class="row">
					<div class="formlabel">Serviced Freight Categories:<span class="requiredtxt">*</span></div>
					<div class="forminput" style=" width: 650px;">
					
						<input class="required control" name="categories" type="hidden" value=""/>						
						<div class="fcat" style="float:left; width: 300px; font-size:10.2pt;" >
												<label><input class="fcat"  name="packagedchk" id="packagedchk" type="checkbox" value="1"/><span class="pl">Palletised or Packaged Freight</span></label><br />
												<label><input class="fcat"  name="t_vehicleschk" id="t_vehicleschk" type="checkbox" value="2"/><span class="pl">Vehicles</span></label><br />
												<label><input class="fcat"  name="t_motorcycleschk" id="t_motorcycleschk" type="checkbox" value="3"/><span class="pl">Motorcycles</span></label><br />
												<label><input class="fcat"  name="t_boatchk" id="t_boatchk" type="checkbox" value="4"/><span class="pl">Boats / Yachts</span></label><br />
												<label><input class="fcat"  name="heavychk" id="heavychk" type="checkbox" value="5"/><span class="pl">Heavy Haulage & Machinery</span></label><br />
												<label><input class="fcat"  name="officeremovalschk" id="officeremovalschk" type="checkbox" value="6"/><span class="pl">House & Office Removals</span></label><br />
												<label><input class="fcat"  name="containerchk" id="containerchk" type="checkbox" value="7"/><span class="pl">Containers</span></label><br />
												<label><input class="fcat"   name="householdchk" id="householdchk" type="checkbox" value="8"/><span class="pl">Household Goods</span></label><br />
												<label><input class="fcat"  name="horseschk" id="horseschk" type="checkbox" value="9"/><span class="pl">Horses</span></label><br />
										
						</div>
						<div style="float:left; width: 300px; font-size: 10.2pt;">
                                                           <label><input  class="fcat" name="livestockchk" id="livestockchk" type="checkbox" value="10"/><span class="pl">Livestock</span></label><br />
															<label><input class="fcat"  name="petschk" id="petschk" type="checkbox" value="11"/><span class="pl">Pets</span></label><br />
															<label><input class="fcat"  name="foodchk" id="foodchk" type="checkbox" value="12"/><span class="pl">Food & Beverages</span></label><br />
															<label><input  class="fcat" name="specialcarechk" id="specialcarechk" type="checkbox" value="13"/><span class="pl">Special Care Items</span></label><br />
															<label><input  class="fcat" name="haygrain" id="haygrain" type="checkbox" value="14"/><span class="pl">Hay, Grain & Feed</span></label><br />
															<label><input  class="fcat" name="parcelschk" id="parcelschk" type="checkbox" value="15"/><span class="pl">Parcels & Small Packages</span></label><br />
															<label><input  class="fcat" name="miningchk" id="miningchk" type="checkbox" value="16"/><span class="pl">Mining & Resources</span></label><br />
															<label><input  class="fcat" name="buildingchk" id="buildingchk" type="checkbox" value="17"/><span class="pl">Building & Industrial Materials</span></label><br />
															<label><input  class="fcat" name="bulkfreightchk" id="bulkfreightchk" type="checkbox" value="18"/><span class="pl">Other Freight</span></label><br />
											
						</div>					
	
					</div>
					<div class="clear"></div>
				</div>	
				
				<div class="clear"></div>
				<div class="sep"></div>		

				
				<div class="row">
					<div class="formlabel">Operational Area:<span class="requiredtxt"> *</span></div>
					<div class="forminput">
						<input name="area" class="required control" type="hidden" value="">	
						<label><input class="fttr_area"  name="nationalarea" id="nationalarea" type="checkbox" value="1"><span class="pl">National</span></label><br />
						<label><input  class="fttr_area"  name="internationalarea" id="internationalarea" type="checkbox" value="2"><span class="pl">International</span></label><br />
											</div>
					<div class="clear"></div>
				</div>	
				<div class="clear"></div>
				<div class="sep"></div>
                
                <div class="row">
					<div class="formlabel">Transportations Means:<span class="requiredtxt"> *</span></div>
					<div class="forminput">
						<input name="ttr_means" class="required control" type="hidden" value="">	
						<label><input class="fttrmeans" name="maritimemeans" id="maritimemeans" type="checkbox" value="1"><span class="pl">Maritime</span></label><br />
						<label><input  class="fttrmeans" name="byairplane" id="byairplane" type="checkbox" value="2"><span class="pl">By Airplane</span></label><br />
						<label><input  class="fttrmeans" name="byroute" id="byroute" type="checkbox" value="3"><span class="pl">By Route</span></label><br />
                        					</div>
					<div class="clear"></div>
				</div>	
				<div class="clear"></div>
				<div class="sep"></div>
				
				  <strong>Terms &amp; Conditions of Service</strong><br />
					<input  class="required" name="accept_terms" id="accept_terms" type="checkbox" value="1"> I accept the <a class="iframe  fancybox.iframe" href="<?= Link::Build('public/rules')?>" target="_blank"><strong>terms &amp; conditions</strong></a> set out by Freightmeta					<input name="accept_terms_check" id="accept_terms_check" type="hidden" value="">		
					<br /><br />
						
				<div class="uibutton">
				<button type="submit" class="fr btn-primary rounded5" onclick="">Join us as Transporter</button>	
				<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
				</div>	
		
					

				
				<div class="clear"></div>			
				
					
				
				</form>
			</div>

	
	

				<!--  end of content -->
	
			<div class="clear"></div>
		</div>	
	</div>
    


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