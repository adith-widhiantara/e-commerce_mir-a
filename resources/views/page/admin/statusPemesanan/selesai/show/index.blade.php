@extends('base.admin')

@section('title', $user->name)

@section('style')
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ $user->name }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('status.selesai') }}">Daftar Selesai</a></li>
          <li class="breadcrumb-item active">{{ $user->name }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('base')
  <!-- button -->
    <a href="{{ route('admin.showUser', $user->id) }}" class="btn btn-primary mb-3">
      Lihat Profil
    </a>
  <!-- end button -->

  <!-- modal -->
    <button type="button" class="btn btn-default mb-3" data-toggle="modal" data-target="#modal-default">
      Lihat Bukti Transfer
    </button>

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Bukti Transfer</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="{{ asset('img/upload/buktiTransfer/'. $cart -> buktiTransfer) }}" alt="" class="img-fluid">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!-- end modal -->

  <!-- table -->
    @include('page.admin.statusPemesanan.selesai.show.1table')
  <!-- end table -->
@endsection

@section('script')
  <script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
@endsection

@section('script2')
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
