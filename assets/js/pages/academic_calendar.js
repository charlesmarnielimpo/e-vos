$(document).ready(function() {
    $('#academic_calendar_tbl').DataTable({
        "ajax": {
            url: "academic_calendar/fetch",
            type: 'GET'
        },
    });

    $('#start-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#end-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#edit-start-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#edit-end-date').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#modal-add-academic-calendar').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
    });
    
    $(document).on('submit', '#add_academic_calendar_frm', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($('#add_academic_calendar_frm')[0]);
        var academic_calendar_name = $('#academic_calendar_name').val();

        if (academic_calendar_name !== '') {
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.success == true) {
                        $('#modal-add-academic-calendar').modal('hide');
                        $('#academic_calendar_tbl').DataTable().ajax.reload(null, false);
                        $('#add_academic_calendar_frm').trigger('reset');
                        $.toast({
                            heading: 'Success',
                            text: 'Added successfully.',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500
                        });
                    } else {
                        $('.academic_calendar_name_div').addClass('has-error');
                        $('.academic_calendar_name').html('Name already exists.');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.academic_calendar_name_div').addClass('has-error');
                    $('.academic_calendar_name').html('Name already exists.');
                }
            });
        }
    });

    $(document).on('submit', '#edit_academic_calendar_frm', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($('#edit_academic_calendar_frm')[0]);
        var hdn_academic_calendar_id = $('#hdn_academic_calendar_id').val();

        if (hdn_academic_calendar_id !== '') {
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.success == true) {
                        $('#modal-edit-academic-calendar').modal('hide');
                        $('#academic_calendar_tbl').DataTable().ajax.reload(null, false);
                        $('#edit_academic_calendar_frm').trigger('reset');
                        $.toast({
                            heading: 'Success',
                            text: 'Updated successfully.',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500
                        });
                    } else {
                        $('.edit_academic_calendar_name_div').addClass('has-error');edit_calendar_name_error
                        $('.edit_calendar_name_error').html('Name already exists.');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.edit_academic_calendar_name_div').addClass('has-error'); 
                    $('.edit_calendar_name_error').html('Name already exists.');
                }
            });
        }
    });

    $(document).on('submit', '#delete_academic_calendar_frm', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = new FormData($('#delete_academic_calendar_frm')[0]);
        var hdn_academic_calendar_id = $('#hdn_academic_calendar_id_delete').val();

        if (hdn_academic_calendar_id !== '') {
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.success == true) {
                        $('#modal-delete-academic-calendar').modal('hide');
                        $('#academic_calendar_tbl').DataTable().ajax.reload(null, false);
                        $('#delete_academic_calendar_frm').trigger('reset');
                        $.toast({
                            heading: 'Success',
                            text: 'Deleted successfully.',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500
                        });
                    }
                }
            });
        }
    });

    $(document).on("click", ".academic_calendar_add_modal", function () {
        $('.academic_calendar_name').html('');
    });

    $(document).on("click", ".academic_calendar_edit_modal", function () {
        var academic_calendar_id = $(this).data('academic-calendar-id');
        var academic_calendar_name = $(this).data('academic-calendar-name');
        var academic_calendar_start_year = $(this).data('academic-calendar-start-year');
        var academic_calendar_end_year = $(this).data('academic-calendar-end-year');
        var academic_calendar_start_date = $(this).data('academic-calendar-start-date');
        var academic_calendar_end_date = $(this).data('academic-calendar-end-date');
        $('#edit_academic_calendar_frm').find('#hdn_academic_calendar_id').val(academic_calendar_id);
        $('#edit_academic_calendar_frm').find('#academic_calendar_name').val(academic_calendar_name);
        $('#edit_academic_calendar_frm').find('#academic_calendar_start_year').val(academic_calendar_start_year);
        $('#edit_academic_calendar_frm').find('#academic_calendar_end_year').val(academic_calendar_end_year);
        $('#edit_academic_calendar_frm').find('#edit-start-date').val(academic_calendar_start_date);
        $('#edit_academic_calendar_frm').find('#edit-end-date').val(academic_calendar_end_date);
        $('.edit_calendar_name_error').html('');
    });

    $('#modal-delete-academic-calendar').on('show.bs.modal', function(e) {
        var academic_calendar_id = $(e.relatedTarget).data('academic-calendar-id');
        var academic_calendar_name = $(e.relatedTarget).data('academic-calendar-name');
        $(this).find('#hdn_academic_calendar_id_delete').val(academic_calendar_id);
        $(this).find('#academic_calendar_name_delete').html(academic_calendar_name);
    });

});