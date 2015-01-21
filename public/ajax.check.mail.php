
<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';

   $fmusermail=fm_freight::SafeInput($_POST['usermail']);
   $sql = 'CALL fm_mail_check(:usrmail)';
   $params =array (':usrmail'=>$fmusermail);
   $crownum = DatabaseHandler::Countall($sql,$params);

   switch($crownum)
   {
    case 0:
    print '300';
    break;
    case 1:
    print '301';
    break;
   }