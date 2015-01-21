<?php
print <<<here
  
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
here;
   usrlogin::sessionfreight(HELPERS_DIR .'nav_flist.php',HELPERS_DIR .'logged-nav.p.inc');
   

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
here;
    print <<<here
<div id="f1_main_content" class="rounded7 outerbox" style="margin-top: 5px;">
<!-- start of quote details -->
			<div style="padding:15px; padding-bottom:15px;margin-bottom:50px; line-height:20px;" class="rounded innerbox">
			
                <div id="freightwrapper"  style="height:auto; width:100%">
here;

    print '<div id="image" style="position:relative"> ';
  if (file_exists($result[$i]['freight_photo_path']))
        {
            print '<img src="' . $result[$i]['freight_photo_path'] .'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;width:150px; height:150px"/>';
        } 
         else
        {
             
          print '<img src="' .  FREIGHTDEFAULTIMAGEPATH.'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;width:150px; height:150px"/>';
            
        }  
    
    print'</div><div class="clear"></div>';
  print '<div id="freightcontent" style="height:auto; width:100%;">';
print'  <div id="freightname">
<a class="upper">'.$result[$i]['Cat_name'].'</a> / ' . fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .
            '|Qty: ' .Util::casezerosetone($result[$i]['qty']) .'
</div><br /><br /><br />
<div id="freightaddr">
<strong>From</strong>:<span>'.$result[$i]['Countryin'].'('.$result[$i]['Cityin'].')</span>'.ARROWTO.'
<strong>To</strong>:<span> '.$result[$i]['CountryOut'].'('.$result[$i]['CytiOut'].')</span>/
<input type="hidden" name="fromdate" id="addressin'.$result[$i]['FreightID'].'" value="'.$result[$i]['Countryin'].'" />
<input type="hidden" name="todate" id="addressout'.$result[$i]['FreightID'].'" value="'.$result[$i]['CountryOut'].'" />
<a class="" onclick="loadmap('.$result[$i]['FreightID'].')" href="#">Map</a>
<input type="hidden" name="address" id="addressin'.$result[$i]['FreightID'].'" value="'.$result[$i]['Statein'].'" />
<input type="hidden" name="address" id="addressout'.$result[$i]['FreightID'].'" value="'.$result[$i]['StateOut'].'" />

</div>
<div id="status-f" style="padding-top: 5px; width:82%; margin-top:-14px">
<strong>Status</strong>:';
$mstatus = $result[$i]['freight_status'];
        
switch ($mstatus)
{
    case 0:
        print '<span class="status-cancelled">Cancelled</span>';
        break;
    case 1:
        print '<span class="status-active">active</span>';
        break;
    case 2:
        print '<span class="status-expired">expired</span>';
        break;
    case 3:
        print '<span class="status-booked">Booked</span>|C|';
        break;
    case 4:
        print '<span class="status-accepted">In process</span>';
        break;
    case 5:
        print '<span class="status-complete">Completed</span><br />';
        break;
    case 6:
        print '<span class="status-complete">Payed</span>';
        break;


}
print'
&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lowest offer</strong>: <span class="colored" style="border: none;">'. fm_freight::getlowestquote($result[$i]['FreightID']).'</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Left days</strong>: <span class="colored" style="border: none;"> 
  '.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'
</span>
</div>

';
  print'</div></div>';
  print '<div class="" style="position:relative; margin-left:18%; margin-top:-40px;width:82%" >';
  
  print '<div class="" style="position:relative; margin-left:0%; margin-top:0px;width:100%" >';
  
  print '<div class="fl" style="position:relative; margin-left:0%; margin-top:0px;width:50%; border-right: 1px dotted grey" >';
  
   print'<a> Shippement Details:</a><br />';
   print'<strong> Shippement ID:$$#'.$setparam.'&</strong><br />';
   print'<strong>Quote:<a>'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a></strong><br />';
   print'<strong>Question:<a>'.fm_freight::countquestiontimes($result[$i]['FreightID']).'</a></strong><br />';
   
    
            
            


?>