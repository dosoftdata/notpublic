
 <!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<meta name="author" content="LiveLong" />

	<title>test pdf creator</title>
    <style type="text/css">
    p.notiftext{
    position: relative;
    margin-top: -5px;
    text-align: justify;
    font-size:12pt;
    padding-left: 15px;
    padding-right: 10px;

}
span.notiftexth1{
    position: relative;
    padding: 3px 3px 3px 3px;
    font-size:40pt;
    color: #5AA5CC;
    text-align: center;
    border: 4px double #5AA5CC;
}
div.place{
    position: relative;
    margin-left: 1px;
    margin-top: 1px;
}
strong{
    font-size: 13pt;
    font-weight: bold;
}
span.dot{
    font-size: 13pt;
    font-weight:lighter;
} 
strong.fwlighter{
  font-weight:lighter;  
}
    </style>
</head>

<body style="color: black;">
<style type="">
.fm{
  font-family: Nunito serif;  
}
.fw{
    font-weight: bold !important;
}
.fz{
    font-size: 20pt;
}
.fz2
{
  font-weight: bold !important;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
  font-size: 15pt;

}
.fcolor{
 color: #5AA5CC !important;
}
.mcolor{
    color: #8C8C8C;
}
p.ls{
 letter-spacing: -3px;   
}
</style>
<center>
<p class="ls" style="background:none;">
<span class="fm fw fz fcolor">F</span><span class="fm dw fz mcolor">m</span>
</p>
</center>
</style>
<center>
<a class="fz2" >
a tagggggggggg
</a>
</center>
<!---script type="text/javascript">
window.onload=function()

 {
window.location.protocol = "https";
window.location.host = "freightmeta.com";
window.location.pathname = "testb/public/customer_dashboard.php";
var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
 window.location=newURL;
//var pathArray = window.location.pathname.split( '/' );
//var newPathname = "";
//for ( i = 0; i < pathArray.length; i++ ) {
  //newPathname += "/";
  //newPathname += pathArray[i];
  //alert(newURL);
 //}
    
 }

</script!--->
<script type="text/javascript">
/*	
  var fmdatetime;				
  var todaydate = new Date();
  
var c_dt = todaydate.getDate();
var c_mt =(todaydate.getMonth()+1);
var c_yr = todaydate.getFullYear();

var hr=todaydate.getHours();
if (hr<10) {hr = "0" + hr}
var mn=todaydate.getMinutes();
if (mn<10) {mn = "0" + mn}
var sc=todaydate.getSeconds();
if (sc<10) {sc = "0" + sc} 

  fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc)
  alert(fmdatetime);
 */
</script>

<!---script type="text/javascript">

var dt=new Date()

var curr_date = dt.getDate();
var curr_month = dt.getMonth();
var curr_year = dt.getFullYear();

var hr=dt.getHours();
if (hr<10) {hr = "0" + hr}
var mn=dt.getMinutes();
if (mn<10) {mn = "0" + mn}
var sc=dt.getSeconds();
if (sc<10) {sc = "0" + sc}

$('#datetime').append(curr_year+'-'+curr_month+'-'+curr_date+'&#160;'+hr+":"+mn+":"+sc);
</script!--->
<?php

require_once 'header.php';
function GenPwd($length = 12)
{
    $password = "";
    $possible = "0123456789bcdfghjkmnpqrstvwxyzBCDFGHJKMNPQRSTVWXYZ"; //no vowels
    $i = 0;
    while ($i < $length)
    {
        $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);
        if (!strstr($password, $char))
        {
            $password .= $char;
            $i++;
        }
    }
    return $password;
}

print 'Pwd  // ' . $pwd = GenPwd() . '<br />';
function generate_id($uri)
{
    /* regular expressions */
    $regex1 = '/[^a-zA-Z0-9]/'; //remove anything but letters and numbers
    $regex2 = '/[\-]+/'; //remove multiple "-"'s in a row
    $regex3 = '/^[-]+/'; //remove starting "-"
    $regex4 = '/[-]+$/'; //remove ending "-"
    /* return... */
    return md5(preg_replace(array(
        $regex1,
        $regex2,
        $regex3,
        $regex4), array(
        '-',
        '-',
        '',
        ''), $_SERVER['REQUEST_URI']));
}

/* do it! */
$body_id = generate_id($_SERVER['REQUEST_URI']);
$quote_added_date = date("Y-m-d H:i:s");
print '$body_id//' . $body_id . '<br />' . $quote_added_date . '<br />';

print strftime('%b') . '<br />';
$fmdate = new DateTime('now');

$mypcdatetime = fm_freight::load_current_datedate();

