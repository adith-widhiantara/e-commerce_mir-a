<div class="row">
  <div class="col-lg-12">
    <div class="shoping__cart__btns">
      <a href="{{ route('shop.index') }}" class="primary-btn cart-btn">Lanjutkan Belanja</a>
      <a href="{{ route('cart.index') }}" class="primary-btn cart-btn cart-btn-right">
        <span class="icon_loading"></span>
        Perbarui Keranjang
      </a>
    </div>
  </div>
  <div class="col-lg-6"></div>
  <div class="col-lg-6">
    <div class="shoping__checkout">
      <h5>Cart Total</h5>
      <ul>
        <!-- <li>Subtotal<span></span></li> -->
        <!-- <li>Total <span></span></li> -->
        <li>Total (Belum termasuk ongkir)<span>Rp {{ $totalPrice }}</span></li>
      </ul>
      <a href="{{ route('checkout.index') }}" class="primary-btn">Lanjut Pembayaran</a>
    </div>
  </div>
</div>
