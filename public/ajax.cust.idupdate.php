<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $cemail=fm_freight::SafeInput($_POST['cemail']);
    $cusername=fm_freight::SafeInput($_POST['cusername']);
    $cphone =fm_freight::SafeInput($_POST['cphone']);
    $cfirstname=fm_freight::SafeInput($_POST['cfirstname']);
    $clastname=fm_freight::SafeInput($_POST['clastname']);
    $ccompanyname=fm_freight::SafeInput($_POST['ccompanyname']);
    $caddress1=fm_freight::SafeInput($_POST['caddress1']);
    $caddress2=fm_freight::SafeInput($_POST['caddress2']);
    $cpostcode=fm_freight::SafeInput($_POST['cpostcode']);
    
    $ccontinent=fm_freight::SafeInput($_POST['ccontinent']);
    $ccountry=fm_freight::SafeInput($_POST['ccountry']);
    $cstate=fm_freight::SafeInput($_POST['cstate']);
    $cregion=fm_freight::SafeInput($_POST['cregion']);
    $ccity=fm_freight::SafeInput($_POST['ccity']);
    
    
  
    
    $csql = 'CALL `_UPDATESENDERIDCONTENT
            (
            :cemail,:cusername,cphone,:cfirstname,
            :clastname,:ccompanyname,caddress1,:caddress2,
            :cpostcode,:ccontinent,:ccountry,:cstate,:cregion,:ccity
            )';
    $cparams =array (
                     ':cemail'=>$cemail,':cusername'=>$cusername,
                     ':cphone'=>$cphone,':cfirstname'=>$cfirstname,
                     ':clastname'=>$clastname,':caddress2'=>$caddress2,
                     ':caddress1'=>$caddress1,':cusername'=>$cusername,
                     ':cpostcode'=>$cpostcode,':ccontinent'=>$ccontinent,
                     ':ccountry'=>$ccountry,':cstate'=>$cstate,
                     ':cregion'=>$cregion,':cregion'=>$cregion
                     );
    $querystatus=false;
    DatabaseHandler::Execute($csql,$cparams);
    $querystatus=true;
    print 200;

    