$d1 = new DateTime("2014-5-5  20:54:02");
$d2 = new DateTime("2014-07-20 20:09:00");
$diff = $d1->diff($d2);
$diffa = $d1->diff($d2);
$diffm = $d1->diff($d2);
$diffh = $d1->diff($d2);
$diffi = $d1->diff($d2);
$diffs = $d1->diff($d2);
print 'From:&#160:' . $mypcdatetime . '&#160;To&#160;:2014-02-02 7:30:00';
echo "<br>";
echo 'Left';
echo $nb_jours = $diff->d . "day(s)&#160;";
echo $nb_mois = $diffm->m . "months&#160;";
echo $nb_an = $diffa->y . "Year&#160;";
echo $nb_heur = $diffh->h . "hour(s)&#160;";
echo $nb_min = $diffi->i . "mmunits&#160;";
echo $nb_sec = $diffs->s . "secondes&#160;";
echo "<br>";

$date = new DateTime("1969-12-31 12:13:40");
// équivalent strictement à $date = date_create("1969-12-31 12:13:40");
//echo $date->format('U'); // affiche -13390
echo "<br>";
echo $df = $date->format(DateTime::RSS);
echo "<br>";
print substr($df, 0, 25);
// affiche Wed, 31 Dec 1969 12:13:40 +0100
echo "<br>";
$dt = substr('2014-01-24 15:58:41', 0, 10); // bcd
$dty = substr('2014-01-24 15:58:41', 0, 4);
$dtm = substr('2014-01-24 15:58:41', 5, 2);
$dtd = substr('2014-01-24 15:58:41', 8, 2);
$dth = substr('2014-01-24 15:58:41', 10, 2);
$dtmn = substr('2014-01-24 15:58:41', 13, 2);
$dts = substr('2014-01-24 15:58:41', 15, 2);
//15:58:41
print 'fmdate&#160;:&#160;' . $dtd . '/' . $dtm . '/' . $dty;
echo "<br>";
print 'fmtime&#160;:&#160;' . $dth . 'h&#160;' . $dtmn . 'm&#160;' . $dts .
    's&#160;';

//2014-01-24 15:58:41
//print'<strong>Expires:</strong>'.fm_freight::leftdatetime(''.fm_freight::load_current_datedate().'',''.$result['freight_Stay_to'].'').' <br/>';
//print $fmdate->format(DateTime::ISO8601). "<br/>\n";
//print'<strong>Expires:</strong>'.self::leftdatetime(''.self::load_current_datedate().'',''.$result['freight_Stay_to'].'').' <br/>';
$mypcdatetime = fm_freight::load_current_datedate();
echo "<br>";
print "My PC datetime&#160;:" . $mypcdatetime;
echo "<br>";

print 'AADR:&#160;' . fm_freight::get_home_address();
echo "<br>";
$date = new DateTime('2000-01-20');
$date->sub(new DateInterval('PT10H30S'));
//echo $date->format('Y-m-d H:i:s') . "\n";

$date = new DateTime('' . $mypcdatetime . '');
$date->sub(new DateTime('2014-02-02 7:30:00'));
echo 'SUBTIME:&#160;' . $date->format('Y-m-d H:i:s') . "\n";

echo "<br>";
$_start = new DateTime('2014-02-08 14:58:21'); // or new DateTime($_POST['start']);
$_stop = new DateTime('2014-02-05 14:58:21'); // or new DateTime($_POST['stop']);
$interval = $_start->diff($_stop);
echo $interval->format('%a days'); // Should output "4 days".

function fmdatetimecompare($cdate1, $vdate2)
{

    return $cdate1 < $vdate2;

}
echo "<br>";
$d1 = new DateTime('2014-04-19 14:58:21'); //constant
$d2 = new DateTime('2014-04-18 22:02:25'); //var
//var_dump($d1 == $d2);
//var_dump($d1 > $d2);
$datecompare = fmdatetimecompare($d1, $d2);
switch ($datecompare)
{

    case false:
        print 'NOP DATE';
        break;
    case true:
        print 'DATE OK';
        break;
}
//var_dump($d1 < $d2);

