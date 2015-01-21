<?php
require_once 'header.php';?>
  <title><?= SITE_NAME?> |Rules </title>
    </head>
    <body style="color: grey;">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        
         <!-- This div is used to indicate the original position of the scrollable fixed div. -->
<?php 
//require_once HELPERS_DIR .'nav.php';
//require_once HELPERS_DIR .'i18n.php'; 
?>
<script type="text/javascript">
$(function() {
	$("button, input:submit").button();
});


function showhide_disagree(){
	if($("#cancel_agree").val() == 'no'){
		$("#disagree_comments").show();
	}
	else{
		$("#disagree_comments").hide();
	}
}

</script>
<style type="text/css">
.formlabel{
	width:30%;
}


</style>
<div style="margin:20px; margin-top: 14px; text-align:left;">
<div class="popup-title">
Freightmeta's Rules of Use
</div>

<div style="width:600px;">	

	Freightmeta	 does not permit posting of  <strong>phone numbers, email addresses</strong> or any other types of contact information between users of the site. Transport Providers can not submit phone numbers or other contact information, urging users contact them directly. All contact between Users and Transport Providers is to be carried out online through the Question and Answer tools that we provide.<br />
	 <br />
	If you feel a question / comment is in violation of Freightmeta's rules then click the 'Flag It' button.<br />
	

</div>	
</div>


</body>
</html>