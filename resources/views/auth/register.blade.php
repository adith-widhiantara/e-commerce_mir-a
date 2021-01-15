@extends('base.base')

@section('title', 'Daftar')

@section('base')
<!-- breadcumb -->
  @include('auth.component.1breadcumb')
<!-- end breadcumb -->

<section class="container mb-5 loginPage">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <form class="" action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="usernameInput">Nama</label>
          <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" name="name">
        </div>
        <div class="form-group">
          <label for="usernameInput">Alamat Email</label>
          <input type="email" class="form-control" id="usernameInput" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="usernameInput">Nomor Telepon</label>
          <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" name="nomorTelepon">
        </div>
        <div class="form-group">
          <label for="passwordInput">Kata Sandi</label>
          <input type="password" class="form-control" id="passwordInput" name="password">
        </div>

        <button type="submit" class="btn float-right">Daftar</button>
      </form>
    </div>
  </div>
</section>
@endsection
