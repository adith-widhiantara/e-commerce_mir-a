<div class="sidebar__item">
  <div class="latest-product__text">
    <h4>Produk Terbaru</h4>
    <div class="latest-product__slider owl-carousel">
      <div class="latest-prdouct__slider__item">
        <?php $count = 0; ?>
        @foreach( $newProduct as $new )
          <?php if ($count == 3) {
            break;
          } ?>
          <a href="{{ route('shop.show', $new->slug) }}" class="latest-product__item">
            <div class="latest-product__item__pic">
              @foreach( $new->imageproduct as $image )
                @if( $loop->first )
                  <img src="{{ asset('img/upload/product/'.$image->name) }}" alt="">
                @endif
              @endforeach
            </div>
            <div class="latest-product__item__text">
              <h6>{{ $new -> name }}</h6>
              <span>Rp. {{ $new -> price }}</span>
            </div>
          </a>
          <?php $count++ ?>
        @endforeach
      </div>
      <div class="latest-prdouct__slider__item">
        @foreach( $newProduct as $key => $new )
          @if( $key > 2 )
          <a href="{{ route('shop.show', $new->slug) }}" class="latest-product__item">
            <div class="latest-product__item__pic">
              @foreach( $new->imageproduct as $image )
                @if( $loop->first )
                  <img src="{{ asset('img/upload/product/'.$image->name) }}" alt="">
                @endif
              @endforeach
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
