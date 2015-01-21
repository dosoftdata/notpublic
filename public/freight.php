<?php
require_once 'header.php';
fm_freight::viewedfreight(Util::StrGet('freightid'));
fm_freight::load_freight_details();
//usrlogin::divdisplay_before_login();
//usrlogin::sender_login_check();


?>  
<div class="clear"></div>
<script type="text/javascript">
</script>
<div class="inputdialog diologrounder7 hidden">
<div class="inputdialog_header diologrounder7">
<input class="input" name="q" id="gettest" type="hidden" size="40" placeholder="" value="<?= Util::StrGet('freightid') ?>" /> 
<div style="position: absolute; top: 2px; font-size: 14pt; font-weight: bold; text-align: center; left: 20px;">
Flag question?
</div>
</div>
<div class="inputdialog_boby">
Flag question <span style="font-size: 15pt;">request</span>?
</div>
<style>
.inputdialog_button_wrapper{
    width: 96%;
    height: 30px;
    position: relative;
    top: -5px;
    margin: 0 auto;
    color: #FFF;
    padding: 4px;
    font-size: 14pt;
    font-weight: lighter;  
}
</style>
<?php
usrlogin::sessionfreightdivset();
?>
<div class="fm_dialog_sep"></div>
<div class="inputdialog_button_wrapper">
<div class="inputdialog_button_no diologrounder7" style="padding: 4px;">
No</div>
<div style="clear: both;"></div>
<div class="inputdialog_button_ok diologrounder7" style="padding: 4px;">Yes</div>
<div style="clear: both;"></div>
</div>
</div>
<div class="fm_dialog open diologrounder7 hidden">


</div>

 <div class="fm_dialog diologrounder7 hidden" style="width: 420px; border: none;">
<div class="fm_dialog_header_close fl diologrounder7" style="border: none; margin-top: -19px;right:-48px ;" onclick="hidegmap()">
   <img alt="X" src="http://freightmeta.com/testb/public/images/btn/map_close.png"/>
</div>
   <div id="map" class="rounded7"></div>
   <div id="distance_road" style="padding:10px; padding-left:0px;"></div>		

   </div>
<style type="text/css">
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

</style>
<script type="text/javascript">
    $.noConflict();
	jQuery(document).ready(function($) {
            $('.iframe').fancybox(
            {
                width:'1040',
                height:'720'
                //autoDimensions:true,
                //padding:'10'  
            });
            //var selectkeyword = $('#gettest').val();
            //alert(selectkeyword);
 //$('.inputdialog').addClass('hidden');
		});
	</script>
 <?php require_once 'footer.php';?>
 
 