//require_once dirname(dirname(__FILE__)).'/config/classes.inc';
//$sql = 'CALL get_all_categories()';
// Execute the query and return the results
//$result = DatabaseHandler::GetAll($sql);
//while($result->next())
//{
//print '<a href="\mailto:'.$result->CategoryID.'\'">'.$result->Cat_name.'</a>';
//}
/*
$a=$_SERVER['REQUEST_URI'];
echo "Your previous page URL is ".$a;

function full_url($s)
{
$ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
$sp = strtolower($s['SERVER_PROTOCOL']);
$protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
$port = $s['SERVER_PORT'];
$port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
$host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];
return $protocol . '://' . $host . $port . $s['REQUEST_URI'];
}
$absolute_url = full_url($_SERVER);
echo 'This url'.$absolute_url;
*/
/*
require_once dirname(dirname(__FILE__)).'/public/header.php';
ob_start();
$identifier = '';
$i = 0;
while ($i < 7) 
{
$identifier .= rand(0, 9);
$i++;
}
$pdf_html_content = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>'.SITE_NAME.' | Register ref:'.(int) $identifier.'/'.date('m-Y').'</title>
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
<td style="width:36%">Name</td>
</tr>
<tr>
<td style="width:45%;"></td>
<td style="width:19%; ">Company name :</td>
<td style="width:36%">Name</td>
</tr>
<tr>
<td style="width:45%;"></td>
<td style="width:19%; ">Company Id :</td>
<td style="width:36%">*****</td>
</tr>
<tr>
<td style="width:45%;"></td>
<td style="width:19%; ">Adresse :</td>
<td style="width:36%">
street name & no<br>
country-city <br>
postcode if any<br>
</td>
</tr>
<tr>
<td style="width:45%;"></td>
<td style="width:19%; ">Email :</td>
<td style="width:36%">me@me.com</td>
</tr>
<tr>
<td style="width:45%;"></td>
<td style="width:19%; ">Phone :</td>
<td style="width:36%">XXXXXXXXXXXX</td>
</tr>
</table>
<br>
<br>
<br>
<i>
<b><u>Object </u>: &laquo; Register comfirmation &raquo;</b><br>
client  no: XXXX<br>
Reference code : XXXXXXX<br>
</i>
<br>
<br>
Dear  transporter,<br>
<br>
<table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
<tr>
<td style="width:100%; padding:10px">

<p >Incenderat autem audaces usque ad insaniam homines ad haec, quae nefariis egere conatibus, Luscus quidam curator urbis subito visus: eosque ut heiulans baiolorum praecentor ad expediendum quod orsi sunt incitans vocibus crebris. qui haut longe postea ideo vivus exustus est.</p>

<p >Hanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia descivere Romana. absque ullo egressus effectu deinde tabescebat immobilis.</p>

<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita evisceratus ut cruciatibus membra deessent, inplorans caelo iustitiam, torvum renidens fundato pectore mansit inmobilis nec se incusare nec quemquam alium passus et tandem nec confessus nec confutatus cum abiecto consorte poenali est morte multatus. et ducebatur intrepidus temporum iniquitati insultans, imitatus Zenonem illum veterem Stoicum qui ut mentiretur quaedam laceratus diutius, avulsam sedibus linguam suam cum cruento sputamine in oculos interrogantis Cyprii regis inpegit.</p>       


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
try
{
$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->writeHTML($content);
///$html2pdf->Output();
$html2pdf->Output('ttr_pdf/'.(int) $identifier.''.'.pdf','F');
}
catch(HTML2PDF_exception $e) {
echo $e;
exit;
}

$content = ob_get_clean();
?>
<?php    
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
*/
//if (!preg_match("", $telephone)) return 'format_invalide';
$input = "zero or more 56 spaces implies that either each element will have at most one character, or that you'll have infinitely many empty elements. Are you sure this is what you want? ";
$words = preg_split('/\s+/', $input);
for ($i = 0; $i < count($words); $i++)
{

    if (preg_match('/^\d+$/', $words[$i]))
    {
        //print '<span style="color:red">'.'D***'.'</span>';
    } else
    {
        //print preg_replace('/(?<!,) {2,}/',' ', $words[$i]);
        preg_split('/\s+/', $words[$i]);
    }
}

//$arw =var_dump($words);
//print $arw;


?>

<a rel="canonical" href="url_rewritetest">Url without extention</a>

<?php

print '<br />';
$var = base64_encode(rand(1, 255));

print 'base64_encode: ' . $var;
print '<br />';
print 'base64_decode' . base64_decode($var);

?>
<?php

