@extends('base.admin')

<?php
$title = "Tambah Produk"
?>

@section('title', $title)

@section('style')
  <link rel="stylesheet" href="{{ asset('lte/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
      </div>
      <form class="" action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="ProsesTambahProduk">Proses Tambah Produk</label>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                50%
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Barang</label>
            <input type="text" class="form-control" placeholder="Nama Barang" name="name">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <input type="text" class="form-control" placeholder="Deskripsi" name="desc">
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select class="select2" multiple="multiple" data-placeholder="Pilih Kategori" style="width: 100%;" name="categories[]">
              @foreach( $allCategories as $cat )
              <option value="{{ $cat -> id }}">{{ $cat->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Stok</label>
            <input type="number" class="form-control" placeholder="Stok" name="stock">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" class="form-control" placeholder="Harga" name="price">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Berat (gram)</label>
            <input type="number" class="form-control" placeholder="Berat" name="weight">
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" value="1" checked name="status">
            <label class="form-check-label" for="exampleCheck1">Tampilkan barang</label>
          </div>

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Selanjutnya</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script src="{{ asset('lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

  <script src="{{ asset('lte/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection

@section('script2')
<script>
  $(function () {
    bsCustomFileInput.init();

    $('.select2').select2();
  });

  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("exampleInputFile").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
@endsection
