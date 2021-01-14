<section class="latest-product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Produk Terbaru</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <?php $count = 0; ?>
              @foreach( $newProduct as $new )
                <?php if ($count == 3) {
                  break;
                } ?>
                <a href="{{ route('shop.show', $new -> slug) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                    <img src="{{ asset('img/featured/featured1.png') }}" alt="">
                  </div>
                  <div class="latest-product__item__text">
                    <h6>{{ $new -> name }}</h6>
                    <span>Rp. {{ $new -> price }}</span>
                  </div>
                </a>
                <?php $count++; ?>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
              @foreach( $newProduct as $key => $new )
                @if( $key > 2 )
                <a href="{{ route('shop.show', $new -> slug) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                    <img src="{{ asset('img/featured/featured4.png') }}" alt="">
                  </div>
                  <div class="latest-product__item__text">
                    <h6>{{ $new -> name }}</h6>
                    <span>Rp. {{ $new -> price }}</span>
                  </div>
                </a>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Produk Terlaris</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <?php $count = 0; ?>
              @foreach( $soldProduct as $sold )
              <?php if ($count == 3) {
                break;
              } ?>
              <a href="{{ route('shop.show', $sold -> slug) }}" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{ asset('img/featured/featured7.png') }}" alt="">
                </div>
                <div class="latest-product__item__text">
                  <h6>{{ $sold -> name }}</h6>
                  <span>Rp. {{ $sold -> price }}</span>
                </div>
              </a>
              <?php $count++ ?>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
              @foreach( $soldProduct as $key => $sold )
                @if( $key > 2 )
                <a href="{{ route('shop.show', $sold -> slug) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                    <img src="{{ asset('img/featured/featured10.png') }}" alt="">
                  </div>
                  <div class="latest-product__item__text">
                    <h6>{{ $sold -> name }}</h6>
                    <span>Rp. {{ $sold -> price }}</span>
                  </div>
                </a>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Produk Terjangkau</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              <?php $count = 0; ?>
              @foreach( $priceProduct as $price )
                <?php if ($count == 3) {
                  break;
                } ?>
                <a href="{{ route('shop.show', $price -> slug) }}" class="latest-product__item">
                  <div class="latest-product__item__pic">
                    <img src="{{ asset('img/featured/featured12.png') }}" alt="">
                  </div>
                  <div class="latest-product__item__text">
                    <h6>{{ $price -> name }}</h6>
                    <span>{{ $price -> price }}</span>
                  </div>
                </a>
                <?php $count++ ?>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
              @foreach( $priceProduct as $key => $price )
                @if( $key > 2 )
                  <a href="{{ route('shop.show', $price -> slug) }}" class="latest-product__item">
                    <div class="latest-product__item__pic">
                      <img src="{{ asset('img/featured/featured15.png') }}" alt="">
                    </div>
                    <div class="latest-product__item__text">
                      <h6>{{ $price -> name }}</h6>
                      <span>{{ $price -> price }}</span>
                    </div>
                  </a>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
