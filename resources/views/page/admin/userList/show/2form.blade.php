<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Data</h3>
  </div>
  <form class="" action="{{ route('admin.send.showUser', $user->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat" value="{{ $user -> alamat }}" disabled>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Kota</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kota" value="{{ $user -> kota }}" disabled>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Kode Pos</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Pos" value="{{ $user -> kodePos }}" disabled>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga Ongkos Kirim</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Harga Ongkos Kirim" value="{{ $user -> ongkir }}" name="ongkir">
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>
