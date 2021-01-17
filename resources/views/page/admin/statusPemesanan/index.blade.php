@extends('base.admin')

@if ( url()->current() == route('status.belumDikonfirmasi') )
  <?php
    $title = "Belum Dikonfirmasi";
  ?>
@elseif ( url()->current() == route('status.belumDibayar') )
  <?php
    $title = "Belum Dibayar";
  ?>
@elseif ( url()->current() == route('status.belumDikemas') )
  <?php
    $title = "Belum Dikemas";
  ?>
@elseif ( url()->current() == route('status.sedangDikirim') )
  <?php
    $title = "Sedang Dikirim";
  ?>
@elseif ( url()->current() == route('status.selesai') )
  <?php
    $title = "Selesai";
  ?>
@elseif ( url()->current() == route('status.dibatalkan') )
  <?php
    $title = "Dibatalkan";
  ?>
@endif

@section('title', $title)

@section('style')
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ $title }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('base')
  @if ( url()->current() == route('status.belumDikonfirmasi') )
    <!-- table -->
      @include('page.admin.statusPemesanan.belumDikonfirmasi.1table')
    <!-- end table -->
  @elseif ( url()->current() == route('status.belumDibayar') )
    <!-- table -->
      @include('page.admin.statusPemesanan.belumDibayar.1table')
    <!-- end table -->
  @elseif ( url()->current() == route('status.belumDikemas') )
    <!-- table -->
      @include('page.admin.statusPemesanan.belumDikemas.1table')
    <!-- end table -->
  @elseif ( url()->current() == route('status.sedangDikirim') )
    <!-- table -->
      @include('page.admin.statusPemesanan.sedangDikirim.1table')
    <!-- end table -->
  @elseif ( url()->current() == route('status.selesai') )
    <!-- table -->
      @include('page.admin.statusPemesanan.selesai.1table')
    <!-- end table -->
  @elseif ( url()->current() == route('status.dibatalkan') )
    <!-- table -->
      @include('page.admin.statusPemesanan.dibatalkan.1table')
    <!-- end table -->
  @endif
@endsection

@section('script')
  <!-- table -->
    <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- end table -->
@endsection

@section('script2')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
