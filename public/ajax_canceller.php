<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';

 $t_tast=fm_freight::SafeInput($_POST['discountcancell']);
 $t_tastid=fm_freight::SafeInput($_POST['t_tastid']);
 
 switch($t_tast){
    case 'discountcancell':
    print Fm_User::__gET_TTR_CANCELLDISCOUNT_FREIGHT($t_tastid);
    break;
    
 }
 //

?>