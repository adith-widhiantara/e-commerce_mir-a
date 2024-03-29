@extends('base.base')

@section('title', 'Masuk')

@section('base')
<!-- breadcumb -->
  @include('auth.component.1breadcumb')
<!-- end breadcumb -->

<section class="container mb-5 loginPage">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <form class="" action="#" method="post">
        @csrf
        <div class="form-group">
          <label for="usernameInput">Alamat Email</label>
          <input type="email" class="form-control" id="usernameInput" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
          <label for="passwordInput">Kata Sandi</label>
          <input type="password" class="form-control" id="passwordInput" name="password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="rememberInput" name="remember">
          <label class="form-check-label" for="rememberInput">Ingat saya</label>
        </div>
        <button type="submit" class="btn float-right">Masuk</button>
      </form>
    </div>
  </div>
</section>
@endsection
