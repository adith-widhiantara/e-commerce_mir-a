@extends('base.base')

@section('title', 'Selamat Datang')

@section('base')

<!-- categories -->
  @include('page.landing.1categories')
<!-- End categories -->

<!-- featured -->
  @include('page.landing.2featured')
<!-- End featured -->

<!-- banner -->
{{--
  @include('page.landing.3banner')
  --}}
<!-- End banner -->

<!-- lastProduct -->
  @include('page.landing.4lastProduct')
<!-- End lastProduct -->

@endsection
