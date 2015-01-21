<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | <?=  'Username'?></title>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php require_once HELPERS_DIR .'logged-nav.p.inc';?>
<div id="middle" style="margin-top: 70px;">
<div id="middle_container" class="rounded7">
<div id="login_options" style="margin-top: -40px;">
<div class="fl"><?=  usrlogin::swelcome()?></a></div>
<?php 
require_once HELPERS_DIR .'user_profile_menu.inc'; 
?>
<div class="column" id="rightcolumn">
<div class="headerbox">Today freightmeta news </div>

</div>

</div></div>