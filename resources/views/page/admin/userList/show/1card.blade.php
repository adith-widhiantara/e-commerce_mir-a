<div class="card card-widget widget-user">
  <div class="widget-user-header bg-primary">
    <h3 class="widget-user-username">{{ $user -> name }}</h3>
  </div>
  <div class="widget-user-image">
    <img class="img-circle elevation-2" src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="User Avatar">
  </div>
  <div class="card-footer">
    <div class="row">
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">{{ $user->cart->count() }}</h5>
          <span class="description-text">Keranjang</span>
        </div>
      </div>
      <div class="col-sm-4 border-right">
        <div class="description-block">
          @if( $user -> ongkir == null )
          <h5 class="description-header">Belum Terisi</h5>
          @else
          <h5 class="description-header">{{ $user -> ongkir }}</h5>
          @endif
          <span class="description-text">Ongkir</span>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="description-block">
          <h5 class="description-header">{{ $user -> nomorTelepon }}</h5>
          <span class="description-text">Nomor Telepon</span>
        </div>
      </div>
    </div>
  </div>
</div>
