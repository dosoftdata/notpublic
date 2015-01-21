<?php
  // Activate session
  //header("Location: login.php");
  //header('Location :login.php'); 
  session_start();
  session_id();
  if (!isset($_SESSION['add_freight']) )
  {
      $_SESSION['add_freight'] = sha1('freightmeta');
  }
  require_once 'header.php';?>
  <title><?= SITE_NAME?> | Add freight</title> 
 <style type="text/css">

.preview
{
width:100px;
border:solid 1px #dedede;
padding:10px;
height: 100px;
margin-left:145px;
margin-bottom: 5px;
}
#preview
{
color:#cc0000;
font-size:12px

}
.note{
    position: relative;
    margin-top: -2px;
    font-weight: bold;
    margin-left: 140px;
    
}
 </style> 
 </head> 
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!-- This div is used to indicate the original position of the scrollable fixed div. -->
  <?php 
    //require_once HELPERS_DIR .'nav.php';
    ///require_once HELPERS_DIR .'i18n.php';  
    ?>
    <div id="site-top-bar" >
<div id="site-top-bar_content" class="mainboxshadow">
<a style="color: #FFFFFF;" href="<?= Link::Build(''); ?>">
<div id="site-top-bar_logo" style="font-size: 28px; font-weight: bold;">
Freightmeta<span style="color: #7F7F7F;">.com</span>
</div>
</a>
<div  id="site-top-bar_addfreight" style="font-size: 10px; background-color: #000 !important;" >
<ul style="margin-left: 0px;">
<li><span ><a href="<?= Link::Build('public/add_freight.php'); ?>" >Freights</a></span></li>
<li  style="margin-top: -7px;"><span style="font-weight: lighter;" ><a href="<?= Link::Build('public/add_freight.php'); ?>">Add your Freight</a></span></li>
</ul>
</div>
<div  id="site-top-bar_addfreight1" style="font-size: 10px;" >
<ul style="margin-left: 0px;">
<li><span ><a href="<?= Link::Build('public/freight_list.php'); ?>">Quotes</span></a></li>
<li style="margin-top: -7px;"><span style="font-weight: lighter;" ><a href=" <?= Link::Build('public/freight_list.php'); ?>">Freight Quotes</span></a></li>
</ul>
</div>
<div  id="site-top-bar_addfreight2"style="border-right: none;font-size: 10px;" >
<ul style="margin-left: 0px;">
<li><span ><a href="<?= Link::Build('public/login.php'); ?>" >Log in </a></span><span style="font-size: 20px;">or</span></li>
<li style="margin-top: -8px;"><span style="font-weight: lighter;"><a href="<?= Link::Build('public/account.php'); ?>">Register account</a></span>
</li>
</ul>
</div>
</div>
</div>
<div id="bar_txt_banner">
<div id="bar_txt_banner_container">
<div class="txtbanner fl">
<span style="font-size: 15pt; font-weight: bold;"> Find Transporter Worldwide - Get <a style="font-size: 28px; text-decoration: underline;color: #4A96DA;"><i>Online</i></a> Quotes !</span>
</div>
<div id="login_options" class="fr">
			<div class="header_option fl" style="border-left: none;">
				<a class="fz" href="<?= Link::Build('public/how_it_works.php'); ?>"><strong>How It Works</strong></a>
			</div>
			<div class="header_option fl">
				<a class="fz" href="<?= Link::Build('public/faq.php'); ?>"><strong>FAQ</strong></a>
			</div>
			<div class="header_option fl">
				<a class="fz" href="<?= Link::Build('public/about_us.php'); ?>"><strong>About Us</strong></a>
			</div>									
			<div class="header_option fl">
				<a  class="fz" href="<?= Link::Build('public/contact_us.php'); ?>"><strong>Contact Us</strong></a>
			</div>				
		</div>
        <div class="clear"></div>
</div>
</div>

    <div style="position: absolute; top: 0spx;"></div>
 <div id="middle" style="color: black; top:0px;">
  <div id="middle_container" >    
