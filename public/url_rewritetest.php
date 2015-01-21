<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="LiveLong" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<title>Jquery Addressing Test</title>
    <style type="text/css">
    a {
    display:block;
    }
    </style>
    <script type="text/javascript">
    $(function() {
    $('input').click(function() {
        $('a').not('[href^="http"],[href^="https"],[href^="mailto:"],[href^="#"]').each(function() {
            $(this).attr('href', function(index, value) {
                if (value.substr(0,1) !== "/") {
                    value = window.location.pathname + value;
                }
                return "http://mynewurl.com" + value;
            });
        });
    });
});
    </script>
</head>

<body>
<p>
    <a href="/relative/link/">Relative Link</a>
    <a href="relative/link/">Relative Link</a>
    <a href="http://google.com/">Absolute URL</a>
    <a href="https://google.com/">Secure Absolute URL</a>
    <a href="#inline">Inline Link</a>
    <a href="mailto:me@myself.com">mailto: link</a>
</p>
<div class="red">
    <input type="button" class="button" value="Rewrite URLs" />
</div>


</body>
</html>