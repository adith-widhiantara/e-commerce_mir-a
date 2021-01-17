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
            @foreach( $crt -> product as $pro )
            <tr>
              <td class="shoping__cart__item">
                <img src="{{ asset('img/featured/featured1.png') }}" alt="">
                <h5>
                  {{ $pro -> name }}
                </h5>
              </td>
              <td class="shoping__cart__price">
                Rp {{ $pro -> price }}
              </td>
              <td class="shoping__cart__quantity">
                <div class="quantity">
                  <div class="pro-qty">
                    <input type="text" value="{{ $pro -> pivot -> quantity }}">
                  </div>
                </div>
              </td>
              <td class="shoping__cart__total">
                Rp {{ $pro -> pivot -> subTotalPrice }}
              </td>
              <td class="shoping__cart__item__close">
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-item-{{ $crt->id }}').submit();">
                  <span class="icon_close"></span>
                </a>
                <form id="delete-item-{{ $crt->id }}" action="{{ route('cart.destroy', $crt->id) }}" method="POST" class="d-none">
                  @csrf
                  @method('delete')
                </form>
              </td>
            </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
