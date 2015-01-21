<div  id="step1-container" style="margin-top:0px;">	
					<div class="form-section-header">Select Category</div>
					<div class="row">
						<div class="formlabel">Freight category:<span class="requiredtxt">*</span></div>
						<div class="forminput">
							<div style="float:left; margin-left: -45px;">
								<select style="font-size: 9pt;font-weight: lighter; width:220px;" name="_CATNAME" id="category" class="control input required"  size="7" onclick="find_freight_subcat()" >
								<?= fm_freight::load_categoriesad() ?>
								</select>
							</div>
     
<div id="loadata-container" class="hiddenn" >
<div  id="subcategories" class="hiddenn" style="float:right;  position: absolute;top: 0px; right: 90px;">
<div class="fl" style="">
<img src="images/gen/arrow12.gif" style="margin-top:45px; margin-right:8px; margin-left: 8px;"/></div>
<div class="fl">
<select style="font-size: 9pt;font-weight: lighter; width:220px;"  class="control input required" name="_SUBCATNAME" id="subcategory" class="hiddenn" size="7" >

</select>
</div> 
</div>

						</div><br />
						<div class="clear"></div>
					</div>
				</div>
				<img src="images/ajax-loader.gif" name="loaderimage-large" id="loaderimage-large" style="display:none;  margin-top:50px; margin-left:330px;" />
				
                
                <div  id="step2-container" class="hiddenn"  style="margin-top:40px; display:block;"> 
					<div class="clear"></div>
                    <br />
					<div class="sep"></div>	
					<div class="form-section-header">Shipment Details</div>
                    <div class="row" >

     	<!-- start of dynamic freight questions -->
<div id="dynamic_questions">


</div>

     	