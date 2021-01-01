@if (url()->current() == route('login'))
  <a href="{{ route('register') }}">
    <i class="fa fa-user"></i> Daftar
  </a>
@else
  <a href="{{ route('login') }}">
    <i class="fa fa-user"></i> Masuk
  </a>
@endif
