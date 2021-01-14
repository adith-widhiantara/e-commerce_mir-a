@guest
  @if (url()->current() == route('login'))
    <a href="{{ route('register') }}">
      <i class="fa fa-user"></i> Daftar
    </a>
  @else
    <a href="{{ route('login') }}">
      <i class="fa fa-user"></i> Masuk
    </a>
  @endif
@endguest

@auth
  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa fa-user"></i> Keluar
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
  </form>
@endauth
