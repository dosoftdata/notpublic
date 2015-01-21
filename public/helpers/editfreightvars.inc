<?php
  print <<<data
   var data1 = '<div class="row" id="items_div">'+
'<div class="formlabel">Item(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 420px; margin-left: -50px;">'+
'<div class="row">'+
'<div class="formlabel" style=";">Description:</div>'+
'<div class="forminput">'+
'<input name="item_descr" id="item_descr" type="text" class="required control dynitem" style="width:250px;" value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style="">Packaging:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<select name="packaging_details" id="packaging_details" class=" required control dynitem" style="width:250px;">'+
'<option value="0">Select Packaging</option>'+
'<option value="Pallets - Standard (1.16m x 1.16m)">Pallets - Standard (1.16m x 1.16m)</option>'+
'<option value="Pallets - Non Standard">Pallets - Non Standard</option>'+
'<option value="Boxes">Boxes</option>'+
'<option value="Cartons">Cartons</option>'+
'<option value="Crates">Crates</option>'+
'<option value="Drums">Drums</option>'+
'<option value="Flat Packs">Flat Packs</option>'+
'<option value="Other">Other</option>'+
'<option value="Unpackaged or N/A">Unpackaged or N/A</option>'+
'</select>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style="">Qty:<span class="required">*</span></div>'+
'<div class="forminput">'+
'<input id="qty" class="required control dynitem" maxlength="80" name="qty" type="text" style="width:30px;" value=""></div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style=""></div>'+
'<div class="forminput" style="">'+
'<div style="padding:5px; border:1px solid #80b8eb; background-color:#d2e6f7; width:290px; font-size: 8pt;" class="rounded">'+
'<input  id="unk_dims"  name="unk_dims" type="checkbox" value="1" onclick="showHideUnsureWarning(this);"> Unsure of exact Item weight &amp; Dimensions'+
'<div id="unsureWarning" style="display:none; margin-top:5px; border-top:1px solid #80b8eb; padding-top:5px;"><strong>Note: </strong>If possible, please enter your'+
' best guess below. Transport Providers will be made aware '+
' that you are not sure of exact values. The more information '+
' you can provide the more quotes you will receive. '+
' Please upload a photo if possible.</div>'+
'</div>'+
' </div>'+
'<div class="clear"></div>'+
 '</div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Item Height:<span class="requiredtxt">*</span></div>'+
' <div class="forminput">'+
 '<input id="height" class="required" maxlength="5" name="height" type="text" style="width:35px;" value="">'+
' <select name="height" id="sheight" class="required control dynitem" >'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
 '</div>'+
 '<div class="clear"></div>'+
' </div>'+
' <div class="row">'+
' <div class="formlabel" style="">Item Width:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="width" id="width" type="text" class="control dynitem" style="width:35px;" value="">'+
 '<select name="width" id="swidth" class="required control dynitem" >'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
 '</div>'+
' <div class="clear"></div>'+
' </div>'+
' <div class="row">'+
' <div class="formlabel" style="">Item Length:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
' <input name="length" id="length" type="text" class="require control dynitem" style="width:35px;" value=""> '+
 '<select name="slength" id="slength" class="control dynitem">'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
' </div>'+
' <div class="clear"></div>'+
' </div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Item Weight:<span class="requiredtxt">*</span></div>'+
' <div class="forminput">'+
 '<input name="weight" id="weight" type="text" class=" required control dynitem" style="width:35px;" value=""> kg (per unit)</div>'+
 '<div class="clear"></div>'+
' </div>'+
' <div class="clear"></div>'+
' </div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+
 '</div>'+
 '</div><!---!--->';
      
      
      var data2= '<div class="row" id="items_div">'+
'<div class="formlabel">Vehicle(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 420px; margin-left: -50px;">'+
'<div class="row">'+
'<div class="formlabel" style=";">Make:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input name="make" id="make" type="text" class="required control dynitem" style="width:250px;" value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style="">Model:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input name="model" id="model" type="text" class=" control dynitem" style="width:250px;" value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style="">Year :<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input id="gtyear" class=" control dynitem" maxlength="80" name="gtyear" type="text" style="width:70px;" value=""></div>'+
'<div class="clear"></div>'+
'</div>'+
' <div class="row">'+
 '<div class="formlabel" style="">Drivable :<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<select style="color: grey;" name="drivable" name="drivable" class="required control dynitem" >'+
 '<option value="1">Yes</option>'+
 '<option value="0">No</option>'+
