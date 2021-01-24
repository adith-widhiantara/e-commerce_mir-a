@foreach( $cart as $crt )
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Keranjang {{ $loop -> iteration }}</h3>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <div class="col-12">
          <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-default-{{ $crt -> id }}">
            Lihat Bukti Transfer
          </button>
        </div>
        <div class="col-12">
          <form class="my-3" action="{{ route('status.belumDikemas.send', $crt -> id) }}" method="post">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nomor Resi" value="{{ $crt -> resi }}" name="resi">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Jasa Pengiriman" value="{{ $crt -> pengiriman }}" name="pengiriman">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info btn-block">
                Simpan
              </button>
            </div>
          </form>

        </div>
      </div>

      <div class="modal fade" id="modal-default-{{ $crt -> id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Bukti Transfer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="{{ asset('img/upload/buktiTransfer/'. $crt -> buktiTransfer) }}" alt="" class="img-fluid">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <table id="example{{ $loop -> iteration }}" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Jumlah barang</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $crt -> product as $pro )
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
            <th>Nama Barang</th>
            <th>Jumlah barang</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endforeach
