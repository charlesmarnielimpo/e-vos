$(document).ready(function() {
    $('#academic_calendar_tbl').DataTable();

    $('#start-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#end-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });
});