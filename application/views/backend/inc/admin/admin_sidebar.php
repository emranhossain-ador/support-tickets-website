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
                <?php if (__admin_info()->images): ?>
                    <img src="<?= base_url(__admin_info()->images) ?>" class="img-circle" alt="User Image">
                <?php else: ?>
                    <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="img-circle" alt="User Image">
                <?php endif; ?>
            </div>
            <div class="info pull-right">
                <a href="#" class="d-block"><?= __admin_info()->name ?></a>
                <span id="time">12:47:10 pm</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item ">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Dashboard' ? 'active' : '' ?>">
                        <i class="icofont-dashboard nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('admin/dashboard/all_tickets') ?>" class="nav-link <?= isset($page) && $page == 'ticket' ? 'active' : '' ?>">
                        <i class="fa-solid fa-ticket nav-icon"></i>
                        <p>
                            All Tickets
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('admin/chat') ?>" class="nav-link <?= isset($page) && $page == 'chat' ? 'active' : '' ?>">
                        <i class="icofont-ui-text-chat nav-icon"></i>
                        <p>
                            Chat 
                        </p>
                    </a>
                </li>

                <li class="nav-header">USERS</li>

                <li class="nav-item treeviewMenu <?= isset($page) && $page == 'user' ? 'active menu-open' : '' ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="treeview-item <?= isset($page_title) && $page_title == 'Customer List' || $page_title == 'Edit Customer'  ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/profile/customer_list') ?>">
                                <i class="fa-solid fa-angles-right sm-icon"></i>
                                <p>Customers</p>
                            </a>
                        </li>
                        <li class="treeview-item <?= isset($page_title) && $page_title == 'Agent List' || $page_title == 'Edit Agent' ? 'active' : '' ?>">
                            <a href="<?= base_url('admin/profile/agent_list') ?>">
                                <i class="fa-solid fa-angles-right sm-icon"></i>
                                <p>Agents</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- User Management -->

                <li class="nav-item ">
                    <a href="<?= base_url('admin/profile/category') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Category' || $page_title == 'Edit Category'  ? 'active' : '' ?>">
                        <i class="icofont-settings nav-icon"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('admin/profile/faq') ?>" class="nav-link <?= isset($page) && $page == 'faq' ? 'active' : '' ?>">
                        <i class="fa-regular fa-circle-question nav-icon fz-19"></i>
                        <p>
                            FAQ's
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="<?= base_url('admin/profile/knowledge') ?>" class="nav-link <?= isset($page) && $page == 'knowledge' ? 'active' : '' ?>">
                        <i class="icofont-learn nav-icon"></i>
                        <p>
                            Knowledge
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>