//
class Base64_Encryption
{
    /*
    For URL encryption, change the key with this one:
    private static $clef="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_";

    nota: it is possible to build the key with characters of their choice (key length must be equal to 64), while maintaining base64 encoding. Practice is not it?
    In this case take care to adapt the regex accordingly (see bold line).
    */
    private static $clef =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    public static function Crypter($a, $b)
    {
        if ($a == "" || $b == "")
            return $a;
        $e = self::$clef;
        $u = $e{self::Seed(0, 63, microtime(true) . $b)};
        $f = md5($b . $u, true);
        $l = self::Unorder($e, $f, 64);
        $t = $g = "";
        $c = strlen($a);
        $s = $c - $c % 3;
        $x = $l{self::Seed(0, 63, $f . microtime(true))};
        $n = ord($x) + ord($u);
        $v = self::Unorder("0123", $f . $n, 4);
        for ($r = $i = 0; $i < $s; $i += 3, $r++)
        {
            $g = (ord(($a{$i} ^ $l{($n + $r + 1) % 64})) << 16) + (ord(($a{$i + 1} ^ $l{($n +
                $r + 2) % 64})) << 8) + (ord(($a{$i + 2} ^ $l{($n + $r + 3) % 64})));
            $g = array(
                $v{0} => $l{$g >> 18},
                $v{1} => $l{($g >> 12) & 63},
                $v{2} => $l{($g >> 6) & 63},
                $v{3} => $l{$g & 63});
            ksort($g);
            $t .= join($g);
        }
        switch ($c - $s)
        {
            case 1:
                $g = ord(($a{$i} ^ $l{($n + $r + 4) % 64})) << 16;
                $v = self::Unorder("01", $f, 2);
                $g = array($v{0} => $l{$g >> 18}, $v{1} => $l{($g >> 12) & 63});
                ksort($g);
                $t .= join($g);
                break;
            case 2:
                $g = (ord(($a{$i} ^ $l{($n + $r + 4) % 64})) << 16) + (ord(($a{$i + 1} ^ $l{($n +
                    $r + 5) % 64})) << 8);
                $v = self::Unorder("012", $f, 3);
                $g = array(
                    $v{0} => $l{$g >> 18},
                    $v{1} => $l{($g >> 12) & 63},
                    $v{2} => $l{($g >> 6) & 63});
                ksort($g);
                $t .= join($g);
                break;
        }
        $c = strlen($t);
        $r = $c - self::Seed(0, $c - 1, $b . $c);
        return substr_replace($t, $x . $u, -$r, -$r);
    }
    public static function Decrypter($a, $b)
    {
        /*
        For URL encryption, change the regex with this one:
        if(!preg_match("/^[a-zA-Z0-9_-]+$/",$a)||$b=="")return $a;
        */
        if (!preg_match("/^[a-zA-Z0-9\/+]+$/", $a) || $b == "")
            return $a;
        $c = strlen($a) - 2;
        $mm = self::Seed(0, $c - 1, $b . $c);
        $u = $a{$mm + 1};
        $m = ord($a{$mm}) + ord($u);
        $a = substr($a, 0, $mm) . substr($a, -($c - $mm));
        $e = self::$clef;
        $ff = md5($b . $u, true);
        $l = self::Unorder($e, $ff, 64);
        $v = self::Unorder("0123", $ff . $m, 4);
        $k = array(
            "0123",
            "0132",
            "0213",
            "0312",
            "0231",
            "0321");
        switch ($v{0})
        {
            case 0:
                $v = $v == "0231" ? $k[3] : ($v == "0312" ? $k[4] : $v);
                break;
            case 1:
                $v = $v == "1203" ? self::ReverseA($k[2]) : ($v == "1230" ? self::ReverseA($k[3]) :
                    ($v == "1302" ? self::ReverseA($k[4]) : (($v == "1320" ? self::ReverseA($k[5]) :
                    $v))));
                break;
            case 2:
                $v = $v == "2013" ? self::ReverseB($k[0]) : ($v == "2031" ? self::ReverseB($k[1]) :
                    ($v == "2130" ? self::ReverseB($k[3]) : ($v == "2310" ? self::ReverseB($k[5]) :
                    $v)));
                break;
            case 3:
                $v = $v == "3012" ? self::ReverseC($k[0]) : ($v == "3021" ? self::ReverseC($k[1]) :
                    ($v == "3102" ? self::ReverseC($k[2]) : ($v == "3201" ? self::ReverseC($k[4]) :
                    $v)));
                break;
        }
        $d = $g = "";
        $f = 0;
        while ($c % 4 !== 0)
        {
            $a .= "=";
            $c = strlen($a);
            $c = $c - 4;
            $f++;
        }
        ;
        for ($r = $i = 0; $i < $c; $i += 4, $r++)
        {
            $q = array(
                $v{0} => $e{strpos($l, $a{$i})},
                $v{1} => $e{strpos($l, $a{$i + 1})},
                $v{2} => $e{strpos($l, $a{$i + 2})},
                $v{3} => $e{strpos($l, $a{$i + 3})});
            ksort($q);
            $g = (strpos($e, $q[0]) << 18) + (strpos($e, $q[1]) << 12) + (strpos($e, $q[2]) <<
                6) + (strpos($e, $q[3]));
            $d .= (chr($g >> 16) ^ $l{($m + $r + 1) % 64}) . (chr(($g >> 8) & 255) ^ $l{($m +
                $r + 2) % 64}) . (chr($g & 255) ^ $l{($m + $r + 3) % 64});
        }
        switch ($f)
        {
            case 1:
                $v = self::Unorder("012", $ff, 3);
                $v = $v == "120" ? "201" : ($v == "201" ? "120" : $v);
                $q = array(
                    $v{0} => $e{strpos($l, $a{$i})},
                    $v{1} => $e{strpos($l, $a{$i + 1})},
                    $v{2} => $e{strpos($l, $a{$i + 2})});
                ksort($q);
                $g = (strpos($e, $q[0]) << 18) + (strpos($e, $q[1]) << 12) + (strpos($e, $q[2]) <<
                    6);
                $d .= (chr($g >> 16) ^ $l{($m + $r + 4) % 64}) . (chr(($g >> 8) & 255) ^ $l{($m +
                    $r + 5) % 64});
                break;
            case 2:
                $v = self::Unorder("01", $ff, 2);
                $q = array($v{0} => $e{strpos($l, $a{$i})}, $v{1} => $e{strpos($l, $a{$i + 1})});
                $g = (strpos($e, $q[0]) << 18) + (strpos($e, $q[1]) << 12);
                $d .= (chr($g >> 16) ^ $l{($m + $r + 4) % 64});
                break;
        }
        return $d;
    }
    private static function Unorder($x, $b, $c)
    {
        $w = 0;
        $y = strlen($b);
        for ($i = 0; $i < $c; $i++)
        {
            $w = ($w + ord($x[$i]) + ord($b[$i % $y])) % $c;
            $j = $x[$i];
            $x[$i] = $x[$w];
            $x[$w] = $j;
        }
        return $x;
    }
    private static function ReverseA($a)
    {
        return strrev(substr($a, 0, 2)) . substr($a, -2);
    }
    private static function ReverseB($a)
    {
        return substr(self::ReverseA($a), 0, 1) . strrev(substr(self::ReverseA($a), 1, 2)) .
            substr(self::ReverseA($a), -1);
    }
    private static function ReverseC($a)
    {
        return substr(self::ReverseB($a), 0, 2) . strrev(substr(self::ReverseB($a), 2, 3));
    }
    private static function Seed($a, $b, $c)
    {
        $d = unpack("Na", hash("crc32", $c, true));
        return round((($d['a'] & 2147483647) / 2147483647.0) * ($b - $a)) + $a;
    }
}

