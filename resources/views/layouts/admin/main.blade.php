<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/fontAwesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/css/admin/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/css/admin/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/css/admin/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/admin/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/css/admin/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/css/admin/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/css/admin/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('layouts.admin.header')
  <!-- /.navbar -->

  {{-- sidebar --}}
  @include('layouts.admin.sidebar')

{{-- start content --}}
@yield('content')
{{-- end content --}}

 @include('layouts.admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/js/admin/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/js/admin/jquery/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/js/admin/bootstrap.bundle.min.js"></script>

<script src="/js/admin/table/jquery.dataTables.min.js"></script>
<script src="/js/admin/table/dataTables.bootstrap4.min.js"></script>
<script src="/js/admin/table/dataTables.responsive.min.js"></script>
<script src="/js/admin/table/responsive.bootstrap4.min.js"></script>
<script src="/js/admin/table/dataTables.buttons.min.js"></script>
<script src="/js/admin/table/buttons.bootstrap4.min.js"></script>
<script src="/js/admin/table/jszip.min.js"></script>
<script src="/js/admin/table/pdfmake.min.js"></script>
<script src="/js/admin/table/vfs_fonts.js"></script>
<script src="/js/admin/table/buttons.html5.min.js"></script>
<script src="/js/admin/table/buttons.print.min.js"></script>
<script src="/js/admin/table/buttons.colVis.min.js"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  
<!-- ChartJS -->
<script src="/js/admin/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/js/admin/sparkline.js"></script>
<!-- JQVMap -->
{{-- <script src="/js/admin/jquery.vmap.min.js"></script> --}}
{{-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
<script src="/js/admin/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/js/admin/moment.min.js"></script>
<script src="/js/admin/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/js/admin/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/js/admin/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/js/admin/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/admin/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="/js/admin/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/admin/dashboard.js"></script>
</body>
</html>
