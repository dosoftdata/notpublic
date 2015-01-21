 //if (location.protocol == 'http:'){
 // location.href = location.href.replace(/^http:/, 'https:');
  //}
 $("#tabs" ).tabs();
 $("#freightabs" ).tabs();
 //$(".fm_dialog_map").draggable();
 //freightabs
 $('.btn-primary,.ui-button-text').button();
  $('.ui-tooltip').tooltip();
 $(function() {
	$("a", ".button_link" ).button();
	$("button, input:submit").button();
    
    var homeselect = $('#categoryhome>option:selected').text();
    var homeaddressin =$('.val1').val();
    var homeaddressout =$('.val2').val();
     if($('#submit').click(function (){
       var homeselect = $('#categoryhome>option:selected').text();
       //alert(homeselect);
        $('#category>option:selected').text(homeselect);
        $('#step2-container').removeClass('hidden');
        $('#loadata-container').removeClass('hidden');
       if(homeselect.length > 1){
      $('#category>option:selected').text(homeselect);
     }
         
     }));
     
    
    
}); 
$('ul.list > li a').click(function()
      {
    //alert('me');
    $(this).parent().find('ul').toggle();
         });
    $('#listidremove').click(function() {
    $(this).remove();
         });

var freightmeta='https://freightmeta.com/testb/';
var FmUrlpublic ='https://freightmeta.com/testb/public/';
function adjustHeights(elem) {
      var fontstep = 2;
      if ($(elem).height()>$(elem).parent().height() || $(elem).width()>$(elem).parent().width()) {
        $(elem).css('font-size',(($(elem).css('font-size').substr(0,2)-fontstep)) + 'px').css('line-height',(($(elem).css('font-size').substr(0,2))) + 'px');
        adjustHeights(elem);
      }
    }
 adjustHeights('.pwrap');

var previousCheckId;

     function ckeckcontrol(chkBox) {
         if (chkBox.checked) {
              if (previousCheckId) {
                   document.getElementById(previousCheckId).checked = false;
              }
              previousCheckId = chkBox.getAttribute('id');
         }
     }
//window.onload=function()
//{
		//new PasswordWidget('demo-form','demo-field').MakePWDWidget();
//new fm_pwd(document.getElementById("passwd"), '\u25CF');
//new fm_pwd(document.getElementById("passwd2"), '\u25CF');
//new fm_pwd(document.getElementById("usrpwd"), '\u25CF');
//new fm_pwd(document.getElementById("conusrpwd"), '\u25CF');
//$('#passwd').keyup(function(){
   //var pwdwidget = new PasswordWidget('form-account','passwd').MakePWDWidget();
   // pwdwidget.MakePWDWidget(); 
//});

//}
/********************************************************************************
* This script is brought to you by Vasplus Programming Blog by whom all copyrights are reserved.
* Website: www.vasplus.info
* Email: info@vasplus.info
* Do not remove this copyright information from the top of this code.
*********************************************************************************/

//This automatically calls the Pagination Function on page load
$(document).ready(function()
 {
	vpb_pagination_system(1, $('#selectkeyword').val());
    vpb_pagination_systemd(1, $('#selectkeyword').val());
    
    
    // fade in and fade out
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#go-to-top').fadeIn();
            } else {
                $('#go-to-top').fadeOut();
            }
        });
 
        // scroll body to 0px on click
        $('#go-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
    
    //$('#go-to-top').each(function(){
    //$(this).click(function(){ 
        //$('html,body').animate({ scrollTop: 0 }, 'slow');
        //return false; 
    //});
     //  });
});

        
function photoupdatecontrol(id){
    if($(id).val().length >1){
        return 1;
    }  
    else{
        return 0;
    }
}

function confirmFreightCancel(fid)
{
    $('.actionbox').removeClass('hidden'); 
       if($('.actionbox_ok').click(function()
       {
        //alert(fid);
        	$.get(FmUrlpublic+"ajax.freight.status.php?freightnum="+fid, function(data){
		//alert(data);
        var res =data;
        
           if(res==200){  
          $('.actionbox').addClass('hidden');
          $('.successbox').removeClass('hidden'); 
           window.location.reload();
           return false;  
        }
        else{}
 
       });
       }));
       if($('.actionbox_no').click(function()
       {
        $('.actionbox').addClass('hidden'); 
       }));   
    
}
 $(document).ready(function(){
  $("div#site-top-bar_addfreight").mouseover(function(){
    $("div#site-top-bar_addfreight li span").addClass('whitetext');
  });
  $("div#div#site-top-bar_addfreight").mouseleave(function(){
    $("div#site-top-bar_addfreight li span").removeClass('whitetext');
  });
});
function showeditor(discountid){
   alert(discountid);
   
   //$('.editdiscount').removeClass('hidden');
//return '';
}

function cancelldiscount(discountid){
    var t_task =('#cancelldiscount');
    var discountdta ='t_tast='+t_task.val() +
                     '&t_tastid='+discountid;
   	$.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_canceller.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: discountdta,		
			//success
			success: function (html)
                 {	
                    var result =$.trim(html);
                    switch(result){
                        case 200:
                           $('.successbox').removeClass('hidden');
                        break;
                    }
                    
                    
					//alert(html);
				} 
           		
		});
   }//end
