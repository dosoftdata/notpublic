<div class="column" id="list-freight-form"  style="padding-top:2px; padding-left:2px; width:610px; float:left;margin-left: -20px;">		
            <!--step1 start-!--->
<div class="alert-box hidden" style="width: 500px;">
<span id="idsms"> </span> <em>:</em><em id="msn"></em>
</div>
            <div class="from1" style="display: block;">
				<div id="receiver-postfreight1" class="receiver"></div>
				<form id="imageform" method="post" enctype="multipart/form-data" action='<?=

Link::Build('public/ajaximage.php')

?>' onsubmit="return false;" >
				<input name="task" type="hidden" id="editffreight" value="new"/>
				<input name="freightid" type="hidden" value=""/>	
				<input name="memberid" type="hidden" value=""/>	
				<input name="rq" type="hidden" value=""/>	
				<input name="subcatid_check" type="hidden" value=""/>
                	
				<div  id="step1-container" style="margin-top:0px; width: 100%;">	
					<div class="form-section-header">Select Category</div>
					<div class="row">
						<div class="formlabel">Freight category:<span class="requiredtxt">*</span></div>
						<div class="forminput">
							<div style="float:left; margin-left: -45px;">
								<select style="font-size: 9pt;font-weight: lighter; width:220px;" name="_CATNAME" id="category" class="control input required"  size="7" onclick="find_freight_subcat()" >
								<?=

fm_freight::load_categoriesad()

?>
								</select>
							</div>

<div id="loadata-container" class="hidden" >
<div  id="subcategories" class="hidden" style="float:right; position: absolute;top: 0px; right:40px;">
<div id="dynamicsubcatval"></div>
<div class="fl" style=" ">
<img src="<?=

Link::Build('public/images/gen/arrow12.gif');

