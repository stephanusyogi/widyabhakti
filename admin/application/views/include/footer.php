
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">WidyaBhakti.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="padding:0px 15px;">
    <!-- Control sidebar content goes here -->
    <!-- <br> -->
    <div class="text-center" style="margin-top: 10px;">
      <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>public/dist/img/logo.png" alt="User profile picture">
    </div>
    <h3 class="profile-username text-center">WidyaBhakti Pastoral Center</h3>
    <p class="text-muted text-center">Administrator</p>
    <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-success btn-block" style="color:white;">Logout</a>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>/public/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Toast -->
<script src="<?php echo base_url('public/plugins'); ?>/toastr/toastr.min.js"></script>  
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>/public/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>/public/plugins/select2/js/select2.full.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/public/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Script -->
<script src="<?= base_url(); ?>/public/dist/js/myscript.js"></script>
<!-- CKEDITOR -->
<script type="text/javascript" src="<?php echo base_url(); ?>/public/plugins/ckeditor/ckeditor.js"></script>
<!-- TimePicker -->
<script src="<?php echo base_url('public/plugins'); ?>/datetimepicker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
  var windowURL = window.location.href;
  pageURL = '<?php echo base_url() . $menuLink ?>';
  var x = $('a[href="' + pageURL + '"]');
  x.addClass('active');
  x.parent().parent().parent().addClass('menu-open');
  x.parent().parent().parent().children().first().addClass('active');
  var y = $('a[href="' + windowURL + '"]');
  y.addClass('active');
  y.parent().parent().parent().addClass('menu-open');
  y.parent().parent().parent().children().first().addClass('active');
</script>
<script>
  $(function() {
    $(".fancyTable").DataTable();

    $('#transactionTable').DataTable({
      "order": [
        [3, "desc"]
      ]
    });

    $('.select2').select2({
      theme: 'bootstrap4'
    });
  });
</script>
<script type="text/javascript">
 $(document).ready(function() {
     $('#editRuanganPeminjaman', '#editUserPeminjaman').select2();
 });
</script>
</body>
</html>
