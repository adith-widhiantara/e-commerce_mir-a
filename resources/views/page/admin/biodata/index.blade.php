@extends('base.admin')

<?php
$title = "Biodata Website"
 ?>

@section('title', $title)

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
<!-- Admin -->
  @include('page.admin.biodata.1admin')
<!-- End Admin -->

<!-- website -->
  @include('page.admin.biodata.2website')
<!-- End website -->
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
