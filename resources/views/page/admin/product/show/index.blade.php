@extends('base.admin')

@section('title', $product->name)

@section('style')
  <link rel="stylesheet" href="{{ asset('lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endsection

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">{{ $product->name }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Daftar Produk</a></li>
          <li class="breadcrumb-item active">{{ $product->name }}</li>
        </ol>
      </div>
    </div>
  </div>
</div>
@endsection

@section('base')
<div class="row">
  <div class="col-12 col-md-6 mb-5">
    <!-- img -->
      @include('page.admin.product.show.1img')
    <!-- end img -->
  </div>
  <div class="col-12 col-md-6 mb-5">
    <!-- form -->
      @include('page.admin.product.show.2form')
    <!-- end form -->
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

      $('.product-image-thumb').on('click', function () {
        var image_element = $(this).find('img')
        $('.product-image').prop('src', $(image_element).attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      });

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
