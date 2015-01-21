
<?php
/**
 * @author Klimis Mackenzi
 * @copyright 2014
 * @email: clemwm@gmail.com
 */
require_once dirname(dirname(__FILE__)).'/config/classes.inc';

$currencyid=fm_freight::SafeInput($_POST['currencyid']);
$user_currency_code =Util::fmcurrency_code_user($currencyid);
$usercode =''.$user_currency_code.'';
function fm_convertcurrency($price, $convertfrom, $convertto)
{

    // 1. initialize
    $ch = curl_init();
    // 2. set the options, including the url
    curl_setopt($ch, CURLOPT_URL, "http://www.google.com/finance/converter?a=" . $price .
        "&from=" . $convertfrom . "&to=" . $convertto . " ");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // 3. execute and fetch the resulting HTML output
    $output = curl_exec($ch);
    // 4. free up the curl handle
    curl_close($ch);
    $data = explode('<div id=currency_converter_result>', $output);
    $data2 = explode('<div id=currency_converter_result>', $data['1']);
    $data3 = explode('<span class=bld>', $data2['0']);
    $data4 = explode('</span>', $data3['1']);
    $data5 = explode(' ', $data4['0']);

    return $data5[0];


}
$amounto=fm_freight::SafeInput($_POST['amounto']);
  if($usercode == FMCURRENCY_DEFAULT){
     print $amounto;
  }
else{
 $var = fm_convertcurrency($amounto,$usercode ,''.FMCURRENCY_DEFAULT.'');
 print $var;   
}


//$fmcurrencycode= FMCURRENCY_DEFAULT;
//$pay = Util::fm_convertcurrency($amounto,''.$user_currency_code.'',''.$fmcurrencycode.'');
 
 
?>