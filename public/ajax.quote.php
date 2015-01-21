<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';

    $amoutq=fm_freight::SafeInput($_POST['amount']);
    $memberidq=fm_freight::SafeInput($_POST['memberid']);
    $freightidq =fm_freight::SafeInput($_POST['freightid']);
    $quote_added_date=fm_freight::SafeInput($_POST['qdatetime']);
    
    $currency=fm_freight::SafeInput($_POST['qcurrency']);
    $pickupdate=fm_freight::SafeInput($_POST['freightpickdatetime']);
    $expirydatetime=fm_freight::SafeInput($_POST['qexpirydatetime']);
    $qnote=fm_freight::SafeInput($_POST['qnotif']);
    $qstatus=1;
    
   $sql = 'CALL quotefreight_controle(:ttrid,:fid)';
   $params =array (':ttrid'=>$memberidq,':fid'=>$freightidq);
   $crownum = DatabaseHandler::Countall($sql,$params);

   switch($crownum)
   {
    case 0:
      $execsql = 'SELECT addquote(
                             :tofid,
                             :fromttrid,
                             :todatetime,
                             :qexpirydatetime,
                             :pickupdate,
                             :qnotif,
                             :qamout,
                             :qcurrency,
                             :qstatus
                             )';
    $execparams = array(
                    ':tofid'=>$freightidq,
                    ':fromttrid'=>$memberidq,
                    ':todatetime'=>$quote_added_date,
                    ':qexpirydatetime'=>$expirydatetime,
                    ':pickupdate'=>$pickupdate,
                    ':qnotif'=>$qnote,
                    ':qamout'=>$amoutq,
                    ':qcurrency'=>$currency,
                    ':qstatus'=>$qstatus
                    );
      //error_reporting(1);              
    $exec=DatabaseHandler::Execute($execsql,$execparams);
    print 'ok';
    break;
    case 1:
    print 'nop';
    break;
    default:
    exit(1);
    
   }//end switch
   
	
 ?> 



