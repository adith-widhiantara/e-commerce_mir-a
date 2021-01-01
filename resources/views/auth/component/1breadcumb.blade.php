<section class="breadcrumb-section set-bg mb-5" data-setbg="{{ asset('img/breadcumbs.png') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Mir'a Collection</h2>
          <div class="breadcrumb__option">
            @if( url()->current() == route('login') )
              <span>Masuk</span>
            @else( url()->current() == route('register') )
              <span>Daftar</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
