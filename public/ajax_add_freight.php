<html>
    <body>
        <input type="hidden" id="or_city_id" />
        <input type="hidden" id="dest_city_id" />
    </body>
</html>

<?php
    require_once dirname(dirname(__FILE__)).'/public/header.php';

    if(isset($_POST['ajax_value'])){
        $ajax = $_POST['ajax_value'];
        print '<div style="color: black;">Ajax value : '.$ajax.'</div> ';

 	    if( $ajax == "category" ){
            if(isset($_POST['mycat'])){
                $cat = $_POST['mycat'];
                $sql = 'CALL get_subcat_by_category(:cat)';
        
                $params = array(':cat' => $cat);
       
                // Execute the query and return the results
                $result = DatabaseHandler::GetAll($sql, $params);
        
                $arrLen = count($result);  
        
                if($arrLen==1){
                    fm_freight::Shipment_details($curPSub);
                }
                else{
        
                    for($i=0; $i < $arrLen; $i++) {
                        echo    '<option value="'.$result[$i]['psc_id'].'">'.
                        $result[$i]['psc_descr'].
                        '</option> ';        
                    }
                }
       
            } 
	   }       
       else if( $ajax == "submit" ){ 
            
            $catname = $_POST['_CATNAME'];
            $subcatid = $_POST['_SUBCATID'];
            $otherdetail = $_POST['otherdeatail'];
            $fromdate = $_POST['fromdate'];
            $todate = $_POST['todate'];
            $stayday = $_POST['staydays'];
            $Ormypostcode = $_POST['Ormypostcode'];
            $Orrefdetail = $_POST['Orrefdetail'];
            $Dsmypostcode = $_POST['Dsmypostcode'];
            $Dsrefdetail = $_POST['Dsrefdetail'];
            $usrname = $_POST['usrname'];
            $useremail = $_POST['useremail'];
            $usrpwd = $_POST['usrpwd'];
            $usrfname = $_POST['usrfname'];           
            $staydays = $_POST['staydays'];
            
            //fm_freight::insert_freight($catname, $subcatid, $otherdetail, $fromdate, $todate,$Ormypostcode, 
            //                    $Orrefdetail, $Dsmypostcode, $Dsrefdetail, $usrname, $useremail, 
            //                    $usrpwd, $usrfname, $or_city, $dest_city, $staydays);
            //header("location: customer_congrate.php"); 
       }
       else{
            if(isset($_POST['res'])){
       
               $infos = $_POST['res'];
               
               $placenames = explode(",", $infos);
               $city = $placenames[0];
               $city = substr($city, 15);
               $city = trim($city);
               $state = trim($placenames[1]);
               $country = trim($placenames[2]);
               $latitude = $placenames[3];
               $longitude = $placenames[4];
               $counter = (int)$placenames[5];
               
               $sql = "SELECT manage_places(:city, :state, :country, :lat, :lng)";
               $params = array( ':city'     =>  $city, 
                                ':state'    =>  $state, 
                                ':country'  =>  $country,
                                ':lat'      =>  $latitude,
                                ':lng'      =>  $longitude);
                if($counter == 1){
                    $or_city_id = DatabaseHandler::GetOne($sql, $params);
                    echo    '<div id="or_city"  onload="send_city();" style="color: black;">Origin city : '.$or_city_id.'</div> ';
                    //echo '<script language="javascript">send_city();</script>';
                }
                else{
                    $dest_city_id = DatabaseHandler::GetOne($sql, $params);
                    echo    '<div id="dest_city" onload="send_city();" style="color: black;">Destination city : '.$dest_city_id.'</div> ';
                    //echo '<script language="javascript">send_city();</script>';
                }       
           }
           else{
              echo    '<div style="color: black;">not set</div> '; 
           }
           /* echo '<div style="color: black;">Category : '.$cat.'</div> ';
            echo '<div style="color: black;">Origin city : '.$or_city.'</div> ';
            echo '<div style="color: black;">Destination city : '.$dest_city.'</div> ';
            echo '<div style="color: black;">Ormypostcode : '.$Ormypostcode.'</div> ';
            echo '<div style="color: black;">Orrefdetail : '.$Orrefdetail.'</div> ';
            echo '<div style="color: black;">Dsmypostcode : '.$Dsmypostcode.'</div> ';
            echo '<div style="color: black;">Dsrefdetail : '.$Dsrefdetail.'</div> ';*/
             

       }
	}
?>