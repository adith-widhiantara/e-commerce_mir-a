@extends('base.base')

@section('title', 'Selamat Datang')

@section('base')

<!-- categories -->
  @include('page.landing.2categories')
<!-- End categories -->

<!-- featured -->
  @include('page.landing.3featured')
<!-- End featured -->

<!-- banner -->
{{--
  @include('page.landing.4banner')
  --}}
<!-- End banner -->

<!-- lastProduct -->
  @include('page.landing.5lastProduct')
<!-- End lastProduct -->

@endsection
