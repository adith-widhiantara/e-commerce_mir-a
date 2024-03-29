<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ route('landing.index') }}" class="nav-link">Halaman Utama</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Keterangan</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
              </h3>
              <p class="text-sm">0 Pesanan</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Yang Lalu</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('lte/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
              </h3>
              <p class="text-sm">0 Pesanan</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Yang Lalu</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="{{ asset('lte/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
              </h3>
              <p class="text-sm">0 Pesanan</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Yang Lalu</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">Lihat Seluruh Pengguna</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        @if( \App\product::where('stock', '<', 1)->get()->count() != 0 )
        <span class="badge badge-danger navbar-badge">{{ \App\product::where('stock', '<', 1)->get()->count() }}</span>
        @endif
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Status Pesanan</span>
        <div class="dropdown-divider"></div>

        @if( \App\product::where('stock', '<', 1)->get()->count() != 0 )
        <a href="{{ route('product.index') }}#lowtable" class="dropdown-item">
        @else
        <a href="#" class="dropdown-item">
        @endif
          <i class="fas fa-exclamation mr-2"></i> Stok Barang Sedikit
          <span class="float-right text-muted text-sm">{{ \App\product::where('stock', '<', 1)->get()->count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> Belum Dikonfirmasi
          <?php
          $belumDikonfirmasi = DB::table('carts')
                    ->join('users', 'carts.user_id', '=', 'users.id')
                    ->select(DB::raw('count(*) as jumlah, name'))
                    ->where('status', '=', 1)
                    ->where('ongkir', '=', null)
                    ->groupBy('name')
                    ->get();
           ?>
          <span class="float-right text-muted text-sm">{{ $belumDikonfirmasi->count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-wallet mr-2"></i> Belum Dibayar
          <?php
            $belumDibayar = DB::table('carts')
                              ->where('status', '=', 2)
                              ->get();
          ?>
          <span class="float-right text-muted text-sm">{{ $belumDibayar -> count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-box-open mr-2"></i> Belum Dikemas
          <?php
            $belumDikemas = DB::table('carts')
                              ->where('status', '=', 3)
                              ->get();
          ?>
          <span class="float-right text-muted text-sm">{{ $belumDikemas -> count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-truck-loading mr-2"></i> Sedang Dikirim
          <?php
            $sedangDikirim = DB::table('carts')
                                ->where('status', '=', 4)
                                ->get();
          ?>
          <span class="float-right text-muted text-sm">{{ $sedangDikirim -> count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-check mr-2"></i> Selesai
          <?php
            $selesai = DB::table('carts')
                          ->where('status', '=', 5)
                          ->get();
          ?>
          <span class="float-right text-muted text-sm">{{ $selesai -> count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item">
          <i class="fas fa-ban mr-2"></i> Dibatalkan
          <?php
            $dibatalkan = DB::table('carts')
                            ->where('status', '=', 6)
                            ->get();
          ?>
          <span class="float-right text-muted text-sm">{{ $dibatalkan -> count() }}</span>
        </a>

        <div class="dropdown-divider"></div>

        <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Status</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </li>
  </ul>
</nav>
