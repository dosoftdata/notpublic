<?php
require_once 'header.php';
$getfreightid=$_GET['fqttr'];
$getquestid =$_GET['askd'];
$memberid=$_COOKIE["susrid"];
usrlogin::fm_login_check();
usrlogin::sender_login_check();

usrlogin::sessionfreightdivset();
usrlogin::divdisplay_before_login();


//$fid=$_GET['ftoqt'];
//$tid=$_GET['fttrqt']; //Util::StrGet('fttrqt');
//$fid=39;
//$tid=37;

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
 <script type="text/javascript">
// creates and shows the map

</script>
<input  type="hidden" id="ctask" value="canswers"/>
<input  type="hidden" id="questionid" value="<?=$getquestid?>"/>
<input  type="hidden" id="freightid" value="<?=$getfreightid ?>"  />
<input  type="hidden" id="memberid" value="<?= $memberid;?>"  />
 <style type="">
 .item{
	width:100%;
	border-bottom: 1px solid #e5e5e5;
}
     .list-left{
	float:left;
	width:40%;
	text-align:left;
	font-weight:bold;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
.list-right{
	float:left;
	width: 50%;
	text-align:left;
	padding:5px;
	padding-left:0px;
	padding-right: 8px;		
}
textarea#fquestion {
	width: 600px;
	height: 70px;
	border: 3px solid #cccccc;
	padding: 5px;
    resize: none;
}
.success_message{
	border:2px solid #629f13;
	background-color:#f4f4f4; 
	padding:15px;
	margin-top:10px; 
	margin-bottom:20px;	
	background-image:url(../public/images/gen/tick_48.png);
	background-repeat:no-repeat;
	background-position:top left;
	padding-left:70px;
	min-height:25px;
	border-radius:7px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;	
    color: black;
}
 </style> 
 <?php  ;

    fm_freight::make_question_to($getfreightid,$memberid);
    print <<<sc
 <script type="text/javascript">
 $(document).ready(function(){
    
  $('.texthold').html('Enter your answer here...');
  $('.answer_wrap').removeClass('hidden');
  $('.proceequestion').addClass('hidden');
  $('.proceeanswer').removeClass('hidden');
  
  $('.button_fmAnswer').click(function(){
   
  var  task=$('#ctask').val();
  var questionid = $('#questionid').val();
  var memberid = $('#memberid').val();
  var freightid = $('#freightid').val();
  var question = $("#fquestion").val();
   //alert(memberid+'//'+freightid+'//'+questionid);
  //questionid
  //var questionid =$('#questionid').val();
 $('#loaderimage').removeClass('hidden');
  
  
  
  //alert(memberid+':'+freightid);
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

  fmdatetime= (c_yr+'-'+c_mt+'-'+c_dt+' '+' '+hr+':'+mn+':'+sc)
  //alert(fmdatetime);
  
    var resultquestion = $.trim(question);
    var resultmemberid = $.trim(memberid);
    //var resultmemberid = $.trim(tmemberid);
    var resultfreightid = $.trim(freightid);
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    
   
       if(question.length >80 && freightid !=="" && questionid !=="") 
        {
            //Quoting process
             
	$.get("http://freightmeta.com/testb/public/ajax_conversation.php?answer="+question+
                             "&memberid="+memberid+
                             "&freightid="+freightid+
                             "&dotask="+task+
                             "&dotaskid="+questionid+
                             "&qdatetime="+fmdatetime,
                             function(data)
       {
        $('.texthold').html('Answer given!');
		///alert(data);
        //window.location.reload();
        $('.msm').show('slow');
		result = data.split(':');
		if(result[0] == 'error')
        {
			alert(result[1]);
		}
		else{
			$('#fquestion').val(result[0]);
		}
	});
            
        }
        else{
            $('#fquestion').val('Please, write your question with minlenght 80 charatecters!').css('color','red');
            //alert("Please, write your question with minlenght 80 charatecters!")
        }
        
    
   $('#loaderimage').addClass('hidden');
    
    return false;   
  });
  
});
</script>
sc;
 
 //$cfid =$_GET['ftoqt'];
 //$ttrid = $_GET['fttrqt'];   

?> 

 </div> 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
  <script>
  
  </script>
 <?php ;
 require_once 'footer.php';
 
 ?>


