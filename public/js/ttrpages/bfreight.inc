<?php
print '<div id="f1_main_content" class="rounded7" style="background: none;height: 480px; margin-top: 20px; padding-top: 0px;">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Booked freight...
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">
<div id="contentq" style="width: 95%; padding: 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
		<tr class="listing_header">
			<td width="30%">Freight / Date</td>
			<td width="21%">Available Date</td>
			<td width="19%">Left days</td>
			<td width="15%">In Google maps</td>
			<td width="14%" align="center">Action</td>
			</tr>
            
            
<div class="fm_dialog diologrounder7 hidden">
<div class="fm_dialog_header diologrounder7">
<div class="fm_dialog_header_text">Accept customer book</div>
</div>
<p class="fm_dialog_boby" style="text-align: left;">
By accepting to ship this freight, amount of <a id="quotemeaount"></a> will be requested for <a>freightmeta.com</a>
</p>
<div class="fm_dialog_sep"></div>
<div class="fm_dialog_button_wrapper">
<div class="fm_dialog_button_no diologrounder7"> Deny</div>
<div style="clear: both;"></div>
<div class="fm_dialog_button_ok diologrounder7"> Accept</div>
<div style="clear: both;"></div>
</div>
<div style="clear: both;"></div>
</div>
                '; 
        session_start();              
Fm_User::__gET_TTR_BOOKED_FREIGHT($_COOKIE["tusrid"]);				
print '
	
</table>
</div>
</div>
    </div>';


?>