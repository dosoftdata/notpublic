$(document).ready(function(){
    
    /******************GET SORTED FREIGHT LIST*************************/
    //Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='../images/ajax-loader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};

    /*
    $('#sort_by>option').click(function(){
        
        var sort = $('#sort_by>option:selected').val(); 
        //alert(sort);
        $.ajax({ 
            url: "ajax_freight_list.php", 
            type: "POST", 
            data: "sort_by="+sort, 
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            async:false, 
            success:function(apantisi){ 
                
                $("#t-quoted-list-content").html(apantisi); 
            } 
        }); 
    });
    */
    /**********************Freight inputs loader***************************/
   //$(function() {});
    function floadershow() 
    {
     $('.fmloader').html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
     //refresh()
    }
    function floaderhide() 
      {
        $('.fmloader').html('');
      }
   
    /*********************GET SUBCATEGORY LIST************************/
     //$('#usrwait').fadeOut('fast');
   function addfreight(){
        floadershow();
        //e.preventDefault();
        var pcat = $('#category>option:selected').val();
        $('#category').addClass('opacity');
        $('#subcategory').addClass('hidden');
        $('#subcategories').addClass('hidden');
        $('#loadata-container').addClass('hidden');
        $("#step2-container").addClass('hidden');
       
        //alert(pcat);
        
        $.ajax({ 
            url: "subcategory_ajax.php", 
            type: "POST",  
            data:   "mycat="+pcat,
            cache: false,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            async:false,
            success:function(apantisi){ 
               var thisubcat= $("#subcategory").html(apantisi); 
            $("#subcategory").removeClass('hidden');
            $("#subcategories").removeClass('hidden');
            $("#loadata-container").removeClass('hidden');
            $("#step2-container").removeClass('hidden');
            floaderhide();
            $('#category').removeClass('opacity');
            //floaderhide();
          
            } 
        }); 
      
        
        
    }
    
    /******************GET SHIPMENT DETAILS BY SUBCATEGORY*************************/
    var data1 = '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Item(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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
 '</span></div><!---!--->';
      
      
      var data2= '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Vehicle(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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
 '</span></div><!---!--->';
   
   

var data3= '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Vehicle(s)</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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
 '</span></div>';
                    
       var data4 = '<div class="row" id="items_div"><span class="pl">'+

'<div class="formlabel">Motorcycle(s)</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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

 
 '</span></div><!---!--->';
         
         
    var data5 = '<div class="row" id="items_div"><span class="pl">'+

'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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
 '</span></div><!---!--->';
                    
       var data6 = '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;" maxlength="100"></textarea>'+
'</div>'+
'<div class="clear"></div>'+
'<div class="row">'+
'<div class="formlabel" style="">Qty:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input id="qty" class="required control dynitem" maxlength="80" name="qty" type="text" style="width:30px;" value=""></div>'+
'<div class="clear"></div>'+
'</div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'</div>'+
'</span></div><!---!--->';

       var data7 = '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;" maxlength="100"></textarea>'+
'</div>'+
'<div class="clear"></div>'+
'<div class="row">'+
'<div class="formlabel" style="">Qty:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<input id="qty" class="required control dynitem" maxlength="80" name="qty" type="text" style="width:30px;" value=""></div>'+
'<div class="clear"></div>'+
'</div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'<div class="clear"></div>'+
'</div>'+
'</div>'+
'</span></div><!---!--->';
          
   var data8 = '<div class="row" id="items_div" style="padding: 10px 10px 10px 10px;"><span class="pl">'+
'<div class="formlabel">Describe what you need moved:<span class="requiredtxt">*</span></div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
'<div class="row">'+
'<textarea name="item_descr" id="item_descr" type="text" class="required control dynitem fw" style="height:100px;" value="" style="padding-right:11px ;"></textarea>'+
'</div>'+
'<div class="row" style="width: 425px;">'+
'<div class="formlabel"style="width: 235px;">Number of Mares :<span class="requiredtxt">*</span></div>'+
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
'<div class="formlabel" style="width: 235px;">Number of Mares with Foal :<span class="requiredtxt">*</span></div>'+
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
'<div class="formlabel" style="width: 235px;">Number of Geldings :<span class="requiredtxt">*</span></div>'+
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
'<div class="formlabel" style="width: 235px;">Number of Stallions :<span class="requiredtxt">*</span></div>'+
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
 '<div class="formlabel" style="width: 235px;">Breed:<span class="requiredtxt">*</span></div>'+
 '<div class="forminput"style="margin-left: 0px; width: 150px;">'+
 '<input name="breed"  id="breed" type="text" class="required control dynitem fw"  value=""> '+
 '</div>'+
 '<div class="clear"></div>'+
' </div>'+
 '<div class="row" style="width: 425px;">'+
 '<div class="formlabel" style="width: 235px;">Travel Experience :<span class="requiredtxt">*</span></div>'+
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
 '</span></div><!---!--->';
          var data9 ='<div class="row" id="items_div"><span class="pl">'+
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
'</span></div><!---!--->';
          var data10 = '<div class="row" id="items_div"><span class="pl">'+
'<div class="formlabel">Item(s):</div>'+
'<div class="forminput">'+
'<div id="items"> <!--//-->'+
'<input name="item-1" type="hidden" value="1">'+
'<div id="item" style="margin-bottom:4px; clear:left;" class="clonedItem">'+
'<div class="item_container" style="">'+
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
 '</span></div><!---!--->';
    
    $(function() {
       $('#subcategory').click(function(){
       var psub = $('#subcategory>option:selected').val();
       var pcat = $('#category>option:selected').val();
       $("#step2-container").removeClass('hidden');
        //alert(psub+'and'+pcat);
        
 
        //Manage subcategory details
        //var dta='me';

        if(psub==1 || psub==2){$("#dynamic_questions").html(data1);}
        else if(psub==3 || psub==4){$("#dynamic_questions").html(data2);}
        else if(psub==5 || psub==6 || psub==7 || psub==8)
        {
            $("#dynamic_questions").html(data3);
        }
         else if(psub==9){$("#dynamic_questions").html(data4);}
         else if(psub==10 || psub==11 || psub==12)
        {
            $("#dynamic_questions").html(data5);
        }
         else if(psub==13 || psub==14)
        {
            $("#dynamic_questions").html(data6);
        }
          else if(
                  psub==15 || psub==16 || psub==17 ||
                  psub==18 || psub==19 || psub==20 || 
                  psub==21 || psub==22 || psub==23 || 
                  psub==24 || psub==25 || psub==26 || 
                  psub==27 || psub==28 || psub==29 || 
                  psub==30 || psub==31 || psub==32 ||
                  psub==33 || psub==34 || psub==39 ||
                  psub==40 || psub==41 || psub==42 ||
                  psub==43 || psub==44 || psub==45 ||
                  psub==46 || psub==47 || psub==48 ||
                  psub==49 || psub==50 || psub==51 ||
                  psub==52 || psub==53 || psub==54 ||
                  psub==56 || psub==57 || psub==58
                  )
        {
            $("#dynamic_questions").html(data7);
        }
        else if(psub==35){$("#dynamic_questions").html(data8);}
        else if(psub==36 || psub==37 || psub==38)
        {
            $("#dynamic_questions").html(data9);
        }
        else if(psub==55){$("#dynamic_questions").html(data10);}
        else{
            
            $("#dynamic_questions").html('');
        }
        /*
        
        else{
            
            $("#dynamic_questions").html('');
        }
        */
       //$.ajax({ 
            //url: "ajax_add_freight.php", 
           // url: "dynamic_questions_ajax.php", 
            //type: "POST", 
            //data:   "myps="+psub,
            //contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            //async:false, 
            //success:function(apantisi){ 
              //  $("#dynamic_questions").html(apantisi);  
           // } 
       // }); 
        
    }); 
        
        
    });
     
    
        $('#stargetquote').click(function(){ 
               // Shipment main data
                var catname = $('#category>option:selected').text(); 
                var subcat_id = $('#subcategory>option:selected').val();
                var otherdetail = $('.otherdetail').val();
                var freightphoto = 'public/images/freight/';
                var fromdate =$('#fromdate').text();
                var todate = $('#todate').text();
                var staydays = $('#staydays').text();
               
               //Pickup detail:
                //var Ormycity = $('#Ormycity').text();
                var Ormypostcode = $('#Ormypostcode').val();
                var Orrefdetail = $('#Orrefdetail').val();
               
               //Delivery detail:
                //var Dsmycity = $('#Dsmycity').text();
                var Dsmypostcode = $('#Dsmypostcode').val();
                var Dsrefdetail = $('#Dsrefdetail').val();
               
               //Sender register and Login
                var usrname = $('#usrname').val();
                var useremail = $('#useremail').val();
                var usrpwd = $('#usrpwd').val();
                var usrfname =$('#usrfname').val(); 
                alert("catname : "+catname);
                alert("subcat_id : "+subcat_id);
                               
                $.ajax({ 
                    url: "ajax_add_freight.php", 
                    type: "POST", 
                    data: {
                            _CATNAME    :catname,
                            _SUBCATID   :subcat_id,
                            otherdetail :otherdetail,
                            fromdate    :fromdate,
                            todate      :todate,
                            staydays    :staydays,
                            Ormypostcode:Ormypostcode,
                            Orrefdetail :Orrefdetail,
                            Dsmypostcode:Dsmypostcode,
                            Dsrefdetail :Dsrefdetail,
                            usrname     :usrname,
                            useremail   :useremail,
                            usrpwd      :usrpwd,
                            usrfname    :usrfname,
                            ajax_value  :"submit"
                    },
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
                    async:false
                }); 
            });

  

});//CloseDocs for Ajax scripting
/*
$(document).ready(function(){
$('.usernamechecked').keyup(username_check);
});	
function username_check(){	
var username = $('.usernamechecked').val();
if(username == "" || username.length < 4){
$('.usernamechecked').css('border', '3px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "ajax_checkusername.php",
   data: 'username='+ username,
   cache: false,
   success: function(response){
if(response == 1){
	$('.usernamechecked').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}
	else{
	$('.usernamechecked').css('border', '3px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}
}

$(document).ready(function(){
$('.emailchecker').keyup(emailchk_check);
});	
function emailchk_check(){	
var emailchk = $('.emailchecker').val();
if(emailchk == "" || emailchk.length < 4){
$('.emailchecker').css('border', '2px #CCC solid');
$('#tick').hide();
}else{

jQuery.ajax({
   type: "POST",
   url: "ajax_emailchk.php",
   data: 'emailchk='+emailchk,
   cache: false,
   success: function(response){
if(response == 1){
	$('.emailchecker').css('border', '2px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}
	else{
	$('.emailchecker').css('border', '2px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}
}
*/

 