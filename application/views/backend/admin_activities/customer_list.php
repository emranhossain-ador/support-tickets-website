<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header flex align-center space-between">
                <h4 class="card-title">Customer List</h4>
                <a href="javascript:;" data-toggle="modal" data-target="#add" class="btn add_new_btn"><span class="icon"><i class="icofont-plus"></i></span> Add Customer</a>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-striped table-bordered table-borderless db-table">
                        <thead class="table-head">
                            <tr>
                                <th>No.</th>
                                <th>Images</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Register Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customer_list as $key => $customer): ?>
                                <tr>
                                    <td data-label="No."><?= $key + 1 ?></td>
                                    <td data-label="Images">
                                        <?php if ($customer->images): ?>
                                            <div class="db-img">
                                                <img src="<?= base_url($customer->images) ?>" alt="img">
                                            </div>
                                        <?php else: ?>
                                            <div class="defaultText-logo">
                                                <?= __get_first($customer->name) ?>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td data-label="Name"><?= $customer->name ?></td>
                                    <td data-label="Email"><?= $customer->email ?></td>
                                    <td data-label="phone"><?= $customer->phone ?></td>
                                    <td data-label="Register Date">
                                        <label class="label label-info"><?= format_datetime($customer->created_at) ?></label>
                                    </td>
                                    <td class="Action">
                                        <a href="javascript:;" data-toggle="modal" data-target="#edit_<?= $customer->id ?>" class="btn action_btn btn_primary mr-2"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                                        <?= __deleteBtn($customer->id, 'users') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<!----------------------------------------------
Modal Area
---------------------------------------------->

<div class="modal fade customModal" id="add" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/profile/add_customer') ?>" method="post" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name <span class="error">*</span></label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="error">*</span></label>
                        <input type="email" name="email" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" value="" class="form-control only_number">
                    </div>
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


<!----------------------------------------------
Edit Modal
---------------------------------------------->

<?php foreach ($customer_list as $customer): ?>
<div class="modal fade customModal" id="edit_<?= $customer->id ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/profile/add_customer') ?>" method="post" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name <span class="error">*</span></label>
                        <input type="text" name="name" value="<?= $customer->name ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="error">*</span></label>
                        <input type="email" name="email" value="<?= $customer->email ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" value="<?= $customer->phone ?>" class="form-control only_number">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $customer->id ?>">
                <div class="modal-footer space-between">
                    <button type="button" class="btn cancel-btn" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i>&nbsp;Save change</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endforeach; ?>