$(function() {
     $('.inputdialog').draggable();
     $('.fm_dialog').draggable();
     $( "#quotevaliddate" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
    changeMonth: true,
	minDate: "+0d",
    defaultDate: "+1w",
    buttonImage: '../public/images/gen/calendar-sml.jpg', //your own image path
    buttonImageOnly: false
     
    });
  });
  
  
 function processeditquote(qtid){
    
     $('.inputdialog').removeClass('hidden');
     //$('.inputdialog').html('Loading...');
    //$('body').addClass('opacity_body');
  if($('.inputdialog_button_no').click(function()
       {
       $('.inputdialog').addClass('hidden');
       //$('body').removeClass('opacity_body');
     
       //return false;
       //alert(taskid+'/'+tast+'/'+quoteamount+'/'+quotevaliddate);
    }));
    if($('.inputdialog_button_ok').click(function()
       {
        
       //$('.inputdialog').addClass('hidden');
       //$('body').removeClass('opacity_body');
       
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
    var tast='showeditquote';
     var taskid = qtid;
     
    
    var quoteamount =$('#quoteamout').val();
    var quotevaliddate =$('#quotevaliddate').val();
    var  gdty =quotevaliddate.substr(6,10);
     var gdtm =quotevaliddate.substr(3,2);
     var gdtd =quotevaliddate.substr(0,2);
  //alert(qcurrency+':'+qexpirydate+':'+qnote);
   var edate =(gdty+'-'+gdtm +'-'+gdtd);
   var quotevaliddatetime =edate+' '+fmtime;
    var editquotedata='t_tast='+tast+
                      '&t_quoteamount='+quoteamount+
                      '&t_quotevaliddate='+quotevaliddatetime+
                      '&t_tastid='+taskid;
                      
            if($('#quoteamout').val('')) 
            {     
                     
             $('#quoteamout').css('border','5px solid red');
             $('.inputdialog_header').html('Quote Amount Please!'); 
            }
            if($('#quotevaliddate').val('')){
              $('#quotevaliddate').css('border','5px solid red');
             $('.inputdialog_header').html('Please!');  
            }  
            if (quoteamount.length>1 && quotevaliddate.length>1)
            
            {
    
    //alert(quoteamount+'%%%'+quotevaliddatetime+'and'+tast+'and'+taskid);
              	
                  $.ajax({
			//this is the php file that processes the data and send mail
			url: "public/ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: editquotedata,
            beforeSend: function() 
		         {
		          $('.inputdialog').html('Loading');
		        },		
			//success
			success: function (data)
                 {	
                    //alert(data);
                    var result =$.trim(data);
                    if(result==200){
                        $('#quoteamout').val('');
                        $('#quotevaliddate').val('');
                        window.location.reload();   
                    }
          	//alert(html);
				} 
           		
		});
              
            }      
       
       
       return false;
    }));
  }
  function processcancellquote(qtid){
    
   //alert(qtid);
    
    $('.fm_dialog').removeClass('hidden');
    if($('.fm_dialog_header_close').click(function()
       {
       $('.fm_dialog').addClass('hidden');
    }));
  if($('.fm_dialog_button_no').click(function()
       {
       $('.fm_dialog').addClass('hidden');
       return false;
    }));
    if($('.fm_dialog_button_ok').click(function()
       {
         
         var task ='cancellquote';
         var taskid = qtid;
         var cancellquotedata='t_tast='+task+
                              '&t_taskid='+taskid;
                              
            alert(qtid);                  
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"/ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: cancellquotedata,
             beforeSend: function() 
		         {
		          $('.fm_dialog').html('Loading');
		        },		
			//success
			success: function (data)
                 {	
                    alert(data)
                    var result =$.trim(data);
                    if(result==202)
                    {
                     window.location.reload();   
                    }
                    
                    
					//alert(html);
				} 
           		
		});
       return false;
    }));
  
  }
 function showfmpayingaccount(amount,tid){
    //alert(amount+'/ '+tid)
 var successtxt = '<a class ="fz11"><span style="font-size:16pt">Freightmeta<span></a> Freight Shipping Team will send you e-mail back after <strong>Verification validation</strong>';
 var paymentdiv='';
 var account ='XXXXXXXXXXXXXXXX';
            
    $('.paycontent').removeClass('hidden');
    $('.payacount').html(account);
    $('.theamountof').html('<a>'+amount+'EUR</a>');
    
     if($('.fm_dialog_header_close').click(function()
       {
       $('.paycontent').html('');
       //window.location.reload();
    }));
    
    if($('.valid').click(function()
       {
        
        //alert('what');
        if($('#payamout').val(''))
        {
        $('#payamout').val('Please Enter Your code');
        $('#payamout').css('border','2px solid red');
        }
        if($('#payamout').val().length<10)
        {
        $('#payamout').val('Your code is more than 10 caracters');
        $('#payamout').css('border','2px solid red');
        }
        else
        {
      var tast = 'paymentcode';
      var paymentcode =$('#payamout');
      var taskid =tid;
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
      
      var fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+hr+':'+mn+':'+sc);
      var pdata='t_tast='+tast+
            '&t_taskid='+taskid+
            '&t_amount='+amount+
            '&t_code='+paymentcode.val()+
            '&t_addeddatetime='+fmdatetime;
      
          $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: pdata,		
			//success
			success: function (data)
                 {	
                        window.location.reload(); 
				} 
           		
		});
        }
    
    }));
     //window.location.reload(); 
    //return false;
 }//end process
 
 
 function cancelldiscount(discountid){
    var t_task =('#cancelldiscount');
    var discountdta ='t_tast='+t_task.val() +
                     '&t_tastid='+discountid;
   	$.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_canceller.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: discountdta,		
			//success
			success: function (html)
                 {	 
                 $('.successbox').removeClass('hidden');
				} 
           		
		});
   }//end func
   
   
 ///for future dev
   function reportpdffee(feeid)
{
    alert(feeid);
}
   function printfee(feeid)
{
    alert(feeid);
}
   function adminsays(ttrid)
{
    alert(ttrid);
    
}
//Flag question
function flagquestion(questionid){
    
    $('.inputdialog').removeClass('hidden');
    $('.inputdialog_header').html('Frag Question?');
    $('.inputdialog_boby').html('Flag Question Request?.');
 if($('.inputdialog_button_no').click(function()
      {
       $('.inputdialog').addClass('hidden');
       $('html').removeClass('opacity_body');
       return false;
    }));
    
    if($('.inputdialog_button_ok').click(function()
       {
        $('.inputdialog_header').addClass('hidden');
        $('.fm_dialog_sep').addClass('hidden');
        $('.inputdialog_button_wrapper').addClass('hidden');
        $('.inputdialog_boby').html('Loading...');
        
        //class="dynamin'.$talkid.'c"
        var questionflaged=$('.dynamin'+questionid+'c');
        var task='flagquetion';
        //alert('.dynamin'+questionid+'c');
        var pdata='t_tast='+task+
            '&t_taskid='+questionid;
            
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: pdata,		
			//success
			success: function (data)
                 {	
       $('.inputdialog_boby').html('<center>Thank you</center>');
       setInterval(function()
        {
        $('.inputdialog').addClass('hidden');  
           },5000);
        questionflaged.css('border','2px solid red');
      return false;          
				} 
           		
		});
       
    }));
    //alert(questionid);
} // flagquestion


//Flag question
function flaganswer(answerid){
    //alert(answerid)
    
    $('.inputdialog').removeClass('hidden');
    $('.inputdialog_header').html('Frag Answer?');
    $('.inputdialog_boby').html('Flag Answer Request?.');
 if($('.inputdialog_button_no').click(function()
      {
       $('.inputdialog').addClass('hidden');
       $('html').removeClass('opacity_body');
       return false;
    }));
    
    if($('.inputdialog_button_ok').click(function()
       {
        $('.inputdialog_header').addClass('hidden');
        $('.fm_dialog_sep').addClass('hidden');
        $('.inputdialog_button_wrapper').addClass('hidden');
        $('.inputdialog_boby').html('Loading...');
        
        //class="dynamin'.$talkid.'c"
        var answerflagedSender=$('.senderdiv'+answerid+'set');
        var answerflagedTransporter=$('.transporterdiv'+answerid+'set');
        var task='flaganswer';
        //alert('.dynamin'+questionid+'c');
        var pdata='t_tast='+task+
            '&t_taskid='+answerid;
            
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: pdata,		
			//success
			success: function (data)
                 {	
       $('.inputdialog_boby').html('<center>Thank you</center>');
       setInterval(function()
        {
        $('.inputdialog').addClass('hidden');  
           },5000);
        answerflagedSender.css('border','2px solid red');
        answerflagedTransporter.css('border','2px solid red');
      return false;          
				} 
           		
		});
       
    }));
    
    //alert(questionid);
}  //flaganswer
 //Read quote note
 var quote ='"';
 var note;
 var notevalue =quote+note+quote;
function readquotenote(notevalue,id){
    $('.open'+id).removeClass('hidden');
    var box = '<div class="fm_dialog_header diologrounder7">'+
'<div class="fm_dialog_header_text">Quote notificationt</div>'+
'<div class="fm_dialog_header_close fl diologrounder7">X</div>'+
'</div>'+
'<p class="fm_dialog_boby" style="text-align: left;">'+notevalue+
'</p>'+
'<div style="clear: both;"></div>';
$('.open'+id).html(box);
 if($('.fm_dialog_header_close').click(function()
 {$('.open'+id).addClass('hidden');
  //$('html').removeClass('opacity_body');
    }));
} //readquotenote
  function process_customer_qbook(quoteid,sid){
     $('.fm_dialog').removeClass('hidden');
     $('.fm_dialog').html('Loading');
    //alert(quoteid+'/'+sid);
      var task ='quotebook';
      var taskid =quoteid;
      var taskof =sid;
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
      
      var fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+hr+':'+mn+':'+sc);
      var pdata='t_tast='+task+
                '&t_tastid='+taskid+
                '&taskof='+taskof+
                '&t_addeddatetime='+fmdatetime;
      $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: pdata,		
			//success
			success: function (data)
                 {
                    var result =$.trim(data);
                    //alert(result);
                    if(result==210){
      var note ='Thank you!, a e-mail notification has been sent to your freight transpoter!'
      var boxmsn='<p class="fm_dialog_boby" style="text-align: left;">'+note+
                 '</p>'+'<div style="clear: both;"></div>';
      $('.fm_dialog').html(boxmsn); 
      setInterval(function()
        {
        $('.fm_dialog').addClass('hidden');  
           },5000);
                
                    }//if
                if(result==211)
                {
                         $('.fm_dialog').html('Quote already booked!'+result);
                      setInterval(function()
                      {$('.fm_dialog').addClass('hidden');  
                      },5000);    
                    }//if
                  
                   } //success
                    
       
		});  //ajax               
}//process_customer_qbook
 //Proce accept booked quote
