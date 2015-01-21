<?php

print '<div style="margin-top:5px; margin-bottom:3px;"><div style="float:left">';
print '<img src="images/gen/calendar-sml.jpg" class="fl" style="margin-left:3px;" />';
print '<div style="float:left">';
print '' . self::formatdatebetween($result[$i]['freight_Stay_from']) .
    '<img src="images/gen/arrow1.gif" />';
print '' . self::formatdatebetween($result[$i]['freight_Stay_to']) .
    '</div><div class="clear"></div></div>';
print '<span class="bluebg rounded5" style="margin:0px; font-size: 8pt;">' . $result[$i]['Cat_name'] .
    '</span></td><td valign="top"><strong>';

print '' . $result[$i]['Countryin'] . ', ' . $result[$i]['Statein'] .
    '</strong><br/><span style="font-size:12px;" class="lighttext">';
print '' . $result[$i]['Regionin'] . ',' . $result[$i]['Cityin'] .
    '</span></td><td valign="top"><strong>';
print '' . $result[$i]['CountryOut'] . ', ' . $result[$i]['StateOut'] .
    '</strong><br/><span style="font-size:12px;" class="lighttext">';
print '' . $result[$i]['RegionOut'] . ',' . $result[$i]['CytiOut'] .
    '</span></td><td valign="top">';
print '' . $result[$i]['description'] . '<br /></td>';

print '<td align="center" valign="top">';
print '<span style="font-size:15px;font-weight:bold;">';
print '' . self::countquestiontimes($result[$i]['FreightID']) . '</span><br />
          ' . self::countquotetimes($result[$i]['FreightID']) . '';
$mstatus = $result[$i]['freight_status'];
switch ($mstatus)
{
    case 0:
        print '<span class="status-cancelled">Cancelled</span><br />';
        break;
    case 1:
        print '<span class="status-active">active</span><br />';
        break;
    case 2:
        print '<span class="status-expired">expired</span><br />';
        break;
    case 3:
        print '<span class="status-booked">Booked</span><br /> By the Customer';
        break;
    case 4:
        print '<span class="status-accepted">In process</span><br />';
        break;
    case 5:
        print '<span class="status-complete">Completed</span><br />';
        break;
    case 6:
        print '<span class="status-complete">Payed</span><br />';
        break;


}
print '</td>';
print '</tr></div><br clear="all" />';

?>