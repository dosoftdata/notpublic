<?php
require_once 'header.php';
$quoterate = Util::StrGet('rateid');
$freightrate = Util::StrGet('fid');
$custid =Util::StrCookie('susrid');
//$quoterate = 11;
//$freightrate = 24;
//$custid =25;
?>
  <title><?= SITE_NAME?> | Rate & Review</title>
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
.ratingwrapper {
 position:relative;
 width:165px;
 height: 40px;
 padding: 15px;
 margin-top: 0px;
 border:1px solid #e1e2fe;
 text-align:left;
 padding:1px 2px;
 box-shadow:.17em .2em .23em #a0a0e0;
 -webkit-box-shadow:.17em .2em .23em #a0a0e0;
 -moz-border-radius:.7em;
 -webkit-border-radius:.7em;
 -khtml-border-radius:.7em;
 border-radius:.7em;
}
h1{
    position: relative;
    margin-top: 10px;
}
.rating_{
    position: relative;
    top: 7px;
    padding: 0px;
    margin: 0px;
    float: left;
}
.rating_ li{
    line-height: 0px;
    width: 28px;
    height: 28px;
    padding: 0px;
    margin: 0px;
    margin-left: 2px;
    list-style: none;
    float: left;
    cursor: pointer;
}
.rating_ li span{
    display: none;
}
#notes {
	width: 300px;
    height: 130px;
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
	width: 290px;
    height: 120px;
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
	width: 440px;
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
 <div id="middle_container" style="width: 450px;" >
 <div id="error_box_main" class="arrow_box">
  </div>
<div id="f1_main_content" class="rounded7" style="background: none;height: auto; margin-top: 20px; padding-top: 0px; width:450px">
<div class="gen_header" style="border-bottom: 1px dotted grey;">
Transporter Provider rate & Review
</div>
 <div class="successbox hidden" >
    Thank you!
    </div>
    <div class="failurebox hidden " >
    Please rate and write a review...!
    <div class="clear"></div>
    </div>
<h1>Rate</h1>
<span class="formnotes notmail">Rate about Shipping quality.</span>
<div class="ratingwrapper">
 <input name="fmrating" value="" 
id="fmrating" type="hidden" title="Click to rate"/><br /><br/>
<div class="clear"></div>
</div>
<input type="hidden" name="ratedval" id="ratedval" value="" />
<input type="hidden" name="quoterate" id="quoterate" value="<?= $quoterate?>" />
<input type="hidden" name="freightrate" id="freightrate" value="<?= $freightrate ?>" />
<input type="hidden" name="cid" id="cid" value="<?= $custid ?>" />
<h1>Review</h1>
<span class="formnotes notmail">Leave a note about Shipping quality.</span>
<div id="notes">
    <textarea id="notes_content" maxlength="200" placeholder="" onfocus="this.value=''; setbg('#e5fff3');" onkeyup="" onblur="setbg('beige')">
    Enter your review here...
    </textarea>
<div id="notes_content_hidden"></div>
    </div>
<script type="text/javascript">
/*
function sentrate(){
    var rateval = $('raterme').val();
    if (rateval.length<0)
    {
        alert('Please rate');
    }
    else{
        alert(rateval);
    }
    
}
*/
</script>
<div class="clear"></div>
<div class="quoteone" style="margin-top:-11px; margin-right:0px;" class="button_link"> <br />
           <button type="submit" class="fl btn-primary" onclick="processrate('');">Rate</button>
						<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
                        </div>	

<?php
//fm_freight::load_freight_quoted_details($_GET['quoteid'])
?>


<div class="clear"></div>
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
  <script type="text/javascript">
  function getrate(rate){
                //alert("This rating's value is "+rate);
                //$('#fmrating').val(rate);
                document.getElementById('ratedval').value=rate;
            }
    $(function() {
                $("#fmrating").FMrating({
                    rating_star_length: '5',
                    rating_initial_value: '',
                    rating_function_name: 'getrate',//this is function name for click
                    directory: 'images/btn/'
                });
            });
    /*
    function resizeTextArea(){
    var content = document.querySelector("#notes_content");
    var container = document.querySelector("#notes_content_hidden");
    container.innerText = content.value;
    content.style.height = container.offsetHeight + "px";
    }
    */
    function setbg(color)
{
document.getElementById("notes_content").style.background=color
}




function processrate()
{	
    var rateval = document.getElementById('ratedval').value;
    var reviews = document.getElementById('notes_content').value;
    var quoteid = document.getElementById('quoterate').value;
    var freightid = document.getElementById('freightrate').value;
    var cid = document.getElementById('cid').value;
	//var rateval = $('#raterme').val();
    //alert(reviews.length);
    //var myarray = [];
     switch(rateval)
     {
        case '':
        //alert('Please rate');
        
        $('.failurebox').removeClass('hidden');
        setInterval(function(){
      $('.failurebox').addClass('hidden');
     },6000);
        return false;
        break;
        default:
        if (reviews.length < 35){
            $('.failurebox').html('Please write a review more than 35 charactere');
          $('.failurebox').removeClass('hidden');
        setInterval(function(){
      $('.failurebox').addClass('hidden');
     },6000);      
        }
     else {
	$.get("http://freightmeta.com/testb/public/ajax.craterereview.php?qid="+quoteid+"&fid="+freightid+"&rated="+rateval+"&review="+reviews+"&cid="+cid, function(data){
		//alert(data);
        var res =data;
        
        if(res == 200){  
          $('.successbox').removeClass('hidden');    
        }
        else{
           $('.failurebox').html('Rate and Review already maked');
          $('.failurebox').removeClass('hidden');
        setInterval(function(){
      $('.failurebox').addClass('hidden');
     },6000);     
            
        }
 
       });	  

      
     }
        
        return true;
        break;
     }
    
}




	</script>