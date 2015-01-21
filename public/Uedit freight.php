<?php
require_once 'header.php';
$custid =Util::StrCookie('susrid');
$fid = Util::StrGet('adfid');
//$custid = 25;
//$fid =20;
 ?>
  <title><?= SITE_NAME?> | <?=  'Edit freight'?></title>
  <style type="text/css">
 .successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;
    width: 70%;	
	padding: 10px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 15px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
} 
  
  </style>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php require_once HELPERS_DIR .'logged-nav.p.inc';?>
<div id="middle" style="margin-top: 30px;">
<div id="middle_container" class="rounded7">
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>
<?php 
//
Fm_User::load_customer_left_bardata($custid);
?>
<div class="column" id="rightcolumn">

<div class="headerbox" style="padding: 10px 10px 10px 10px; padding-left: 30px;">Edit listed Freight</div>
    <div class="content hidden1 pl" >
    <?php
require_once HELPERS_DIR .'add_freight_status_css.inc';
?>
  <div class="fmloader" style="top: 30%;"></div>   
    <div class="successbox hidden">
    Freight Succefully Edited!
    </div>
    <div style="padding: 20px;">
    <div class="from1" style="display: block;">
				<div id="receiver-postfreight1" class="receiver"></div>
				<form id="imageform" method="post" enctype="multipart/form-data" action='<?= Link::Build('public/ajaximage.php')?>' onsubmit="return false;" >
				<input name="task" type="hidden" id="editffreight" value="edit"/>
				<input name="freightid" type="hidden" id="freifhtid" value="<?=$_GET['adfid'];?>"/>	
				<input name="memberid" type="hidden" id="memberid" value="<?=$custid; ?>"/>	
				<input name="rq" type="hidden" value=""/>	
				<input name="subcatid_check" type="hidden" value=""/>
                <div  id="step1-container" style="margin-top:0px;">	
					<div class="form-section-header">Select Category</div>
					<div class="row">
						<div class="formlabel">Freight category:<span class="requiredtxt">*</span></div>
						<div class="forminput">
							<div style="float:left; margin-left: -45px;">
								<select style="font-size: 9pt;font-weight: lighter; width:220px;" name="_CATNAME" id="category" class="control input required"  size="7" onclick="find_freight_subcat()" >
								<?= fm_freight::load_categoriesad() ?>
								</select>
							</div>
     
<div  id="subcategories" class="hiddenf" style="float:right;  position: absolute;top: 0px; right: 90px;">
<div class="fl" style="">
<img src="images/gen/arrow12.gif" style="margin-top:45px; margin-right:8px; margin-left: 8px;"/></div>
<div class="fl">
<select style="font-size: 9pt;font-weight: lighter; width:220px;"  class="control input required" name="_SUBCATNAME" id="subcategory" class="hiddenn" size="7" >

</select>
</div> 
</div>

						
						<div class="clear"></div>
					</div>
				</div>
				<img src="images/ajax-loader.gif" name="loaderimage-large" id="loaderimage-large" style="display:none;  margin-top:50px; margin-left:330px;" />
				
                
                <div  id="step2-container" class="hiddenn"  style="margin-top:40px; display:block;"> 
					<div class="clear"></div>
                    <br />
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
          </div>
                    <div class="sep"></div>	
                    <div class="row" >

     	<!-- start of dynamic freight questions -->
<div id="dynamic_questions">


</div>

     		<?php 
  Fm_User::_C_EDIT_ACTIVE_FREIGHT(1,$custid,$fid);
   
  //require_once HELPERS_DIR .'user_profile_menu.inc';
?>
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
            
            <style>
            #preview img{
                width: 150px;
                height: 150px;
            }
            
            </style>	 									
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
					<div class="sep"></div>						
<div class="formlabel" style="width: 700px;">How long should this shipment stay open for quotes? <span class="requiredtxt">*</span></div>	
					<div class="row">
						<div class="forminput" style="margin-left: 140px;">
							<select name="staydays" id="staydays" type="text" class="required control" style="width:130px;;">
								<option value="">Select</option>
								<option value="3">3 days</option>
								<option value="5">5 days</option>
								<option value="7">1 week</option>
								<option value="14">2 weeks</option>
								<option value="28">4 weeks</option>
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

                  <div class="sep2"></div>
                  
                   <h1>Terms &amp; Conditions of services  </h1>
                    <div class="row">
                    <div class="forminput" style="width:100%;">
                   <span>
                   <input type="checkbox"  name="rules"  id="rules"  class="required " maxlength="2" tabindex="1" value="1"  style="width:20px;"/>
                   <a style="text-decoration: underline;" class="fz11 iframe  fancybox.iframe"href="<?= Link::Build('public/rules.php?status=rules') ?>" >Terms & Conditions of services set out by freighmeta teams</a >
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
					<div class="clear"></div>
					<div style="margin-top:20px;">
<div style="float:left; margin-left:6px;">
<button type="submit" class="left ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
<span id="updatefreight" class="ui-button ui-widget ui-button-icon-primary btn-primary"><strong>Update</strong>
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
       </div>
       </div>
    
    
    
</div>
</div>
<div class="clear"></div>
</div>
</div> 
<script type="text/javascript">
    $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'600',
                height: '380',
                autoDimensions:false
                //padding:'10'  
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
  <script type="text/javascript" src="js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="js/mktSignupfreight.js"></script> 
    <!--script type="text/javascript" src="<?php // SITE_URL?>public/js/incs/pwdwidget.js"></script!--->  
    <script type="text/javascript" src="<?= Link::Build('public/js/incs/jquery.min.js','https'); ?>"></script>
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
 </body>

</html>   
   
    
    
    