function processAcceptbookedf(bookid,amount,curruncyid){
    $('.fm_dialog').removeClass('hidden');
    //alert(curruncyid+'/'+amount);
    var dataconvert = 'currencyid='+curruncyid+
                      '&amounto='+amount;
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
      
      var fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+hr+':'+mn+':'+sc);
         
     $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_currency_converter.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: dataconvert,		
			//success
			success: function (data)
                 {
                    //alert(data);
                    var result =$.trim(data);
                    var percent= ((result * 7)/100).toFixed(2);
                    $('#quotemeaount').html(percent+'EUR');
          if($('.fm_dialog_button_ok').click(function()
       {
        var tast ='acceptbook';
         var tobook =bookid;
        var accceptdata ='t_tast='+tast+
                         '&tobookid='+bookid+
                         '&quotepay='+percent+
                         '&bookdatetime='+fmdatetime;
       //alert(bookid+'//'+percent+ fmdatetime+tast+tobook);
        $('.fm_dialog').html('Loading');
        
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: accceptdata,		
			//success
			success: function (data)
                 {
                    //alert(data);
                    var result =$.trim(data);
                    //$('.fm_dialog').addClass('hidden');
                    //window.location.reload();
                    if(result==214){
      var note ='Thank you!, a e-mail notification has been sent!'
      var boxmsn='<p class="fm_dialog_boby" style="text-align: left;">'+note+
                 '</p>'+'<div style="clear: both;"></div>';
      $('.fm_dialog').html(boxmsn); 
      setInterval(function()
        {
        $('.fm_dialog').addClass('hidden');  
           },5000);
                //window.location.reload();
                    }//if
                    
                 if(result==213){
      var note ='Freight already booked, Please check your E-mail!'
      var boxmsn='<p class="fm_dialog_boby" style="text-align: left;">'+note+
                 '</p>'+'<div style="clear: both;"></div>';
      $('.fm_dialog').html(boxmsn); 
      setInterval(function()
        {
        $('.fm_dialog').addClass('hidden');  
           },7000);
                //window.location.reload();
                    }//if
                  
                   } //success
                    
       
		});  //ajax 
        
       //$('.fm_dialog').addClass('hidden');
       return true;
    }));
                 
                   } //success
                    
       
		});  //ajax
     //$('.fm_dialog').html('Loading');

  if($('.fm_dialog_button_no').click(function()
       {
       $('.fm_dialog').addClass('hidden');
       return false;
    }));
    
    
    
     
    ///alert(bookid+'//'+percent);
}//end

function processCancellbookedf(bookid){
    //alert(bookid);
    var tast='cancellcbook';
    var cancellbook ='t_tast='+tast+
                     '&tobookid='+bookid;
    $('.fm_dialog').removeClass('hidden');
    $('.fm_dialog_header_text').html('Cancell Customer Booked');
    $('.fm_dialog_boby').html('Are you sure to Cancell this Booked?');
    
    if($('.fm_dialog_button_no').click(function()
       {
       $('.fm_dialog').addClass('hidden');
       return false;
    }));
    
    if($('.fm_dialog_button_ok').click(function()
       {
       $('.fm_dialog').html('Loading');
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: cancellbook,		
			//success
			success: function (data)
                 {
                   // alert(data);
                    var result =$.trim(data);
                    //$('.fm_dialog').addClass('hidden');
                    //window.location.reload();
                    if(result==216){
      var note ='Thank you!, a e-mail notification has been sent to the customer!'
      var boxmsn='<p class="fm_dialog_boby" style="text-align: left;">'+note+
                 '</p>'+'<div style="clear: both;"></div>';
      $('.fm_dialog').html(boxmsn); 
      setInterval(function()
        {
        $('.fm_dialog').addClass('hidden');  
           },5000);
                //window.location.reload();
                    }//if
                  
                   } //success
                    
       
		});  //ajax
       return true;
    }));
    
   }//


//AJAX ADD FREIGHT BEFORE LOGIN
function floadershow() 
    {
    $('.fmloader').html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
     //refresh()
    }
function floadershow2() 
    {
    $('#pagination_system').html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
     //refresh()
    }
function floaderhide() 
      {
        $('.fmloader').html('');
      }
//This is the Pagination Function
/*
function vpb_pagination_system(page_id)
 {	
	var dataString = "page=" + page_id;
	$.ajax({  
		type: "POST",  
		url: "https://freightmeta.com/public/pagingdta.php",  
		data: dataString,
		beforeSend: function() 
		{
		 floadershow2();
		},  
		success: function(response)
        
		{
		  //alert(response);
			$("#pagination_system").fadeIn(2000).html(response);
		}
	});
 }
 */
function changePagination(pageId,liId){
      $(".flash").show();
      $(".flash").fadeIn(400).html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
      var dataString = 'pageId='+ pageId;
      $.ajax({
      type: "POST",
      url: FmUrlpublic+"pagingdta.php",
      data: dataString,
      success: function(result){
               $(".flash").html('');
               $(".link a").css('background-color','#fff') ;
               $("#"+liId+" a").css('background-color','#99A607') ;
               $("#pageData").html(result);
      }
      });
}//changePagination()
//$("#freight_next").hide();
function setbg(val,id){
    document.getElementById(id).style.backgroundColor=val;
}
//Redirect user afer new freight added in the first level
function redirectuserfirstlogin()
   {
   window.location.replace(FmUrlpublic+"customer_congrate.php?status=freightadded1")
   }

//Redirect user afer new freight added in the first level
function redirect_ttr_reg()
   {
   window.location.replace(FmUrlpublic+'ttr_feedback1.php?status=THK')
   }
function ajax_form()
{
    
}
//Redirect transporter on submit ok
function redirect_t()
   {
   window.location.replace(FmUrlpublic+"customer_congrate.php")
   }

//Transport register get inputs
function ajax_form_t()

{	
}
 
function ajax_form_popup(form, site_url, link_id, id)
{
	$('#loaderimage').show();
	var req = jQuery.post(site_url, jQuery('#'+form).serialize(), 
		function(html)
		{
			//alert(html);
			if(html == "db_error"){
				alert('db error');	
			}
			var explode = html.split("\n");
			
			var shown = false;
			var msg = '<b>You have the following errors:</b><br>';
			for(var i in explode)
			{
				var explode_again = explode[i].split("|");
				if (explode_again[0]=='error')
				{
					if ( ! shown ) {
						jQuery('#' + link_id).show();
						
					}
					shown = true;
					add_remove_class('ok','error',explode_again[1]);
					jQuery('#err_' + explode_again[1]).html(explode_again[2]);
					msg += "&bull; " + explode_again[2] + "<br>";
				}
				else if (explode_again[0]=='ok') {
					add_remove_class('error','ok',explode_again[1]);
					jQuery('#err_' + explode_again[1]).hide();
				}
				else{
					break;	
				}
			}
			
			if ( ! shown )
			{
				jQuery('#' + link_id).hide();
				jQuery('#' + link_id).html("Success");
				add_remove_class('error','success',link_id);
				//jQuery('#' + link_id).show();
				ajax_form_oncomplete(id);
				$('#loaderimage').fadeOut('slow', function() {
					$('#loaderimage').hide();
				});
				
			}
			else {
				add_remove_class('success','error',link_id);
				jQuery('#' + link_id).html(msg + "");
				$('#loaderimage').fadeOut('slow', function() {
					$('#loaderimage').hide();
				});
			}
			
			req = null;
		}
		
	);
	
}



