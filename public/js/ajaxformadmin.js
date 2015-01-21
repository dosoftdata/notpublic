
 jQuery(function ($) {
	   var ajaxuri ='http://admin.freightmeta.com/sc/ajax_all.php';
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

	// a custom method making the default value for companyurl ("http://") invalid, without displaying the "invalid url" message
    
    //Validate logusernme
    $.validator.addMethod("logusrnm", function(value, element) {
    if($(".logusrnm").length < 0){
       return true;
   }else {
       return false;
   }
    },"Please provide Username or E-mail!");
    
     //Validate logusrpwd
    $.validator.addMethod("logusrpwd", function(value, element) {
    if($(".logusrpwd").length < 7){
       return true;
   }else {
       return false;
   }
    },"Please provide Password!");
    
	$.validator.messages.required = "";
    
	$("form#login").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'Please provide missed fields. Missed:'+errors;
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
            var task ='login';
            var email=$('#inputmail');
            var password =$('#inputpwd');
            //alert('???');
            
            //organize the data properly
		var login = 
                   'task='+task+
                   '&email='+email.val()+
                   '&password='+password.val();
       alert(login);
		$.ajax({
			//this is the php file that processes the data and send mail
			url: 'http://freightmeta.com/admin/ajax_all.php',	
			//GET method is used
			type: "POST",
			//pass the data			
			data: login,
            beforeSend: function(){
             $('#siteloader').removeClass('hidden');
            },		
			//success
			success: function (html)
                 {	
                   
                   alert(html);
                    
                    var result = $.trim(html);
                    if(result==106){
                       window.location.replace('Page.php?status=new'); 
                    }
                    if(result==105){
                       $('.red').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('error');
                       $('.alert-box').html('User not allowed');
                       //.states .warning
                       setTimeout(function(){ $('.red').addClass('hidden');},30000);
                      $('#siteloader').addClass('hidden');  
                    }
                    
				} //end ajax success
                
              // $('#loaderimage').fadeOut(); 
		});
                   
            
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
    
   $("form#register").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'Please provide missed fields. Missed:'+errors;
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
            var task ='register';
			var fullname =$('#fullname');
            var email =$('#mail');
            var password =$('#inpwd');
            var authcode =$('#inauthcode');
            
            
            //organize the data properly
		var register = 'task='+task+
                       '&fullname='+fullname.val()+
                       '&email='+email.val()+
                       '&password='+password.val()+
                       '&authcode='+authcode.val();
                      
                      //alert(authcode.val() );
                   //start the ajax
		$.ajax({
			//this is the php file that processes the data and send mail
			url:ajaxuri,	
			//GET method is used
			type: "POST",
			//pass the data			
			data: register,
            beforeSend: function(){
             $('#siteloader').removeClass('hidden');
            },		
			//success
			success: function (html)
                 {	 
                   //alert(html);
                   
                    var result = $.trim(html);
                    if(result==102){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('success');
                       $('.alert-box').html('Go at  <a>'+$('#mail').val()+'</a> to activate your account!');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},10000);
                      $('#siteloader').addClass('hidden');  
                    }
                     if(result==101){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('error');
                       $('.alert-box').html('Auth code not match');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},2000);
                      $('#siteloader').addClass('hidden');  
                    }
                    if(result==99){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('notice');
                       $('.alert-box').html('Account already exist!');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},2000);
                      $('#siteloader').addClass('hidden');  
                    }
                    
                   if(result==98){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('notice');
                       $('.alert-box').html('Account not usable!!');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},20000);
                      $('#siteloader').addClass('hidden');  
                    }
				} //end ajax success
                
              // $('#loaderimage').fadeOut(); 
		});
                   
            
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
    
    $("form#resetpwd").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'Please provide missed fields. Missed:'+errors;
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
			//alert("submit! use link below to go to the other step");
            var task ='resetpwd';
            var email =$('#email');
            
            
            //organize the data properly
		var resetpwd = 'task='+task+
                       '&email='+email.val();
		$.ajax({
			//this is the php file that processes the data and send mail
			url:ajaxuri,	
			//GET method is used
			type: "POST",
			//pass the data			
			data: resetpwd,
            beforeSend: function(){
             $('#siteloader').removeClass('hidden');
            },		
			//success
			success: function (html)
                 {	
                   
                   alert(html);
                    
                    var result = $.trim(html);
                    if(result==110){
                       $('.red').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('success');
                        $('.alert-box').html('Go at  <a>'+$('#email').val()+'</a> to get your password!');
                       //.states .warning
                       //main-container
                       $('#main-container').addClass('hidden');
                       setTimeout(function(){ $('.red').addClass('hidden');},20000);
                      $('#siteloader').addClass('hidden'); 
                      $('#email').val(''); 
                    }
				} //end ajax success
                
              // $('#loaderimage').fadeOut(); 
		});
                   
            
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
    
    $("form#activatettr").validate({
		invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = errors == 1
					? 'You missed 1 field. It has been highlighted below'
					: 'Please provide missed fields. Missed:'+errors;
				$("div.error span").html(message);
				$("div.error").show();
			} else {
				$("div.error").hide();
			}
		},
		onkeyup: false,
		submitHandler: function() {
			$("div.error").hide();
		 var task ='clientcode';
            var ccode =$('#ccode');
            
            //organize the data properly
		var clientcode = 'task='+task+
                       '&ccode='+ccode.val();
        
		$.ajax({
			//this is the php file that processes the data and send mail
			url: ajaxuri,	
			//GET method is used
			type: "POST",
			//pass the data			
			data: clientcode,		
			//success
			success: function (html)
                 {	
                   
                   alert(html);
                    
                    var result = $.trim(html);
                      if(result==107){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('error');
                       $('.alert-box').html('Invalid Client Code!');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},2000);
                      $('#siteloader').addClass('hidden');  
                    }
                    
                   if(result==108){
                       $('.displaynotif').removeClass('hidden');
                       $('.alert-box').addClass('states').addClass('success');
                       $('.alert-box').html('Valid Client Code!');
                       //.states .warning
                       setTimeout(function(){ $('.displaynotif').addClass('hidden');},20000);
                      $('#siteloader').addClass('hidden');  
                    }
                
				} //end ajax success
                
              // $('#loaderimage').fadeOut(); 
		});
                   
            
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