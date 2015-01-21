<?php
print '<div id="f1_main_content" class="rounded7" style="background: none;height: 480px; margin-top: 20px; padding-top: 0px;border:none">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Transaction fees payment...
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">
<div id="contentq" style="width: 98%; padding: 10px;">
<div class="paycontent hidden">
<div class="paydialog diologrounder7">
<div class="inputdialog_header diologrounder7">
<div class="textbox" style="position: absolute; top: 2px; font-size: 17pt; font-weight: bold; text-align: center; left: 20px;">
Shipping sold</div>
<div class="fm_dialog_header_close fl diologrounder7" style="right:0px">X</div></div>
<div class="inputdialog_boby">
To sold the Shipping amount of <strong class="theamountof"></strong><br/>
<strong>Please:</strong>
Deposite in the IBAN below your amount<br />
<code class="payacount"></code>
<div class="fm_dialog_sep"></div>
I have my Payment Bank code:<br />
<label><input class="input fr validcode" type="number" name="payamout" id="payamout" placeholder="Validate payment code" value=""  align="center"  style="width:200px; float:right"/> <br /></label>
</div>
<div class="fm_dialog_sep"></div>
<div class="inputdialog_button_wrapper">
<div class="inputdialog_button_validate diologrounder7">Validate</div>
<div style="clear: both;"></div>
</div></div>

</div>
';
Fm_User::__gET_TTR_PAYMENTREQUEST_FREIGHT($transpid);
print'
</div>
</div>
    </div>';


?>