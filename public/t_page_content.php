<?php
require_once 'header.php';
$transpid =$_COOKIE['tusrid'];
$transpnm = $_COOKIE['tusrname'];
//$transpid =29;
//$transpnm = 'President';
?>   
   <script type="text/javascript">
 
             
                   
		
</script>
  <title><?= SITE_NAME?> | Page content</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<style>
table, tr, td, th{
    border: none;
}
</style> 
 <style type="text/css">
 .successbox {
	background-color:#f4f4f4 !important;
	background-image:url(../public/images/gen/tick_small.png);
	border:2px solid #629f13 !important;
	font-weight:bold;
	font-size:16px;
	color: black;
    width: 290px;	
	padding: 10px; 
	padding-left: 45px;
	padding-top: 16px;
	padding-bottom: 15px;
	text-align: left;	
	margin-bottom: 15px;	
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
	background-repeat:no-repeat;
} 
  ul.ratelist{
     list-style: none;       
    }
    ul.ratelist li{
        display: table-cell;
        padding: 1px;  
    }
    input[type=checkbox]{
    cursor: pointer;
}
  </style>
    <div id="middle">
 <div id="middle_container" >
 <div id="error_box_main" class="arrow_box">
  </div> 
<?php 
 if(Util::StrGet('tpage'))
 {
    $setparam =Util::StrGet('tpage');
     switch($setparam)
     {
        case 'what':
    require_once HELPERS_DIR .'ttrpages/what.inc';
    break;
    case 'tpwdchange':
    require_once HELPERS_DIR .'ttrpages/tpwdchange.inc';
    break;
    case 'tacup':
    require_once HELPERS_DIR .'ttrpages/tacup.inc'; 
    Fm_User::__TTR_ACCOUNT_SELECT($transpid);
    break;
     case 'qfreight':
     require_once HELPERS_DIR .'ttrpages/qfreight.inc'; 
    break;
        case 'bfreight':
      require_once HELPERS_DIR .'ttrpages/bfreight.inc'; 
    break;
        case 'rsfreight':
      require_once HELPERS_DIR .'ttrpages/rsfreight.inc'; 
    break;
       case 'disship':
     require_once HELPERS_DIR .'ttrpages/disship.inc'; 
    
    break;
          case 'fees':
    require_once HELPERS_DIR .'ttrpages/fees.inc'; 
    
    break;
          case 'freightfees':
    
    break;
            case 'soldefreight':
    
    require_once HELPERS_DIR .'ttrpages/soldefreight.inc'; 
    print<<<sc
   
sc;
 
    break;
     }
    
 }
 else {
    
    include '../404.shtml';
 }

?>
  
  <script type="text/javascript">
  

  
  
 
  function tprocesspwdchant(){
    alert('Me');
  }
  
  
  
  </script>


    
    </div>
    </div>  
   
<?php  
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
        
?>