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
        autoclose: true,
        todayHighlight: true,
        startDate: '+0d'
    });

    //Set Date as Today
    $('.otw-reservation-date').val(getCurrentDate());

    //Selects (only if loaded)
    if (typeof $.fn.selectpicker == 'function' ) {
        $('.selectpicker').selectpicker();
    }

    //Party Size Change
    $('.otw-party-size-select').on('change', function(){
        $('.PartySize').val($(this).val());
    });


});

function getCurrentDate(){
    var today = new Date();
    var dd = today.getDate() + 1;
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
    return today;

}