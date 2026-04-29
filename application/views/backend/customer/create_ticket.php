<div class="row">
    <div class="col-md-12 col-lg-10 col-sm-12">
        <form action="<?= base_url('customer/dashboard/add_ticket') ?>" method="post" enctype="multipart/form-data" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Ticket</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Subject <span class="error">*</span></label>
                            <input type="text" name="subject" class="form-control" value="<?= isset($ticket) ? $ticket->subject : '' ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Category <span class="error">*</span></label>
                            <select name="cat_id" class="form-control select2">
                                <option value="">Select Category</option>
                                <?php foreach ($category_list as $row): ?>
                                    <option <?= isset($ticket) ? ($ticket->cat_id == $row->id ? 'selected' : '') : '' ?> value="<?= $row->id ?>"><?= $row->title ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Priority</label>
                            <select name="priority" class="form-control niceselect wide">
                                <option value="">Select priority</option>
                                <option <?= isset($ticket) ? ($ticket->priority == 'low' ? 'selected' : '') : '' ?> value="low">Low</option>
                                <option <?= isset($ticket) ? ($ticket->priority == 'medium' ? 'selected' : '') : '' ?> value="medium">Medium</option>
                                <option <?= isset($ticket) ? ($ticket->priority == 'high' ? 'selected' : '') : '' ?> value="high">High</option>
                                <option <?= isset($ticket) ? ($ticket->priority == 'very urgent' ? 'selected' : '') : '' ?> value="very urgent">Very Urgent</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Type </label>
                            <div class="type_btns">
                                <label class="type-radio-btn">
                                    <input type="radio" name="ticket_type" class="d-none" value="public" <?= isset($ticket) ? ($ticket->ticket_type == 'public' ? 'checked' : '') : 'checked' ?>>
                                    <div class="btn-content">
                                        <span class="dot"></span>
                                        Public Ticket
                                    </div>
                                </label>
                                <label class="type-radio-btn">
                                    <input type="radio" name="ticket_type" class="d-none" value="privet" <?= isset($ticket) ? ($ticket->ticket_type == 'privet' ? 'checked' : '') : '' ?>>
                                    <div class="btn-content">
                                        <span class="dot"></span>
                                        Privet Ticket
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Description <span class="error">*</span></label>
                            <textarea name="description" class="textarea">
                                <?= isset($ticket) ? $ticket->description : '' ?>
                            </textarea>
                        </div>
                        <div class="form-group col-md-12 mb-0 mt-3 flex gap-15 align-start">
                            <label class="uploadBtn">
                                <input type="file" name="file[]" class="d-none imageFile">
                                <i class="icofont-upload"></i>&nbsp;
                                Upload Files
                            </label>
                            <?php if (isset($ticket) && isset($ticket->images)): ?>
                                <label class="defaultImage_container">
                                    <img class="imagePreView" src="<?= base_url($ticket->images) ?>" alt="">
                                    <div class="imgRemoveBtn"><i class="fa-regular fa-trash-can"></i></div>
                                </label>
                            <?php else: ?>
                                <label class="defaultImage_container d-none">
                                    <img class="imagePreView" src="" alt="">
                                    <div class="imgRemoveBtn"><i class="fa-regular fa-trash-can"></i></div>
                                </label>
                            <?php endif; ?>
                        </div>
                    </div><!-- row -->
                </div><!-- card-body -->
                <input type="hidden" name="id" value="<?= isset($ticket) ? $ticket->id : 0 ?>">
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary "><i class="icofont-hand-drag1"></i>&nbsp; Submit Ticket</button>
                </div>
            </div><!-- card -->
        </form>
    </div>
</div>