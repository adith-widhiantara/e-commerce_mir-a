<div class="filter__item">
  <div class="row">
    <div class="col-lg-4 col-md-5">

    </div>
    <div class="col-lg-4 col-md-4">
      <div class="filter__found">
        <h6><span>{{ $product->count() }}</span> Produk</h6>
      </div>
    </div>
    <div class="col-lg-4 col-md-3">

    </div>
  </div>
</div>

<div class="row">
  @foreach( $product as $pro )
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="product__item">
        @foreach( $pro->imageproduct as $image )
          @if( $loop->first )
            <div class="product__item__pic set-bg" data-setbg="{{ asset('img/upload/product/'.$image->name) }}">
          @endif
        @endforeach
        </div>
        <div class="product__item__text">
          <h6><a href="{{ route('shop.show', $pro->slug) }}">{{ $pro -> name }}</a></h6>
          <h5>Rp. {{ $pro -> price }}</h5>
        </div>
      </div>
    </div>
  @endforeach
</div>
