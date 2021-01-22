<div class="col-lg-6">
  <div class="checkout__order">
    <h4>Pesanan Anda</h4>
    <div class="checkout__order__products">Produk <span>Total</span></div>
      @foreach( $cart->product as $pro )
        <ul>
          <li style="overflow: hidden">{{ $pro -> name }} <span>Rp {{ $pro -> pivot -> subTotalPrice }}</span></li>
        </ul>
      @endforeach
    <!-- <div class="checkout__order__subtotal">Subtotal <span>$750.99</span></div> -->
    <!-- <div class="checkout__order__total">Total <span>$750.99</span></div> -->
    <div class="checkout__order__total">Total <span>Rp {{ $totalPricePivot }}</span></div>
    <!-- <button type="submit" class="site-btn">Lanjut pembayaran</button> -->
    <button type="submit" class="site-btn">
      Simpan
    </button>
  </div>
</div>
