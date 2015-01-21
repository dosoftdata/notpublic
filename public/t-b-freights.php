<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?>| </title>
    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
require_once HELPERS_DIR .'logged-nav.php';
?>
             <div id="middle">
 <div id="middle_container">
 <div id="t-home-content" class="rounded7">
 <ul>
 <li style="width: 950px;"><span style="margin-left: 600px;" > Transporter company ID  &#160;<?= "?";  ?></span></li>
 <li style="font-size: 30px;">
  Booked freight list:
 
 </li>
 <li>
 <div id="t-quoted-list-content" class="rounded7">
<table>
<tr>
<th style="width: 180px;">Freight name</th>
<th>Sender ame</th>
<th>From / to</th>
<th>Quoted date</th>
<th>Expire date</th>
<th>More details</th>
</tr>
<tr>
<td>
<span> Subcat name</span><br />
<span> Catname</span>
</td>
<td> Firstname</td>
<td>
<span>
City,Contry ->
</span><br />
<span>
City,Contry 
</span>
</td>
<td>Datetime</td>
<td> Datetime +counter</td>
<td>
<a style="font-size: 13px;"> More detail </a>
</td>
</tr>
</table>
 </li>
 </ul>
 </div>
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
    </body>
</html>    
    
   
    
    
    


