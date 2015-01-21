<?php

require_once dirname(dirname(__file__)) . '/config/config.php';
require_once 'header.php';
?>
<title><?=SITE_NAME?>| Freight list </title>
<script type="text/javascript">
     $(document).ready(function(){
         //alert(fmdatetimeinputback('2014-05-28 15:28:53'));
        
        $('.cat_checkbox').click(function(){
    $('.list > li a').click(function() {$(this).parent().find('ul').slideToggle("slow");;});
         
 
        });
     });
		//	document.getElementById('clickdv').onclick = function(){
				//this.href += "&User=1";
				//alert(this.href); //Just to get a notification you can remove this.
		//}
		</script>

</head>
<body  onload="">
<style>
 .ui-progressbar {
    position: relative;
  }
  .progress-label {
    position: absolute;
    left: 50%;
    top: 4px;
    font-weight: bold;
    text-shadow: 1px 1px 0 #fff;
  }
  </style>


<style>
    ul.list li ul {
    display: none;
    list-style: check;
}
</style>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php

usrlogin::fmpagelogincontrole(HELPERS_DIR . 'nav.php', HELPERS_DIR .'logged-nav.p.inc', null);
require_once HELPERS_DIR . 'add_freight_status_css.inc';
?> 
<div class="fm_dialog_map rounded7 hidden">
    <div class="fm_dialog_header_close fl diologrounder7 closemaingmap" style="border: none; margin-top: -22px;right:-105px ;" onclick="closemaingmap();">
   <img alt="X" src="http://freightmeta.com/testb/public/images/btn/map_close.png"/>
</div>
<div id="gmap" class="rounded7">

</div>
    </div>  
  <div id="middle" style="margin-top: 1px;" >
  
    <div id="middle_container"  style="">
    
    <div class="container_2">   
    <div class="grid_1 pull_1 alpha prefix_1" style="width:200px;">    
    <div class="outerbox rounded column">	
		<div style="margin:7px;">	
			<div style="margin-bottom:5px;">
				<div style="float:left; margin-right:5px;">
				<img src="images/gen/down.png" />
				</div>
				<div style="font-size:11pt;padding-top:1px;">
				<strong>Filter</strong>
				</div>
				<div class="clear"></div>                               
			</div>
    <div class="innerbox rounded"> 
   <div class="innermargin">
         <ul id="tree3"  onclick="OnchangeSelect()"  style="list-style: none; margin-left: -45px;">
			<li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv1" type="checkbox" value="lowest_quote" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Lowest Quote</span>								
			</li>

			<li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv2" type="checkbox" value="un_quoted" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Unquoted Freights</span>								
			</li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv3" type="checkbox" value="date_new" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Newest to Oldest</span>								
			<li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv4" type="checkbox" value="date_old" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Oldest to Newest</span>								
			</li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv5" type="checkbox" value="origin_az" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Origin (A to Z)</span>								
			</li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv6" type="checkbox" value="origin_za" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Origin (Z to A)</span>								
			</li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv7" type="checkbox" value="destination_az" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Destination (A to Z)</span>								
			</li>
            <li class="expanded">
			<input name="catids" class="cat_checkbox" id="clickdv8" type="checkbox" value="destination_za" onclick="ckeckcontrol(this)"/>
            <span class="pl5">Destination (Z to A)</span>								
			</li>																									
					</ul> 
                     
                
                </div>
   
   </div>
   
    </div>
     
    </div>
    <ul  class="list innerbox outerbox rounded7" style="list-style: cjk-ideographic; margin-top: 10px;">
    <li >
        <a style="margin-left: -20px;"> Deleted Freight list </a>
        <ul id="removeliste" style="margin-left: -60px;">
                        
        </ul>
        </li>
     </ul>
     
     <ul  class="freightmapall innerbox outerbox rounded7" style="list-style:none; padding: 10px;">
    <li><a> Mapped freight</a></li>
    <li>
    <a style="margin-left: -2px; padding:1px;" onclick="allfreightmap();"><img alt="Map" src="images/btn/gmap.jpg" width="165px" height="175px" style="cursor: pointer;"/></a>
    </li>
     </ul>
    </div>
 
    <div class="grid_2 pull_2 omega suffix_1" style="width: 765px;" id="dataloader">
   <div class="fm_dialog diologrounder7 hidden" style="width: 420px; border: none;">
