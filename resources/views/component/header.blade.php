<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
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
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
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
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="header__logo">
          <a href="{{ route('landing.index') }}">
            <img src="{{ asset('img/logo/logo2.png') }}" alt="">
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <nav class="header__menu">
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
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          <ul>
            <li>
              <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="humberger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>
