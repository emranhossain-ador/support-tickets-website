<div class="register-wrapper">
    <div class="row xs-reverse flex_common">
        <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="signup_svg">
                <img src="<?= base_url(('assets/frontend/images/signup-bg.png')) ?>" alt="img">
            </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="register_input_box">
                <div class="register_content">
                    <form action="<?= base_url('login/signup') ?>" method="post" onsubmit="__registerSubmit(event, this)">
                        <?= __csrf(); ?>
                        <div class="title">
                            <h4>SignUp</h4>
                            <h6>Create new account</h6>
                        </div>
                        <div class="form_input_area">
                            <div class="form-group">
                                <label for="">Full Name <span class="error">*</span></label>
                                <input type="text" name="name" class="form-control bg-soft" placeholder="Enter your name...">
                                <?php if (form_error('name')): ?>
                                    <div class="validation-error"><i class="fa-solid fa-circle-exclamation"></i><?= form_error('name'); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email <span class="error">*</span></label>
                                <input type="email" name="email" class="form-control bg-soft" placeholder="Email...">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control bg-soft" placeholder="Username...">
                            </div>
                            <div class="form-group">
                                <label for="">Password <span class="error">*</span></label>
                                <input type="password" name="password" class="form-control bg-soft" placeholder="Password...">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password <span class="error">*</span></label>
                                <input type="password" name="confirm_password" class="form-control bg-soft" placeholder="Confirm Password...">
                            </div>
                            <div class="my-3 text-right">
                                <button type="submit" class="btn btn-primary "><i class="icofont-hand-drag1"></i>&nbsp; Sign Up</button>
                            </div>
                            <h6>Have an account..? <a href="<?= base_url('login') ?>" class="bottom_link">Sign in</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>