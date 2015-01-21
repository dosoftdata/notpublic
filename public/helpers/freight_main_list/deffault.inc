<?php

$vpb_page_limit = FREIGHT_LIST_PER_PAGE; //This is the number of contents to display on each page

$sql = 'CALL count_all_freight()';
// Execute the query and return the results
$vpb_get_total_pages = DatabaseHandler::Countall($sql);
//print $vpb_get_total_pages;
require_once HELPERS_DIR.'freight_main_list/paging_header.inc';

//Check the contents for this page from the database\
///$vpb_check_contents_second = mysql_query("SELECT * FROM `vasplus_programming_blog_pagination` ORDER BY `id` DESC LIMIT $vpb_start_page, $vpb_page_limit");

$sql = 'CALL get_all_freight(:start,:perpages)';
$page_params = array(':start' => $vpb_start_page, ':perpages' => $vpb_page_limit);


// Execute the query and return the results



if ($vpb_get_total_pages < 1)
{
    print "<div class='info'>Currently, there are no content in the database to display at the moment. Thanks...</div>";
} else
{
    $result = DatabaseHandler::GetAll($sql, $page_params);
      print $vpb_pagination_system ;
    for ($i = 0; $i < count($result); $i++)
    {
        $href = 'freight?freightid=' .Link::fm_urlget($result[$i]['FreightID'], false);
        print '<div class="close'.$i.' outerbox rounded column boxfreight" style="width: 795px; margin-top: 2px;">
    <div class="innerbox rounded " style="border: none;" > 
   <div class="innermargin" style="">
  <div id="freightwrapper" >
<div id="listimageclose" class="" style="width:150px; height:200px">
<div id="image">';
if (file_exists($result[$i]['freight_photo_path']))
        {
            print '<img src="' . $result[$i]['freight_photo_path'] .'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;width:150px; height:150px"/>';
        } 
         else
        {
             
          print '<img src="' .  FREIGHTDEFAULTIMAGEPATH.'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;width:150px; height:150px"/>';
            
        }
print '

</div>
<div  style="position:absolute;
	left:2px;
	top:160px;
	width:30px;
	height:30px;
	z-index:2;
     font-size: 20pt;
    font-weight: bold;
     text-align: center;
    ">
<a clase="close" id="close'.$i.'" onclick="closediv('.$i.');"><img alt="X" src="images/btn/map_close.png"></a>
</div>
</div>
<div id="freightcontent">
<div id="freightname" class="divtitle'.$i.'">
<a class="upper">'.$result[$i]['Cat_name'].'</a> (' . fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .
            ')|Qty: ' . Util::casezerosetone($result[$i]['qty']) .'
</div><br /><br /><br />
<input type="hidden" name="divtitle'.$i.'" id="divtitle'.$i.'" value="'.$result[$i]['Cat_name'].'</a> (' . fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .
            ')|Quantity: ' .  Util::casezerosetone($result[$i]['qty']) .'" />
<div id="freightaddr">
<strong>From</strong>:<span>'.$result[$i]['Countryin'].'('.$result[$i]['Cityin'].')</span>'.ARROWTO.'
<strong>To</strong>:<span> '.$result[$i]['CountryOut'].'('.$result[$i]['CytiOut'].')</span>/
<input type="hidden" name="fromdate" id="addressin'.$result[$i]['FreightID'].'" value="'.$result[$i]['Cityin'].','.$result[$i]['Countryin'].'" />
<input type="hidden" name="todate" id="addressout'.$result[$i]['FreightID'].'" value="'.$result[$i]['CytiOut'].','.$result[$i]['CountryOut'].'" />
<a class="" onclick="loadmap('.$result[$i]['FreightID'].')" href="#">Map</a>
</div>
<div id="status-f" style="padding-top: 5px;">
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
        print '<span class="status-booked">Booked</span>';
        break;
    case 4:
        print '<span class="status-accepted">In process</span>';
        break;
    case 5:
        print '<span class="status-complete">Completed</span>';
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
<div id="freighthave" class="">
<strong>This shippment have</strong>:
<span>Question:<a>'.fm_freight::countquestiontimes($result[$i]['FreightID']).'</a></span>|
<span>Quote:<a>'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a></span>|
<span>Incoterms:<a>'.$result[$i]['incoterms'].'</a></span>
</div>
<div id="moredetail" style="font-weight: bold;" class="">
<span class="fr" style="right: 10; background-color:#5aa5cc; padding: 5px;"><a href="'.$href.'" target="_blank" style="color:#FFFFFF;">MORE DETAIL</a></span>

</div>
</div>
</div>
    </div>
    </div>
    
    </div>' ;
    } //end load freightlist
print $vpb_pagination_system ;



}

?>