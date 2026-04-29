  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  </div>

  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
  <!-- Admin js -->
  <script src="<?= base_url('assets/backend/js/admin.js') ?>"></script>
  <!-- Datatable -->
  <script src="<?= base_url('assets/plugins/datatable/datatables.min.js') ?>"></script>
  <!-- select2 -->
  <script src="<?= base_url('assets/plugins/select2/select2.full.min.js') ?>"></script>
  <!-- InputMask -->
  <script src="<?= base_url('assets/plugins/inputmask/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/inputmask/jquery.inputmask.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/inputmask/tempusdominus.min.js') ?>"></script>
  <!-- daterangepicker js -->
  <script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
  <!-- bootstrap-colorpicker js -->
  <script src="<?= base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
  <!-- summernote js -->
  <script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
  <!-- CodeMirror -->
  <script src="<?= base_url('assets/plugins/codemirror/codemirror.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/codemirror/mode/css/css.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/codemirror/mode/xml/xml.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js') ?>"></script>
  <!-- nice select -->
  <script src="<?= base_url('assets/plugins/niceselect/jquery.nice-select.min.js') ?>"></script>
  <!-- notify -->
  <script src="<?= base_url('assets/plugins/notify/notify.js') ?>"></script>
  <!-- sweetalert -->
  <script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js') ?>"></script>

  <script src="<?= base_url('assets/backend/emoji/emojionearea.min.js') ?>"></script>
  <!-- utilities js -->
  <script src="<?= base_url('assets/backend/js/utilities.js') ?>"></script>
  <!-- main js -->
  <script src="<?= base_url('assets/backend/js/main.js') ?>"></script>

  <div class="notify-container">
    <?php if ($this->session->flashdata('success')): ?>
      <div class="custom_notify animated fadeInRight alert alert-success alert-dismissible fade show" role="alert">
        <span class="icon"><i class="fa-regular fa-circle-check"></i></span>
        <div class="msgBody">
          <h4>Successful!!</h4>
          <div><?= $this->session->flashdata('success') ?></div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <script>
        setTimeout(() => {
          $('.custom_notify').fadeOut();
        }, 4000);
      </script>
    <?php endif; ?>
  </div>




  </body>

  </html>