' </select>'+
' </div>'+
' <div class="clear"></div>'+
' </div>'+
'<div class="clear"></div>'+
' </div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+
 '</div>'+
 '</div><!---!--->';
   
   

var data3= '<div class="row" id="items_div">'+
'<div class="formlabel">Vehicle(s)</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 420px; margin-left: -50px;">'+
'<div class="row">'+
'<div class="formlabel" style=";">Description: <span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input name="item_descr" id="item_descr" type="text" class="control dynitem" style="width:250px;" value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Height:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input id="height" name="height" class="required" maxlength="5" name="height" type="text" style="width:35px;" value="">'+
 '<select name="sheight" name="sheight" class="required control dynitem" >'+
 '<option value="m">m</option>'+
 '<option value="cm">cm</option>'+
 '</select>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
'<div class="row">'+
 '<div class="formlabel" style="">Width:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="width" id="width" type="text" class="control dynitem" style="width:35px;" value="">'+
 '<select name="width"  id="swidth" class="required control dynitem" >'+
 '<option value="m">m</option>'+
 '<option value="cm">cm</option>'+
 '</select>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Length:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="length"  id="length" type="text" class="control dynitem" style="width:35px;" value="">'+ 
 '<select name="slength" id="slength" class="required control dynitem" >'+
 '<option value="m">m</option>'+
 '<option value="cm">cm</option>'+
 '</select>'+
 '</div>'+
' <div class="clear"></div>'+
 '</div>'+
 ' <div class="row">'+
 '<div class="formlabel" style="">Weight:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="weight" id="weight" type="text" class="required control dynitem" style="width:35px;" value=""> kg (per unit)</div>'+
 '<div class="clear"></div>'+
' </div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>';
                    
       var data4 = '<div class="row" id="items_div">'+

'<div class="formlabel">Motorcycle(s)</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 420px; margin-left: -50px;">'+
'<div class="row">'+
'<div class="formlabel" style=";">Make: <span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<span>'+
'<input name="make" id="make" type="text" class="control dynitem" style="width:250px;" value="">'+
'</span>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
' <div class="row">'+
 '<div class="formlabel" style="">Model:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<span>'+
'<input name="model" id="model" type="text" class=" required control dynitem" style="width:250px;" value="">'+
'</span>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+

 
 '</div><!---!--->';
         
         
    var data5 = '<div class="row" id="items_div">'+

'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 410px; margin-left: -38px;">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;"></textarea>'+
'</div>'+
 '<div class="row">'+
'<div class="formlabel" style=""></div>'+
'<div class="forminput" style="">'+
'<div style="padding:5px; border:1px solid #80b8eb; background-color:#d2e6f7; width:290px; font-size: 8pt;" class="rounded">'+
'<input  id="unk_dims"  name="unk_dims" type="checkbox" value="1" onclick="showHideUnsureWarning(this);"> Unsure of exact Item weight &amp; Dimensions'+
'<div id="unsureWarning" style="display:none; margin-top:5px; border-top:1px solid #80b8eb; padding-top:5px;"><strong>Note: </strong>If possible, please enter your'+
 'best guess below. Transport Providers will be made aware '+
 'that you are not sure of exact values. The more information '+
 'you can provide the more quotes you will receive. '+
 'Please upload a photo if possible.</div>'+
 '</div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Length:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="length"  id="length" type="text" class="control dynitem" style="width:35px;" value=""> '+
 '<select name="slength" id="slength" class="required control dynitem" >'+
 '<option value="m">m</option>'+
 '<option value="cm">cm</option>'+
 '</select>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
   '<div class="row">'+
 '<div class="formlabel" style="">On trailer:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<select name="ontrailer" id="ontrailer" class="required control dynitem" >'+
 '<option value="1">Yes</option>'+
 '<option value="0">No</option>'+
 '</select>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+
 '</div><!---!--->';
                    
       var data6 = '<div class="row" id="items_div">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 410px; margin-left: -38px;">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;" maxlength="100"></textarea>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'</div>'+
'</div><!---!--->';

       var data7 = '<div class="row" id="items_div">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 410px; margin-left: -38px;">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;" maxlength="100"></textarea>'+
