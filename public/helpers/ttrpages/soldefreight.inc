<?php
print '<div id="f1_main_content" class="rounded7" style="border:none;background: none;height: 480px; margin-top: 20px; padding-top: 0px; font-size:15pt">

<div class="gen_header" style="border-bottom: 1px dotted grey;">
Freight Shipment Solde...
</div>
<div class="successbox hidden" style="width:50%;">
    Thank you for adding discount to Freightmeta Shipping liste! 
    </div>
<div id="left_content" class="fl" style="padding-left: 10px;margin-top: 10px;width: 100%;height: 480px;">


<div id="contentq" style="width: 98%; padding: 10px;">
<form action="#"  method="post" onsubmit="return false;" id="form-account">	
			 <input name="tast" type="hidden" id="tast" value="discountshipping"/> 
             <input name="tastid" type="hidden" id="tastid" value="'.Util::StrGet('soldttrid').'"/>            
    
    <div class="row ">
					<div class="formlabel">Origin:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="soldorigin" type="text" class="control required" id="soldorigin" value=""  style="width:350px;"/>
					</div>
                    </div>
    <div class="row ">
					<div class="formlabel">Destination:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="soldedest" type="text" class="control required" id="soldedest" value=""  style="width:350px;;"/>
					</div>
					<div class="clear"></div>
				</div>
        <div class="row ">
					<div class="formlabel">shipment Discount Period: <span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input name="fromdate" type="text" class="required control" id="fromdate" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
					 to <input name="todate" type="text" class="required control" id="todate" style="cursor:pointer; width:150px; background-image:url(images/calendar-sml.jpg); background-repeat:no-repeat; background-position:right; padding-right: 20px;" value="" readonly>
                     
					</div>
					<div class="clear"></div>
				</div>
    <div class="row">
					<div class="formlabel">Incoterms: <span class="requiredtxt">*</span></div>
					<div class="forminput">
					 <span>
                    	<select name="incoterms" id="incoterms" type="text" class=" control" style="width:350px;">
								<option value="">-Select one- </option>
								<option value="CFR">CFR(Cost and Freight-)</option>
								<option value="CIF">CIF(Cost,Insurance and Freight-)</option>
								<option value="CIP">CIP(Carriage and Insurance Paid To-)</option>
								<option value="CPT">CPT(Carriage Paid To-)</option>
								<option value="DAF">DAF(Delivered At Frontier-)</option>
                                <option value="DDU">DDU(Delivered Duty Unpaid-)</option>
                                <option value="DDP">DDP(Delivered Duty Paid-)</option>
                                <option value="DES">DES(Delivered Ex Ship-)</option>
                                <option value="DEQ">DEQ(Delivered Ex Quay-</option>
                                <option value="EXW">EXW(Ex Works-F-)</option>
                                <option value="FAS">FAS(Free Alongside Ship-)</option>
                                <option value="FCA">FCA(Free Carrier-)</option>
                                <option value="FOB">FOB(Free on Board-)</option>
                                 <option value="FOT">FOT(Free on Truck)</option>
                                
							</select>
                </span>
					</div>
					<div class="clear"></div>
				</div>
    <div class="row">
					<div class="formlabel">Actually amount:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="From_amount" type="text" class="control required number" id="From_amount" placeholder="From amount" value=""  style="width:50%;"/>
                        Currency:<select id="soldeincurrencyin" name="soldeincurrencyin">
                       ';  
                         fm_freight::load_currency();                         
                        print'
                        </select>
					</div>
					<div class="clear"></div>
				</div> 
                <div class="row">
					<div class="formlabel">Discount amount:<span class="requiredtxt">*</span></div>
					<div class="forminput">
						<input   name="Solde_amount" type="text" class="control required number" id="Solde_amount" placeholder="Solde amount" value=""  style="width:50%;"/>
                        Currency<select id="soldeincurrencyout" name="soldeincurrencyout">
                        '; 
                        fm_freight::load_currency();
      print '
                        </select>
					</div>
					<div class="clear"></div>
				</div>
                
     <div class="row">
					<div class="formlabel">Serviced Freight Categories:<span class="requiredtxt">*</span></div>
					<div class="forminput" style=" width: 650px;">
					
						<input class="required control" name="categories" type="hidden" value=""/>						
						<div class="fcat" style="float:left; width: 300px; font-size:10.2pt;" >
                        
						<span class="fcat1 hidden"><label><input class="fcat"  name="packagedchk" id="packagedchk" type="checkbox" value="1"/><span class="pl">Palletised or Packaged Freight</span></label><br /></span>
						<span class="fcat2 hidden"><label><input class="fcat"  name="t_vehicleschk" id="t_vehicleschk" type="checkbox" value="2"/><span class="pl">Vehicles</span></label><br /></span>
						<span class="fcat3 hidden"><label><input class="fcat"  name="t_motorcycleschk" id="t_motorcycleschk" type="checkbox" value="3"/><span class="pl">Motorcycles</span></label><br /></span>
						<span class="fcat4 hidden"><label><input class="fcat"  name="t_boatchk" id="t_boatchk" type="checkbox" value="4"/><span class="pl">Boats / Yachts</span></label><br /></span>
						<span class="fcat5 hidden"><label><input class="fcat"  name="heavychk" id="heavychk" type="checkbox" value="5"/><span class="pl">Heavy Haulage & Machinery</span></label><br /></span>
						<span class="fcat6 hidden"><label><input class="fcat"  name="officeremovalschk" id="officeremovalschk" type="checkbox" value="6"/><span class="pl">House & Office Removals</span></label><br /></span>
						<span class="fcat7 hidden"><label><input class="fcat"  name="containerchk" id="containerchk" type="checkbox" value="7"/><span class="pl">Containers</span></label><br /></span>
						<span class="fcat8 hidden"><label><input class="fcat"   name="householdchk" id="householdchk" type="checkbox" value="8"/><span class="pl">Household Goods</span></label><br /></span>
						<span class="fcat9 hidden"><label><input class="fcat"  name="horseschk" id="horseschk" type="checkbox" value="9"/><span class="pl">Horses</span></label><br /></span>
										
						</div>
						<div style="float:left; width: 300px; font-size: 10.2pt;">
                        
                        <span class="fcat10 hidden"><label><input  class="fcat" name="livestockchk" id="livestockchk" type="checkbox" value="10"/><span class="pl">Livestock</span></label><br /></span>
					    <span class="fcat11 hidden"><label><input class="fcat"  name="petschk" id="petschk" type="checkbox" value="11"/><span class="pl">Pets</span></label><br /></span>
						<span class="fcat12 hidden"><label><input class="fcat"  name="foodchk" id="foodchk" type="checkbox" value="12"/><span class="pl">Food & Beverages</span></label><br /></span>
						<span class="fcat13 hidden"><label><input  class="fcat" name="specialcarechk" id="specialcarechk" type="checkbox" value="13"/><span class="pl">Special Care Items</span></label><br /></span>
						<span class="fcat14 hidden"><label><input  class="fcat" name="haygrain" id="haygrain" type="checkbox" value="14"/><span class="pl">Hay, Grain & Feed</span></label><br /></span>
						<span class="fcat15 hidden"><label><input  class="fcat" name="parcelschk" id="parcelschk" type="checkbox" value="15"/><span class="pl">Parcels & Small Packages</span></label><br /></span>
						<span class="fcat16 hidden"><label><input  class="fcat" name="miningchk" id="miningchk" type="checkbox" value="16"/><span class="pl">Mining & Resources</span></label><br /></span>
						<span class="fcat17 hidden"><label><input  class="fcat" name="buildingchk" id="buildingchk" type="checkbox" value="17"/><span class="pl">Building & Industrial Materials</span></label><br /></span>
						<span class="fcat18 hidden"><label><input  class="fcat" name="bulkfreightchk" id="bulkfreightchk" type="checkbox" value="18"/><span class="pl">Other Freight</span></label><br /></span>
											
						</div>					
	
					</div>
                    <div class="row">
                    <span class="fr" style="margin-right:180px">
                    <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button class="btn-primary" type="submit"">List</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</div>
                    </span>
                    </div>
					<div class="clear"></div>
				</div>
    
    </form>

</div>
</div>
 <script type="text/javascript" src="js/vendor/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="js/incs/jquery.mockjax.js"></script>
  <script type="text/javascript" src="js/incs/jquery.validate.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="js/ValidSoldFreight_Ajax.js"></script>  
    </div>';

Fm_User::__gET_TTR_SUPPORTED_FCAT_ONEROW($transpid);
?>