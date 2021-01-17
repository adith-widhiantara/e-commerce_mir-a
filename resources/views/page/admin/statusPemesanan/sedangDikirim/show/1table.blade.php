<div class="card">
  <div class="card-header">
    <h3 class="card-title">Daftar Keranjang</h3>
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
        @foreach( $cart -> product as $pro )
          <tr>
            <td>
              {{ $loop -> iteration }}
            </td>
            <td>
              <a href="#">
                {{ $pro -> name }}
              </a>
            </td>
            <td>
              {{ $pro -> pivot -> quantity }}
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
