<div class="top-navbar-area">
    <div class="navbar-container navbar-expand-lg">
        <div class="container">
            <div class="customNavbar">
                <a href="<?= base_url('/') ?>" class="navbar_logo">
                    <img src="<?= base_url('assets/frontend/images/logo.png') ?>" alt="logo">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#top_navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="icofont-navigation-menu"></i></span>
                </button>

                <div class="navbar-menu collapse" id="top_navbar">
                    <ul class="navbar-menu-item">
                        <li>
                            <a href="<?= base_url('/') ?>" class="nav-link <?= isset($page) && $page == 'home' ? 'active' : '' ?>"><span class="navmenu-icon"><i class="icofont-home"></i></span> Home</a>
                        </li>
                        <!-- Submit Ticket show without Admin && Not Login -->
                        <?php if (auth('user_role') != 'admin' && auth('is_login') == TRUE): ?>
                        <li>
                            <a href="<?= base_url('submit-ticket') ?>" class="nav-link <?= isset($page) && $page == 'ticket' ? 'active' : '' ?>"><span class="navmenu-icon"><i class="icofont-plus-square"></i></span> Submit Ticket</a>
                        </li>
                        <?php endif; ?>

                        <li>
                            <a href="<?= base_url('faq') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Faq' ? 'active' : '' ?>"><span class="navmenu-icon"><i class="icofont-question-square"></i></span> FAQ's</a>
                        </li>
                        <li>
                            <a href="<?= base_url('knowledge') ?>" class="nav-link <?= isset($page_title) && $page_title == 'knowledge' ? 'active' : '' ?>"><span class="navmenu-icon"><i class="icofont-newspaper"></i></span> Knowledge</a>
                        </li>
                    </ul>
                    <div class="nav-menu-action">
                        <?php if (auth('is_login') == TRUE): ?>
                            <?php if (auth('user_role') == 'admin'): ?>
                                <div class="dropdown userDrop-menu">
                                    <a class="menu-link" data-toggle="dropdown" href="javascript:;">
                                        <?php if (__admin_info()->images): ?>
                                            <img src="<?= base_url(__admin_info()->images) ?>" class="user-image" alt="img">
                                        <?php else: ?>
                                            <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="user-image" alt="img">
                                        <?php endif; ?>
                                        <span><?= __get_firstname(__admin_info()->name) ?></span>
                                        &nbsp;<span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu customDrop-menu">
                                        <li>
                                            <?php if (__admin_info()->user_role == 'admin'): ?>
                                                <a href="<?= base_url('admin/dashboard') ?>" class="drop_link"><span class="icon"><i class="icofont-dashboard fz-18"></i></span> Dashboard</a>
                                            <?php else: ?>
                                                <a href="<?= base_url('customer/dashboard') ?>" class="drop_link"><span class="icon"><i class="icofont-dashboard fz-18"></i></span> Dashboard</a>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('login/logout') ?>" class="drop_link"><span class="icon"><i class="icofont-logout"></i></span> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <div class="dropdown userDrop-menu">
                                    <a class="menu-link" data-toggle="dropdown" href="javascript:;">
                                        <?php if (__user_info()->images): ?>
                                            <img src="<?= base_url(__user_info()->images) ?>" class="user-image" alt="img">
                                        <?php else: ?>
                                            <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="user-image" alt="img">
                                        <?php endif; ?>
                                        <span><?= __get_firstname(__user_info()->name) ?></span>
                                        &nbsp;<span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <ul class="dropdown-menu customDrop-menu">
                                        <li>
                                            <?php if (__user_info()->user_role == 'admin'): ?>
                                                <a href="<?= base_url('admin/dashboard') ?>" class="drop_link"><span class="icon"><i class="icofont-dashboard fz-18"></i></span> Dashboard</a>
                                            <?php else: ?>
                                                <a href="<?= base_url('customer/dashboard') ?>" class="drop_link"><span class="icon"><i class="icofont-dashboard fz-18"></i></span> Dashboard</a>
                                            <?php endif; ?>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('login/logout') ?>" class="drop_link"><span class="icon"><i class="icofont-logout"></i></span> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <a href="<?= base_url('login') ?>" class="btn signinBtn"><i class="fa-solid fa-right-to-bracket"></i>&nbsp; Sign In</a>
                            <a href="<?= base_url('register') ?>" class="btn signupBtn"><i class="fa fa-user-plus"></i> &nbsp; Sign Up</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
