<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $vafid=fm_freight::SafeInput($_GET['afid']);
    $vatid=fm_freight::SafeInput($_GET['atid']);
    $vasid =fm_freight::SafeInput($_GET['asid']);
    $vanote=fm_freight::SafeInput($_GET['anote']);
    $vadatetime=fm_freight::SafeInput($_GET['adatetime']);
    $vaskid=fm_freight::SafeInput($_GET['askid']);
    
    $csql = 'CALL FMload_question_control_(:askid)';
    $cparams =array (':askid'=>$vaskid);
    $crownum = DatabaseHandler::Countall($csql,$cparams);
    
    if($crownum <1){
        
        print 201;
      }
      else 
      {
        $csql = 'CALL _GETC_ANSWERTO(:afid,:atid,:asid,:anote,:adatetime,:askid)';
        $cparams =array (':afid'=>$vafid,':atid'=>$vatid,':asid'=>$vasid,
                         ':anote'=>$vanote,':adatetime'=>$vadatetime,':askid'=>$vaskid);
        DatabaseHandler::Countall($csql,$cparams);
        
        print 200;
      }
	
    
    //print 'OK '.$vrated;
    
    

?>