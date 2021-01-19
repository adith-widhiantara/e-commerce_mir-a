<div class="row">

  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <?php
          $belumDikonfirmasi = DB::table('carts')
                                ->join('users', 'carts.user_id', '=', 'users.id')
                                ->select(DB::raw('count(*) as jumlah, name'))
                                ->where('status', '=', 1)
                                ->where('ongkir', '=', null)
                                ->groupBy('name')
                                ->get();
         ?>
        <h3>{{ $belumDikonfirmasi->count() }}</h3>
        <p>Belum Dikonfirmasi</p>
      </div>
      <div class="icon">
        <i class="fas fa-envelope"></i>
      </div>
      <a href="{{ route('status.belumDikonfirmasi') }}" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <?php
          $belumDibayar = DB::table('carts')
                            ->where('status', '=', 2)
                            ->get();
        ?>
        <h3>{{ $belumDibayar -> count() }}</h3>
        <p>Belum Dibayar</p>
      </div>
      <div class="icon">
        <i class="fas fa-wallet"></i>
      </div>
      <a href="{{ route('status.belumDibayar') }}" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <?php
          $belumDikemas = DB::table('carts')
                            ->where('status', '=', 3)
                            ->get();
        ?>
        <h3>{{ $belumDikemas -> count() }}</h3>
        <p>Belum Dikemas</p>
      </div>
      <div class="icon">
        <i class="fas fa-box-open"></i>
      </div>
      <a href="{{ route('status.belumDikemas') }}" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <?php
          $sedangDikirim = DB::table('carts')
                              ->where('status', '=', 4)
                              ->get();
        ?>
        <h3>{{ $sedangDikirim -> count() }}</h3>
        <p>Sedang Dikirim</p>
      </div>
      <div class="icon">
        <i class="fas fa-truck-loading"></i>
      </div>
      <a href="{{ route('status.sedangDikirim') }}" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>

</div>
