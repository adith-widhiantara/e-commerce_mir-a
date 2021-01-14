<section class="hero
  @if (url()->current() != route('landing.index'))
    hero-normal
  @endif
">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="hero__categories">
          <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Macam Barang</span>
          </div>
          @include('component.part.categoriesPart')
        </div>
      </div>
      <div class="col-lg-9">
        <div class="hero__search">
          <div class="hero__search__form">
            <form action="#">
              <input type="text" placeholder="Apa yang anda cari?">
              <button type="submit" class="site-btn">Cari</button>
            </form>
          </div>
          <div class="hero__search__phone">
            <div class="hero__search__phone__icon">
              <a target="_blank" href="http://wa.me/{{ \App\Biodata::where('name', 'nomorTelepon')->first()->keterangan }}">
                <i class="fa fa-phone"></i>
              </a>
            </div>
            <div class="hero__search__phone__text">
              <a target="_blank" href="http://wa.me/{{ \App\Biodata::where('name', 'nomorTelepon')->first()->keterangan }}">
                <h5>+{{ \App\Biodata::where('name', 'nomorTelepon')->first()->keterangan }}</h5>
                <span>Hubungi via whatsapp</span>
              </a>
            </div>
          </div>
        </div>
        @if (url()->current() == route('landing.index'))
          <div id="myNavbar" class="hero__item set-bg" data-setbg="{{ asset('img/banner/banner.png') }}">
            <div class="hero__text">
              <span>Mir'a Collection</span>
              <h2>Pernak-Pernik<br />Tasbih, dan lain-lain</h2>
              <p>Kediri, Jawa Timur</p>
              <a href="#featured" class="primary-btn">Beli Sekarang</a>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</section>
