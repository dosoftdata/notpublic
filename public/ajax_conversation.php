<?php

/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__file__)) . '/config/classes.inc';
$task = fm_freight::SafeInput($_GET['dotask']);
switch ($task)
 {
    case 'question':
        $memberidq = fm_freight::SafeInput($_GET['memberid']);
        $freightidq = fm_freight::SafeInput($_GET['freightid']);
        $sql = 'CALL questionfreight_controle(:ttrid,:fid)';
        $params = array(':ttrid' => $memberidq, ':fid' => $freightidq);
        $crownum = DatabaseHandler::Countall($sql, $params);

        switch ($crownum)
        {
            case 0:
                $question = fm_freight::SafeInput($_GET['question']);
                $memberidq = fm_freight::SafeInput($_GET['memberid']);
                $freightidq = fm_freight::SafeInput($_GET['freightid']);
                $cmemberidq = fm_freight::SafeInput($_GET['cmemberid']);
                $tmemberidq = fm_freight::SafeInput($_GET['tmemberid']);
                $quote_added_date = fm_freight::SafeInput($_GET['qdatetime']);
                $_sqlvar = 'CALL questionfreight(:quest,:fromttrid,:tofid,:todate)';
                $_params = array(
                    ':quest' => $question,
                    ':fromttrid' => $memberidq,
                    ':tofid' => $freightidq,
                    ':todate' => $quote_added_date);
                DatabaseHandler::Execute($_sqlvar, $_params);
                print 200;
                break;
            case 1:
                print 201;
                break;
            default:
                print 199;
                break;

        } //end switch
        break;
    case 'canswers':
        $taskid = fm_freight::SafeInput($_GET['dotaskid']);

        $question = fm_freight::SafeInput($_GET['answer']);
        $memberid = fm_freight::SafeInput($_GET['memberid']);
        $freightid = fm_freight::SafeInput($_GET['freightid']);
        $datetime = fm_freight::SafeInput($_GET['qdatetime']);

        $sql = 'CALL GET_TRANSPORTERID_FROM_QUESTION(:askid)';
        $params = array(':askid' => $taskid);
        $back = DatabaseHandler::GetRow($sql, $params);
        $memberid2 = $back['FROMTTID'];
        //print $tmemberidq;
        /*
        IN `inanswer` longtext, 
        IN `inttrid` INT, 
        IN `infid`  INT, 
        IN `incid`  INT, 
        IN `inquestionid`  INT,  
        IN `intdateadded` DATETIME   
        */
        // IN `inanswer` longtext,  IN `inttrid` INT, IN `infid`  INT,
        ///IN `incid`  INT, IN `inquestionid`  INT,  IN `intdateadded` DATETIME
        $sqlvar = 'CALL questionfreight_answer(
        :quest,:fromttrid,:tofid,:fromcid,:questid,:todate)';
        $paramsvar = array(
            ':quest' => $question,
            ':fromttrid' => $memberid2,
            ':tofid' => $freightid,
            ':fromcid' => $memberid,
            ':questid' => $taskid,
            ':todate' => $datetime);
            
        $comsql = 'CALL Questionfreight_answer_controle(:fid)';
        $comparams = array(':fid' => $freightid);
        $count = DatabaseHandler::GetRow($comsql, $comparams);
        $contromm = $count['scid'];
         if( $contromm ==$memberid ){
           DatabaseHandler::Execute($sqlvar,$paramsvar);
          
          print 'Answer given!'; 
         }
         else{
            
            print 'Please, you are not allowed to answer!';
         }
        
        
        break;

  }
