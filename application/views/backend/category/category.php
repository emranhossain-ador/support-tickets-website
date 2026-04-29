<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header flex align-center space-between">
                <h4 class="card-title">Category List</h4>
                <a href="javascript:;" data-toggle="collapse" data-target="#add_category" class="btn add_new_btn"><span class="icon"><i class="icofont-plus"></i></span> Add Category</a>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-striped table-bordered table-borderless db-table">
                        <thead class="table-head">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($category_list as $key => $row): ?>
                                <tr>
                                    <td data-label="No."><?= $key + 1 ?></td>
                                    <td data-label="Title"><?= $row->title ?></td>
                                    <td data-label="Status">
                                        <?= __status($row->id, $row->status, 'category_list') ?>
                                    </td>
                                    <td class="Action">
                                        <?= __editBtn('admin/profile/edit_category', $row->id) ?>
                                        <?= __deleteBtn($row->id, 'category_list') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 <?= isset($category) ? 'show' : 'collapse' ?> collapse" id="add_category">
        <form action="<?= base_url('admin/profile/add_category') ?>" method="post" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Category</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Category <span class="error">*</span></label>
                        <input type="text" name="category" class="form-control" value="<?= isset($category) ? $category->title : '' ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= isset($category) ? $category->id : 0 ?>">
                <div class="card-footer align-center space-between flex">
                    <?php if (isset($category)): ?>
                        <a href="<?= base_url('admin/profile/category') ?>" class="btn cancel-btn">Cancel</a>
                    <?php else: ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#add_category" class="btn cancel-btn">Cancel</a>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i>&nbsp;Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>