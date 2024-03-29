<section id="featured" class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Produk Kami</h2>
        </div>
        <div class="featured__controls">
          <ul>
            <li class="active" data-filter="*">Semua</li>
            @foreach($categories as $cat)
              <li data-filter=".{{ $cat -> slug }}">{{ $cat -> name }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <div class="row featured__filter">
      @foreach( $product as $pro )
        <div class="col-lg-3 col-md-4 col-sm-6 mix @foreach( $pro->categories as $cat ) {{ $cat->slug }} @endforeach">
          <div class="featured__item">
            @foreach( $pro->imageproduct as $image )
              @if ($loop -> first)
                <a href="{{ route('shop.show', $pro -> slug) }}">
                  <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/upload/product/'.$image -> name) }}"></div>
                </a>
              @endif
            @endforeach
              <div class="featured__item__text">
                <h6>
                  <a href="{{ route('shop.show', $pro -> slug) }}">{{ $pro->name }}</a>
                </h6>
                <h5>Rp. {{ $pro->price }}</h5>
              </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
