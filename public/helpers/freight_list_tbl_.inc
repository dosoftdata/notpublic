<?php                        
         switch ($catsubcatarray)
              {
              case array(CAT1,SUBCAT1_CAT1):
	print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['packaging'].'</span>/
	    <span class="lighttext" style="font-size:13pt"> '.$result[$i]['qty'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
 /**************************************************************/             
              case array(CAT1,SUBCAT2_CAT1):
 	print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['packaging'].'</span>/
	    <span class="lighttext" style="font-size:13pt"> '.$result[$i]['qty'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
            
              break;
  /**************************************************************/             
              case array(CAT2,SUBCAT3_CAT2):
    print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['model'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['make'].'</span>
          <span class="lighttext" style="font-size:12pt">('.$result[$i]['fyear'].')</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
              
              break;
 /**************************************************************/
              case array(CAT2,SUBCAT4_CAT2):
    print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['model'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['make'].'</span>
          <span class="lighttext" style="font-size:12pt">('.$result[$i]['fyear'].')</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
     
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT6_CAT2):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['on_trailer'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['width'].'</span>X
          <span class="lighttext" style="font-size:12pt">'.$result[$i]['height'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
 
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT7_CAT2):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['on_trailer'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['width'].'</span>X
          <span class="lighttext" style="font-size:12pt">'.$result[$i]['height'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
              
              break;
  /**************************************************************/
              case array(CAT2,SUBCAT8_CAT2):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['description'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['width'].'</span>X
          <span class="lighttext" style="font-size:12pt">'.$result[$i]['height'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
  /**************************************************************/
              case array(CAT3,SUBCAT9_CAT3):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['model'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['make'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
              
              break;
  /**************************************************************/
              case array(CAT4,SUBCAT10_CAT4):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['flength'].'</span><br/>
         <strong> On Trailer:</strong><span class="lighttext" style="font-size:12pt">';
         	$ontrailer = $result[$i]['on_trailer'];
	           switch($ontrailer){
                 case 0:
                 print 'No </span>';
                 break;
                 case 1:
                 print 'Yes</span>';
                        }//
          
    require_once HELPERS_DIR .'freight_list_footer_.inc';
         
              break;
  /**************************************************************/
              case array(CAT4,SUBCAT11_CAT4):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['flength'].'</span><br/>
         <strong> On Trailer:</strong><span class="lighttext" style="font-size:12pt">';
         	$ontrailer = $result[$i]['on_trailer'];
	           switch($ontrailer){
                 case 0:
                 print 'No </span>';
                 break;
                 case 1:
                 print 'Yes</span>';
                        }//
          
    require_once HELPERS_DIR .'freight_list_footer_.inc';         
              break;
  /**************************************************************/
              case array(CAT4,SUBCAT12_CAT4):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['flength'].'</span><br/>
         <strong> On Trailer:</strong><span class="lighttext" style="font-size:12pt">';
         	$ontrailer = $result[$i]['on_trailer'];
	           switch($ontrailer){
                 case 0:
                 print 'No </span>';
                 break;
                 case 1:
                 print 'Yes</span>';
                        }//
          
    require_once HELPERS_DIR .'freight_list_footer_.inc';           
              break;
    /**************************************************************/
              case array(CAT4,SUBCAT13_CAT4):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['flength'].'</span><br/>
         <strong> On Trailer:</strong><span class="lighttext" style="font-size:12pt">';
         	$ontrailer = $result[$i]['on_trailer'];
	           switch($ontrailer){
                 case 0:
                 print 'No </span>';
                 break;
                 case 1:
                 print 'Yes</span>';
                        }//
          
    require_once HELPERS_DIR .'freight_list_footer_.inc';          
              break;
   /**************************************************************/
              case array(CAT4,SUBCAT14_CAT4):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['flength'].'</span><br/>
         <strong> On Trailer:</strong><span class="lighttext" style="font-size:12pt">';
         	$ontrailer = $result[$i]['on_trailer'];
	           switch($ontrailer){
                 case 0:
                 print 'No </span>';
                 break;
                 case 1:
                 print 'Yes</span>';
                        }//
          
    require_once HELPERS_DIR .'freight_list_footer_.inc';         
              break;
   
  /**************************************************************/
              case array(CAT5,SUBCAT15_CAT5):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';  
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT16_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
  
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT17_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT18_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT19_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT20_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT21_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
           
              break;
  /**************************************************************/
              case array(CAT6,SUBCAT22_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
  /**************************************************************/
              case array(CAT6,SUBCAT23_CAT6):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
  /**************************************************************/
              case array(CAT7,SUBCAT24_CAT7):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT25_CAT7):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT26_CAT7):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
            
   
              break;
  /**************************************************************/
              case array(CAT7,SUBCAT27_CAT7):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
  
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT28_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
           
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT29_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
  /**************************************************************/
              case array(CAT8,SUBCAT30_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
        
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT31_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
         
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT32_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
    
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT33_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
      
              break;
  /**************************************************************/
              case array(CAT8,SUBCAT34_CAT8):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
  
              break;
  /**************************************************************/
              case array(CAT9,SUBCAT35_CAT9):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['description'].'';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
			  
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT36_CAT10):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
          <span class="lighttext" style="font-size:12pt">('.$result[$i]['livestock_no'].')</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
         
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT37_CAT10):
   print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
          <span class="lighttext" style="font-size:12pt">('.$result[$i]['livestock_no'].')</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';         
              break;
  /**************************************************************/
              case array(CAT10,SUBCAT38_CAT10):
   print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
          <span class="lighttext" style="font-size:12pt">('.$result[$i]['livestock_no'].')</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc'; 
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT39_CAT11):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';        
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT40_CAT11):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT11,SUBCAT41_CAT11):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT42_CAT12):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT43_CAT12):
 print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';			  
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT44_CAT12):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';      
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT45_CAT12):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';        
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT46_CAT12):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';     
              break;
  /**************************************************************/
              case array(CAT12,SUBCAT47_CAT12):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';           
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT48_CAT13):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';     
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT49_CAT13):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';

              break;
  /**************************************************************/
              case array(CAT13,SUBCAT50_CAT13):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc'; 
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT51_CAT13):

  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc'; 
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT52_CAT13):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT13,SUBCAT53_CAT13):
 print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT14,SUBCAT54_CAT14):
  print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT15,SUBCAT55_CAT15):
  print'<td valign="top"><span ><strong>';
    print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />
	     <span class="lighttext" style="font-size:13pt"> '.$result[$i]['description'].'</span>/
          <span class="lighttext" style="font-size:13pt"> '.$result[$i]['width'].'</span>X
          <span class="lighttext" style="font-size:12pt">'.$result[$i]['height'].'</span>';
    require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT16,SUBCAT56_CAT16):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT17,SUBCAT57_CAT17):
   print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';
              break;
  /**************************************************************/
              case array(CAT18,SUBCAT58_CAT18):
 print'<td valign="top"><span ><strong>';
  print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
  require_once HELPERS_DIR .'freight_list_footer_.inc';			  
              break;
  /**************************************************************/
              case array(NULL,NULL):
              print "Freight details not available!.";
              break;
             }
            

      
?>