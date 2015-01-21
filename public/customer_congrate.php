<?php
require_once 'header.php';
$custid=$_COOKIE['susrid'];
//usrlogin::sessionvaltest();

//$custid =43;
?>
  <title><?= SITE_NAME?> | <?= $_COOKIE['cusrname']?></title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
require_once HELPERS_DIR .'logged-nav.p.inc';
?>
    
      <div id="middle" style="margin-top:27px;">
 <div id="middle_container">
  <div id="header_line" >

  <?php 
  
  fm_freight::just_add_freight($custid); 
  
  ?>
   
   
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 <link rel="stylesheet" type="text/css" href="<?= Link::Build('public/js/vendor/fancybox/source/jquery.fancybox.css?v=2.1.5'); ?>" media="screen" />
<script type="text/javascript" src="<?= Link::Build('public/js/vendor/fancybox/source/jquery.fancybox.js?v=2.1.5'); ?>"></script>
  <script type="text/javascript">
      $.noConflict();
		jQuery(document).ready(function($) {
            $('.fancybox').fancybox();    
		});//end scripts
        
       
</script> 
 <?php 
require_once HELPERS_DIR .'footer_content.php'; 
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
//flush();
//ob_flush();
//ob_end_clean();
        
?> 