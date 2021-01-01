@extends('base.base')

@section('title', 'Pembayaran')

@section('base')
<!-- breadcrumb -->
  @include('page.checkout.1breadcumb')
<!-- end breadcrumb -->



<section class="checkout spad">
  <div class="container">
    <div class="checkout__form">
      <h4>Billing Details</h4>
      <form action="#">
        <div class="row">
          <!-- checkout -->
            @include('page.checkout.2checkout')
          <!-- end checkout -->

          <!-- order -->
            @include('page.checkout.3order')
          <!-- end order -->
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
