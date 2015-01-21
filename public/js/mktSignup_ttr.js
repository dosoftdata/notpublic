
 $.noConflict();
	jQuery(document).ready(function($) {
	$.mockjax({
		url: "emails.action",
		response: function(settings) {
			var email = settings.data.email,
				emails = ["glen@marketo.com","george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
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
    },"");
    //Validate transport means
    $.validator.addMethod("fttrmeans", function(value, element) {
    if($(".fttrmeans:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
    },"");
    
    $.validator.addMethod("fttr_area", function(value, element) {
    if($(".fttr_area:checkbox:checked").length > 0){
       return true;
   }else {
       return false;
   }
    },"");
    
    
    $.validator.addMethod("billingRequired", function(value, element) {
		if ($("#bill_to_co").is(":checked"))
			return $(element).parents(".subTable").length;
		return !this.optional(element);
	}, "");

	$.validator.messages.required = "";
	$("form#form-account").validate({
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
        
        
        
        $('#loaderimage').show().html('Loading <img src="images/loader2.gif" />');;
    
    //$.validator.addMethod("username", function(value, element) {
       // return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
   // }, "Username must contain only letters, numbers, or underscore.");

   // $("#regForm").validate();
    
    //Get transporter login dta
    var t_usrnm=$('#username');
    var t_usrpwd=$('#passwd');
    var t_usrpwdd=$('#passwd');
    var t_usrmail=$('#email');
    var t_usrmail1=$('#email2');
    var t_usrmail2=$('#email3');
    
    //Get transporter company dtas
    var t_tcompanyname=$('#tcompanyname');
    var t_vatnum = $('.vatnum');
    var t_cvatnum=$('.cvatnum');
    var t_adn = $('#carrier_abn');
    var t_gst=$('#carrier_gst_registered');
    var t_tcompanyID=$('.tcompanyID');
    var t_companylocation = $('#tcontinent');
    var t_tcountry = $('#tcountry');
    var t_tprovince = $('#tprovince');
    var t_tregion = $('#tregion');
    var t_tcity = $('#tcity');
    var t_tpostcode=$('#tpostcode');
    var t_taddressline1 = $('#address_line1');
    var t_taddressline2=$('#address_line2');
     var t_taddressref=$('#addressref');
    
    //Get Transporter contact dta
    var t_transphone=$('#phone');
    var t_configfname = $('#lastname');
    var t_contactilname=$('#firstname');
    
    
    //2114
    
    
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
     
     //Get transporter Operation Area
     var t_nationalarea=$('#nationalarea:input:checked');
    var t_internationalarea = $('#internationalarea:input:checked');
    
    //Get transporter means
    var t_maritimemeans=$('#maritimemeans:input:checked');
    var t_byairplane = $('#byairplane:input:checked');
    var t_byroute=$('#byroute:input:checked');
    var task =$('#task');
    var taskid =$('#taskid');
    //Transporter terms
     var t_transterms=$('#accept_terms:input:checked');
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
                                            
     //alert("It 's work:MOTO:"+t_motorcycleschk.val());
     //t_usrpwd2
        //organize the data properly
		var transporter_input = 
                   't_usrnm='+t_usrnm.val() +
                   '&t_usrpwd='+t_usrpwd.val() +
                   '&t_usrmail='+t_usrmail.val() +
                   '&t_usrmail1='+t_usrmail1.val() +
                   '&t_usrmail2='+t_usrmail2.val() + 
                   '&t_tcompanyname='+t_tcompanyname.val() +
                   '&t_vatnum ='+t_vatnum.val() +
                   '&t_cvatnum='+t_cvatnum.val() +
                   '&t_tcompanyID='+t_tcompanyID.val() +
                   '&t_companylocation='+t_companylocation.val() + 
                   '&t_tcountry='+t_tcountry.val() +
                   '&t_tprovince='+t_tprovince.val()+ 
                   '&t_tregion='+t_tregion.val() + 
                   '&t_tcity='+t_tcity.val() +
                   '&t_tpostcode='+t_tpostcode.val() +
                   '&t_taddressline1='+t_taddressline1.val() +
                   '&t_taddressline2='+t_taddressline2.val() + 
                   '&t_adn='+t_adn.val() +
                   '&t_gst='+t_gst.val() +
                   '&t_taddressref=' + t_taddressref.val() + 
                   '&t_transphone=' + t_transphone.val() +
                   '&t_configfname=' + t_configfname.val()+ 
                   '&t_contactilname=' + t_contactilname.val() +
                   '&t_packagedchk=' + t_packagedchk.val() +
                   '&t_buildingchk=' + t_buildingchk.val() +
                   '&t_vehicleschk=' + t_vehicleschk.val()+ 
                   '&t_livestockchk=' + t_livestockchk.val() + 
                   '&t_motorcycleschk=' + t_motorcycleschk.val() +
                   '&t_petschk='+t_petschk.val() +
                   '&t_boatchk='+t_boatchk.val() + 
                   '&t_foodchk='+t_foodchk.val() +
                   '&t_heavychk=' +t_heavychk.val()+ 
                   '&t_specialcarechk='+t_specialcarechk.val() + 
                   '&t_officeremovalschk='+t_officeremovalschk.val() +
                   '&t_haygrain='+t_haygrain.val()+           
                   '&t_containerchk='+t_containerchk.val() + 
                   '&t_householdchk='+t_householdchk.val() +
                   '&t_miningchk='+t_miningchk.val() + 
                   '&t_horseschk='+t_horseschk.val() + 
                   '&t_bulkfreightchk='+t_bulkfreightchk.val() +
                   '&t_parcelschk='+t_parcelschk.val()+ 
                   '&t_nationalarea='+t_nationalarea.val() + 
                   '&t_internationalarea='+t_internationalarea.val() +
                   '&t_maritimemeans='+t_maritimemeans.val() +
                   '&t_byairplane=' + t_byairplane.val()+ 
                   '&t_byroute=' +t_byroute.val() + 
                   '&t_tast='+task.val()+
                   '&t_usrpwd2'+t_usrpwdd.val()+
                   '&t_tastid='+taskid.val()+
                   '&t_transterms='+ t_transterms.val()+
                   '&t_hours='+fmtime;
                   
                // alert(t_tregion.val());
		//start the ajax
        floadershow();
        
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_ttr_register.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: transporter_input,		
			//success
			success: function (html)
                 {	
                    //alert(html);
                     var result = $.trim(html);
                     if (result==199)
                    {
                      $('.alert-box').removeClass('hidden');
                       $('.alert-box').addClass('notice');
                       $('#idsms').html('notice');
                       $('#msn').html('Please use another E-mail or Username!');
                       //.states .warning
                       setTimeout(function(){ $('.alert-box').addClass('hidden');},20000);
                      floaderhide() ;
                      $('html, body').animate({scrollTop: '0px'}, 0);
                    }
                    if (result==200)
                    {
                       floaderhide() ;
                       redirect_ttr_reg();
                    }
                    if (result==202)
                    {
                      $('.successbox').removeClass('hidden');
                      $('html, body').animate({scrollTop: '0px'}, 0)
                    }
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