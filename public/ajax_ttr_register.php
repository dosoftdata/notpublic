<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
$user_ip = $_SERVER['REMOTE_ADDR'];
// Automatically collects the hostname or domain  like example.com)

$ttask = fm_freight::SafeInput($_POST['t_tast']);

//print $ttask;
switch ($ttask)
{
    case 'fregister':
        $ttrusrmail = fm_freight::SafeInput($_POST['t_usrmail']);
        $ttrusrnm = fm_freight::SafeInput($_POST['t_usrnm']);
        $sql = 'CALL MATCH_DUPLICATE_EMAIL(:mail,:uname)';
        $params = array(':mail' => $ttrusrmail, ':uname' => $ttrusrnm);
        // Execute the query and return the results
        $result = DatabaseHandler::Countall($sql, $params);

        switch ($result)
        {
            case 1:
                print 199;
                break;
            case 0:
                $host = $_SERVER['HTTP_HOST'];
                $host_upper = strtoupper($host);
                $path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

                //Get transporter login dta

                ////Get transporter company dtas
                $ttrcompanyname = fm_freight::SafeInput($_POST['t_tcompanyname']);
                $ttrvatnum = fm_freight::SafeInput($_POST['t_vatnum']);
                $ttrcvatnum = fm_freight::SafeInput($_POST['t_cvatnum']);
                $ttrcompanyID = fm_freight::SafeInput($_POST['t_tcompanyID']);
                $ttrabn = fm_freight::SafeInput($_POST['t_adn']);
                $ttrgst = fm_freight::SafeInput($_POST['t_gst']);
                $hours = fm_freight::SafeInput($_POST['t_hours']);

                $ttrcompanylocations = fm_freight::SafeInput($_POST['t_companylocation']);
                $ttrcountry = fm_freight::SafeInput($_POST['t_tcountry']);
                $ttrprovince = fm_freight::SafeInput($_POST['t_tprovince']);
                $ttregion = fm_freight::SafeInput($_POST['t_tregion']);
                $ttrcity = fm_freight::SafeInput($_POST['t_tcity']);
                $ttrpostcode = fm_freight::SafeInput($_POST['t_tpostcode']);
                $ttraddressline1 = fm_freight::SafeInput($_POST['t_taddressline1']);
                $ttraddressline2 = fm_freight::SafeInput($_POST['t_taddressline2']);
                $ttraddressref = fm_freight::SafeInput($_POST['t_taddressref']);

                //Get Transporter contact dta
                $ttrtansphone = fm_freight::SafeInput($_POST['t_transphone']);
                $ttrconfigfname = fm_freight::SafeInput($_POST['t_configfname']);
                $ttrcontactilname = fm_freight::SafeInput($_POST['t_contactilname']);

                //Transporter supported freight category
                $ttrpackagedchk = fm_freight::SafeInput($_POST['t_packagedchk']);
                $ttrbuildingchk = fm_freight::SafeInput($_POST['t_buildingchk']);
                $ttrvehicleschk = fm_freight::SafeInput($_POST['t_vehicleschk']);
                $ttrlivestockchk = fm_freight::SafeInput($_POST['t_livestockchk']);
                $ttrmotorcycleschk = fm_freight::SafeInput($_POST['t_motorcycleschk']);
                $ttrpetschk = fm_freight::SafeInput($_POST['t_petschk']);
                $ttrboatchk = fm_freight::SafeInput($_POST['t_boatchk']);
                $ttrfoodchk = fm_freight::SafeInput($_POST['t_foodchk']);
                $ttrheavychk = fm_freight::SafeInput($_POST['t_heavychk']);
                $ttrspecialcarechk = fm_freight::SafeInput($_POST['t_specialcarechk']);
                $ttrofficeremovalschk = fm_freight::SafeInput($_POST['t_officeremovalschk']);
                $ttrhaygrain = fm_freight::SafeInput($_POST['t_haygrain']);
                $ttrcontainerchk = fm_freight::SafeInput($_POST['t_containerchk']);
                $ttrhouseholdchk = fm_freight::SafeInput($_POST['t_householdchk']);
                $ttrminingchk = fm_freight::SafeInput($_POST['t_miningchk']);
                $ttrorseschk = fm_freight::SafeInput($_POST['t_horseschk']);
                $ttrbulkfreightchk = fm_freight::SafeInput($_POST['t_bulkfreightchk']);
                $ttrparcelschk = fm_freight::SafeInput($_POST['t_parcelschk']);
                //Get transporter Operation Area
                $ttrnationalarea = fm_freight::SafeInput($_POST['t_nationalarea']);
                $ttrinternationalarea = fm_freight::SafeInput($_POST['t_internationalarea']);
                //Get transporter means
                $ttrmaritimemeans = fm_freight::SafeInput($_POST['t_maritimemeans']);
                $ttrbyairplane = fm_freight::SafeInput($_POST['t_byairplane']);
                $ttrbyroute = fm_freight::SafeInput($_POST['t_byroute']);

                // stores sha1 of password
                // stores sha1 of password
                $ttrusrpwd = fm_freight::Hash(fm_freight::SafeInput($_POST['t_usrpwd']));
                $ttrusrnm = fm_freight::SafeInput($_POST['t_usrnm']);
                $ttrusrmail = fm_freight::SafeInput($_POST['t_usrmail']);
                $ttrusrmailn = fm_freight::SafeInput($_POST['t_usrmail1']);
                $ttrusrmailm = fm_freight::SafeInput($_POST['t_usrmail2']);
                $ttrusrpwd2 = fm_freight::SafeInput($_POST['t_usrpwd2']);
                $ttrsession = SESSIONID;
                //Transporter terms
                $ttrtransterms = fm_freight::SafeInput($_POST['t_transterms']);
                $identifier = '';
                $i = 0;
                while ($i < 7)
                {
                    $identifier .= rand(0, 9);
                    $i++;
                }
                //Transporter validation engine
                $ttrvalidatestatus = "off";
                $ttrvalidcode = substr(uniqid(rand(1000, 9999), 1), 23);
                $ttrclientcode = 'CL00' . substr(uniqid(rand(1000, 9999), 1), 13);
                $ttrnotcode = 'T00 ' . (int)$identifier;
                ;
                //get_ttr_duplicatechk
                $ttrabn = fm_freight::SafeInput($_POST['t_adn']);
                $ttrgst = fm_freight::SafeInput($_POST['t_gst']);

                $ttr_insert_sql = 'CALL get_ttr_register(
            :tcompanylocations, 
            :ttcountry, 
            :ttprovince, 
            :ttregion, 
            :ttcity, 
            :ttpostcode,
            :ttaddressline1, 
            :ttaddressline2,
            :ttaddressref,
            :tusrnm,
            :tusrpwd,
            :tusrmail,
            :tusrmailn, 
            :tusrmailm,
            :ttcompanyname, 
            :tvatnum, 
            :tcvatnum,
            :tadn,
            :tgst, 
            :ttcompanyID,
            :ttransphone,
            :tconfigfname, 
            :tcontactilname,
            :ttransterms,
            :ttrvalidatestatus,
            :ttrvalidcode,
            :clientcode,
            :ttrnotcode,
            :tpackagedchk,
            :tbuildingchk, 
            :tvehicleschk, 
            :tlivestockchk,
            :tmotorcycleschk,
            :tpetschk,
            :tboatchk,
            :tfoodchk,
            :theavychk,
            :tspecialcarechk,
            :tofficeremovalschk,
            :thaygrain,
            :tcontainerchk,
            :thouseholdchk,
            :tminingchk,
            :thorseschk,
            :tbulkfreightchk,
            :tparcelschk,
            :tnationalarea,
            :tinternationalarea,
            :tmaritimemeans,
            :tbyairplane,
            :tbyroute,
            :tsession,
            :tdateadded   
             )';


                $ttr_insert_params = array(
                    ':tcompanylocations' => $ttrcompanylocations,
                    ':ttcountry' => $ttrcountry,
                    ':ttprovince' => $ttrprovince,
                    ':ttregion' => $ttregion,
                    ':ttcity' => $ttrcity,
                    ':ttpostcode' => $ttrpostcode,
                    ':ttaddressline1' => $ttraddressline1,
                    ':ttaddressline2' => $ttraddressline2,
                    ':ttaddressref' => $ttraddressref,
                    ':tusrnm' => $ttrusrnm,
                    ':tusrpwd' => $ttrusrpwd,
                    ':tusrmail' => $ttrusrmail,
                    ':tusrmailn' => $ttrusrmailn,
                    ':tusrmailm' => $ttrusrmailm,
                    ':ttcompanyname' => $ttrcompanyname,
                    ':tvatnum' => $ttrvatnum,
                    ':tcvatnum' => $ttrcvatnum,
                    ':tadn' => $ttrabn,
                    ':tgst' => $ttrgst,
                    ':ttcompanyID' => $ttrcompanyID,
                    ':ttransphone' => $ttrtansphone,
                    ':tconfigfname' => $ttrconfigfname,
                    ':tcontactilname' => $ttrcontactilname,
                    ':ttransterms' => $ttrtransterms,
                    ':ttrvalidatestatus' => $ttrvalidatestatus,
                    ':ttrvalidcode' => $ttrvalidcode,
                    ':clientcode' => $ttrclientcode,
                    ':ttrnotcode' => $ttrnotcode,
                    ':tpackagedchk' => $ttrpackagedchk,
                    ':tbuildingchk' => $ttrbuildingchk,
                    ':tvehicleschk' => $ttrvehicleschk,
                    ':tlivestockchk' => $ttrlivestockchk,
                    ':tmotorcycleschk' => $ttrmotorcycleschk,
                    ':tpetschk' => $ttrpetschk,
                    ':tboatchk' => $ttrboatchk,
                    ':tfoodchk' => $ttrfoodchk,
                    ':theavychk' => $ttrheavychk,
                    ':tspecialcarechk' => $ttrspecialcarechk,
                    ':tofficeremovalschk' => $ttrofficeremovalschk,
                    ':thaygrain' => $ttrhaygrain,
                    ':tcontainerchk' => $ttrcontainerchk,
                    ':thouseholdchk' => $ttrhouseholdchk,
                    ':tminingchk' => $ttrminingchk,
                    ':thorseschk' => $thorseschk,
                    ':tbulkfreightchk' => $ttrbulkfreightchk,
                    ':tparcelschk' => $ttrparcelschk,
                    ':tnationalarea' => $ttrnationalarea,
                    ':tinternationalarea' => $ttrinternationalarea,
                    ':tmaritimemeans' => $ttrmaritimemeans,
                    ':tbyairplane' => $ttrbyairplane,
                    ':tbyroute' => $ttrbyroute,
                    ':tsession' => $ttrsession,
                    ':tdateadded' => date('Y-m-d') . ' ' . $hours);

                $ttr_dta_insert = DatabaseHandler::Execute($ttr_insert_sql, $ttr_insert_params);

                $ttrsql = 'CALL get_ttr_logindta(:ttrusrname,:ttrusrmail,:ttrusrpwd)';
                $ttrparams = array(
                    ':ttrusrname' => $ttrusrnm,
                    ':ttrusrmail' => $ttrusrmail,
                    ':ttrusrpwd' => $ttrusrpwd);
                $trownum = DatabaseHandler::Countall($ttrsql, $ttrparams);
                /*Inner switch1*/
                switch ($trownum)
                {
                        /*Inner case n1*/
                    case 0:
                        //print "ttrid0";
                        break;
                        /*Inner case n2*/
                    case 1:
                        session_start();
                        $_SESSION['loggedin'] = true;
                        //session_regenerate_id (true);
                        $ttrlogindta = DatabaseHandler::GetRow($ttrsql, $ttrparams);
                        // this sets variables in the session
                        $_SESSION['fmusermail'] = $ttrlogindta['ttremail'];
                        $_SESSION['ttremail1'] = $ttrlogindta['ttremail2'];
                        $_SESSION['ttremail2'] = $ttrlogindta['ttremail3'];
                        $_SESSION['fmusername'] = $ttrlogindta['ttr_usrname'];
                        $_SESSION['fmuserpwd'] = $ttrlogindta['ttr_pwd'];
                        $_SESSION['fmuserid'] = $ttrlogindta['TransporterID'];
                        $_SESSION['HTTP_USER_AGENT'] = sha1($_SERVER['HTTP_USER_AGENT']);
                        setcookie("tusrid", $_SESSION['fmuserid'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");
                        setcookie("tusrmail", $_SESSION['fmusermail'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");
                        setcookie("tusrmail1", $_SESSION['ttremail1'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");
                        setcookie("tusrmail2", $_SESSION['ttremail2'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");
                        setcookie("tusrname", $_SESSION['fmusername'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");
                        setcookie("tusrpwd", $_SESSION['fmuserpwd'], time() + 60 * 60 * 24 *
                            COOKIE_TIME_OUT, "/");


                        // print 'Q'.$ttrlogindta['TransporterID'];
                        break;
                    default:
                        //print "nop";
                        break;
                } //close inner switch1

                $pdf_html_content = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>' . SITE_NAME . ' | Register ref:' . $ttrnotcode . '/' . date('m-Y') .
                    '</title>
  <style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
 </head>
 <body>
 <table cellspacing="0" style="width: 100%; text-align: center; font-size: 12pt">
        <tr>
            <td style="width: 1%;">
            </td>
            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="images/bg/freightmeta2.jpg" alt="Logo"><br>
                MEMBER SERVICE
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Transporter name :</td>
            <td style="width:36%">' . $ttrconfigfnam . '&nbsp;' . $ttrcontactilname .
                    '</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Company name :</td>
            <td style="width:36%">' . $ttrcompanyname . '</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Adresse :</td>
            <td style="width:36%">
                  ' . $ttraddressline1 . '<br>
                   ' . $ttrcountry . '/' . $ttrprovince . ' <br>
                ' . $ttrpostcode . ',' . $ttrcity . '<br>
            </td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Email :</td>
            <td style="width:36%">' . $ttrusrmail . '</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Phone :</td>
            <td style="width:36%">' . $ttrtansphone . '</td>
        </tr>
    </table>
 <br>
    <br>
    <br>
    <i>
        <b><u>Object </u>: &laquo; Register comfirmation &raquo;</b><br>
         client  no:' . $ttrclientcode . '<br>
        Reference code :' . $ttrnotcode . '<br>
    </i>
    <br>
    <br>
    Dear  transporter,<br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:100%; padding:10px">
            
     <p>I hereby certify that the above statements are true and correct to the best of my knowledge. I
understand that a false statement may disqualify me as a user of the freightmeta.com database
and may cause the termination of my account.</p>

<p>I hereby state and confirm that I am the owner / the representative of the company with the trade
name..............................................................that has been registered to the chamber of.
commerce of ............................................................. 
(country and city) with registration number ..............................and
 tax (VAT) number ...........................................................
</p>

<p>
The headquarters of the company are located in .............................................(full address),
our telephone numbers are.......................................................................
and our e-mail is ...........................................................................<br />
I also state that my authorization to represent and to bind the above mentioned company expires
at...............................................................................................
</p>       
                   
            </td>
        </tr>
    </table>
    <br>
    <table cellspacing="0" style="width: 40%; position: relative; margin-left: 1px;  text-align: left; font-size: 20pt">
                    <tr >
                    <td style="width: 20%;"></td>
                     <td style="width: 50%;">Signature</td> 
                    </tr>
                </table>
                <table cellspacing="0" style="width: 40%;position: relative; margin-left: 1px;  text-align: left;font-weight: lighter; font-size: 12pt; left: 40%; top: -37px;">
                    <tr>
                    <td style="width: 10%;">
                        </td>
                     <td style="width:90%;">
                        Freightmeta<span style="color: grey;">.com</span>
                        </td> 
                    </tr>
                    <tr>
                    <td style="width: 10%;">
                        </td>
                        <td style="width: 90%;">
                        Transporter register team
                        </td>
                    </tr>
                    <tr>
                    <td style="width: 10%;">
                        </td>
                        <td style="width: 90%;">
                        London,UK
                        </td> 
                    </tr>
                </table>

</body></html>';

                $ttr_sms_body = ' Dear transporter, please open the......';

                try {
                    $html2pdf = new HTML2PDF('P', 'A4', 'en');
                    $html2pdf->writeHTML($pdf_html_content);
                    ///$html2pdf->Output();
                    $html2pdf->Output('ttr_pdf/' . $ttrnotcode . '' . '.pdf', 'F');
                    $content_PDF = $html2pdf->Output('', true);
                    $mail = new PJmail();
                    $mail->setAllFrom(ADMIN_EMAIL, "Register confirmation");
                    $mail->addrecipient($ttrusrmail);
                    $mail->addsubject("TRANSPORTER REGISTER CONFIRMATION");
                    $mail->text = $ttr_sms_body;
                    $mail->addbinattachement($ttrnotcode . '' . '.pdf', $content_PDF);
                    $mail->sendmail();
                   // echo $ttrusrmail;
                }
                catch (HTML2PDF_exception $e) {
                    echo $e;
                    exit;
                }

                $pdf_html_content= ob_get_clean();
                print 200;
                break;
        } //end

        break;

    case 'accountupdate':
        $ttaskid = fm_freight::SafeInput($_POST['t_tastid']);
        //login data
        $ttrusrnm = fm_freight::SafeInput($_POST['t_usrnm']);
        $ttrusrmail = fm_freight::SafeInput($_POST['t_usrmail']);
        $ttrusrmailn = fm_freight::SafeInput($_POST['t_usrmail1']);
        $ttrusrmailm = fm_freight::SafeInput($_POST['t_usrmail2']);
        //Get Transporter contact dta
        $ttrtansphone = fm_freight::SafeInput($_POST['t_transphone']);
        $ttrconfigfname = fm_freight::SafeInput($_POST['t_configfname']);
        $ttrcontactilname = fm_freight::SafeInput($_POST['t_contactilname']);

        ////Get transporter company dtas
        $ttrcompanyname = fm_freight::SafeInput($_POST['t_tcompanyname']);
        $ttrvatnum = fm_freight::SafeInput($_POST['t_vatnum']);
        $ttrcvatnum = fm_freight::SafeInput($_POST['t_cvatnum']);
        $ttrcompanyID = fm_freight::SafeInput($_POST['t_tcompanyID']);
        $ttrabn = fm_freight::SafeInput($_POST['t_adn']);
        $ttrgst = fm_freight::SafeInput($_POST['t_gst']);
        $hours = fm_freight::SafeInput($_POST['t_hours']);

        //ttr location
        $ttrcompanylocations = fm_freight::SafeInput($_POST['t_companylocation']);
        $ttrcountry = fm_freight::SafeInput($_POST['t_tcountry']);
        $ttrprovince = fm_freight::SafeInput($_POST['t_tprovince']);
        $ttregion = fm_freight::SafeInput($_POST['t_tregion']);
        $ttrcity = fm_freight::SafeInput($_POST['t_tcity']);
        $ttrpostcode = fm_freight::SafeInput($_POST['t_tpostcode']);
        $ttraddressline1 = fm_freight::SafeInput($_POST['t_taddressline1']);
        $ttraddressline2 = fm_freight::SafeInput($_POST['t_taddressline2']);
        $ttraddressref = fm_freight::SafeInput($_POST['t_taddressref']);


        //Transporter supported freight category
        $ttrpackagedchk = fm_freight::SafeInput($_POST['t_packagedchk']);
        $ttrbuildingchk = fm_freight::SafeInput($_POST['t_buildingchk']);
        $ttrvehicleschk = fm_freight::SafeInput($_POST['t_vehicleschk']);
        $ttrlivestockchk = fm_freight::SafeInput($_POST['t_livestockchk']);
        $ttrmotorcycleschk = fm_freight::SafeInput($_POST['t_motorcycleschk']);
        $ttrpetschk = fm_freight::SafeInput($_POST['t_petschk']);
        $ttrboatchk = fm_freight::SafeInput($_POST['t_boatchk']);
        $ttrfoodchk = fm_freight::SafeInput($_POST['t_foodchk']);
        $ttrheavychk = fm_freight::SafeInput($_POST['t_heavychk']);
        $ttrspecialcarechk = fm_freight::SafeInput($_POST['t_specialcarechk']);
        $ttrofficeremovalschk = fm_freight::SafeInput($_POST['t_officeremovalschk']);
        $ttrhaygrain = fm_freight::SafeInput($_POST['t_haygrain']);
        $ttrcontainerchk = fm_freight::SafeInput($_POST['t_containerchk']);
        $ttrhouseholdchk = fm_freight::SafeInput($_POST['t_householdchk']);
        $ttrminingchk = fm_freight::SafeInput($_POST['t_miningchk']);
        $ttrorseschk = fm_freight::SafeInput($_POST['t_horseschk']);
        $ttrbulkfreightchk = fm_freight::SafeInput($_POST['t_bulkfreightchk']);
        $ttrparcelschk = fm_freight::SafeInput($_POST['t_parcelschk']);
        //Get transporter Operation Area
        $ttrnationalarea = fm_freight::SafeInput($_POST['t_nationalarea']);
        $ttrinternationalarea = fm_freight::SafeInput($_POST['t_internationalarea']);
        //Get transporter means
        $ttrmaritimemeans = fm_freight::SafeInput($_POST['t_maritimemeans']);
        $ttrbyairplane = fm_freight::SafeInput($_POST['t_byairplane']);
        $ttrbyroute = fm_freight::SafeInput($_POST['t_byroute']);
        
        $ttr_update_sql = 'CALL __TTR_ACCOUNT_UPDATE(
            :tcompanylocations, 
            :ttcountry, 
			:taskid,
            :ttprovince, 
            :ttregion, 
            :ttcity, 
            :ttpostcode,
            :ttaddressline1, 
            :ttaddressline2,
            :ttaddressref,
            :tusrnm,
            :tusrmail,
			:tusrmailn, 
            :tusrmailm,
            :ttcompanyname, 
            :tvatnum, 
            :tcvatnum,
            :tadn,
            :tgst, 
            :ttcompanyID,
            :ttransphone,
            :tconfigfname, 
            :tcontactilname,
            :tpackagedchk,
            :tbuildingchk, 
            :tvehicleschk, 
            :tlivestockchk,
            :tmotorcycleschk,
            :tpetschk,
            :tboatchk,
            :tfoodchk,
            :theavychk,
            :tspecialcarechk,
            :tofficeremovalschk,
            :thaygrain,
            :tcontainerchk,
            :thouseholdchk,
            :tminingchk,
            :thorseschk,
            :tbulkfreightchk,
            :tparcelschk,
            :tnationalarea,
            :tinternationalarea,
            :tmaritimemeans,
            :tbyairplane,
            :tbyroute   
             )';


                $ttr_update_params = array(
                    ':tcompanylocations' => $ttrcompanylocations,
                    ':ttcountry' => $ttrcountry,
					':taskid' => $ttaskid,
                    ':ttprovince' => $ttrprovince,
                    ':ttregion' => $ttregion,
                    ':ttcity' => $ttrcity,
                    ':ttpostcode' => $ttrpostcode,
                    ':ttaddressline1' => $ttraddressline1,
                    ':ttaddressline2' => $ttraddressline2,
                    ':ttaddressref' => $ttraddressref,
                    ':tusrnm' => $ttrusrnm,
                    ':tusrmail' => $ttrusrmail,
					':tusrmailn' => $ttrusrmailn,
                    ':tusrmailm' => $ttrusrmailm,
                    ':ttcompanyname' => $ttrcompanyname,
                    ':tvatnum' => $ttrvatnum,
                    ':tcvatnum' => $ttrcvatnum,
                    ':tadn' => $ttrabn,
                    ':tgst' => $ttrgst,
                    ':ttcompanyID' => $ttrcompanyID,
                    ':ttransphone' => $ttrtansphone,
                    ':tconfigfname' => $ttrconfigfname,
                    ':tcontactilname' => $ttrcontactilname,
                    ':tpackagedchk' => $ttrpackagedchk,
                    ':tbuildingchk' => $ttrbuildingchk,
                    ':tvehicleschk' => $ttrvehicleschk,
                    ':tlivestockchk' => $ttrlivestockchk,
                    ':tmotorcycleschk' => $ttrmotorcycleschk,
                    ':tpetschk' => $ttrpetschk,
                    ':tboatchk' => $ttrboatchk,
                    ':tfoodchk' => $ttrfoodchk,
                    ':theavychk' => $ttrheavychk,
                    ':tspecialcarechk' => $ttrspecialcarechk,
                    ':tofficeremovalschk' => $ttrofficeremovalschk,
                    ':thaygrain' => $ttrhaygrain,
                    ':tcontainerchk' => $ttrcontainerchk,
                    ':thouseholdchk' => $ttrhouseholdchk,
                    ':tminingchk' => $ttrminingchk,
                    ':thorseschk' => $thorseschk,
                    ':tbulkfreightchk' => $ttrbulkfreightchk,
                    ':tparcelschk' => $ttrparcelschk,
                    ':tnationalarea' => $ttrnationalarea,
                    ':tinternationalarea' => $ttrinternationalarea,
                    ':tmaritimemeans' => $ttrmaritimemeans,
                    ':tbyairplane' => $ttrbyairplane,
                    ':tbyroute' => $ttrbyroute
                    );

                DatabaseHandler::Execute($ttr_update_sql, $ttr_update_params);
        print 202;
        break;

} //


?>