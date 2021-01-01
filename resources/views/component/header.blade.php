<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="header__top__left">
            @include('component.part.whatsapp')
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="header__top__right">
            <div class="header__top__right__social">
              @include('component.part.sosialMedia')
            </div>
            <div class="header__top__right__auth">
              @include('component.part.auth')
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
          @include('component.part.menu')
        </nav>
      </div>
      <div class="col-lg-3">
        <div class="header__cart">
          @include('component.part.shoppingBag')
        </div>
      </div>
    </div>
    <div class="humberger__open">
      <i class="fa fa-bars"></i>
    </div>
  </div>
</header>
