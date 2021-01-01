<footer class="footer spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer__about">
          <div class="footer__about__logo">
            <a href="{{ route('landing.index') }}"><img src="{{ asset('img/logo/logo2.png') }}" alt=""></a>
          </div>
          <ul>
            <li>Alamat: 60-49 Road 11378 New York</li>
            <li>Phone: +62857 0709 5995</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
        <div class="footer__widget">
          <h6>Tentang Saya</h6>
          <ul>
            <li>
              <a href="#">Tentang Saya</a>
            </li>
            <li>
              <a href="#">Tentang Toko Saya</a>
            </li>
          </ul>
          <ul>
            <li>
              <a target="_blank" href="http://wa.me/6285707095995">
                Hubungi Saya
              </a>
            </li>
            <li>
              <a href="#">Testimoni</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="footer__widget">
          <h6>Sosial Media Saya</h6>
          <div class="footer__widget__social">
            @include('component.part.sosialMedia')
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
