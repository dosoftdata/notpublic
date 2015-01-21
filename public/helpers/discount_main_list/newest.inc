<?php
$vpb_page_limit = FREIGHT_LIST_PER_PAGE; //This is the number of contents to display on each page

$sql = 'CALL 3_TRANSPORTER_SHIPPING_DISCOUNT_COUNT()';
// Execute the query and return the results
$vpb_get_total_pages = DatabaseHandler::Countall($sql);
//print $vpb_get_total_pages;
require_once HELPERS_DIR.'discount_main_list/discount_pager.inc';

//Check the contents for this page from the database\
///$vpb_check_contents_second = mysql_query("SELECT * FROM `vasplus_programming_blog_pagination` ORDER BY `id` DESC LIMIT $vpb_start_page, $vpb_page_limit");

$sql = 'CALL 3_TRANSPORTER_SHIPPING_DISCOUNT_LIST_NEW(:start,:perpages)';
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
        
        

;
     print '<div id="freightwrapperdisc" class="control'.$i.'  outerbox rounded column">
    <div class="discountrow outerbox  rounded" style="height:70px">
    <img src="images/discount/star.png"  alt="star:"/>
    <span>'.$result[$i]['soldorigin'].'</span>
    <span class="fr" style="right: 2;">Left days: 
    '.fm_freight::leftdatetime2(fm_freight::load_current_datedate(),$result[$i]['tosolde'],$result[$i]['ttr_solde_categoryID']).'
    
    </span>
    </div>
    <div class="discountrow outerbox">
     <img src="images/discount/end.png"  alt="star:"/>
     <span>'. $result[$i]['SDestination'] .'</span>
     <span class="fr" style="right: 2;">
     <a class="" href="#" onClick="loadmap('.$result[$i]['ttr_solde_categoryID'].')">Map</a>
     <input type="hidden" name="fromdate" id="addressin'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['soldorigin'].'" />
<input type="hidden" name="todate" id="addressout'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['SDestination'].'" />
     </span>
    </div>
    <div class="discountrow">
     <strong class="pl"> Discount Period</strong> :<br /><span>' . fm_freight::
                    formatdatebetween($result[$i]['Fromsoldedate']) . '&nbsp;->&nbsp;' . fm_freight::
                    formatdatebetween($result[$i]['tosolde']) . '</span>
    </div>
    <div class="discountrow">
    <span class="pl" >
    <strong>From</strong>:<span>'. Util::
                    fmcurrency_code_symbol_model($result[$i]['Currencyid'], $result[$i]['fromamount']) .'</span>
    <strong>Now</strong>:<span>'. Util::fmcurrency_code_symbol_model($result[$i]['soldecurrencyid'],
                    $result[$i]['ForAmount']) .'</span>
    </span>
    </div>
    <div class="discountrow">
    <span class="lighttext"><a>Click the flag for cheaper discount</a>';
    print('<a class="sheapdiscount" onclick="flagdiscount(' .$result[$i]['ttr_solde_categoryID']. ');" href="#"');
    //
    print <<<here
    title="Flag thisShipping discount at Freightmeta's rules"><img src="images/btn/flag-white.png" border="0" style="margin-left:5px;" />
  </a>
here;
usrlogin::sender_login_check();
usrlogin::transporter_login_check();
    print'
    
    </span>
    
    </div>
    <div class="discountrow" style="padding: 5px; font-size: 10.2pt;">
    <strong>Select one:</strong><br />';
    print '<input type="hidden" name="fromorigin" id="fromorigin'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['soldorigin'] .'" />
<input type="hidden" name="todestination" id="todestination'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['SDestination'].'" />
<input type="hidden" name="fromdate" id="fromdate'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['Fromsoldedate'].'" />
<input type="hidden" name="todate" id="todate'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['tosolde'].'" />
<input type="hidden" name="discountprice" id="discountprice'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['ForAmount'].'" />
<input type="hidden" name="currencyid" id="currencyid'.$result[$i]['ttr_solde_categoryID'].'" value="'.$result[$i]['soldecurrencyid'].'" />
<input type="hidden" name="divtitle'.$i.'" id="divtitle'.$i.'" value="FOR :'.$result[$i]['soldorigin'].'</a> |NOW: ' . Util::fmcurrency_code_symbol_model($result[$i]['soldecurrencyid'],
                    $result[$i]['ForAmount']) .'" />
