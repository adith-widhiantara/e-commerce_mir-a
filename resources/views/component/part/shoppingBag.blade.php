<ul>
  <li>
    <a href="{{ route('cart.index') }}">
      <i class="fa fa-shopping-bag"></i> @auth <span>{{ App\Cart::where('user_id', Auth::id())->get()->count() }}</span> @endauth
    </a>
  </li>
</ul>
