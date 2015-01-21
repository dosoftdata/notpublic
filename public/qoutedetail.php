<?php
require_once 'header.php';
$quoteid=Util::StrGet('quoteid');
?>
  <title><?= SITE_NAME?> | Quotes Detail</title>
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
    <div id="middle">
 <div id="middle_container" >
 <div id="error_box_main" class="arrow_box">
  </div>
<div id="f1_main_content" class="rounded7" style="background: none;height: 380px; margin-top: 20px; padding-top: 0px;">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Quote Details
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 450px;height: 300px;border-right: 1px dotted grey;">
<table style="width: 90%; color: black;" >

<?php
fm_freight::load_freight_quoted_details($quoteid)
?>
</div>


    </div></div>  </div> 
<?php  
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
        
?>