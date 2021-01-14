@extends('base.base')

@section('title','Keranjang')

@section('base')
<!-- breadcrumb -->
  {{ Breadcrumbs::render('cart.index') }}
<!-- end breadcrumb -->

<section class="shoping-cart spad">
  <div class="container">
    @if ($cart->count() == 0)
      <!-- null -->
      @include('page.cart.1null')
      <!-- end null -->
    @else
      <!-- table -->
      @include('page.cart.1table')
      <!-- end table -->

      <!-- total -->
      @include('page.cart.2total')
      <!-- end total -->
    @endif

  </div>
</section>
@endsection

@section('JavaScript')
<script>
  $(document).ready(function(){
    $('.pro-qty .inc').click(function(){

    });

    $('.pro-qty .dec').click(function(){

    });
  });
</script>
@endsection
