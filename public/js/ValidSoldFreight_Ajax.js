
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
 
    //Validate freight category checked type
    $.validator.addMethod("fcat", function(value, element) {
    if($(".fcat:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
    },"Please select at least one freight type!");
    //Validate transport means
    $.validator.addMethod("fttrmeans", function(value, element) {
    if($(".fttrmeans:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
    },"Please select at least one transport means used for freight shipping!");
    
    $.validator.addMethod("fttr_area", function(value, element) {
    if($(".fttr_area:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
    },"Please select at least one area suppoted!");
    
    
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
            
		///alert("submit! use link below to go to the other step");
        
        
        
        $('#loaderimage').show().html('Loading <img src="images/loader2.gif" />');
    
    //alert(t_task);
    //taks to do on
    var t_task=$('#tast');
    var t_taskid= $('#tastid');
    //page data
    var t_soldorigin=$('#soldorigin');
    var t_solddestination=$('#soldedest');
    var t_amountfrom = $('#From_amount');
    var t_amountfrom_currency =$('#soldeincurrencyin')
    var t_soldamount=$('#Solde_amount');
    var t_soldamount_currency=$('#soldeincurrencyout');
    
    var datefrom = $('#fromdate');
    var datefto = $('#todate');
    
    
    //Get freight supported by the transporter
    var t_packagedchk=$('#packagedchk:input:checked');
    var t_buildingchk = $('#buildingchk:input:checked');
    var t_vehicleschk=$('#t_vehicleschk:input:checked');
    var t_livestockchk=$('#livestockchk:input:checked');
    var t_motorcycleschk = $('#t_motorcycleschk:input:checked');
    var t_petschk=$('#petschk:input:checked');
    var t_boatchk=$('#t_boatchk:input:checked');
    var t_foodchk = $('#foodchk:input:checked');
    var t_heavychk=$('#heavychk:input:checked');
    var t_specialcarechk=$('#specialcarechk:input:checked');
    var t_officeremovalschk = $('#officeremovalschk:input:checked');
    var t_haygrain=$('#haygrain:input:checked');
    var t_containerchk=$('#containerchk:input:checked');
    var t_householdchk = $('#householdchk:input:checked');
    var t_miningchk=$('#miningchk:input:checked');
    var t_horseschk=$('#horseschk:input:checked');
    var t_bulkfreightchk = $('#bulkfreightchk:input:checked');
    var t_parcelschk=$('#parcelschk:input:checked');
    
     //Feightmeta inputs
     var contactname =$('#contactname');
     var contactmail =$('#contactcompany');
     var contactcompany =$('#contactemail');
     var contactsubject =$('#contactreason');
     var contacttext =$('#contactcomments');
     var incotermsdis = $('#incoterms>option:selected');
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
      
     var fmtime= (hr+':'+mn+':'+sc);
     
     var fmdatetime=(c_yr+':'+c_mt+':'+c_dt+':'+hr+':'+mn+':'+sc);
                                            
     //alert("It 's work:MOTO:"+t_motorcycleschk.val());
     
        //organize the data properly
		var discount_input = 
                   't_tast='+t_task.val() +
                   '&t_tastid='+t_taskid.val() +
                   '&t_soldorigin='+t_soldorigin.val() +
                   '&t_solddestination='+t_solddestination.val() +
                   '&t_amountfrom='+t_amountfrom.val() +
                   '&t_amountfrom_currency='+t_amountfrom_currency.val() + 
                   '&t_soldamount='+t_soldamount.val() +
                   '&t_soldamount_currency='+t_soldamount_currency.val() +
                   '&t_datefrom='+datefrom.val() +
                   '&t_incoterms='+incotermsdis.text()+
                   '&t_datefto='+datefto.val()+
                   '&t_packagedchk=' + t_packagedchk.val() +
                   '&t_buildingchk=' + t_buildingchk.val() +
                   '&t_vehicleschk=' + t_vehicleschk.val()+ 
                   '&t_livestockchk=' + t_livestockchk.val() + 
                   '&t_motorcycleschk=' + t_motorcycleschk.val() +
                   '&t_petschk=' + t_petschk.val() +
                   '&t_boatchk=' + t_boatchk.val() + 
                   '&t_foodchk=' + t_foodchk.val() +
                   '&t_heavychk=' + t_heavychk.val()+ 
                   '&t_specialcarechk=' + t_specialcarechk.val() + 
                   '&t_officeremovalschk=' + t_officeremovalschk.val() +
                   '&t_haygrain=' + t_haygrain.val()+           
                   '&t_containerchk=' +t_containerchk.val() + 
                   '&t_householdchk=' + t_householdchk.val() +
                   '&t_miningchk=' + t_miningchk.val() + 
                   '&t_horseschk=' + t_horseschk.val() + 
                   '&t_bulkfreightchk=' + t_bulkfreightchk.val() +
                   '&t_parcelschk=' + t_parcelschk.val()+ 
                   '&t_fmdatetime=' +fmdatetime+
                   '&t_hours='+fmtime+
                   '&c_contactname='+contactname.val()+
                   '&c_contactmail='+contactmail.val()+
                   '&c_contactcompany='+contactcompany.val()+
                   '&c_contactsubject='+contactsubject.val()+
                   '&c_contacttext='+contacttext.val();
                  //alert(t_task.val());
                  alert(t_containerchk.val());
		//start the ajax
        floadershow();
        $('.send-status').removeClass('hidden');
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_sold_freight.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: discount_input,		
			//success
			success: function (num)
                 {	
                    alert(num);
                    
                    if(num == 200)
                    {
                      $('.successbox').removeClass('hidden');  
                    }
                     if(num == 202)
                    {
                      $('.successbox').removeClass('hidden');  
                    }
                     if(num == 204)
                    {
                        $('.send-status').addClass('hidden');
                        $('.status-send').removeClass('hidden');
                        $('.status-send').html("Freightmeta Member service 'll contact asap with at '"+contactmail.val()+"'");
                          
                    }
                    /*
                    var result =$.trim(num);
                    
                    if(result == 200){
                         $('.successbox').removeClass('hidden');
                    }
                     if(result == 202){
                         $('.successbox').removeClass('hidden');
                    }
                     if(result == 204){
                         //$('.successbox').removeClass('hidden');
                    $('.send-status').addClass('hidden');
                        $('.status-send').removeClass('hidden');
                        $('.status-send').html("Freightmeta Member service 'll contact assap with at '"+contactmail+"'");
                        alert(result);
                    }
                    */
                   
                    /*
                    switch(result){
                        case 200:
                           $('.successbox').removeClass('hidden');
                        break;
                        case 202:
                           $('.successbox').removeClass('hidden');
                        break;
                        case 204:
                        $('.send-status').addClass('hidden');
                        $('.status-send').removeClass('hidden');
                        $('.status-send').html("Freightmeta Member service 'll contact assap with at '"+contactmail+"'");
                        alert(result);
                           //$('.successbox').removeClass('hidden');
                        break;
                    }
                    
                    */
					//alert(html);
				} 
           		
		});
        
        
     $('#loaderimage').fadeOut('slow', function()
     {
	  $('#loaderimage').hide();
	 });
    // redirect();
        
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