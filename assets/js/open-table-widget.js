/**
 *  Open Table Widget JavaScript
 *
 *  @description: JavaScripts for the frontend display of Open Table Widget
 *  @author: Devin Walker
 *  @created: 9/10/13
 */

jQuery(document).ready(function ($) {

    //Datepicker
    $('.otw-reservation-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    //Set Date as Today
    $('.otw-reservation-date').val(getCurrentDate());


    //Setup Time Picker
    $('.otw-reservation-time').timepicker({
        'scrollDefaultNow': true,
        'setTime': new Date()
    });


    //Party Size Change
    $('.otw-party-size-select').on('change', function(){
        console.log($(this).val());
        $('.PartySize').val($(this).val());

    });


});

function getCurrentDate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = mm+'/'+dd+'/'+yyyy;
    return today;

}