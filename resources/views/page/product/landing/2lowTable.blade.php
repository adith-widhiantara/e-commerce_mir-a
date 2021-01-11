<div class="card" id="lowtable">
  <div class="card-header">
    <h3 class="card-title">{{ __('Daftar Barang Sedikit') }}</h3>
  </div>
  <div class="card-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Terjual</th>
        </tr>
      </thead>
      <tbody>
        @foreach($lowStockProduct as $prolow)
          <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>
              <a href="{{ route('product.show', $prolow->slug) }}">
                {{ $prolow -> name }}
              </a>
            </td>
            <td>
              {{ $prolow -> price }}
            </td>
            <td>
              {{ $prolow -> stock }}
            </td>
            <td>
              {{ $prolow -> sold }}
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Terjual</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
