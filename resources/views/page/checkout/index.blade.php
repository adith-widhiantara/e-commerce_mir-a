@extends('base.base')

@section('title', 'Pembayaran')

@section('base')
<!-- breadcrumb -->
  {{ Breadcrumbs::render('checkout.index') }}
<!-- end breadcrumb -->

<section class="checkout spad">
  <div class="container">
    <div class="checkout__form">
      <h4>Informasi Pengiriman</h4>
      <form action="{{ route('checkout.sendUser', $user -> id) }}" method="post">
        @csrf
        @method('patch')
        <div class="row">
          <!-- checkout -->
            @include('page.checkout.1checkout')
          <!-- end checkout -->

          <!-- order -->
            @include('page.checkout.2order')
          <!-- end order -->
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
