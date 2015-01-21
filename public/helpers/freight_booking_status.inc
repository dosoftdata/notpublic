<?php
                            
        for($i=0; $i < count($result); $i++) 
        
        {
            $catsubcatarray=array($result[$i]['Cat_name'],$result[$i]['subcat_name']);
              switch ($catsubcatarray)
              {
              case array(CAT1,SUBCAT1_CAT1):
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['packaging'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
       switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';         
            
            break;
 /**************************************************************/             
              case array(CAT1,SUBCAT2_CAT1):
            
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['packaging'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a></span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
     switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';         

   
              break;
  /**************************************************************/             
              case array(CAT2,SUBCAT3_CAT2):
              
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['model'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
     switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

  
              break;
 /**************************************************************/
              case array(CAT2,SUBCAT4_CAT2):
  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['model'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
     switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';          

  

   
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT5_CAT2):
              
  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
              
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT6_CAT2):
            
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).'</span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';



   
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT7_CAT2):
            
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a></span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT8_CAT2):
             
  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT3,SUBCAT9_CAT3):
              
    
    print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['model'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
              

   
              break;
  /**************************************************************/
              case array(CAT4,SUBCAT10_CAT4):
          

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

              break;
  /**************************************************************/
              case array(CAT4,SUBCAT11_CAT4):
           

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT4,SUBCAT12_CAT4):
             

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
   /**************************************************************/
              case array(CAT4,SUBCAT13_CAT4):
             

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
   /**************************************************************/
              case array(CAT4,SUBCAT14_CAT4):
             

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT5,SUBCAT15_CAT5):
        
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT16_CAT6):
  

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT17_CAT6):
             

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT18_CAT6):
          
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT19_CAT6):
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT20_CAT6):
       

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT21_CAT6):
           

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime($result[$i]['FreightID']).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT22_CAT6):

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
   /**************************************************************/
              case array(CAT6,SUBCAT23_CAT6):

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT24_CAT7):         
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT25_CAT7):
              

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT26_CAT7):
            

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT27_CAT7):
  
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

              break;
  /**************************************************************/
              case array(CAT8,SUBCAT28_CAT8):
           
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT29_CAT8):


 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT30_CAT8):
        
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT31_CAT8):
          

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT32_CAT8):
    

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        };
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
 
   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT33_CAT8):
      

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT34_CAT8):
  

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
   
              break;
  /**************************************************************/
              case array(CAT9,SUBCAT35_CAT9):
          
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT36_CAT10):
         

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT37_CAT10):
           

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';  
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT38_CAT10):
 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT39_CAT11):
          

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT40_CAT11):
  

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT41_CAT11):
      

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT42_CAT12):
        

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
 

   
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT43_CAT12):
             

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
require_once HELPERS_DIR .'freight_status/status.inc';
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT44_CAT12):
         

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>'; 
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT45_CAT12):
           

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
 
 
   
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT46_CAT12):
        

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
 

   
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT47_CAT12):
             

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a>  active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'

<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

              break;
  /**************************************************************/
              case array(CAT13,SUBCAT48_CAT13):
       

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime($result[$i]['FreightID']).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT49_CAT13):
  
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';

   
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT50_CAT13):

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT51_CAT13):

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT52_CAT13):

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

              break;
  /**************************************************************/
              case array(CAT13,SUBCAT53_CAT13):

print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT14,SUBCAT54_CAT14):
  
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

              break;
  /**************************************************************/
              case array(CAT15,SUBCAT55_CAT15):

  print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).'</span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 
 
   
              break;
  /**************************************************************/
              case array(CAT16,SUBCAT56_CAT16):

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a> </span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

              break;
  /**************************************************************/
              case array(CAT17,SUBCAT57_CAT17):

 print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a></span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
              case array(CAT18,SUBCAT58_CAT18):
print '<tr class="altrow2"><td valign="top"></td>
<td valign="top"><span style="font-size:13px;"><strong>
<a  class="fz" href="#">
'.$result[$i]['subcat_name'].', '.$result[$i]['description'].'</a> 
</strong></span><br/>
<div style="margin-top:5px; margin-bottom:1px;">
<div style="float:left"><img src="images/gen/calendar-sml.jpg" style="margin-right:3px;"/></div>
<div style="float:left">
'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'

</div>
<div class="clear"></div>
</div>
Origin: '.$result[$i]['Statein'].', '.$result[$i]['AddressNamein'].'
<br />'.$result[$i]['StateOut'].', '.$result[$i]['AddressNameOut'].'
</td>
<td valign="top">'.fm_freight::freightposteddate($result[$i]['freight_AddedDate']).'<br/></td>
<td align="left" valign="top">'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br/>
<span class="lighttext">'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'',$result[$i]['FreightID'],0).'</a></span></td>
<td align="left" valign="top"><strong>Quotes:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="">'.fm_freight::countquotetimes($result[$i]['FreightID']).'</a> ('.fm_freight::countquotetimes($result[$i]['FreightID']).' active)<br/>
<div style="margin-top:10px;"><strong>Questions:</strong><br/>
<a style="font-size:13px;font-weight:bold;" href="#">'.fm_freight::acitivecountquotetimes($result[$i]['FreightID']).'</a></div></td><td align="left" valign="top">
';
switch ($mstatus)
        {
            case 0:
                print '<strong>Status:<span class="status-cancelled">Cancelled</span><br /></strong>';
                break;
            case 1:
                print '<strong>Status:<span class="status-active">active</span><br /></strong>';
                break;
            case 2:
                print '<strong>Status:<span class="status-expired">expired</span><br /></strong>';
                break;
            case 3:
                print '<strong><span class="status-booked">Booked</span></td><br /> ';
                break;
            case 4:
                print '<strong>Status:<span class="status-accepted">In process</span><br /></strong>';
                break;
            case 5:
                print '<strong>Status:<span class="status-complete">Completed</span><br /></strong>';
                break;
            case 6:
                print '<strong>Status:<span class="status-complete">Payed</span><br /></strong>';
                break;


        }
print'
</td>
<td align="left" valign="top">
<div class="grey button_link">
<a href="add_freight?adfid='.$result[$i]['FreightID'].'" style="width:100%;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all ui-button-text-only" role="button">
<span class="ui-button-text">Edit</span></a></div>
<div class="grey">
<form method="post" action="/user-freight" onsubmit="return confirmFreightCancel();">
<input name="freightid" type="hidden" value="'.$result[$i]['FreightID'].'"> 
<input name="action" type="hidden" value="cancel">
<input name="cancel" type="submit" value="Cancel" style="width:100%;margin-top:4px;" class="ui-button ui-widget btn-primary ui-state-default ui-corner-all" role="button" aria-disabled="false">
</form>
</div>
</td>
</tr>';
 

   
              break;
  /**************************************************************/
             case array(NULL, NULL):
              print "Freight details not available!.";
              break;
             }
            
            //$valueStr = 'value'.$i; 
   // print '<option value="'.$result[$i]['SubCategoryID'].'">'.$result[$i]['subcat_name'].'</option> ';                                      
        }


?>