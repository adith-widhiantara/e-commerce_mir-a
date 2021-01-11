<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('img/logoFont.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Mir'a Collection</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/user/programmer.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Aditya Saktyawan Widhiantara</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          @if (url()->current() == route('admin.index'))
          <a href="#" class="nav-link active">
          @else
          <a href="{{ route('admin.index') }}" class="nav-link">
          @endif
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Halaman Utama Admin
            </p>
          </a>
        </li>

        @if (url()->current() == route('product.index') || url()->current() == route('product.create'))
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
        @else
        <li class="nav-item">
          <a href="#" class="nav-link">
        @endif
            <i class="nav-icon fas fa-archive"></i>
            <p>
              Daftar Produk
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if (url()->current() == route('product.index'))
              <a href="#" class="nav-link active">
              @else
              <a href="{{ route('product.index') }}" class="nav-link">
              @endif
                <i class="far fa-circle nav-icon"></i>
                <p>Lihat Produk</p>
              </a>
            </li>
            <li class="nav-item">
              @if (url()->current() == route('product.create'))
              <a href="#" class="nav-link active">
              @else
              <a href="{{ route('product.create') }}" class="nav-link">
              @endif
                <i class="far fa-circle nav-icon"></i>
                <p>Tambah Produk</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          @if (url()->current() == route('categories.index'))
          <a href="#" class="nav-link active">
          @else
          <a href="{{ route('categories.index') }}" class="nav-link">
          @endif
            <i class="fas fa-chart-bar"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Daftar Pengguna
              <!-- <span class="right badge badge-danger">Baru</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-truck-loading"></i>
            <p>
              Status Pemesanan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Belum Dikonfirmasi
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Belum Dibayar
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Belum Dikemas
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Sedang Dikirim
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Selesai
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Dibatalkan
                  <span class="right badge badge-primary">1</span>
                </p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
