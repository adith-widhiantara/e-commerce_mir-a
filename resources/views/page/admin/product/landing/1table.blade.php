<div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
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
        @foreach($product as $pro)
          <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>
              <a href="{{ route('product.show', $pro->slug) }}">
                {{ $pro -> name }}
              </a>
            </td>
            <td>
              {{ $pro -> price }}
            </td>
            <td>
              {{ $pro -> stock }}
            </td>
            <td>
              {{ $pro -> sold }}
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
