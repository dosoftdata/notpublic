
<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';

   $fmusername=fm_freight::SafeInput($_POST['username']);
   $sql = 'CALL fm_username_check(:usrname)';
   $params =array (':usrname'=>$fmusername);
   $crownum = DatabaseHandler::Countall($sql,$params);

   switch($crownum)
   {
    case 0:
    print '200';
    break;
    case 1:
    print '201';
    break;
   }