'</div><div class="clear"></div></div><div class="clear"></div></div>'+
'<div class="clear"></div></div></div>'+
'</div><!---!--->';
          
   var data8 = '<div class="row" id="items_div" style="padding: 10px 10px 10px 10px;">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 410px; margin-left: -38px;">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;"></textarea>'+
'</div>'+
'<div class="row" style="width: 425px;">'+
'<div class="formlabel"style="width: 218px;">Number of Mares :<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="margin-left: 0px; width: 100px;">'+
'<select name="mares" id="mares" class="required control dynitem" style="">'+
' <option value="" selected>Select</option>'+
' <option value="1" >1</option>'+
 '<option value="2">2</option>'+
 '<option value="3">3</option>'+
 '<option value="4">4</option>'+
 '<option value="5">5</option>'+
'</select>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row" style="width: 425px;" >'+
'<div class="formlabel" style="width: 218px;">Number of Mares with Foal :<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="margin-left: 0px; width: 100px;">'+
'<select name="maresWithFoal" id="maresWithFoal" class="required control dynitem" >'+
 '<option value="" >Select</option>'+
 '<option value="1" >1</option>'+
 '<option value="2">2</option>'+
 '<option value="3">3</option>'+
 '<option value="4">4</option>'+
 '<option value="5">5</option>'+
'</select>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row" style="width: 425px;">'+
'<div class="formlabel" style="width: 218px;">Number of Geldings :<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="margin-left: 0px; width: 100px;">'+
'<select name="geldings" id="geldings" class="required control dynitem" style="">'+
' <option value="" selected>Select</option>'+
' <option value="1" >1</option>'+
 '<option value="2">2</option>'+
 '<option value="3">3</option>'+
 '<option value="4">4</option>'+
 '<option value="5">5</option>'+
'</select>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row" style="width: 425px;">'+
'<div class="formlabel" style="width: 218px;">Number of Stallions :<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="margin-left: 0px; width: 100px;">'+
'<select name="stallions" id="stallions" class="required control dynitem" style="">'+
 '<option value="" selected >Select</option>'+
 '<option value="1">1</option>'+
 '<option value="2">2</option>'+
 '<option value="3">3</option>'+
 '<option value="4">4</option>'+
 '<option value="5">5</option>'+
'</select>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
' <div class="row" style="width: 425px;">'+
 '<div class="formlabel" style="width: 218px;">Breed:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput"style="margin-left: 0px; width: 150px;">'+
 '<input name="breed"  id="breed" type="text" class="required control dynitem fw"  value=""> '+
 '</div>'+
 '<div class="clear"></div>'+
' </div>'+
 '<div class="row" style="width: 425px;">'+
 '<div class="formlabel" style="width: 218px;">Travel Experience :<span class="requiredtxt">*</span></div>'+
 '<div class="forminput"style="margin-left: 0px; width: 150px;">'+
 '<input name="exp"  id="exp" type="text" class="required control dynitem fw"  value="">'+ 
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+
 '</div><!---!--->';
          var data9 ='<div class="row" id="items_div">'+
'<div class="row fw" >'+
'<div class="formlabel" style="50%">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="width:50%;">'+
'<input name="item_descr" id="item_descr" type="text" class="required control dynitem fw"  value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row fw" >'+
'<div class="formlabel" style="50%">Number of livestock:<span class="requiredtxt">*</span></div>'+
'<div class="forminput" style="width:50%;">'+
'<input name="livestock_no" id="livestock_no" type="text" class="required control dynitem fw"  value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'</div><!---!--->';
          var data10 = '<div class="row" id="items_div">'+
'<div class="formlabel">Item(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="width: 420px; margin-left: -50px;">'+
'<div class="row">'+
'<div class="formlabel" style=";">Description:</div>'+
'<div class="forminput">'+
'<input name="item_descr" id="item_descr" type="text" class="required control dynitem" style="width:250px;" value="">'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style="">Qty:<span class="required">*</span></div>'+
'<div class="forminput">'+
'<input id="qty" class="required control dynitem" maxlength="80" name="qty" type="text" style="width:30px;" value=""></div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="row">'+
'<div class="formlabel" style=""></div>'+
'<div class="forminput" style="">'+
'<div style="padding:5px; border:1px solid #80b8eb; background-color:#d2e6f7; width:290px; font-size: 8pt;" class="rounded">'+
'<input  id="unk_dims" class="required" name="unk_dims" type="checkbox" value="1" onclick="showHideUnsureWarning(this);"> Unsure of exact Item weight &amp; Dimensions'+
'<div id="unsureWarning" style="display:none; margin-top:5px; border-top:1px solid #80b8eb; padding-top:5px;"><strong>Note: </strong>If possible, please enter your'+
' best guess below. Transport Providers will be made aware '+
' that you are not sure of exact values. The more information '+
' you can provide the more quotes you will receive. '+
' Please upload a photo if possible.</div>'+
'</div>'+
' </div>'+
'<div class="clear"></div>'+
 '</div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Item Height:<span class="requiredtxt">*</span></div>'+
