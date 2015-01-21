<?php
require_once 'header.php';

$fid=Util::StrGet('ftoq');
$tid=Util::StrGet('fttrq');
usrlogin::check_session_login();
usrlogin::sessionfreightdivset();
usrlogin::access_quotepage_TTR();
?>

 <script type="text/javascript">
// creates and shows the map

</script>
<script type="text/javascript">
//$("#fquote").ForceNumericOnly();

</script>

 <input type="hidden" id="ttrid" value="<?= $tid?>"  />
 <input type="hidden" id="fid" value="<?= $fid?>"  />
 
 <style type="">
 .item{
	width:100%;
	border-bottom: 1px solid #e5e5e5;
}
     .list-left{
	float:left;
	width:40%;
	text-align:left;
	font-weight:bold;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
.list-right{
	float:left;
	width: 50%;
	text-align:left;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
textarea#qnote {
    position: relative;
    margin-top: 10px !important;
	width: 350px;
	height: 70px;
	border: 3px solid #cccccc;
	padding: 5px;
    resize: none;
}
.successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;	
	padding: 2px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 3px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
}
.failurebox {
	background:url(../public/images/gen/error2.png);
	background-repeat:no-repeat;
	border: 2px solid #d30000; 
	background-color: #ffeee9; 
	padding: 2px; 
	padding-left: 50px;
	padding-top: 8px;
	text-align: left;
	color:#d30000;
	margin-bottom: 5px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
}
.failurebox p{
    font-size:16pt;
}
 </style>       

         <?php 
fm_freight::load_freight_details_after_loginq($fid,$tid);

?> 
 </div>  
 </div> 
<script type="text/javascript">
    function quotemore()
{
  window.location.replace('freight_list')
}//end fun

</script>
 <?php ;
 require_once 'footer.php';
 
 ?>