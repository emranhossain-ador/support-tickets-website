<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('assets/frontend/images/support-logo.jpg') ?>" type="image/x-icon">
  <title>Support | <?= isset($page_title) ? $page_title : '' ?></title>
  
  <!-- Font-Awesome cdn -->
  <link rel="stylesheet" href="<?= base_url('assets/font/fontawesome/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/font/fontawesome/fontawesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont.min.css') ?>">
  <!-- Bootstrap cdn -->
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css'); ?>">
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/animate/animate.css') ?>">
  <!-- tempusdominus -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/inputmask/tempusdominus.min.css') ?>">
  <!-- Datatable -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatable/datatables.min.css') ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css') ?>">
  <!-- daterangepicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- bootstrap-colorpicker -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.min.css') ?>">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/codemirror/codemirror.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/codemirror/theme/monokai.css') ?>">
  <!-- Nice selector -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/niceselect/nice-select.css') ?>">
  <!-- notify -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/notify/notify.css') ?>">
  <!-- sweetalert -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/sweetalert/sweetalert.min.css') ?>">
  <!-- emoji -->
  <link rel="stylesheet" href="<?= base_url('assets/backend/emoji/emojionearea.min.css') ?>">
  <!-- style.css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/default.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/backend/css/admin.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/backend/css/main.style.css'); ?>">

  

  <!-- Main js cdn -->
  <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/axios.main.js') ?>"></script>
  <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>

  <?php
  $csrf_name = $this->security->get_csrf_token_name();
  $csrf_hash = $this->security->get_csrf_hash();
  ?>

  <script>
    let base_url = `<?= base_url() ?>`;
    let csrf_token = `<?= $csrf_name ?>`;
    let __csrf = `<?= $csrf_hash ?>`;
  </script>

</head>

<body class="sidebar-mini layout-fixed layout-navbar-fixed theme-dark">
  <div class="wrapper">