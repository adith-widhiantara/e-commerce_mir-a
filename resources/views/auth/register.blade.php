@extends('base.base')

@section('title', 'Masuk')

@section('base')
<section class="container loginPage">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <form>
        <div class="form-group">
          <label for="usernameInput">Alamat Email / Username</label>
          <input type="email" class="form-control" id="usernameInput" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="passwordInput">Kata Sandi</label>
          <input type="password" class="form-control" id="passwordInput">
        </div>
        <div class="form-group">
          <label for="passwordInputKonfirmasi">Kata Sandi Konfirmasi</label>
          <input type="password" class="form-control" id="passwordInputKonfirmasi">
        </div>
        <button type="submit" class="btn float-right">Daftar</button>
      </form>
    </div>
  </div>
</section>
@endsection
