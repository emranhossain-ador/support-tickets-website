<?php include VIEWPATH . 'backend/inc/header.php' ?>

<?php if (auth('user_role') == 'admin'): ?>
    <?php include VIEWPATH . 'backend/inc/admin/admin_topMenu.php' ?>
    <?php include VIEWPATH . 'backend/inc/admin/admin_sidebar.php' ?>
<?php else: ?>
    <?php include VIEWPATH . 'backend/inc/customers/customer_topMenu.php' ?>
    <?php include VIEWPATH . 'backend/inc/customers/customer_sidebar.php' ?>
<?php endif; ?>