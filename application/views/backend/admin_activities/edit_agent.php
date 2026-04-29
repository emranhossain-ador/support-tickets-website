<div class="row">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Agent</h5>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="">Name <span class="error">*</span></label>
                        <input type="text" name="name" value="emran" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Email <span class="error">*</span></label>
                        <input type="email" name="email" value="emran@gmail.com" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">phone</label>
                        <input type="text" name="phone" value="" class="form-control only_number">
                    </div>

                    <div class="form-group mb-0">
                        <label for="">Images</label>
                        <label class="default_imageBox m-0">
                            <img class="preview_img d-none">
                            <div class="preview_actionBtn">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h5>Upload File</h5>
                            </div>
                            <span class="uploadRemove d-none"><i class="fa-regular fa-trash-can"></i></span>
                            <input type="file" name="file[]" class="d-none inputFile">
                        </label>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="<?= base_url('admin/profile/agent_list') ?>" class="btn cancel-btn">Cancel</a>
                    <button type="submit" class="btn btn-primary block ml-auto"><i class="icofont-hand-drag1"></i>&nbsp;Update</button>
                </div>
            </div>
        </form>
    </div>
</div>