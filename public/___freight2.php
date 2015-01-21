<?php
require_once 'header.php';
//fm_freight::viewedfreight();
///fm_freight::load_freight_details();
 print'<title>'. SITE_NAME.' | '.SUBCAT1_CAT1.'</title>' ;
  print <<<here
  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
here;

   require_once HELPERS_DIR .'nav_flist.php';

print <<<here
<div class="clear"></div>
</div>
</div>
<style>
table,tr,td{
    border: none;
}
</style> 
    <div id="middle">
 <div id="middle_container">
 <div id="error_box_main" class="arrow_box">
  </div>
<div id="f1_header" >
<h1 style="font-size:10pt"> 
here;
          if($result[$i]['freight_status']==1){
           print 'Freight: (0 -N)'.$result[$i]['Cat_name'].'/'.$result[$i]['subcat_name'].'-'.$result[$i]['Cat_name'].'-'.$result[$i]['Countryin'].'/'.$result[$i]['Statein'].'-'.$result[$i]['CountryOut'].'/'.$result[$i]['StateOut'].''.'<span class="status-active">Active</span>'; 
          }
          else{
            print 'Freight: (0 -N)'.$result[$i]['Cat_name'].'/'.$result[$i]['subcat_name'].'-'.$result[$i]['Cat_name'].'-'.$result[$i]['Countryin'].'/'.$result[$i]['Statein'].'-'.$result[$i]['CountryOut'].'/'.$result[$i]['StateOut'].''.'<span class="status-expired">expired</span>';
          }
 

    print <<<here
</h1>
</div>
<div id="f1_main_content" class="rounded7 outerbox" style="margin-top: 5px;">
<!-- start of quote details -->
			<div style="padding:15px; margin-bottom:20px; line-height:20px;" class="rounded innerbox">
			
				<div style="float:left; padding-right:20px;">

here;
                       $fqarry=array($result[$i]['fquotedID'],$result[$i]['talkToID']);
                 switch($fqarry)
                 {
                    case array(null,null):
                    print'<strong>Number of quotes:</strong> 0';
                    print'<strong><br>Questions:</strong>0';
                    print'<strong><br>Lowest quote:</strong>0$<br>';
                    break;
                    case array($result[$i]['fquotedID'],null):
                    //print'<strong>Number of quotes:</strong>'.self::countquotetimes($result[$i]['FreightID']).'';
                    print'<strong><br>Questions:</strong>0';
                    //print'<strong><br>Lowest quote:</strong>'.self::getlowestquote($result[$i]['FreightID']).'';
                    break;
                    case array(null,$result[$i]['talkToID']):
                    print'<strong>Number of quotes:</strong> 0';
                    //print'<strong><br>Questions:</strong>'.self::countquestiontimes($result[$i]['FreightID']).'<br/>';
                    print'<strong><br>Lowest quote:</strong>0$<br>';
                    break;
                    default:    
                    //print'<strong>Number of quotes:</strong>'.self::countquotetimes($result[$i]['FreightID']).'';
                    //print'<strong><br>Questions:</strong>'.self::countquestiontimes($result[$i]['FreightID']).'<br/>';
                    //print'<strong><br>Lowest quote:</strong>'.self::getlowestquote($result[$i]['FreightID']).'';
                    break; 
                 }
               print    '<strong>Viewed:</strong>'.$result[$i]['freight_viewed'].'</div>';	
			print	'<div style="float:left; width:380px; padding-left:10px; border-left:1px dotted #cccccc;">';
            if($result[$i]['freight_status']==1){
           print '<strong>Status:<span class="status-active">Active</span></strong><br/>'; 
          }
          else{
            print '<strong>Status:<span class="status-expired">expired</span></strong><br/>';
          }
            		
			//print'<strong>Date Posted:</strong> '.self::freightposteddate(''.$result[$i]['freight_AddedDate'].'').'<br />';
			//print'<strong>Expires:</strong> '.self::leftdatetime(''.$result[$i]['freight_AddedDate'].'',''.$result[$i]['freight_Stay_to'].'').'<br/>';
			print'<strong>Customer:</strong>'.$result[$i]['SUsername'].'</div>';
				
				
            print'<div style="float:right;">';
			print'<div style="margin-top:10px; margin-right:10px;" class="button_link">';
			print'<a class="frstlogintoq" href="login.php?ttrlgtq='.$_GET['freightid'].'&urlq=ttrlgtq" rel="nofollow">Transporters Login to Quote</a>';
            print'<a class="quoteafterlogin fl hidden" href="quote_freight_popped.php?ttridqt='.$_COOKIE["tusrid"].'&freightid='.$_GET['freightid'].'">Quote this freight</a>'; 
			print'<a class="frstjoinq"  href="t-register.php">Join Freightmeta</a>';
			print'</div></div><div class="clear"></div></div>';
		    print'<!-- end of quote details -->';
        
        print <<<here
   <!-- start of freight details -->
			<div style="float:left; width: 420px; margin-top:0px;">
				<div style=" ">     
