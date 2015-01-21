<?php

/**
 * @author dws
 * @copyright 2014
 */
//$custid= 20;
$fcat = $result['fcatname'];
$fsubcat = $result['fsubcatname'];
$catsubcatarray = array($fcat, $fsubcat);

switch ($catsubcatarray)
{
    case array(CAT1, SUBCAT1_CAT1):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
		       ' . $result['fpackage'] . '/Quatity:' . $result['fquantity'] . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
              ' .Util::caseundefine(Util::caseundefine($result['fdesc'])). '			
            </div>
            <div class="list-right">
              ' .$result['incoterms']. '			
            </div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook('. $quoteid .
            ','. $custid .');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT1, SUBCAT2_CAT1):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . $result['fpackage'] . '/Quatity:' . $result['fquantity'] . '						
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '
            </div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT2, SUBCAT3_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . $result['fmodel'] . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '	</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT2, SUBCAT4_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . $result['fmodel'] . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;

        /**************************************************************/
    case array(CAT2, SUBCAT5_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT2, SUBCAT6_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT2, SUBCAT7_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT2, SUBCAT8_CAT2):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT3, SUBCAT9_CAT3):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				'. $result['fmodel'] .'			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT4, SUBCAT10_CAT4):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT4, SUBCAT11_CAT4):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT4, SUBCAT12_CAT4):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '		
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT4, SUBCAT13_CAT4):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT4, SUBCAT14_CAT4):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $quoteid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT5, SUBCAT15_CAT5):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $quoteid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT16_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT17_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT18_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '		
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT19_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT20_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT21_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT22_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT6, SUBCAT23_CAT6):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT7, SUBCAT24_CAT7):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT7, SUBCAT25_CAT7):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT7, SUBCAT26_CAT7):

        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT7, SUBCAT27_CAT7):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '		
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT28_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				'.Util::caseundefine($result['fdesc']).'			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT29_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				'.Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT30_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT31_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT32_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT33_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT8, SUBCAT34_CAT8):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
			' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT9, SUBCAT35_CAT9):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT10, SUBCAT36_CAT10):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '/'.$result['flivestock'].'			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT10, SUBCAT37_CAT10):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '/'.$result['flivestock'].'			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT10, SUBCAT38_CAT10):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '/'.$result['flivestock'].'			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT11, SUBCAT39_CAT11):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT11, SUBCAT40_CAT11):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT11, SUBCAT41_CAT11):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT42_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT43_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT44_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT45_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT46_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							

';
        break;
        /**************************************************************/
    case array(CAT12, SUBCAT47_CAT12):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT13, SUBCAT48_CAT13):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT13, SUBCAT49_CAT13):

        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
		---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT13, SUBCAT50_CAT13):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT13, SUBCAT51_CAT13):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';

        break;
        /**************************************************************/
    case array(CAT13, SUBCAT52_CAT13):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT13, SUBCAT53_CAT13):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div></div>
';
        break;
        /**************************************************************/
    case array(CAT14, SUBCAT54_CAT14):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '/Quantity:'.$result['fquantity'] . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT15, SUBCAT55_CAT15):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT16, SUBCAT56_CAT16):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT17, SUBCAT57_CAT17):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
				' . Util::caseundefine($result['fdesc']) . '		
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(CAT18, SUBCAT58_CAT18):
        require_once HELPERS_DIR . 'cust_booking/quoteinfo.inc';
        print '
        	</div>
			<div class="clear"></div>
		</div>
		<div class="item">
			<div class="list-left">' . Util::subcatmodeling($result['fsubcatname'], $result['fcatname']) .
            ':</div>
			<div class="list-right">
					' . Util::caseundefine($result['fdesc']) . '			
                </div>
			<div class="clear"></div>
		</div>
        ';
        //freight location
        require_once HELPERS_DIR . 'cust_booking/freight_location.inc';
        print '					
		<div class="item" style="border-bottom:0px;">
			<div class="list-left">Other freight Information:</div>
			<div class="list-right">
			---		</div>
			<div class="clear"></div>
		</div>																				
		<div class="item" style="border-bottom: none;">
			<div class="list-left"></div>
			<div class="list-right">
            <span class="fr">
			 <div style="margin-top:10px; margin-right:0px;" class="button_link">
   <button type="submit" class="fl btn-primary" onclick="process_customer_qbook(' . $quoteid .
            ',' . $custid . ');">Quote Booking</button>
<img src="images/ajax-loader.gif" name="loaderimage" id="loaderimage" style="display:none;" class="fl" />
</span>
</div>			
                    </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>							
</div>
';
        break;
        /**************************************************************/
    case array(null, null):
        print "Quote details not available!.";
        break;
}

?>