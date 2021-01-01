@extends('base.base')

@section('title', 'Daftar Produk')

@section('base')

<!-- breadcrumb -->
  {{ Breadcrumbs::render('shop.index') }}
<!-- end breadcrumb -->

<section class="product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-5">
        <div class="sidebar">
          <!-- categories -->
            @include('page.shop.listShop.1categories')
          <!-- end categories -->

          <!-- latest product -->
            @include('page.shop.listShop.2lastestProduct')
          <!-- end latest product -->
        </div>
      </div>
      <div class="col-lg-9 col-md-7">
        <!-- top product -->
        {{--
          @include('page.shop.listShop.3topProduct')
          --}}
        <!-- end top product -->

        <!-- list product -->
          @include('page.shop.listShop.4listProduct')
        <!-- end list product -->

        <!-- pagination -->
          @include('page.shop.listShop.5pagination')
        <!-- end pagination -->
      </div>
    </div>
  </div>
</section>

@endsection