here;
                     print'<div class="item" style="position: relative;padding-top: 15px;" >';
					print'	<div class="list-left">Item Description:</div>';
				     print'   <div class="list-right">'.$result[$i]['Cat_name'].'-'.$result[$i]['subcat_name'].'</div>';
					print'	<div class="clear"></div></div>';	
                        
					 print'  <div class="item">';
					print'	<div class="list-left">Pickup Location:</div>';
					print'	<div class="list-right">';
					print'	<strong>'.$result[$i]['Countryin'].',<input type="hidden" name="address" id="address1" value="'.$result[$i]['Statein'].'" />'.$result[$i]['Statein'].'</strong><br />';
					print'	'.$result[$i]['Regionin'].'</div>';
					print'	<div class="clear"></div></div>';
					
	                print'   <div class="item">';
					print'	<div class="list-left">Delivery Location:</div>';
					print'	<div class="list-right">';
					print'	<strong>'.$result[$i]['CountryOut'].',<input type="hidden" name="address" id="address2" value="'.$result[$i]['StateOut'].'" />'.$result[$i]['StateOut'].'</strong>';
					print'	<br />'.$result[$i]['RegionOut'].'</div>';
					print'	<div class="clear"></div></div>';	
                        	
					print'   <div class="item">';
					print'	<div class="list-left">Active Date Range:</div>';
					print'	<div class="list-right">'.$result[$i]['freight_Stay_from'].' <img src="images/gen/arrow1.gif" /> '.$result[$i]['freight_Stay_to'].'	</div>';
					print'	<div class="clear"></div></div>';
								
					print'    <div class="item">';
					print'	<div class="list-left">Freight Category:</div>';
					print'	<div class="list-right">';
					print'	'.$result[$i]['Cat_name'].' - '.$result[$i]['subcat_name'].'	</div>';
					print'	<div class="clear"></div></div>';
																													
					print'    <div class="item">';
					print'	<div class="list-left">Date Posted:</div>';
					print'	<div class="list-right">'.$result[$i]['freight_AddedDate'].'</div>';
					print'	<div class="clear"></div></div></div> '; 
   print <<<here
   				<div style="border:0px solid #dddddd; padding:7px; margin-top:20px;">
				<div style="margin-top:15px;">
				<div style="margin-bottom:10px;">
				<div style="float:left; margin-right:5px;">
				<img src="images/gen/down.png" /></div>
				<div style="font-size:13px;padding-top:1px;">
				<strong>Items Description</strong></div><div class="clear"></div></div>
				<div style="border:1px solid #cccccc; padding:8px;margin-bottom:8px;background-color:white;" class="rounded">
   
