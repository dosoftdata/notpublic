<?php 
require_once HELPERS_DIR .'footer_content.php';
require_once HELPERS_DIR .'foot-main-content.php'; 
DatabaseHandler::Close();
// Output content from the buffer
flush();
ob_flush();
ob_end_clean();
        
?>
<script type="text/javascript">
        $(function(){
        if(location.protocol == 'http:'){
          location.href = location.href.replace(/^http:/, 'https:');
          } 
        });
        </script>
<!---script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50848898-1', 'freightmeta.com');
  ga('send', 'pageview');
var dimensionValue = 'SOME_DIMENSION_VALUE';
ga('set', 'dimension1', dimensionValue);
</script!--->
 <script type="text/javascript" src="https://freightmeta.com/testb/public/js/vendor/jqueryCookieGuard.1.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.cookieguard();
    $.cookieguard.cookies.add('PHP Session', 'PHPSESSID', 'This cookie is used to track important logical information for the smooth operation of the site', true);
    $.cookieguard.run();
  });
</script>


</body>
</html>
 