<ul>
  <li>
    <a href="{{ route('cart.index') }}">
      <i class="fa fa-shopping-bag"></i>
      @auth
        <span>
          @if( App\Cart::where('user_id', Auth::id())->get()->count() == 0 )
            0
          @else
            <?php
              $cart = App\Cart::where('user_id', Auth::id())->where('status', 0)->first();

              if ($cart == null) {
                $count = 0;
              } else {
                $count = $cart->product->count();
              }
            ?>
            {{ $count }}
          @endif
        </span>
      @endauth
    </a>
  </li>
</ul>
