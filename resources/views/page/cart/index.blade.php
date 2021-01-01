@extends('base.base')

@section('title','Keranjang')

@section('base')
<!-- breadcrumb -->
  {{ Breadcrumbs::render('cart.index') }}
<!-- end breadcrumb -->

<section class="shoping-cart spad">
  <div class="container">
    <!-- table -->
      @include('page.cart.1table')
    <!-- end table -->

    <!-- total -->
      @include('page.cart.2total')
    <!-- end total -->
  </div>
</section>
@endsection
