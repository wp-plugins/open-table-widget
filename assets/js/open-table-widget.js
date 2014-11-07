/**
 *  Open Table Widget JavaScript
 *
 *  @description: JavaScripts for the frontend display of Open Table Widget
 *  @author: Devin Walker
 *  @created: 9/10/13
 */

jQuery(document).ready(function ($) {

	//Datepicker
	//@SEE: https://github.com/eternicode/bootstrap-datepicker
	$('.otw-reservation-date').datepicker({
		autoclose     : true,
		todayHighlight: true
	});

	//Set Date as Today
	$('.otw-reservation-date').datepicker('update', new Date());

	//Selects (only if loaded)
	if (typeof $.fn.selectpicker == 'function') {
		$('.selectpicker').selectpicker();
	}

	//Party Size Change
	$('.otw-party-size-select').on('change', function () {
		$('.PartySize').val($(this).val());
	});


});