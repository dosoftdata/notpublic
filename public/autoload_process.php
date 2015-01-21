<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
//fm_freight::load_freight();


if($_POST)
{
	//sanitize post value
	$group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	
	//throw HTTP error if group number is not valid
	if(!is_numeric($group_number)){
		header('HTTP/1.1 500 Invalid number!');
		exit();
	}
	$sorting =filter_var($_POST["sorting"]);
    print $sorting;
	//get current starting point of records
	$position = ($group_number *FREIGHT_LIST_PER_PAGE);
	
    $sql = 'CALL get_all_freight(:start,:perpages)';
    $page_params = array(':start' => $position, ':perpages' => FREIGHT_LIST_PER_PAGE);
	//Limit our results within a specified range. 
    $result = DatabaseHandler::GetAll($sql, $page_params);
      //print '<div class="vpb_pagination_system">'.$pager->links.'</div>';
    //Get all contents for this page from the database and display on the screen to the user
    for ($i = 0; $i < count($result); $i++)
    {
     print'<div id="freightlisted">';
     if (file_exists($result[$i]['freight_photo_path']))
        {
            print '<img src="' . $result[$i]['freight_photo_path'] .'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;"/>';
        } 
         else
        {
             
          print '<img src="' .  FREIGHTDEFAULTIMAGEPATH.'"  border=0 style="border:1px solid #dddddd; padding:3px; background-color:white;"/>';
            
        }
     print'
    <div id="listshippment" style="padding: 3px;">
    <span><strong>From :</strong>' .$sorting .$result[$i]['Countryin'] . '</span><br />
    <span><strong>To :</span> ' . $result[$i]['CountryOut'] . '</strong><br />
    <span><strong>Shippement ID:</strong>#' . $result[$i]['FreightID'].'</span><br />
    <span><strong>Shippment:</strong>'. fm_freight::matchsubcat($result[$i]['subcat_name'], $result[$i]['Cat_name']) .' </span><br />
    <span style="color:white"> <strong><a style="color:white">Lowest Offer:</a></strong>'.fm_freight::getlowestquote($result[$i]['FreightID']).'</span><br />
    <span  id="morefreightdetail"><a  style="color:white" href="freight?freightid='.$result[$i]['FreightID'].'" rel=""  target="_blank" title="Freight Details">More Detail</a></span><br />
    </div>' ;
  print'
    </div>';
    }
	unset($result);
}