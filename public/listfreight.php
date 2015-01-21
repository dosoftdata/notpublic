 <?php
require_once dirname(dirname(__file__)) . '/config/classes.inc';
         //require_once dirname(dirname(__FILE__)).'/public/header.php'

$sorting =$_GET['sf'];
if(isset($sorting) && $sorting ==0)

  {
  $sql = 'CALL count_all_freight()';
// Execute the query and return the results
$totalItems = DatabaseHandler::Countall($sql);

//print 'Total:' . $totalItems;

//Set some options for the Pager 
$pager_options = array(
    'separator' => '',
    'mode' => 'Sliding', // Sliding or Jumping mode. See below.
    'append'   => false,  //don't append the GET parameters to the url
    'perPage' => 10, // Total rows to show per page
    'delta' => 4, // See below
    'totalItems' => $totalItems,
    );

// Initialize the Pager class with the above options 
$pager = Pager::factory($pager_options);
list($from, $to) = $pager->getOffsetByPageId();
// The MySQL 'LIMIT' clause index starts from '0',
//so decrease the $from by 1 
$from = $from - 1;
// The number of rows to get per query 
$perPage = $pager_options['perPage'];

//print '<br />DATA PER PAGE:' . $perPage . '<br />';

$sql = 'CALL get_all_freight(:start,:perpages)';
$page_params = array(':start' => $from, ':perpages' => $perPage);
// Execute the query and return the results

if ($totalItems < 1)
{
    print "<div class='info'>Currently, there are no Shipping discount. Thanks...</div>";
} else
{
    $result = DatabaseHandler::GetAll($sql, $page_params);
    //Get all contents for this page from the database and display on the screen to the user
    print $pager->links;
    for ($i = 0; $i < count($result); $i++)
    {
     $href = 'freight?freightid=' . $result[$i]['FreightID'];
        print '<div class="close'.$i.' outerbox rounded column boxfreight" style="width: 795px; margin-top: 2px;">
    <div class="innerbox rounded " style="border: none;" > 
   <div class="innermargin" style="">
  <div id="freightwrapper" >
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
<div id="close'.$i.'" clase="close"  style="border: none;">
<button class="close" onclick="closediv('.$i.');">X</button>
</div>
<div id="freightcontent">
<div id="freightname" class="divtitle'.$i.'">
<a class="upper">'.$result[$i]['Cat_name'].'</a> (' . fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .
            ')|Quantity: ' . $result[$i]['qty'] .'
</div><br /><br /><br />
<input type="hidden" name="divtitle'.$i.'" id="divtitle'.$i.'" value="'.$result[$i]['Cat_name'].'</a> (' . fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .
            ')|Quantity: ' . $result[$i]['qty'] .'" />
<div id="freightaddr">
<strong>From</strong>:<span>'.$result[$i]['Countryin'].'</span>'.ARROWTO.'
<strong>To</strong>:<span> '.$result[$i]['CountryOut'].'</span>/
<input type="hidden" name="fromdate" id="addressin'.$result[$i]['FreightID'].'" value="'.$result[$i]['Countryin'].'" />
<input type="hidden" name="todate" id="addressout'.$result[$i]['FreightID'].'" value="'.$result[$i]['CountryOut'].'" />
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
  '.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.$result[$i]['freight_Stay_to'].'',$result[$i]['FreightID'],0).'
</span>
</div>
<div id="freighthave">
<strong>This shippment have</strong>:
<span>Question:<a>'.fm_freight::countquestiontimes($result[$i]['FreightID']).'</a></span>|
<span>Quote:<a>'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a></span>

</div>
<div id="moredetail" style="font-weight: bold;">
<span class="fr" style="right: 10; background-color:#5aa5cc; padding: 5px;"><a href="'.$href.'" target="_blank" style="color:#FFFFFF;">MORE DETAIL</a></span>

</div>
</div>
</div>
    </div>
    </div>
    
    </div>' ;
     
    }//FOR
  }

print $pager->links;  
   }//if
   else
   {
    print 'i am in';
   }



         
         ?>