here;

 print'<strong>Packaging</strong>: '.$result[$i]['packaging'].'<br/>';
 print' <strong>Qty</strong>: '.$result[$i]['qty'].'<br/>';
 switch($result[$i]['unknown_dims']){
    case 1:
    print' <strong>Check box</strong>:Unsure of exact item weight & Dimension<br/>';
    break;
    default:
    print '';
    break;
 }
 print' <strong>Item Height (m,cm)</strong>: '.$result[$i]['height'].'<br/>';
 print' <strong>Item Width(m,cm)</strong>: '.$result[$i]['width'].'<br/>';
 print' <strong>Item Length(m,cm)</strong>: '.$result[$i]['flength'].'<br/>';
 print' <strong>Weight (kg (per unit)</strong>: '.$result[$i]['weigth'].'<br/>';

          
    print <<<here
   						</div></div></div></div>
            <!-- start of map -->
			
			<div style="float:right; width: 510px; margin-left:0px;  overflow:hidden;">
				<div id="map_canvas" style="width:100%; height:400px; border:0px solid #cccccc;"></div>
				<div id="distance_road" style="padding:10px; padding-left:0px;"></div>		
			</div>
			<!-- end of map -->
			<div class="clear"></div>
           	</div>
here;

print <<<question
  <div id="question_freight" class="fw">
  <div class="headerbox rounded7">
	Questions about this freight
</div>

       <div id="f1-question-quote-content" class="fw">
<table style="width: 970px; color: black;">
<tr>
<table style="width: 970px; color: black;">
<tr style="border-bottom: 1px dotted #e5e5e5">
<div style="float:right; margin-bottom:10px;">
				To <strong>report a violation</strong> of <a href="rules.php" class="popup1">Freightmeta's rules</a>, flag the question or the answer by clicking <img src="images/btn/flag-white.png" />
				</div>
				<div class="clear"></div>
question;

            /*-************Question_answerss*****************/
//self::load_asked_question_and_answers($result[$i]['freightid']);
 print <<<here
</table></tr><tr><td>
here;
         
    print <<<here

here;
           print '<div style="margin-top:10px; margin-right:10px;" class="button_link qtbeforelogin">
                 <a href="login.php?fqttr='.$_GET['freightid'].'&urlqttr=qttrtf">Login to ask a Question</a></div>';
                  
           print '<div style="margin-top:10px; margin-right:10px;" class="button_link qtafterlogin hidden">
                 <a href="question_freight_popped.php?fqttr='.$_GET['freightid'].'&ttridq='.$_COOKIE["tusrid"].'"> Ask a Question</a></div>';
                  
           print '<div style="margin-top:10px; margin-right:10px;" class="button_link anstafterlogin hidden">
                 <a href="answers_freight_popped.php?fqttr='.$_GET['freightid'].'&custid='.$_COOKIE["susrid"].'"> Answer a Question</a></div>'; 
                     
print <<<finishdiv
</td></tr></table></div></div>
finishdiv;


print<<<screen
<div class="headerbox rounded7">
				Quotes for this freight
			</div>
			
			
						<div>
				<table style="color:black; font-size:10pt" width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
					<tr class="listing_header">
						<td width="15%">Quote Amount</td>
						<td width="16%">Transport Provider</td>
						<td width="13%">Expiry Date</td>
						<td width="6%" align="center">Note</td>
						<td width="13%">Details</td>
						<td width="18.5%">status</td>
                        <td width="18.5%">Book</td>
					</tr>
screen;
//self::load_quote_list($result[$i]['freightid']);
print<<<test
    </table></div> 			              
test;


      /**********************************************/
      print'<div style="float:left; height: 70px;">';
	  print'<div style="margin-top:10px; margin-right:10px;" class="button_link">';
	  print'<a href="login.php?ttrlgtq='.$_GET['freightid'].'&urlq=ttrlgtq" class="logintoquote" rel="nofollow">Transporters Login to Quote</a>'; 
	  print'<a href="t-register.php?redicto='.$_GET['freightid'].'" class="joinfreightmeta">Join Freightmeta</a>';
      print'<a class="quoteafterlogin  hidden" href="quote_freight_popped.php?ttridqt='.$_COOKIE["tusrid"].'&freightid='.$_GET['freightid'].'">Quote this freight</a>';
	  
      print'</div></div></div></div></div></div></div>'; 


