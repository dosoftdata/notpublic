
   $.noConflict();
		jQuery(document).ready(function($) {
		  /*
			$('#fromdate').Zebra_DatePicker({
        direction: true,
        pair: $('#todate')
    });

    $('#todate').Zebra_DatePicker({
        direction: 1
    });
    
    $('#fromdate').datepicker({
	dateFormat: "dd/mm/yy",
	changeMonth: true,
	changeYear: true,
	minDate: "+0d"
});
$('#todate').datepicker({
	dateFormat: "dd/mm/yy",
	changeMonth: true,
	changeYear: true,
	minDate: "+0d"
});

*/

 $(function() {

   $( "#fromdate" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#todate" ).datepicker( "option", "minDate", selectedDate );
      }
    });
     $( "#todate" ).datepicker({
     autoOpen: true,
    dateFormat: "dd/mm/yy",
	changeMonth: true,
	changeYear: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#fromdate" ).datepicker( "option", "maxDate", selectedDate );
      }
    }); 
 
     $( "#fromdatealt" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w"
    });
    
      $( "#beforedate" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w"
    });
      $("#stayuntil" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w"
    });
       $("#pickupfreightdte" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w"
    });
    //stayuntil
    /*
    $( "#fromdate" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#fromdatealt" ).datepicker( "option", "minDate", selectedDate );
      }
    });
 function getdatetoday3(){
      $( "#fromdate" ).datepicker({
       autoOpen: true,
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#fromdatealt" ).datepicker( "option", "minDate", selectedDate );
      }
    });
 }
    
    $( "#fromdatealt" ).datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
   changeMonth: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#todate" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    
    $( "#todate" ).datepicker({
    dateFormat: "dd/mm/yy",
	changeMonth: true,
	changeYear: true,
	minDate: "+0d",
      defaultDate: "+1w",
      onClose: function( selectedDate ) {
        $( "#fromdatealt" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
    
  });
	
    */	
		});
        
   
  	});