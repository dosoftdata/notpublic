<?php
 $vpb_page_limit = FREIGHT_LIST_PER_PAGE; //This is the number of contents to display on each page
	
	$sql = 'CALL count_all_freight()';
    // Execute the query and return the results
    $vpb_get_total_pages = DatabaseHandler::Countall($sql);
 
	require_once HELPERS_DIR.'freight_main_list/paging_header.inc';
	
	//Check the contents for this page from the database
	///$vpb_check_contents_second = mysql_query("SELECT * FROM `vasplus_programming_blog_pagination` ORDER BY `id` DESC LIMIT $vpb_start_page, $vpb_page_limit");
	
	$sql = 'CALL get_all_freight_mostviewed(:start,:perpages)';
        $page_params = array(':start'=>$vpb_start_page,':perpages'=>$vpb_page_limit);
        // Execute the query and return the results
                
        if($vpb_get_total_pages< 1)
	{
	  print "<div class='info'>Currently, there are no content in the database to display at the moment. Thanks...</div>";
	}
    
    else
	{
	   $result = DatabaseHandler::GetAll($sql,$page_params);	   
		//Get all contents for this page from the database and display on the screen to the user
		
        print <<<here
       	<table width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table vpb_box">
		<tr class="listing_header ">
			<td width="7%">&nbsp;</td>
			<td width="32%">Freight / Date</td>
			<td width="21%">Origin</td>
			<td width="19%">Destination</td>
			<td width="11%"> Notes</td>
			<td width="10%" align="center">Q/Q</td>
			</tr> 
here;
     for($i=0; $i < count($result); $i++)
  {
	     
         $href='freight?freightid='.$result[$i]['FreightID'];
          print '<tr class="altrow2" style="margin-bottom:15px"><td valign="top">';
          
          if (file_exists($result[$i]['freight_photo_path'])){
            print'<a class="fancybox" href="'.$result[$i]['freight_photo_path'].'" data-fancybox-group="gallery" title="'.$result[$i]['Cat_name'].'"><img src="'.$result[$i]['freight_photo_path'].'" width="70px" height="70px" border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;"id="lightbox-image" /></a>'; 
          }
          else{
            print'<a class="fancybox opacity65" href="'.FREIGHTDEFAULTIMAGEPATH.'" data-fancybox-group="gallery" title="'.$result[$i]['Cat_name'].'"><img src="'.FREIGHTDEFAULTIMAGEPATH.'" width="70px" height="70px" border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;" /></a>';
          }
         print '</td>';
         
          print'<td valign="top"><span ><strong>';
          print'<a style="font-size:10pt; text-decoration: underline;" href="'.$href.'">'.$result[$i]['subcat_name'].'</a></strong></span><br />';
      
    print'<div style="margin-top:5px; margin-bottom:3px;"><div style="float:left">';
    print'<img src="images/gen/calendar-sml.jpg" class="fl" style="margin-left:3px;" />';
    print '<div style="float:left">';
    print ''.fm_freight::formatdatebetween($result[$i]['freight_Stay_from']).'<img src="images/gen/arrow1.gif" />' ;
    print ''.fm_freight::formatdatebetween($result[$i]['freight_Stay_to']).'</div><div class="clear"></div></div>';
    print '<span class="bluebg rounded5" style="margin:0px; font-size: 8pt;">' .$result[$i]['Cat_name'].'</span></td><td valign="top"><strong>
                    <div class="clear"></div>';
    print '' .$result[$i]['Countryin'].', ' .$result[$i]['Statein'].'</strong><br/><span style="font-size:12px;" class="lighttext">' ;
    print '' .$result[$i]['Regionin'].',' .$result[$i]['Cityin'].'</span></td><td valign="top"><strong>';
    print '' .$result[$i]['CountryOut'].', ' .$result[$i]['StateOut'].'</strong><br/><span style="font-size:12px;" class="lighttext">';
    print '' .$result[$i]['RegionOut'].',' .$result[$i]['CytiOut'].'</span></td><td valign="top">' ;
    print ''.$result[$i]['description'].'<br /></td>';
    
      print '<td align="center" valign="top">';
        print '<span style="font-size:15px;font-weight:bold;">';
      print ''.fm_freight::countquestiontimes($result[$i]['FreightID']).'</span>/'.fm_freight::countquotetimes($result[$i]['FreightID']).'<br />';
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
      print '</tr>';
              print <<<here
        </div><br clear="all" />
here;
		}//end load freightlist

		
       print '<div class="clear"></div><div class="" style=" margin-top:-75px"><br clear="all" />';
	   print '<div style="" align="left">'.$vpb_pagination_system .'</div><!-- This is the pagination buttons -->';
       print '<br clear="all" /></div>	<div class="clear"></div>';
		
	} 

?>