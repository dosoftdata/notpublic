<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $vqid=fm_freight::SafeInput($_GET['qid']);
    $vfid=fm_freight::SafeInput($_GET['fid']);
    $vrated =fm_freight::SafeInput($_GET['rated']);
    $vreview=fm_freight::SafeInput($_GET['review']);
    $vcid=fm_freight::SafeInput($_GET['cid']);
    
    $csql = 'CALL _CRATEREVIEWCONTROL(:cid)';
    $cparams =array (':cid'=>$vcid);
    $crownum = DatabaseHandler::Countall($csql,$cparams);
    
    if($crownum <1){
        
        print 201;
      }
      else 
      {
        $csql = 'CALL _GETCRATEREVIEW(:qid,:fid,:rated,:review)';
        $cparams =array (':cid'=>$vcid,':fid'=>$vfid,
                         ':rated'=>$vrated,':review'=>$vreview);
        DatabaseHandler::Countall($csql,$cparams);
        
        print 200;
      }
	
    
    //print 'OK '.$vrated;
    
    

?>