function ajax_form_with_success_message(form, site_url, link_id, id, success_message)
{
	$('#loaderimage').show();
	var req = jQuery.post(site_url, jQuery('#'+form).serialize(), 
		function(html)
		{
			//alert(html);
			if(html == "db_error"){
				alert('db error');	
			}
			var explode = html.split("\n");
			
			var shown = false;
			var msg = '<b>You have the following errors:</b><br>';
			for(var i in explode)
			{
				var explode_again = explode[i].split("|");
				if(explode_again[0]=='error')
				{
					if(!shown){
						jQuery('#' + link_id).show();
					}
					shown = true;
					add_remove_class('ok','error',explode_again[1]);
					jQuery('#err_' + explode_again[1]).html(explode_again[2]);
					msg += "&bull; " + explode_again[2] + "<br>";
					scroll(0,0);
				}
				else if (explode_again[0]=='ok') {
					add_remove_class('error','ok',explode_again[1]);
					jQuery('#err_' + explode_again[1]).hide();
					scroll(0,0);
				}
				else{
					break;	
				}
			}
			
			if (!shown)
			{
				jQuery('#' + link_id).html(success_message);
				add_remove_class('error','success',link_id);
				jQuery('#' + link_id).show();
				ajax_form_oncomplete(id);
				$('#loaderimage').fadeOut('slow', function() {
					$('#loaderimage').hide();
				});
				
			}
			else {
				add_remove_class('success','error',link_id);
				jQuery('#' + link_id).html(msg + "");
				$('#loaderimage').fadeOut('slow', function() {
					$('#loaderimage').hide();
				});
			}
			
			req = null;
		}
		
	);
	
}


function ajax_form_with_success_message_and_oncomplete(form, site_url, link_id, id, success_message)
{
	$('#loaderimage').show();
	var req = jQuery.post(site_url, jQuery('#'+form).serialize(), 
		function(html)
		{
			//alert(html);
			if(html == "db_error"){
				alert('db error');	
			}
			var explode = html.split("\n");
			
			var shown = false;
			var msg = '<b>You have the following errors:</b><br>';
			for(var i in explode)
			{
				var explode_again = explode[i].split("|");
				if (explode_again[0]=='error')
				{
					if ( ! shown ) {
						jQuery('#' + link_id).show();
						
					}
					shown = true;
					add_remove_class('ok','error',explode_again[1]);
					jQuery('#err_' + explode_again[1]).html(explode_again[2]);
					msg += "&bull; " + explode_again[2] + "<br>";
				}
				else if (explode_again[0]=='ok') {
					add_remove_class('error','ok',explode_again[1]);
					jQuery('#err_' + explode_again[1]).hide();
				}
				else{
					break;	
				}
			}
			
			if ( ! shown )
			{
				jQuery('#' + link_id).html(success_message);
				add_remove_class('error','success',link_id);
				jQuery('#' + link_id).show();
				ajax_form_oncomplete(id);
				$('#loaderimage').fadeOut('slow', function() {
					$('#loaderimage').hide();
				});
				
			}
			else {
				add_remove_class('success','error',link_id);
				jQuery('#' + link_id).html(msg + "");
			}
			
			req = null;
		}
		
	);
	
}
//alert(selectkeyword);
 //var selecttext = $('#selectkeyword').val(); 
 //var selectkeyword = $('#searchword').val();
//if($('#searchkeyword').val('')){
 //  vpb_pagination_system('1',selecttext);  
//}
//if($('#searchword').val('')){
  // vpb_pagination_system('1','',selecttext);  
//} 
function OnchangeSelect(){
    var ckecked = $('.cat_checkbox:input:checked').val();
    //var ckeckedtext = $('.cat_checkbox:input:checked').text();
    //alert(ckeckedtext);
    return vpb_pagination_system(1,ckecked);
}//nchangeSelect()
    //This is the Pagination Function
//var  =  $('#searchkeyword');
function vpb_pagination_system(page_id,sortword)
 {
  //.delay(1000);
 $('.fulldivloader').removeClass('hidden');
  //$('#listfreightmain').addClass('bg45');
 $('#listfreightmain').empty()
 .load(FmUrlpublic+"pagingdta.php?page="+page_id+"&fsorting="+sortword,{ajax: false})
 .slideUp(500)
 .delay(1000)
 .fadeIn(700, function()
 {
    $('.fulldivloader').addClass('hidden');
 });

 }//vpb_pagination_system
 function Oncheck(){
    var ckecked = $('.cat_checkbox:input:checked').val();
    //var ckeckedtext = $('.cat_checkbox:input:checked').text();
    //alert(ckeckedtext);
    return vpb_pagination_systemd(1,ckecked);
}//nchangeSelect()

 //vpb_pagination_systemd
 function vpb_pagination_systemd(page_id,sortword)
 {
  //.delay(1000);
 $('.fulldivloader').removeClass('hidden');
  //$('#listfreightmain').addClass('bg45');
 $('#listdiscounthtmain').empty()
 .load(FmUrlpublic+"dicount_paging.php?page="+page_id+"&fsorting="+sortword,{ajax: false})
 .slideUp(500)
 .delay(1000)
 .fadeIn(700, function()
 {
    $('.fulldivloader').addClass('hidden');
 });

 }//vpb_pagination_systemd
 
//load transporter review
function transporterinfo(){
  vpb_pagination_system(1);
 function vpb_pagination_system(page_id)
 {	
    //alert(word+'/'+sortword);
    //var ser $('#searchkeyword').
	//var dataString = "page=" + page_id;
    //alert(page_id);
      var task ='loadtreview';  
      var dataString='t_tastid='+page_id+
                     '&t_tast='+task;
	
    
    $.ajax({  
		type: "POST",  
		url:FmUrlpublic+"ajax_util.php",  
		data: dataString,
		beforeSend: function() 
		{
		 floadershow2();
		},  
		success: function(response)
        
		{
		  //alert(response);
			$("div#transporterinfo").fadeIn('slow').html(response);
            //return true;
		},
        error: function(response)
          {
          $("div#transporterinfo").fadeIn('slow').html('<span>An error occured.</span>');
        }
	});//ajax
     
 }//vpb_pagination_system       
}//transporterinfo

$(function() {
    var progressbar = $( "#progressbar" ),
      progressLabel = $( ".progress-label" );
    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
      },
      complete: function() {
        progressLabel.text( "Complete!" );
      }
    });
    function progress() {
      var val = progressbar.progressbar( "value" ) || 0;
      progressbar.progressbar( "value", val + 1 );
      if ( val < 99 ) {
        setTimeout( progress, 100 );
      }
    }
    setTimeout( progress, 3000 );
  });