<div class="container_2">
 <table cellpadding="0" cellspacing="0" border="0" >
  <div id="addfreight_container_title" class="bluebgimg">
            <span style="color: #FFFFFF; position: absolute;left: 58px;top: -5px; font-size: 35px;">
                Need Something Moved?
            </span>
            <br />
            <span style="color: white;position: relative; margin-left: 58px;top: 17px; font-size: 10pt; font-weight: lighter;" >
                Tell us what you need to move and receive free quotes from customer-rated transport providers. You can save upto 60%
            </span>
            <img  alt="Free Quotes" src="<?= SITE_URL?>public/images/gen/freequotes2.png" class="fl rounded7 ro2d" style="position:absolute;width: 75px;height: 60px;top: -2px; background-size: 100% 100%;left:-15px;" />
          </div>
  </table>    
 <div class="grid_1 alpha pull_1 fl rounded7">
 <div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
  <div id="loaderstatus" class="hidden"><img src="<?= Link::Build('public/images/loader.gif')?>" alt="Uploading...." style="width: 220px; height: 19px;"/></div>
 <!-- start of left column -->

			<div class="fl column" id="list-freight-form"  style="padding-top:2px; padding-left:2px; width:590px;">		
            <!--step1 start-!--->
            <div class="from1" style="display: block;">
				<div id="receiver-postfreight1" class="receiver"></div>
				<form id="imageform" method="post" enctype="multipart/form-data" action='<?= Link::Build('public/ajaximage.php')?>' onsubmit="return false;" >
				<input name="task" type="hidden" value="insert">
				<input name="freightid" type="hidden" value="">	
				<input name="memberid" type="hidden" value="">	
				<input name="rq" type="hidden" value="">	
				<input name="subcatid_check" type="hidden" value="">
                	
				<div  id="step1-container" style="margin-top:0px;">	
					<div class="form-section-header">Select Category</div>
					<div class="row">
						<div class="formlabel">Freight category:<span class="requiredtxt">*</span></div>
						<div class="forminput">
							<div style="float:left; margin-left: -45px;">
								<select style="font-size: 9pt;font-weight: lighter; width:220px;" name="_CATNAME" id="category" class="control input required"  size="7" >
								<?= fm_freight::load_categoriesad() ?>
								</select>
							</div>
<div id="loadata-container" class="hidden" >
<div  id="subcategories" class="hidden" style="float:right; margin-left:20px; position: relative; position: absolute;top: 0px; right: 0px;">
<div class="fl" style="">
<img src="<?= Link::Build('public/images/gen/arrow12.gif'); ?>" style="margin-top:45px; margin-right:8px; margin-left: 8px;"></div>
<div class="fl">
<select style="font-size: 9pt;font-weight: lighter; width:220px;"  class="control input required" name="_SUBCATNAME" id="subcategory" class="hidden" size="7" >
</select>
</div> 
</div>

						</div>
						<div class="clear"></div>
					</div>
				</div>
				<img src="images/ajax-loader-large.gif" name="loaderimage-large" id="loaderimage-large" style="display:none;  margin-top:50px; margin-left:330px;" />
				
                
                <div  id="step2-container" class="hidden"  style="margin-top:40px; display:block;"> 
					<div class="clear"></div>
					<div class="sep"></div>	
					<div class="form-section-header">Shipment Details</div>
                    <div class="row" >

     	<!-- start of dynamic freight questions -->
<div id="dynamic_questions"></div>

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

				<div class="clear"></div>
					<div class="sep"></div>	
	<div class="formlabel" style="width: 700px;">Describe what you need moved:<span class="lighttext"></span><span class="requiredtxt">*</span></div>	
					<div class="row" id="title-container">
						<div class="forminput" style="margin-left: 140px;">
						<input name="title" type="text" class="control" id="title" style="width:100%;" value="" maxlength="60"><br /></div>
						<div class="clear"></div>
					</div>								
					<div class="clear"></div>
					<div class="sep"></div>						
			<div class="formlabel" style="width: 700px;">Any additional notes about your shipment:</div>
					<div class="row">					
						<div class="forminput" style="margin-left: 140px;">
							<textarea name="detailed_description" cols="" rows="1" class="control" style="width:97%; height: 100px;"></textarea>
						</div>
						<div class="clear"></div>
					</div>	
					<div class="clear"></div>
					<div class="sep"></div>						
	<div class="formlabel" style="width: 700px;">Images of your frieght (optional):</div>	
					<div class="row">
                    <div id='preview'  class="fl"></div>
					<div class="forminput" style="margin-left: 140px;">
                    <div class="field file-wrapper">
                    <div id='imageloadstatus' style='display:none'><img src="<?= Link::Build('public/images/loader.gif')?>" alt="Uploading...."/></div>	
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
	<div class="formlabel" style="width: 700px;">Between what dates do you need your goods  moved? <span class="requiredtxt">*</span></div>
					<div class="row">
						<div class="forminput"  style="margin-left: 140px; width: 450px;">
							<input name="fromdate" type="text" class="required control" id="fromdate" style="cursor:pointer; width:110px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
					 to <input name="todate" type="text" class="required control" id="todate" style="cursor:pointer; width:110px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly></div>

						<div class="clear"></div>
					</div>			
					<div class="clear"></div>
					<div class="sep"></div>						
