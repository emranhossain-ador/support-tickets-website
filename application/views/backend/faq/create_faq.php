<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url('admin/profile/add_faq') ?>" method="post" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">FAQ's</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Title <span class="error">*</span></label>
                        <input type="text" name="title" value="<?= isset($faq) ? $faq->title : '' ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description <span class="error">*</span></label>
                        <textarea name="description" class="textarea">
                            <?= isset($faq) ? $faq->description : '' ?>
                        </textarea>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= isset($faq) ? $faq->id : '' ?>">
                <div class="card-footer flex align-center space-between">
                    <a href="<?= base_url('admin/profile/faq') ?>" class="btn cancel-btn">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i>&nbsp;Save Change</button>
                </div>
            </div>
        </form>
    </div>
</div>