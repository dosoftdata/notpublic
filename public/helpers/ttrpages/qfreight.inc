<?php
print '<div id="f1_main_content" class="rounded7" style="border:none;background: none;height: 480px; margin-top: 20px; padding-top: 0px; ">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Quoted freight...
</div>
<div class="inputdialog diologrounder7 hidden" style="width:200px">
<div class="inputdialog_header diologrounder7">
<div style="position: absolute; top: 4px; font-size: 17pt; font-weight: bold; text-align: center; left: 20px;">
Edit Quote
</div>
</div>
&nbsp;
<div class="inputdialog_boby" >
<input class="control input required" type="number" name="quoteamout" id="quoteamout" placeholder="Quote Amount" value="" width="70%" align="center" /> <br />&nbsp;
<input class="control input required" type="datetime" name="quotevaliddate" id="quotevaliddate" placeholder="Stay until" value="" width="70%" align="center" /> <br />
</div>
<div class="fm_dialog_sep"></div>
<div class="inputdialog_button_wrapper" style="margin-top:30px">
<div class="inputdialog_button_no diologrounder7"style="margin-left: -10px;" >Cancell</div>
<div style="clear: both;"></div>
<div style="margin-left: 10px;" class="inputdialog_button_ok diologrounder7"> Save</div>
<div style="clear: both;"></div>
</div>
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">
 <div id="contentq" style="width: 95%; padding: 10px;">
 <input name="task" type="hidden" id="task" value="'.Util::StrGet('ttridq').'"/>
	';
Fm_User::__gET_TTR_QUOTED_FREIGHT($transpid);
print ' 
<div class="fm_dialog diologrounder7 hidden">
<div class="fm_dialog_header diologrounder7">
<div class="fm_dialog_header_text"> Cancell a quote</div>
</div>
<p class="fm_dialog_boby" style="text-align: left; font-size:16pt">
In <a style="font-size:16pt">freightmeta.com</a> you request to Cancell your Quote?
</p>
<input name="taskcancell" type="hidden" id="taskcancell" value="cancellquote"/>
<div class="fm_dialog_sep"></div>
<div class="fm_dialog_button_wrapper">
<div class="fm_dialog_button_no diologrounder7"> Back</div>
<div style="clear: both;"></div>
<div class="fm_dialog_button_ok diologrounder7"> Cancell</div>
<div style="clear: both;"></div>
</div>
<div style="clear: both;"></div>
</div>
</table>
</div>
';

print <<<script
<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.ui.draggable.js"></script>
<script  type="text/javascript">

 //$('.fm_dialog').addClass('hide_dialog');
 //$('.inputdialog').addClass('hide_dialog');
 
  
   

 
    
    
   /* 
  
 
  */
    

 </script>
script;


print'
</div>
    </div>';
    
    
        
?>