@if (count($breadcrumbs))
  @if (url()->current() == route('shop.index'))
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcumb/breadcumb1.png') }}">
  @elseif (url()->current() == route('shop.show', 1))
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcumb/breadcumb2.png') }}">
  @elseif (url()->current() == route('cart.index'))
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcumb/breadcumb3.png') }}">
  @else
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcumb/breadcumb4.png') }}">
  @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2>Mir'a Collection</h2>
            <div class="breadcrumb__option">
              @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                  <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                @else
                  <span>{{ $breadcrumb->title }}</span>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endif
