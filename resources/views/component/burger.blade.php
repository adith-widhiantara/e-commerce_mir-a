<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
    <a href="{{ route('landing.index') }}">
      <img src="{{ asset('img/logo/logo2.png') }}" alt="">
    </a>
  </div>
  <div class="humberger__menu__cart">
    <ul>
      <li>
        <a href="#">
          <i class="fa fa-shopping-bag"></i> <span>3</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="humberger__menu__widget">
    <div class="header__top__right__auth">
      @if (url()->current() == route('landing.index'))
        <a href="{{ route('login') }}">
          <i class="fa fa-user"></i> Masuk
        </a>
      @elseif (url()->current() == route('login'))
        <a href="{{ route('register') }}">
          <i class="fa fa-user"></i> Daftar
        </a>
      @elseif (url()->current() == route('register'))
        <a href="{{ route('login') }}">
          <i class="fa fa-user"></i> Masuk
        </a>
      @endif
    </div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
    <ul>
      <li class="active">
        <a href="{{ route('landing.index') }}">Home</a>
      </li>
      <li>
        <a href="./shop-grid.html">Shop</a>
      </li>
      <li>
        <a href="#">Pages</a>
        <ul class="header__menu__dropdown">
          <li>
            <a href="./shop-details.html">Shop Details</a>
          </li>
          <li>
            <a href="./shoping-cart.html">Shoping Cart</a>
          </li>
          <li>
            <a href="./checkout.html">Check Out</a>
          </li>
          <li>
            <a href="./blog-details.html">Blog Details</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="./blog.html">Blog</a>
      </li>
      <li>
        <a href="./contact.html">Contact</a>
      </li>
    </ul>
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
    <a href="#">
      <i class="fa fa-facebook"></i>
    </a>
    <a href="#">
      <i class="fa fa-twitter"></i>
    </a>
    <a href="#">
      <i class="fa fa-linkedin"></i>
    </a>
    <a href="#">
      <i class="fa fa-pinterest-p"></i>
    </a>
  </div>
  <div class="humberger__menu__contact">
    <ul>
      <li>
        <a target="_blank" href="http://wa.me/6285707095995">
          <i class="fab fa-whatsapp"></i>
          Hubungi via Whatsapp
        </a>
      </li>
    </ul>
  </div>
</div>
