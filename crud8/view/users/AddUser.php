<!-- Add New -->

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add User</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="adduser">
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Surname:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="surname">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Position:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="position">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" style="position:relative; top:7px;">Password:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>