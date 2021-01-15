@extends('base.base')

@section('title', $user->name)

@section('base')
<!-- Breadcrumbs -->
  {{ Breadcrumbs::render('user.index', $user) }}
<!-- end Breadcrumbs -->

@endsection
