<?php
require_once dirname(dirname(__file__)) . '/config/classes.inc';


$offset = (isset($_REQUEST['offset']) && $_REQUEST['offset']!='') ? $_REQUEST['offset'] : '';
$limit = 10;
$sql = 'CALL get_all_freight(:start,:perpages)';
$page_params = array(':start' => $offset, ':perpages' => $limit);
$i = ++$offset;
$result = DatabaseHandler::GetAll($sql,$page_params);
  for ($i = 0; $i < count($result); $i++)
    { 
  print '<div class=" close'.$i.' outerbox rounded column" style="width: 795px; margin-top: 2px;">
    <div class="innerbox rounded " style="border: none;" > 
   <div class="innermargin" style="">
  <div id="freightwrapper" >
<div id="image">Image</div>
<div id="close"  style="border: none;">
<button class="" onclick="closediv('.$i.');">X</button>
</div>
<div id="freightcontent">
<div id="freightname">
<a>Freightname</a> / Subcategory| Qty:
</div>
<div id="freightaddr">
<strong>From</strong>:<span> Country</span>'.ARROWTO.'
<strong>To</strong>:<span> Country</span>/
<a class="iframe fancybox.iframe" href="http://maps.google.com/?output=embed&f=q&source=s_q&hl=en&geocode=&q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&hl=lv&ll=51.504155,-0.117749&spn=0.00571,0.016512&sll=56.879635,24.603189&sspn=10.280244,33.815918&vpsrc=6&hq=London+Eye&radius=15000&t=h&z=17">Map</a>
</div>
<div id="status-f" style="padding-top: 5px;">
<strong>Status</strong>:<span class="status-active">Active</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lowest offer</strong>: <span class="colored" style="border: none;"> 29002 EURO</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Left days</strong>: <span class="colored" style="border: none;"> 1</span>
</div>
<div id="freighthave">
<strong>This shippment have</strong>:
<span>Question:<a>?</a></span>|
<span>Quote:<a>?</a></span>

</div>
<div id="moredetail" style="font-weight: bold;">
<span class="fr" style="right: 10; background-color:#5aa5cc; padding: 5px;"><a style="color:#FFFFFF;">MORE DETAIL</a></span>

</div>
</div>
</div>
    </div>
    </div>
    
    </div>' ;    
  
    }
?>