/*
pour crypter :  Base64_Encryption::Crypter("Hello World","My Key");
pour décrypter : Base64_Encryption::Decrypter("dC+rrmVuZDs/gf8x4","My Key");
*/
print '<br />';
print $mycryp = Base64_Encryption::Crypter(rand(1, 255), FMCKYPTKEY);
print '<br />';
print Base64_Encryption::Decrypter($mycryp, FMCKYPTKEY);
print '<br />';


$valget = 'YWBY9EAgNJHztpajwt8HTw==';
function encrypt($data)
{
    $key = FMCKYPTKEY; // Clé de 8 caractères max
    $data = serialize($data);
    $td = mcrypt_module_open(MCRYPT_DES, "", MCRYPT_MODE_ECB, "");
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $key, $iv);
    $data = base64_encode(mcrypt_generic($td, '!' . $data));
    mcrypt_generic_deinit($td);
    return $data;
}
print $valgetcrypted = encrypt($valget);
function decrypt($data)
{
    $key = FMCKYPTKEY;
    $td = mcrypt_module_open(MCRYPT_DES, "", MCRYPT_MODE_ECB, "");
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $key, $iv);
    $data = mdecrypt_generic($td, base64_decode($data));
    mcrypt_generic_deinit($td);

    if (substr($data, 0, 1) != '!')
        return false;

    $data = substr($data, 1, strlen($data) - 1);
    return unserialize($data);
}
print '<br />';
print $valgetdecrypted = decrypt('YWBY9EAgNJHztpajwt8HTw==')

?>
 <?php

print '<br />';
require_once 'Net/URL.php';
$url = new Net_URL('freight?freightid=');
$url->setOption('encode_query_keys', true);
print_r($url->querystring);
print 'ok';
print '<br />';

function removeAllValuesMatching(array $arr, $value)
{
    $keys = array_keys($arr, $value);
    foreach ($keys as $key)
    {
        unset($arr[$key]);
    }
    return $arr;
}
$matchval = 1;
$tsql = "CALL __gET_TTR_SUPPORTED_FCAT_ONEROW(:ttrid)";
$tparams = array(':ttrid' => 18);
$result = DatabaseHandler::GetRow($tsql, $tparams);
$myarray = array(
    $result['cat1'],
    $result['cat2'],
    $result['cat3'],
    $result['cat4'],
    $result['cat5'],
    $result['cat6'],
    $result['cat7'],
    $result['cat8'],
    $result['cat9'],
    $result['cat10'],
    $result['cat11'],
    $result['cat12'],
    $result['cat13'],
    $result['cat14'],
    $result['cat15'],
    $result['cat16'],
    $result['cat17'],
    $result['cat18']);

