@extends('base.base')

@section('title','Keranjang')

@section('base')
<!-- breadcrumb -->
  @include('page.cart.1breadcumb')
<!-- end breadcrumb -->

<section class="shoping-cart spad">
  <div class="container">
    <!-- table -->
      @include('page.cart.2table')
    <!-- end table -->

    <!-- total -->
      @include('page.cart.3total')
    <!-- end total -->
  </div>
</section>
@endsection
