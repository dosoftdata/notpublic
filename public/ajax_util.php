<?php

/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__file__)) . '/config/classes.inc';

$ttast = fm_freight::SafeInput($_POST['t_tast']);
$ttastid = fm_freight::SafeInput($_POST['t_tastid']);
$ttaskof = fm_freight::SafeInput($_POST['taskof']);
//print $ttaskof;
//Edit data
$tquoteamount = fm_freight::SafeInput($_POST['t_quoteamount']);
$tquotevaliddate = fm_freight::SafeInput($_POST['t_quotevaliddate']);
$status = array(
    'active' => 1,
    'expired' => 2,
    'cancelled' => 0);
$pdatetime = fm_freight::SafeInput($_POST['t_addeddatetime']);
$pamount = fm_freight::SafeInput($_POST['t_amount']);
$pcode = fm_freight::SafeInput($_POST['t_code']);

switch ($ttast)
{
//
    case 'showeditquote':
        $ttastid = fm_freight::SafeInput($_POST['t_tastid']);
        $tquoteamount = fm_freight::SafeInput($_POST['t_quoteamount']);
        $tquotevaliddate = fm_freight::SafeInput($_POST['t_quotevaliddate']);
        $sql = 'CALL __gET_TTR_QUOTEDITOR_FREIGHT(:inqid,:inqamount,:inqdatetime,:instatus)';
        // Build the parameters array
        $params = array(
            ':inqid' => $ttastid,
            ':inqamount' => $tquoteamount,
            ':inqdatetime' => $tquotevaliddate,
            ':instatus' => 1);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);
        print 200;
        //print $ttastid.'/'.$ttast.'/'.$tquoteamount.'/'. $tquotevaliddate;
        break;
    case 'flagdiscount':
        $ttastid = fm_freight::SafeInput($_POST['t_taskid']);
        //$tquoteamount = fm_freight::SafeInput($_POST['t_quoteamount']);
        //$tquotevaliddate = fm_freight::SafeInput($_POST['t_quotevaliddate']);
        $sql = 'CALL FRAGSHIPPINGDISCOUNT(:discountid)';
        // Build the parameters array
        $params = array(':discountid' => $ttastid);
        // Execute the query and return the results
        //DatabaseHandler::Execute($sql, $params);
        print 'Shipping Discount Flagged';
        //print $ttastid.'/'.$ttast.'/'.$tquoteamount.'/'. $tquotevaliddate;
        break;
    case 'bookshippingdiscount':
        session_start();
        $senderid = Util::StrCookie('susrid');
        //$senderemail=$_COOKIE['cusrmail'];
        $transid = fm_freight::SafeInput($_POST['taskfor']);
        $discountid = fm_freight::SafeInput($_POST['fromdiscount']);
        $discamount = fm_freight::SafeInput($_POST['discountamount']);
        $currency = fm_freight::SafeInput($_POST['currencyid']);
        $startdate = fm_freight::SafeInput($_POST['fromdate']);
        $enddate = fm_freight::SafeInput($_POST['todate']);
        $origin = fm_freight::SafeInput($_POST['palcein']);
        $destination = fm_freight::SafeInput($_POST['placeout']);
        $topay = fm_freight::SafeInput($_POST['t_topay']);

        $tpackagedchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_packagedchk']));
        $tbuildingchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_buildingchk']));
        $tvehicleschkt = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_vehicleschkt']));
        $tlivestockch = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_livestockch']));
        $tmotorcycleschk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_motorcycleschk']));
        $tpetschk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_petschk']));
        $tboatchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_boatchk']));

        $tfoodchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_foodchk']));
        $theavychk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_heavychk']));
        $tspecialcarechk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_specialcarechk']));
        $tofficeremovalschk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_officeremovalschk']));

        $thaygrain = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_haygrain']));
        $tcontainerchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_containerchk']));
        $thouseholdchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_householdchk']));

        $tminingchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_miningchk']));
        $thorseschk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_horseschk']));
        $tbulkfreightchk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_bulkfreightchk']));
        $tparcelschk = Util::match_undefined_js(fm_freight::SafeInput($_POST['t_parcelschk']));


        $sql = 'CALL GETSENDERFREIGHTID
        (:sid,:cat1,:cat2,:cat3,
        :cat4,:cat5,:cat6,:cat7,
        :cat8,:cat9,:cat10,:cat11,
        :cat12,:cat13,:cat14,:cat15,
         :cat16,:cat17,:cat18
        )';
        // Build the parameters array
        $params = array(
            ':sid' => $senderid,
            ':cat1' => $tpackagedchk,
            ':cat2' => $tbuildingchk,
            ':cat3' => $tvehicleschkt,
            ':cat4' => $tlivestockch,
            ':cat5' => $tmotorcycleschk,
            ':cat6' => $tpetschk,
            ':cat7' => $tboatchk,
            ':cat8' => $tfoodchk,
            ':cat9' => $theavychk,
            ':cat10' => $tspecialcarechk,
            ':cat11' => $tofficeremovalschk,
            ':cat12' => $thaygrain,
            ':cat13' => $tcontainerchk,
            ':cat14' => $thouseholdchk,
            ':cat15' => $tminingchk,
            ':cat16' => $thorseschk,
            ':cat17' => $tbulkfreightchk,
            ':cat18' => $tparcelschk);
        // Execute the query and return the results
        $any = DatabaseHandler::Countall($sql, $params);
        switch ($any)
        {
            case 0;
                print 'Please, Add freight that match the Shipping Discount';
                break;
            case 1:
                $get = DatabaseHandler::GetRow($sql, $params);
                $freightid = $get['cfreightfid'];
                switch ($freightid)
                {
                    case null:
                        print 'Please, Add freight that match the Shipping Discount';
                        break;
                    default:

                        $qsql = 'CALL bookshippingdiscount
        (:inttrid,:inSenderID,:inqamount,:infid,
        :intdateadded,:inexpirydt,:incurrencyid,:innotif,
        :instatus,:intopay,:inprosedays
        )';
                        // Build the parameters array
        $notif='Quote booked from Shipping discount';
        $d1 = new DateTime('' . $startdate. '');
                $d2 = new DateTime('' .$enddate. '');
                $diff = $d1->diff($d2);
                $diffa = $d1->diff($d2);
                $diffm = $d1->diff($d2);
                $diffh = $d1->diff($d2);
                $diffi = $d1->diff($d2);
                $diffs = $d1->diff($d2);
                $nb_js = $diff->d;
                        $qparams = array(
                            ':inttrid' => $transid,
                            ':inSenderID' => $senderid,
                            ':inqamount' => $discamount,
                            ':infid' => $freightid,
                            ':intdateadded' => $startdate,
                            ':inexpirydt' => $enddate,
                            ':incurrencyid' => $currency,
                            ':innotif' => $notif,
                            ':instatus' => 1,
                            ':intopay' => $topay,
                            ':inprosedays' => $nb_js
                            );
                DatabaseHandler::Execute($qsql,$qparams);
                 //get sender mail
                $sql3 = 'CALL GETSENDERBYID(:senderid)';
                $params3 = array(':senderid' => $senderid);
                $sendermail = DatabaseHandler::GetRow($sql3, $params3);
                $usemail = $sendermail['SEmail'];
                //get transporter mail
                $sql4 = 'CALL GETTRANSPORTERBYID(:transid)';
                $params4 = array(':transid' => $transid );
                $transportermail = DatabaseHandler::GetRow($sql4, $params4);
                $transmail = $transportermail['ttr_email'];

                $sql5 = 'CALL DISCOUNTFREIGHTBOOKED(:freightid,:status)';
                $params5 = array(':freightid' => $freightid,':status' =>4);
                $freightmail = DatabaseHandler::GetRow($sql5, $params5);
                
                //mailling to sendet
                $host = $_SERVER['HTTP_HOST'];
                $host_upper = strtoupper($host);

                $message = 'Freightmeta Shipping discount Selected
         Category/SubCategory: ' . $freightmail['Cat_name'] . '/' . $freightmail['subcat_name'] .
                    ' 
         Added On: ' . fm_freight::freightposteddatemail($freightmail['freight_AddedDate']) .
                    '
         Quoted at/For: ' . fm_freight::freightposteddatemail($startdate) .
                    '/' . Util::fmcurrency_code_symbol_model($freightmail['Currencyid'], $discamount) .
                    ' 
         Viewed: ' . $freightmail['freight_viewed'] . '
         
         Will be shipped by: 
         Company Name: ' . $transportermail['ttr_company_name'] . '
         Company E-mail: ' . $transportermail['ttr_company_name'] . '         
         Transporter/Forwarder Name: ' . $transportermail['ttr_fname'] . ' 
         At period time of: ' . fm_freight::freightposteddatemail($startdate) .
                    '->' . fm_freight::freightposteddatemail($enddate) . '
         
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
                mail($usemail, "Freight Ready to be Shipped", $message, "From: \"Shipping Service\" <admin@" .
                    $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());


                $message2 = 'Freight to Ship, More details
         Category/SubCategory: ' . $freightmail['Cat_name'] . '/' . $freightmail['subcat_name'] .
                    ' 
         Added On: ' . fm_freight::freightposteddatemail($freightmail['freight_AddedDate']) .
                    '
         Quoted at/For: ' . fm_freight::freightposteddatemail($startdate) .
                    '/' . Util::fmcurrency_code_symbol_model($currency, $freightmail['fqt_quote_amount']) .
                    ' 
         Pickup Address:
         Country: ' . $freightmail['Countryin'] . '
         State: ' . $freightmail['Statein'] . '
         City: ' . $freightmail['Regionin'] . '
         Ground Address: ' . $freightmail['AddressNamein'] . '
         Post code:' . $freightmail['Postcodein'] . '

         
         Drop Address:
         Country: ' . $freightmail['CountryOut'] . '
         State: ' . $freightmail['StateOut'] . '
         City: ' . $freightmail['RegionOut'] . '
         Ground Address: ' . $freightmail['AddressNameOut'] . '
         Post code:' . $freightmail['PostcodeOut'] . '
         
         Will be shipped by: 
         Company Name: ' . $transportermail['ttr_company_name'] . '
         Transporter/Forwarder Name: ' . $transportermail['ttr_fname'] . ' 
         At period time of: ' . fm_freight::freightposteddatemail($datetime['processdtime']) .
                    '->' . fm_freight::freightposteddatemail($datetime['freightdtime']) . '
         
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
                mail($transmail, "Freight Pickup And Delivery details", $message2, "From: \"Shipping Service\" <admin@" .
                    $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());
                        
           print 'A E-mail notification was sent to you and your Freight Transporter';
                        break;
                }

                break;
        }
        break;
    case 'quotenewsletter':
        $ttastid = fm_freight::SafeInput($_POST['taskfor']);
        //$tquoteamount = fm_freight::SafeInput($_POST['t_quoteamount']);
        //$tquotevaliddate = fm_freight::SafeInput($_POST['t_quotevaliddate']);
        //
        $sql = 'CALL get_senderMailbyMail(:quoteinfo)';
        // Build the parameters array
        $params = array(':quoteinfo' => $ttastid);
        $any = DatabaseHandler::Countall($sql, $params);
        if ($any < 1)
        {
            print 'Please, Add freight';
        } else
        {
            $sql = 'CALL QUOTENEWS_senderMailbyMail(:quoteinfo)';
            // Build the parameters array
            $params = array(':quoteinfo' => $ttastid);
            DatabaseHandler::Execute($sql, $params);
            print 'Thank YOU!';
        }
        //  ':inqamount' => $tquoteamount,
        //  ':inqdatetime' => $tquotevaliddate,
        // ':instatus' => 1);
        // Execute the query and return the results
        //DatabaseHandler::Execute($sql, $params);

        //print $ttastid.'/'.$ttast.'/'.$tquoteamount.'/'. $tquotevaliddate;
        break;
    case 'cancellquote':
        $ttastid = fm_freight::SafeInput($_POST['t_taskid']);
        $sql = 'CALL __gET_TTR_QUOTECANCELL_FREIGHT(:inqid,:instatus)';
        // Build the parameters array
        $params = array(':inqid' => $ttastid, ':instatus' => $status['cancelled']);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);
        print 202;
        //print $status['cancelled'].'/'.$ttastid;
        break;
    case 'paymentcode':
        $sql = 'CALL __gET_TTR_PAYMENTOK_FREIGHT`(:intid,:inpcode,:inpamount,:inpdatetime)';
        // Build the parameters array
        $params = array(
            ':intid' => $ttastid,
            ':inpcode' => $pcode,
            ':inpamount' => $pamount,
            ':inpdatetime' => $pdatetime);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);
        print 204;
        break;
    case 'flagquetion':
        $sql = 'CALL FRAG_QUESTION_(:intalktoid)';
        // Build the parameters array
        $params = array(':intalktoid' => $ttastid);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);
        print 206;
        break;
    case 'flaganswer':
        $sql = 'CALL FRAG_ANSWER_(:inanswerid)';
        // Build the parameters array
        $params = array(':inanswerid' => $ttastid);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);
        print 208;
        break;
    case 'acceptbook':

        $acceptid = fm_freight::SafeInput($_POST['tobookid']);
        $bookstatus = 1;
        //$onprocessday = '';
        $csql = 'CALL SAVE_ONCOMPLETE_FREIGHT_UPDATETOO_CONTROL(:inbookid,:incstatus)';
        $cparams = array(
            ':inbookid' => $acceptid,
            ':incstatus' => $bookstatus,
            );
        $count = DatabaseHandler::Countall($csql, $cparams);
        switch ($count)
        {
            case 1:
                print 213;
                break;
            case 0:
                $accdatetime = fm_freight::SafeInput($_POST['bookdatetime']);
                $accamount = fm_freight::SafeInput($_POST['quotepay']);
                $acceptid = fm_freight::SafeInput($_POST['tobookid']);
                $bookstatus = 1;
                $sql = 'CALL SAVE_ONCOMPLETE_FREIGHT_UPDATETOO(:inbookid,:incstatus,:incdtme,:intopay)';
                $params = array(
                    ':inbookid' => $acceptid,
                    ':incstatus' => $bookstatus,
                    ':incdtme' => $accdatetime,
                    ':intopay' => $accamount);
                DatabaseHandler::Execute($sql, $params);

                //Get datetime valid period
                $sql = 'CALL GET_FREIGHT_BOOKED_DATEPERIOD(:inbookid)';
                $params = array(':inbookid' => $acceptid);
                $datetime = DatabaseHandler::GetRow($sql, $params);
                $d1 = new DateTime('' . $datetime['freightdtime'] . '');
                $d2 = new DateTime('' . $datetime['processdtime'] . '');
                $diff = $d1->diff($d2);
                $diffa = $d1->diff($d2);
                $diffm = $d1->diff($d2);
                $diffh = $d1->diff($d2);
                $diffi = $d1->diff($d2);
                $diffs = $d1->diff($d2);
                $nb_j = $diff->d;

                //get sender mail
                $sql2 = 'CALL UPADTE_ONCOMPLETE_STATUS(:inbookid,:indays)';
                $params2 = array(':inbookid' => $acceptid, ':indays' => $nb_j);
                DatabaseHandler::Execute($sql2, $params2);

                //get sender mail
                $sql3 = 'CALL GET_SENDE_MAIL_BY_BOOKEDID(:inbookid)';
                $params3 = array(':inbookid' => $acceptid);
                $sendermail = DatabaseHandler::GetRow($sql3, $params3);
                $usemail = $sendermail['sendermail'];
                //get transporter mail
                $sql4 = 'CALL GET_TRANSPORTER_MAIL_BY_BOOKEDID(:inbookid)';
                $params4 = array(':inbookid' => $acceptid);
                $transportermail = DatabaseHandler::GetRow($sql4, $params4);
                $transmail = $transportermail['transmail'];

                $sql5 = 'CALL LOAD_FREIGHT_FULLINFOS_FOR_MAILLING(:inbookid)';
                $params5 = array(':inbookid' => $acceptid);
                $freightmail = DatabaseHandler::GetRow($sql5, $params5);


                //mailling to sendet
                $host = $_SERVER['HTTP_HOST'];
                $host_upper = strtoupper($host);

                $message = 'Freightmeta Shipping Selected
         Category/SubCategory: ' . $freightmail['Cat_name'] . '/' . $freightmail['subcat_name'] .
                    ' 
         Added On: ' . fm_freight::freightposteddatemail($freightmail['freight_AddedDate']) .
                    '
         Quoted at/For: ' . fm_freight::freightposteddatemail($freightmail['fqt_Quotetimes']) .
                    '/' . Util::fmcurrency_code_symbol_model($freightmail['Currencyid'], $freightmail['fqt_quote_amount']) .
                    ' 
         Viewed: ' . $freightmail['freight_viewed'] . '
         
         Will be shipped by: 
         Company Name: ' . $freightmail['ttr_company_name'] . '
         Transporter/Forwarder Name: ' . $freightmail['ttr_fname'] . ' 
         At period time of: ' . fm_freight::freightposteddatemail($datetime['processdtime']) .
                    '->' . fm_freight::freightposteddatemail($datetime['freightdtime']) . '
         
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
                mail($usemail, "Freight Ready to be Shipped", $message, "From: \"Shipping Service\" <admin@" .
                    $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());


                $message2 = 'Freight to Ship, More details
         Category/SubCategory: ' . $freightmail['Cat_name'] . '/' . $freightmail['subcat_name'] .
                    ' 
         Added On: ' . fm_freight::freightposteddatemail($freightmail['freight_AddedDate']) .
                    '
         Quoted at/For: ' . fm_freight::freightposteddatemail($freightmail['fqt_Quotetimes']) .
                    '/' . Util::fmcurrency_code_symbol_model($freightmail['Currencyid'], $freightmail['fqt_quote_amount']) .
                    ' 
         Pickup Address:
         Country: ' . $freightmail['Countryin'] . '
         State: ' . $freightmail['Statein'] . '
         City: ' . $freightmail['Regionin'] . '
         Ground Address: ' . $freightmail['AddressNamein'] . '
         Post code:' . $freightmail['Postcodein'] . '

         
         Drop Address:
         Country: ' . $freightmail['CountryOut'] . '
         State: ' . $freightmail['StateOut'] . '
         City: ' . $freightmail['RegionOut'] . '
         Ground Address: ' . $freightmail['AddressNameOut'] . '
         Post code:' . $freightmail['PostcodeOut'] . '
         
         Will be shipped by: 
         Company Name: ' . $freightmail['ttr_company_name'] . '
         Transporter/Forwarder Name: ' . $freightmail['ttr_fname'] . ' 
         At period time of: ' . fm_freight::freightposteddatemail($datetime['processdtime']) .
                    '->' . fm_freight::freightposteddatemail($datetime['freightdtime']) . '
         
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
                mail($transmail, "Freight Pickup And Delivery details", $message2, "From: \"Shipping Service\" <admin@" .
                    $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());

                print 214;

                break;
        }


        break;
    case 'quotebook':
        $sql = 'CALL 2_CUSTOMER_BOOK_QUOTE_CONTROL(:insenderrid,:inquoteid)';
        // Build the parameters array
        $params = array(':insenderrid' => $ttaskof, ':inquoteid' => $ttastid);
        // Execute the query and return the results
        $count = DatabaseHandler::Countall($sql, $params);
        if ($count == 0)
        {
            $sql = 'CALL 2_CUSTOMER_BOOK_QUOTE_INSERT(:insenderrid,:inquoteid,:inbookdatetime)';
            // Build the parameters array
            session_start();
            $params = array(
                ':insenderrid' => $_COOKIE["susrid"],
                ':inquoteid' => $ttastid,
                ':inbookdatetime' => $pdatetime);
            // Execute the query and return the results
            DatabaseHandler::Execute($sql, $params);
            //get transporter mail
                $sql4 = 'CALL GET_TRANSPOTER_MAIL_BY_QUOTEID(:quoteid)';
                $params4 = array('quoteid' => $ttastid);
                $transportermail = DatabaseHandler::GetRow($sql4, $params4);
                $transmail = $transportermail['transmail'];
                
                
                //mailling to sendet
                $host = $_SERVER['HTTP_HOST'];
                $host_upper = strtoupper($host);
                
                $message2 = 'You have a booked quote,
                please login in freightmeta.com to complete your 
                shipping.
         
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
                mail($transmail, "Booked freight service", $message2, "From: \"Shipping Service\" <admin@" .
                    $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());

            
            print 210;
        } else
        {
            print 211;
        }
        break;
    case 'cancellcbook':
        $bookid = fm_freight::SafeInput($_POST['tobookid']);
        $sql = 'CALL TTR_CANCELL_CUSTOMER_BOOK(:inbookid)';
        // Build the parameters array
        $params = array(':inbookid' => $bookid);
        // Execute the query and return the results
        DatabaseHandler::Execute($sql, $params);

        //get sender mail
        $sql3 = 'CALL GET_SENDE_MAIL_BY_BOOKEDID(:inbookid)';
        $params3 = array(':inbookid' => $bookid);
        $sendermail = DatabaseHandler::GetRow($sql3, $params3);
        $usemail = $sendermail['sendermail'];
        //mailling to sendet
        $host = $_SERVER['HTTP_HOST'];
        $host_upper = strtoupper($host);

        $message = 'TRANSPORTER CANCELL THE BOOKED QUOTE
         Your quote selected was cancelled by the transporter,
         Please select the other quote!
         Thank You

         Shipping Service
         ' . $host_upper . '
       ______________________________________________________
        THIS IS AN AUTOMATED RESPONSE. 
          ***DO NOT RESPOND TO THIS EMAIL****
           ';
        mail($usemail, "FREIGHTMETA NOTIFICATION", $message, "From: \"Shipping Service\" <admin@" .
            $host . ">\r\n" . "X-Mailer: PHP/" . phpversion());


        print 216;
        break;
    case 'loadtreview':
        //require_once HELPERS_DIR . 'review_discount/review.inc';

        $vpb_page_limit = FREIGHT_LIST_PER_PAGE; //This is the number of contents to display on each page

        $sql = 'CALL 3_TRANSPORTER_REVIEWS_COUNT()';
        // Execute the query and return the results
        $vpb_get_total_pages = DatabaseHandler::Countall($sql);

        $vpb_pagination_stages = 2;
        $vpb_current_page = $ttastid;
        $vpb_start_page = ($vpb_current_page - 1) * $vpb_page_limit;


        //This initializes the page setup
        if ($vpb_current_page == 0)
        {
            $vpb_current_page = 1;
        }
        $vpb_previous_page = $vpb_current_page - 1;
        $vpb_next_page = $vpb_current_page + 1;
        $vpb_last_page = ceil($vpb_get_total_pages / $vpb_page_limit);
        $vpb_lastpaged = $vpb_last_page - 1;
        $vpb_pagination_system = '';
        if ($vpb_last_page > 1)
        {
            $vpb_pagination_system .= "<div class='vpb_pagination_system'>";
            // Previous Page
            if ($vpb_current_page > 1)
            {
                $vpb_pagination_system .=
                    "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_previous_page\");'>Prev</a>";
            } else
            {
                $vpb_pagination_system .= "<span class='disabled'>Prev</span>";
            }
            // Pages
            if ($vpb_last_page < 7 + ($vpb_pagination_stages * 2))
                // Not enough pages to breaking it up
            {
                for ($vpb_page_counter = 1; $vpb_page_counter <= $vpb_last_page; $vpb_page_counter++)
                {
                    if ($vpb_page_counter == $vpb_current_page)
                    {
                        $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                    } else
                    {
                        $vpb_pagination_system .=
                            "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                    }
                }
            } elseif ($vpb_last_page > 5 + ($vpb_pagination_stages * 2))
            // This hides few pages when the displayed pages are much
            {
                //Beginning only hide later pages
                if ($vpb_current_page < 1 + ($vpb_pagination_stages * 2))
                {
                    for ($vpb_page_counter = 1; $vpb_page_counter < 4 + ($vpb_pagination_stages * 2);
                        $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                    $vpb_pagination_system .= "...";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_lastpaged\");'>$vpb_lastpaged</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_last_page\");'>$vpb_last_page</a>";
                }
                //Middle hide some front and some back
                elseif ($vpb_last_page - ($vpb_pagination_stages * 2) > $vpb_current_page && $vpb_current_page >
                    ($vpb_pagination_stages * 2))
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"1\");'>1</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"2\");'>2</a>";
                    $vpb_pagination_system .= "...";
                    for ($vpb_page_counter = $vpb_current_page - $vpb_pagination_stages; $vpb_page_counter <=
                        $vpb_current_page + $vpb_pagination_stages; $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                    $vpb_pagination_system .= "...";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_lastpaged\");'>$vpb_lastpaged</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_last_page\");'>$vpb_last_page</a>";
                }
                //End only hide early pages
                else
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"1\");'>1</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"2\");'>2</a>";
                    $vpb_pagination_system .= "...";
                    for ($vpb_page_counter = $vpb_last_page - (2 + ($vpb_pagination_stages * 2)); $vpb_page_counter <=
                        $vpb_last_page; $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                }
            }
            //Next Page
            if ($vpb_current_page < $vpb_page_counter - 1)
            {
                $vpb_pagination_system .=
                    "<a href='javascript:void(0);' onclick='vpb_pagination_system(\"$vpb_next_page\");'>Next</a>";
            } else
            {
                $vpb_pagination_system .= "<span class='disabled'>Next</span>";
            }
            $vpb_pagination_system .= "</div>";
        }

        //Check the contents for this page from the database
        ///$vpb_check_contents_second = mysql_query("SELECT * FROM `vasplus_programming_blog_pagination` ORDER BY `id` DESC LIMIT $vpb_start_page, $vpb_page_limit");

        $sql = 'CALL 3_TRANSPORTER_REVIEWS_LIST(:start,:perpages)';
        $page_params = array(':start' => $vpb_start_page, ':perpages' => $vpb_page_limit);
        // Execute the query and return the results

        if ($vpb_get_total_pages < 1)
        {
            print "<div class='info'>Currently, there are no transporter review to display. Thanks...</div>";
        } else
        {
            $result = DatabaseHandler::GetAll($sql, $page_params);
            //Get all contents for this page from the database and display on the screen to the user


            for ($i = 0; $i < count($result); $i++)
            {
                print '<div class="rowblueborder fw rounded5 fl">
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> ' . fm_freight::codename($result[$i]['transfname']) . ':</td>
<td class=""></td>
<td></td><td></td>
<td class=" hw3">
<span class="fr" style="padding-right: 20px; position: relative;"> ' . Fm_User::
                    transpoterlevel($result[$i]['transid']) . '</span>
</td>
</tr>
</table>
</div>
<div class="rscontent fw ">
' . Util::Phone_Mail($result[$i]['transreview']) . '
</div>
<div class="rscontent fw">
<table class="fw" style="color: black;">
<tr>
<td class=""> </td>
<td class=""> </td>
<td></td><td></td>
<td class="hw">
<span class="fr" style="padding-right: 20px; position: relative;">' . fm_freight::
                    freightposteddate($result[$i]['transreviewdatetime']) . '</span>
</td>
</tr>
</table>
</div>
</div>';
            } //end load freightlist


            print '<div class="clear"></div><div class="" style=" margin-top:-75px"><br clear="all" />';
            print '<div style="" align="left">' . $vpb_pagination_system .
                '</div><!-- This is the pagination buttons -->';
            print '<br clear="all" /></div>	<div class="clear"></div>';

        }
        //print 210;
        break;
    case 'loadtshippingdiscount':
        //$sql = 'CALL FRAG_ANSWER_(:inanswerid)';
        // Build the parameters array
        //$params = array(':inanswerid' => $ttastid);
        // Execute the query and return the results
        //DatabaseHandler::Execute($sql, $params);
        $vpb_page_limit = DISCOUNT_LIST_PER_PAGE; //This is the number of contents to display on each page

        $sql = 'CALL 3_TRANSPORTER_SHIPPING_DISCOUNT_COUNT()';
        // Execute the query and return the results
        $vpb_get_total_pages = DatabaseHandler::Countall($sql);

        $vpb_pagination_stages = 2;
        $vpb_current_page = $ttastid;
        $vpb_start_page = ($vpb_current_page - 1) * $vpb_page_limit;


        //This initializes the page setup
        if ($vpb_current_page == 0)
        {
            $vpb_current_page = 1;
        }
        $vpb_previous_page = $vpb_current_page - 1;
        $vpb_next_page = $vpb_current_page + 1;
        $vpb_last_page = ceil($vpb_get_total_pages / $vpb_page_limit);
        $vpb_lastpaged = $vpb_last_page - 1;
        $vpb_pagination_system = '';
        if ($vpb_last_page > 1)
        {
            $vpb_pagination_system .= "<div class='vpb_pagination_system'>";
            // Previous Page
            if ($vpb_current_page > 1)
            {
                $vpb_pagination_system .=
                    "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_previous_page\");'>Prev</a>";
            } else
            {
                $vpb_pagination_system .= "<span class='disabled'>Prev</span>";
            }
            // Pages
            if ($vpb_last_page < 7 + ($vpb_pagination_stages * 2))
                // Not enough pages to breaking it up
            {
                for ($vpb_page_counter = 1; $vpb_page_counter <= $vpb_last_page; $vpb_page_counter++)
                {
                    if ($vpb_page_counter == $vpb_current_page)
                    {
                        $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                    } else
                    {
                        $vpb_pagination_system .=
                            "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                    }
                }
            } elseif ($vpb_last_page > 5 + ($vpb_pagination_stages * 2))
            // This hides few pages when the displayed pages are much
            {
                //Beginning only hide later pages
                if ($vpb_current_page < 1 + ($vpb_pagination_stages * 2))
                {
                    for ($vpb_page_counter = 1; $vpb_page_counter < 4 + ($vpb_pagination_stages * 2);
                        $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                    $vpb_pagination_system .= "...";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_lastpaged\");'>$vpb_lastpaged</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_last_page\");'>$vpb_last_page</a>";
                }
                //Middle hide some front and some back
                elseif ($vpb_last_page - ($vpb_pagination_stages * 2) > $vpb_current_page && $vpb_current_page >
                    ($vpb_pagination_stages * 2))
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"1\");'>1</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"2\");'>2</a>";
                    $vpb_pagination_system .= "...";
                    for ($vpb_page_counter = $vpb_current_page - $vpb_pagination_stages; $vpb_page_counter <=
                        $vpb_current_page + $vpb_pagination_stages; $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                    $vpb_pagination_system .= "...";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_lastpaged\");'>$vpb_lastpaged</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_last_page\");'>$vpb_last_page</a>";
                }
                //End only hide early pages
                else
                {
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"1\");'>1</a>";
                    $vpb_pagination_system .=
                        "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"2\");'>2</a>";
                    $vpb_pagination_system .= "...";
                    for ($vpb_page_counter = $vpb_last_page - (2 + ($vpb_pagination_stages * 2)); $vpb_page_counter <=
                        $vpb_last_page; $vpb_page_counter++)
                    {
                        if ($vpb_page_counter == $vpb_current_page)
                        {
                            $vpb_pagination_system .= "<span class='current'>$vpb_page_counter</span>";
                        } else
                        {
                            $vpb_pagination_system .=
                                "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_page_counter\");'>$vpb_page_counter</a>";
                        }
                    }
                }
            }
            //Next Page
            if ($vpb_current_page < $vpb_page_counter - 1)
            {
                $vpb_pagination_system .=
                    "<a href='javascript:void(0);' onclick='loadshippingdiscount(\"$vpb_next_page\");'>Next</a>";
            } else
            {
                $vpb_pagination_system .= "<span class='disabled'>Next</span>";
            }
            $vpb_pagination_system .= "</div>";
        }

        //Check the contents for this page from the database
        ///$vpb_check_contents_second = mysql_query("SELECT * FROM `vasplus_programming_blog_pagination` ORDER BY `id` DESC LIMIT $vpb_start_page, $vpb_page_limit");

        $sql = 'CALL 3_TRANSPORTER_SHIPPING_DISCOUNT_LIST(:start,:perpages)';
        $page_params = array(':start' => $vpb_start_page, ':perpages' => $vpb_page_limit);
        // Execute the query and return the results

        if ($vpb_get_total_pages < 1)
        {
            print "<div class='info'>Currently, there are no Shipping discount. Thanks...</div>";
        } else
        {
            $result = DatabaseHandler::GetAll($sql, $page_params);
            //Get all contents for this page from the database and display on the screen to the user


            for ($i = 0; $i < count($result); $i++)
            {

                $myarray = array(
                    $result[$i]['scat1'],
                    $result[$i]['scat2'],
                    $result[$i]['scat3'],
                    $result[$i]['scat4'],
                    $result[$i]['scat5'],
                    $result[$i]['scat6'],
                    $result[$i]['scat7'],
                    $result[$i]['scat8'],
                    $result[$i]['scat9'],
                    $result[$i]['scat10'],
                    $result[$i]['scat11'],
                    $result[$i]['scat12'],
                    $result[$i]['scat13'],
                    $result[$i]['scat14'],
                    $result[$i]['scat15'],
                    $result[$i]['scat16'],
                    $result[$i]['scat17'],
                    $result[$i]['scat18']);

                print '<div class="discount-list">
                 
                        <div class="discount-list-header">
                        <div id="discount-list-header_left">
                        <h1>Shipping Discount:#/' . $result[$i]['ttr_solde_categoryID'] .
                    '-' . fm_freight::ttrnametransformed($result[$i]['TransporterID']) . '</h1>
                        </div>
                        <div id="discount-list-header_right">
                        <div id="dstatus" class="fr">
                        <table style="width: 100%;">
                        <tr>
                        <td class="bold">Status</td><td>:</td><td>';
                $mstatus = $result[$i]['discountstatus'];
                switch ($mstatus)
                {

                    case 1:
                        print '<span class="status-active">active</span><br />';
                        break;
                    case 2:
                        print '<span class="status-expired">expired</span><br />';
                        break;

                }
                print '</td>
                        </tr>
                        </table>
                        </div>
                        </div>
                        </div>

                        <div class="discount-list-middle">
                        <div id="discount-list-middle_left">
                         <div class="fl" style="width: 100%px;">
                         <strong> From</strong>:<span id="address1" style="padding-left:2px ;">' .
                    $result[$i]['soldorigin'] . '</span><br />
                         <strong>To</strong> :<span id="address2">' . $result[$i]['SDestination'] .
                    '</span><br />
                         <strong> Discount Period</strong> :<span>' . fm_freight::
                    formatdatebetween($result[$i]['Fromsoldedate']) . '' . ARROWTO . '' . fm_freight::
                    formatdatebetween($result[$i]['tosolde']) . ' dateout</span><br />
                         <strong>Discount From</strong>:<span>' . Util::
                    fmcurrency_code_symbol_model($result[$i]['Currencyid'], $result[$i]['fromamount']) .
                    '' . ' <strong>Only</strong>:' . Util::fmcurrency_code_symbol_model($result[$i]['soldecurrencyid'],
                    $result[$i]['ForAmount']) . '</span><br />
                         ';
                print '   
                         
                         <strong>Select your Freight Category</strong>:<span class="requiredtxt">*</span><br />
                         <span style="padding-left:;" style="word-break:">
                         
                         <div class="row">
					<div class="forminput" style=" width: 100%;">
					<style>
                    .fcat{
                        position: relative;
                    }
                    </style>
						<input class="required control" name="categories" type="hidden" value=""/>						
						<div class="fcat" style="float:left; width: 250px; font-size:9.2pt; margin-left: 10px;" >';

                print <<< sc
                     <span class="fcat1 hidden"><label><input class="fcat"  name="packagedchk" id="packagedchk" type="checkbox" value="1"/><span class="pl">Palletised or Packaged Freight</span></label><br /></span>
						<span class="fcat2 hidden"><label><input class="fcat"  name="t_vehicleschk" id="t_vehicleschk" type="checkbox" value="2"/><span class="pl">Vehicles</span></label><br /></span>
						<span class="fcat3 hidden"><label><input class="fcat"  name="t_motorcycleschk" id="t_motorcycleschk" type="checkbox" value="3"/><span class="pl">Motorcycles</span></label><br /></span>
						<span class="fcat4 hidden"><label><input class="fcat"  name="t_boatchk" id="t_boatchk" type="checkbox" value="4"/><span class="pl">Boats / Yachts</span></label><br /></span>
						<span class="fcat5 hidden"><label><input class="fcat"  name="heavychk" id="heavychk" type="checkbox" value="5"/><span class="pl">Heavy Haulage & Machinery</span></label><br /></span>
						<span class="fcat6 hidden"><label><input class="fcat"  name="officeremovalschk" id="officeremovalschk" type="checkbox" value="6"/><span class="pl">House & Office Removals</span></label><br /></span>
						<span class="fcat7 hidden"><label><input class="fcat"  name="containerchk" id="containerchk" type="checkbox" value="7"/><span class="pl">Containers</span></label><br /></span>
						<span class="fcat8 hidden"><label><input class="fcat"   name="householdchk" id="householdchk" type="checkbox" value="8"/><span class="pl">Household Goods</span></label><br /></span>
						<span class="fcat9 hidden"><label><input class="fcat"  name="horseschk" id="horseschk" type="checkbox" value="9"/><span class="pl">Horses</span></label><br /></span>
										
						</div>
						<div style="float:left; width: 280px; font-size: 9.2pt;">
                        
                        <span class="fcat10 hidden"><label><input  class="fcat" name="livestockchk" id="livestockchk" type="checkbox" value="10"/><span class="pl">Livestock</span></label><br /></span>
					    <span class="fcat11 hidden"><label><input class="fcat"  name="petschk" id="petschk" type="checkbox" value="11"/><span class="pl">Pets</span></label><br /></span>
						<span class="fcat12 hidden"><label><input class="fcat"  name="foodchk" id="foodchk" type="checkbox" value="12"/><span class="pl">Food & Beverages</span></label><br /></span>
						<span class="fcat13 hidden"><label><input  class="fcat" name="specialcarechk" id="specialcarechk" type="checkbox" value="13"/><span class="pl">Special Care Items</span></label><br /></span>
						<span class="fcat14 hidden"><label><input  class="fcat" name="haygrain" id="haygrain" type="checkbox" value="14"/><span class="pl">Hay, Grain & Feed</span></label><br /></span>
						<span class="fcat15 hidden"><label><input  class="fcat" name="parcelschk" id="parcelschk" type="checkbox" value="15"/><span class="pl">Parcels & Small Packages</span></label><br /></span>
						<span class="fcat16 hidden"><label><input  class="fcat" name="miningchk" id="miningchk" type="checkbox" value="16"/><span class="pl">Mining & Resources</span></label><br /></span>
						<span class="fcat17 hidden"><label><input  class="fcat" name="buildingchk" id="buildingchk" type="checkbox" value="17"/><span class="pl">Building & Industrial Materials</span></label><br /></span>
						<span class="fcat18 hidden"><label><input  class="fcat" name="bulkfreightchk" id="bulkfreightchk" type="checkbox" value="18"/><span class="pl">Other Freight</span></label><br /></span>
											
						</div>				
	
					</div>
					<div class="clear"></div>
				</div>
                         
                         </span>
                         </div>
                        </div>
                        
sc;

                $myarray1 = Util::removeAllValuesMatching($myarray, 0);
                $myarray2 = Util::removeAllValuesMatching($myarray1, 'NULL');
                print <<< scriptheader
 
<script type="text/javascript">
 //$.noConflict();
	$(document).ready(function()
 {
scriptheader;


                foreach ($myarray2 as $value)
                {
                    switch ($value)
                    {
                        case 1:
                            print " $('.fcat1').removeClass('hidden');          
            ";
                            break;

                        case 2:
                            print "$('.fcat2').removeClass('hidden'); 
           ";
                            break;

                        case 3:
                            print "$('.fcat3').removeClass('hidden');
           ";
                            break;

                        case 4:
                            print "$('.fcat4').removeClass('hidden');
           ";
                            break;

                        case 5:
                            print "$('.fcat5').removeClass('hidden');
           ";
                            break;

                        case 6:
                            print "$('.fcat6').removeClass('hidden');
           ";
                            break;

                        case 7:
                            print "$('.fcat7').removeClass('hidden'); 
           ";
                            break;

                        case 8:
                            print "$('.fcat8').removeClass('hidden'); 
           ";
                            break;

                        case 9:
                            print "$('.fcat9').removeClass('hidden'); 
           ";
                            break;

                        case 10:
                            print "$('.fcat10').removeClass('hidden'); 
           ";
                            break;

                        case 11:
                            print "$('.fcat11').removeClass('hidden'); 
          ";
                            break;

                        case 12:
                            print "$('.fcat12').removeClass('hidden');
           ";
                            break;

                        case 13:
                            print "$('.fcat13').removeClass('hidden'); 
           ";
                            break;

                        case 14:
                            print " $('.fcat14').removeClass('hidden');
            ";
                            break;

                        case 15:
                            print "$('.fcat15').removeClass('hidden');
          ";
                            break;

                        case 16:
                            print "$('.fcat16').removeClass('hidden');
           ";
                            break;

                        case 17:
                            print "$('.fcat17').removeClass('hidden');
           ";
                            break;

                        case 18:
                            print "$('.fcat18').removeClass('hidden'); 
          ";
                            break;

                    }
                } //for

                print <<< scriptfooter
});
</script>
scriptfooter;
                print '<div id="discount-list-middle_right">Discount area Gmap show here</div>
                        </div>
                        <div class="discount-list-footer">
                        <div id="discount-list-footer_left">
                        <table style="width: 100%;">
                        <tr>
                        <td>
                        ';
                print <<< LOGIN
 <div class="ui-button fl">
 <button type="submit" class="hidden btn-primary rounded7 logintogetquotediscount" onclick="$('#loaderimage').show(); login();">Login to book quote discount</button>	
				     <img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
				          </div>
                        </td>
                        <td>
LOGIN;

                print <<< book
<div class="ui-button fl ">
				       <button type="submit" class="iframe fancybox.iframe btn-primary rounded7 logintogetquotediscount" onclick="$('#loaderimage').show();uri(
book;
                print '' . $result[$i]['ttr_solde_categoryID'] . ',' . $result[$i]['TransporterID'] .
                    '';
                print <<< book
)">Get quote discount</button>	
				     <img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="left" />
				          </div>
book;

                print <<< here
                 
                        </td>
                        </tr>
                        </table>
                        </div>                    
here;
                print '<div id="discount-list-footer_right">
                         <span class="formnotes notefail">Sheaper freight shipping discount, flag it by clicking here: </span><a class"sheapdiscount" onclick="flagdiscount(' .
                    $result[$i]['ttr_solde_categoryID'] . ');" href="#"';
                print <<< here
  title="Flag thisShipping discount at Freightmeta's rules"><img src="images/btn/flag-white.png" border="0" style="margin-left:5px;" /></a>
    </div>
                        </div>
                </div>
here;

            } //foreach
            // } //end load freightlist


            print '<div class="clear"></div><div class="fr" style=" margin-top:10px"><br clear="all" />';
            print '<div style="" align="left">' . $vpb_pagination_system .
                '</div><!-- This is the pagination buttons -->';
            print '<br clear="all" /></div>	<div class="clear"></div>';

        }
        //print 212;
        break;

} // main switcher
//


?>