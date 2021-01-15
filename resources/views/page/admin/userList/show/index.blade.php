@extends('base.admin')

@section('title', $user->name)

@section('style')
<link rel="stylesheet" href="{{ asset('lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
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
          <li class="breadcrumb-item"><a href="{{ route('admin.userList') }}">Daftar Pengguna</a></li>
          <li class="breadcrumb-item active">{{ $user->name }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('base')
<div class="row">
  <div class="col-lg-6 col-12">
    @include('page.admin.userList.show.1card')
  </div>
  <div class="col-lg-6 col-12">
    @include('page.admin.userList.show.2form')
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection

@section('script2')
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    @if (session('success'))
    Toast.fire({
      icon: 'success',
      title: 'Data Tersimpan!'
    })
    @endif
  });
</script>
@endsection
