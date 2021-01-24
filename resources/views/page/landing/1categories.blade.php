<section class="categories">
  <div class="container">
    <div class="row">
      <div class="categories__slider owl-carousel">
        @foreach( $categories as $cat )
          <div class="col-lg-3">
            <div class="categories__item set-bg" data-setbg="{{ asset('img/upload/categories/'.$cat -> photo) }}">
              <h5>
                <a href="#">{{ $cat -> name }}</a>
              </h5>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
