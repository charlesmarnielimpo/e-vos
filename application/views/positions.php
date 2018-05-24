        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Positions</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="active">Positions</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <button class="pull-right btn btn-info m-b-30" type="button" data-toggle="modal" data-target="#modal-add-position">Add Position</button>
                            <div class="clearfix"></div>
                            <div class="table-responsive">
                                <table id="positions_tbl" class="table display">
                                    <thead>
                                        <tr>
                                            <th width="10%" class="text-center">#</th>
                                            <th width="75%">Name</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($position as $row) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $row->id; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td>
                                                    <button class="btn btn-default btn-outline" data-toggle="modal" data-target="#modal-edit-position"><i class="mdi mdi-pencil fa-fw text-success"></i></button>
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
            <div class="modal fade" id="modal-add-position" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="exampleModalLabel1">Add Position</h4>
                        </div>
                        <form action="<?php echo base_url().'positions/create' ?>" method="post">
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="txt-add-position" class="control-label">Name:</label>
                                        <input type="text" class="form-control" name="txt-add-position" placeholder="e.g. President">
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
            <div class="modal fade" id="modal-edit-position" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="exampleModalLabel1">Edit Position</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="txt-add-position" class="control-label">Name:</label>
                                    <input type="text" class="form-control" name="txt-edit-position" placeholder="e.g. President">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <footer class="footer text-center"> 2018 &copy; All rights reserve. Onieros IT Solutions. </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->