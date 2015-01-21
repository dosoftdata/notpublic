<?php
session_start();

if (!empty($_REQUEST['captcha'])) {
    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
		echo "<div style='color:#FF0000;'>Incorrect text</div>";
           print <<<btn
    <script type="text/javascript" >
    $('.contactus').addClass('hidden');
    </script>
btn;
    } else {
       echo "<div style='color:#00FF00;'>Correct text</div>";
       print <<<btn
    <script type="text/javascript" >
    $('.contactus').removeClass('hidden');
    </script>
btn;
       //print "//uibutton
       //<script type="text/javascript" >
       //$('#')
       //</script>
       //;
    }

    $request_captcha = htmlspecialchars($_REQUEST['captcha']);

   // unset($_SESSION['captcha']);
}


?>