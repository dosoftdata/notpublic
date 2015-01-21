<?php

print '<div id="divleft"><div class="left column" style="width:480px; border-right:1px dotted #CCCCCC; padding-right:5px;">
	   <h1 class="popup-title">Quote information</h1>
		<div class="item">
			<div class="list-left">Quote Amount:</div>
			<div class="list-right">
				<span class="orangetext" style="font-size:13px;">' . Util::
    fmcurrency_code_symbol_model($result['curid'], $result['amount']) . '</span>
			</div>
			<div class="clear"></div>
		</div>	
		
		<div class="item">
			<div class="list-left">Quote Date:</div>
			<div class="list-right">
				' . self::formatdatebetween($result['qdtetime']) . '			
                </div>
			<div class="clear"></div>
		</div>
		
		<div class="item">
			<div class="list-left">Quote Expiry Date:</div>
			<div class="list-right">
				' . self::leftdatetime(self::load_current_datedate(), $result['qexpiredtime'],
    0, Util::StrGet('quoteid')) . '			
                </div>
			<div class="clear"></div>
		</div>					
		
		<div class="item">
			<div class="list-left">Quote Status:</div>
			<div class="list-right">
            ';
$quotestatus = $result['fstatus'];
$quoteprovider = $result['ttrfname'];
$quoteproviderid = $result['ttrusedid'];
$quoteprovidernote = $result['qnotif'];
switch ($quotestatus)
{
    case 1:
        print '<span class="status-active">Active</span>';
        break;
}
//<span class="status-accepted">accepted</span>
print '
            </div>
			<div class="clear"></div>
		</div>									
		
		<div class="item">
			<div class="list-left">Transport Provider:</div>
			<div class="list-right">
			' . self::codename($quoteprovider) . '		
			</div>
			<div class="clear"></div>
		</div>	
        <div class="item">
			<div class="list-left">Customer rate:</div>
			<div class="list-right" style="padding-top:10px">
			' . self::transpoterlevel($quoteproviderid) . '				
			</div>
			<div class="clear"></div>
		</div>	
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other Quote Information:</div>
			<div class="list-right">
		    ' . Util::Phone_Mail($quoteprovidernote) . '
            <div class="clear"></div>
		</div>																				
		
		<div class="clear"></div>
		
	</div></div>';

print '<div id="divright"><div class="left column" style="width:460px; margin-left:5px;">
  <h1 class="popup-title">Freight information</h1>
		<div class="item">
			<div class="list-left">Freight status:</div>
			<div class="list-right">
            ';
$mstatus = $result['fstatus'];
require_once HELPERS_DIR . 'freight_status/status.inc';
//


?>