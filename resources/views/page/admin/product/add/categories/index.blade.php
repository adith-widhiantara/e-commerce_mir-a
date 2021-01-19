@extends('base.admin')

<?php
$title = "Tambah Produk"
?>

@section('title', $product -> name)

@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tambah Kategori</h1>
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
          <form class="" action="{{ route('product.categories.store', $product -> slug) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="ProsesTambahProduk">Proses Tambah Produk</label>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  90%
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Pilih Kategori</label>
              <select class="form-control" name="categories">
                <option>...</option>
                @foreach ( $wto as $catwto )
                  <option value="{{ $catwto -> id }}">
                    {{ $catwto -> name }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">
                Simpan
              </button>
              <a href="{{ route('product.show', $product->slug) }}" class="btn btn-success float-right">
                Selesai
              </a>
            </div>
          </form>
        </div>
        <div class="card-footer">
          <ul class="list-group">
            @foreach ( $product -> categories as $cat )
              <li class="list-group-item">{{ $cat -> name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
