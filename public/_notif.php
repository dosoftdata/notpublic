<?php
  require_once 'header.php';?>
  <title><?= SITE_NAME?> | Register ref:<?= '/'.date('m-Y'); ?></title>
   </head>
    <body>
      <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!-- This div is used to indicate the original position of the scrollable fixed div. -->
  
    <div id="middle">
    	
	<div id="middle_container" class="rounded7">
    <div class="row fw" style="">
    <div class="fl" style="width: 30%; padding: 5px;">
    <img src="images/bg/freightmeta2.jpg" width="200px" height="50px" alt="Freightmeta.com" />
    </div>
    <div class="fl" style="width: 40%; padding: 5px;left: 33%;">
    <span class="notiftexth1 rounded5"> Notification</span>
    </div>
    <div class="clear"></div>
    </div>
    <div class="row fw" style="">
    Notification ref no:
    <?php
    $identifier = '';
    $i = 0;
    while ($i < 7) 
    {
      $identifier .= rand(0, 9);
      $i++;
    }

 ///print $identifier = (int) $identifier.'/'.date('m-Y');;
    
      print  'T'.$identifier = (int) $identifier.'/'.date('m/Y');
      
      
      ?>
    </div>
    <div class="row fw" style="">
    <div class="clear"></div>
    <div class="fl" style="width: 42.5%; padding: 5px; ">
    <div class="fw" style="">
    <h1> Freightmeta traspoter candidate</h1>
    <div class="place fl" style="width: 45%;">
    <strong>Company Name</strong><br />
    <strong>Company ID</strong><br />
    <strong>Company Address</strong><br />
    <strong>Company Email</strong><br />
    <strong>Company City</strong><br />
    <strong>Lastname</strong><br />
    <strong>Firstname</strong><br />
    </div>
    <div class="place fr" style="width: 2%; right: 58%;">
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    <span class="dot">:</span><br />
    </div>
    <div class="place fr" style="width: 52.2%;">
     <strong>1</strong><br />
    <strong>2</strong><br />
    <strong>3</strong><br />
    <strong>4</strong><br />
    <strong>5</strong><br />
    <strong>6</strong><br />
    <strong>7</strong><br />
    </div>
    <div class="clear"></div>
    </div>
    </div>
     <div class="fr"  style="width: 48%; padding: 5px;" >
    <div class="fw" style="">
     <h1>      <strong class="fwlighter">Freightmeta<span style="color: grey;">.com</span></strong></h1>
    <div class="place" style="width: 45%;">

    <strong class="fwlighter">Adminstration team</strong><br />
    <strong class="fwlighter">207 Regent Street</strong><br />
    <strong class="fwlighter">3rd Floor, W1B 3HH</strong><br />
    <strong class="fwlighter">London, uk</strong><br />
    <strong class="fwlighter">admin@freightmeta.com</strong><br />
    </div>
    <div class="clear"></div>
    </div>
    </div>
    </div>
    <div class="clear" ></div>
    <div class="row fw" style="">
    <h1>Please read freightmeta transporter rules below:</h1>
    </div>
    <div class="row fw" style="">
    <div style="">
    <p class="notiftext">Incenderat autem audaces usque ad insaniam homines ad haec, quae nefariis egere conatibus, Luscus quidam curator urbis subito visus: eosque ut heiulans baiolorum praecentor ad expediendum quod orsi sunt incitans vocibus crebris. qui haut longe postea ideo vivus exustus est.</p>

<p class="notiftext">Hanc regionem praestitutis celebritati diebus invadere parans dux ante edictus per solitudines Aboraeque amnis herbidas ripas, suorum indicio proditus, qui admissi flagitii metu exagitati ad praesidia descivere Romana. absque ullo egressus effectu deinde tabescebat immobilis.</p>

<p class="notiftext">Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita evisceratus ut cruciatibus membra deessent, inplorans caelo iustitiam, torvum renidens fundato pectore mansit inmobilis nec se incusare nec quemquam alium passus et tandem nec confessus nec confutatus cum abiecto consorte poenali est morte multatus. et ducebatur intrepidus temporum iniquitati insultans, imitatus Zenonem illum veterem Stoicum qui ut mentiretur quaedam laceratus diutius, avulsam sedibus linguam suam cum cruento sputamine in oculos interrogantis Cyprii regis inpegit.</p>
    </div>
    </div>
    <div class="row fw" style="">
    <div class="fw" style="">
    <div class="place fl"  style="width: 48%;">
    <div class="row fw">
     <h1>Signature request</h1>
     </div>
    <div class="row fw"></div>
    </div>
    <div class="place fr" style="width: 48%;">
    <strong class="fwlighter">
    Freightmeta<span style="color: grey;">.com</span>
    </strong><br />
    <strong class="fwlighter"></strong>
    Team
    </div>
    <div class="clear"></div>
    </div>
    </div>
    
    </div>
    </div><!---end doc--->
  <?php    
    require_once HELPERS_DIR .'foot-main-content.php'; 
    DatabaseHandler::Close();
    // Output content from the buffer
    //flush();
    //ob_flush();
    //ob_end_clean();
        
?>
    </body>
</html> 