<div class="fm_dialog_header_close fl diologrounder7" style="border: none; margin-top: -19px;right:-48px ;" onclick="hidegmap()">
   <img alt="X" src="http://freightmeta.com/testb/public/images/btn/map_close.png"/>
</div>
   <div id="map" class="rounded7"></div>
   <div id="distance_road" style="padding:10px; padding-left:0px;"></div>		
  <input type="hidden" id="sorting" name="soting" value="<?  ?>" />
   </div>
   <div class="fulldivloader hidden">
   <img  alt="loading" title="loading" src="images/fmload.gif" width="72px"height="72px" />
   </div>
   
   <div  id="listfreightmain" class="">

    </div>
    </div>  
       <div class="clear"></div>
    </div>
<div style="clear: both;"></div>

<script type="text/javascript">
  var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
 new google.maps.Size(32, 32), new google.maps.Point(0, 0),
 new google.maps.Point(16, 32));
 
 var iconr = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/green-dot.png",
 new google.maps.Size(32, 32), new google.maps.Point(0, 0),
 new google.maps.Point(16, 32));
 
 var center = null;
 var map = null;
 var currentPopup;
 var bounds = new google.maps.LatLngBounds();
 
 var infowindow1 = new InfoBubble({ 
            map : map,  
            maxWidth :300, 
            minWidth :200, 
            maxHeight : 150, 
            minHeight : 100, 
            shadowStyle : 1, 
            padding :2, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
            //pixelOffset : new google.maps.Size(-1000, -100) 

         });
   var infowindow2 = new InfoBubble({ 
            map : map,  
            maxWidth :300, 
            minWidth :200, 
            maxHeight : 150, 
            minHeight : 100, 
            shadowStyle : 1, 
            padding : 2, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
           // pixelOffset : new google.maps.Size(-1000, -100) 

         }); 
 function addMarker(latin, lngin, infoin,latout, lngout, infout) 
  {  
 var ptin = new google.maps.LatLng(latin, lngin);
 var ptout = new google.maps.LatLng(latout, lngout);
 //bounds.extend(pt);
 	var marker1 = new google.maps.Marker({
		map: map, 
		position: ptin,
        icon: icon,
		title: "First location",
        content: infoin
	});
	var marker2 = new google.maps.Marker({
		map: map, 
		position: ptout,
        icon:iconr,
		title: "Second location",
        content: infout
	});
	// add action events so the info windows will be shown when the marker is clicked
	google.maps.event.addListener(marker1, 'click', function() {
		infowindow1.open(map,marker1);
        infowindow1.setContent(infoin);
        infowindow2.close();
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow2.open(map,marker2);
        infowindow2.setContent(infout);
         infowindow1.close();
	});
 /*
   	directionsService = new google.maps.DirectionsService();
	
	directionsDisplay = new google.maps.DirectionsRenderer(
	{
		suppressMarkers: true,
		suppressInfoWindows: true
	});
	
	directionsDisplay.setMap(map);
	
	var request = {
		origin:ptin, 
		destination:ptout,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
    directionsService.route(request, function(response, status) 
	{
		if (status == google.maps.DirectionsStatus.OK) 
		{
			directionsDisplay.setDirections(response);
		}
	});
	*/
   }//end func
   