<div class="formlabel" style="width: 700px;">How long should this shipment stay open for quotes? <span class="requiredtxt">*</span></div>	
					<div class="row">
						<div class="forminput" style="margin-left: 140px;">
							<select name="staydays" id="staydays" type="text" class="required control" style="width:110px;">
								<option value="">Select</option>
								<option value="3"  >3 days</option>
								<option value="5"  >5 days</option>
								<option value="7"  >1 week</option>
								<option value="14" >2 weeks</option>
								<option value="28" >4 weeks</option>
							</select>
						</div><br />
					</div>										
					<div class="clear"></div>
					<div class="sep"></div>	                 	
					
                    <script type="text/javascript">
var whos=null;
function getplaces(gid,src)
{	
	whos = src
//	var  request = "http://ws.geonames.org/childrenJSON?geonameId="+gid+"&callback=getLocation&style=long";
	var request = "http://www.geonames.org/childrenJSON?geonameId="+gid+"&callback=listPlaces&style=long";
	aObj = new JSONscriptRequest(request);
	aObj.buildScriptTag();
	aObj.addScriptTag();	
}

function listPlaces(jData)
{
	counts = jData.geonames.length<jData.totalResultsCount ? jData.geonames.length : jData.totalResultsCount
	who = document.getElementById(whos)
	who.options.length = 0;
	if(counts)who.options[who.options.length] = new Option('Select','')
	else who.options[who.options.length] = new Option('No Data Available','NULL')		
	for(var i=0;i<counts;i++)
	who.options[who.options.length] = new Option(jData.geonames[i].name,jData.geonames[i].geonameId)
	delete jData;
	jData = null		
}
</script>
                    <div class="form-section-header">Pickup and Delivery details:</div>
<div id='notification_div'></div>
<div class='main'>
<div class="contents">              
                    <h1>Pickup detail:</h1>
                    <div class="row">
                    <div class="formlabel"> Continent: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                     <span>
                <select name="continentin" id="continentin" class="required control" onchange="getplaces(this.value,'country');">
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
                <select name="country" id="country" class="required control" onchange="getplaces(this.value,'province');">
                   <option value=""></option>						
                   </select>
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row">
                   <div class="formlabel"> State: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                   <span>
                <select name="province" id="province" class="required control" onchange="getplaces(this.value,'region')">
                   <option value=""></option>
                   </select>
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Region: </div>
                    <div class="forminput">
                  <span>
                 <select name="region" id="region"  onchange="getplaces(this.value,'city')">
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
                 <select name="city" id="city">
                     <option value=""></option></select>

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
                <input style="width: 100px;" id="Ormypostcode" class="zipcode" maxlength="10" name="Ormypostcode" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Address: <span class="requiredtxt">*</span></div>
                    <div class="forminput">
                    <span>
               <input style="width: 260px;" id="Orrefdetail" class="input required control" maxlength="255" name="Orrefdetail" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                   	<div class="clear"></div>
                    <div class="sep2"></div>
                    <div id='notification_div'></div>
