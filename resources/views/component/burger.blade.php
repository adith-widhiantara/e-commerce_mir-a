<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
  <div class="humberger__menu__logo">
    <a href="{{ route('landing.index') }}">
      <img src="{{ asset('img/logo/logo2.png') }}" alt="">
    </a>
  </div>
  <div class="humberger__menu__cart">
    @include('component.part.shoppingBag')
  </div>
  <div class="humberger__menu__widget">
    <div class="header__top__right__auth">
      @include('component.part.auth')
    </div>
  </div>
  <nav class="humberger__menu__nav mobile-menu">
    @include('component.part.menu')
  </nav>
  <div id="mobile-menu-wrap"></div>
  <div class="header__top__right__social">
    @include('component.part.sosialMedia')
  </div>
  <div class="humberger__menu__contact">
    @include('component.part.whatsapp')
  </div>
</div>