';

    $myarray = array(
                    $result[$i]['scat1'],
                    $result[$i]['scat2'],
                    $result[$i]['scat3'],
                    $result[$i]['scat4'],
                    $result[$i]['scat5'],
                    $result[$i]['scat6'],
                    $result[$i]['scat7'],
                    $result[$i]['scat8'],
                    $result[$i]['scat9'],
                    $result[$i]['scat10'],
                    $result[$i]['scat11'],
                    $result[$i]['scat12'],
                    $result[$i]['scat13'],
                    $result[$i]['scat14'],
                    $result[$i]['scat15'],
                    $result[$i]['scat16'],
                    $result[$i]['scat17'],
                    $result[$i]['scat18']
        );
         $myarray1 = Util::removeAllValuesMatching($myarray, 0);
        $myarray2 = Util::removeAllValuesMatching($myarray1, 'NULL');
        
        //print_r($myarray2);
              
                foreach ($myarray2 as $value)
                {
                    switch($value)
  {
    case 1:
    print '<span class="fcat1"><label><input class="fcat"  name="packagedchk'.$result[$i]['ttr_solde_categoryID'].'" id="packagedchk" type="checkbox" value="1"/><span class="pl">Palletised or Packaged Freight</span></label><br /></span>';
    break;
    
    case 2:
    print '<span class="fcat2"><label><input class="fcat"  name="t_vehicleschk'.$result[$i]['ttr_solde_categoryID'].'" id="t_vehicleschk" type="checkbox" value="2"/><span class="pl">Vehicles</span></label><br /></span>';
    break;
    
    case 3:
    print '<span class="fcat3"><label><input class="fcat"  name="t_motorcycleschk'.$result[$i]['ttr_solde_categoryID'].'" id="t_motorcycleschk" type="checkbox" value="3"/><span class="pl">Motorcycles</span></label><br /></span>';
    break; 
    
    case 4:
    print '<span class="fcat4"><label><input class="fcat"  name="t_boatchk" id="t_boatchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="4"/><span class="pl">Boats / Yachts</span></label><br /></span>';
    break;  
    
    case 5:
    print '<span class="fcat5"><label><input class="fcat"  name="heavychk" id="heavychk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="5"/><span class="pl">Heavy Haulage & Machinery</span></label><br /></span>';
    break;
    
    case 6:
    print '<span class="fcat6"><label><input class="fcat"  name="officeremovalschk'.$result[$i]['ttr_solde_categoryID'].'" id="officeremovalschk" type="checkbox" value="6"/><span class="pl">House & Office Removals</span></label><br /></span>';
    break;
    
    case 7:
    print '<span class="fcat7"><label><input class="fcat"  name="containerchk" id="containerchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="7"/><span class="pl">Containers</span></label><br /></span>';
    break; 
    
    case 8:
    print '<span class="fcat8"><label><input class="fcat"   name="householdchk" id="householdchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="8"/><span class="pl">Household Goods</span></label><br /></span>';
    break;
    
    case 9:
    print '<span class="fcat9"><label><input class="fcat"  name="horseschk" id="horseschk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="9"/><span class="pl">Horses</span></label><br /></span>';
    break;
    
    case 10:
    print '<span class="fcat10"><label><input  class="fcat" name="livestockchk" id="livestockchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="10"/><span class="pl">Livestock</span></label><br /></span>';
    break;
    
    case 11:
    print '<span class="fcat11"><label><input class="fcat"  name="petschk" id="petschk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="11"/><span class="pl">Pets</span></label><br /></span>';
    break; 
    
    case 12:
    print '<span class="fcat12"><label><input class="fcat"  name="foodchk" id="foodchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="12"/><span class="pl">Food & Beverages</span></label><br /></span>';
    break;  
    
    case 13:
    print '<span class="fcat13"><label><input  class="fcat" name="specialcarechk" id="specialcarechk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="13"/><span class="pl">Special Care Items</span></label><br /></span>';
    break;
    
    case 14:
    print '<span class="fcat14"><label><input  class="fcat" name="haygrain" id="haygrain'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="14"/><span class="pl">Hay, Grain & Feed</span></label><br /></span>';
    break;
    
    case 15:
    print '<span class="fcat15"><label><input  class="fcat" name="parcelschk" id="parcelschk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="15"/><span class="pl">Parcels & Small Packages</span></label><br /></span>';
    break; 
    
    case 16:
    print '<span class="fcat16"><label><input  class="fcat" name="miningchk" id="miningchk" type="checkbox" value="16"/><span class="pl">Mining & Resources</span></label><br /></span>';
    break;
    
    case 17:
    print '<span class="fcat17"><label><input  class="fcat" name="buildingchk" id="buildingchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="17"/><span class="pl">Building & Industrial Materials</span></label><br /></span>';
    break;
    
    case 18:
    print '<span class="fcat18"><label><input  class="fcat" name="bulkfreightchk" id="bulkfreightchk'.$result[$i]['ttr_solde_categoryID'].'" type="checkbox" value="18"/><span class="pl">Other Freight</span></label><br /></span>';
    break; 
        
    }
                      }//for
                       									
    print'
    </div>
    <div class="discountrow">
    <strong>Incoterms</strong>:<span>'.$result[$i]['incoterms'].'</span>
    </div>
    <div class="discountrow" style="background-color: #ffffff; padding: 10px;">
    <div class="ui-button fl " style="margin-top:15px">
    ';
       
 print<<<btn
 <button type="submit" class="btn-primary rounded7 logintogetquotediscount" onclick="$('#loaderimage').show(); login();">Login</button>	
 <img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
 <div class="ui-button fl ">
<button class="hidden btn-primary rounded7 afterlogintogetquotediscount" onclick=" expressbookdiscount(					       
btn;
print'
'.$result[$i]['ttr_solde_categoryID'].',
'.$result[$i]['TransporterID'].',
'.$result[$i]['soldecurrencyid'].',
'.$result[$i]['ForAmount'].'';

 print ')">Get quote discount</button><img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
				          </div></div>
    </div> <span class="fr rounded7" style="padding: 2px;">
    <a class="" onclick="unlistdiscount('.$i.');"><img alt="X" src="images/btn/map_close.png"></a>
    </span>
    </div>';
    } //end load freightlist
//print $vpb_pagination_system ;



}


?>