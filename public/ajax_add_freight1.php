<?php

require_once dirname(dirname(__file__)) . '/config/classes.inc';
$tast = fm_freight::SafeInput($_POST['p_editffreight']);
switch ($tast)
{
    case 'edit':
        $senderid = fm_freight::SafeInput($_POST['p_memberid']);
        $freightid = fm_freight::SafeInput($_POST['p_freifhtid']);
        //fm_freight::EDIT_ACTIVE_FREIGHT($senderid,$freightid);
        $catname = fm_freight::SafeInput($_POST['p_category']);
        $altdateime = fm_freight::SafeInput($_POST['patldatetime']);
        $incoterms = fm_freight::SafeInput($_POST['pincoterms']);
        
        $beforedateime = fm_freight::SafeInput($_POST['pbeforedate']);
        $addressinref = fm_freight::SafeInput($_POST['paddressrefin']);
        $addressoutref = fm_freight::SafeInput($_POST['paddressrefout']);
        
        $subcatname = fm_freight::SafeInput($_POST['p_subcategory']);
        //date("Y/m/d", strtotime($_POST['p_todate']));
        $fromdateformat = fm_freight::SafeInput($_POST['p_edfromdate']);
        $todateformat = fm_freight::SafeInput($_POST['p_edtodate']);
        //$fmtime = fm_freight::SafeInput($_POST['p_fmtime']);
        $fmdatetime = fm_freight::SafeInput($_POST['p_fmdatetime']);
        //$fromdate = substr($fromdateformat, 6, 4) . '-' . substr($fromdateformat, 3, 2) .
          //  '-' . substr($fromdateformat, 0, 2);
        //$todate = substr($todateformat, 6, 4) . '-' . substr($todateformat, 3, 2) . '-' .
            //substr($todateformat, 0, 2);
        //$fromdatetime = $fromdate . ' ' . $fmtime;
        //$todatetime = $todate . ' ' . $fmtime;
        $freight_added_date = $fmdatetime;
        $staydays = fm_freight::SafeInput($_POST['p_staydays']);
        //Freight others infromtion
        $otherdetail = fm_freight::SafeInput($_POST['p_otherdetail']);
        $freightphoto = "images/fphotos/" . SESSIONID . "." . "jpg";

        //Freight home address
        $hcontinent = fm_freight::SafeInput($_POST['p_continentin']);
        $hcountry = fm_freight::SafeInput($_POST['p_country']);
        $hprovince = fm_freight::SafeInput($_POST['p_province']);
        $hregion = fm_freight::SafeInput($_POST['p_region']);
        $hcity = fm_freight::SafeInput($_POST['p_city']);
        $hpostcode = fm_freight::SafeInput($_POST['p_Ormypostcode']);
        $haddress = fm_freight::SafeInput($_POST['p_Orrefdetail']);
        //Freight delivery address
        $dcontinent = fm_freight::SafeInput($_POST['p_continentout']);
        $dcountry = fm_freight::SafeInput($_POST['p_mycountry']);
        $dprovince = fm_freight::SafeInput($_POST['p_myprovince']);
        $dregion = fm_freight::SafeInput($_POST['p_myregion']);
        $dcity = fm_freight::SafeInput($_POST['p_mycity']);
        $dpostcode = fm_freight::SafeInput($_POST['p_Dsmypostcode']);
        $daddress = fm_freight::SafeInput($_POST['p_Dsrefdetail']);
        //Freight details
        $item_descr = fm_freight::SafeInput($_POST['p_item_descr']);
        $packaging = fm_freight::SafeInput($_POST['p_packaging']);
        $qty = fm_freight::SafeInput($_POST['p_qty']);
        $unk_dims = fm_freight::SafeInput($_POST['p_unk_dims']);

        $sheight = fm_freight::SafeInput($_POST['p_fsheight']);
        $swidth = fm_freight::SafeInput($_POST['p_fswidth']);
        $slength = fm_freight::SafeInput($_POST['p_fslength']);

        $height = fm_freight::SafeInput($_POST['p_fheight']) . $sheight;
        $width = fm_freight::SafeInput($_POST['p_fwidth']) . $swidth;
        $length = fm_freight::SafeInput($_POST['p_flength']) . $slength;

        $weight = fm_freight::SafeInput($_POST['p_fweight']);
        $make = fm_freight::SafeInput($_POST['p_fmake']);
        $model = fm_freight::SafeInput($_POST['p_fmodel']);
        $year = fm_freight::SafeInput($_POST['p_fyear']);
        $drivable = fm_freight::SafeInput($_POST['p_drivable']);
        $ontrailer = fm_freight::SafeInput($_POST['p_ontrailer']);
        $mares = fm_freight::SafeInput($_POST['p_mares']);
        $maresWithFoal = fm_freight::SafeInput($_POST['p_maresWithFoal']);
        $geldings = fm_freight::SafeInput($_POST['p_geldings']);
        $stallions = fm_freight::SafeInput($_POST['p_stallions']);
        $breed = fm_freight::SafeInput($_POST['p_breed']);
        $exp = fm_freight::SafeInput($_POST['p_exp']);
        $livestock_no = fm_freight::SafeInput($_POST['p_livestock_no']);
        $sql = 'CALL C_EDIT_ACTIVE_FREIGHT(
            :p_cid,
            :p_fid,
            :p_continentin, 
            :p_country,
            :p_province,
            :p_region, 
            :p_city,
            :p_Orrefdetail,
            :addrefin,
            :p_Ormypostcode,
            :p_continentout,
            :p_mycountry,
            :p_myprovince,
            :p_myregion,
            :p_mycity,
            :p_Dsrefdetails,
            :addrefout,
            :p_Dsmypostcode,
            :p_category,
            :p_subcategory,
            :p_item_descr,
            :p_packaging_details,
            :p_qty,
            :p_unk_dims,
            :p_fheight,
            :p_fwidth,
            :p_flength,
            :p_fweight,
            :p_fmake,
            :p_fmodel,
            :p_fyear,
            :p_drivable,
            :p_ontrailer,
            :p_mares,
            :p_maresWithFoal,
            :p_geldings,
            :p_stallions,
            :p_breed,
            :p_exp,
            :p_livestock_no,
            :freight_added_date,
            :p_fromdate,
            :altdatetime,
            :befdatetime,
            :p_todate,
            :p_staydays,
            :freightphoto
         )';
        $params = array(
            ':p_cid' => $senderid,
            ':p_fid' => $freightid,
            ':p_continentin' => $hcontinent,
            ':p_country' => $hcountry,
            ':p_province' => $hprovince,
            ':p_region' => $hregion,
            ':p_city' => $hcity,
            ':p_Orrefdetail' => $haddress,
            ':addrefin' => $addressinref,
            ':p_Ormypostcode' => $hpostcode,
            ':p_continentout' => $dcontinent,
            ':p_mycountry' => $dcountry,
            ':p_myprovince' => $dprovince,
            ':p_myregion' => $dregion,
            ':p_mycity' => $dcity,
            ':p_Dsrefdetails' => $daddress,
            ':addrefout' => $addressoutref,
            ':p_Dsmypostcode' => $dpostcode,
            ':p_category' => $catname,
            ':p_subcategory' => $subcatname,
            ':p_item_descr' => $item_descr,
            ':p_packaging_details' => $packaging,
            ':p_qty' => $qty,
            ':p_unk_dims' => $unk_dims,
            ':p_fheight' => $height,
            ':p_fwidth' => $width,
            ':p_flength' => $length,
            ':p_fweight' => $weight,
            ':p_fmake' => $make,
            ':p_fmodel' => $model,
            ':p_fyear' => $year,
            ':p_drivable' => $drivable,
            ':p_ontrailer' => $ontrailer,
            ':p_mares' => $mares,
            ':p_maresWithFoal' => $maresWithFoal,
            ':p_geldings' => $geldings,
            ':p_stallions' => $stallions,
            ':p_breed' => $breed,
            ':p_exp' => $exp,
            ':p_livestock_no' => $livestock_no,
            ':freight_added_date' => $freight_added_date,
            ':p_fromdate' => $fromdateformat,
            ':altdatetime'=>$altdateime,
            ':befdatetime'=> $beforedateime,
            ':p_todate' => $todateformat,
            ':p_staydays' => $staydays,
            ':freightphoto' => $freightphoto);
              
        DatabaseHandler::Execute($sql, $params);
        //print  $senderid .'/'. $freightid;
        //$freightid
        print 'editok';
        //print $tast;
        break;
    case 'new':
        fm_freight::add_freight_1();
        break;
    default:
        fm_freight::add_freight_1();
        break;
}