$myarray1 = Util::removeAllValuesMatching($myarray, 0);
$myarray2 = Util::removeAllValuesMatching($myarray1, 'NULL');
foreach ($myarray2 as $value)
{
    switch ($value)
    {
        case 1:
            print '1this';
            break;

        case 2:
            print 2;
            break;

        case 3:
            print 3;
            break;

        case 4:
            print 4;
            break;

        case 5:
            print 5;
            break;

        case 6:
            print 6;
            break;

        case 7:
            print 7;
            break;

        case 8:
            print 8;
            break;

        case 9:
            print 9;
            break;

        case 10:
            print 10;
            break;

        case 11:
            print 11;
            break;

        case 12:
            print 12;
            break;

        case 13:
            print 13;
            break;

        case 14:
            print 14;
            break;

        case 15:
            print 15;
            break;

        case 16:
            print 16;
            break;

        case 17:
            print 17;
            break;

        case 18:
            print 18;
            break;

    }
}


$posone = Util::checkvalue($matchval, $myarray2);
switch ($posone)
{
    case true:
        print $matchval . '...' . $result[$i]['ttr_infosmails'];
        break;
}

//print 'CEGT'. $result[$i]['cat1'].'<br />';
/*
foreach ($myarray2 as $value) {
//echo "Valeur : $value<br />\n";
//print '<br />';
switch($value)
{
case 1:
print '1this'.$result[$i]['ttr_infosmails'] ;
break;

case 2:
print 2;
break;

case 3:
print 3;
break; 

case 4:
print 4;
break;  

case 5:
print 5;
break;

case 6:
print 6;
break;

case 7:
print 7;
break; 

case 8:
print 8;
break;

case 9:
print 9;
break;

case 10:
print 10;
break;

case 11:
print 11;
break; 

case 12:
print 12;
break;  

case 13:
print 13;
break;

case 14:
print 14;
break;

case 15:
print 15;
break; 

case 16:
print 16;
break;

case 17:
print 17;
break;

case 18:
print 18;
break; 

}
} */


/*
for($i=0 ; $i<count($myarray2); $i++){

print $myarray2[$i];
/*
switch($myarray2[$i]){

case 2:
print 2;
break;
case 17:
print 17;
break;
case 16:
print 16;
break;    
}

}
*/
// Search
//$poszero = array_search(0,$myarray);
//unset($myarray[$poszero]);
// Search
//$posNULL = array_search('NULL',$myarray);
//unset($myarray[$posNULL]);
//print_r($myarray2);


?>
<?php

print '<br />';
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

?>
<?php

$var = fm_convertcurrency(150, 'EUR', 'GBP');
print 'your converted value from 1 EUR to GBP is ' . number_format((float)$var,
    2, ',', '') . '<br/><br/>';
echo 'your converted value from 1 EUR to USD is ' . fm_convertcurrency(1, 'EUR',
    'USD') . '<br/><br/>';
echo 'your converted value from 1 USD to GBP is ' . fm_convertcurrency(1, 'USD',
    'EUR') . '<br/><br/>';
echo 'your converted value from 1 PKR to INR is ' . fm_convertcurrency(1, 'PKR',
    'GBP') . '<br/><br/>';

?>
<input type="number" placeholder="Number only" pattern="\d*" required="number" step="1" />
   
   <?php

print '<br />';
require_once 'I18Nv2/Negotiator.php';

//$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-US,en-GB,en;q=0.5,de';
//$_SERVER['HTTP_ACCEPT_CHARSET']  = 'utf-8,iso-8859-1;q=0.5';

$neg = new I18Nv2_Negotiator;

echo "User agents preferred language:" . $lang = $neg->getLanguageMatch() .
    '<br />';

echo "User agents preferred country for language:" . $lang . "" . $neg->
    getCountryMatch($lang) . "<br />";

echo "User agents preferred locale:" . $neg->getLocaleMatch() . '<br />';

echo "User agents preferred charset:" . $neg->getCharsetMatch() . "<br />";

?>

<?php

print '<br />';
require_once 'Net/URL/Mapper.php';

$m = Net_URL_Mapper::getInstance();

$path = 'testb/*(section)';
$defaults = array(
    'controller' => 'testb',
    'action' => 'test',
    'section' => '#toc',
    );

$m->connect($path, $defaults);
var_dump($m->match($_SERVER['REQUEST_URI']));
print '<br />';
print 'MAPPED';
print '<br />';
$ms = Net_URL_Mapper::getInstance();
$ms->connect('?:qsrt/:value', array(
    'page' => 'freight.php',
    'year' => date('Y'),
    'month' => date('m')));

