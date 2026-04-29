<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header flex align-center space-between">
                <h4 class="card-title">Knowledge List</h4>
                <a href="<?= base_url('admin/profile/create_knowledge') ?>" class="btn add_new_btn"><span class="icon"><i class="icofont-plus"></i></span> Add Knowledge</a>
            </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-striped table-bordered db-table">
                        <thead class="table-head">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Details</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($knowledge as $key => $row): ?>
                                <tr>
                                    <td data-label="No."><?= $key+1 ?></td>
                                    <td data-label="Title" class="faq_title"><?= $row->title ?></td>
                                    <td data-label="Category">
                                        <?= $row->category_name ?>
                                    </td>
                                    <td data-label="Details" class="know_Details">
                                        <h6><?= $row->details ?></h6>
                                    </td>
                                    <td data-label="Status">
                                        <?= __status($row->id, $row->status, 'knowledge') ?>
                                    </td>
                                    <td class="Action">
                                        <?= __editBtn('admin/profile/edit_knowledge', $row->id) ?>
                                        <?= __deleteBtn($row->id, 'knowledge') ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>