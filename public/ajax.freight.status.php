<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $vfid=fm_freight::SafeInput($_GET['freightnum']);
    
    $csql = 'CALL _SETCANCELL_C_FREIGHT(:fid)';
    $cparams =array (':fid'=>$vfid);
    DatabaseHandler::Execute($csql,$cparams);   
    print 200;
    //print 'OK '.$vrated;
?>