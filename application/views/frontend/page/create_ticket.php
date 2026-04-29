<section class="create-ticket-section" data-aos="fade-down" data-aos-duration="1500">
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-12 col-lg-10 col-sm-12">
                <form action="<?= base_url('home/add_ticket') ?>" method="post" enctype="multipart/form-data" onsubmit="formSubmit(event, this)">
                    <?= __csrf(); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="lg_title">Create Ticket</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12 dz_col_p">
                                    <label for="">Subject <span class="error">*</span></label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                                <div class="form-group col-md-6 dz_col_p">
                                    <label for="">Category <span class="error">*</span></label>
                                    <select name="cat_id" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php foreach ($category_list as $row): ?>
                                            <?php if ($row->status == 1): ?>
                                                <option value="<?= $row->id ?>"><?= $row->title ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 dz_col_p">
                                    <label for="">Priority</label>
                                    <select name="priority" class="form-control niceselect wide">
                                        <option value="">Select priority</option>
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                        <option value="very urgent">Very Urgent</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 col-lg-6 col-sm-12 dz_col_p">
                                    <label for="">Ticket Type <span class="error">*</span></label>
                                    <div class="type_btns">
                                        <label class="type-radio-btn">
                                            <input type="radio" name="ticket_type" class="d-none" checked value="public">
                                            <div class="btn-content">
                                                <span class="dot"></span>
                                                Public Ticket
                                            </div>
                                        </label>
                                        <label class="type-radio-btn">
                                            <input type="radio" name="ticket_type" class="d-none" value="privet">
                                            <div class="btn-content">
                                                <span class="dot"></span>
                                                Privet Ticket
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 dz_col_p">
                                    <label for="">Description <span class="error">*</span></label>
                                    <textarea name="description" class="textarea">

                                    </textarea>
                                </div>
                                <div class="form-group col-md-12 mb-0 mt-3 flex gap-15 align-start dz_col_p">
                                    <label class="uploadBtn">
                                        <input type="file" name="file[]" class="d-none imageFile">
                                        <i class="icofont-upload"></i>&nbsp;
                                        Upload Files
                                    </label>
                                    <label class="defaultImage_container d-none">
                                        <img class="imagePreView" src="<?= base_url('assets/frontend/images/default-612x612.jpg') ?>" alt="">
                                        <div class="imgRemoveBtn"><i class="fa-regular fa-trash-can"></i></div>
                                    </label>
                                </div>
                            </div><!-- row -->
                        </div><!-- card-body -->
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary "><i class="icofont-hand-drag1"></i>&nbsp; Submit Ticket</button>
                        </div>
                    </div><!-- card -->
                </form>
            </div>
        </div>
    </div>
</section>