@if ( $product->hasPages() )
  <div class="product__pagination">
    @if ( $product->onFirstPage() )
      <a href="#">
        <i class="fas fa-chevron-left"></i>
      </a>
    @else
      <a href="{{ $product->previousPageUrl() }}">
        <i class="fas fa-chevron-left"></i>
      </a>
    @endif

    @if($product->currentPage() > 2)
      <a href="{{ $product->url(1) }}">1</a>
    @endif
    @if($product->currentPage() > 3)
      <a href="#">...</a>
    @endif

    @for ( $i = 1; $i <= $product->lastPage(); $i++ )
      @if($i >= $product->currentPage() - 1 && $i <= $product->currentPage() + 1)
        @if ($i == $product->currentPage())
          <a class="active" href="#">{{ $i }}</a>
        @else
          <a href="{{ $product->url($i) }}">{{ $i }}</a>
        @endif
      @endif
    @endfor

    @if($product->currentPage() < $product->lastPage() - 2)
      <a href="#">...</a>
    @endif
    @if($product->currentPage() < $product->lastPage() - 1)
      <a href="{{ $product->url($product->lastPage()) }}">{{ $product->lastPage() }}</a>
    @endif

    @if ($product->hasMorePages())
      <a href="{{ $product->nextPageUrl() }}">
        <i class="fas fa-chevron-right"></i>
      </a>
    @else
      <a href="#">
        <i class="fas fa-chevron-right"></i>
      </a>
    @endif
  </div>
@endif
