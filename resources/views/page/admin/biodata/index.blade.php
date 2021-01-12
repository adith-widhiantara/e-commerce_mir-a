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
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">{{ $title }}</h3>
        </div>
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nomor Telepon">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
