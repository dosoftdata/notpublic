<?php

/**
 * @author Klimis Mackenzi
 * @copyright 2014
 */
require_once dirname(dirname(__file__)) . '/config/classes.inc';
session_start();
$ttast = fm_freight::SafeInput($_POST['t_tast']);
$ttaskid = fm_freight::SafeInput($_POST['t_tastid']);//$_COOKIE["tusrid"];
//print $ttaskid; 
$tsoldorigin = fm_freight::SafeInput($_POST['t_soldorigin']);
$tsolddestination = fm_freight::SafeInput($_POST['t_solddestination']);
$tamountfrom = fm_freight::SafeInput($_POST['t_amountfrom']);
$tamountfrom_currency = fm_freight::SafeInput($_POST['t_amountfrom_currency']);
$tsoldamount = fm_freight::SafeInput($_POST['t_soldamount']);
$tsoldamount_currency = fm_freight::SafeInput($_POST['t_soldamount_currency']);

//Contact freightmeta inputs
$ccontactname = fm_freight::SafeInput($_POST['c_contactname']);
$ccontactmail = fm_freight::SafeInput($_POST['c_contactmail']);
$ccontactcompany = fm_freight::SafeInput($_POST['c_contactcompany']);
$ccontactsubject = fm_freight::SafeInput($_POST['c_contactsubject']);
$ccontacttext = fm_freight::SafeInput($_POST['c_contacttext']);


$fromdateformat = fm_freight::SafeInput($_POST['t_datefrom']);
$todateformat = fm_freight::SafeInput($_POST['t_datefto']);
$fmtime = fm_freight::SafeInput($_POST['t_hours']);
$fmdatetime = fm_freight::SafeInput($_POST['t_fmdatetime']);
$fromdate = substr($fromdateformat, 6, 4) . '-' . substr($fromdateformat, 3, 2) .
    '-' . substr($fromdateformat, 0, 2);
$todate = substr($todateformat, 6, 4) . '-' . substr($todateformat, 3, 2) . '-' .
    substr($todateformat, 0, 2);

$fromdatetime = $fromdate . ' ' . $fmtime;
$todatetime = $todate . ' ' . $fmtime;
$discoutstatus = 1;

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

$contact_sql = 'CALL FMusercontact_innsert(
                :contactfullname,:contactcompagny,
                :contactmail,:contactsubject,
                :contactmessage,contactdatetime
                 )';
$contact_params = array(
    ':contactfullname' => $ccontactname,
    ':contactcompagny' => $ccontactcompany,
    ':contactmail' => $ccontactmail,
    ':contactsubject' => $ccontactsubject,
    ':contactmessage' => $ccontacttext,
    ':contactdatetime' => $fmdatetime);

