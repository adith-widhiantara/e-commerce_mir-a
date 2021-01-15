<div class="checkout__order">
  <h4>Pesanan Anda</h4>
  <div class="checkout__order__products">Produk <span>Total</span></div>
  <ul>
    @foreach( $cart as $crt )
      <li style="overflow: hidden">{{ $crt->product->name }} <span>Rp {{ $crt->totalPrice }}</span></li>
    @endforeach
  </ul>
  <div class="checkout__order__subtotal">Ongkos Kirim <span>$750.99</span></div>
  <div class="checkout__order__total">Total <span>$750.99</span></div>
</div>
