<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('assets/backend/images/profile.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminME </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Emran</a>
        </div>
    </div>

      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
                <li class="nav-item ">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Dashboard' ? 'active':'' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MENU</li>
                <!-- Products -->
                <li class="nav-item <?= isset($page_name) && $page_name == 'menu' ? 'menu-open':'' ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-clipboard-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/products') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Products' || $page_title == 'Products Create' || $page_title == 'Edit Product' ? 'active':'' ?>">
                            <i class="fa-solid fa-angles-right sm-icon"></i>
                            <p>All Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/category') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Category' || $page_title == 'Category Create' || $page_title == 'Category Edit' ? 'active':'' ?>">
                                <i class="fa-solid fa-angles-right sm-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/brands') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Brands' || $page_title == 'Brand Create' || $page_title == 'Edit Brand' ? 'active':'' ?>">
                            <i class="fa-solid fa-angles-right sm-icon"></i>
                            <p>Brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/packages') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Packages' || $page_title == 'Package Create' || $page_title == 'Edit Package' ? 'active':'' ?>">
                            <i class="fa-solid fa-angles-right sm-icon"></i>
                            <p>Packages</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Products -->

                <li class="nav-item ">
                    <a href="<?= base_url('admin/restaurant/order_list') ?>" class="nav-link <?= isset($page_name) && $page_name == 'order'? 'active':'' ?>">
                        <i class="nav-icon fa-solid fa-bag-shopping"></i>
                        <p>
                            Online Orders
                        </p>
                    </a>
                </li>

                <li class="nav-header">SETTINGS</li>

                <li class="nav-item ">
                    <a href="<?= base_url('admin/restaurant/shop_config') ?>" class="nav-link <?= isset($page_name) && $page_name == 'configuration'? 'active':'' ?>">
                        <i class="nav-icon fa-regular fa-user-circle"></i>
                        <p>
                            Shop Configuration
                        </p>
                    </a>
                </li>
                
                <!-- Settings -->
                <li class="nav-item">
                    <a href="<?= base_url('admin/settings/shipping_config') ?>" class="nav-link <?= isset($page_name) && $page_name == 'setting' ? 'active':'' ?>">
                        <i class="nav-icon fa-solid fa-gears"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <!-- Settings -->
                
                <li class="nav-item ">
                    <a href="<?= base_url('admin/customers') ?>" class="nav-link <?= isset($page_title) && $page_title == 'Customer List' || $page_title == 'View Customer' ? 'active':'' ?>">
                        <i class="nav-icon fa-solid fa-user-group"></i>
                        <p>
                            Customer List
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
