<?php

print '<div id="f1_main_content" class="rounded7" style="background: none;height: 480px; margin-top: 20px; padding-top: 0px;">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Released freight transaction...
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">
<div id="contentq" style="width: 95%; padding: 10px;">
<table width="70%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
		<tr class="listing_header">
			<td width="40%">Freight</td>
			<td width="30%">From Customer</td>
			<td width="30%" align="center">Customer Rate</td>
		</tr>
';
Fm_User::__gET_TTR_COMPLETED_FREIGHT($transpid);
print '	
</table>
</div>
</div>
    </div>';

?>