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
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button class="pull-right btn btn-info m-b-30" type="button" data-toggle="modal" data-target="#modal-add-academic-calendar">Add Academic Calendar</button>
                            <div class="clearfix"></div>
                            <div class="table-responsive">
                                <table id="academic_calendar_tbl" class="table display">
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
                                    <tbody>
                                        <?php foreach ($academic_calendar as $row) { ?>
                                        <tr>
                                            <td><?php echo $row->name ?></td>
                                            <td><?php echo $row->start_year ?></td>
                                            <td><?php echo $row->end_year ?></td>
                                            <td><?php echo date('Y-m-d', strtotime($row->start_date)) ?></td>
                                            <td><?php echo date('Y-m-d', strtotime($row->end_date)) ?></td>
                                            <td>
                                                <button class="btn btn-default btn-outline"><i class="mdi mdi-pencil fa-fw text-success"></i></button>
                                                <button class="btn btn-default btn-outline"><i class="mdi mdi-delete fa-fw text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- Modals here -->
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
                            <form class="row" method="post" action="<?php echo site_url('academic_calendar/addAcademicCalendar'); ?>">  
                                <div class="form-group col-sm-12">
                                    <label for="txt-add-academic-calendar-name" class="control-label">Name:</label>
                                    <input type="text" class="form-control" name="txt-add-academic-calendar-name" placeholder="e.g. A.Y. 2017-2018">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="txt-add-academic-calendar-start-year" class="control-label">Start Year:</label>
                                    <input type="text" class="form-control" name="txt-add-academic-calendar-start-year" placeholder="e.g. 2017">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="txt-add-academic-calendar-end-year" class="control-label">End Year:</label>
                                    <input type="text" class="form-control" name="txt-add-academic-calendar-end-year" placeholder="e.g. 2018">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="txt-add-academic-calendar-start-date" class="control-label">Start Date:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="txt-add-academic-calendar-start-date" id="start-date" placeholder="mm/dd/yyyy">
                                        <span class="input-group-addon"><i class="icon-calender"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="txt-add-academic-calendar-end-date" class="control-label">End Date:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="txt-add-academic-calendar-end-date" id="end-date" placeholder="mm/dd/yyyy">
                                        <span class="input-group-addon"><i class="icon-calender"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal -->