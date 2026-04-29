<div class="row">
    <div class="col-md-6 col-lg-4 col-sm-12">
        <div class="userProfile_box">
            <div class="profile_header">
                <a href="javascript:;" class="btn profileEditBtn" data-toggle="modal" data-target="#edit_<?= __user_info()->id ?>"><i class="fa fa-edit"></i></a>
            </div>
            <div class="profile_body">
                <div class="profile_img">
                    <?php if (__user_info()->images): ?>
                        <img src="<?= base_url(__user_info()->images) ?>" alt="img">
                    <?php else: ?>
                        <img src="<?= base_url('assets/backend/images/avatar.png') ?>" alt="img">
                    <?php endif; ?>
                </div>
                <div class="profile_infoContent">
                    <h5 class="name"><i class="fa-regular fa-user-circle"></i>&nbsp;<?= __user_info()->name ?></h5>
                    <h5><i class="fa-solid fa-user-secret fz-16"></i>&nbsp;<?= __user_info()->username ?></h5>
                    <h6><i class="fa fa-envelope"></i>&nbsp;<?= __user_info()->email ?></h6>
                    <?php if (__user_info()->phone): ?>
                        <h6><i class="fa fa-phone"></i>&nbsp;<?= __user_info()->phone ?></h6>
                    <?php endif; ?>
                    <h5><span class="fz-15">Member since</span>&nbsp;:&nbsp;&nbsp; <i class="fa fa-clock"></i>&nbsp;<?= format_date(__user_info()->created_at) ?></h5>
                </div>
            </div>
            <div class="profile_footer">
                <ul class="social_menu">
                    <li>
                        <a href="" class="social_link">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="social_link">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="social_link">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="social_link">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!----------------------------------------------
Modal Area 
---------------------------------------------->

<!-- Modal -->
<div class="modal fade customModal" id="edit_<?= __user_info()->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('customer/dashboard/update_profile') ?>" method="post" enctype="multipart/form-data" onsubmit="formSubmit(event, this)">
            <?= __csrf(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="<?= __user_info()->name ?>" placeholder="Hossain..">
                    </div>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= __user_info()->username ?>" placeholder="hossain23..">
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" value="<?= __user_info()->email ?>" placeholder="emarn@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= __user_info()->phone ?>" placeholder="+88012672347">
                    </div>
                    <div class="form-group">
                        <label for="Images">Images</label>
                        <input type="file" name="file[]" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= __user_info()->id ?>">
                <div class="modal-footer flex align-center space-between">
                    <button type="button" class="btn cancel-btn" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="icofont-hand-drag1"></i> Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>