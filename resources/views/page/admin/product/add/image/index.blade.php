@extends('base.admin')

<?php
$title = "Tambah Produk"
?>

@section('title', $product -> name)

@section('style')
  <link rel="stylesheet" href="{{ asset('lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tambah Gambar</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
          <li class="breadcrumb-item active">{{ $product -> name }}</li>
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
          <h3 class="card-title">{{ $product -> name }}</h3>
        </div>
        <div class="card-body">
          <form class="" action="{{ route('product.image.store', $product -> slug) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="ProsesTambahProduk">Proses Tambah Produk</label>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                  60%
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" onchange="previewImage();" name="image">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
              <img id="image-preview" alt="image preview" class="img-fluid" style="display:none"/>
            </div>

            <div class="form-group">
              @if ( $product -> imageproduct -> count() > 4 )
                <a class="btn btn-primary swalDefaultError">
                  Unggah Gambar
                </a>
              @else
                <button type="submit" class="btn btn-primary">
                  Unggah Gambar
                </button>
              @endif

              <a href="{{ route('product.categories.show', $product -> slug) }}" class="btn btn-success float-right">
                Selanjutnya
              </a>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="row">
            @foreach( $product -> imageproduct as $image )
              <div class="col-6 col-lg-3">
                <img class="img-thumbnail" src="{{ asset('img/upload/product/'. $image -> name) }}" alt="">
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
  <script src="{{ asset('lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection

@section('script2')
<script>
  $(function () {
    bsCustomFileInput.init();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Gambar tidak bisa lebih dari 5 gambar!'
      })
    });
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