?>" style="margin-top:45px; margin-right:1px; margin-left: 1px;"/></div>
<div class="fl">
<select style="font-size: 9pt;font-weight: lighter; width:220px;"  class="control input required" name="_SUBCATNAME" id="subcategory" class="hidden" size="7" >
</select>
</div> 
</div>
</div>
						<div class="clear"></div>
					</div>
				</div>
				<img src="images/ajax-loader.gif" name="loaderimage-large" id="loaderimage-large" style="display:none;  margin-top:50px; margin-left:330px;" />
				
                
                <div  id="step2-container" class="hidden"  style="margin-top:40px; display:block;"> 
					<div class="clear"></div>
					<div class="sep"></div>	
					<div class="form-section-header">Shipment Details</div>
          
          <div class="row" id="items_div">
          <div class="row">
                    <div class="formlabel">Incoterms:</div>
                    <div class="forminput">
                    <span>
                    	<select name="incoterms" id="incoterms" type="text" class=" control" style="width:350px;">
								<option value="">-Select one- </option>
								<option value="CFR">CFR(Cost and Freight)</option>
								<option value="CIF">CIF(Cost,Insurance and Freight)</option>
								<option value="CIP">CIP(Carriage and Insurance Paid To)</option>
								<option value="CPT">CPT(Carriage Paid To)</option>
								<option value="DAF">DAF(Delivered At Frontier)</option>
                                <option value="DDU">DDU(Delivered Duty Unpaid)</option>
                                <option value="DDP">DDP(Delivered Duty Paid)</option>
                                <option value="DES">DES(Delivered Ex Ship)</option>
                                <option value="DEQ">DEQ(Delivered Ex Quay</option>
                                <option value="EXW">EXW(Ex Works F)</option>
                                <option value="FAS">FAS(Free Alongside Ship)</option>
                                <option value="FCA">FCA(Free Carrier )</option>
                                <option value="FOB">FOB(Free on Board)</option>
                                 <option value="FOT">FOT(Free on Truck)</option>
                                
							</select>
                </span>
                    </div>
                    </div>
          <!---span class="pl">
          
          <div class="formlabel " style="width: 40%;">Freight payment Type:</div>
         <div class="row fl" style=" width:385px; left: 165px;">
          <div class="forminput" style="width: 60%;">
         <label><input class="ffob"  name="fob" id="fob" type="checkbox" value="2"/><span class="pl">FOB</span><span class="lighttext" style="font-weight: lighter; font-size: 8pt;"> (Free on Board)</span></label><br />
         </div>
         <div class="forminput" style="width: 100%;">
         <label><input class="fcip"  name="cip" id="cip" type="checkbox" value="4"/><span class="pl">CIF</span><span class="lighttext" style="font-weight: lighter; font-size: 8pt;"> (Cost,Insurance and Freight-)</span></label><br />
          </div>
          </div>
          </span!--->
          </div>          
                    
                    <div class="row" >

     	<!-- start of dynamic freight questions -->
<div id="dynamic_questions">

</div>

     	<!-- end of dynamic freight questions -->               
                    </div>
			<script>
             //===========================

   function showHideUnsureWarning(div){
	var id = $(div).attr('id');
	//console.log(id);
	warningdiv = $(div).next();
	//console.log(warningdiv);
	//console.log('aaaa');
	var id = $(div).attr('id');
	ischecked = $('#' + id).is(":checked");
	var splitResult = id.split("-");
	num = splitResult[1];
	//console.log(num);
	if(ischecked == true){
		//console.log('checked');
		$(warningdiv).show();
	}
	else{
		//console.log('unchecked');
		$(warningdiv).hide();
	}
}  
//=====================================
//=========================================
            </script>	 

				<!---div class="clear"></div>
					<div class="sep"></div>	
	<div class="formlabel" style="width: 700px;">Describe what you need moved:<span class="lighttext"></span><span class="requiredtxt">*</span></div>	
					<div class="row" id="title-container">
						<div class="forminput" style="margin-left: 140px;">
						<input name="title" type="text" class="control" id="title" style="width:100%;" value="" maxlength="60"><br /></div>
						<div class="clear"></div>
					</div!--->								
					<div class="clear"></div>
					<!---div class="sep"></div>						
			<div class="formlabel" style="width: 700px;">Any additional notes about your shipment:</div>
					<div class="row">					
						<div class="forminput" style="margin-left: 140px;">
							<textarea name="detailed_description" cols="" rows="1" class="control" style="width:97%; height: 100px;"></textarea>
						</div>
						<div class="clear"></div>
					</div!--->	
					<div class="clear"></div>
					<div class="sep"></div>						
	<div class="formlabel" style="width: 700px;">Images of your frieght (optional):</div>	
					<div class="row">
                    <div id='preview'  class="fl"></div>
					<div class="forminput" style="margin-left: 140px;">
                    <div class="field file-wrapper">
                    <div id='imageloadstatus' style='display:none'><img src="<?=

Link::Build('public/images/loader.gif')

?>" alt="Uploading...."/></div>	
                    <span>	
                    <div id='imageloadbutton'>		
					<input class="input freightphoto" name="photoimg" id="photoimg" type="file"  />
                   <span class="button button_fm">Choose image</span>
                   </div>
                     </span>	
					</div>		
					</div>
                    <div class="row" style="">
                    <span class="formnotes note">Valid image format:<span style="color:#5aa5cc;">JPG</span>/Max size:<span style="color:#5aa5cc;">1M</span>(1024 bytes).</span>
                    </div>
                    <div class="clear"></div>
					</div>			
					<div class="clear"></div>
					<div class="sep"></div>											
	<div class="formlabel" style="width: 700px;">Pick up date:<span class="requiredtxt">*</span></div>
					<div class="row">
               
       
						<div class="forminput"  style="margin-left: 10px; width: 700px;">
                             <select name="datetype" id="datetype" type="text" class="required control" style="width:150px;" onchange="returndateselect()">
								<option value="0"selected=""  >-Select one-</option>
                                <option value="1">ON</option>
								<option value="2">Between</option>
								<option value="3">Before</option>
							</select>
                      <span class="betweendate hidden">
					    <input name="fromdate" type="text" class="required control" id="fromdate" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
					    and: <input name="todate" type="text" class="required control" id="todate" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
                        </span>
                        <span class="ondate hidden">
                        <input name="fromdatealt" type="text" class="required control" id="fromdatealt" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
                        </span>
                        <span class="beforedate hidden">
                        <input name="beforedate" type="text" class="required control" id="beforedate" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
                        </span>
                     
                     </div>

						<div class="clear"></div>
					</div>			
					<div class="clear"></div>
					<div class="sep"></div>						
<div class="formlabel " style="width: 700px;">How long should this shipment stay open for quotes? <span class="requiredtxt">*</span></div>	
					<div class="row">
						<div class="forminput" style="margin-left: 140px;">
							<select name="staydays" id="staydays" type="text" class="required control" style="width:130px;">
								<option value="">Select</option>
								<option value="3"  >3 days</option>
								<option value="5"  >5 days</option>
								<option value="7"  >1 week</option>
								<option value="14" >2 weeks</option>
								<option value="28" >4 weeks</option>
							</select>
						</div><br /><br />
					</div>										
					<div class="clear"></div>
					<div class="sep"></div>	                 	
					
                    <div class="form-section-header">Pickup and Delivery details:</div>
<div id='notification_div'></div>
<div class='main'>
<div class="contents">              
                    <h1>Pickup detail:</h1>
                    <div class="row hidden">
                    <div class="formlabel"> Continent: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                     <span>
                <select style="width: 350px;"  name="continentin" id="continentin" class=" control" onchange="">
              <option value="Select"></option>						
                   </select>
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>                 
                    <div class="row">
                    <div class="formlabel">Country: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                    <span>
                    <input style="width: 350px;"   id="country" class="input required control" name="country" placeholder="Country Name"   type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row hidden">
                   <div class="formlabel"> State: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                   <span>
                <select style="width: 350px;"  name="province" id="province" class=" control" onchange="">
                   <option value=""></option>
                   </select>
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row hidden">
                    <div class="formlabel"> Region: </div>
                    <div class="forminput">
                  <span>
                 <select style="width: 350px;"  name="region" id="region">
                 <option value=""></option>
                  </select>
                </span>
                    </div>
                    </div>
             	      <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> City: </div>
                    <div class="forminput">
                     <span>
                     <input style="width: 350px;"   id="city" class="input required control" name="city" placeholder="City Name"   type="text" tabindex="1" value="" />
                 

                </span>

                    </div>

                    </div>

                    <div class="clear"></div>

              </div>   

    </div>  
                    <div class="row">
                    <div class="formlabel"> Post code: </div>
                    <div class="forminput">
                    <span>
                <input style="width: 120px;" id="Ormypostcode" class="input  control" placeholder="Post-code" maxlength="10" name="Ormypostcode" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Address reference: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                    <span>
                  	<select name="pickupref" id="pickupref" type="text" class="required control" style="width: 350px;">
							<option selected="selected" value="-1">-Select One-</option>
		<option value="0">Residential</option>
		<option value="2">Business (with loading bay or forklift)</option>
		<option value="3">Business (without loading bay or forklift)</option>
		<option value="6">Port</option>
		<option value="4">Construction Site</option>
		<option value="5">Trade Show / Exhibition</option>
		<option value="7">Storage Facility</option>
		<option value="9">Military Base</option>
		<option value="10">Airport</option>
		<option value="11">Other Secured or Limited Access Location</option>
							</select>  
               
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Address: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                    <span>
               <input style="width: 350px;"  id="Orrefdetail" class="input required control" maxlength="255" placeholder="Full address" name="Orrefdetail" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>								
					<div class="sep"></div>
                    <div id='notification_div'></div>
<div class='main'>
<div class="contents"> 
                  <h1> Delivery detail:</h1>
                 <div class="row hidden">
                    <div   class="formlabel"> Continent:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                    <span>
                <select style="width: 350px;"  name="continentout" id="continentout" class=" control" onchange="">
                   <option value="Select"></option>						
                    </select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Country:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                 <span>
                 <input style="width: 350px;"   id="mycountry" class="input required control" name="mycountry" placeholder="Country Name"   type="text" tabindex="1" value="" />
               
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row hidden">
                    <div class="formlabel"> State:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                    <span>
                <select style="width: 350px;"  name="myprovince" id="myprovince" class="required control" onchange="getmyplaces(this.value,'myregion')">
                    <option value=""></option>
                </select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row hidden">
                    <div class="formlabel">Region: </div>
                    <div class="forminput">
                    <span>
                <select style="width: 350px;"  name="myregion" id="myregion" onchange="getmyplaces(this.value,'mycity')">
                   <option value=""></option>
                </select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> City: </div>
                    <div class="forminput">
                    <span>
                <input style="width: 350px;"   id="mycity" class="input required control" name="mycity" placeholder="City Name"   type="text" tabindex="1" value="" />
               
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    
                    <div class="row">
                    <div class="formlabel">Post code: </div>
                    <div class="forminput">
                   <span>
                <input style="width: 120px;" id="Dsmypostcode" class="input control" placeholder="Post-code" maxlength="10" name="Dsmypostcode" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                    <div class="row">
                    <div class="formlabel"> Address reference: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                    <span>
                  	<select name="deliveryref" id="deliveryref" type="text" class="required control" style="width: 350px;">
							<option selected="selected" value="-1">-Select One-</option>
		<option value="0">Residential</option>
		<option value="2">Business (with loading bay or forklift)</option>
		<option value="3">Business (without loading bay or forklift)</option>
		<option value="6">Port</option>
		<option value="4">Construction Site</option>
		<option value="5">Trade Show / Exhibition</option>
		<option value="7">Storage Facility</option>
		<option value="9">Military Base</option>
		<option value="10">Airport</option>
		<option value="11">Other Secured or Limited Access Location</option>
							</select>  
               
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Address:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                <input class="required input checkey" style="width: 350px;"  id="Dsrefdetail" placeholder="Full address"  maxlength="255" name="Dsrefdetail" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                     <div class="sep2"></div>
                    
                   	<div class="clear"></div>
                   
</div>
</div>					

                  <div style="" class="custregister">
                    <div class="form-section-header">User register:</div>
                    <!---strong>Already have account?</strong><a style="text-decoration: underline;" class="fz11 iframe  fancybox.iframe"href="" title="Login for freighmeta member" target="_blank"> Click here to login.</a!--->
                    <div class="row">
                    <div id="fmCheck"></div>
                    <div class="formlabel"> Username:<span class="requiredtxt">*</span></div>
                    <div class="forminput">
                   <span>
                      <input id="usrname" class="required usernamechecked fmusrnm input" maxlength="20" name="usrname" size="120" type="text" tabindex="3" value=""  style="width: 350px;" /><br />
                      <span style="width: 500px;" class="formnotes notefail">Enter between 3-8 character</span>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div id="fmCheckm"></div>
                    <div class="formlabel"> Email:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                   <input id="useremail" class="required email fmmail input" maxlength="40" name="useremail" size="120" type="text" tabindex="3" value=""  style="width: 350px;"data-bvalidator="email,required"/>

                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                     <div class="row">
                    <div class="formlabel"> Passowrd:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                    <input id="usrpwd" class="required password input" maxlength="50" name="usrpwd" size="120" type="password" tabindex="3" value=""  style="width:350px;"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                     <div class="row">
                    <div class="formlabel"> Retype Password: </div>
                    <div class="forminput">
                   <span>
                    <input id="conusrpwd" class="required input" equalTo="#usrpwd" maxlength="40" name="conusrpwd" size="120" type="password" tabindex="3" value=""  style="width: 350px;"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Firstname:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                    <input  id="usrfname"  class="required input" maxlength="30" name="usrfname" size="120" type="text" tabindex="3" value=""  style="width: 350px;"/>
                </span>
                    </div>
                    <div class="clear"></div>
                    </div>
                    <!---div class="row">
                    <div class="formlabel">Bank card Number:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                    <input  id="card_number"  class="required input" maxlength="100" name="card_number" size="120" type="text" tabindex="3" value=""  style="width: 350px;" placeholder="Card Number"/><br />
                    <span style="width: 500px;" class="formnotes notefail">No cost</span><br />
                    <input  id="expiry_date"  class="required input" maxlength="5" name="expiry_date" size="120" type="text" tabindex="3" value=""  style="width: 80px;" placeholder="00/00"/>
                    <span>(Expiry date)</span><br /><br />
                    <input  id="cvv"  class="required input" maxlength="3" name="cvv" size="120" type="text" tabindex="3" value=""  style="width: 80px;" placeholder="000"/>
                    <span>(CVV)</span><br />
                </span>
                    </div>
                    <div class="clear"></div>
                    </div!--->
                    <div class="row">
                    <div class="forminput" style="margin-left: 180px;">
                   <span>
                    <input  checked="1" id="rememberme"  class="input" maxlength="1" name="remember" size="15" type="checkbox" tabindex="3" value=""  style="width: 15px;"/><span style="position: relative;" class="pl">Remember me</span>
                </span>
                    </div>
                    <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                   <div class="sep2"></div> 
                   </div>
                   <h1>Terms &amp; Conditions of services  </h1>
                    <div class="row">
                    <div class="forminput" style="width: 100%">
                   <span>
                   <input type="checkbox"  name="rules"  id="rules"  class="required " maxlength="2" tabindex="1" value="1"  style="width:20px;"/>
                   <a style="text-decoration: underline;" class="fz11 iframe  fancybox.iframe"href="<?=

Link::Build('public/rules.php?status=rules')

?>" >Terms & Conditions of services set out by freighmeta teams</a >
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
					<div class="clear"></div>
					<div style="margin-top:20px;">
                    
<!---div class="uibutton ">
		<button type="submit" class="fr btn-primary rounded5" onclick="">Start Getting Quotes</button>	
		<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
  </div!--->
                    
                    
<div style="float:left; margin-left:6px;">
<button type="submit" onclick="$('#loaderimage').show();" class="fr ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
<span class="ui-button-text"><strong>Start Getting Quotes!</strong>
</span>
</button> 
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl">
</div>
				</div><!---step1 end!--->                          
	 <div class="from2" style="display:block;">
                    </div><!---End step 2!--->
                    <div class="toreg" style="display:block;">
                    </div><!---End register step 2!--->

</div>
		<div class="clear"></div>								

					</form>
			</div>
       </div><!---! End step 2 --->
       </div><!---! End loadata-container --->