function allfreightmap() {
    $('.fm_dialog_map').removeClass('hidden');
   var mapDiv = document.getElementById('gmap');
var initZoom = 2;  
var initlatlng = new google.maps.LatLng(43.54626653282449, 12.155506499999994);

var options = {
center: initlatlng,
zoom: initZoom,
disableDoubleClickZoom: false,
streetViewControl: false,           
mapTypeControl: true,
zoomControl: true,
zoomControlOptions: 
 {                
 style: google.maps.ZoomControlStyle.SMALL,
 style: google.maps.MapTypeControlStyle.DROPDOWN_MENU 
 },        
mapTypeId: google.maps.MapTypeId.ROADMAP,
mapTypeControlOptions: {
	 style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
	 position: google.maps.ControlPosition.TOP_RIGHT
      },
disableDefaultUI: true,
navigationControl: true,
keyboardShortcuts: false,
navigationControlOptions: 
{

style: google.maps.NavigationControlStyle.ANDROID
    
}, 
navigationControl: true,
};
// Create a div to hold the control.
var controlDiv = document.createElement('div');

// Set CSS styles for the DIV containing the control
// Setting padding to 5 px will offset the control
// from the edge of the map.
controlDiv.style.padding = '5px';

// Set CSS for the control border.
var controlUI = document.createElement('div');
controlUI.style.backgroundColor = 'white';
controlUI.style.borderStyle = 'solid';
controlUI.style.borderWidth = '0px';
controlUI.style.cursor = 'pointer';
controlUI.style.textAlign = 'center';
controlUI.title = 'Freight List Maps';
controlDiv.appendChild(controlUI);

// Set CSS for the control interior.
var controlText = document.createElement('div');
controlText.style.fontFamily = 'Nunito,serif';
controlText.style.fontSize = '15pt';
controlText.style.paddingLeft = '4px';
controlText.style.paddingRight = '4px';
controlText.innerHTML = '<strong>Freight List Map</strong>';
controlUI.appendChild(controlText);

map = new google.maps.Map(mapDiv, options);
map.controls[google.maps.ControlPosition.TOP_RIGHT].push(controlDiv);

<?php
   $sql = 'CALL count_all_freight()';
// Execute the query and return the results
   $total= DatabaseHandler::Countall($sql);
   
   $sql = 'CALL get_all_freight(:start,:perpages)';
   $page_params = array(':start' => 0, ':perpages' => $total);
   $result = DatabaseHandler::GetAll($sql, $page_params);
   for ($i = 0; $i < count($result); $i++)
    {
         $href = 'freight?freightid=' . $result[$i]['FreightID'];
         $link = '<span class="fl" style="right: 10; background-color:#5aa5cc; padding: 5px;"><a href="'.$href.'" target="_blank" style="color:#FFFFFF;">MORE DETAIL</a></span>'; 
        $cityin= $result[$i]['Cityin'];
        $countryin =$result[$i]['Countryin'];
    $address = "$cityin,$countryin";
    $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $address .
        "&sensor=false";
     $cityout =$result[$i]['CytiOut'];
     $countryout =$result[$i]['CountryOut'];
    $addressout = "$cityout,$countryout";
    $details_urlout = "http://maps.googleapis.com/maps/api/geocode/json?address=" .
        $addressout . "&sensor=false";


    $chin = curl_init();
    curl_setopt($chin, CURLOPT_URL, $details_url);
    curl_setopt($chin, CURLOPT_RETURNTRANSFER, 1);
    $responsein = json_decode(curl_exec($chin), true);


    $chout = curl_init();
    curl_setopt($chout, CURLOPT_URL, $details_urlout);
    curl_setopt($chout, CURLOPT_RETURNTRANSFER, 1);
    $responseout = json_decode(curl_exec($chout), true);

    // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
    if (($responsein['status'] != 'OK') && ($responseout['status'] != 'OK'))
    {
        echo ("addMarker(0,0,'<b>Me</b><br/>Too',0,0,'<b>SEC</b><br/>Too');\n");
    } else
    {

        $latLngin = $responsein['results'][0]['geometry']['location'];
        $latLngout = $responseout['results'][0]['geometry']['location'];
        $latin = $latLngin['lat'];
        $lngin = $latLngin['lng'];
        $latout = $latLngout['lat'];
        $lngout = $latLngout['lng'];
        if (empty($latin) && empty($lngin))
        {
            echo ("addMarker(0,0,'<b>Me</b><br/>Too',0,0,'<b>SEC</b><br/>Too');\n");
        } else
        {
            if (empty($latout) && empty($lngout))
            {
                echo ("addMarker(0,0,'<b>Me</b><br/>Too',0,0,'<b>SEC</b><br/>Too');\n");
            } else
            {
                echo ("addMarker('$latin','$lngin','<h2>Origin:</h2><br /><b>$link</b>','$latout','$lngout','<b><h2>Destination:</h2><br /></b>$link<br/>');\n");

            }

        }

    }
    
    }
    

?>

}  
   
</script>
</div></div>
<?php require_once 'footer.php';?>