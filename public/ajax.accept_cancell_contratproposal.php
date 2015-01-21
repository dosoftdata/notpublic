<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $vafid=fm_freight::SafeInput($_GET['afid']);
    $vaction=fm_freight::SafeInput($_GET['action']);
    $vpcid=fm_freight::SafeInput($_GET['cpid']);

    switch($vaction){
        
        case 200:
        $csql = 'CALL _C_ACCEPT_CP(:afid,:action,:cpid)';
        $cparams =array (':afid'=>$vafid,':action'=>$vaction,':cpid'=>$vpcid);
        DatabaseHandler::Execute($csql,$cparams);
        print '200';
        return true;
        break;
        case 201:
        $csql = 'CALL _C_CANCELL_CP(:afid,:action,:cpid)';
        $cparams =array (':afid'=>$vafid,':action'=>$vaction,':cpid'=>$vpcid);
        DatabaseHandler::Execute($csql,$cparams);
        print '201';
        return false;
        break;
    }
    
    
    //print 'OK '.$vrated;
    
    

?>