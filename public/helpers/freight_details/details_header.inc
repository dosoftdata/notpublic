<?php
 Print '<table style="width:570px; height:320px">
  <tr style=widht:100%>
  <td>
  <div class="" style="z-index: 9999px;position: absolute; width: 570px; height: auto; background-color:rgba(255, 255, 255, 0.5); top: 35px;  right: 1%;">
     <div id="freightlisteddetails">
     <div id="freightlisteddetails1">
     <strong>Pick up</strong>:'.$result[$i]['Countryin'].'/'.$result[$i]['Regionin'].'
     </div>
     <div id="freightlisteddetails2">
     <strong>Delivery </strong>:'.$result[$i]['CountryOut'].'/'.$result[$i]['RegionOut'].'
     <span style="position: absolute; right:1px;" id="lowestquoteamount">
     <a href="#" rel="" title="Freight Details">
     Lowest offer:'.fm_freight::getlowestquote($result[$i]['FreightID']).'</a></span><br />
     </div>
     <div id="freightlisteddetails3">
     <strong>Shippement ID </strong>:##'.$result[$i]['FreightID'].'
     </div>
     <div id="freightlisteddetails5">
     <strong>Available date range </strong>:
     
     <strong style="position: absolute;right: 2%;">Make your offer & take the job!!</strong>

     </div>
     <div id="freightlisteddetails6">
     <strong>'.fm_freight::freightposteddate($result[$i]['freight_Stay_from']).''.ARROWTO.''.fm_freight::freightposteddate($result[$i]['freight_Stay_to']).' </strong>:
     </div>
     <div id="freightlisteddetails7" style="padding-bottom: 15px;">
     <strong>Status </strong>:';
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
                print '<span class="status-booked">Booked</span> By the Customer';
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
    <span style="position: absolute; right: 1px; font-size: 10.2px;">
    ';
    print'<div style="float:right;">';
			print'<div style="margin-top:1px; margin-right:10px;" class="">';
			print'<a style="text-decoration:underline" class="frstlogintoq " href="login?ttrlgtq='.$_GET['detailid'].'&urlq=ttrlgtq" rel="nofollow">Transporters Login to Quote</a>';
            print'<a  style="text-decoration:underline" class="quoteafterlogin fl hidden fr " href="quote_freight?fttrq='.$_COOKIE["tusrid"].'&ftoq='.$_GET['detailid'].'">Quote this freight</a>'; 
			print'<a style="text-decoration:underline" class="frstjoinq "  href="t-register">   or  Join Freightmeta</a>';
			print'</div></div><div class="clear"></div>';
		    print'<!-- end of quote details -->';
?>