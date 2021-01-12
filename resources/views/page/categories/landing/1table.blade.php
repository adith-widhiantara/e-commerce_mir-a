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
          <th>Jumlah Produk</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $cat)
          <tr>
            <td>{{ $loop -> iteration }}</td>
            <td>
              <a href="{{ route('categories.show', $cat->id) }}">
                {{ $cat -> name }}
              </a>
            </td>
            <td>
              {{ $cat->product->count() }}
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Jumlah Produk</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
