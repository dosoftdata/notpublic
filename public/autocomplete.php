 <?php
	require_once dirname(dirname(__FILE__)).'/public/header.php';
?>
 <!DOCTYPE html>
        <html lang="en">

        <head>
    <meta charset="utf-8"/>
    <title>jQuery UI Autocomplete - Remote JSONP datasource</title>
    <link rel="stylesheet" href="jqueryui.com/themes/base/jquery.ui.all.css"/>
    <script src="jqueryui.com/jquery-1.7.2.js"></script>
    <script src="jqueryui.com/ui/jquery.ui.core.js"></script>
    <script src="jqueryui.com/ui/jquery.ui.widget.js"></script>
    <script src="jqueryui.com/ui/jquery.ui.position.js"></script>
    <script src="jqueryui.com/ui/jquery.ui.autocomplete.js"></script>
    <link rel="stylesheet" href="jqueryui.com/demos/demos.css"/>

    <style>
    .ui-autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }
    #city { width: 25em; }
    </style>

    <script>
    $(function() {
        function log( message ) {
            $( "<div/>" ).text( message ).prependTo( "#log" );
            $( "#log" ).scrollTop( 0 );
        }

        $( "#city" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "http://ws.geonames.org/searchJSON",
                    dataType: "jsonp",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        name_startsWith: request.term
                    },
                    success: function( data ) {
                        response( $.map( data.geonames, function( item ) {
                            return {
                                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                log( ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
    });
    </script>
</head>
<body>

<div class="demo">

<div class="ui-widget">
    <label for="city">Your city: </label>
    <input id="city" />
    Powered by <a href="http://geonames.org">geonames.org</a>
</div>

<div class="ui-widget" style="margin-top:2em; font-family:Arial">
    Result:
    <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>

</div><!-- End demo -->


</body>
</html>