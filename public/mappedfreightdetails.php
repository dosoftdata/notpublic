<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
//detailid
//Get faq content
print 'Page id :' . $_GET['detailid'];
$sql = 'CALL get_all_freight_with_details(:freightid)';
$params = array(':freightid' => $_GET['detailid']);
// Execute the query and return the results
$result = DatabaseHandler::GetAll($sql, $params);
{
    for ($i = 0; $i < count($result); $i++)
    {
        $catsubcatarray = array($result[$i]['Cat_name'], $result[$i]['subcat_name']);
        switch ($catsubcatarray)
        {
            case array(CAT1, SUBCAT1_CAT1):

                require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                print ' <strong>Item Height (m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                print ' <strong>Item Width(m,cm)</strong>: ' . $result[$i]['width'] . '<br/>';
                print ' <strong>Item Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                print ' <strong>Weight (kg (per unit)</strong>: ' . $result[$i]['weigth'] .
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';

                break;
                /**************************************************************/
            case array(CAT1, SUBCAT2_CAT1):
                 require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                print ' <strong>Item Height (m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                print ' <strong>Item Width(m,cm)</strong>: ' . $result[$i]['width'] . '<br/>';
                print ' <strong>Item Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                print ' <strong>Weight (kg (per unit)</strong>: ' . $result[$i]['weigth'] .
                    
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT3_CAT2):
               require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                         print '<strong>Make</strong>: ' . $result[$i]['make'] . '<br/>';
                        print ' <strong>Model</strong>: ' . $result[$i]['model'] . '<br/>';
                        print ' <strong>Year</strong>: ' . $result[$i]['fyear'] . '<br/>';
                        print ' <strong>Drivable</strong>: ' . $result[$i]['drivable'] . '<br/>';
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT4_CAT2):
             require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                         print '<strong>Make</strong>: ' . $result[$i]['make'] . '<br/>';
                        print ' <strong>Model</strong>: ' . $result[$i]['model'] . '<br/>';
                        print ' <strong>Year</strong>: ' . $result[$i]['fyear'] . '<br/>';
                        print ' <strong>Drivable</strong>: ' . $result[$i]['drivable'] . '<br/>';
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT5_CAT2):
                require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
          print '<strong>Description</strong>: ' . $result[$i]['description'] . '<br/>';
                        print '<strong>Height(m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                        print ' <strong>Width(m,cm)l</strong>: ' . $result[$i]['width'] . '<br/>';
                        print ' <strong>Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                        print ' <strong>Weight(kg)(</strong>: ' . $result[$i]['weigth'] . '<br/>';
;
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT6_CAT2):
            require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                                print '<strong>Description</strong>: ' . $result[$i]['description'] . '<br/>';
                        print '<strong>Height(m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                        print ' <strong>Width(m,cm)l</strong>: ' . $result[$i]['width'] . '<br/>';
                        print ' <strong>Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                        print ' <strong>Weight(kg)(</strong>: ' . $result[$i]['weigth'] . '<br/>';
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT7_CAT2):
            require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
          print '<strong>Description</strong>: ' . $result[$i]['description'] . '<br/>';
                        print '<strong>Height(m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                        print ' <strong>Width(m,cm)l</strong>: ' . $result[$i]['width'] . '<br/>';
                        print ' <strong>Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                        print ' <strong>Weight(kg)(</strong>: ' . $result[$i]['weigth'] . '<br/>';
;
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT2, SUBCAT8_CAT2):
             require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                  print '<strong>Description</strong>: ' . $result[$i]['description'] . '<br/>';
                        print '<strong>Height(m,cm)</strong>: ' . $result[$i]['height'] . '<br/>';
                        print ' <strong>Width(m,cm)l</strong>: ' . $result[$i]['width'] . '<br/>';
                        print ' <strong>Length(m,cm)</strong>: ' . $result[$i]['flength'] . '<br/>';
                        print ' <strong>Weight(kg)(</strong>: ' . $result[$i]['weigth'] . '<br/>';

                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT3, SUBCAT9_CAT3):
          require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
                      print '<strong>Make</strong>: ' . $result[$i]['make'] . '<br/>';
                        print '<strong>Model</strong>: ' . $result[$i]['model'] . '<br/>';
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT4, SUBCAT10_CAT4):
require_once HELPERS_DIR . 'freight_details/details_header.inc';
                print '    
    </span>
     </div>
     <div id="freightlisteddetails9">
     <strong>Shippment datails </strong>:<br />
     <div style="width: 70%; height: auto; border: 1px solid grey;">
     ';
          print '<strong>Description</strong>: ' . $result[$i]['description'] . '<br/>';
                        switch ($result[$i]['unknown_dims'])
                        {
                            case 1:
                                print ' <strong>Note</strong>:Unsure of exact item weight & Dimension<br/>';
                                break;
                            default:
                                print '';
                                break;
                        }
                        print '<strong>Length (ft,m)</strong>: ' . $result[$i]['flength'] . '<br/>';
                    print '
     </div>
     </div>
   
   </div>
   </div>
  </td>
  
  </tr>

