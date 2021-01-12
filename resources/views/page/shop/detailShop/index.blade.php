@extends('base.base')

@section('title')
  {{$product -> name}}
@endsection

@section('base')
<!-- breadcrumb -->
  {{ Breadcrumbs::render('shop.show', $product) }}
<!-- end breadcrumb -->

<!-- detail -->
  @include('page.shop.detailShop.1detail')
<!-- end detail -->
@endsection
