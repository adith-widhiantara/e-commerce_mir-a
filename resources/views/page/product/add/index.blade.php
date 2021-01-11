@extends('base.admin')

<?php
$title = "Tambah Produk"
?>

@section('title', $title)

@section('style')

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
      <form>
        <div class="card-body">
          <label for="ProsesTambahProduk">Proses Tambah Produk</label>
          <div class="form-group">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Stok</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Stok">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Harga">
          </div>

          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" onchange="previewImage();">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
            <img id="image-preview" alt="image preview" class="img-fluid" style="display:none"/>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
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
@endsection

@section('script2')
<script>
  $(function () {
    bsCustomFileInput.init();
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
