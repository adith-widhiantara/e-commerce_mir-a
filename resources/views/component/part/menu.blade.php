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
    <a href="#">Profil</a>
    <ul class="header__menu__dropdown">
      <li><a href="{{ route('user.show', 1) }}">Lihat Profil</a></li>
      <li><a href="{{ route('user.status') }}">Pesanan Saya</a></li>
      <li><a href="{{ route('admin.index') }}">Halaman Admin</a></li>
    </ul>
  </li>
</ul>
