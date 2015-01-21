<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';
    $pagecontrol=fm_freight::SafeInput($_POST['fmloginall']);
    $pusrme=fm_freight::SafeInput($_POST['usrname']);
    $pusrpwd =fm_freight::SafeInput($_POST['usrpwd']);
    $premember=fm_freight::SafeInput($_POST['remember']);
    $ttrqlogid=fm_freight::SafeInput($_POST['qfreighid']);
    $ttrqlog=fm_freight::SafeInput($_POST['qfmttrlogin']);
    $ttrqlogtoquestion=fm_freight::SafeInput($_POST['qid']);
    $mlogin=fm_freight::SafeInput($_POST['mlogin']);
    $olpwd = fm_freight::SafeInput($_POST['uold_passwd']);
    //print $mlogin;
    //Customer change pwd after login
    $cpwdurl=fm_freight::SafeInput($_POST['cpwdurl']);
    $customerid=fm_freight::SafeInput($_POST['customerid']);
	//print $pagecontrol.'/'.$pusrme;
/*Master switch*/switch($pagecontrol)
{
/****************FM user login case***************************************/    
/* Case N1*/  case "all":
    if(isset($pagecontrol) && (!empty($pagecontrol)) && 
    isset($pusrme) && (!empty($pusrme)) && 
    isset($pusrpwd) && (!empty($pusrpwd)))
    {
    $pusrme=fm_freight::SafeInput($_POST['usrname']);
    $pusrpwd =fm_freight::SafeInput($_POST['usrpwd']);
    $premember=fm_freight::SafeInput($_POST['remember']) ;
	$password =fm_freight::Hash($pusrpwd);
    $sql = 'CALL get_cust_logindta(:custusrname,:custusrmail,:custusrpwd)';
    $params =array (':custusrname'=>$pusrme,':custusrmail'=>$pusrme,':custusrpwd'=>$password);
    $crownum = DatabaseHandler::Countall($sql,$params);
	//print $crownum.'/'.$pusrme.'/'.$password;
            /*Inner switch1*/
 switch($crownum)
            {
           /*Inner case n1*/ 
           case 0:
             $password =fm_freight::Hash($pusrpwd);
		 $ttrsql ='CALL get_ttr_logindta(:ttrusrname,:ttrusrmail,:ttrusrpwd)';
        $ttrparams =array (':ttrusrname'=>$pusrme,':ttrusrmail'=>$pusrme,':ttrusrpwd'=>$password);     
        $trownum = DatabaseHandler::Countall($ttrsql,$ttrparams);
                /*outer switch1*/
                switch($trownum)
                {
               /*outer case n1*/
                case 0:
               session_start();
               $_SESSION['loggedin'] =false; 
               //session_regenerate_id (true);
               print 'usrnop';
               break;
               /*outer case n2*/ 
               case 1:
               session_start();
               $_SESSION['loggedin'] = true; 
               //session_regenerate_id (true); //prevent against session fixation attacks.
			   $ttrlogindta = DatabaseHandler::GetRow($ttrsql,$ttrparams);
            
            // this sets variables in the session 
            $_SESSION['fmusermail']= $ttrlogindta['ttremail'];
            $_SESSION['ttremail1']=$ttrlogindta['ttremail2'];
            $_SESSION['ttremail2']=$ttrlogindta['ttremail3'];  
            $_SESSION['fmusername'] = $ttrlogindta['ttr_usrname'];
            $_SESSION['fmuserpwd'] = $ttrlogindta['ttr_pwd'];
            $_SESSION['fmuserid'] = $ttrlogindta['TransporterID'];
            setcookie("tusrid", $_SESSION['fmuserid'], time()+60*60*24*COOKIE_TIME_OUT, "/");
            $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);   
             
             if(isset($premember))
            {
                  setcookie("tusrmail", $_SESSION['fmusermail'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail1", $_SESSION['ttremail1'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail2", $_SESSION['ttremail2'], time()+60*60*24*COOKIE_TIME_OUT, "/");
			      setcookie("tusrname", $_SESSION['fmusername'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("tusrpwd",$_SESSION['fmuserpwd'], time()+60*60*24*COOKIE_TIME_OUT, "/");  
            }           
              print 'ttrok';
               break;
               default :
            session_start();
            $_SESSION['loggedin'] = false; 
            session_regenerate_id (false);
               print "nop";
               break;     
                }//close outer switch1
 
               break;
     /*Inner case n2*/ 
     case 1:
            session_start();
            $_SESSION['loggedin'] = true; 
            //session_regenerate_id (true);
           $password =fm_freight::Hash($pusrpwd);
            $sql = 'CALL get_cust_logindta(:custusrname,:custusrmail,:custusrpwd)';
            $params =array (':custusrname'=>$pusrme,':custusrmail'=>$pusrme,':custusrpwd'=>$password);
            
		   $custlogindta = DatabaseHandler::GetRow($sql,$params);
            // this sets variables in the session 
            $_SESSION['fmusermail']= $custlogindta['SEmail']; 
            $_SESSION['fmusername'] = $custlogindta['SUsername'];
            $_SESSION['fmuserpwd'] = $custlogindta['SPassowrd'];
            $_SESSION['fmuseridsender'] = $custlogindta['SenderID'];
            setcookie("susrid", $_SESSION['fmuseridsender'], time()+60*60*24*COOKIE_TIME_OUT, "/");
            $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);   
             
             if(isset($premember))
            {
                  setcookie("cusrmail", $_SESSION['fmusermail1'], time()+60*60*24*COOKIE_TIME_OUT, "/");
			      setcookie("cusrname", $_SESSION['fmusername'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("cusrpwd",$_SESSION['fmuserpwd'], time()+60*60*24*COOKIE_TIME_OUT, "/");  
            }
              print 'custok';
               break;
               default :
               session_start();
            $_SESSION['loggedin'] = false; 
            session_regenerate_id (false);
               print "nop3";
               break;     
            }//close inner switch1
			
		}//end if
       break; 
       
/****************Password reset case***************************************/        
/* Case N2*/  case "pwd":
$new_pwd =usrlogin::GenPwd();
    $pwd_reset = fm_freight::Hash($new_pwd);

    $sql = 'CALL get_sender_mails(:usrmail)';
    $params =array (':usrmail'=>$pusrme);
    $urownum = DatabaseHandler::Countall($sql,$params);
      /*Inner switch1*/switch($urownum)
            {
            /*Inner case n1*/ case 0:
			$sql = 'CALL get_transpoter_mails(:usrmail)';
			$params =array (':usrmail'=>$pusrme);
			$inurownum = DatabaseHandler::Countall($sql,$params);
			
               /*outer switch1*/switch($inurownum)
                {
               /*outer case n1*/ case 0:
               print 'nottrcust';
               break;
               /*outer case n2*/ case 1:
			   $new_pwd =usrlogin::GenPwd();
            $pwd_reset = fm_freight::Hash($new_pwd);
            $sql = 'CALL up_transporter_pwd(:usrmail,:newpwd)';
            $params =array (':usrmail'=>$pusrme,':newpwd'=>$pwd_reset);
            
            DatabaseHandler::Execute($sql,$params);
            
            $host  = $_SERVER['HTTP_HOST'];
            $host_upper = strtoupper($host);						 
						 
           //send email
       $message = 'Here are your new password details ...
         User Email: '.$pusrme.' 
         Passwd: '.$new_pwd.'

         Thank You

         Administrator
         '.$host_upper.'
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
	   mail($pusrme, "Reset Password", $message,
    "From: \"Member Registration\" <admin@".$host.">\r\n" .
     "X-Mailer: PHP/" . phpversion());
               print 'pwd';
               break;
               default :
               print "nop";
               break;     
                }//close outer switch1
               break;
            /*Inner case n2*/ case 1:
			$new_pwd =usrlogin::GenPwd();
            $pwd_reset = fm_freight::Hash($new_pwd);
            $sql = 'CALL up_sender_pwd(:usrmail,:newpwd)';
            $params =array (':usrmail'=>$pusrme,':newpwd'=>$pwd_reset);
            DatabaseHandler::Execute($sql,$params);
            $host = $_SERVER['HTTP_HOST'];
            $host_upper = strtoupper($host);						 
						 
           //send email
       $message = 'Here are your new password details ...
          User Email: '.$pusrme.' 
         Passwd: '.$new_pwd.'

         Thank You

         Administrator
         '.$host_upper.'
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
	   mail($pusrme, "Reset Password", $message,
    "From: \"Member Registration\" <admin@".$host.">\r\n" .
     "X-Mailer: PHP/" . phpversion());
               print 'pwd';
               break;
               default :
               print "nop";
               break;     
            }//close inner switch1
       break;
/****************Username case***************************************/ 
/* Case N3*/  case "usrnm":
    $sql = 'CALL get_sender_usrnm(:usrmail)';
    $params =array (':usrmail'=>$pusrme);
    $urownum = DatabaseHandler::Countall($sql,$params);
      /*Inner switch1*/switch($urownum)
            {
            /*Inner case n1*/ case 0:
			$tsql = 'CALL get_transpoter_usrnm(:usrmail)';
			$tparams =array (':usrmail'=>$pusrme);
			$rownum = DatabaseHandler::Countall($tsql,$tparams);
               /*outer switch1*/switch($rownum)
                {
               /*outer case n1*/ case 0:
               print 'nottrcust';
               break;
               /*outer case n2*/ case 1:
            $inurownum = DatabaseHandler::GetRow($tsql,$tparams);
            $host = $_SERVER['HTTP_HOST'];
            $host_upper = strtoupper($host);						 			 
           //send email
           $message = 'Here are your Username...
          User Email: '.$pusrme.' 
           Username: '.$inurownum['ttr_usrname'].'

         Thank You

         Administrator
         '.$host_upper.'
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****';
          
	   mail($pusrme, "Freightmeta Username set", $message,
    "From: \"Member Registration\" <admin@".$host.">\r\n" .
     "X-Mailer: PHP/" . phpversion());
               print 'usrnm';
               break;
               default :
               print "nop";
               break;     
                }//close inner switch1
               break;
            /*Inner case n2*/ case 1:
			$srow = DatabaseHandler::GetRow($sql,$params);
			$host = $_SERVER['HTTP_HOST'];
            $host_upper = strtoupper($host);						 			 
           //send email
           $message = 'Here are your Username...
          User Email: '.$pusrme.' 
           Username: '.$srow['SUsername'].'

         Thank You

         Administrator
         '.$host_upper.'
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****';
          
	   mail($pusrme, "Freightmeta Username set", $message,
    "From: \"Member Registration\" <admin@".$host.">\r\n" .
     "X-Mailer: PHP/" . phpversion());
               print 'usrnm';
               break;
               default :
               print "nop";
               break;     
            }//close inner switch1;
       break;
/****************fquestion case***************************************/
/* Case N5*/  case "":
      /*Inner switch1*/switch('?')
            {
               /*Inner case n1*/ case "":
               //print "";
               break;
               /*Inner case n2*/ case "":
               //print "";
               break;
               default :
               //print "nop";
               break;     
            }//close inner switch1
       break;
/****************Ttr account activation case***************************************/
/* Case N6*/  case "":
      /*Inner switch1*/switch('?')
            {
               /*Inner case n1*/ case "":
               //print "";
               break;
               /*Inner case n2*/ case "":
              // print "";
               break;
               default :
               //print "nop";
               break;     
            }//close inner switch1
       break;
/****************if not any case***************************************/  
       default :
       //print "";
       break;
          
}//close master1 switch

/********************Ttr quote switch***************************/
 switch($ttrqlog)
 {
   /****************ttr case***************************************/
/* Case N4*/  case "ttrlgtq":
    $password =fm_freight::Hash($pusrpwd);
  $ttrsql ='CALL get_ttr_logindta(:ttrusrname,:ttrusrmail,:ttrusrpwd)';
  $ttrparams =array (':ttrusrname'=>$pusrme,':ttrusrmail'=>$pusrme,':ttrusrpwd'=>$password);     
  $trownum = DatabaseHandler::Countall($ttrsql,$ttrparams);
      /*Inner switch1*/switch($trownum)
            {
               /*Inner case n1*/ case 0:
               print "ttrid0";
               break;
               /*Inner case n2*/ case 1:
                 session_start();
            $_SESSION['loggedin'] = true; 
            session_regenerate_id (true);
               $ttrlogindta = DatabaseHandler::GetRow($ttrsql,$ttrparams);
            // this sets variables in the session 
            $_SESSION['fmusermail']= $ttrlogindta['ttremail'];
            $_SESSION['ttremail1']=$ttrlogindta['ttremail2'];
            $_SESSION['ttremail2']=$ttrlogindta['ttremail3'];  
            $_SESSION['fmusername'] = $ttrlogindta['ttr_usrname'];
            $_SESSION['fmuserpwd'] = $ttrlogindta['ttr_pwd'];
            $_SESSION['fmuserid'] = $ttrlogindta['TransporterID'];
            $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);   
             
             if(isset($premember))
            {     setcookie("tusrid", $_SESSION['fmuserid'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail", $_SESSION['fmusermail'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail1", $_SESSION['ttremail1'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail2", $_SESSION['ttremail2'], time()+60*60*24*COOKIE_TIME_OUT, "/");
			      setcookie("tusrname", $_SESSION['fmusername'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("tusrpwd",$_SESSION['fmuserpwd'], time()+60*60*24*COOKIE_TIME_OUT, "/");  
            }
               //$_SESSION['loggedin'] = true;
              // print $_SESSION['fmusername'];
              print $ttrlogindta['TransporterID'];
               break;
               default :
               print "nop";
               break;     
           }//close inner switch1
           ///print "Ok";
       break; 
 /****************if not any case***************************************/  
       default :
       //print "";
       break;
     
 }//close master switch 2
 

/********************Ttr quote switch***************************/
 switch($ttrqlogtoquestion)
 {
   /****************ttr case***************************************/
/* Case N4*/  case "qttrtf":


  $password =fm_freight::Hash($pusrpwd);
  $sql ='CALL get_ttr_logindta(:ttrusrname,:ttrusrmail,:ttrusrpwd)';
  $params =array (':ttrusrname'=>$pusrme,':ttrusrmail'=>$pusrme,':ttrusrpwd'=>$password);     
  $trownum = DatabaseHandler::Countall($sql,$params);
  //print $ttrqlogtoquestion.'//'.$trownum.'//'.$pusrme.'//'.$pusrpwd;
     switch($trownum)
            {
                case 0:
               print "ttrid0";
               break;
                case 1:
                 session_start();
            $_SESSION['loggedin'] = true; 
            session_regenerate_id (true);
               $ttrlogindta = DatabaseHandler::GetRow($sql,$params);
            // this sets variables in the session 
            $_SESSION['fmusermail']= $ttrlogindta['ttremail'];
            $_SESSION['ttremail1']=$ttrlogindta['ttremail2'];
            $_SESSION['ttremail2']=$ttrlogindta['ttremail3'];  
            $_SESSION['fmusername'] = $ttrlogindta['ttr_usrname'];
            $_SESSION['fmuserpwd'] = $ttrlogindta['ttr_pwd'];
            $_SESSION['fmuserid'] = $ttrlogindta['TransporterID'];
            

             
            $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);   
             
             if(isset($premember))
            {     setcookie("tusrid", $_SESSION['fmuserid'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail", $_SESSION['fmusermail'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail1", $_SESSION['ttremail1'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                  setcookie("tusrmail2", $_SESSION['ttremail2'], time()+60*60*24*COOKIE_TIME_OUT, "/");
			      setcookie("tusrname", $_SESSION['fmusername'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("tusrpwd",$_SESSION['fmuserpwd'], time()+60*60*24*COOKIE_TIME_OUT, "/");  
            }
              
              print 'Q'.$ttrlogindta['TransporterID'];
               break;
               default :
               print "nop";
               break;     
           }//close inner switch1
           
       break; 
 /****************if not any case***************************************/  
       default :
       //print "";
       break;
     
 }//close master switch 3
 
 
 switch($mlogin)
 {
   /****************cust case***************************************/
/* Case N4*/  case "addf":
  	$password =fm_freight::Hash($pusrpwd);
    $sql = 'CALL get_cust_logindta(:custusrname,:custusrmail,:custusrpwd)';
    $params =array (':custusrname'=>$pusrme,':custusrmail'=>$pusrme,':custusrpwd'=>$password);
    $crownum = DatabaseHandler::Countall($sql,$params);
      /*Inner switch1*/switch($crownum)
            {
               /*Inner case n1*/ case 0:
               print "nomember";
               break;
               /*Inner case n2*/ case 1:
               session_start();
            $_SESSION['loggedin'] = true; 
            session_regenerate_id (true);
		   $custlogindta = DatabaseHandler::GetRow($sql,$params);
            // this sets variables in the session 
            $_SESSION['fmusermail']= $custlogindta['SEmail']; 
            $_SESSION['fmusername'] = $custlogindta['SUsername'];
            $_SESSION['fmuserpwd'] = $custlogindta[' SPassowrd'];
            $_SESSION['fmuseridsender'] = $custlogindta['SenderID'];
            setcookie("susrid", $_SESSION['fmuseridsender'], time()+60*60*24*COOKIE_TIME_OUT, "/");
            $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);   
             
             if(isset($premember))
            {
                  setcookie("cusrmail", $_SESSION['fmusermail'], time()+60*60*24*COOKIE_TIME_OUT, "/");
			      setcookie("cusrname", $_SESSION['fmusername'], time()+60*60*24*COOKIE_TIME_OUT, "/");
				  setcookie("cusrpwd",$_SESSION['fmuserpwd'], time()+60*60*24*COOKIE_TIME_OUT, "/");
                 setcookie("susrid", $_SESSION['fmuseridsender'], time()+60*60*24*COOKIE_TIME_OUT, "/");  
            }
              print 'custok';
               break;     
           }//close inner switch1
           ///print "Ok";
       break; 
 /****************if not any case***************************************/  
       default :
       //print "";
       break;
     
 }//close master switch 4
 
 switch($cpwdurl)
 {
   /****************cust case***************************************/
/* Case N1*/  case "cpwd":
  	$password =fm_freight::Hash($pusrpwd);
    $sql = 'CALL _UPDATESENDERPWDBYPWD(:custid,:password)';
    $params =array (':custid'=>$customerid,':password'=>$password);
    DatabaseHandler::Execute($sql,$params);
    print 'pwdsetted';
    break;
    case 'tpwd':
    
    $hasholdpwd =fm_freight::Hash($olpwd);
    $hashnewpwd =fm_freight::Hash($pusrpwd);
    $sql = 'CALL __TTR_PWD_UPDATE(:toldpwd,:tnewpwd,:tid)';
    $params =array (':toldpwd'=>$hasholdpwd,':tnewpwd'=>$hashnewpwd,':tid'=>$customerid);
    DatabaseHandler::Execute($sql,$params);
    print 'tpwdsetted';
    break;
     
 }//close master switch 5


?>