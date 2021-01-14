<div class="col-lg-6">
  <div class="checkout__order">
    <h4>Pesanan Anda</h4>
    <div class="checkout__order__products">Produk <span>Total</span></div>
    @foreach( $cart as $crt )
      <ul>
        <li style="overflow: hidden">{{ $crt -> product -> name }} <span>Rp {{ $crt -> totalPrice }}</span></li>
      </ul>
    @endforeach
    <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
    <!-- <div class="checkout__order__total">Total <span>$750.99</span></div> -->
    <div class="checkout__order__total">Total <span>Rp {{ $totalPrice }}</span></div>
    <!-- <button type="submit" class="site-btn">Lanjut pembayaran</button> -->
    <a href="{{ route('checkout.dropboxPayment') }}" class="site-btn">Lanjut pembayaran</a>
  </div>
</div>