switch ($ttast)
{

    case 'discountshipping':
    $ttaskid = fm_freight::SafeInput($_POST['t_tastid']);//$_COOKIE["tusrid"];
//print $ttaskid; 
$tsoldorigin = fm_freight::SafeInput($_POST['t_soldorigin']);
$tsolddestination = fm_freight::SafeInput($_POST['t_solddestination']);
$tamountfrom = fm_freight::SafeInput($_POST['t_amountfrom']);
$tamountfrom_currency = fm_freight::SafeInput($_POST['t_amountfrom_currency']);
$tsoldamount = fm_freight::SafeInput($_POST['t_soldamount']);
$tsoldamount_currency = fm_freight::SafeInput($_POST['t_soldamount_currency']);

//Contact freightmeta inputs
$ccontactname = fm_freight::SafeInput($_POST['c_contactname']);
$ccontactmail = fm_freight::SafeInput($_POST['c_contactmail']);
$ccontactcompany = fm_freight::SafeInput($_POST['c_contactcompany']);
$ccontactsubject = fm_freight::SafeInput($_POST['c_contactsubject']);
$ccontacttext = fm_freight::SafeInput($_POST['c_contacttext']);
$incoterms = fm_freight::SafeInput($_POST['t_incoterms']);


$fromdateformat = fm_freight::SafeInput($_POST['t_datefrom']);
$todateformat = fm_freight::SafeInput($_POST['t_datefto']);
$fmtime = fm_freight::SafeInput($_POST['t_hours']);
$fmdatetime = fm_freight::SafeInput($_POST['t_fmdatetime']);
$fromdate = substr($fromdateformat, 6, 4) . '-' . substr($fromdateformat, 3, 2) .
    '-' . substr($fromdateformat, 0, 2);
$todate = substr($todateformat, 6, 4) . '-' . substr($todateformat, 3, 2) . '-' .
    substr($todateformat, 0, 2);

$fromdatetime = $fromdate . ' ' . $fmtime;
$todatetime = $todate . ' ' . $fmtime;
$discoutstatus = 1;

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

        $ttr_sold_sql = 'CALL __gET_TTR_INSERTSOLDE_FREIGHT(
                  :ttaskid,
                  :tsoldorigin, 
                  :tsolddestination,
                  :fromdatetime,
                  :todatetime,
                  :fmdatetime,
                  :tsoldamount,
                  :tamountfrom,
                  :tamountfrom_currency,
                  :tsoldamount_currency,
                  :tpackagedchk,
                  :tvehicleschk,
                  :tmotorcycleschk,
                  :tboatchk,
                  :theavychk,
                  :tofficeremovalschk,
                  :tcontainerchk,
                  :thouseholdchk,
                  :thorseschk,
                  :tlivestockchk,
                  :tpetschk,
                  :tfoodchk,
                  :tspecialcarechk,
                  :thaygrain,
                  :tparcelschk,
                  :tminingchk,
                  :tbuildingchk,
                  :tbulkfreightchk,
                  :discoutstatus,
                  :incoterms
                  )';
        $ttr_sold_params = array(
            ':ttaskid' => $ttaskid,
            ':tsoldorigin' => $tsoldorigin,
            ':tsolddestination' => $tsolddestination,
            ':fromdatetime' => $fromdatetime,
            ':todatetime' => $todatetime,
            ':fmdatetime' => $fmdatetime,
            ':tsoldamount' => $tsoldamount,
            ':tamountfrom' => $tamountfrom,
            ':tamountfrom_currency' => $tamountfrom_currency,
            ':tsoldamount_currency' => $tsoldamount_currency,
            ':tpackagedchk' => $ttrpackagedchk,
            ':tvehicleschk' => $ttrvehicleschk,
            ':tmotorcycleschk' => $ttrmotorcycleschk,
            ':tboatchk' => $ttrboatchk,
            ':theavychk' => $ttrheavychk,
            ':tofficeremovalschk' => $ttrofficeremovalschk,
            ':tcontainerchk' => $ttrcontainerchk,
            ':thouseholdchk' => $ttrhouseholdchk,
            ':thorseschk' => $thorseschk,
            ':tlivestockchk' => $ttrlivestockchk,
            ':tpetschk' => $ttrpetschk,
            ':tfoodchk' => $ttrfoodchk,
            ':tspecialcarechk' => $ttrspecialcarechk,
            ':thaygrain' => $ttrhaygrain,
            ':tparcelschk' => $ttrparcelschk,
            ':tminingchk' => $ttrminingchk,
            ':tbuildingchk' => $ttrbuildingchk,
            ':tbulkfreightchk' => $ttrbulkfreightchk,
            ':discoutstatus' => $discoutstatus,
            ':incoterms' => $incoterms
            );
        DatabaseHandler::Execute($ttr_sold_sql, $ttr_sold_params);
        print 200;
        break;
    case 'editdiscount':
    $ttr_editsold_sql = 'CALL __gET_TTR_EDITDISCOUNT_FREIGHT(:tsoldorigin, 
                  :tsolddestination,:fromdatetime,:todatetime,:fmdatetime,
                  :tsoldamount,:tamountfrom,:tamountfrom_currency,:tsoldamount_currency,
                  :tpackagedchk,:tbuildingchk,:tvehicleschk,:tlivestockchk,
                  :tmotorcycleschk,:tpetschk,:tboatchk,:tfoodchk,:theavychk,
                  :tspecialcarechk,:tofficeremovalschk,:thaygrain,:tcontainerchk,
                  :thouseholdchk,:tminingchk,:thorseschk,:tbulkfreightchk,
                  :tparcelschk)';

$ttr_editsold_params = array(
    ':tsoldorigin' => $tsoldorigin,
    ':tsolddestination' => $tsolddestination,
    ':fromdatetime' => $fromdatetime,
    ':todatetime' => $todatetime,
    ':fmdatetime' => $fmdatetime,
    ':tsoldamount' => $tsoldamount,
    ':tamountfrom' => $tamountfrom,
    ':tamountfrom_currency' => $tamountfrom_currency,
    ':tsoldamount_currency' => $tsoldamount_currency,
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
    ':tparcelschk' => $ttrparcelschk);
        DatabaseHandler::Execute($ttr_editsold_sql, $ttr_editsold_params);
        print 202;
        break;
    case 'contact_us':
        //DatabaseHandler::Execute($ttr_sold_sql, $ttr_sold_params);
        Util::FM_MAIL(ADMNEMAIL, $ccontactsubject, $ccontacttext, $contactmail, 0);
        DatabaseHandler::Execute($contact_sql, $contact_params);
        print 204;
        break;
}

?>