?>  
<div class="clear"></div>
<script type="text/javascript">
// creates and shows the map
window.onload = function() {
	var location1;
	var location2;
	var latlng;
	var map;
	var distance;
	var geocoder = new google.maps.Geocoder();
	var address1 = document.getElementById('address1').value;
	var address2 = document.getElementById('address2').value;
	
	 //alert('Address1'+address1+'<br />'+'Address2'+address2);
    // Creating a GeocoderRequest object
    var geocoderRequest1 = { address: address1}
	var geocoderRequest2 = { address: address2}
	// Making the Geocode request for the location 1
    geocoder.geocode(geocoderRequest1,function(results, status) 
	{
      // Check if status is OK before proceeding
      if (status == google.maps.GeocoderStatus.OK) 
	  {
	   location1 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	   geocoder.geocode(geocoderRequest2,function(results) 
	   {
	 location2 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	 latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);
	
	var mapOptions = 
	{
		zoom: 2,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	// create a new map object
		// set the div id where it will be shown
		// set the map options
	map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
	
	// show route between the points
	
	directionsService = new google.maps.DirectionsService();
	
	directionsDisplay = new google.maps.DirectionsRenderer(
	{
		suppressMarkers: true,
		suppressInfoWindows: true
	});
	
	directionsDisplay.setMap(map);
	
	var request = {
		origin:location1, 
		destination:location2,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	
	directionsService.route(request, function(response, status) 
	{
		if (status == google.maps.DirectionsStatus.OK) 
		{
			directionsDisplay.setDirections(response);
			distance = "Driving Distance: "+response.routes[0].legs[0].distance.text;
			distance += "<br/>Aproximate driving time is: "+response.routes[0].legs[0].duration.text;
			document.getElementById("distance_road").innerHTML = distance;
		}
	});

	
	// create the markers for the two locations		
	var marker1 = new google.maps.Marker({
		map: map, 
		position: location1,
		title: "First location"
	});
	var marker2 = new google.maps.Marker({
		map: map, 
		position: location2,
		title: "Second location"
	});
	
	// create the text to be shown in the infowindows
	var text1 = '<div id="content">'+
			'<h1 id="firstHeading">First location</h1>'+
			'<div id="bodyContent">'+
			'<p>Coordinates: '+location1+'</p>'+
			'</div>'+
			'</div>';
			
	var text2 = '<div id="content">'+
		'<h1 id="firstHeading">Second location</h1>'+
		'<div id="bodyContent">'+
		'<p>Coordinates: '+location2+'</p>'+
		'</div>'+
		'</div>';
	
	// create info boxes for the two markers
	var infowindow1 = new google.maps.InfoWindow({
		content: text1
	});
	var infowindow2 = new google.maps.InfoWindow({
		content: text2
	});

	// add action events so the info windows will be shown when the marker is clicked
	google.maps.event.addListener(marker1, 'click', function() {
		infowindow1.open(map,marker1);
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow2.open(map,marker1);
	});
	
	// compute distance between the two points
	var R = 6371; 
	var dLat = toRad(location2.lat()-location1.lat());
	var dLon = toRad(location2.lng()-location1.lng()); 
	
	var dLat1 = toRad(location1.lat());
	var dLat2 = toRad(location2.lat());
	
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			Math.cos(dLat1) * Math.cos(dLat1) * 
			Math.sin(dLon/2) * Math.sin(dLon/2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c;
	   
	   });
	  //alert("Location1"+location1+"Location2"+location2);
	  //alert('Loc1 Lat'+location1.lat())
	  
	  }
	  else{
	    // alert('Locations  not set');
	  }
	  });
	// center of the map (compute the mean value between the two locations)
	
	
	// document.getElementById("distance_direct").innerHTML = "<br/>The distance between the two points (in a straight line) is: "+d;
}

function toRad(deg) 
{
	return deg * Math.PI/180;
}

</script>
<style type="text/css">
 .item{
	width:100%;
	border-bottom: 1px solid #e5e5e5;
}
     .list-left{
	float:left;
	width:40%;
	text-align:left;
	font-weight:bold;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
.list-right{
	float:left;
	width: 50%;
	text-align:left;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}

</style>
 <?php require_once 'footer.php';?>