@extends('base.base')

@section('title')
  Judul Produk
@endsection

@section('base')
<!-- breadcrumb -->
  {{ Breadcrumbs::render('shop.show', 1) }}
<!-- end breadcrumb -->

<!-- detail -->
  @include('page.shop.detailShop.1detail')
<!-- end detail -->
@endsection
