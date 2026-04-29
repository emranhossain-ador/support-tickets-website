
<nav class="main-header navbar navbar-expand">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="" class="nav-link view_shop_btn" target="blank"><i class="fa-regular fa-eye mr-1"></i><span class="d-none d-sm-inline-block">View Shop</span> </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class=" dropdown user-menu">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="<?= base_url('assets/backend/images/profile.png') ?>" class="user-image" alt="img">
            </a>
            <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="<?= base_url('assets/images/profile.png') ?>" class="img-circle uploaded_img" alt="User Image">
                <p>
                    AL Emran
                    <small>emran@gmail.com</small>
                    <!-- <small id="time"></small> -->
                </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                  <a href="<?= base_url('admin/auth') ?>" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat">Logout</a>
              </div>
            </li>
          </ul>
        </li>
    </ul>
</nav>
<!-- nav end -->
