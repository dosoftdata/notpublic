<?php
print '<div id="f1_main_content" class="rounded7" style="background: none;height: 480px; margin-top: 20px; padding-top: 0px;">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Password update...
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">
<div class="successbox hidden">
    Passowrd succefully changed!
    </div>

<div class="error" style="display:none;">
      <img src="images/gen/warning.gif" alt="Warning!" width="24" height="24" style="float:left; margin: -5px 10px 0px 0px; " />
      <span></span>.<br clear="all"/>
    </div>
<div class="formwidth" style="padding:10px 10px 10px 10px">
<div id="receiver-password" class="receiver"></div>
<form action="" method="post" onsubmit="return false;" id="form-password">
<input name="cpwdurl" type="hidden" id="cpwdurl" value="tpwd"/>
<input name="customerid" type="hidden" id="customerid" value="'.$transpid.'"/>
<div class="row">
<div class="formlabel">Old Password:<span class="requiredtxt">*</span></div>
<div class="forminput">
<input class="input" name="old_passwd" type="password" class="control required" id="old_passwd"/></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="sep" style="width:90%"></div>
<div class="row">
<div class="formlabel">New Password:<span class="requiredtxt">*</span></div>
<div class="forminput">
<input  name="new_passwd" type="password" class="required password control input" id="usrpwd"/>
</div>
<div class="clear"></div>
</div>
<div class="row">

<div class="formlabel">New Password Confirm:</div>
<div class="forminput">
<input equalTo="#usrpwd" name="new_passwd2" type="password" class="control required input" id="new_passwd2"/></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="sep" style="width:90%"></div>
<div class="uibutton">
<button type="submit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" role="button" aria-disabled="false">
<span class="ui-button-text btn-primary">Change Password</span>
</button>
</div>
</form>
</div>
</div>
    </div>';
print '
  <script type="text/javascript" src="js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="js/mktSignup _login.js"></script>

<div class="clear"></div>
';
?>