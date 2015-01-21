<?php
$getfreightid =Util::StrGet('fqttr');
$getquestid =Util::StrGet('askd');


print'</div>';
   print '<div class="fr pl" style="position:relative; margin-right:0%; margin-top:0px;width:50%; " >';
   print'<strong> Available Pick up Date :</strong>'.Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to']).'<br />';
   print'<strong>Pick up Location:</strong>'.$result[$i]['addressrefin'].'<br />';
  
   print'<strong>Delivery Location:</strong>'.$result[$i]['addressrefout'].'<br />';

   
  print'</div>';
 print'<div class="clear"></div></div>';
  print'</div>';
          print'</div></div>';
          
		    print'<!-- end of quote details -->'; 

print <<<question
  <div id="question_freight" class="fw">
  <div class="headerbox rounded7" style="background-color: #AADFBA;">
	<span class="pl">
    Make your question from here
    </span>
</div>
</div>
question;
print '
<div id="questiondiv" class="fl askquestion" style="width:350px">
 <div class="answer_wrap hidden">
 <h1> Answer: </h1>
 <div class="" > 
 <br />
 </div>
 </div>
<textarea maxlength="150" name="fquestion"  
id="fquestion" class="control question answer texthold"  
';

print <<<btn
onfocus="this.value='';
setbg('#e5fff3','texthold');" 
onblur="setbg('white','texthold')"
btn;
 print' 
style="width:100%;">Enter your question here...
</textarea>
<div style="margin-top:10px; margin-right:0px;" class="button_link fr proceequestion">
';
print <<<btn
<button  type="submit" class="btn-primary button_Ask">Ask</button>
btn;

print '
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" class="fl hidden"  />
</div>
<div style="margin-top:10px; margin-right:0px;" class="button_link fr proceeanswer hidden">
';
print <<<btn
<button  type="submit" class="btn-primary button_fmAnswer">Answer</button>
btn;
print '
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" class="fl loaderimg hidden" />
                           
</div>
</div>

';
	   
    
			print '<div class="clear"></div>';
print<<<screen
<div class="headerbox rounded7" style="background-color: #AADFBA;">
				<span class="pl">Quotes for this freight</span>
			</div>
			
			
						<div>
				<table style="color:black; font-size:10pt" width="100%" border="0" cellspacing="0" cellpadding="8" class="listing_table">
					<tr class="listing_header">
						<td width="15%">Quote Amount</td>
						<td width="16%">Transport Provider</td>
						<td width="13%">Expiry Date</td>
						<td width="6%" align="center">Note</td>
						<td width="13%">Details</td>
						<td width="18.5%">status</td>
                        <td width="18.5%">Book</td>
					</tr>
screen;
self::load_quote_list($_GET['fqttr']);
print<<<test
    </table></div> 			              
test;


      /**********************************************/
      print'<div style="float:left; height: 70px;">';
	  print'<div style="margin-top:10px; margin-right:10px;" class="button_link">';
	  print'<a href="login?ttrlgtq='.$_GET['fqttr'].'&urlq=ttrlgtq" class="logintoquote btn-primary" rel="nofollow">Transporters Login to Quote</a>'; 
	  print'<a href="t-register?redicto='.$_GET['fqttr'].'" class="joinfreightmeta btn-primary">Join Freightmeta</a>';
      print'<a class="quoteafterlogin  hidden btn-primary" href="quote_freight?fttrq='.$_COOKIE["tusrid"].'&ftoq='.$_GET['fqttr'].'">Quote this freight</a></div></div>';
	  
print <<<question
  <div id="question_freight" class="fw">
  <div class="headerbox rounded7" style="background-color: #AADFBA;">
	<span class="pl">Questions about this freight</span>
</div>

       <div id="f1-question-quote-content" class="fw">
<table style="width: 970px; color: black;">
<tr>
<table style="width: 970px; color: black;">
<tr style="border-bottom: 1px dotted #e5e5e5">
<div style="float:right; margin-bottom:10px;">
				To <strong>report a violation</strong> of <a class="iframe fancybox.iframe" href="rules" >Freightmeta's rules</a>, flag the question or the answer by clicking <img src="images/btn/flag-white.png" />
				</div>
				<div class="clear"></div>
question;

            /*-************Question_answerss*****************/
self::load_asked_question_and_answers($_GET['fqttr']);
 print <<<here
</table></tr><tr><td>
here;
         
    print <<<here

here;
           print '<div style="margin-top:10px; margin-right:10px;" class="button_link qtbeforelogin">
                 <a class="btn-primary" href="login?fqttr='.$_GET['fqttr'].'&urlqttr=qttrtf">Login to ask a Question</a></div>';
            
print <<<finishdiv
</td></tr></table></div></div>
finishdiv;



      print'</div></div></div></div></div>';
?>