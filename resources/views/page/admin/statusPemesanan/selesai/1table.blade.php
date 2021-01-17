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
          <th>Jumlah Barang</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $cart as $crt )
          <tr>
            <td>
              {{ $loop -> iteration }}
            </td>
            <td>
              <a href="{{ route('status.selesai.user', $crt -> id) }}">
                {{ $crt -> user -> name }}
              </a>
            </td>
            <td>
              {{ $crt -> product -> count() }}
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Jumlah Barang</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
