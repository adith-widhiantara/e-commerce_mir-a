<section class="product-details spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="product__details__pic">
          <div class="product__details__pic__item">
            <img class="product__details__pic__item--large" src="{{ asset('img/featured/featured16.png') }}" alt="">
          </div>
          <div class="product__details__pic__slider owl-carousel">
            <img data-imgbigurl="{{ asset('img/product/tasbih digital 1.jpeg') }}" src="{{ asset('img/product/tasbih digital 1.jpeg') }}" alt="">
            <img data-imgbigurl="{{ asset('img/product/tasbih digital 2.jpg') }}" src="{{ asset('img/product/tasbih digital 2.jpg') }}" alt="">
            <img data-imgbigurl="{{ asset('img/product/tasbih digital 3.jpg') }}" src="{{ asset('img/product/tasbih digital 3.jpg') }}" alt="">
            <img data-imgbigurl="{{ asset('img/product/tasbih digital 4.jpg') }}" src="{{ asset('img/product/tasbih digital 4.jpg') }}" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="product__details__text">
          <h3>{{ $product->name }}</h3>
          <div class="product__details__rating">
            <span>{{ $product->sold }} produk terjual</span>
          </div>
          <div class="product__details__price">Rp. {{ $product->price }}</div>
          <div class="product__details__quantity">
            <div class="quantity">
              <div class="pro-qty">
                <input type="text" value="1">
              </div>
            </div>
          </div>
          <a href="#" class="primary-btn">
            Beli Sekarang
          </a>
          <ul>
            <li>
              <b>Stok Barang</b> <span>{{ $product->stock }} barang</span>
            </li>
            <li>
              <b>Berat</b> <span>{{ $product->weight }} g</span>
            </li>
            <li>
              <b>Share on</b>
              <div class="share">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="product__details__tab">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">
                Deskripsi Produk
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
              <div class="product__details__tab__desc">
                <h6>Deskripsi Produk</h6>
                <p>{{ $product->desc }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
