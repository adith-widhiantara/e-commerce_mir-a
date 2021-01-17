<div class="col-lg-6">
  <div class="checkout__order">
    <h4>Pesanan Anda</h4>
    <div class="checkout__order__products">Produk <span>Total</span></div>
    @foreach( $cart as $crt )
      @foreach( $crt->product as $pro )
      <ul>
        <li style="overflow: hidden">{{ $pro -> name }} <span>Rp {{ $pro -> pivot -> subTotalPrice }}</span></li>
        {{--
          --}}
      </ul>
      @endforeach
    @endforeach
    <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
    <!-- <div class="checkout__order__total">Total <span>$750.99</span></div> -->
    <div class="checkout__order__total">Total <span>Rp {{ $totalPricePivot }}</span></div>
    <!-- <button type="submit" class="site-btn">Lanjut pembayaran</button> -->
    @if ( $user->ongkir == null )
    <a href="{{ route('user.status') }}" class="site-btn">Simpan</a>
    @else
    <a href="{{ route('checkout.dropboxPayment') }}" class="site-btn">Lanjut Pembayaran</a>
    @endif
  </div>
</div>
