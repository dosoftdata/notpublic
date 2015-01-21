
 $.noConflict();
	jQuery(document).ready(function($) {
	$.mockjax({
		url: "emails.action",
		response: function(settings) {
			var email = settings.data.email,
				emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
			this.responseText = "true";
			if ( $.inArray( email, emails ) !== -1 ) {
				this.responseText = "false";
			}
		},
		responseTime: 500
	});

	$.validator.addMethod("password", function( value, element ) {
		var result = this.optional(element) || value.length >= 6 && /\d/.test(value) && /[a-z]/i.test(value);
		if (!result) {
			element.value = "";
			var validator = this;
			setTimeout(function() {
				validator.blockFocusCleanup = true;
				element.focus();
				validator.blockFocusCleanup = false;
			}, 1);
		}
		return result;
	}, "Your password must be at least 6 characters long and contain at least one number and one character.");

	// a custom method making the default value for companyurl ("http://") invalid, without displaying the "invalid url" message
	$.validator.addMethod("defaultInvalid", function(value, element) {
		return value != element.defaultValue;
	}, "");

	$.validator.addMethod("billingRequired", function(value, element) {
		if ($("#bill_to_co").is(":checked"))
			return $(element).parents(".subTable").length;
		return !this.optional(element);
	}, "");

	$.validator.messages.required = "";
	$("form").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below';
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
            //alert('OK');
             //$('.from1').fadeOut('slow');   
             //$('.from2').fadeIn('slow');   
            //ajax_form_popup('form-forgot', 'scripts/ajax_forgot_username.php', 'receiver-forgot', 'forgotusername');
			//alert("submit! use link below to go to the other step");
            
            $('#loaderimage').show();
    //Get category and subcategory
     var pcat = $('#category>option:selected');
     //var pcatid = $('#category>option:selected');
     //psubtext
     var psub = $('#subcategory>option:selected');
     var psubtext = $('#subcategory>option:selected');
       //Get home destination inputs
     var continentin = $('#continentin');
     var country = $('#country');
     var province = $('#province');
     var region = $('#region');
     var city = $('#city');
     var Ormypostcode= $('#Ormypostcode'); 
     var Orrefdetail =$('#Orrefdetail');
     
      //Get delivery destination inputs
     var continentout = $('#continentout');
     var mycountry = $('#mycountry');
     var myprovince = $('#myprovince');
     var myregion = $('#myregion');
     var mycity = $('#mycity');
     var Dsmypostcode= $('#Dsmypostcode'); 
     var Dsrefdetail =$('#Dsrefdetail');
    //Sender register and Login
      var usrname = $('#usrname');
      var useremail = $('#useremail');
      var usrpwd = $('#usrpwd');
      var usrfname =$('#usrfname'); 
      
     var addressrefin =$('#pickupref>option:selected');
     var addressrefout =$('#deliveryref>option:selected'); 
      
     //Freight timing data 
     var fromdate =$('#fromdate');
     var todate = $('#todate');
     var edfromdate =fmdatetimeinput('#fromdate');
     var edtodate =fmdatetimeinput('#todate');
     var staydays = $('#staydays>option:selected');
     var subcatval = $('#subcategory>option[value]');
     
     
     
     
      var item_descr = $('#item_descr'); 
      var fob = $('#fob'); 
      var cip = $('#cip'); 
      var packaging = $('#packaging_details>option:selected');
      var incoterms =$('#incoterms>option:selected');
      
       
        
      var qty = $('#qty');
      var unk_dims = $('#unk_dims');
      
      var fheight = $('#height');
      var fwidth = $('#width');
      var flength = $('#length');
      var fsheight = $('#sheight>option:selected');
      var fswidth = $('#swidth>option:selected');
      var fslength = $('#slength>option:selected');
      var fweight =$('#weight ');
      
      
                    
      var fmake = $('#make');
      var fmodel = $('#model');
      var fyear =$('#gtyear');
      var drivable =$('#drivable>option:selected');
      var ontrailer = $('#ontrailer');
      
      var mares = $('#mares');
      var maresWithFoal = $('#maresWithFoal');
      var geldings =  $('#geldings');
      var stallions =  $('#stallions');
      var breed =  $('#breed');
      var exp =  $('#exp');  
          
      var livestock_no = $('#livestock_no');
      var otherdetail = $('.otherdetail');
      var senderrules = $('#rules:checked');
      var editfreighttask =$('#editffreight');
      var editfreightcid =$('#memberid');
      var editfreightfid =$('#freifhtid');
      var atldatetime = fmdatetimeinput('#fromdatealt');
      var beforedate = fmdatetimeinput('#beforedate');
      
     
      
      var todaydate = new Date();
      var c_dt = todaydate.getDate();
      var c_mt =(todaydate.getMonth()+1);
      var c_yr = todaydate.getFullYear();
      
      var hr=todaydate.getHours();
      if (hr<10) {hr = "0" + hr}
      var mn=todaydate.getMinutes();
      if (mn<10) {mn = "0" + mn}
      var sc=todaydate.getSeconds();
      if (sc<10) {sc = "0" + sc}
      
      fmtime= (hr+':'+mn+':'+sc);
      fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc);
        //alert(senderrules.val());
     
        //organize the data properly
		var freightinput = 
                   'p_fmdatetime='+fmdatetime+
                   '&p_fmtime=' +fmtime+
                   '&p_category=' + pcat.text() +
                   '&p_categoryval=' + pcat.val() +
                   '&p_subcategory=' + psubtext.text()+
                   '&p_fromdate=' + fromdate.val() + 
                   '&p_todate=' + todate.val() +
                   '&p_edfromdate=' + edfromdate + 
                   '&p_edtodate=' + edtodate +
                   '&p_staydays=' + staydays.val() +
                   '&p_continentin=' + continentin.val() +
                   '&p_country=' + country.val() +
                   '&p_province=' + province.val() + 
                   '&p_region=' + region.val() +
                   '&p_city=' + city.val()+ 
                   '&p_Ormypostcode=' + Ormypostcode.val() + 
                   '&p_Orrefdetail=' + Orrefdetail.val() +
                   '&p_continentout=' + continentout.val() +
                   '&p_mycountry=' + mycountry.val() +
                   '&p_myprovince=' + myprovince.val()+ 
                   '&p_myregion=' + myregion.val() +
                   '&p_mycity=' + mycity.val()+ 
                   '&p_Dsmypostcode=' + Dsmypostcode.val() + 
                   '&p_Dsrefdetail=' + Dsrefdetail.val() +
                   '&p_item_descr=' + item_descr.val() +
                   '&p_packaging=' + packaging.text()+ 
                   '&p_qty=' + qty.val() + 
                   '&p_unk_dims=' + unk_dims.val() +
                   '&p_fheight=' + fheight.val() +
                   '&p_fwidth=' + fwidth.val() + 
                   '&p_flength=' + flength.val() +
                   '&p_fsheight=' + fsheight.text() +
                   '&p_fswidth=' + fswidth.text() + 
                   '&p_fslength=' + fslength.text() +
                   '&p_fweight=' + fweight.val()+ 
                   '&p_fmake=' + fmake.val() + 
                   '&p_fmodel=' + fmodel.val() +
                   '&p_fyear=' + fyear.val()+  
                   '&p_drivable=' + drivable.text() + 
                   '&p_ontrailer=' + ontrailer.text() +
                   '&p_mares=' + mares.text() +
                   '&p_maresWithFoal=' + maresWithFoal.val() + 
                   '&p_geldings=' + geldings.val() +
                   '&p_stallions=' + stallions.val()+ 
                   '&p_breed=' + breed.val() + 
                   '&p_exp=' + exp.val() +
                   '&p_fob=' + fob.val() + 
                   '&p_cip=' + cip.val() +
                   '&p_usrname=' + usrname.val() +
                   '&p_useremail=' + useremail.val()+ 
                   '&p_usrpwd=' + usrpwd.val() + 
                   '&p_usrfname=' + usrfname.val() +
                   '&p_subcatval='+subcatval.val()+
                   '&p_livestock_no=' + livestock_no.val()+ 
                   '&p_senderrules=' + senderrules.val()+  
                   '&p_editffreight=' + editfreighttask.val() +
                   '&p_memberid=' + editfreightcid.val()+ 
                   '&p_freifhtid=' + editfreightfid.val()+ 
                   '&patldatetime=' +atldatetime+
                   '&pincoterms='+incoterms.val()+
                   '&pbeforedate='+beforedate+
                   '&paddressrefin='+addressrefin.text()+
                   '&paddressrefout='+addressrefout.text()+
                   '&p_otherdetail='  + encodeURIComponent(otherdetail.val());
                   
  
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_add_freight1.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: freightinput,		
			//Do not cache the page
			cache: false,
			//success
			success: function (html)
                 {	
                    
                    //alert(html);
                     var result = $.trim(html);
                     var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                      //Go to congrate page
                    if (result==='custlogged')
                    {
                      redirectuserfirstlogin();
                    }
                     if (result==='mailexist')
                    {
                      $('.alert-box').removeClass('hidden');
                       $('.alert-box').addClass('notice');
                       $('#idsms').html('notice');
                       $('#msn').html('Please use another E-mail or Username!');
                       //.states .warning
                       setTimeout(function(){ $('.alert-box').addClass('hidden');},20000);
                      //$('#siteloader').addClass('hidden');
                    }
                     if (result==='editok')
                    {
                        $('.successbox').removeClass('hidden');
                      setTimeout(function(){ $('.successbox').addClass('hidden');},20000);
                      window.location.replace('customer_dashboard');
                    }
                    //editok
                    
                    if (result== 200)
                    {
                      window.location.reload();
                    }
                      if (result== 201)
                    {
                     /// window.location.replace('/');
                    }
                    //Goto user profile
                    if(numberRegex.test(result)){
                       var senderid=result;
                        window.location='customer_dashboard?'+'sp='+senderid;   
                        
                       }
                       
                       if (result==='notset')
                    {
                      alert(' not set yet!');
                    }
					 
				} 
           		
		});
        //
     $('#loaderimage').fadeOut('slow', function()
     {
	  $('#loaderimage').hide();
	 });
     //goto customer_congrate.php
      
		},
		messages: {
			password2: {
				required: " ",
				equalTo: "Please enter the same password as above"
			},
			email: {
				required: " ",
				email: "Please enter a valid email address, example: you@yourdomain.com",
				remote: $.validator.format("{0} is already taken, please enter a different address.")
			}
		},
		debug:true
	});
    $("form#updatefreight").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'You missed ' + errors + ' fields.  They have been highlighted below';
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
            //alert('OK');
             //$('.from1').fadeOut('slow');   
             //$('.from2').fadeIn('slow');   
            //ajax_form_popup('form-forgot', 'scripts/ajax_forgot_username.php', 'receiver-forgot', 'forgotusername');
			//alert("submit! use link below to go to the other step");
            
            $('#loaderimage').show();
    //Get category and subcategory
     var pcat = $('#category>option:selected');
     //var pcatid = $('#category>option:selected');
     //psubtext
     var psub = $('#subcategory>option:selected');
     var psubtext = $('#subcategory>option:selected');
       //Get home destination inputs
     var continentin = $('#continentin');
     var country = $('#country');
     var province = $('#province');
     var region = $('#region');
     var city = $('#city');
     var Ormypostcode= $('#Ormypostcode'); 
     var Orrefdetail =$('#Orrefdetail');
     
      //Get delivery destination inputs
     var continentout = $('#continentout');
     var mycountry = $('#mycountry');
     var myprovince = $('#myprovince');
     var myregion = $('#myregion');
     var mycity = $('#mycity');
     var Dsmypostcode= $('#Dsmypostcode'); 
     var Dsrefdetail =$('#Dsrefdetail');
    //Sender register and Login
      var usrname = $('#usrname');
      var useremail = $('#useremail');
      var usrpwd = $('#usrpwd');
      var usrfname =$('#usrfname'); 
      
     var addressrefin =$('#pickupref>option:selected');
     var addressrefout =$('#deliveryref>option:selected'); 
      
     //Freight timing data 
     var fromdate =$('#fromdate');
     var todate = $('#todate');
     var edfromdate =fmdatetimeinput('#fromdate');
     var edtodate =fmdatetimeinput('#todate');
     var staydays = $('#staydays>option:selected');
     var subcatval = $('#subcategory>option[value]');
     
     
     
     
      var item_descr = $('#item_descr'); 
      var fob = $('#fob'); 
      var cip = $('#cip'); 
      var packaging = $('#packaging_details>option:selected');
      var incoterms =$('#incoterms>option:selected');
      
       
        
      var qty = $('#qty');
      var unk_dims = $('#unk_dims');
      
      var fheight = $('#height');
      var fwidth = $('#width');
      var flength = $('#length');
      var fsheight = $('#sheight>option:selected');
      var fswidth = $('#swidth>option:selected');
      var fslength = $('#slength>option:selected');
      var fweight =$('#weight ');
      
      
                    
      var fmake = $('#make');
      var fmodel = $('#model');
      var fyear =$('#gtyear');
      var drivable =$('#drivable>option:selected');
      var ontrailer = $('#ontrailer');
      
      var mares = $('#mares');
      var maresWithFoal = $('#maresWithFoal');
      var geldings =  $('#geldings');
      var stallions =  $('#stallions');
      var breed =  $('#breed');
      var exp =  $('#exp');  
          
      var livestock_no = $('#livestock_no');
      var otherdetail = $('.otherdetail');
      var senderrules = $('#rules:checked');
      var editfreighttask =$('#editffreight');
      var editfreightcid =$('#memberid');
      var editfreightfid =$('#freifhtid');
      var atldatetime = fmdatetimeinput('#fromdatealt');
      var beforedate = fmdatetimeinput('#beforedate');
      
     
      
      var todaydate = new Date();
      var c_dt = todaydate.getDate();
      var c_mt =(todaydate.getMonth()+1);
      var c_yr = todaydate.getFullYear();
      
      var hr=todaydate.getHours();
      if (hr<10) {hr = "0" + hr}
      var mn=todaydate.getMinutes();
      if (mn<10) {mn = "0" + mn}
      var sc=todaydate.getSeconds();
      if (sc<10) {sc = "0" + sc}
      
      fmtime= (hr+':'+mn+':'+sc);
      fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc);
        //alert(senderrules.val());
     
        //organize the data properly
		var freightinput = 
                   'p_fmdatetime='+fmdatetime+
                   '&p_fmtime=' +fmtime+
                   '&p_category=' + pcat.text() +
                   '&p_categoryval=' + pcat.val() +
                   '&p_subcategory=' + psubtext.text()+
                   '&p_fromdate=' + fromdate.val() + 
                   '&p_todate=' + todate.val() +
                   '&p_edfromdate=' + edfromdate + 
                   '&p_edtodate=' + edtodate +
                   '&p_staydays=' + staydays.val() +
                   '&p_continentin=' + continentin.val() +
                   '&p_country=' + country.val() +
                   '&p_province=' + province.val() + 
                   '&p_region=' + region.val() +
                   '&p_city=' + city.val()+ 
                   '&p_Ormypostcode=' + Ormypostcode.val() + 
                   '&p_Orrefdetail=' + Orrefdetail.val() +
                   '&p_continentout=' + continentout.val() +
                   '&p_mycountry=' + mycountry.val() +
                   '&p_myprovince=' + myprovince.val()+ 
                   '&p_myregion=' + myregion.val() +
                   '&p_mycity=' + mycity.val()+ 
                   '&p_Dsmypostcode=' + Dsmypostcode.val() + 
                   '&p_Dsrefdetail=' + Dsrefdetail.val() +
                   '&p_item_descr=' + item_descr.val() +
                   '&p_packaging=' + packaging.text()+ 
                   '&p_qty=' + qty.val() + 
                   '&p_unk_dims=' + unk_dims.val() +
                   '&p_fheight=' + fheight.val() +
                   '&p_fwidth=' + fwidth.val() + 
                   '&p_flength=' + flength.val() +
                   '&p_fsheight=' + fsheight.text() +
                   '&p_fswidth=' + fswidth.text() + 
                   '&p_fslength=' + fslength.text() +
                   '&p_fweight=' + fweight.val()+ 
                   '&p_fmake=' + fmake.val() + 
                   '&p_fmodel=' + fmodel.val() +
                   '&p_fyear=' + fyear.val()+  
                   '&p_drivable=' + drivable.text() + 
                   '&p_ontrailer=' + ontrailer.text() +
                   '&p_mares=' + mares.text() +
                   '&p_maresWithFoal=' + maresWithFoal.val() + 
                   '&p_geldings=' + geldings.val() +
                   '&p_stallions=' + stallions.val()+ 
                   '&p_breed=' + breed.val() + 
                   '&p_exp=' + exp.val() +
                   '&p_fob=' + fob.val() + 
                   '&p_cip=' + cip.val() +
                   '&p_usrname=' + usrname.val() +
                   '&p_useremail=' + useremail.val()+ 
                   '&p_usrpwd=' + usrpwd.val() + 
                   '&p_usrfname=' + usrfname.val() +
                   '&p_subcatval='+subcatval.val()+
                   '&p_livestock_no=' + livestock_no.val()+ 
                   '&p_senderrules=' + senderrules.val()+  
                   '&p_editffreight=' + editfreighttask.val() +
                   '&p_memberid=' + editfreightcid.val()+ 
                   '&p_freifhtid=' + editfreightfid.val()+ 
                   '&patldatetime=' +atldatetime+
                   '&pincoterms='+incoterms.text()+
                   '&pbeforedate='+beforedate+
                   '&paddressrefin='+addressrefin.text()+
                   '&paddressrefout='+addressrefout.text()+
                   '&p_otherdetail='  + encodeURIComponent(otherdetail.val());
                   
  
		//start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_add_freight1.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: freightinput,		
			//Do not cache the page
			cache: false,
			//success
			success: function (html)
                 {	
                    
                   // alert(html);
                     var result = $.trim(html);
                     var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                      //Go to congrate page
                    if (result==='custlogged')
                    {
                      redirectuserfirstlogin();
                    }
                     if (result==='mailexist')
                    {
                      $('.alert-box').removeClass('hidden');
                       $('.alert-box').addClass('notice');
                       $('#idsms').html('notice');
                       $('#msn').html('Please use another E-mail or Username!');
                       //.states .warning
                       setTimeout(function(){ $('.alert-box').addClass('hidden');},20000);
                      //$('#siteloader').addClass('hidden');
                    }
                     if (result==='editok')
                    {
                      $('.successbox').removeClass('hidden');
                      setTimeout(function(){ $('.successbox').addClass('hidden');},20000);
                      window.location.replace('customer_dashboard');
                    }
                    //editok
                    
                    if (result== 200)
                    {
                      window.location.reload();
                    }
                      if (result== 201)
                    {
                     /// window.location.replace('/');
                    }
                    //Goto user profile
                    if(numberRegex.test(result)){
                       var senderid=result;
                        window.location='customer_dashboard?'+'sp='+senderid;   
                        
                       }
                       
                       if (result==='notset')
                    {
                      alert(' not set yet!');
                    }
					 
				} 
           		
		});
        //
     $('#loaderimage').fadeOut('slow', function()
     {
	  $('#loaderimage').hide();
	 });
     //goto customer_congrate.php
      
		},
		messages: {
			password2: {
				required: " ",
				equalTo: "Please enter the same password as above"
			},
			email: {
				required: " ",
				email: "Please enter a valid email address, example: you@yourdomain.com",
				remote: $.validator.format("{0} is already taken, please enter a different address.")
			}
		},
		debug:true
	});

  $(".resize").vjustify();
  $("div.buttonSubmit").hoverClass("buttonSubmitHover");

  $("input.phone").mask("(999) 999-9999");
  $("input.zipcode").mask("99999");
  var creditcard = $("#creditcard").mask("9999 9999 9999 9999");

  $("#cc_type").change(
    function() {
      switch ($(this).val()){
        case 'amex':
          creditcard.unmask().mask("9999 999999 99999");
          break;
        default:
          creditcard.unmask().mask("9999 9999 9999 9999");
          break;
      }
    }
  );

  // toggle optional billing address
  var subTableDiv = $("div.subTableDiv");
  var toggleCheck = $("input.toggleCheck");
  toggleCheck.is(":checked")
  	? subTableDiv.hide()
	: subTableDiv.show();
  $("input.toggleCheck").click(function() {
      if (this.checked == true) {
        subTableDiv.slideUp("medium");
        $("form").valid();
      } else {
        subTableDiv.slideDown("medium");
      }
  });


});

jQuery.fn.vjustify = function() {
    var maxHeight=0;
    $(".resize").css("height","auto");
    this.each(function(){
        if (this.offsetHeight > maxHeight) {
          maxHeight = this.offsetHeight;
        }
    });
    this.each(function(){
        $(this).height(maxHeight);
        if (this.offsetHeight > maxHeight) {
            $(this).height((maxHeight-(this.offsetHeight-maxHeight)));
        }
    });
};

jQuery.fn.hoverClass = function(classname) {
	return this.hover(function() {
		$(this).addClass(classname);
	}, function() {
		$(this).removeClass(classname);
	});
};