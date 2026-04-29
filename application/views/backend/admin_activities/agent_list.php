<div class="row">
    <div class="col-md-11">
        <div class="card">
            <div class="card-header flex align-center space-between">
                <h4 class="card-title">Agent List</h4>
                <a href="javascript:;" data-toggle="modal" data-target="#add" class="btn add_new_btn"><span class="icon"><i class="icofont-plus"></i></span> Add Agent</a>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-striped table-bordered table-borderless db-table">
                        <thead class="table-head">
                            <tr>
                                <th>No.</th>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Register Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="No.">1</td>
                                <td data-label="Images">
                                    <!-- <div class="db-img">
                                        <img src="<?= base_url(('assets/backend/images/avatar.png')) ?>" alt="img">
                                    </div> -->
                                    <div class="defaultText-logo">
                                        EM
                                    </div>
                                </td>
                                <td data-label="Name">Al Emran</td>
                                <td data-label="Username">Al Emran</td>
                                <td data-label="Email">Emran@gmail.com</td>
                                <td data-label="phone">01823454</td>
                                <td data-label="Register Date">
                                    <label class="label label-info">5 jan 2025 10:20pm</label>
                                </td>
                                <td class="Action">
                                    <?= __editBtn('admin/profile/edit_agent', 3) ?>
                                    <?= __deleteBtn(6, 'customer_list') ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!----------------------------------------------
Modal Area
---------------------------------------------->

<div class="modal customModal fade in" id="add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name <span class="error">*</span></label>
                        <input type="text" name="name"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="error">*</span></label>
                        <input type="email" name="email"  class="form-control">
                    </div>

                    <div class="form-group mb-0">
                        <label for="">Username</label>
                        <input type="text" name="username" value="" class="form-control">
                    </div>
                    <p></p>
                </div>
                <div class="modal-footer space-between">
                    <button type="button" class="btn cancel-btn" data-dismiss="modal">Cancel</button>
                    <p class="m-0" style="color: var(--color);">Password : 123</p>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i>&nbsp;Save change</button>
                </div>
            </div>
        </form>
    </div>
</div>