//loadshippingdiscount(1);
function loadshippingdiscount(pageid)
{	
    //alert(word+'/'+sortword);
    //var ser $('#searchkeyword').
	//var dataString = "page=" + page_id;
    //alert(page_id);
      var task ='loadtshippingdiscount';  
      var dataString='t_tastid='+pageid+
                     '&t_tast='+task;
	$.ajax({  
		type: "POST",  
		url: FmUrlpublic+"ajax_util.php",  
		data: dataString,
		beforeSend: function() 
		{
		 floadershow2();
		},  
		success: function(response)
        
		{
		  //alert(response);
			$("div#pagination_system").fadeIn('slow').html(response);
            //return true;
		}
	});//ajax
   
}



function ajax_form_oncomplete(id)
{

/*
	if(id == 'postfreight1'){
		window.location = 'list_freight2.php';
	}	
	if(id == 'postfreight2'){
		window.location = 'list_freight3.php';
	}	
	if(id == 'postfreight2edit'){
		window.location = 'list_freight3.php?edit=true';
	}		
	if(id == 'login'){
		window.location = 'dashboard.php';
	}
    */
	if(id == 'question'){
		$('#form-question').hide();
		$('#question-respond-to').hide();
		$('#success').show();
		//location.reload(true);
		//$('#question-successbox').show();
	}	
	if(id == 'quotequestion'){
		$('#form-question').hide();
		$('#question-respond-to').hide();
		$('#success').show();
	}		
	if(id == 'declinequote'){
		$('#form-decline').hide();
		$('#success').show();
	}		
	if(id == 'extendfreight'){
		$('#form-extend').hide();
		$('#success').show();
	}	
	if(id == 'extendquote'){
		$('#form-extend').hide();
		$('#success').show();
	}			
	if(id == 'forgotpassword'){
		$('#form-forgot').hide();
		$('#passwordtext').hide();
		$('#success').show();
	}		
	if(id == 'forgotusername'){
		$('#form-forgot').hide();
		$('#usernametext').hide();
		$('#success').show();
	}			
	if(id == 'updatepassword'){
		$('#form-password').hide();
	}		
	if(id == 'reviewresponse'){
		$('#form-reviewresponse').hide();
		location.reload(true);
	}	
	
	if(id == 'quotefreight'){
		$('#quote_div').hide();
		$('#success_message').show();
	}		
	if(id == 'registercustomer'){
		window.location = 'dashboard.php?new=1';
	}	
	if(id == 'registercarrier'){
		$('#carrier-top-info').hide();
		$('#form-account').hide();
		$('#success_message').show();
		//window.location = 'dashboard.php?new=1';
	}		
	if(id == 'cancelbooking'){
		$('#form-cancel').hide();
		$('#success').show();		
	}	
	if(id == 'cancelbookingconfirm'){
		$('#form_div').hide();
		$('#success').show();		
	}		
	if(id == 'bookingcompletecarrier'){
		$('#form-complete').hide();
		$('#success').show();	
	}
	if(id == 'bookingcompletecustomer'){
		$('#form-complete').hide();
		$('#success').show();		
	}	
	if(id == 'reviewcarrier'){
		window.location = 'my_freight.php?status=complete';
	}		
}


function add_remove_class(search,replace,element_id)
{
	if (jQuery('#' + element_id).hasClass(search)){
		jQuery('#' + element_id).removeClass(search);
	}
	jQuery('#' + element_id).addClass(replace);
} 
    
 $(document).ready(function()
{
$('.active-links, #login_icon,#arrow_header').click(function () {
        if ($('#login_fm').is(":visible")) {
            $('#login_fm').hide()
            $('#session').removeClass('active');
        } else {
            $('#login_fm').show()
            $('#session').addClass('active');
        }
        return false;
    });
    $('#login_fm').click(function(e) {
        e.stopPropagation();
    });
    $(document).click(function() {
        $('#login_fm').hide();
        $('#session').removeClass('active');
    });

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
	
$('#pwd_clear').show();
$('#pwd_shown').hide();

$('#pwd_clear').focus(function() {
    $('#pwd_clear').hide();
    $('#pwd_shown').show();
    $('#pwd_shown').focus();
    //alert('Pwd');
});
$('#pwd_shown').blur(function() {
    if($('#pwd_shown').val() == '') {
        $('#pwd_clear').show();
        $('#pwd_shown').hide();
    }
}); 
/*
 $("input.choosefile").filestyle({ 
          image: "images/btn/choose-file.gif",
          imageheight : 32,
          imagewidth : 96,
          width : 200
      });
      */
 //clean inputs 
$("#valueblur").on("focus", function(){$("#valueblur").val("");});  
$("#inputorigin").on("focus", function(){$("#inputorigin").val("");});
$("#inputdestination").on("focus", function(){$("#inputdestination").val("");});

//$("#addfreight_container_left input").on("focus", function(){$("#addfreight_container_left input").val("");});

    //Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
    
        
	return false;   
});
//AJAX ADD FREIGHT BEFORE LOGIN
function floadershow() 
    {
     $('.fmloader').html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
     //refresh()
    }
    function floadershow2() 
    {
    $('#pagination_system').html('<div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div>');
     //refresh()
    }
    function floaderhide() 
      {
        $('.fmloader').html('');
      }
   

function find_freight_subcat()
  {
 //alert( 'Oops');
  floadershow();
  var pcat = $('#category>option:selected').val();
  $('#category').addClass('opacity');
  $('#subcategory').addClass('hidden');
  $('#subcategories').addClass('hidden');
  $('#loadata-container').addClass('hidden');
  //alert('END'+pcat);	
           $.ajax({ 
            url: FmUrlpublic+"subcategory_ajax.php", 
            type: "POST",  
            data:   "mycat="+pcat,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            success:function(apantisi){ 
            $("#subcategory").html(apantisi); 
            $("#subcategory").removeClass('hidden');
            $("#subcategories").removeClass('hidden');
            $("#loadata-container").removeClass('hidden');
            $('#category').removeClass('opacity');
            floaderhide();
            } 
        });
 }//end func
 
 //Load freight details based on freightsubcategory
 function load_freight_details()
  {
 //alert( 'Oops');
  floadershow();
  var pcat = $('#category>option:selected').val();
  $('#category').addClass('opacity');
  $('#subcategory').addClass('hidden');
  $('#subcategories').addClass('hidden');
  $('#loadata-container').addClass('hidden');
  //alert('END'+pcat);	
           $.ajax({ 
            url: FmUrlpublic+"subcategory_ajax.php", 
            type: "POST",  
            data:   "mycat="+pcat,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            success:function(apantisi){ 
            $("#subcategory").html(apantisi); 
            $("#subcategory").removeClass('hidden');
            $("#subcategories").removeClass('hidden');
            $("#loadata-container").removeClass('hidden');
            $('#category').removeClass('opacity');
            floaderhide();
            } 
        });
 }//end func
setInterval(function(){
      // Do something every 1seconds
  var fmdatetime;				
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

  fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc);
        var myjson=fmdatetime;        
        $.ajax({ 
        type: "GET",
        dataType : 'json',
        async: false,
        url: freightmeta+'data/json.php',
        data: { data: JSON.stringify(myjson)},
        success: function () {/*alert("Thanks!");*/ },
        failure: function() {/*alert("Error!");*/}
    });
     },1000);
     
