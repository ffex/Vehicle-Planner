
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('form').length>0 ? $('form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
            language: "it",
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})

