<div class="row">
  <div class="col-md-6">
    <div class="card card-secondary">
      <div class="card-header">
        <h3 class="card-title">Banyak Produk Berdasarkan Kategori</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Penjualan Produk Terbanyak</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-group">
          @foreach( $highestSoldProduct as $high )
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $high -> name }}
              <span class="badge badge-primary badge-pill">{{ $high -> sold }}</span>
            </li>
          @endforeach
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Lihat Semua Produk
            <a href="{{ route('product.index') }}" class="btn btn-primary">
              <i class="fas fa-angle-right"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
