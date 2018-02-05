
$( document ).ready(function() {
    console.log( "ready!" );
    //$("#required_by_date").addClass("form-control");
    	
	$("<div class='form-group'><div class='input-group date' id='datetimepicker1'>").insertBefore('#requiredDateInput');
	$("</div></div>").insertAfter('#requiredDateInput');
	
	$("#requiredDateInput").datepicker();
	
});