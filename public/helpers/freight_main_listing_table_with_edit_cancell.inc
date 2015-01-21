<?php 

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
1 Pallet, total weight 2kg</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">25 Dec</div>
<div class="clear"></div>
</div>Origin: Albert Park, VIC 3206<br />Dest: Albacutya, VIC 3424</td>

<td valign="top">23-12-2013 07:14am<br/></td>
<td align="left" valign="top">25-12-2013 08:12pm<br/>
<span class="lighttext">2 days 23 hours </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">0</a> (0 active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="usr-view-sms.php?freightid=60203#questions">0</a></div></td><td align="left" valign="top">
<span class="status-active">active</span>
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="freight_list?freightid=" style="width:100%;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight.php" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="60203"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>'
?>