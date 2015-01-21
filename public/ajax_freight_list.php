<?php
   require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    
    $general_freight_sql = 'CALL get_freight()';
    $gen_result = DatabaseHandler::GetAll($general_freight_sql); 
    
    if(isset($_POST['sort_by'])){
        $sort_by = $_POST['sort_by'];
        fm_freight::getFreights($sort_by);
    }
    
?>    