</table>';
                break;
                /**************************************************************/
            case array(CAT4, SUBCAT11_CAT4):

                break;
                /**************************************************************/
            case array(CAT4, SUBCAT12_CAT4):

                break;
                /**************************************************************/
            case array(CAT4, SUBCAT13_CAT4):

                break;
                /**************************************************************/
            case array(CAT4, SUBCAT14_CAT4):

                break;
                /**************************************************************/
            case array(CAT5, SUBCAT15_CAT5):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT16_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT17_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT18_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT19_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT20_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT21_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT22_CAT6):

                break;
                /**************************************************************/
            case array(CAT6, SUBCAT23_CAT6):

                break;
                /**************************************************************/
            case array(CAT7, SUBCAT24_CAT7):

                break;
                /**************************************************************/
            case array(CAT7, SUBCAT25_CAT7):

                break;
                /**************************************************************/
            case array(CAT7, SUBCAT26_CAT7):


                break;
                /**************************************************************/
            case array(CAT7, SUBCAT27_CAT7):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT28_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT29_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT30_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT31_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT32_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT33_CAT8):

                break;
                /**************************************************************/
            case array(CAT8, SUBCAT34_CAT8):

                break;
                /**************************************************************/
            case array(CAT9, SUBCAT35_CAT9):

                break;
                /**************************************************************/
            case array(CAT10, SUBCAT36_CAT10):

                break;
                /**************************************************************/
            case array(CAT10, SUBCAT37_CAT10):

                break;
                /**************************************************************/
            case array(CAT10, SUBCAT38_CAT10):

                break;
                /**************************************************************/
            case array(CAT11, SUBCAT39_CAT11):

                break;
                /**************************************************************/
            case array(CAT11, SUBCAT40_CAT11):

                break;
                /**************************************************************/
            case array(CAT11, SUBCAT41_CAT11):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT42_CAT12):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT43_CAT12):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT44_CAT12):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT45_CAT12):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT46_CAT12):

                break;
                /**************************************************************/
            case array(CAT12, SUBCAT47_CAT12):

                break;
                /**************************************************************/
            case array(CAT13, SUBCAT48_CAT13):

                break;
                /**************************************************************/
            case array(CAT13, SUBCAT49_CAT13):


                break;
                /**************************************************************/
            case array(CAT13, SUBCAT50_CAT13):

                break;
                /**************************************************************/
            case array(CAT13, SUBCAT51_CAT13):


                break;
                /**************************************************************/
            case array(CAT13, SUBCAT52_CAT13):

                break;
                /**************************************************************/
            case array(CAT13, SUBCAT53_CAT13):

                break;
                /**************************************************************/
            case array(CAT14, SUBCAT54_CAT14):

                break;
                /**************************************************************/
            case array(CAT15, SUBCAT55_CAT15):

                break;
                /**************************************************************/
            case array(CAT16, SUBCAT56_CAT16):

                break;
                /**************************************************************/
            case array(CAT17, SUBCAT57_CAT17):

                break;
                /**************************************************************/
            case array(CAT18, SUBCAT58_CAT18):

                break;
                /**************************************************************/
            case array(null, null):
                print "Freight details not available!.";
                break;
        }
    }
}

?>