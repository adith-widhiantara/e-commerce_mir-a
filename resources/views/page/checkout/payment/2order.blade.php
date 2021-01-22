<div class="checkout__order">
  <h4>Pesanan Anda</h4>
  <div class="checkout__order__products">Produk <span>Total</span></div>
  <ul>
    @foreach( $cart -> product as $pro )
      <li style="overflow: hidden">{{ $pro->name }} <span>Rp {{ $pro -> pivot -> subTotalPrice }}</span></li>
    @endforeach
  </ul>
  <div class="checkout__order__subtotal">Ongkos Kirim <span>Rp {{ $user -> ongkir }}</span></div>
  <div class="checkout__order__total">Total <span>Rp {{ $totalProductOngkir }}</span></div>
</div>
