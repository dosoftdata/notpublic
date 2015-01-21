
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
	$("form").validate({
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
            var usrname=$('#usrnm');
            var usrpwd =$('#usrpwd');
            var remember=$('#fm_keepmein:input:checked');
            var fmloginall=$('#fmloginall');
            var fmttrlogin=$('#fmttrlogin');
            var fmttrloginfid=$('#fmttrloginfid');
            var fmttrloginqid=$('#fmttrloginqid');
            var memberlogin=$('#mlogin');
            var cpwdurl=$('#cpwdurl');
            var customerid=$('#customerid');
            var old_passwd=$('#old_passwd');
            //alert('???');
            
            //organize the data properly
		var login_input = 
                   'usrname='+usrname.val() +
                   '&usrpwd='+usrpwd.val() +
                   '&remember='+remember.val()+
                   '&fmloginall='+fmloginall.val()+
                   '&qfmttrlogin='+fmttrlogin.val()+
                   '&qfreighid='+fmttrloginfid.val()+
                   '&qid='+fmttrloginqid.val()+
                   '&mlogin='+memberlogin.val()+
                   '&cpwdurl='+cpwdurl.val()+
                   '&uold_passwd='+old_passwd.val()+
                   '&customerid='+customerid.val();
                   //start the ajax
                   
                 //alert(memberlogin.val());
        $('#loaderimage').fadeIn();
        //alert(fmloginall.val());
        
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_login_all.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: login_input,		
			//success
			success: function (html)
                 {	
                   
                   //alert(html);
                    
                    var result = $.trim(html);
                    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                    
                    
                    //Redirect to question pages
                    if(result.substr(0,1)==='Q')
                    {
                        
                        var ttrid = $.trim(html);
                        var urlttrid = ttrid.substr(1,255);
                         var fmttrloginfghtid=$('#fmttrloginfghtid').val();
                         var fid=fmttrloginfghtid;
                        window.location='question_freight?'+'ttridq='+urlttrid+'&'+'fqttr='+fid+'&ac=qtr';   
                        
                       }
                    
                    //Redirect to quote pages
                    if(numberRegex.test(result)){
                       var fmttrloginfid=$('#fmttrloginfid').val();
                       var ttrid=result;
                       var fid=fmttrloginfid;
                        window.location='quote_freight?'+'fttrq='+ttrid+'&'+'ftoq='+fid;   
                        
                       }
                       
                    if (result==='ttrid0'){
                         $('#loaderimage').fadeOut();
                         $('.usrerror').removeClass('hidden');
                    }
                    
                    if(result==='pwd')
                    {
                    $('#pwdforgot').fadeOut();
                      $('#success').removeClass('hidden');
                    }
                     if(result==='nottrcust')
                    {
                      $('#pwdforgot').fadeOut();
                      $('#usrnmforgot').fadeOut(); 
                      $('#faillur').removeClass('hidden');
                    }
                    
                     if(result==='usrnm')
                    {
                      $('#usrnmforgot').fadeOut();
                      $('#success').removeClass('hidden');
                    }
                    //Require more dta strings
                    if(result==='usrnop')
                    {
                    $('#loaderimage').fadeOut();
                      $('.usrerror').removeClass('hidden');
                    }
                    //to transporter dashboard
                    if(result ==='ttrok')
                    {
                        //alert(result);
                        $('#loaderimage').fadeOut();
                        window.location.replace('t-home?frm=mlog');
                       //return false;   
                    }
                    //to customer dashboard
                    if(result ==='custok')
                    {
                    $('#loaderimage').fadeOut();
                   window.location.replace('customer_dashboard');
  
                    }
                   //case pwdsetted
                   if(result==='pwdsetted')
                    {
                    $('#loaderimage').fadeOut();
                      $('.successbox').removeClass('hidden');
                    }
                    
                    //case tpwdsetted
                   if(result==='tpwdsetted')
                    {
                    $('#loaderimage').fadeOut();
                    $('.successbox').removeClass('hidden');
                    $('.successbox').addClass('hw');
                    }
                $('#loaderimage').fadeOut();
                
                
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
    
    $("form#login2").validate({
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
            var usrname=$('#usrnm');
            var usrpwd =$('#usrpwd');
            var remember=$('#fm_keepmein:input:checked');
            var fmloginall=$('#fmloginall');
            var fmttrlogin=$('#fmttrlogin');
            var fmttrloginfid=$('#fmttrloginfid');
            var fmttrloginqid=$('#fmttrloginqid');
            var memberlogin=$('#mlogin');
            var cpwdurl=$('#cpwdurl');
            var customerid=$('#customerid');
            var old_passwd=$('#old_passwd');
            //alert('???');
            
            //organize the data properly
		var login_input = 
                   'usrname='+usrname.val() +
                   '&usrpwd='+usrpwd.val() +
                   '&remember='+remember.val()+
                   '&fmloginall='+fmloginall.val()+
                   '&qfmttrlogin='+fmttrlogin.val()+
                   '&qfreighid='+fmttrloginfid.val()+
                   '&qid='+fmttrloginqid.val()+
                   '&mlogin='+memberlogin.val()+
                   '&cpwdurl='+cpwdurl.val()+
                   '&uold_passwd='+old_passwd.val()+
                   '&customerid='+customerid.val();
                   //start the ajax
                   
                 // alert(memberlogin.val());
        $('#loaderimage').fadeIn();
        //alert(fmloginall.val());
        
		$.ajax({
			//this is the php file that processes the data and send mail
			url: "ajax_login_all.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: login_input,		
			//success
			success: function (html)
                 {	
                   
                 alert(html);
                    
                    var result = $.trim(html);
                    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
                    
                    
                    //Redirect to question pages
                    if(result.substr(0,1)==='Q')
                    {
                        
                        var ttrid = $.trim(html);
                        var urlttrid = ttrid.substr(1,255);
                         var fmttrloginfghtid=$('#fmttrloginfghtid').val();
                         var fid=fmttrloginfghtid;
                        window.location='question_freight?'+'ttridq='+urlttrid+'&'+'fqttr='+fid+'&ac=qtr';   
                        
                       }
                    
                    //Redirect to quote pages
                    if(numberRegex.test(result)){
                       var fmttrloginfid=$('#fmttrloginfid').val();
                       var ttrid=result;
                       var fid=fmttrloginfid;
                        window.location='quote_freight?'+'fttrq='+ttrid+'&'+'ftoq='+fid;   
                        
                       }
                       
                    if (result==='ttrid0'){
                         $('#loaderimage').fadeOut();
                         $('.usrerror').removeClass('hidden');
                    }
                    
                    if(result==='pwd')
                    {
                    $('#pwdforgot').fadeOut();
                      $('#success').removeClass('hidden');
                    }
                     if(result==='nottrcust')
                    {
                      $('#pwdforgot').fadeOut();
                      $('#usrnmforgot').fadeOut(); 
                      $('#faillur').removeClass('hidden');
                    }
                    
                     if(result==='usrnm')
                    {
                      $('#usrnmforgot').fadeOut();
                      $('#success').removeClass('hidden');
                    }
                    //Require more dta strings
                    if(result==='usrnop')
                    {
                    $('#loaderimage').fadeOut();
                      $('.usrerror').removeClass('hidden');
                    }
                    //to transporter dashboard
                    if(result ==='ttrok')
                    {
                        //alert(result);
                        $('#loaderimage').fadeOut();
                        window.location.replace('t-home?frm=mlog');
                       //return false;   
                    }
                    //to customer dashboard
                    if(result ==='custok')
                    {
                    $('#loaderimage').fadeOut();
                   window.location.replace('customer_dashboard');
  
                    }
                   //case pwdsetted
                   if(result==='pwdsetted')
                    {
                    $('#loaderimage').fadeOut();
                      $('.successbox').removeClass('hidden');
                    }
                    
                    //case tpwdsetted
                   if(result==='tpwdsetted')
                    {
                    $('#loaderimage').fadeOut();
                    $('.successbox').removeClass('hidden');
                    $('.successbox').addClass('hw');
                    }
                $('#loaderimage').fadeOut();
                
                
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