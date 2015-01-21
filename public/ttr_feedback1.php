<?php
require_once 'header.php';?>
  <title>Freightmeta | Transporter Reigister</title>
    
    
    </head>
    <body style="word-break: normal;">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
 <?php 
usrlogin::fmpagelogincontrole(HELPERS_DIR .'nav.php',HELPERS_DIR .'logged-nav.php', null);
//require_once HELPERS_DIR .'i18n.php'; 

?> 
<div id="middle"> 	
	<div id="middle_container" class="rounded7">
     <div class="row" style=" position: relative;margin-top: 4%; height: 50%;">
         <table cellspacing="0" style="width: 100%;   text-align: justify; color: black; font-size: 10pt">
                    <tr >
                    <td style="width: 25%;"></td>
                     <td style="width: 50%;">
                     
                     <div class="thickborder rounded" style="padding:10px; height:280px;padding-bottom: 80px; width:440; float:left; padding-left: 30px; position:relative">
					<div class="headerbox2" style="margin-left: -20px; margin-top: -5px; font-size: 13pt; text-align: center;">Transport Provider Registration</div>
					<div class="fw" style="margin-top:0px; clear:both; color: #5aa4cc; text-align: center; font-size: 25pt; ">
						Thank YOU!
					</div>
					<div style="margin-top:3px; clear:both;font-size: 13pt; text-align: center;">
				     <strong> An account confirmation has been sent!</strong><br />
                     <strong class="fw">to email address:&#160;&#160;<a class="fz11"><?= fm_freight::get_email_session(SESSIONID) ?>!</a> </strong>
					</div>
                    <div style="margin-top:10px; clear:both; font-weight: lighter; font-size: 10pt; text-align: center;">
					Please ckeck'it to activate your freightmeta<span style="color: grey;">.com</span> account.
					</div>
					<div style="margin-top:3px; clear:both;font-size: 14pt;text-align: center;">
					 You can Login from now to quote!
					</div>	<br /><br /><br />				
	
					<div style="position:absolute; bottom:10px; right:220px; top: 220px;">
						<div class="" style="float:left;">
							<button class="button_link btn-primary ui-button ui-widget" style="color: #FFFFFF;" onclick="gotoquote()" >Go to Freight List</button>
						</div>
									
					</div>
	
				</div>
                
                     </td> 
                     <td style="width: 25%;"></td>
                    </tr>
         </table>
         </div>
    		<div class="clear"></div>
		</div>	
	</div>
 <?php    
    require_once HELPERS_DIR .'footer_content.php'; 
    require_once HELPERS_DIR .'foot-main-content.php'; 
    DatabaseHandler::Close();
    // Output content from the buffer
    //flush();
    //ob_flush();
    //ob_end_clean();
        
?>
    </body>
</html>