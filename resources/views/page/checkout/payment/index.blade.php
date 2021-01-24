@extends('base.base')

@section('title', 'Pembayaran')

@section('base')
<!-- Breadcrumbs -->
  {{ Breadcrumbs::render('checkout.dropboxPayment', $cart) }}
<!-- end Breadcrumbs -->

<section class="checkout spad">
  <div class="container">
    <div class="checkout__form">
      <h4>Unggah Bukti Pembayaran</h4>
      <div class="row">
        <div class="col-lg-6">
          @include('page.checkout.payment.1upload')
        </div>
        <div class="col-lg-6">
          @include('page.checkout.payment.2order')
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
