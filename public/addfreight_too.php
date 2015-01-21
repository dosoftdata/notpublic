<?php
require_once 'header.php';
//session_start();
//if (!isset($_SESSION['add_freight_too']) )
//{
   // $_SESSION['add_freight_too'] = sha1('freightmeta');
//}
//freight upload script.
/*$maxsize=28480; 
if (!$_REQUEST['submit'])
{
    $error=" ";
}
else{
if (!is_uploaded_file($_FILES['upload_file']['tmp_name']) AND !isset($error)) {
    $error = "<b>You must upload a file!</b><br /><br />";
    unlink($_FILES['upload_file']['tmp_name']);
}
if ($_FILES['upload_file']['size'] > $maxsize AND !isset($error)) {
    $error = "<b>Error, file must be less than $maxsize bytes.</b><br /><br />";
    unlink($_FILESS['upload_file']['tmp_name']);
}
if (!isset($error)) {
    move_uploaded_file($_FILES['upload_file']['tmp_name'],
                       "uploads/".$_FILES['upload_file']['name']);
    print "Thank you for your upload.";
    exit;
}
else
{
    echo ("$error");
}
}
*/

?>
  <title><?= SITE_NAME?> |Add freight?</title>
  <style>
  
  
  
  </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
  <?php 
require_once HELPERS_DIR .'nav.php';
require_once HELPERS_DIR .'i18n.php';
///print 'ADD-FREIGHT-TOO SESSION'.$_SESSION['add_freight_too']; 
?>   
     <div id="middle" style="color: black;">
 <div id="middle_container" class="mainboxshadow" style="background: none;">
 
  <div class="container_2">
  <table cellpadding="0" cellspacing="0" border="0" >
  <div id="addfreight_container_title">
            <span style="color: #5aa5cc; position: relative; margin-left: 30px;margin-top: 5px; font-size: 35px;">
                Need Something Moved?
            </span>
            <br />
            <span style="position: relative; margin-left: 30px;margin-top: 0px; font-size: 14px; font-weight: lighter; color: black;" >
                Tell us what you need to move and receive free quotes from customer-rated transport providers. You can save upto 70%
            </span>
          </div>
  
  </table>
 <div class="grid_1 alpha pull_1 fl mainboxshadow">
   <form id="freightForm" type="actionForm" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>"  enctype="multipart/form-data" method="get" >
    <div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" style="color: black; padding-left: 20px 20px 20px 20px; border-bottom: 1px dotted grey;">
      <tr>
    <h1>Pickup and Delivery details: </h1>
   </tr>
       <th style="text-align: left;">
   Pickup detail:
   </th>
      <tr>
       <td class="label"><label for="mycountry">Home Country:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="mycountry" class="required" maxlength="70" name="mycountry" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Ormystate">Home State:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="Ormystate" class="input" maxlength="70" name="Ormystate" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Ormycity">Or Home City:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="Ormycity" class="required" maxlength="70" name="Ormycity" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="zip">Home Zip:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 100px;" id="Ormypostcode" class="required zipcode" maxlength="10" name="Ormypostcode" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Orrefdetail">Home Address:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 260px;" id="Orrefdetail" class="input" maxlength="50" name="Orrefdetail" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <th style="text-align: left;">
   Delivery detail:
   </th>
      </tr>
      <tr>
       <td class="label"><label for="Dscountry">Delivery Country:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="Dscountry" class="required" maxlength="70" name="Dscountry" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Dsmystate">Delivery State:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="Dsmystate" class="input" maxlength="70" name="Dsmystate" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Dsmycity">Or Delivery City:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 250px;" id="Dsmycity" class="required" maxlength="70" name="Dsmycity" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Dsmypostcode">Delivery Zip:</label>
       </td>
        <td class="field">
        <span>
          <input style="width: 100px;" id="Dsmypostcode" class="required zipcode" maxlength="10" name="Dsmypostcode" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
      <tr>
       <td class="label"><label for="Dsrefdetail">Delivery Address:</label>
       </td>
        <td class="field">
        <span>
          <input class="required" style="width: 260px;" id="Dsrefdetail" class="input" maxlength="50" name="Dsrefdetail" size="20" type="text" tabindex="1" value="" />
          </span>
        </td>
      </tr>
    </table>
 
    <table  cellpadding="0" cellspacing="0" border="0" style="color: black; padding-left: 30px;">
     <table cellpadding="0" cellspacing="0" border="0" style="color: black;">
      <tr>
    <h1>User register : </h1>
   </tr>
   </table>
   <table cellpadding="0" cellspacing="0" border="0" style="color: black; margin-top: -30px; padding-left: 350px;">
    <td>
   <a class="fl" href="#" style="color: #5aa5cc; font-size: 14px; font-style: italic; text-decoration: underline;" title="My freightmeta Account"> I have freightmeta account</a>
   </td>
   </table>
  <table cellpadding="0" cellspacing="0" border="0" style="color: black; padding: 20px 20px 20px 20px; border-bottom: 1px dotted grey: ; ">
    <tr>
        <td class="label"><label  for="usrname">Username:</label></td>
        <td class="field">
          <input  class="required" maxlength="30" name="usrname" size="120" type="text" tabindex="3" value=""  style="width: 250px;"/>
        </td>
      </tr>
    <tr>
        <td class="label"><label  for="useremail">Email:</label></td>
        <td class="field">
          <input id="useremail" class="required email" maxlength="40" name="useremail" size="120" type="text" tabindex="3" value=""  style="width: 250px;"/>
        </td>
      </tr>
       <tr>
        <td class="label"><label  for="usrpwd">Passowrd:</label></td>
        <td class="field">
          <input id="usrpwd" class="required password" maxlength="40" name="usrpwd" size="120" type="password" tabindex="3" value=""  style="width:250px;"/>
        </td>
      </tr>
       <tr>
        <td class="label"><label  for="conusrpwd">Retype Password:</label></td>
        <td class="field">
          <input id="conusrpwd" class="required" equalTo="#usrpwd" maxlength="40" name="conusrpwd" size="120" type="password" tabindex="3" value=""  style="width: 250px;"/>
        </td>
      </tr>
       <tr>
        <td class="label"><label  for="usrfname">Firstname:</label></td>
        <td class="field">
          <input  id="usrfname"  class="required" maxlength="30" name="usrfname" size="120" type="text" tabindex="3" value=""  style="width: 250px;"/>
        </td>
      </tr>
    </table>
    <table cellpadding="0" cellspacing="0" border="0" style="color: black;">
      <tr>
    <h1>Terms & Conditions of services : </h1>
   </tr>
   <td class="field">
          <input type="checkbox"  name="rules"  id="rules"  class="required " maxlength="2" tabindex="1" value=""  style="width:20px;"/>
        </td>
        <td class="field">
         <label style="color: black;" for="rules" style="cursor:pointer">terms & conditions of services</label>
        </td>
   </table>
    <table >
         <tr>
        <td></td>
        <td>
          <script type="text/javascript" charset="utf-8">
  $(function() {
             
      $('#_back').click(function(){
        
        $('input').css("border-color","none");
          window.location='./add_freight.php';
        
      });    
  });
</script>
          <div class="buttonSubmit">
            <input class="button_fm" type="submit" id="stargetquote" name="startgettingqt" value="Start Getting Quotes" style="width: 140px;padding: 2px 2px 2px 2px;" tabindex="14" />
          </div>
        </td>
        <td>
          <div class="buttonSubmit">
            <input class="button_fm" type="submit" id="_back" onclick="add_freight.php" name="back" value="...Back" style="width: auto; padding: 5px 5px 5px 5px;" tabindex="14" />
          </div>
        </td>
        
      </tr>
    </table>
    
   </form>
 </div>
  <div class="grid_2 omega push_1 pull_2 fr" style="border: 2px solid yellowgreen;">
 <ul style="list-style: none;">
		<li><a class="fm_tvideo" href="http://www.youtube.com/watch?v=xFzIlAbmr1A?autoplay=1"><div id="addfreight_yt_video"></div></a></li>
	</ul>
 <div id="addfreight_how_it_work" style="border: 1px solid red; height: 300px;">
  ?
  </div>
 </div>
 <!-- Clear floated divs---!>
 <div class="clear"></div>
 </div>
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