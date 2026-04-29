<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <h3 class="logo_text">Sup<span>port</span></h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="image pull-left">
                <?php if (__user_info()->images): ?>
                    <img src="<?= base_url(__user_info()->images) ?>" class="img-circle" alt="User Image">
                <?php else: ?>
                    <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="img-circle" alt="User Image">
                <?php endif; ?>
            </div>
            <div class="info pull-right">
                <a href="#" class="d-block"><?= __user_info()->name ?></a>
                <span id="time">12:47:10 pm</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">GENERAL</li>

                <li class="nav-item ">
                    <a href="<?= base_url('customer/dashboard') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Dashboard' ? 'active' : '' ?>">
                        <i class="icofont-dashboard nav-icon fz-22"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('customer/dashboard/my_tickets') ?>" class="nav-link <?= isset($page) && $page == 'ticket' ? 'active' : '' ?>">
                        <i class="fa-solid fa-ticket nav-icon"></i>
                        <p>
                            My Tickets
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('customer/chat') ?>" class="nav-link <?= isset($page) && $page == 'chat' ? 'active' : '' ?>">
                        <i class="icofont-ui-text-chat nav-icon"></i>
                        <p>
                            Chat
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>