<div class='main'>
<div class="contents"> 
                  <h1> Delivery detail:</h1>
                 <div class="row">
                    <div class="formlabel"> Continent:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                    <span>
                <select name="continentout" id="continentout" class="required control" onchange="getmyplaces(this.value,'mycountry');">
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
                <select name="mycountry" id="mycountry" class="required control" onchange="getmyplaces(this.value,'myprovince');">
                <option value=""></option>						
                 </select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> State:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                    <span>
                <select name="myprovince" id="myprovince" class="required control" onchange="getmyplaces(this.value,'myregion')">
                    <option value=""></option>
                </select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel">Region: </div>
                    <div class="forminput">
                    <span>
                <select name="myregion" id="myregion" onchange="getmyplaces(this.value,'mycity')">
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
                <select name="mycity" id="mycity">
                 <option value=""></option></select>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <script type="text/javascript">
var whos=null;
function getmyplaces(mygid,mysrc)
{	
	whos = mysrc

//	var  request = "http://ws.geonames.org/childrenJSON?geonameId="+mygid+"&callback=getLocation&style=long" 1831722;
	var request = "http://www.geonames.org/childrenJSON?geonameId="+mygid+"&callback=mylistPlaces&style=long";
	aObj = new JSONscriptRequest(request);
	aObj.buildScriptTag();
	aObj.addScriptTag();	
}

function mylistPlaces(Jdata)
{
	counts = Jdata.geonames.length<Jdata.totalResultsCount ? Jdata.geonames.length : Jdata.totalResultsCount
	who = document.getElementById(whos)
	who.options.length = 0;
	if(counts)who.options[who.options.length] = new Option('Select','')
	else who.options[who.options.length] = new Option('No Data Available','NULL')		
	for(var i=0;i<counts;i++)
		who.options[who.options.length] = new Option(Jdata.geonames[i].name,Jdata.geonames[i].geonameId)
	delete Jdata;
	Jdata = null		
}
 $('#continentout').focus(function(){getmyplaces(6295630,'continentout');});
 $('#continentin').focus(function(){getplaces(6295630,'continentin');}); 
</script>
                    <div class="row">
                    <div class="formlabel">Post code: </div>
                    <div class="forminput">
                   <span>
                <input style="width: 100px;" id="Dsmypostcode" class="zipcode" maxlength="10" name="Dsmypostcode" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Address:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                <input class="required input checkey" style="width: 260px;" id="Dsrefdetail"  maxlength="50" name="Dsrefdetail" size="20" type="text" tabindex="1" value="" />
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
</div>
</div>					

                  <div class="sep2"></div>
                    <div class="form-section-header">User register:</div>
                    <a style="text-decoration: underline;" class="fz11 iframe  fancybox.iframe"href="<?= Link::Build('public/login.php?status=memberlog') ?>" title="Login for freighmeta member" target="_blank"> I have already my account!</a>
                    <div class="row">
                    <div class="formlabel"> Username:<span class="requiredtxt">*</span></div>
                    <div class="forminput">
                   <span>
                      <input id="usrname" class="required usernamechecked" maxlength="30" name="usrname" size="120" type="text" tabindex="3" value=""  style="width: 250px;" />
                <img id="tick" src="images/bg/tick.png" width="16" height="16"/>
               <img id="cross" src="images/bg/cross.png" width="16" height="16"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Email:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                   <input id="useremail" class="required email emailchecker" maxlength="40" name="useremail" size="120" type="text" tabindex="3" value=""  style="width: 250px;"data-bvalidator="email,required"/>
                <img id="tick" src="images/bg/tick.png" width="16" height="16"/>
               <img id="cross" src="images/bg/cross.png" width="16" height="16"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                     <div class="row">
                    <div class="formlabel"> Passowrd:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                    <input id="usrpwd" class="required password" maxlength="50" name="usrpwd" size="120" type="password" tabindex="3" value=""  style="width:250px;"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                     <div class="row">
                    <div class="formlabel"> Retype Password: </div>
                    <div class="forminput">
                   <span>
                    <input id="conusrpwd" class="required" equalTo="#usrpwd" maxlength="40" name="conusrpwd" size="120" type="password" tabindex="3" value=""  style="width: 250px;"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                    <div class="formlabel"> Firstname:<span class="requiredtxt">*</span> </div>
                    <div class="forminput">
                   <span>
                    <input  id="usrfname"  class="required" maxlength="30" name="usrfname" size="120" type="text" tabindex="3" value=""  style="width: 250px;"/>
                </span>
                    </div>
                    </div>
                    <div class="clear"></div>
                   <div class="sep2"></div> 
                   <h1>Terms &amp; Conditions of services  </h1>
                    <div class="row">
                    <div class="forminput" style="width: 500px;">
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
<span class="ui-button-text"><strong>Start Getting Quotes!</strong>
</span>

