<div class="login-wrapper">
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-5">
                <form action="<?= base_url('login/signin') ?>" method="post" class="relative z-index" onsubmit="formSubmit(event, this)">
                    <?= __csrf(); ?>
                    <div class="login_box">
                        <div class="title">
                            <h4>Welcome Back!</h4>
                            <p>Sign in your account.</p>
                        </div>
                        <div class="form_input_area">
                            <div class="form-group">
                                <label for="">Email OR Username <span class="error">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa-solid fa-user-secret"></i>
                                    </div>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Password <span class="error">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="icofont-key"></i>
                                    </div>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <a href="" class="forgot">Forgot Password</a>
                        </div>
                        <div class="my-3 text-right">
                            <button type="submit" class="btn btn-primary load block w-full"><i class="icofont-hand-drag1"></i>&nbsp; Sign In</button>
                        </div>
                        <h6>Don't have and account..? <a href="<?= base_url('register') ?>" class="bottom_link">Sign Up</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="style_svg">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" version="1.1" viewBox="0 0 1422 800" foxified="">
            <g stroke-width="3.5" stroke="#ffffff82" fill="none" stroke-linecap="butt">
                <line x1="54" y1="0" x2="0" y2="54" opacity="0.40" />
                <line x1="54" y1="0" x2="108" y2="54" opacity="0.58" />
                <line x1="162" y1="0" x2="108" y2="54" opacity="0.53" />
                <line x1="216" y1="0" x2="162" y2="54" opacity="0.95" />
                <line x1="216" y1="0" x2="270" y2="54" opacity="0.28" />
                <line x1="324" y1="0" x2="270" y2="54" opacity="0.64" />
                <line x1="324" y1="0" x2="378" y2="54" opacity="0.07" />
                <line x1="432" y1="0" x2="378" y2="54" opacity="0.20" />
                <line x1="486" y1="0" x2="432" y2="54" opacity="0.77" />
                <line x1="540" y1="0" x2="486" y2="54" opacity="0.45" />
                <line x1="594" y1="0" x2="540" y2="54" opacity="0.10" />
                <line x1="594" y1="0" x2="648" y2="54" opacity="0.99" />
                <line x1="702" y1="0" x2="648" y2="54" opacity="0.23" />
                <line x1="702" y1="0" x2="756" y2="54" opacity="0.46" />
                <line x1="756" y1="0" x2="810" y2="54" opacity="0.43" />
                <line x1="810" y1="0" x2="864" y2="54" opacity="0.46" />
                <line x1="918" y1="0" x2="864" y2="54" opacity="0.79" />
                <line x1="918" y1="0" x2="972" y2="54" opacity="0.31" />
                <line x1="972" y1="0" x2="1026" y2="54" opacity="0.89" />
                <line x1="1026" y1="0" x2="1080" y2="54" opacity="0.60" />
                <line x1="1134" y1="0" x2="1080" y2="54" opacity="0.10" />
                <line x1="1188" y1="0" x2="1134" y2="54" opacity="0.25" />
                <line x1="1242" y1="0" x2="1188" y2="54" opacity="0.16" />
                <line x1="1296" y1="0" x2="1242" y2="54" opacity="0.99" />
                <line x1="1296" y1="0" x2="1350" y2="54" opacity="0.55" />
                <line x1="1404" y1="0" x2="1350" y2="54" opacity="0.33" />
                <line x1="1458" y1="0" x2="1404" y2="54" opacity="0.27" />
                <line x1="54" y1="54" x2="0" y2="108" opacity="0.28" />
                <line x1="108" y1="54" x2="54" y2="108" opacity="0.30" />
                <line x1="162" y1="54" x2="108" y2="108" opacity="0.08" />
                <line x1="216" y1="54" x2="162" y2="108" opacity="0.95" />
                <line x1="270" y1="54" x2="216" y2="108" opacity="0.40" />
                <line x1="324" y1="54" x2="270" y2="108" opacity="0.31" />
                <line x1="378" y1="54" x2="324" y2="108" opacity="0.13" />
                <line x1="432" y1="54" x2="378" y2="108" opacity="0.44" />
                <line x1="432" y1="54" x2="486" y2="108" opacity="0.75" />
                <line x1="540" y1="54" x2="486" y2="108" opacity="0.74" />
                <line x1="540" y1="54" x2="594" y2="108" opacity="0.94" />
                <line x1="648" y1="54" x2="594" y2="108" opacity="0.22" />
                <line x1="648" y1="54" x2="702" y2="108" opacity="0.28" />
                <line x1="702" y1="54" x2="756" y2="108" opacity="0.43" />
                <line x1="756" y1="54" x2="810" y2="108" opacity="0.12" />
                <line x1="864" y1="54" x2="810" y2="108" opacity="0.78" />
                <line x1="864" y1="54" x2="918" y2="108" opacity="0.94" />
                <line x1="918" y1="54" x2="972" y2="108" opacity="0.44" />
                <line x1="972" y1="54" x2="1026" y2="108" opacity="0.71" />
                <line x1="1080" y1="54" x2="1026" y2="108" opacity="0.08" />
                <line x1="1080" y1="54" x2="1134" y2="108" opacity="0.09" />
                <line x1="1134" y1="54" x2="1188" y2="108" opacity="0.43" />
                <line x1="1188" y1="54" x2="1242" y2="108" opacity="0.36" />
                <line x1="1242" y1="54" x2="1296" y2="108" opacity="0.45" />
                <line x1="1296" y1="54" x2="1350" y2="108" opacity="0.58" />
                <line x1="1404" y1="54" x2="1350" y2="108" opacity="0.13" />
                <line x1="1404" y1="54" x2="1458" y2="108" opacity="0.86" />
                <line x1="0" y1="108" x2="54" y2="162" opacity="0.09" />
                <line x1="108" y1="108" x2="54" y2="162" opacity="0.45" />
                <line x1="108" y1="108" x2="162" y2="162" opacity="0.07" />
                <line x1="216" y1="108" x2="162" y2="162" opacity="0.63" />
                <line x1="270" y1="108" x2="216" y2="162" opacity="0.95" />
                <line x1="270" y1="108" x2="324" y2="162" opacity="0.08" />
                <line x1="324" y1="108" x2="378" y2="162" opacity="0.40" />
                <line x1="378" y1="108" x2="432" y2="162" opacity="0.54" />
                <line x1="432" y1="108" x2="486" y2="162" opacity="0.82" />
                <line x1="486" y1="108" x2="540" y2="162" opacity="0.89" />
                <line x1="594" y1="108" x2="540" y2="162" opacity="0.47" />
                <line x1="648" y1="108" x2="594" y2="162" opacity="0.92" />
                <line x1="702" y1="108" x2="648" y2="162" opacity="0.93" />
                <line x1="702" y1="108" x2="756" y2="162" opacity="0.67" />
                <line x1="756" y1="108" x2="810" y2="162" opacity="0.46" />
                <line x1="810" y1="108" x2="864" y2="162" opacity="0.16" />
                <line x1="918" y1="108" x2="864" y2="162" opacity="0.94" />
                <line x1="972" y1="108" x2="918" y2="162" opacity="0.34" />
                <line x1="1026" y1="108" x2="972" y2="162" opacity="0.55" />
                <line x1="1080" y1="108" x2="1026" y2="162" opacity="0.86" />
                <line x1="1134" y1="108" x2="1080" y2="162" opacity="0.32" />
                <line x1="1134" y1="108" x2="1188" y2="162" opacity="0.76" />
                <line x1="1188" y1="108" x2="1242" y2="162" opacity="0.56" />
                <line x1="1296" y1="108" x2="1242" y2="162" opacity="0.08" />
                <line x1="1350" y1="108" x2="1296" y2="162" opacity="0.77" />
                <line x1="1350" y1="108" x2="1404" y2="162" opacity="0.13" />
                <line x1="1404" y1="108" x2="1458" y2="162" opacity="0.62" />
                <line x1="54" y1="162" x2="0" y2="216" opacity="0.38" />
                <line x1="54" y1="162" x2="108" y2="216" opacity="0.25" />
                <line x1="162" y1="162" x2="108" y2="216" opacity="0.88" />
                <line x1="216" y1="162" x2="162" y2="216" opacity="0.42" />
                <line x1="216" y1="162" x2="270" y2="216" opacity="0.91" />
                <line x1="324" y1="162" x2="270" y2="216" opacity="0.64" />
                <line x1="324" y1="162" x2="378" y2="216" opacity="0.48" />
                <line x1="378" y1="162" x2="432" y2="216" opacity="0.48" />
                <line x1="486" y1="162" x2="432" y2="216" opacity="0.95" />
                <line x1="486" y1="162" x2="540" y2="216" opacity="0.52" />
                <line x1="540" y1="162" x2="594" y2="216" opacity="0.88" />
                <line x1="648" y1="162" x2="594" y2="216" opacity="0.63" />
                <line x1="702" y1="162" x2="648" y2="216" opacity="0.87" />
                <line x1="756" y1="162" x2="702" y2="216" opacity="0.35" />
                <line x1="810" y1="162" x2="756" y2="216" opacity="0.62" />
                <line x1="864" y1="162" x2="810" y2="216" opacity="0.43" />
                <line x1="918" y1="162" x2="864" y2="216" opacity="0.30" />
                <line x1="972" y1="162" x2="918" y2="216" opacity="0.85" />
                <line x1="972" y1="162" x2="1026" y2="216" opacity="0.25" />
                <line x1="1080" y1="162" x2="1026" y2="216" opacity="0.78" />
                <line x1="1134" y1="162" x2="1080" y2="216" opacity="0.35" />
                <line x1="1134" y1="162" x2="1188" y2="216" opacity="0.52" />
                <line x1="1242" y1="162" x2="1188" y2="216" opacity="0.34" />
                <line x1="1242" y1="162" x2="1296" y2="216" opacity="0.78" />
                <line x1="1296" y1="162" x2="1350" y2="216" opacity="0.88" />
                <line x1="1350" y1="162" x2="1404" y2="216" opacity="0.12" />
                <line x1="1458" y1="162" x2="1404" y2="216" opacity="0.47" />
                <line x1="54" y1="216" x2="0" y2="270" opacity="0.49" />
                <line x1="108" y1="216" x2="54" y2="270" opacity="0.84" />
                <line x1="162" y1="216" x2="108" y2="270" opacity="0.39" />
                <line x1="216" y1="216" x2="162" y2="270" opacity="0.67" />
                <line x1="270" y1="216" x2="216" y2="270" opacity="0.60" />
                <line x1="324" y1="216" x2="270" y2="270" opacity="0.73" />
                <line x1="324" y1="216" x2="378" y2="270" opacity="0.29" />
                <line x1="378" y1="216" x2="432" y2="270" opacity="0.28" />
                <line x1="486" y1="216" x2="432" y2="270" opacity="0.50" />
                <line x1="486" y1="216" x2="540" y2="270" opacity="0.23" />
                <line x1="540" y1="216" x2="594" y2="270" opacity="0.88" />
                <line x1="648" y1="216" x2="594" y2="270" opacity="0.98" />
                <line x1="702" y1="216" x2="648" y2="270" opacity="0.67" />
                <line x1="702" y1="216" x2="756" y2="270" opacity="0.81" />
                <line x1="756" y1="216" x2="810" y2="270" opacity="0.44" />
                <line x1="810" y1="216" x2="864" y2="270" opacity="0.68" />
                <line x1="864" y1="216" x2="918" y2="270" opacity="0.86" />
                <line x1="972" y1="216" x2="918" y2="270" opacity="0.08" />
                <line x1="972" y1="216" x2="1026" y2="270" opacity="0.99" />
                <line x1="1080" y1="216" x2="1026" y2="270" opacity="0.50" />
                <line x1="1080" y1="216" x2="1134" y2="270" opacity="0.58" />
                <line x1="1134" y1="216" x2="1188" y2="270" opacity="0.46" />
                <line x1="1188" y1="216" x2="1242" y2="270" opacity="0.21" />
                <line x1="1296" y1="216" x2="1242" y2="270" opacity="0.64" />
                <line x1="1296" y1="216" x2="1350" y2="270" opacity="0.67" />
                <line x1="1350" y1="216" x2="1404" y2="270" opacity="0.31" />
                <line x1="1458" y1="216" x2="1404" y2="270" opacity="0.34" />
                <line x1="0" y1="270" x2="54" y2="324" opacity="0.27" />
                <line x1="54" y1="270" x2="108" y2="324" opacity="0.64" />
                <line x1="108" y1="270" x2="162" y2="324" opacity="0.32" />
                <line x1="216" y1="270" x2="162" y2="324" opacity="0.20" />
                <line x1="216" y1="270" x2="270" y2="324" opacity="0.65" />
                <line x1="324" y1="270" x2="270" y2="324" opacity="0.59" />
                <line x1="378" y1="270" x2="324" y2="324" opacity="0.20" />
                <line x1="378" y1="270" x2="432" y2="324" opacity="0.47" />
                <line x1="486" y1="270" x2="432" y2="324" opacity="0.47" />
                <line x1="540" y1="270" x2="486" y2="324" opacity="0.11" />
                <line x1="594" y1="270" x2="540" y2="324" opacity="0.81" />
                <line x1="648" y1="270" x2="594" y2="324" opacity="0.33" />
                <line x1="702" y1="270" x2="648" y2="324" opacity="0.31" />
                <line x1="702" y1="270" x2="756" y2="324" opacity="0.27" />
                <line x1="756" y1="270" x2="810" y2="324" opacity="0.57" />
                <line x1="864" y1="270" x2="810" y2="324" opacity="0.19" />
                <line x1="864" y1="270" x2="918" y2="324" opacity="0.34" />
                <line x1="972" y1="270" x2="918" y2="324" opacity="0.53" />
                <line x1="972" y1="270" x2="1026" y2="324" opacity="0.15" />
                <line x1="1026" y1="270" x2="1080" y2="324" opacity="0.88" />
                <line x1="1080" y1="270" x2="1134" y2="324" opacity="0.37" />
                <line x1="1188" y1="270" x2="1134" y2="324" opacity="0.29" />
                <line x1="1188" y1="270" x2="1242" y2="324" opacity="0.32" />
                <line x1="1242" y1="270" x2="1296" y2="324" opacity="0.19" />
                <line x1="1296" y1="270" x2="1350" y2="324" opacity="0.71" />
                <line x1="1350" y1="270" x2="1404" y2="324" opacity="0.82" />
                <line x1="1404" y1="270" x2="1458" y2="324" opacity="0.96" />
                <line x1="54" y1="324" x2="0" y2="378" opacity="0.33" />
                <line x1="108" y1="324" x2="54" y2="378" opacity="0.40" />
                <line x1="162" y1="324" x2="108" y2="378" opacity="0.78" />
                <line x1="162" y1="324" x2="216" y2="378" opacity="0.89" />
                <line x1="270" y1="324" x2="216" y2="378" opacity="0.88" />
                <line x1="324" y1="324" x2="270" y2="378" opacity="0.57" />
                <line x1="324" y1="324" x2="378" y2="378" opacity="0.18" />
                <line x1="432" y1="324" x2="378" y2="378" opacity="0.65" />
                <line x1="486" y1="324" x2="432" y2="378" opacity="0.40" />
                <line x1="486" y1="324" x2="540" y2="378" opacity="0.25" />
                <line x1="540" y1="324" x2="594" y2="378" opacity="0.85" />
                <line x1="648" y1="324" x2="594" y2="378" opacity="0.29" />
                <line x1="702" y1="324" x2="648" y2="378" opacity="0.40" />
                <line x1="756" y1="324" x2="702" y2="378" opacity="0.61" />
                <line x1="756" y1="324" x2="810" y2="378" opacity="0.80" />
                <line x1="864" y1="324" x2="810" y2="378" opacity="0.25" />
                <line x1="918" y1="324" x2="864" y2="378" opacity="0.07" />
                <line x1="918" y1="324" x2="972" y2="378" opacity="0.76" />
                <line x1="972" y1="324" x2="1026" y2="378" opacity="0.80" />
                <line x1="1026" y1="324" x2="1080" y2="378" opacity="0.74" />
                <line x1="1134" y1="324" x2="1080" y2="378" opacity="0.99" />
                <line x1="1134" y1="324" x2="1188" y2="378" opacity="0.33" />
                <line x1="1242" y1="324" x2="1188" y2="378" opacity="0.21" />
                <line x1="1242" y1="324" x2="1296" y2="378" opacity="0.31" />
                <line x1="1296" y1="324" x2="1350" y2="378" opacity="0.74" />
                <line x1="1404" y1="324" x2="1350" y2="378" opacity="0.88" />
                <line x1="1404" y1="324" x2="1458" y2="378" opacity="0.46" />
                <line x1="0" y1="378" x2="54" y2="432" opacity="0.23" />
                <line x1="54" y1="378" x2="108" y2="432" opacity="0.18" />
                <line x1="162" y1="378" x2="108" y2="432" opacity="0.43" />
                <line x1="216" y1="378" x2="162" y2="432" opacity="0.52" />
                <line x1="270" y1="378" x2="216" y2="432" opacity="0.79" />
                <line x1="324" y1="378" x2="270" y2="432" opacity="0.43" />
                <line x1="378" y1="378" x2="324" y2="432" opacity="0.36" />
                <line x1="378" y1="378" x2="432" y2="432" opacity="0.63" />
                <line x1="486" y1="378" x2="432" y2="432" opacity="0.57" />
                <line x1="486" y1="378" x2="540" y2="432" opacity="0.58" />
                <line x1="540" y1="378" x2="594" y2="432" opacity="0.99" />
                <line x1="648" y1="378" x2="594" y2="432" opacity="0.34" />
                <line x1="702" y1="378" x2="648" y2="432" opacity="0.81" />
                <line x1="756" y1="378" x2="702" y2="432" opacity="0.43" />
                <line x1="756" y1="378" x2="810" y2="432" opacity="0.38" />
                <line x1="810" y1="378" x2="864" y2="432" opacity="0.55" />
                <line x1="918" y1="378" x2="864" y2="432" opacity="0.48" />
                <line x1="918" y1="378" x2="972" y2="432" opacity="0.36" />
                <line x1="1026" y1="378" x2="972" y2="432" opacity="0.99" />
                <line x1="1080" y1="378" x2="1026" y2="432" opacity="0.32" />
                <line x1="1080" y1="378" x2="1134" y2="432" opacity="0.98" />
                <line x1="1134" y1="378" x2="1188" y2="432" opacity="0.91" />
                <line x1="1242" y1="378" x2="1188" y2="432" opacity="0.53" />
                <line x1="1242" y1="378" x2="1296" y2="432" opacity="0.24" />
                <line x1="1350" y1="378" x2="1296" y2="432" opacity="0.43" />
                <line x1="1404" y1="378" x2="1350" y2="432" opacity="0.39" />
                <line x1="1458" y1="378" x2="1404" y2="432" opacity="0.67" />
                <line x1="54" y1="432" x2="0" y2="486" opacity="0.99" />
                <line x1="54" y1="432" x2="108" y2="486" opacity="0.80" />
                <line x1="162" y1="432" x2="108" y2="486" opacity="0.30" />
                <line x1="216" y1="432" x2="162" y2="486" opacity="0.08" />
                <line x1="216" y1="432" x2="270" y2="486" opacity="0.74" />
                <line x1="270" y1="432" x2="324" y2="486" opacity="0.66" />
                <line x1="378" y1="432" x2="324" y2="486" opacity="0.47" />
                <line x1="432" y1="432" x2="378" y2="486" opacity="0.94" />
                <line x1="432" y1="432" x2="486" y2="486" opacity="0.90" />
                <line x1="540" y1="432" x2="486" y2="486" opacity="0.36" />
                <line x1="540" y1="432" x2="594" y2="486" opacity="0.67" />
                <line x1="648" y1="432" x2="594" y2="486" opacity="0.57" />
                <line x1="702" y1="432" x2="648" y2="486" opacity="0.53" />
                <line x1="756" y1="432" x2="702" y2="486" opacity="0.49" />
                <line x1="756" y1="432" x2="810" y2="486" opacity="0.67" />
                <line x1="864" y1="432" x2="810" y2="486" opacity="0.57" />
                <line x1="864" y1="432" x2="918" y2="486" opacity="0.84" />
                <line x1="972" y1="432" x2="918" y2="486" opacity="0.72" />
                <line x1="972" y1="432" x2="1026" y2="486" opacity="0.57" />
                <line x1="1026" y1="432" x2="1080" y2="486" opacity="0.59" />
                <line x1="1080" y1="432" x2="1134" y2="486" opacity="0.51" />
                <line x1="1134" y1="432" x2="1188" y2="486" opacity="0.62" />
                <line x1="1188" y1="432" x2="1242" y2="486" opacity="0.93" />
                <line x1="1296" y1="432" x2="1242" y2="486" opacity="0.44" />
                <line x1="1350" y1="432" x2="1296" y2="486" opacity="0.92" />
                <line x1="1350" y1="432" x2="1404" y2="486" opacity="0.65" />
                <line x1="1458" y1="432" x2="1404" y2="486" opacity="0.14" />
                <line x1="0" y1="486" x2="54" y2="540" opacity="0.09" />
                <line x1="54" y1="486" x2="108" y2="540" opacity="0.69" />
                <line x1="162" y1="486" x2="108" y2="540" opacity="0.44" />
                <line x1="162" y1="486" x2="216" y2="540" opacity="0.27" />
                <line x1="216" y1="486" x2="270" y2="540" opacity="0.79" />
                <line x1="270" y1="486" x2="324" y2="540" opacity="0.71" />
                <line x1="324" y1="486" x2="378" y2="540" opacity="0.20" />
                <line x1="378" y1="486" x2="432" y2="540" opacity="0.59" />
                <line x1="432" y1="486" x2="486" y2="540" opacity="0.48" />
                <line x1="540" y1="486" x2="486" y2="540" opacity="0.92" />
                <line x1="540" y1="486" x2="594" y2="540" opacity="0.99" />
                <line x1="594" y1="486" x2="648" y2="540" opacity="0.43" />
                <line x1="702" y1="486" x2="648" y2="540" opacity="0.84" />
                <line x1="702" y1="486" x2="756" y2="540" opacity="0.73" />
                <line x1="756" y1="486" x2="810" y2="540" opacity="0.99" />
                <line x1="864" y1="486" x2="810" y2="540" opacity="0.61" />
                <line x1="918" y1="486" x2="864" y2="540" opacity="0.96" />
                <line x1="972" y1="486" x2="918" y2="540" opacity="0.12" />
                <line x1="972" y1="486" x2="1026" y2="540" opacity="0.98" />
                <line x1="1080" y1="486" x2="1026" y2="540" opacity="0.96" />
                <line x1="1134" y1="486" x2="1080" y2="540" opacity="0.50" />
                <line x1="1134" y1="486" x2="1188" y2="540" opacity="0.42" />
                <line x1="1242" y1="486" x2="1188" y2="540" opacity="0.53" />
                <line x1="1242" y1="486" x2="1296" y2="540" opacity="0.67" />
                <line x1="1296" y1="486" x2="1350" y2="540" opacity="0.66" />
                <line x1="1350" y1="486" x2="1404" y2="540" opacity="0.48" />
                <line x1="1404" y1="486" x2="1458" y2="540" opacity="0.44" />
                <line x1="0" y1="540" x2="54" y2="594" opacity="0.49" />
                <line x1="108" y1="540" x2="54" y2="594" opacity="0.28" />
                <line x1="162" y1="540" x2="108" y2="594" opacity="0.51" />
                <line x1="162" y1="540" x2="216" y2="594" opacity="0.69" />
                <line x1="216" y1="540" x2="270" y2="594" opacity="0.23" />
                <line x1="324" y1="540" x2="270" y2="594" opacity="0.41" />
                <line x1="324" y1="540" x2="378" y2="594" opacity="0.54" />
                <line x1="432" y1="540" x2="378" y2="594" opacity="0.63" />
                <line x1="486" y1="540" x2="432" y2="594" opacity="0.20" />
                <line x1="486" y1="540" x2="540" y2="594" opacity="0.15" />
                <line x1="540" y1="540" x2="594" y2="594" opacity="0.85" />
                <line x1="648" y1="540" x2="594" y2="594" opacity="0.53" />
                <line x1="648" y1="540" x2="702" y2="594" opacity="0.44" />
                <line x1="756" y1="540" x2="702" y2="594" opacity="0.39" />
                <line x1="810" y1="540" x2="756" y2="594" opacity="0.74" />
                <line x1="864" y1="540" x2="810" y2="594" opacity="0.18" />
                <line x1="864" y1="540" x2="918" y2="594" opacity="0.94" />
                <line x1="972" y1="540" x2="918" y2="594" opacity="0.37" />
                <line x1="972" y1="540" x2="1026" y2="594" opacity="0.47" />
                <line x1="1026" y1="540" x2="1080" y2="594" opacity="0.34" />
                <line x1="1134" y1="540" x2="1080" y2="594" opacity="0.54" />
                <line x1="1134" y1="540" x2="1188" y2="594" opacity="0.22" />
                <line x1="1188" y1="540" x2="1242" y2="594" opacity="0.95" />
                <line x1="1296" y1="540" x2="1242" y2="594" opacity="0.78" />
                <line x1="1350" y1="540" x2="1296" y2="594" opacity="0.76" />
                <line x1="1350" y1="540" x2="1404" y2="594" opacity="0.36" />
                <line x1="1404" y1="540" x2="1458" y2="594" opacity="0.64" />
                <line x1="54" y1="594" x2="0" y2="648" opacity="0.22" />
                <line x1="108" y1="594" x2="54" y2="648" opacity="0.45" />
                <line x1="108" y1="594" x2="162" y2="648" opacity="0.15" />
                <line x1="216" y1="594" x2="162" y2="648" opacity="0.31" />
                <line x1="216" y1="594" x2="270" y2="648" opacity="0.24" />
                <line x1="324" y1="594" x2="270" y2="648" opacity="0.47" />
                <line x1="324" y1="594" x2="378" y2="648" opacity="0.23" />
                <line x1="378" y1="594" x2="432" y2="648" opacity="0.30" />
                <line x1="486" y1="594" x2="432" y2="648" opacity="0.99" />
                <line x1="540" y1="594" x2="486" y2="648" opacity="0.24" />
                <line x1="594" y1="594" x2="540" y2="648" opacity="0.93" />
                <line x1="594" y1="594" x2="648" y2="648" opacity="0.63" />
                <line x1="702" y1="594" x2="648" y2="648" opacity="0.88" />
                <line x1="702" y1="594" x2="756" y2="648" opacity="0.61" />
                <line x1="810" y1="594" x2="756" y2="648" opacity="0.56" />
                <line x1="810" y1="594" x2="864" y2="648" opacity="0.20" />
                <line x1="864" y1="594" x2="918" y2="648" opacity="0.30" />
                <line x1="972" y1="594" x2="918" y2="648" opacity="0.68" />
                <line x1="972" y1="594" x2="1026" y2="648" opacity="0.61" />
                <line x1="1080" y1="594" x2="1026" y2="648" opacity="0.53" />
                <line x1="1080" y1="594" x2="1134" y2="648" opacity="0.32" />
                <line x1="1134" y1="594" x2="1188" y2="648" opacity="0.70" />
                <line x1="1242" y1="594" x2="1188" y2="648" opacity="0.32" />
                <line x1="1242" y1="594" x2="1296" y2="648" opacity="0.72" />
                <line x1="1350" y1="594" x2="1296" y2="648" opacity="0.09" />
                <line x1="1350" y1="594" x2="1404" y2="648" opacity="0.18" />
                <line x1="1458" y1="594" x2="1404" y2="648" opacity="0.84" />
                <line x1="0" y1="648" x2="54" y2="702" opacity="0.67" />
                <line x1="108" y1="648" x2="54" y2="702" opacity="0.87" />
                <line x1="108" y1="648" x2="162" y2="702" opacity="0.80" />
                <line x1="162" y1="648" x2="216" y2="702" opacity="0.37" />
                <line x1="216" y1="648" x2="270" y2="702" opacity="0.16" />
                <line x1="324" y1="648" x2="270" y2="702" opacity="0.28" />
                <line x1="324" y1="648" x2="378" y2="702" opacity="0.98" />
                <line x1="432" y1="648" x2="378" y2="702" opacity="0.72" />
                <line x1="486" y1="648" x2="432" y2="702" opacity="0.99" />
                <line x1="540" y1="648" x2="486" y2="702" opacity="0.15" />
                <line x1="594" y1="648" x2="540" y2="702" opacity="0.20" />
                <line x1="594" y1="648" x2="648" y2="702" opacity="0.65" />
                <line x1="648" y1="648" x2="702" y2="702" opacity="0.81" />
                <line x1="756" y1="648" x2="702" y2="702" opacity="0.82" />
                <line x1="756" y1="648" x2="810" y2="702" opacity="0.91" />
                <line x1="864" y1="648" x2="810" y2="702" opacity="0.28" />
                <line x1="864" y1="648" x2="918" y2="702" opacity="0.99" />
                <line x1="918" y1="648" x2="972" y2="702" opacity="0.40" />
                <line x1="1026" y1="648" x2="972" y2="702" opacity="0.36" />
                <line x1="1080" y1="648" x2="1026" y2="702" opacity="0.52" />
                <line x1="1134" y1="648" x2="1080" y2="702" opacity="0.75" />
                <line x1="1134" y1="648" x2="1188" y2="702" opacity="0.66" />
                <line x1="1188" y1="648" x2="1242" y2="702" opacity="0.60" />
                <line x1="1296" y1="648" x2="1242" y2="702" opacity="0.88" />
                <line x1="1350" y1="648" x2="1296" y2="702" opacity="0.98" />
                <line x1="1350" y1="648" x2="1404" y2="702" opacity="0.60" />
                <line x1="1458" y1="648" x2="1404" y2="702" opacity="0.27" />
                <line x1="54" y1="702" x2="0" y2="756" opacity="0.43" />
                <line x1="54" y1="702" x2="108" y2="756" opacity="0.37" />
                <line x1="108" y1="702" x2="162" y2="756" opacity="0.81" />
                <line x1="162" y1="702" x2="216" y2="756" opacity="0.85" />
                <line x1="216" y1="702" x2="270" y2="756" opacity="0.38" />
                <line x1="270" y1="702" x2="324" y2="756" opacity="0.31" />
                <line x1="324" y1="702" x2="378" y2="756" opacity="0.44" />
                <line x1="432" y1="702" x2="378" y2="756" opacity="0.13" />
                <line x1="432" y1="702" x2="486" y2="756" opacity="0.30" />
                <line x1="540" y1="702" x2="486" y2="756" opacity="0.91" />
                <line x1="540" y1="702" x2="594" y2="756" opacity="0.87" />
                <line x1="648" y1="702" x2="594" y2="756" opacity="0.14" />
                <line x1="702" y1="702" x2="648" y2="756" opacity="0.41" />
                <line x1="702" y1="702" x2="756" y2="756" opacity="0.86" />
                <line x1="756" y1="702" x2="810" y2="756" opacity="0.29" />
                <line x1="810" y1="702" x2="864" y2="756" opacity="0.90" />
                <line x1="918" y1="702" x2="864" y2="756" opacity="0.13" />
                <line x1="972" y1="702" x2="918" y2="756" opacity="0.34" />
                <line x1="972" y1="702" x2="1026" y2="756" opacity="0.12" />
                <line x1="1080" y1="702" x2="1026" y2="756" opacity="0.83" />
                <line x1="1134" y1="702" x2="1080" y2="756" opacity="0.99" />
                <line x1="1134" y1="702" x2="1188" y2="756" opacity="0.93" />
                <line x1="1242" y1="702" x2="1188" y2="756" opacity="0.77" />
                <line x1="1296" y1="702" x2="1242" y2="756" opacity="0.15" />
                <line x1="1296" y1="702" x2="1350" y2="756" opacity="0.45" />
                <line x1="1404" y1="702" x2="1350" y2="756" opacity="0.75" />
                <line x1="1404" y1="702" x2="1458" y2="756" opacity="0.71" />
                <line x1="0" y1="756" x2="54" y2="810" opacity="0.80" />
                <line x1="54" y1="756" x2="108" y2="810" opacity="0.12" />
                <line x1="108" y1="756" x2="162" y2="810" opacity="0.84" />
                <line x1="162" y1="756" x2="216" y2="810" opacity="0.51" />
                <line x1="270" y1="756" x2="216" y2="810" opacity="0.28" />
                <line x1="270" y1="756" x2="324" y2="810" opacity="0.15" />
                <line x1="324" y1="756" x2="378" y2="810" opacity="0.92" />
                <line x1="432" y1="756" x2="378" y2="810" opacity="0.92" />
                <line x1="432" y1="756" x2="486" y2="810" opacity="0.07" />
                <line x1="486" y1="756" x2="540" y2="810" opacity="0.39" />
                <line x1="594" y1="756" x2="540" y2="810" opacity="0.99" />
                <line x1="594" y1="756" x2="648" y2="810" opacity="0.76" />
                <line x1="648" y1="756" x2="702" y2="810" opacity="0.39" />
                <line x1="702" y1="756" x2="756" y2="810" opacity="0.87" />
                <line x1="810" y1="756" x2="756" y2="810" opacity="0.95" />
                <line x1="864" y1="756" x2="810" y2="810" opacity="0.57" />
                <line x1="918" y1="756" x2="864" y2="810" opacity="0.81" />
                <line x1="918" y1="756" x2="972" y2="810" opacity="0.21" />
                <line x1="1026" y1="756" x2="972" y2="810" opacity="0.95" />
                <line x1="1080" y1="756" x2="1026" y2="810" opacity="0.37" />
                <line x1="1080" y1="756" x2="1134" y2="810" opacity="0.83" />
                <line x1="1188" y1="756" x2="1134" y2="810" opacity="0.32" />
                <line x1="1188" y1="756" x2="1242" y2="810" opacity="0.52" />
                <line x1="1296" y1="756" x2="1242" y2="810" opacity="0.73" />
                <line x1="1350" y1="756" x2="1296" y2="810" opacity="0.80" />
                <line x1="1350" y1="756" x2="1404" y2="810" opacity="0.26" />
                <line x1="1404" y1="756" x2="1458" y2="810" opacity="0.52" />
            </g>
        </svg>
    </div>
</div>