$url2 = $ms->generate(array(
    'page' => 'freight.php',
    'qsrt' => 'freightid',
    'value' => rand(1, 999),
    )); // blog/archives/2008/06
print 'Url generate: ' . $url2;
print '<br />';
//$md = Net_URL_Mapper::getInstance();
//$md->connect('freight/:freightid', array('controller' => 'freight', 'action' => 'freightid'));
//var_dump($md->match($_SERVER['REQUEST_URI']));

//EUR(€)
$currencystr = 'EUR(€)';
//$currencycode =
print '<br />' . Util::fmsubstrCurrencyCode($currencystr);
$amount = 108.80;
print '<br />' . Util::fmPayPercent(50.89);

function in_array_all($needles, $haystack)
{
    return !array_diff($needles, $haystack);
}
$arr1 = array(
    rand(2, 7),
    rand(1, 5),
    rand(0, 9));
$arr2 = array(
    5,
    8,
    3,
    1,
    2,
    6,
    7);
//$doublearray =array(array(5,8,3,1,2,6,7),5,8,3,1,2,6,7);
$res = in_array_all($arr1, $arr2); //true, all present
switch ($res)
{
    case true:
        print '<br />' . 'Value ok';
        break;
    case false:
        print '<br />' . 'Value not set';
        break;
}
$arr3 = array(
    3,
    2,
    5,
    9);
$arr4 = array(
    5,
    8,
    3,
    1,
    2);
$res2 = in_array_all($arr3, $arr4); //false, since 9 is not present
switch ($res2)
{
    case false:
        print '<br />' . 'Value nop';
        break;
}
print '<br />';
$search = 'Cars$$$ 555 2014/09/07 #FROM%@ me';
print $search;
$field = 'freightname';
print '<br />';

Util::search_word_with_OR($search, $field);
//print '<br />';
//Util::FMStrDigit($search);


?>
<?php