</button> 

<img src="" name="loaderimage" id="loaderimage" style="display:none;" class="fl">

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
			<!-- end of left column -->

  </div> 
     
  <div class="grid_2 omega push_1 pull_2 fr">

                              <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.qtip-1.0.0-rc3.min.js"></script>

<script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'1000',
                height: '600',
                autoDimensions:false
                //padding:'10'  
            });
            $('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
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
		});
</script>
  	 <ul style="list-style: none;left: -30px;">
          <li style="list-style: none;">
            <a class="fancybox-media" href="https://www.youtube.com/watch?v=bFxomsECdNs?autoplay=1">
              <div id="addfreight_yt_video" class="rounded7"></div>
            </a>
          </li>
        </ul>
        <div id="addfreight_how_it_work" style=" margin-left:20px;">
      <div id="list-faq-container" style="background-color:#eef2e1; padding:20px;" class="rounded">
				<h2>FAQ</h2>
				<p style="margin-top: 10px;"><strong><a href="#" class="faq" rel="ajax_faq.php?id=1" title="FAQ">How does it work?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=2" title="FAQ">What can I ship with Freightmeta?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=3" title="FAQ">How do I pay?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=4" title="FAQ">What if I don't know the weight or dimensions of my shipment?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=5" title="FAQ">What if the transporter needs extra information from me in order to provide an accurate quote?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=6" title="FAQ">What happens after I've accepted a quote from a transport provider?</a></strong><br /></p><p><strong><a href="#" class="faq" rel="ajax_faq.php?id=7" title="FAQ">How do I get more quotes?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=8" title="FAQ">What If I need to change the details of my shipment that I've already listed?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=9" title="FAQ">How do I know if the transport provider is trustworthy or not?</a></strong><br /></p><p><strong><a href="#" rel="ajax_faq.php?id=10" title="FAQ">How long does it take to get quotes?</a></strong></p>				
				</div>
        </div>
      </div>
 <div class="clear"></div>
        </div>
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
  <script type="text/javascript" src="<?= SITE_URL?>public/js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="<?= SITE_URL?>public/js/mktSignupfreight.js"></script> 
    <!--script type="text/javascript" src="<?php // SITE_URL?>public/js/incs/pwdwidget.js"></script!--->
    <script type="text/javascript">
    // <![CDATA[
    //var pwdwidget = new PasswordWidget('thepwddiv','password');
    //pwdwidget.MakePWDWidget();
// ]]>
    </script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/qtip/jquery-1.3.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/qtip/jquery.qtip-1.0.0-rc3.min.js'); ?>"></script>
    <script type="text/javascript">
  $.noConflict();
	jQuery(document).ready(function($) {
    // Use the each() method to gain access to each elements attributes
   $('#list-faq-container a[rel]').each(function()
   {
    //alert('qtip');
      $(this).qtip(
      {
         content: {
            // Set the text to an image HTML string with the correct src URL to the loading image you want to use
            text: 'Loading...',
            url: $(this).attr('rel'), // Use the rel attribute of each element for the url to load
            title: {
               text: $(this).attr('title'), // Give the tooltip a title using each elements text
               button: 'Close' // Show a close link in the title
            }
         },
         position: {
            corner: {
               target: 'bottomMiddle', // Position the tooltip above the link
               tooltip: 'topMiddle'
            },
            adjust: {
               screen: true // Keep the tooltip on-screen at all times
            }
         },
         show: { 
            when: 'click', 
            solo: true // Only show one tooltip at a time
         },
         hide: 'unfocus',
         style: {
            tip: true, // Apply a speech bubble tip to the tooltip at the designated tooltip corner
            border: {
               width: 0,
               radius: 4
            },
            name: 'light', // Use the default light style
            width: 370 // Set the tooltip width
         }
      })
   });
		});

</script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= Link::Build('public/js/incs/jquery.wallform.js'); ?>"></script>
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