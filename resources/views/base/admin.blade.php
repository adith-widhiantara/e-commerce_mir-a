<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | Mir'a Collection</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

  @yield('style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    @include('component.admin.navbar')
  <!-- End Navbar -->

  <!-- Main Sidebar Container -->
    @include('component.admin.sidebar')
  <!-- End Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Header -->
      @yield('header')
    <!-- End Header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('base')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>
      Mir'a Collection
    </strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  @yield('script')

  <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>

  @yield('script2')

</body>
</html>
