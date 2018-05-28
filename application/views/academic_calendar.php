<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Academic Calendar</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">Academic Calendar</li>
                </ol>
            </div>
            <!-- /.col-lg-12 --> </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <button class="pull-right btn btn-info m-b-30 academic_calendar_add_modal" type="button" data-toggle="modal" data-target="#modal-add-academic-calendar">Add Academic Calendar</button>
                    <div class="clearfix"></div>
                    <div class="table-responsive">
                        <table id="academic_calendar_tbl" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Start Year</th>
                                    <th>End Year</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row --> </div>
    <!-- /.container-fluid -->
    <!-- Add Academic Calendar Modal -->
    <div class="modal fade" id="modal-add-academic-calendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel1">Add Academic Calendar</h4>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" id="add_academic_calendar_frm" action="<?php echo site_url('academic_calendar/create'); ?>
                        " data-toggle="validator">
                        <div class="form-group col-sm-12 academic_calendar_name_div">
                            <label for="txt-add-academic-calendar-name" class="control-label">Name:</label>
                            <input type="text" data-toggle="validator" class="form-control" id="academic_calendar_name" name="txt-add-academic-calendar-name" placeholder="e.g. A.Y. 2017-2018" required>
                            <span class="help-block with-errors academic_calendar_name"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="txt-add-academic-calendar-start-year" class="control-label">Start Year:</label>
                            <input type="text" class="form-control" id="academic_calendar_start_year" name="txt-add-academic-calendar-start-year" placeholder="e.g. 2017" required></div>
                        <div class="form-group col-sm-6">
                            <label for="txt-add-academic-calendar-end-year" class="control-label">End Year:</label>
                            <input type="text" class="form-control" id="academic_calendar_end_year" name="txt-add-academic-calendar-end-year" placeholder="e.g. 2018" required></div>
                        <div class="form-group col-sm-6">
                            <label for="txt-add-academic-calendar-start-date" class="control-label">Start Date:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="txt-add-academic-calendar-start-date" class="academic_calendar_start_date" id="start-date" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon"> <i class="icon-calender"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="txt-add-academic-calendar-end-date" class="control-label">End Date:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="txt-add-academic-calendar-end-date" class="academic_calendar_end_date" id="end-date" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon"> <i class="icon-calender"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn-academic-calendar-save" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Edit Academic Calendar -->
    <div class="modal fade" id="modal-edit-academic-calendar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel1">Edit Academic Calendar</h4>
                </div>
                <div class="modal-body">
                    <form class="row" method="post" id="edit_academic_calendar_frm" action="<?php echo site_url('academic_calendar/update'); ?>
                        " data-toggle="validator">
                        <input type="hidden" id="hdn_academic_calendar_id" name="hdn_academic_calendar_id">
                        <div class="form-group col-sm-12 edit_academic_calendar_name_div">
                            <label for="txt-edit-academic-calendar-name" class="control-label">Name:</label>
                            <input type="text" class="form-control" id="academic_calendar_name" name="txt-edit-academic-calendar-name" placeholder="e.g. A.Y. 2017-2018" required>
                            <div class="help-block with-errors edit_calendar_name_error"></div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="txt-edit-academic-calendar-start-year" class="control-label">Start Year:</label>
                            <input type="text" class="form-control" id="academic_calendar_start_year" name="txt-edit-academic-calendar-start-year" placeholder="e.g. 2017" required></div>
                        <div class="form-group col-sm-6">
                            <label for="txt-edit-academic-calendar-end-year" class="control-label">End Year:</label>
                            <input type="text" class="form-control" id="academic_calendar_end_year" name="txt-edit-academic-calendar-end-year" placeholder="e.g. 2018" required></div>
                        <div class="form-group col-sm-6">
                            <label for="txt-edit-academic-calendar-start-date" class="control-label">Start Date:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="txt-edit-academic-calendar-start-date" class="academic_calendar_start_date" id="edit-start-date" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon">
                                    <i class="icon-calender"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="txt-edit-academic-calendar-end-date" class="control-label">End Date:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="txt-edit-academic-calendar-end-date" class="academic_calendar_end_date" id="edit-end-date" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon">
                                    <i class="icon-calender"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn-academic-calendar-update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Delete Academic Calendar -->
    <div id="modal-delete-academic-calendar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="row" method="post" id="delete_academic_calendar_frm" action="<?php echo site_url('academic_calendar/delete'); ?>" data-toggle="validator">
                <div class="modal-content">
                    <input type="hidden" name="hdn_academic_calendar_id_delete" id="hdn_academic_calendar_id_delete">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Delete Academic Calendar</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete <strong><span id="academic_calendar_name_delete"></span></strong> 
                        ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn-academic-calendar-delete" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal -->