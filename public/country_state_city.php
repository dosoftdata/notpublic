<?php
    require_once dirname(dirname(__FILE__)).'/public/header.php';
    
    
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
?>


<script type="text/javascript">

    $(function() {
           function () {
                var city_id;
                
                var origin = document.getElementById("or_city");
                var destination = document.getElementById("dest_city");
                
                if(origin){
                    alert('send origin city executed');
                }
                else if(destination){
                    alert('send destination city executed');
                }
                else{
                    setTimeout(arguments.callee, 200); // call myself again in 50 msecs
                }
                
                
                /*
                
                if( counter = 1 ){
                    city_id = <?php echo $or_city_id; ?>;
                    alert(city_id);
                    $.ajax({ 
                        url: "ajax_add_freight.php", 
                        type: "POST", 
                        data: { 
                                city : city_id,
                                ajax_value : "or_city"
                              }
                               
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
                        async:false, 
                        success:function(apantisi){ 
                            $('#or_city_id').html(apantisi);  
                        } 
                    });
                }
                else if ( counter = 2 ){
                    city_id = <?php echo $dest_city_id; ?>;
                    
                    $.ajax({ 
                        url: "ajax_add_freight.php", 
                        type: "POST", 
                        data: { 
                                city : city_id,
                                ajax_value : "dest_city"
                              }
                               
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
                        async:false, 
                        success:function(apantisi){ 
                            $('#dest_city_id').html(apantisi);  
                        } 
                    });                
                }*/
     
            }
    });
</script>
