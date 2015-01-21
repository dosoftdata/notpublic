<?php
require_once 'header.php';
$transpid =$_COOKIE['tusrid'];
$transpnm = $_COOKIE['tusrname'];
?>
  <title><?= SITE_NAME?> | <?= $transpnm;?> </title>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
require_once HELPERS_DIR .'logged-nav.p.inc'; 
?>
             <div id="middle" style="margin-top: 0px;">
 <div id="middle_container">
 <div id="t-home-content" class="rounded7">
 <style type="text/css">
 a{
    text-decoration: none;
 }
 </style>
 
 <?php 
 //$_COOKIE["tusrid"]
  Fm_User::__TTR_LOAD_HOMEDATA($transpid); 
  Fm_User::__gET_TTR_ACCOUNT_ACTIVATION_REMAINDER_home($transpid);
  Fm_User::t__gET_TTR_CHECKPAYMENT_30($transpid);
?>
 
 
 </div>
  </div>
  </div> 
    
    
  <script type="text/javascript">
    $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'1040',
                height: '500',
                autoDimensions:false
                //padding:'10'  
            });         
		});
	</script>

<?php require_once 'footer.php';?> 
    
    
   
    
    
    