function processquote()
 {
    //alert('itme');
    
     
 $('#loaderimage').show();
  var amount = $("#fquote").val();
  var memberid = $('#ttrid').val();
  var freightid = $('#fid').val();
  var qcurrency = $('#currency').val();
  var qpostedt = $('.stayuntil').val();
  var qnote = $('#qnote').val();
  var freightpickupdate = fmdatetimeinput('#pickupfreightdte');
  
  var gdty =qpostedt.substr(6,10);
  var gdtm =qpostedt.substr(3,2);
  var gdtd =qpostedt.substr(0,2);
  //alert(qcurrency+':'+qexpirydate+':'+qnote);
  qexpirydate =(gdty+'-'+gdtm +'-'+gdtd);
  var fmdatetime;				
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

  fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc);
  fmtime=(hr+':'+mn+':'+sc);
  var qexpirydatetime=qexpirydate+' '+fmtime;
  

    var resultamount = $.trim(amount);
    var resultmemberid = $.trim(memberid);
    var resultfreightid = $.trim(freightid);
    var resultqcurrency = $.trim(qcurrency);
    var resulqexpirydatetime = $.trim(qexpirydatetime);
    var resulqnote = $.trim(qnote);
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
   //alert(qexpirydatetime+'//'+resultqcurrency);
    if(
       (resultamount =='') || 
       (numberRegex.test(resultamount)===false)||
       (resultqcurrency =='') ||
       (resulqexpirydatetime =='') ||
       (resulqnote =='' && resulqnote.length>30)
      ) 
    {
       // (resultqcurrency !=='') || 
    //(resulqexpirydate !=='') || 
    //(resulqnote !=='')successbox
      $('#qcontrol').removeClass('hidden');
      $('#qcontrol').addClass('failurebox');
     
      $('#qcontrol').html('<p style="font-size:16pt">PLease all fields are required...</p>');
      
      setInterval(function(){
      // Do something every 10 seconds
      $('#qcontrol').addClass('hidden');
     },2000);
    $('#loaderimage').hide()
    }
    else{
        //alert('code began');
              var quote_inputs=
              'amount='+resultamount+
              '&memberid='+memberid+
              '&freightid='+freightid+
              '&qdatetime='+fmdatetime+
              '&freightpickdatetime='+freightpickupdate+
              '&qexpirydatetime='+resulqexpirydatetime+
              '&qcurrency='+resultqcurrency+
              '&qnotif='+resulqnote;
  //alert('END'+pcat);	
           $.ajax({ 
            url: FmUrlpublic+"ajax.quote.php", 
            type: "POST",  
            data:quote_inputs,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            success:function(data){ 
            //alert(data);
             //$('#loaderimage').hide()  
                var resultb =$.trim(data);
                  if(resultb=='ok')
                   {  
            $('#qcontrol').addClass('successbox');
            $('#qcontrol').html('<p style="font-size:16pt">Your Quote has been successfully listed...</p>');
            $('.quoteone').addClass('hidden');
            $('.qmore').removeClass('hidden');
             $('#loaderimage').hide(); 
             }//end if
					
              else{
                $('#qcontrol').removeClass('hidden');
                $('#qcontrol').addClass('failurebox');
                $('#qcontrol').html('<p style="font-size:16pt">The freight was quoted, Please another freight one...</p>');
              $('#loaderimage').hide()
             }//end else
            } 
             
        });
        setInterval(function()
        {
        window.location.reload();  
           },10000);    
     
     }//else
    //}//close func
    }//end process



var timeoutReference;
$(function(){
    $('.val1').keypress(function()
    {
        var _this = $(this); // copy of this object for further usage
  
        if (timeoutReference) clearTimeout(timeoutReference);
        timeoutReference = setTimeout(function() {
            //alert(_this.val());
            var homeaddr=_this.val();
        $.ajax({  
            type: "GET", 
            dataType : 'json',
            async: false, 
            url: freightmeta+"data/set_home_addr.php",
            data:{ data: JSON.stringify(homeaddr)},
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            success:function(html){alert(html);},
            failure: function() {/*alert("Error!");*/}  
               
        });
        },10000);
         
    });
});
var timeoutReference2;
$(function(){
    $('.val2').keypress(function()
    {
        var _this = $(this); // copy of this object for further usage
        
        if (timeoutReference2) clearTimeout(timeoutReference2);
        timeoutReference2 = setTimeout(function() {
              var destaddr=_this.val();
        $.ajax({  
            type: "GET", 
            dataType : 'json',
            async: false, 
            url: freightmeta+"data/set_dest_addr.php",
            data:{ data: JSON.stringify(destaddr)},
            contentType: "application/x-www-form-urlencoded; charset=UTF-8", 
            success:function(html){alert(html);},
            failure: function() {/*alert("Error!");*/}  
              
        });
        //alert(destaddr);
        },10000);
    });
});

function ajax_cupdate(){
    
    var cemail=$('#cemail');
    var cusername=$('#cusername');
    var cphone=$('#cphone');
    var cfirstname=$('#cfirstname');
    var clastname=$('#clastname');
    var ccompanyname=$('#ccompany_name');
    var caddress1=$('#caddress_line1');
    var caddress2=$('#caddress_line2');
    var ccontinent=$('#ccontinent>option:selected');
    var ccountry=$('#ccountry>option:selected');
    var cstate=$('#cprovince>option:selected');
    var cregion=$('#cregion>option:selected');
    var ccity=$('#ccity>option:selected');
    var cpostcode=$('#cpostcode');
    
    var cupdate_input=
          'cemail='+cemail.val()+
          '&cusername='+cusername.val()+
          '&cphone='+cphone.val()+
          '&cfirstname='+cfirstname.val()+
          '&clastname='+clastname.val()+
          '&ccompanyname='+ccompanyname.val()+
          '&caddress1='+caddress1.val()+
          '&caddress2='+caddress2.val()+
          '&cpostcode='+cpostcode.val()+
          '&ccontinent='+ccontinent.text()+
          '&ccountry='+ccountry.text()+
          '&cstate='+cstate.text()+
          '&cregion='+cregion.text()+
          '&ccity='+ccity.text();
          $('#loaderimage').addClass('visible');
         
          //alert('ajax');
		$.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax.cust.idupdate.php",	
			//GET method is used
			type: "POST",
			//pass the data			
			data: cupdate_input,		
			//success
			success: function (data)
                 {	
                    //alert(data);
                    $('.successbox').removeClass('hidden');
                    $('#loaderimage').removeClass('visible');
                    //floaderhide() ;
                    //redirect_ttr_reg();
					//alert(html);
				} 
           		
		});
  
  }//end func

	function loadreview(page){
		//$("#loader").fadeIn('slow');
		$.ajax({
			url:FmUrlpublic+'ajax/review.php?action=ajax&page='+page,
  	        beforeSend: function() {
		         floadershow2();
           },
			success:function(data){
			$("#transporterinfo").html(data).fadeIn('slow');
			}
		})
	}
function login()
{
    return window.location.replace('login?usr=all');
}
function gotoquote()
{
    return window.location.replace('freight_list?status=thankyou');
}

function fmdatetimeinput(element){
    
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
     
     var quotevaliddate =$(element).val();
     var gdty =quotevaliddate.substr(6,10);
     var gdtm =quotevaliddate.substr(3,2);
     var gdtd =quotevaliddate.substr(0,2);

     var edate =(gdty+'-'+gdtm +'-'+gdtd);
     var quotevaliddatetime =edate+' '+fmtime;
    
    return quotevaliddatetime;
  }//end
  //2014-05-28 15:28:53
  //10/05/2014
 function fmdatetimeinputback(element){
    
     var quotevaliddate =element;
     
     var gdty =quotevaliddate.slice(0,4);
     var gdtm =quotevaliddate.slice(5,7);
     var gdtd =quotevaliddate.slice(8,10);
      //var reste =quotevaliddate.slice(8,9);

     var edate =(gdtd+'/'+gdtm +'/'+gdty);
     var quotevaliddatetime =edate;
    
    return quotevaliddatetime;
  }//end 
