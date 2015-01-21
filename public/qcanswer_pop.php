<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> | answer to the question</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<style>
table, tr, td, th{
    border: none;
}
/* Core CSS */
#box
{
	background: white;
	
	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 
}

#box-inner
{
	background: white;
	margin-top: -30px;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px; 

	/* transform z-index hack */	
	-moz-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	transform: rotate(0deg);
}

#box:before
{
	content: '';
	position: relative;

	margin-left: 3%;
	top: 0px;


	background: white;
	display: block;
	width: 25px;
	height: 25px;

	-webkit-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3); 

	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	transform: rotate(45deg);
    border-radius: 10px;
}

#box
{
	width: 90%;
}

#box-inner
{
	padding: 5px;
}

.fzbox{
    font-size: 15px;
}
#notes {
    position: relative;
    margin-top: 20px;
	width: 85%;
    height: auto;
	background-repeat: no-repeat;
	background-size: 100% auto;
	background-position-x: center;
	background-position-y: 0;
     -webkit-box-shadow:.17em .2em .23em #a0a0e0;
 -moz-border-radius:.7em;
 -webkit-border-radius:.7em;
 -khtml-border-radius:.7em;
 border-radius:.7em;
}
#notes_content{
	display: block;
	width: 100%;
    height: auto;
	min-height: 100px;
	background: none;
	border:none;
	background-repeat: no-repeat;
	background-size: 100% auto;
	background-position-x: center;
	background-position-y: 100%;
	padding: 10px;
	outline: 0;
	overflow: hidden;
 background-color: beige;
	resize: none;
	-webkit-transition: height 0.5s ease-out;  /* Saf3.2+, Chrome */
	-moz-transition: height 0.5s ease-out;  /* FF4+ */
	-ms-transition: height 0.5s ease-out;  /* IE10? */
	-o-transition: height 0.5s ease-out;  /* Opera 10.5+ */
	transition: height 0.5s ease-out;	
}


#notes_content_hidden{
	display: block;
	width: 85%;
	min-height: 100px;
	background: none;
	padding: 30px;
	outline: 0;
	visibility: hidden;
	position: fixed;
}

</style> 
<?php require_once HELPERS_DIR.'inline.common.css.inc'; ?>
    <div id="middle">
 <div id="middle_container" >
 <div id="error_box_main" class="arrow_box">
  </div>
<div id="f1_main_content" class="rounded7" style="background: none;height:380px; margin-top: 20px; padding-top: 0px; width: 640px;">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Answer to the question about :
</div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 100%;">
<div class="successbox hidden" >
    Thank you!
    </div>
    <div class="failurebox hidden" >
    Answer not acceptable...!
    <div class="clear"></div>
    </div>
<input type="hidden" name="askid" id="askid" value="<?= $_GET['askid'] ?>" />
<input type="hidden" name="sid" id="sid" value="<?= $_COOKIE['susrid'] ?>" />

   
    
<?php Fm_User::load_askedquestion_answer_onpop(15) ?>	


<?php
//fm_freight::load_freight_quoted_details($_GET['quoteid'])
?>
</div>
<script type="text/javascript">

    function setbg(color)
{
document.getElementById("notes_content").style.background=color
}




function processanswerto()

{	
    
    var askid = document.getElementById('askid').value;
    var answernote = document.getElementById('notes_content').value;
    var sid = document.getElementById('sid').value;
    var freightid = document.getElementById('fid').value;
    var tid = document.getElementById('tid').value;
    var answerdatetime = fmlocadatetime();
    //alert('DATETIME IS:'+answerdatetime);
    $.get("http://freightmeta.com/testb/public/ajax.qcanswert.php?afid="+freightid+"&atid="+tid+"&asid="+sid+"&anote="+answernote+"&adatetime="+answerdatetime+"&askid="+askid, function(data){
		//alert(data);
        var res =data;
        
        if(res === 200){  
          $('.successbox').removeClass('hidden');    
        }
        else{
           $('.failurebox').html('there no question');
          $('.failurebox').removeClass('hidden');
        setInterval(function(){
      $('.failurebox').addClass('hidden');
     },6000);     
            
        }
 
       });
  
 }




	</script>
<div class="clear">
    </div>
    <div class="clear"></div>
    </div>  </div> 
<?php  
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
        
?>