' <div class="forminput">'+
 '<input id="height" class="required" maxlength="5" name="height" type="text" style="width:35px;" value="">'+
' <select name="height" id="sheight" class="required control dynitem" >'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
 '</div>'+
 '<div class="clear"></div>'+
' </div>'+
' <div class="row">'+
' <div class="formlabel" style="">Item Width:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
 '<input name="width" id="width" type="text" class="control dynitem" style="width:35px;" value="">'+
 '<select name="width" id="swidth" class="required control dynitem" >'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
 '</div>'+
' <div class="clear"></div>'+
' </div>'+
' <div class="row">'+
' <div class="formlabel" style="">Item Length:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput">'+
' <input name="length" id="length" type="text" class="require control dynitem" style="width:35px;" value=""> '+
 '<select name="slength" class="control dynitem">'+
' <option value="m">m</option>'+
' <option value="cm">cm</option>'+
' </select>'+
' </div>'+
' <div class="clear"></div>'+
' </div>'+
 '<div class="row">'+
 '<div class="formlabel" style="">Item Weight:<span class="requiredtxt">*</span></div>'+
' <div class="forminput">'+
 '<input name="weight" id="weight" type="text" class=" required control dynitem" style="width:35px;" value=""> kg (per unit)</div>'+
 '<div class="clear"></div>'+
' </div>'+
' <div class="clear"></div>'+
' </div>'+
 '<div class="clear"></div>'+
 '</div>'+
 '</div>'+
 '</div>'+
 '</div><!---!--->';
 
 
data;
Util::editmatchdateinput($crowname['altdatetime'],$crowname['beforedate'],$crowname['freight_Stay_to'],$crowname['freight_Stay_from']);
  print '$("#subcategory").html("<option selected>'.self::printvar($crowname['subcat_name']).'</option>");
 
 $("#subcategory").removeClass("hidden");
$("#incoterms>option:selected").text("'.self::printvar($crowname['incoterms']).'");
$("#continentin>option:selected").text("'.self::printvar($crowname['Continentin']).'");
$("#country").val("'.self::printvar($crowname['Countryin']).'");
$("#province>option:selected").text("'.self::printvar($crowname['Statein']).'");
$("#region>option:selected").text("'.self::printvar($crowname['Regionin']).'");
$("#city").val("'.self::printvar($crowname['Cityin']).'");
$("#Ormypostcode").val("'.self::printvar($crowname['Postcodein']).'"); 
$("#Orrefdetail").val("'.self::printvar($crowname['AddressNamein']).'");
$("#fromdatealt").val("'.self::printvar($crowname['altdatetime']).'");     
      //Get delivery destination inputs
$("#continentout>option:selected").text("'.self::printvar($crowname['ContinentOut']).'");
$("#mycountry").val("'.self::printvar($crowname['CountryOut']).'");
$("#myprovince>option:selected").text("'.self::printvar($crowname['StateOut']).'");
$("#myregion>option:selected").text("'.self::printvar($crowname['RegionOut']).'");
$("#mycity").val("'.self::printvar($crowname['CytiOut']).'");
$("#Dsmypostcode").val("'.self::printvar($crowname['PostcodeOut']).'"); 
$("#Dsrefdetail").val("'.self::printvar($crowname['AddressNameOut']).'");

$("#pickupref>option:selected").text("'.self::printvar($crowname['addressrefin']).'");
$("#deliveryref>option:selected").text("'.self::printvar($crowname['addressrefout']).'");
     
     //Freight timing data 
$("#fromdate").val("'.self::printvar($crowname['freight_Stay_from']).'");
$("#todate").val("'.self::printvar($crowname['freight_Stay_to']).'");
$("#staydays>option:selected").text("'.self::printvar($crowname['active_days']).'");
$("#rules:checked").attr("checked","checked");';
?>