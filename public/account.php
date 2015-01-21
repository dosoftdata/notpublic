<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | My Account</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
?> 
    
      <div id="middle">
 <div id="middle_container" style="top: 0px !important;">
 
 <div id="error_box_main">
  
  </div>
  <div id="account_container" >
 <div id="account_container_customer" >
  <h1  class="rounded50_2size h1"> Customer registration</h1>
   <ul id="top_content_right" style="padding-right: 30px;width: 430px;padding-top: 20px;">
  <li>
  <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
  <p><span style="font-weight: bold;">Low prices</span> <span style="font-weight: lighter;"> - Save money on your transportation.</span></p>
  </li>
  <li style="height: 35px;">
<img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
<p ><span style="font-weight: bold;">No phones and No delays</span> <span style="font-weight: lighter;"> - Click Transfer through the platform Freightmeta free.</span></p>
  </li>
  <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
   <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
   <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
  </ul>
 <h2><a  href="faq" target="_parent" style="color: #5AA5CC; text-decoration: underline;" class="fr pl">Learn more</a></h2>
 <a href="add_freight" target="_parent"><div class="fr btn-primary rounded5"> List freight</div></a>
 </div> 
 
 <div id="account_container_register">
   <h1  class="rounded50_2size"> Transporter registration</h1>
   <ul id="top_content_right" style="padding-top: 20px;">
  <li>
  <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
  <p><span style="font-weight: bold;">Low prices</span> <span style="font-weight: lighter;"> - Save money on your transportation.</span></p>
  </li>
  <li style="height: 35px;">
<img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
<p ><span style="font-weight: bold;">No phones and No delays</span> <span style="font-weight: lighter;"> - Click Transfer through the platform Freightmeta free.</span></p>
  </li>
  <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
   <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
   <li style="height: 35px;">
 <img alt="Best price" src="<?= SITE_URL?>public/images/gen/tick.gif" />
 <p><span style="font-weight: bold;">Easy management of your cargo</span ><span style="font-weight: lighter ;"> - Subscribe and get one Freightmeta account.</span> </p>
  </li>
  </ul>
 <h2>
 <a href="t-learnmore" target="_parent" style="color: #5AA5CC; text-decoration: underline;" class="fr pl">Learn more</a></h2>
 <a href="t-register" target="_parent"><div class="fr btn-primary rounded5" > Register as Transporter</div></a>
 </div>
  </div>
  </div>
  </div>
  


<?php require_once 'footer.php';?>