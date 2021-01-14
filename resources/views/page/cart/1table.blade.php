<div class="row">
  <div class="col-lg-12">
    <div class="shoping__cart__table">
      <table>
        <thead>
          <tr>
            <th class="shoping__product">Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $cart as $crt )
            <tr>
              <td class="shoping__cart__item">
                <img src="{{ asset('img/featured/featured1.png') }}" alt="">
                <h5>{{ $crt->product->name }}</h5>
              </td>
              <td class="shoping__cart__price">
                Rp {{ $crt->product->price }}
              </td>
              <td class="shoping__cart__quantity">
                <div class="quantity">
                  <div class="pro-qty">
                    <input type="text" value="{{ $crt->buyStock }}">
                  </div>
                </div>
              </td>
              <td class="shoping__cart__total">
                Rp {{ $crt->totalPrice }}
              </td>
              <td class="shoping__cart__item__close">
                <span class="icon_close"></span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
