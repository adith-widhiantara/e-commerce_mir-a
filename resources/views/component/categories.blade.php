<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="hero__categories">
          <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>Macam Barang</span>
          </div>
          <ul>
            <li>
              <a href="#">Tasbih</a>
            </li>
            <li>
              <a href="#">Bros</a>
            </li>
            <li>
              <a href="#">Baju Muslim</a>
            </li>
            <li>
              <a href="#">Kopiah</a>
            </li>
            <li>
              <a href="#">Kerudung</a>
            </li>
          </ul>
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
              <a href="#">
                <i class="fa fa-phone"></i>
              </a>
            </div>
            <div class="hero__search__phone__text">
              <a target="_blank" href="http://wa.me/6285707095995">
                <h5>+628570709595</h5>
                <span>Hubungi via whatsapp</span>
              </a>
            </div>
          </div>
        </div>
        @if (url()->current() == route('landing.index'))
          <div class="hero__item set-bg" data-setbg="{{ asset('img/banner/banner.png') }}">
            <div class="hero__text">
              <span>Mir'a Collection</span>
              <h2>Pernak-Pernik<br />Tasbih, dan lain-lain</h2>
              <p>Kediri, Jawa Timur</p>
              <a href="#" class="primary-btn">Beli Sekarang</a>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</section>