require_once dirname(dirname(__file__)) . '/public/header.php';
ob_start();
$identifier = '';
$i = 0;
while ($i < 7)
{
    $identifier .= rand(0, 9);
    $i++;
}
$content .= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>?| Register ref:?</title>
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
    <br />
    <br />
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Transporter name :</td>
            <td style="width:36%">?&nbsp;?</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Company name :</td>
            <td style="width:36%">?</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Company Id :</td>
            <td style="width:36%">?</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Adresse :</td>
            <td style="width:36%">
                  ?<br>
                   ? <br>
                ?<br>
            </td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Email :</td>
            <td style="width:36%">?</td>
        </tr>
        <tr>
            <td style="width:45%;"></td>
            <td style="width:19%; ">Phone :</td>
            <td style="width:36%">?</td>
        </tr>
    </table>
 <br />
    <br />
    <br />
    <i>
        <b><u>Object </u>: &laquo; Invoice &raquo;</b><br />
         Invoice  no:?<br />
        Client no :?<br />
    </i>
    <br />
    <br />
    Dear  transporter,<br />
    <br />
    <table cellspacing="0" style="width: 100%; text-align: left;font-size: 10pt">
        <tr>
            <td style="width:100%; padding:10px">
        <table  style="width:100%;">
            <tr style="background:#eee;">
                <td style="width:8%;padding: 2mm;"><b>Sl. No.</b></td>
                <td style="padding: 2mm;width:27%;"><b>Product</b></td>
                <td style="width:15%;padding: 2mm; "><b>Quantity</b></td>
                <td style="width:15%;padding: 2mm;"><b>Rate</b></td>
                <td style="width:15%;padding: 2mm;"><b>Total</b></td>
            </tr>
            </table>
             
            <table style="width:100%;">
            <tr style="border-bottom: 1px solid grey;">
                <td style="width:8%;border-bottom: 1px solid #ccc;">1</td>
                <td style="width:27%;border-bottom: 1px solid #ccc;text-align:left; padding-left:10px;">Software Development<br />Description : Upgradation of telecrm</td>
                <td class="mono" style="width:15%;border-bottom: 1px solid #ccc;">1</td>
                <td style="width:15%;border-bottom: 1px solid #ccc;" class="mono">157.00</td>
                <td style="width:15%;border-bottom: 1px solid #ccc;" class="mono">157.00</td>
            </tr>          
            <tr>
                <td colspan="3"></td>
                <td></td>
                <td></td>
            </tr>
             
            <tr>
                <td colspan="3"></td>
                <td style="border-right: 1px solid #ccc;">Total :</td>
                <td style="border-right: 1px solid #ccc;">157.00</td>
            </tr>
        </table>
            Total Amount :
            <table style="width:100%;">
                <tr>
                    <td style="text-align:left; padding-left:10px;">One  Hundred And Fifty Seven  only</td>
                    <td style="width:15%;border: 2px solid #ccc;">USD</td>
                    <td style="width:15%;border: 2px solid #ccc;" class="mono">157.00</td>
                </tr>
            </table>    
      
            
            </td>
        </tr>
    </table>
    <br />
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
try
{
    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
    $html2pdf->writeHTML($content);
    ///$html2pdf->Output();
    $html2pdf->Output('ttr_pdf/' . (int)$identifier . '' . '.pdf', 'F');
}
catch (HTML2PDF_exception $e)
{
    echo $e;
    exit;
}
/*
//$content = ob_get_clean();
echo '0K' . '<br />';
$sql = 'CALL count_all_freight()';
// Execute the query and return the results
$row = DatabaseHandler::GetAll($sql);
for ($i = 0; $i < count($row); $i++)
 {
    $countryin = $row[$i]['Countryin'];
    $statein = $row[$i]['Statein'];
    $cityin=$row[$i]['Regionin'];
    $address = "$cityin+$statein+$countryin";
    $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$address."&sensor=false";
   
    $countryout = $row[$i]['Countryin'];
    $stateout = $row[$i]['Statein'];
    $cityout= $row[$i]['Regionin'];
    $addressout = "$cityout+$stateout+$countryout";
    $details_urlout = "http://maps.googleapis.com/maps/api/geocode/json?address=".$addressout."&sensor=false";

   
  $chin = curl_init();
  curl_setopt($chin, CURLOPT_URL, $details_url);
  curl_setopt($chin, CURLOPT_RETURNTRANSFER, 1);
  $responsein = json_decode(curl_exec($chin), true);


    $chout = curl_init();
  curl_setopt($chout, CURLOPT_URL, $details_urlout);
  curl_setopt($chout, CURLOPT_RETURNTRANSFER, 1);
  $responseout = json_decode(curl_exec($chout), true);

// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
if (($responsein['status'] != 'OK') && ($responseout['status'] != 'OK') ) 
 {
  print 'Fail'; //echo ("addMarker(0,0,'<b>Me</b><br/>Too',0,0,'<b>SEC</b><br/>Too');\n");
 }
else{
$latLngin = $responsein['results'][0]['geometry']['location'];
$latLngout = $responseout['results'][0]['geometry']['location'];
$latin = $latLngin['lat'];
$lngin = $latLngin['lng'];
$latout = $latLngout['lat'];
$lngout = $latLngout['lng'];
print "IN". ("$latin,$lngin ")."<br />"; 
print "OUT".("$latout,$lngout")."<br />"; 
///echo ("addMarker($latin,$lngin,'<b>Me</b><br/>Too',$latout,$lngout,'<b>Selec</b><br/>Too');\n"); 
 }
}

print $address = 'Paris+France'.'<br />';
/*echo "latitude: " . $lat . " longitude: " . $long;

$address = 'Paris+France';
$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$address."&sensor=false";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $details_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = json_decode(curl_exec($ch), true);

// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
if ($response['status'] != 'OK') 
{
print 'Faillure';
}
else{
$latLng = $response['results'][0]['geometry']['location'];

$lat = $latLng['lat'];
$lng = $latLng['lng']; 
print 'LATITUDE:'.$lat.'  --LONGITUDE:'.$lng; 
}

//print_r($response);
//print_r($response['results'][0]['geometry']['location']);
$sql ="CALL unite_test()";
$db = DatabaseHandler::GetRow($sql);

print $ondate = $db['altdatetime'].'<br />';
print $beforedate = $db['beforedate'].'<br />';
print $staytodate = $db['freight_Stay_to'].'<br />';

//$valset = Util::matchdateinput($db['altdatetime'],$db['beforedate'],$db['freight_Stay_to']);
//print($valset) .'<br />';


$mypcdatetime = fm_freight::load_current_datedate();

$d1 = new DateTime("2014-5-5  20:54:02");
$d2 = new DateTime("2014-07-20 20:09:00");
$diff = $d1->diff($d2);
$diffa = $d1->diff($d2);
$diffm = $d1->diff($d2);
$diffh = $d1->diff($d2);
$diffi = $d1->diff($d2);
$diffs = $d1->diff($d2);

echo $nb_jours = $diff->d . "day(s)&#160;";
echo $nb_mois = $diffm->m . "months&#160;";
echo "<br>";


 */
 $uri = $_GET['visit'];
 //$encode =Link::fm_urlget($v,false);
 //print $encode .'coded'.'<br>';
 $decode  = Link::fm_urlget($uri,true);
 print $decode.'/'.$uri.'<br>';    
?>





    </body>
</html> 