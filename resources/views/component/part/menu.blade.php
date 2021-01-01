<ul>
  <li @if (url()->current() == route('landing.index')) class="active" @endif>
    <a href="{{ route('landing.index') }}">Halaman Utama</a>
  </li>
  <li @if (url()->current() == route('shop.index')||url()->current() == route('shop.show', 1)) class="active" @endif>
    <a href="{{ route('shop.index') }}">Produk</a>
  </li>
  <li @if (url()->current() == route('cart.index')) class="active" @endif>
    <a href="{{ route('cart.index') }}">Keranjang</a>
  </li>
  <li>
    @auth
      <a href="#">Profil</a>
    @endauth
  </li>
</ul>
