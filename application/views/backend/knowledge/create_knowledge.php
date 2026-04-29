<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url('admin/profile/add_knowledge') ?>" method="post" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Knowledge</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Title <span class="error">*</span></label>
                        <input type="text" name="title" value="<?= isset($knowledge) ? $knowledge->title:'' ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Category <span class="error">*</span></label>
                        <select name="cat_id" class="form-control select2">
                            <option value="">Select Category</option>
                            <?php foreach ($category_list as $row): ?>
                                <?php if ($row->status == 1): ?>
                                    <option <?= isset($knowledge) ? ($knowledge->cat_id == $row->id ? 'selected':'') :'' ?> value="<?= $row->id ?>"><?= $row->title ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Details <span class="error">*</span></label>
                        <textarea name="details" class="textarea">
                            <?= isset($knowledge) ? $knowledge->details : '' ?>
                        </textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= isset($knowledge) ? $knowledge->id : 0 ?>">
                <div class="card-footer flex align-center space-between">
                    <a href="<?= base_url('admin/profile/knowledge') ?>" class="btn cancel-btn">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i>&nbsp;Save Change</button>
                </div>
            </div>
        </form>
    </div>
</div>