function expressbookdiscount(disid,transid,currid,disammout)
{
    
    //alert(disid+'/'+transid+'/'+currid+'/'+disammout);
    //Get freight supported by the transporter
    var task='bookshippingdiscount';
    var from_origin=$('#fromorigin'+disid+'').val();
    var to_destination=$('#todestination'+disid+'').val();
    var fromdate = $('#fromdate'+disid+'').val();
    var todate =$('#todate'+disid+'').val();
    var discountprice =$('#discountprice'+disid+'').val();
    var currencyid =$('#currencyid'+disid+'').val();
    var percent= ((disammout * 10)/100).toFixed(2);
    var t_packagedchk=$('#packagedchk'+disid+':input:checked').val();
    var t_buildingchk = $('#buildingchk'+disid+':input:checked').val();
    var t_vehicleschk=$('#t_vehicleschk'+disid+':input:checked').val();
    var t_livestockchk=$('#livestockchk'+disid+':input:checked').val();
    var t_motorcycleschk = $('#t_motorcycleschk'+disid+':input:checked').val();
    var t_petschk=$('#petschk'+disid+':input:checked').val();
    var t_boatchk=$('#t_boatchk'+disid+':input:checked').val();
    var t_foodchk = $('#foodchk'+disid+':input:checked').val();
    var t_heavychk=$('#heavychk'+disid+':input:checked').val();
    var t_specialcarechk=$('#specialcarechk'+disid+':input:checked').val();
    var t_officeremovalschk = $('#officeremovalschk'+disid+':input:checked').val();
    var t_haygrain=$('#haygrain'+disid+':input:checked').val();
    
    var t_containerchk=$('#containerchk'+disid+':input:checked').val();
    var t_householdchk = $('#householdchk'+disid+':input:checked').val();
    
    var t_miningchk=$('#miningchk'+disid+':input:checked').val();
    var t_horseschk=$('#horseschk'+disid+':input:checked').val();
    var t_bulkfreightchk = $('#bulkfreightchk'+disid+':input:checked').val();
    var t_parcelschk=$('#parcelschk'+disid+':input:checked').val();
    
    var datastr ='t_tast='+task+
                 '&taskfor='+transid+
                 '&fromdiscount='+disid+
                 '&discountamount='+disammout+
                 '&currencyid='+currid+
                 '&fromdate='+fromdate+
                 '&todate='+todate+
                 '&palcein='+from_origin+
                 '&placeout='+to_destination+
                 '&t_packagedchk='+t_packagedchk+
                 '&t_buildingchk='+t_buildingchk+
                 '&t_vehicleschkt='+t_vehicleschk+
                 '&t_livestockchk='+t_livestockchk+
                 '&t_motorcycleschk='+t_motorcycleschk+
                 '&t_petschk='+t_petschk+
                 '&t_boatchk='+t_boatchk+
                 '&t_foodchk='+t_foodchk+
                 '&t_heavychk='+t_heavychk+
                 '&t_specialcarechk='+t_specialcarechk+
                 '&t_officeremovalschk='+t_officeremovalschk+
                 '&t_haygrain='+t_haygrain+
                 '&t_containerchk='+t_containerchk+
                 '&t_householdchk='+t_householdchk+
                 '&t_miningchk='+t_miningchk+
                 '&t_horseschk='+t_horseschk+
                 '&t_bulkfreightchk='+t_bulkfreightchk+
                 '&t_parcelschk='+t_parcelschk+
                 '&t_topay='+percent;
    //alert(t_containerchk);
    
       $.ajax({  
		type: "POST",  
		url: FmUrlpublic+"ajax_util.php",  
		data: datastr,
		beforeSend: function() 
		{
		  $('.fm_dialog')
          .removeClass('hidden')
          .html('Loading');
		},  
		success: function(response)
		{
		  $('.fm_dialog').html(response) ;
		  setInterval(function()
        {
            $('.fm_dialog').addClass('hidden'); 
           },3000);  
		   
          //alert(response);
          $('#loaderimage').hide();
            //$('#searchkeyword').val(response);
		}
	});//ajax
    
    //alert(fromdate);
     //alert(disid+'/'+discountprice+'/'+disammout+'/'+transid+'/'+currid);
} 
function flagdiscount(discountid)
{
   // alert(discountid);
    $('.fm_dialog_flag').removeClass('hidden');
    $('.fm_dialog_header_text').html('Flag Shipping Discount');
    $('.fm_dialog_boby').html('Flag Shipping Discount Request?.');
 if($('.fm_dialog_button_no').click(function()
      {
       $('.fm_dialog_flag').addClass('hidden');
       //$('html').removeClass('opacity_body');
       return false;
    }));
    
    if($('.fm_dialog_button_ok').click(function()
       {
        $('.fm_dialog_header_text').addClass('hidden');
        $('.fm_dialog_sep').addClass('hidden');
        $('.fm_dialog_button_wrapper').addClass('hidden');
        $('.fm_dialog').html('Loading...');
        
        //class="dynamin'.$talkid.'c"
        //var questionflaged=$('.dynamin'+questionid+'c');
        var task='flagdiscount';
        //alert('.dynamin'+questionid+'c');
        var pdata='t_tast='+task+
            '&t_taskid='+discountid;
            
        $.ajax({
			//this is the php file that processes the data and send mail
			url: FmUrlpublic+"ajax_util.php", 	
			//GET method is used
			type: "POST",
			//pass the data			
			data: pdata,
  	       beforeSend: function() 
		{
		  $('.fm_dialog_flag')
          .removeClass('hidden')
          .html('Loading');
		},		
			//success
			success: function (data)
                 {	
       $('.fm_dialog_flag').html('<center>Thank you:'+data+'</center>');
       setInterval(function()
        {
        $('.fm_dialog_flag').addClass('hidden');  
           },5000);
        ///questionflaged.css('border','2px solid red');
      //return false;          
				} 
           		
		});
       
    }));
}

function newsletter(){
    
    var mail = $('#searchkeyword');
    var task='quotenewsletter';
    ///alert(mail.val());
     if(mail.val().length < 1)
        {
          $('#searchkeyword').val('E-mail please!');
          //break;  
        }
    if(mail.val().length > 1){
        
    var datastr ='t_tast='+task+
                 '&taskfor='+mail.val();
        $.ajax({  
		type: "POST",  
		url: FmUrlpublic+"ajax_util.php",  
		data: datastr,
		beforeSend: function() 
		{
		 floadershow2();
		},  
		success: function(response)
		{
		  //alert(response);
            $('#searchkeyword').val(response);
		}
	});//ajax
       
    }
} 
function returndateselect(){
    
    var datetype = $('#datetype>option:selected').val();
    //alert(datetype);
      if(datetype==0){
        $('.ondate').addClass('hidden');
         $('.betweendate').addClass('hidden');
         $('.beforedate').addClass('hidden');
          $('.ondate').val(' ');
         $('.betweendate').val(' ');
         $('.beforedate').val(' ');
    }
    if(datetype==1){
        $('.ondate').removeClass('hidden');
         $('.betweendate').addClass('hidden');
         $('.beforedate').addClass('hidden');
         $('.betweendate').val(' ');
         $('.beforedate').val(' ');
    }
    if(datetype==2){
        $('.betweendate').removeClass('hidden');
         $('.beforedate').addClass('hidden');
         $('.ondate').addClass('hidden');
         $('.beforedate').val(' ');
         $('.ondate').val(' ');
    }
    if(datetype==3){
        $('.beforedate').removeClass('hidden');
        $('.ondate').addClass('hidden');
        $('.betweendate').addClass('hidden');
         $('.ondate').val(' ');
        $('.betweendate').val(' ');
    }
}

