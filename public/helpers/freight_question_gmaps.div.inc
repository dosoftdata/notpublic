<?php
$setid =Util::StrGet('ftoq');


print'</div>';
   print '<div class="fr pl" style="position:relative; margin-right:0%; margin-top:0px;width:50%; " >';
   print'<strong> Available Pick up Date :</strong>'.fm_freight::freightposteddate(Util::matchdateinput($result[$i]['altdatetime'],$result[$i]['beforedate'],$result[$i]['freight_Stay_to'])).'<br />';
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
    Make your quote from here
    </span>
</div>
</div>
question;
print	'<div class="" style="float:left;width:100%;padding-left:10px; border-left:1px dotted #cccccc;">';
                       print<<<errorq
                       <div  id="qcontrol" class="hidden failurebox" style="">
                       </div>

errorq;
            print<<<out
<input  name="fquote" type="text" class="control input" id="fquote" onfocus="this.value='';"   value="" placeholder="Quote amount" style="width:150px;"/><br />
<label style="font-size:11pt"> Select quote Currency:
<select id="currency" name="currency">
out;
self::load_currency();
          print<<<out
</select>
</albel>
<label style="font-size:11pt"> Valid date:<input  name="stayuntil" type="text" class="stayuntil control input" id="stayuntil"   value="" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;"/></label>
<label style="font-size:11pt"> Freight pick up Date:<input  name="pickupfreightdte" type="text" class="pickupfreightdte control input" id="pickupfreightdte"   value="" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;"/></label>

<div>
<textarea maxlength="200" onfocus="this.value='';" class="qnote" name="qnote" id="qnote" >Make a notification here...</textarea> 
</div>
out;
		       print <<<here
           <div class="quoteone" style="margin-top:-11px; margin-right:0px;" class="button_link"> <br />
           <button type="submit" class="fl btn-primary" onclick="processquote();">Quote</button>
						<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
                        </div>
here;
       print <<<here
           <div class="qmore hidden" style="margin-top:-11px; margin-right:0px;" class="button_link"> <br />
           <button type="submit" class="fl btn-primary" onclick="quotemore('');">Quote more</button>
						<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
                        </div>
here;
	   
    
			print '<div class="clear"></div></div>';
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
self::load_quote_list($setid);
print<<<test
    </table></div> 			              
test;


      /**********************************************/
      print'<div style="float:left; height: 70px;">';
	  print'<div style="margin-top:10px; margin-right:10px;" class="button_link">';
	  print'<a href="login?ttrlgtq='.$setid.'&urlq=ttrlgtq" class="logintoquote btn-primary" rel="nofollow">Transporters Login to Quote</a>'; 
	  print'<a href="t-register?redicto='.$setid.'" class="joinfreightmeta btn-primary">Join Freightmeta</a>';
      print'<a class="quoteafterlogin  hidden btn-primary" href="quote_freight.php?fttrq='.$_COOKIE["tusrid"].'&ftoq='.$setid.'">Quote this freight</a></div></div>';
	  
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
self::load_asked_question_and_answers($setid);
 print <<<here
</table></tr><tr><td>
here;
         
    print <<<here

here;
           print '<div style="margin-top:10px; margin-right:10px;" class="button_link qtbeforelogin">
                 <a class="btn-primary" href="login?fqttr='.$setid.'&urlqttr=qttrtf">Login to ask a Question</a></div>';
            
print <<<finishdiv
</td></tr></table></div></div>
finishdiv;



      print'</div></div></div></div></div>';
?>