function closediv(divid,content){
    //alert(divid);
    
    content =$('#divtitle'+divid+'').val();
    $('.close'+divid).addClass('hidden');
    $('.close'+divid).effect("drop"); 
    $('ul#removeliste').append( '<li id="listidremove'+divid+'"><a   href="#" onClick="backtodiv('+divid+')">'+content+'</a></li>');
}
function backtodiv(divid){
    //alert(id);
    window.location.reload();
    $('.close'+divid).removeClass('hidden');
    $('li#listidremove'+divid).remove();
    $('.close'+divid).effect("transfer");
    $('.control'+divid).effect("transfer");

}
function unlistdiscount(divid){
    //alert(divid);
   $('.control'+divid).addClass('hidden');
  $('.control'+divid).effect("drop"); 
   content =$('#divtitle'+divid+'').val();
   $('ul#removeliste').append( '<li id="listidremove'+divid+'"><a   href="#" onClick="backtodiv('+divid+')">'+content+'</a></li>');
   
}
function hidegmap(){
    $('.fm_dialog').addClass('hidden');
    //$('#middle').removeClass('opacity65');
}

function loadmap(id) 
{
	var location1;
	var location2;
	var latlng;
	var map;
	var distance;
	var geocoder = new google.maps.Geocoder();
	var address1 = document.getElementById('addressin'+id+'').value;
	var address2 = document.getElementById('addressout'+id+'').value;
	
	 //alert('Address1'+address1+'<br />'+'Address2'+address2);
    // Creating a GeocoderRequest object
    var geocoderRequest1 = { address: address1}
	var geocoderRequest2 = { address: address2}
	// Making the Geocode request for the location 1
    geocoder.geocode(geocoderRequest1,function(results, status) 
	{
      // Check if status is OK before proceeding
      if (status == google.maps.GeocoderStatus.OK) 
	  {
	   location1 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
   geocoder.geocode(geocoderRequest2,function(results) 
	   {
	 location2 = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
	 latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);
	
	var mapOptions = 
	{
		zoom: 2,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	// create a new map object
		// set the div id where it will be shown
		// set the map options
    $('.fm_dialog').removeClass('hidden');
	map = new google.maps.Map(document.getElementById("map"), mapOptions);
	
	// show route between the points
	
	directionsService = new google.maps.DirectionsService();
	
	directionsDisplay = new google.maps.DirectionsRenderer(
	{
		suppressMarkers: true,
		suppressInfoWindows: true
	});
	
	directionsDisplay.setMap(map);
	
	var request = {
		origin:location1, 
		destination:location2,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	
	directionsService.route(request, function(response, status) 
	{
		if (status == google.maps.DirectionsStatus.OK) 
		{
			directionsDisplay.setDirections(response);
			distance = "Driving Distance: "+response.routes[0].legs[0].distance.text;
			distance += "<br/>Aproximate driving time is: "+response.routes[0].legs[0].duration.text;
			document.getElementById("distance_road").innerHTML = distance;
		}
	});

	// create the text to be shown in the infowindows
		var text1 = '<div id="content" style="width: 220px;" >'+
		'<div id="bodyContent"style="font-size:15pt" class="bold">'+
		'<p class="pl">Freight Pick up location</p>'+
		'</div>'+
		'</div>';
			
	var text2 = '<div id="content" style="width: 220px;" >'+
		'<div id="bodyContent"style="font-size:15pt" class="bold" >'+
		'<p class="pl">Freight destination</p>'+
		'</div>'+
		'</div>';
	// create the markers for the two locations		
	var marker1 = new google.maps.Marker({
		map: map, 
		position: location1,
		title: "First location",
        content: text2
	});
	var marker2 = new google.maps.Marker({
		map: map, 
		position: location2,
		title: "Second location",
        content: text2
	});
	
	
	
  var infowindow1 = new InfoBubble({ 
            map : map,  
            maxWidth : 400, 
            minWidth : 300, 
            maxHeight : 150, 
            minHeight : 100, 
            shadowStyle : 5, 
            padding :2, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
            //pixelOffset : new google.maps.Size(-1000, -100) 

         }); 
  var infowindow2 = new InfoBubble({ 
            map : map,  
            maxWidth :400, 
            minWidth :300, 
            maxHeight : 150, 
            minHeight : 100, 
            shadowStyle : 1, 
            padding : 2, 
            backgroundColor : '#fdead0', 
            borderRadius : 8, 
            arrowSize : 15, 
            borderWidth : 2, 
            borderColor : '#5aa5cc', 
            disableAutoPan : false, 
            hideCloseButton : false, 
            arrowPosition : 50, 
            arrowStyle : 0 ,
           // pixelOffset : new google.maps.Size(-1000, -100) 

         }); 
    
    //infowindow.close();
		
   		//infowindow.setContent('<h1>Hi this is my Info Window');
 	//	owindow.open(map, info);
    
	// create info boxes for the two markers
	//var infowindow1 = new google.maps.InfoWindow({
	//	content: text1
	//});
	//var infowindow2 = new google.maps.InfoWindow({
	//	content: text2
	//});

	// add action events so the info windows will be shown when the marker is clicked
	google.maps.event.addListener(marker1, 'click', function() {
		infowindow1.open(map,marker1);
        infowindow1.setContent(text1);
        infowindow2.close();
	});
	google.maps.event.addListener(marker2, 'click', function() {
		infowindow2.open(map,marker2);
        infowindow2.setContent(text2);
         infowindow1.close();
	});
	
	// compute distance between the two points
	var R = 6371; 
	var dLat = toRad(location2.lat()-location1.lat());
	var dLon = toRad(location2.lng()-location1.lng()); 
	
	var dLat1 = toRad(location1.lat());
	var dLat2 = toRad(location2.lat());
	
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			Math.cos(dLat1) * Math.cos(dLat1) * 
			Math.sin(dLon/2) * Math.sin(dLon/2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c;
	   
	   });
	  //alert("Location1"+location1+"Location2"+location2);
	  //alert('Loc1 Lat'+location1.lat())
	  
	  }
	  else{
	     alert('Locations  not set');
	  }
	  });
	// center of the map (compute the mean value between the two locations)
	
	
	// document.getElementById("distance_direct").innerHTML = "<br/>The distance between the two points (in a straight line) is: "+d;
//$('#middle').addClass('opacity65');
}

function toRad(deg) 
{
	return deg * Math.PI/180;
}
function addElement() {
  var ni = document.getElementById('myDiv');
  var numi = document.getElementById('theValue');
  var num = (document.getElementById('theValue').value -1)+ 2;
  numi.value = num;
  var newdiv = document.createElement('div');
  var divIdName = 'my'+num+'Div';
  newdiv.setAttribute('id',divIdName);
  newdiv.innerHTML = 'Element Number '+num+' has been added! <a href=\'#\' onclick=\'removeElement('+divIdName+')\'>Remove the div "'+divIdName+'"</a>';
  ni.appendChild(newdiv);
}
function removeElement(divNum) {
  var d = document.getElementById('myDiv');
  var olddiv = document.getElementById(divNum);
  d.removeChild(olddiv);
}

function loadfreightlistsorted(id,element)

{   
    if(element === 'listfreight'){
    if(id == 0){
      $('#loadinglist').removeClass('hidden');
   $('#listfreight').empty().load("listfreight.php?page="+id,{ajax: false}); 
   $('#loadinglist').addClass('hidden');
   }
       }
    
}
function closemaingmap(){
   $('.closemaingmap').click(function(){
    $('.fm_dialog_map').addClass('hidden');
   }); 
}


 








